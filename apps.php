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
        <img class="item-media media-apps" src="/assets/img/icon-sfx-library-banner.webp" alt="SFX Library app icon" width="900" height="420">
        <h3 class="item-title">SFX Library</h3>
        <p class="item-desc">A curated sound-effects library for creators, ready to browse, preview, and drop into your project.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-sfx-library" class="link-dialog" aria-labelledby="dialog-sfx-library-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <img class="item-media media-apps" src="/assets/img/icon-sfx-library-banner.webp" alt="SFX Library app icon" width="900" height="420">
          <h3 id="dialog-sfx-library-title">SFX Library</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <a class="badge-link" href="https://apps.apple.com/us/app/sfx-library/id6738878793" target="_blank" rel="noopener">
              <img src="/assets/img/app-store-badge.svg" alt="Download on the App Store" width="135" height="40">
            </a>
            <a class="badge-link" href="https://play.google.com/store/apps/details?id=com.jonathanstinson.sfxlibrary" target="_blank" rel="noopener">
              <img src="/assets/img/google-play-badge.svg" alt="Get it on Google Play" width="180" height="53">
            </a>
            <a class="badge-link" href="https://www.amazon.com/gp/product/B0FJJBLQ2T" target="_blank" rel="noopener">
              <img src="/assets/img/amazon-appstore-badge.png" alt="Available at Amazon Appstore" width="902" height="312">
            </a>
          </div>
        </div>
      </dialog>

      <button type="button" class="item-box reveal" data-dialog-open="dialog-sfx-library-plus">
        <img class="item-media media-apps" src="/assets/img/icon-sfx-library-plus-banner.webp" alt="SFX Library+ app icon" width="900" height="420">
        <h3 class="item-title">SFX Library+</h3>
        <p class="item-desc">The Pro edition: a larger catalog, offline packs, and extra export options for power users.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-sfx-library-plus" class="link-dialog" aria-labelledby="dialog-sfx-library-plus-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <img class="item-media media-apps" src="/assets/img/icon-sfx-library-plus-banner.webp" alt="SFX Library+ app icon" width="900" height="420">
          <h3 id="dialog-sfx-library-plus-title">SFX Library+</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <a class="badge-link" href="https://apps.apple.com/us/app/sfx-library/id6748284356" target="_blank" rel="noopener">
              <img src="/assets/img/app-store-badge.svg" alt="Download on the App Store" width="135" height="40">
            </a>
            <a class="badge-link" href="https://play.google.com/store/apps/details?id=com.jonathanstinson.sfxlibraryplus" target="_blank" rel="noopener">
              <img src="/assets/img/google-play-badge.svg" alt="Get it on Google Play" width="180" height="53">
            </a>
            <a class="badge-link" href="https://www.amazon.com/gp/product/B0FNLZ4B49" target="_blank" rel="noopener">
              <img src="/assets/img/amazon-appstore-badge.png" alt="Available at Amazon Appstore" width="902" height="312">
            </a>
          </div>
        </div>
      </dialog>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
