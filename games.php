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
      <span>Back to Main Menu</span>
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
      <button type="button" class="item-box reveal" data-dialog-open="dialog-orcs-world">
        <img class="item-media media-games" src="/assets/img/icon-orcs-world-banner.webp" alt="Orc's World banner" width="900" height="420">
        <h3 class="item-title">Orc's World</h3>
        <p class="item-desc">Our indie Minecraft server — survival, community builds, and the occasional orc invasion.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-orcs-world" class="link-dialog" aria-labelledby="dialog-orcs-world-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <img class="item-media media-games" src="/assets/img/icon-orcs-world-banner.webp" alt="Orc's World banner" width="900" height="420">
          <h3 id="dialog-orcs-world-title">Orc's World</h3>
          <p class="dialog-desc">Choose where to go:</p>
          <div class="dialog-links">
            <a class="text-link" href="https://orcsworld.net" target="_blank" rel="noopener">
              Visit orcsworld.net <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
