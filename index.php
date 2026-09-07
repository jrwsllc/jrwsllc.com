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
  <div class="container reveal">
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
      games. Tap a category to see everything in it.
    </p>
  </div>
</section>

<!-- ==================== APPS ==================== -->
<section id="apps">
  <div class="container">
    <div class="category-header reveal">
      <span class="eyebrow">Apps</span>
      <h2>Apps</h2>
      <p>Tools we built because we needed them ourselves.</p>
    </div>

    <a class="category-tile reveal" href="/apps">
      <div class="category-tile-media media-apps" aria-hidden="true">Apps icon</div>
      <div class="category-tile-content">
        <h3>Browse Apps</h3>
        <p>SFX Library, SFX Library+, and whatever we build next.</p>
      </div>
      <span class="tile-arrow" aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<!-- ==================== BOOKS ==================== -->
<section id="books">
  <div class="container">
    <div class="category-header reveal">
      <span class="eyebrow">Books</span>
      <h2>Books</h2>
      <p>Stories and notebooks, written and self-published.</p>
    </div>

    <a class="category-tile reveal" href="/books">
      <div class="category-tile-media media-books" aria-hidden="true">Books icon</div>
      <div class="category-tile-content">
        <h3>Browse Books</h3>
        <p>Leo Notebook, The School Rewind, The Coin, and more on the way.</p>
      </div>
      <span class="tile-arrow" aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<!-- ==================== GAMES ==================== -->
<section id="games">
  <div class="container">
    <div class="category-header reveal">
      <span class="eyebrow">Games</span>
      <h2>Games</h2>
      <p>A server we run for fun — come say hi.</p>
    </div>

    <a class="category-tile reveal" href="/games">
      <div class="category-tile-media media-games" aria-hidden="true">Games icon</div>
      <div class="category-tile-content">
        <h3>Browse Games</h3>
        <p>Orc's World, our indie Minecraft server.</p>
      </div>
      <span class="tile-arrow" aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<!-- ==================== CONTACT ==================== -->
<section class="contact" id="contact">
  <div class="container">
    <div class="category-header reveal">
      <span class="eyebrow">Contact</span>
      <h2>Get in touch</h2>
      <p>Questions, feedback, or just want to say hi? Send us a message.</p>
    </div>

    <?php if ($sent === '1'): ?>
      <div class="form-message success" role="status">Thanks — your message has been sent. We'll get back to you soon.</div>
    <?php elseif ($sent === '0'): ?>
      <div class="form-message error" role="alert">Something went wrong sending your message. Please check the form and try again.</div>
    <?php endif; ?>

    <form class="contact-form reveal" action="/contact.php" method="POST" novalidate>
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
