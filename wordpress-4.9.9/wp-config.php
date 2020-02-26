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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ApOv)xk>;{Q_rHR*KM!-].nRhfWutLbZx]0#D<{ekc1hM_)2AxFi%69lg,q|L.I/');
define('SECURE_AUTH_KEY',  'yiU{+xw7Mu49_x0FRQ@{Oc6Y+dAZB]>bRZXt&}9U4~La4zY[gC)j$~w~<P%8x-o/');
define('LOGGED_IN_KEY',    '/QSl6b1x{ idH@Q[zP=Oyu#{EnEvu5yBtJc=!sPK/zBRT?*)H5-}N.x>g8R95H;6');
define('NONCE_KEY',        ';F#ie&UDiG_y3@n>;6;wA#`Kw-,UTZ]nYb[  MaY,9RGyvr%H37|QH4@t_]{vbFT');
define('AUTH_SALT',        '5ZL|RVSZ%sr?c93*qy{R=Yx>leuQMf8NdHm^qP~M2?3>{kS4xW3wdL[sm1m?3W3?');
define('SECURE_AUTH_SALT', '_^V_6r,3VA!1!^rl;`OWkkV7no&BFA;AK$%yfIq~IXOKi>=As3l@|!V8-HQ?`N]E');
define('LOGGED_IN_SALT',   'bE>YlK :zMfYZR`zBj8;l?rSn;Bi@R.M~Jl~9n~/57kv~8C:5`7(dy@9hz)t-0*!');
define('NONCE_SALT',       '#Sq^,;I&8,p(0WwDcH$SzwG+}%!rgsSRGuz!mWSld{veI`*GKD@~Zi4YNDTbXzj@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp49_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
