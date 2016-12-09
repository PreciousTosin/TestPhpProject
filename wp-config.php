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
define('DB_NAME', 'wp_xmlconsult');

/** MySQL database username */
define('DB_USER', 'xmlconsults');

/** MySQL database password */
define('DB_PASSWORD', '$xmlconsults_2016');

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
define('AUTH_KEY',         'u;(RIpb/5jTjCcF%*E8/sp9Ot0gjmz$`RTW1X9?$u@|0Jp5c8X@ %60<[w]RNZc0');
define('SECURE_AUTH_KEY',  'sw4H650?p&=d=s}@,xbG)`tr~bfJ]|VV:ap[@<I/)F$pRb.Qw<CsaPi,;]3XNM?0');
define('LOGGED_IN_KEY',    'AJB#!ht8~|`@x5;1`;NkpK4b76ZX;M6`LvqZ1tKd!t1c.?c>7xU*M /o:|JnOSEC');
define('NONCE_KEY',        '@WU8X{r08s;Z@U{FpT+Dm$r]+u@Jo5LGEHjs#:. v<Dg;t((.T&|;Vb8oRFoUV/>');
define('AUTH_SALT',        '>_?Vk.G>JT1K{-}*^DPF5EOA7u^!3pdD|:5f?$ bBkSrS/q]x1C1Vwao.~~%DBn8');
define('SECURE_AUTH_SALT', 'e7c0%2fdj)aI-v_`aT7)dAli<`IygRX`/qVhI@J:SSGhSK1EJ^}{h#3$y).b-U5W');
define('LOGGED_IN_SALT',   '7HX()J&^?uIvFn3ITA`.^PD&F`b0TO5@1aOQ:aTJosB7 `s4Uum>+t+~2r|BS Fz');
define('NONCE_SALT',       '|FQ-`CI_t`GJO)8)LEC{1u~+v<n}<jLxC$hdt>gO*j0f}EA~~H81*r6~}^1Q1Ho:');

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
