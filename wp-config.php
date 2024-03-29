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
define('DB_NAME', 'kuugport');

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
define('AUTH_KEY',         '& EcwT!F>yk/]p#_VxXpqqt(8J)o7syXUe[CZc ^i%`E|f,6%=}cd~$tT`lzc<]6');
define('SECURE_AUTH_KEY',  'O@|:kJ@J[Xe`a?u:9~n{+Jw$`PKa!V(l%BHW$_-EBb5${+h7!?J-_nuP|L7EbYBl');
define('LOGGED_IN_KEY',    '}TaGfL>ReEt<G?q7%gz}PexjSB0|%-jo5G5?6&o|n?GN1z)t7.p^,.;()0u4~,#*');
define('NONCE_KEY',        'E!>Q4:w@ C L`b[2pnP*vngoY[[HpNScTvr676Ke)QfrBzk:zp5Jq+-@:ic9*b3H');
define('AUTH_SALT',        '+-D&N3[$JnY!hu}Z]?I(J6pR`1q46Ze`;t3-4e<oc 13.4#|m6ZeOew* 6,Wh*&C');
define('SECURE_AUTH_SALT', 'GvIJDL^ZF1-tGAojw;xlZbd5S0.d,K f73jl2 B_gEJ=7zt7h*h,,ot#ivt`wtw=');
define('LOGGED_IN_SALT',   '(fGk@,e*vj6DN+mts;_)Eb_pNel=}2h[pEVFrOVSAmOyGq$Voc>26l0#Y:~W8)6}');
define('NONCE_SALT',       'Nob@Y64mM05chGKXJj;{y#JXkcXBGr=VDySamdxJ19x.N:&I,J(-5[qzQs+q]h1(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
