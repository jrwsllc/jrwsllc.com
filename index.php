<?php
require __DIR__ . '/includes/header.php';

// Contact form result flag, set by contact.php's redirect (contact.php?sent=1#contact / ?sent=0#contact)
$sent = isset($_GET['sent']) ? $_GET['sent'] : null;
?>

<!-- ==================== HERO ==================== -->
<section class="hero" id="top">
  <div class="logo-mark">
    <img src="/assets/img/logo.png" alt="JRWS LLC logo" width="1000" height="1000">
  </div>

  <a class="scroll-cue" href="#about" aria-label="Scroll down to learn more">
    <span>Scroll</span>
    <span class="chevron" aria-hidden="true"></span>
  </a>
</section>

<!-- ==================== ABOUT ==================== -->
<section class="about" id="about">
  <div class="container">
    <span class="eyebrow">About Us</span>
    <h2>Small studio, three shelves</h2>
    <!-- PLACEHOLDER: replace with real About Us copy -->
    <p>
      JRWS LLC is a small independent studio. We build handy little apps,
      write books we wish existed, and run a Minecraft server for the fun
      of it. No venture capital, no roadmap decks — just a few people
      making things they're proud of and sharing them with anyone
      interested.
    </p>
    <p>
      Below you'll find everything we currently make: apps, books, and
      games. Each one links out to wherever it actually lives — the app
      store, Amazon, or the server itself.
    </p>
  </div>
</section>

<!-- ==================== APPS ==================== -->
<section id="apps">
  <div class="container">
    <div class="category-header">
      <span class="eyebrow">Apps</span>
      <h2>Apps</h2>
      <p>Tools we built because we needed them ourselves.</p>
    </div>

    <div class="item-grid" id="apps-grid">
      <!-- PLACEHOLDER: replace with real app store link -->
      <a class="item-box" href="#" target="_blank" rel="noopener">
        <div class="item-media media-apps" aria-hidden="true">SFX Library icon</div>
        <h3 class="item-title">SFX Library</h3>
        <p class="item-desc">A curated sound-effects library for creators, ready to browse, preview, and drop into your project.</p>
        <span class="item-arrow">View on App Store <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
      </a>

      <!-- PLACEHOLDER: replace with real app store link -->
      <a class="item-box" href="#" target="_blank" rel="noopener">
        <div class="item-media media-apps" aria-hidden="true">SFX Library+ icon</div>
        <h3 class="item-title">SFX Library+</h3>
        <p class="item-desc">The Pro edition: a larger catalog, offline packs, and extra export options for power users.</p>
        <span class="item-arrow">View on App Store <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
      </a>
    </div>
  </div>
</section>

<!-- ==================== BOOKS ==================== -->
<section id="books">
  <div class="container">
    <div class="category-header">
      <span class="eyebrow">Books</span>
      <h2>Books</h2>
      <p>Stories and notebooks, written and self-published.</p>
    </div>

    <div class="item-grid" id="books-grid">
      <!-- PLACEHOLDER: replace with real Amazon link -->
      <a class="item-box" href="#" target="_blank" rel="noopener">
        <div class="item-media media-books" aria-hidden="true">Leo Notebook cover</div>
        <h3 class="item-title">Leo Notebook</h3>
        <p class="item-desc">A guided notebook for daily reflection and planning, designed to be simple enough to actually stick with.</p>
        <span class="item-arrow">View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
      </a>

      <!-- PLACEHOLDER: replace with real Amazon link -->
      <a class="item-box" href="#" target="_blank" rel="noopener">
        <div class="item-media media-books" aria-hidden="true">The School Rewind cover</div>
        <h3 class="item-title">The School Rewind</h3>
        <p class="item-desc">A nostalgic look back at school life, told with humor and heart for anyone who's ever sat through a hallway pass.</p>
        <span class="item-arrow">View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
      </a>

      <button type="button" class="view-all-box" id="books-view-all"
              data-target="#books-extra" aria-expanded="false"
              data-label-more="View All Books" data-label-less="Show Less">
        <span class="view-all-label">View All Books</span>
        <span class="chevron-down" aria-hidden="true"></span>
      </button>

      <div id="books-extra" class="extra-items-wrapper">
        <!-- PLACEHOLDER: replace with real Amazon link -->
        <a class="item-box extra-item" href="#" target="_blank" rel="noopener" aria-hidden="true" tabindex="-1">
          <div class="item-media media-books" aria-hidden="true">The Coin cover</div>
          <h3 class="item-title">The Coin</h3>
          <p class="item-desc">A short story about a single coin that changes hands — and changes something in everyone who holds it.</p>
          <span class="item-arrow">View on Amazon <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== GAMES ==================== -->
<section id="games">
  <div class="container">
    <div class="category-header">
      <span class="eyebrow">Games</span>
      <h2>Games</h2>
      <p>A server we run for fun — come say hi.</p>
    </div>

    <div class="item-grid single-item" id="games-grid">
      <a class="item-box" href="https://orcsworld.net" target="_blank" rel="noopener">
        <div class="item-media media-games" aria-hidden="true">Orc's World banner</div>
        <h3 class="item-title">Orc's World</h3>
        <p class="item-desc">Our indie Minecraft server — survival, community builds, and the occasional orc invasion. Visit the site for connection details.</p>
        <span class="item-arrow">Visit Orc's World <span class="arrow-glyph" aria-hidden="true">&rarr;</span></span>
      </a>
    </div>
  </div>
</section>

<!-- ==================== CONTACT ==================== -->
<section class="contact" id="contact">
  <div class="container">
    <div class="category-header">
      <span class="eyebrow">Contact</span>
      <h2>Get in touch</h2>
      <p>Questions, feedback, or just want to say hi? Send us a message.</p>
    </div>

    <?php if ($sent === '1'): ?>
      <div class="form-message success" role="status">Thanks — your message has been sent. We'll get back to you soon.</div>
    <?php elseif ($sent === '0'): ?>
      <div class="form-message error" role="alert">Something went wrong sending your message. Please check the form and try again.</div>
    <?php endif; ?>

    <form class="contact-form" action="/contact.php" method="POST" novalidate>
      <div class="form-row">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required autocomplete="name">
      </div>

      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required autocomplete="email">
      </div>

      <div class="form-row">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>
      </div>

      <div class="form-row">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>

      <!-- Honeypot: real visitors never see or fill this in. -->
      <div class="form-row hp-field" aria-hidden="true">
        <label for="website">Leave this field blank</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
      </div>

      <button type="submit" class="btn">Send Message</button>
    </form>
  </div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
