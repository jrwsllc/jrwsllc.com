<?php
/**
 * Contact form handler for JRWS LLC.
 *
 * Validates and sanitizes input server-side (never trust the client),
 * rejects obvious bots via a honeypot field, sends the message with
 * PHP's built-in mail(), and redirects back to the contact section
 * with a ?sent=1 / ?sent=0 flag so index.php can show a result message
 * without a full page reload beyond the redirect itself.
 *
 * NOTE: mail() depends on the host's mail transfer agent being
 * correctly configured (SPF/DKIM etc). This is common to be unreliable
 * on shared hosting. If messages aren't arriving reliably, swap this
 * out for PHPMailer configured with SMTP credentials instead — not
 * needed for the initial build.
 */

declare(strict_types=1);

const RECIPIENT_EMAIL = 'hello@jrwsllc.com';

function redirect_with_result(bool $success): void
{
    $flag = $success ? '1' : '0';
    header('Location: /index.php?sent=' . $flag . '#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php#contact');
    exit;
}

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

$mailSubject = 'JRWS LLC contact form: ' . $safeSubject;

$body  = "You have a new message from the JRWS LLC contact form.\n\n";
$body .= "Name: {$safeName}\n";
$body .= "Email: {$safeEmail}\n";
$body .= "Subject: {$safeSubject}\n\n";
$body .= "Message:\n{$safeMessage}\n";

$headers   = [];
$headers[] = 'From: JRWS LLC Website <no-reply@jrwsllc.com>';
$headers[] = 'Reply-To: ' . $safeEmail;
$headers[] = 'X-Mailer: PHP/' . phpversion();

$success = mail(
    RECIPIENT_EMAIL,
    $mailSubject,
    $body,
    implode("\r\n", $headers)
);

redirect_with_result($success);
