<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// $onGae is true on production.
if (isset($_SERVER['GAE_ENV'])) {
    $onGae = true;
} else {
    $onGae = false;
}

// Cache settings
// Disable cache for now, as this does not work on App Engine for PHP 7.2
define('WP_CACHE', false);

// Disable pseudo cron behavior
define('DISABLE_WP_CRON', true);

// Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
if ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) {
    $protocol_to_use = 'https://';
} else {
    $protocol_to_use = 'http://';
}
if (isset($_SERVER['HTTP_HOST'])) {
    define('HTTP_HOST', $_SERVER['HTTP_HOST']);
} else {
    define('HTTP_HOST', 'localhost');
}
define('WP_SITEURL', $protocol_to_use . HTTP_HOST);
define('WP_HOME', $protocol_to_use . HTTP_HOST);

// ** MySQL settings - You can get this info from your web host ** //
if ($onGae) {
    /** The name of the Cloud SQL database for WordPress */
    define('DB_NAME', 'wordpress');
    /** Production login info */
    define('DB_HOST', ':/cloudsql/wp-on-gae-260117:us-central1:wordpress');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'i4hue9jv');
} else {
    /** The name of the local database for WordPress */
    define('DB_NAME', 'wordpress');
    /** Local environment MySQL login info */
    define('DB_HOST', ':/cloudsql/wp-on-gae-260117:us-central1:wordpress');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'i4hue9jv');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BVn2MZGRJAHIXS+N3oMV2ika/adc2bxBSNWuI0H1wXpPe0Deo9HBz3aQeKCIlyiz9u1bApHGWIKJy1pD');
define('SECURE_AUTH_KEY',  'IyiUimv5K4BnTXcZ7EYn2ld0D4P49vPXClIoGT3m/vDDI6lJRJ0Eqd8N2dw+tuXEWfHutmE5b8ItW0hC');
define('LOGGED_IN_KEY',    'EEWYbL+3NQBoKHIsxzcA56S5crUSFwkqFF/Gzz/MqAQiygUzV/dQdbjxwcZw38w330jgF+perqUCbBLt');
define('NONCE_KEY',        'vOUNirpn0mvTFE/L/hBBWb3Ic9LZ2mgvwJOax9mEw4FN6iGYNSDHOFhMBlOKYN0+oeu5HSrLQLtu0b5z');
define('AUTH_SALT',        'JSr9nXX9dSA2luIxtKJPupnuQStVzy5zl9wty+ZRKtIWD2on4j8TFQjitmKqA4Twpmrr/DZo3ZDcYHZk');
define('SECURE_AUTH_SALT', 'GUEFGEdbqs4o0lKaICPkIUpTvx5TbgKgV9Ynymur6hMSJVFReoHrKyWQg6U7DgylQ3DEI/q4Q+fzA9Ds');
define('LOGGED_IN_SALT',   '1Vp4tROW3+9AO7cnmdHLGUIxPImR6fJptAsnBarslVtZR29x42CS5pGMMEdnFDn2jlpWEmEPgeoJ8gUc');
define('NONCE_SALT',       'Lei38d7+/ekkTb3+pdRNy8n1eeSzwjTfLN91doQZf/oRrO8EMSdMf1HxIWQO6Yxb2WZJbLFEcTfVHpWM');

/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wordpress/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
