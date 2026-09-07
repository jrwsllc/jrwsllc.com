<?php
$pageTitle       = "Games — JRWS LLC";
$pageDescription = "Orc's World — an indie Minecraft server run by JRWS LLC.";
$pageUrl         = "https://jrwsllc.com/games";
require __DIR__ . '/includes/header.php';
?>

<header class="subpage-header">
  <div class="container">
    <a class="subpage-logo-link" href="/">
      <img src="/assets/img/logo.png" alt="JRWS LLC home" width="80" height="80">
      <span>Back to JRWS LLC</span>
    </a>
  </div>
</header>

<section class="page-hero">
  <div class="container reveal">
    <span class="eyebrow">Games</span>
    <h1>Games</h1>
    <p>A server we run for fun — come say hi.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="item-grid single-item stagger">
      <a class="item-box reveal" href="https://orcsworld.net" target="_blank" rel="noopener" aria-label="Orc's World — visit orcsworld.net">
        <div class="item-media media-games" aria-hidden="true">Orc's World banner</div>
        <h3 class="item-title">Orc's World</h3>
        <p class="item-desc">Our indie Minecraft server — survival, community builds, and the occasional orc invasion. Visit the site for connection details.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
