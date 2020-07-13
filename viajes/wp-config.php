<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ddperupe_wp5083');

/** MySQL database username */
define('DB_USER', 'ddperupe_wp5083');

/** MySQL database password */
define('DB_PASSWORD', ']u5pB]E77S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cib3wzlv0imbcyc3z2dmsjjndfmafsvdl0ks0kbwrfw9kibf7sgezanc76hbcy1v');
define('SECURE_AUTH_KEY',  'erwjiljbexwfaa7u6qixxoeo9rryjvcw0dufg458hs5njcgqfvzchv7bs4xridqd');
define('LOGGED_IN_KEY',    'colburevl2vlbgscczr5cxtwha7nriuqm45nwkzy4xczncr4ki0tl6t8tgjjdbov');
define('NONCE_KEY',        'vrpkbxga4lznf8vzptbfpdiw63qsw7f9uj4no79cy6ppkzpilrm1zosy6hfgih63');
define('AUTH_SALT',        'wayrq0beltw8hvmcr6u4udzoingexijabfbrckrolvyh24g1ll5rg9rqhxpn3nvz');
define('SECURE_AUTH_SALT', 'n5kprigigqlzdxbnhymsedhm3fg1qipiod5punxzmd0xxnhfdohsv2a3bmcnuvrh');
define('LOGGED_IN_SALT',   '9uz56jbwsda9omtpqmsxoe98smqibbuwvcbmna16gpepo0mqax27t4x6bfieqpzl');
define('NONCE_SALT',       '8jo6nhorfifeowdduasqozepggogj7pchgz1qljksafpldzde3okrvoeaj7glh2s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
