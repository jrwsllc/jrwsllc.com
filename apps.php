<?php
$pageTitle       = "Apps — JRWS LLC";
$pageDescription = "SFX Library and SFX Library+ — sound effect apps from JRWS LLC.";
$pageUrl         = "https://jrwsllc.com/apps";
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
    <span class="eyebrow">Apps</span>
    <h1>Apps</h1>
    <p>Tools we built because we needed them ourselves.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="item-grid stagger">
      <button type="button" class="item-box reveal" data-dialog-open="dialog-sfx-library">
        <div class="item-media media-apps" aria-hidden="true">SFX Library icon</div>
        <h3 class="item-title">SFX Library</h3>
        <p class="item-desc">A curated sound-effects library for creators, ready to browse, preview, and drop into your project.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-sfx-library" class="link-dialog" aria-labelledby="dialog-sfx-library-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <div class="item-media media-apps" aria-hidden="true">SFX Library icon</div>
          <h3 id="dialog-sfx-library-title">SFX Library</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <!-- PLACEHOLDER: replace with real App Store link -->
            <a class="badge-link" href="#" target="_blank" rel="noopener">
              <img src="/assets/img/app-store-badge.svg" alt="Download on the App Store" width="135" height="40">
            </a>
            <!-- PLACEHOLDER: replace with a real link, or delete this row if there's only one place to get the app -->
            <a class="text-link" href="#" target="_blank" rel="noopener">
              Visit Website <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>

      <button type="button" class="item-box reveal" data-dialog-open="dialog-sfx-library-plus">
        <div class="item-media media-apps" aria-hidden="true">SFX Library+ icon</div>
        <h3 class="item-title">SFX Library+</h3>
        <p class="item-desc">The Pro edition: a larger catalog, offline packs, and extra export options for power users.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-sfx-library-plus" class="link-dialog" aria-labelledby="dialog-sfx-library-plus-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <div class="item-media media-apps" aria-hidden="true">SFX Library+ icon</div>
          <h3 id="dialog-sfx-library-plus-title">SFX Library+</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <!-- PLACEHOLDER: replace with real App Store link -->
            <a class="badge-link" href="#" target="_blank" rel="noopener">
              <img src="/assets/img/app-store-badge.svg" alt="Download on the App Store" width="135" height="40">
            </a>
            <!-- PLACEHOLDER: replace with a real link, or delete this row if there's only one place to get the app -->
            <a class="text-link" href="#" target="_blank" rel="noopener">
              Visit Website <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
