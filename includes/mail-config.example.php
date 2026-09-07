<?php
/**
 * SMTP configuration for contact.php.
 *
 * Copy this file to `mail-config.php` (same folder) and fill in real
 * mailbox credentials. `mail-config.php` is listed in .gitignore on
 * purpose so real credentials never get committed to the repo — edit
 * it directly on the server (Plesk File Manager / SFTP), not here.
 *
 * If `mail-config.php` doesn't exist, contact.php silently falls back
 * to PHP's built-in mail() function, which is often unreliable on
 * shared hosting (SPF/DKIM issues) — that's why SMTP is preferred.
 */

// Mailbox host/port from your Plesk mail settings (Mail > jrwsllc.com > the mailbox).
define('SMTP_HOST', 'mail.jrwsllc.com');
define('SMTP_PORT', 587);          // 587 = STARTTLS, 465 = SSL
define('SMTP_ENCRYPTION', 'tls');  // 'tls' or 'ssl'

// Full mailbox address + its password (the account contact.php authenticates as).
define('SMTP_USERNAME', 'no-reply@jrwsllc.com');
define('SMTP_PASSWORD', 'REPLACE_ME');

// "From" header on outgoing mail — usually the same as SMTP_USERNAME.
define('SMTP_FROM_EMAIL', 'no-reply@jrwsllc.com');
define('SMTP_FROM_NAME', 'JRWS LLC Website');
