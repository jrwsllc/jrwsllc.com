<?php
require __DIR__ . '/includes/header.php';
?>

<!-- ==================== HERO ==================== -->
<section class="hero" id="top">
  <h1 class="sr-only">JRWS LLC — Apps, Books &amp; Games</h1>
  <div class="logo-mark">
    <img src="/assets/img/logo.png" alt="JRWS LLC logo" width="1000" height="1000">
  </div>

  <a class="scroll-cue" href="#about" aria-label="Scroll down to learn more">
    <span>Scroll</span>
    <span class="chevron" aria-hidden="true"></span>
  </a>
</section>

<!-- ==================== ABOUT (link tile) ==================== -->
<section id="about">
  <div class="container">
    <a class="link-tile link-tile-about reveal" href="/about">
      <div class="link-tile-content">
        <h2>About Us</h2>
        <p>Who we are and what we make.</p>
      </div>
      <span class="tile-arrow" aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<div class="divider" aria-hidden="true"></div>

<!-- ==================== EXPLORE (Apps / Books / Games) ==================== -->
<section id="explore">
  <div class="container">
    <div class="category-grid stagger">
      <a class="category-square sq-apps reveal" href="/apps">
        <img class="square-icon" src="/assets/img/icon-apps.png" alt="" aria-hidden="true" width="512" height="512">
        <div class="square-content">
          <h3>Apps</h3>
        </div>
        <span class="tile-arrow" aria-hidden="true">&rarr;</span>
      </a>

      <a class="category-square sq-books reveal" href="/books">
        <img class="square-icon" src="/assets/img/icon-books.png" alt="" aria-hidden="true" width="512" height="512">
        <div class="square-content">
          <h3>Books</h3>
        </div>
        <span class="tile-arrow" aria-hidden="true">&rarr;</span>
      </a>

      <a class="category-square sq-games reveal" href="/games">
        <img class="square-icon" src="/assets/img/icon-games.png" alt="" aria-hidden="true" width="512" height="512">
        <div class="square-content">
          <h3>Games</h3>
        </div>
        <span class="tile-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<div class="divider" aria-hidden="true"></div>

<!-- ==================== CONTACT (link tile) ==================== -->
<section id="contact">
  <div class="container">
    <a class="link-tile link-tile-contact reveal" href="/contact">
      <div class="link-tile-content">
        <h2>Get in Touch</h2>
        <p>Questions, feedback, or just want to say hi?</p>
      </div>
      <span class="tile-arrow" aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
