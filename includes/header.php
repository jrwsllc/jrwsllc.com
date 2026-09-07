<?php
/**
 * Shared <head> + page-open markup for JRWS LLC site.
 * Included by every page to avoid repeating meta tags / boilerplate.
 *
 * A page can override defaults by setting these variables before
 * requiring this file: $pageTitle, $pageDescription, $pageUrl.
 */

$pageTitle       = $pageTitle ?? "JRWS LLC — Apps, Books & Games";
// PLACEHOLDER: replace with real, tailored meta description
$pageDescription = $pageDescription ?? "JRWS LLC is a small independent studio building apps, writing books, and running Orc's World — an indie Minecraft server. Explore our apps, books, and games.";
$pageUrl         = $pageUrl ?? "https://jrwsllc.com/";

$safeTitle = htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8');
$safeDesc  = htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8');
$safeUrl   = htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $safeTitle; ?></title>
<meta name="description" content="<?php echo $safeDesc; ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $safeUrl; ?>">

<!-- Open Graph tags for link previews -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="JRWS LLC">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="<?php echo $safeTitle; ?>">
<meta property="og:description" content="<?php echo $safeDesc; ?>">
<!-- Using the logo as a stand-in; an OG image is ideally 1200x630 — PLACEHOLDER: replace with a dedicated wide preview image -->
<meta property="og:image" content="https://jrwsllc.com/assets/img/logo.png">
<meta property="og:url" content="<?php echo $safeUrl; ?>">

<!-- Twitter/X card (falls back to the Open Graph tags above on most other platforms) -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $safeTitle; ?>">
<meta name="twitter:description" content="<?php echo $safeDesc; ?>">
<meta name="twitter:image" content="https://jrwsllc.com/assets/img/logo.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<?php
// Cache-busting: append the file's last-modified time as a version so
// browsers pick up new CSS/JS immediately after each deploy, instead of
// serving a stale cached copy until it expires on its own.
$cssVersion = @filemtime(__DIR__ . '/../assets/css/style.css') ?: '1';
?>
<link rel="stylesheet" href="/assets/css/style.css?v=<?php echo $cssVersion; ?>">

<!-- Structured data: identifies JRWS LLC as an organization for search engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "JRWS LLC",
  "url": "https://jrwsllc.com/",
  "logo": "https://jrwsllc.com/assets/img/logo.png"
}
</script>
</head>
<body>
