<?php
$pageTitle       = "Books — JRWS LLC";
$pageDescription = "Leo Notebook, The School Rewind, and The Coin — books from JRWS LLC.";
$pageUrl         = "https://jrwsllc.com/books";
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
    <span class="eyebrow">Books</span>
    <h1>Books</h1>
    <p>Stories and notebooks, written and self-published.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="item-grid stagger">
      <!-- PLACEHOLDER: replace with real Amazon link -->
      <a class="item-box reveal" href="#" target="_blank" rel="noopener" aria-label="Leo Notebook — view on Amazon">
        <div class="item-media media-books" aria-hidden="true">Leo Notebook cover</div>
        <h3 class="item-title">Leo Notebook</h3>
        <p class="item-desc">A guided notebook for daily reflection and planning, designed to be simple enough to actually stick with.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>

      <!-- PLACEHOLDER: replace with real Amazon link -->
      <a class="item-box reveal" href="#" target="_blank" rel="noopener" aria-label="The School Rewind — view on Amazon">
        <div class="item-media media-books" aria-hidden="true">The School Rewind cover</div>
        <h3 class="item-title">The School Rewind</h3>
        <p class="item-desc">A nostalgic look back at school life, told with humor and heart for anyone who's ever sat through a hallway pass.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>

      <!-- PLACEHOLDER: replace with real Amazon link -->
      <a class="item-box reveal" href="#" target="_blank" rel="noopener" aria-label="The Coin — view on Amazon">
        <div class="item-media media-books" aria-hidden="true">The Coin cover</div>
        <h3 class="item-title">The Coin</h3>
        <p class="item-desc">A short story about a single coin that changes hands — and changes something in everyone who holds it.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
