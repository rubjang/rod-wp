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
define('DB_NAME', 'rodrubjang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'DBdev@123456');
define('DB_PASSWORD', '1q2w3e4r');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '<J*d.0,,VP{z~n,4zs|7|1 Ezi_5!mA<GWZ-^,whuJTl9s*%>w73gCc>F.quc-jB');
define('SECURE_AUTH_KEY',  'lTL:]r~:p=LMhL*NRn3lFPqEIWQA.|Q+n/&jtkUD33cyHY<$P>VSf%Sz,[[bs%PY');
define('LOGGED_IN_KEY',    '4*(goO-w_tK>M1OATMyp~5$wP&%hWf$&<a6#}p1UaU_2f%2C[()l[_?=!Dji,xN+');
define('NONCE_KEY',        'l?x,33Cm*q/;P|N|XTDE ODPW0K7@_deh$uF}Q{?uK4?jQ/7i{-J{ClMwLoj|c[:');
define('AUTH_SALT',        'bZC-C.#`&h-9J/s]E-:N@#vB+|B.$mE3vv-$3)<|JF1Qt`-(69{!tINK.fOaCT>:');
define('SECURE_AUTH_SALT', '.?$H()Ks@O.OM&NTWK|(T.x;lz!n|%zf]?;Mp@gNc/mPdYq&ffo2?oQ|U-Vl<s+Q');
define('LOGGED_IN_SALT',   '>Y`KVBUU]k e)Gc`aS;$?0M~z,)-!y5#yA|a[fPmN4X8:-C|~0$k7e}oUZ5Gq1E(');
define('NONCE_SALT',       ' +F=(`vV1WWm|{F4O;@8Zm;=+QM3kJM=]a:I9YC#zB+x25x--|lVfj)-1-R8oX=q');
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
