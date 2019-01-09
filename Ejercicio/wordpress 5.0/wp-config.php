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
define('DB_NAME', 'ejercicio24');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'PTVfSxE:tWvkd-bGStN<)<MW^!`{v9a$,qCSe(,!e7I.R#)CzQ:7O1h,7O10!|E[');
define('SECURE_AUTH_KEY',  'Rby4Y( -zkE-YX^-my>J5*LDTBW{tE)jdQSI{N:j.kSG?3b(W,^a]DCRP>.ArG2N');
define('LOGGED_IN_KEY',    'K^7yKpZuu8*%jC3CS4Ikr?J/3rlV*ZT-FZ3s0e(06{.T>NCk<z{ys^]P;SHvf.@,');
define('NONCE_KEY',        'JrVNsrdma-VH^b*yxDwRo8Pp=4kw.U|spmrPBJ`It_mB0SOm|PVj*r6ub/7x~5D@');
define('AUTH_SALT',        'aer#h+],8V?c-5qBd+A3M/,f=:K0T3z,54>p*{YX$:0j]{;L>(f*zEg|07blY  g');
define('SECURE_AUTH_SALT', 'QB|/yjaFo<mi&1#(|C_G50Z{Zc Q+fea7e/xOnuki88vax@ a5]KB2bs8bpV5OQf');
define('LOGGED_IN_SALT',   'J:k};1zX+cu4qvLjDixjd,)76S`uqU!Xs>gFb_nd`6`9.%VHxf_tL P+[v97v~$O');
define('NONCE_SALT',       'ZYWi?O?fqB9JBweJue0mkGBjH4A]dff{]m^s3d:2&Vh]5vxWUAEyY!Cq=5OMqs+H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
