<?php
/**
 * Contact form handler for JRWS LLC.
 *
 * Validates and sanitizes input server-side (never trust the client),
 * rejects obvious bots via a honeypot field, and sends the message via
 * SMTP (PHPMailer, vendored in includes/phpmailer/ — no Composer) when
 * includes/mail-config.php is present, since PHP's built-in mail() is
 * frequently unreliable on shared hosting (SPF/DKIM rejections). If no
 * mail-config.php exists yet, it falls back to mail() so the form still
 * works out of the box.
 *
 * To enable SMTP: copy includes/mail-config.example.php to
 * includes/mail-config.php and fill in real mailbox credentials. That
 * file is gitignored on purpose — edit it directly on the server.
 */

declare(strict_types=1);

const RECIPIENT_EMAIL = 'hello@jrwsllc.com';
const ERROR_LOG_FILE = __DIR__ . '/contact-form-errors.log';

function redirect_with_result(bool $success): void
{
    $flag = $success ? '1' : '0';
    header('Location: /contact?sent=' . $flag);
    exit;
}

function log_mail_failure(string $message): void
{
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
    error_log($line, 3, ERROR_LOG_FILE);
}

/**
 * Sends via SMTP (PHPMailer) if includes/mail-config.php is present,
 * otherwise falls back to PHP's built-in mail().
 */
function send_contact_email(string $safeName, string $safeEmail, string $safeSubject, string $body): bool
{
    $mailConfigPath = __DIR__ . '/includes/mail-config.php';

    if (!file_exists($mailConfigPath)) {
        $headers   = [];
        $headers[] = 'From: JRWS LLC Website <no-reply@jrwsllc.com>';
        $headers[] = 'Reply-To: ' . $safeEmail;
        $headers[] = 'X-Mailer: PHP/' . phpversion();

        $ok = mail(RECIPIENT_EMAIL, 'JRWS LLC contact form: ' . $safeSubject, $body, implode("\r\n", $headers));

        if (!$ok) {
            log_mail_failure('mail() returned false (no mail-config.php present, used built-in mail()).');
        }

        return $ok;
    }

    require_once $mailConfigPath;
    require_once __DIR__ . '/includes/phpmailer/Exception.php';
    require_once __DIR__ . '/includes/phpmailer/PHPMailer.php';
    require_once __DIR__ . '/includes/phpmailer/SMTP.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->Port       = SMTP_PORT;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION === 'ssl'
            ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
            : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(RECIPIENT_EMAIL);
        $mail->addReplyTo($safeEmail, $safeName);

        $mail->Subject = 'JRWS LLC contact form: ' . $safeSubject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        log_mail_failure('PHPMailer error: ' . $mail->ErrorInfo);
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot: real visitors never fill this in. Bots filling every field
    // blindly will trip it, and we silently pretend success so they don't
    // learn anything from the response.
    if (!empty($_POST['website'])) {
        redirect_with_result(true);
    }

    $name    = trim((string)($_POST['name'] ?? ''));
    $email   = trim((string)($_POST['email'] ?? ''));
    $subject = trim((string)($_POST['subject'] ?? ''));
    $message = trim((string)($_POST['message'] ?? ''));

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        redirect_with_result(false);
    }

    // Reject oversized input outright — a legitimate contact message
    // doesn't need this much room, and it keeps someone from wasting
    // resources (or the recipient's inbox) with a giant payload.
    if (mb_strlen($name) > 200 || mb_strlen($email) > 200 || mb_strlen($subject) > 300 || mb_strlen($message) > 5000) {
        redirect_with_result(false);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect_with_result(false);
    }

    // Strip anything that could be used for header injection via newlines.
    $name    = str_replace(["\r", "\n"], '', $name);
    $email   = str_replace(["\r", "\n"], '', $email);
    $subject = str_replace(["\r", "\n"], '', $subject);

    // Sanitize for safe use in the email body / headers.
    $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    $body  = "You have a new message from the JRWS LLC contact form.\n\n";
    $body .= "Name: {$safeName}\n";
    $body .= "Email: {$safeEmail}\n";
    $body .= "Subject: {$safeSubject}\n\n";
    $body .= "Message:\n{$safeMessage}\n";

    $success = send_contact_email($safeName, $safeEmail, $safeSubject, $body);

    redirect_with_result($success);
}

// GET: render the contact page itself (form lives here, not on the homepage).
$sent            = $_GET['sent'] ?? null;
$pageTitle       = "Contact — JRWS LLC";
$pageDescription = "Get in touch with JRWS LLC.";
$pageUrl         = "https://jrwsllc.com/contact";
require __DIR__ . '/includes/header.php';
?>

<header class="subpage-header">
  <div class="container">
    <a class="subpage-logo-link" href="/">
      <img src="/assets/img/logo.png" alt="JRWS LLC home" width="80" height="80">
      <span>Back to Main Menu</span>
    </a>
  </div>
</header>

<section class="page-hero dot-grid">
  <div class="container reveal">
    <span class="eyebrow">Contact</span>
    <h1>Get in touch</h1>
    <p>Questions, feedback, or just want to say hi? Send us a message.</p>
  </div>
</section>

<section class="contact">
  <div class="container">
    <?php if ($sent === '1'): ?>
      <div class="form-message success" role="status">Thanks — your message has been sent. We'll get back to you soon.</div>
    <?php elseif ($sent === '0'): ?>
      <div class="form-message error" role="alert">Something went wrong sending your message. Please check the form and try again.</div>
    <?php endif; ?>

    <form class="contact-form reveal" action="/contact" method="POST" novalidate>
      <div class="form-row">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required autocomplete="name" maxlength="200">
      </div>

      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required autocomplete="email" maxlength="200">
      </div>

      <div class="form-row">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required maxlength="300">
      </div>

      <div class="form-row">
        <label for="message">Message</label>
        <textarea id="message" name="message" required maxlength="5000"></textarea>
      </div>

      <!-- Honeypot: real visitors never see or fill this in. -->
      <div class="form-row hp-field" aria-hidden="true">
        <label for="website">Leave this field blank</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
      </div>

      <button type="submit" class="btn">Send Message</button>
    </form>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
