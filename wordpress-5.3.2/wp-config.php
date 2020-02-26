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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yN<^];IKKPyPuP5f7,S,r+QJ 0bqcrsR6V(&&C>$-,$I>Wzo+5dt.fESxcgYm}2_' );
define( 'SECURE_AUTH_KEY',  'G]D&zX!LKIM6TSFcUrsHr0:`/CahaE7Qx>M;Xz?ANeliS<.Glw$#h5[/Ag1 Xq$q' );
define( 'LOGGED_IN_KEY',    'Ve>kZ,BWC-*vk{AR)36L~Cd^iz/gC*](R 8 $BIVGrrz`AdYf-t[y=W(Re:Cg:>e' );
define( 'NONCE_KEY',        'KXH<vj Ko[O#i-G0X}qn~:+A|g6?Wf5$/v=3Oa1tjW6R7F^3Eq(+wwr_-Kc%%(gC' );
define( 'AUTH_SALT',        ' GWx51k2@@+p4]&WW`vtcVm|[G]9Zp(zwnM.syIL;9.G;tSKjojVp H~<lCfKig9' );
define( 'SECURE_AUTH_SALT', 'e<x-C5`gP3 _Na`:N Smdyw6QSRdV]rm6[(:DZhYoY7zg]fAs)hS_H:zmRxA8H/b' );
define( 'LOGGED_IN_SALT',   '<1C)NW4Ms4kryp$Pu8lhI6<v`Y/DJEv1+YYvF5.(B$&-sFE!B7MU5>sc*y/9rk}k' );
define( 'NONCE_SALT',       'O[-_DO?;D`yM5,h]**kpyXP=9o%_T-_~=Pv*zr]zSY$s<fd_HvR92@~O7W!Al=RY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp53_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
