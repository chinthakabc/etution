<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'etution');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'letmein');

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
define('AUTH_KEY',         '|%Edage{CW?UAKF2kGwteZfVh>2zouahbZHjucy@W]2<sh;crzlJbri?aT}Q^u-f');
define('SECURE_AUTH_KEY',  '/h|S{I=D;-g/?:DO`DzIM+ri[?.#`n(jL|$(m-:dO`J)[/.p|;0l{.|f(mrk`#A|');
define('LOGGED_IN_KEY',    'N3;oK )V,1Gk*v[+lpgBIZvwan4|eU]Y5i1dx7o [ k[2%UdZ|MT4+GAo13K>8UP');
define('NONCE_KEY',        't<d uIX_=+4kI:ij^@VF0i>Gid:d!Y_]Jk+TS:. -P:zrSG-vYw*Wl,wY8.euid(');
define('AUTH_SALT',        'ij_25#j?Xmi5Opl|p$%q4{V?xPp-yq8&e$t3DKcg]|n=!r6WYx|$88xEO35H)M$-');
define('SECURE_AUTH_SALT', 'Piv?Q*A[xAGZYTN+SE;)2R.i qQCS|w d0:Ouf~VYf1XmMJG9FcOO-oQz@zmWN+9');
define('LOGGED_IN_SALT',   '&I(9r3<`sVC`cP5FwW3se[$d#J!Yn?2VGt{:|aFYU)vF9^H;EDtqqL&4>?2~1C~4');
define('NONCE_SALT',       'VG?kX+Acz>9iF?o6Z]Kk]^%VAklW-?wHF}:>Mo@?&jE[#@6g_,|rmKU`x,CI,>*l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'et_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
