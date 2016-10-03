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
define('DB_NAME', 'My-Database-Name');

/** MySQL database username */
define('DB_USER', 'My-Database-User');

/** MySQL database password */
define('DB_PASSWORD', 'My-Database-Password');

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
define('AUTH_KEY',         'Y-+5_T)qD}h#!D1:NlEu$jn^O^qQ hykaF,|jf+Lx|`+t[&5|^#G|O%0YZS,WR?~');
define('SECURE_AUTH_KEY',  'gn+6RYNVD {w6b4_r|r42<%C]+PD-63(49P<%e[B2B-Txub`3-;51j{mV?>x$n-2');
define('LOGGED_IN_KEY',    '8DTP4gUpK#-n7_R`=T^nUm2)Tjbn*^]bCDjdSbqOi=F.0#F.e@Y2~p>-|C6)#j|U');
define('NONCE_KEY',        'zZ|hwX&~7Bc##?.F0%3`=@|Pb`<e+YTU5}Xlg$R-xmLF=)IO6+2L{N_0`-i`!yJ:');
define('AUTH_SALT',        'WZnw @~J(|ha}Um39KaV}pIvSvCDB/n]JD3,o^-RGV+P0rXxE&j[+IDDUQz`Y{dJ');
define('SECURE_AUTH_SALT', 'Pzo{-We!Fe^:kU1&C*Le> |{hWrOw-z.}`Y}`F)ngR(*nhLbU(&;p5(?:`9q Jj!');
define('LOGGED_IN_SALT',   'B8L3l,Z*Ss}hp;UQc]h84`QV~0jn=~.~a) ZdH Ob)1w<>64w$ cj(G[3Rd*(~|a');
define('NONCE_SALT',       'VNjppt_?A?GL(0 Ya85o|w;]>3S[T-#q!>aAT9-*.,-f|xqNvp(&*rf~PM|xmx&N');
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