<?php
$pageTitle       = "Privacy Policy — JRWS LLC";
$pageDescription = "Privacy Policy for the JRWS LLC website.";
$pageUrl         = "https://jrwsllc.com/privacy";
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

<section class="page-hero">
  <div class="container reveal">
    <span class="eyebrow">Legal</span>
    <h1>Privacy Policy</h1>
    <p>Last updated: <?php echo date("F Y"); ?></p>
  </div>
</section>

<section>
  <div class="container prose reveal">
    <!-- PLACEHOLDER: this is boilerplate, not legal advice — have an actual
         Privacy Policy drafted (or reviewed) by a lawyer before relying on
         it, and make sure it accurately reflects what this site and your
         apps actually collect -->
    <p>
      This site's contact form collects the name, email address, and
      message you submit, solely to reply to you. That information is sent
      to JRWS LLC by email and isn't sold or shared with third parties.
    </p>
    <p>
      This website doesn't use cookies or analytics of its own. It links
      out to third-party services — app stores, Amazon, and the Orc's
      World game server — each of which has its own privacy practices
      outside of our control.
    </p>
    <p>
      Questions about this policy? <a href="/contact">Contact us</a>.
    </p>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
