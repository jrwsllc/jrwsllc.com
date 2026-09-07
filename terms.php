<?php
$pageTitle       = "Terms of Use — JRWS LLC";
$pageDescription = "Terms of Use for the JRWS LLC website.";
$pageUrl         = "https://jrwsllc.com/terms";
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
    <h1>Terms of Use</h1>
    <p>Last updated: <?php echo date("F Y"); ?></p>
  </div>
</section>

<section>
  <div class="container prose reveal">
    <!-- PLACEHOLDER: this is boilerplate, not legal advice — have an actual
         Terms of Use drafted (or reviewed) by a lawyer before relying on it -->
    <p>
      By using jrwsllc.com, you agree to use this site for lawful purposes
      only. The apps, books, and game server linked from this site are each
      subject to their own store terms, publisher terms, or server rules —
      this page covers use of the jrwsllc.com website itself.
    </p>
    <p>
      Content on this site — including text, graphics, and the JRWS LLC
      name and logo — belongs to JRWS LLC unless otherwise noted, and
      shouldn't be reused without permission. We may update these terms or
      the site's content at any time without notice.
    </p>
    <p>
      Questions about these terms? <a href="/contact">Contact us</a>.
    </p>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
