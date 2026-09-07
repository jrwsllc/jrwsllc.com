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
      <!-- PLACEHOLDER: replace with real app store link -->
      <a class="item-box reveal" href="#" target="_blank" rel="noopener" aria-label="SFX Library — view on the App Store">
        <div class="item-media media-apps" aria-hidden="true">SFX Library icon</div>
        <h3 class="item-title">SFX Library</h3>
        <p class="item-desc">A curated sound-effects library for creators, ready to browse, preview, and drop into your project.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>

      <!-- PLACEHOLDER: replace with real app store link -->
      <a class="item-box reveal" href="#" target="_blank" rel="noopener" aria-label="SFX Library+ — view on the App Store">
        <div class="item-media media-apps" aria-hidden="true">SFX Library+ icon</div>
        <h3 class="item-title">SFX Library+</h3>
        <p class="item-desc">The Pro edition: a larger catalog, offline packs, and extra export options for power users.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
