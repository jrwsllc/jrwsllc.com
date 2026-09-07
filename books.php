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
      <button type="button" class="item-box reveal" data-dialog-open="dialog-leo-notebook">
        <div class="item-media media-books" aria-hidden="true">Leo Notebook cover</div>
        <h3 class="item-title">Leo Notebook</h3>
        <p class="item-desc">A guided notebook for daily reflection and planning, designed to be simple enough to actually stick with.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-leo-notebook" class="link-dialog" aria-labelledby="dialog-leo-notebook-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <div class="item-media media-books" aria-hidden="true">Leo Notebook cover</div>
          <h3 id="dialog-leo-notebook-title">Leo Notebook</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <!-- PLACEHOLDER: replace with real Amazon link -->
            <a class="text-link" href="#" target="_blank" rel="noopener">
              View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>

      <button type="button" class="item-box reveal" data-dialog-open="dialog-school-rewind">
        <div class="item-media media-books" aria-hidden="true">The School Rewind cover</div>
        <h3 class="item-title">The School Rewind</h3>
        <p class="item-desc">A nostalgic look back at school life, told with humor and heart for anyone who's ever sat through a hallway pass.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-school-rewind" class="link-dialog" aria-labelledby="dialog-school-rewind-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <div class="item-media media-books" aria-hidden="true">The School Rewind cover</div>
          <h3 id="dialog-school-rewind-title">The School Rewind</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <!-- PLACEHOLDER: replace with real Amazon link -->
            <a class="text-link" href="#" target="_blank" rel="noopener">
              View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>

      <button type="button" class="item-box reveal" data-dialog-open="dialog-the-coin">
        <div class="item-media media-books" aria-hidden="true">The Coin cover</div>
        <h3 class="item-title">The Coin</h3>
        <p class="item-desc">A short story about a single coin that changes hands — and changes something in everyone who holds it.</p>
        <span class="item-arrow" aria-hidden="true">&rarr;</span>
      </button>

      <dialog id="dialog-the-coin" class="link-dialog" aria-labelledby="dialog-the-coin-title">
        <div class="dialog-inner">
          <button type="button" class="dialog-close" data-dialog-close aria-label="Close">&times;</button>
          <div class="item-media media-books" aria-hidden="true">The Coin cover</div>
          <h3 id="dialog-the-coin-title">The Coin</h3>
          <p class="dialog-desc">Choose where to get it:</p>
          <div class="dialog-links">
            <!-- PLACEHOLDER: replace with real Amazon link -->
            <a class="text-link" href="#" target="_blank" rel="noopener">
              View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </dialog>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
