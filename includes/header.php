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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">

<!-- Open Graph tags for link previews -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<!-- Using the logo as a stand-in; an OG image is ideally 1200x630 — PLACEHOLDER: replace with a dedicated wide preview image -->
<meta property="og:image" content="/assets/img/logo.png">
<meta property="og:url" content="<?php echo htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8'); ?>">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
