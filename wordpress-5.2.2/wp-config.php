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
define( 'AUTH_KEY',         '><Be4uS$F~SIB WekD3|Vf0>4HNv{!6~l5]@/MEsIorE2#mi[#d@1_8W4v]U{;R^' );
define( 'SECURE_AUTH_KEY',  'HYZ>#br|>1ykQQBWux1>3))8:PBldnQ.A2q/VR`VL.dLY$YQWU4c~+1Wn[MP`k4d' );
define( 'LOGGED_IN_KEY',    '&2y9S8T>/9y8I{dl@tu|_{+w)70EEqE!iA<cBe33OpL,#>|Ur^v34PN3`Npv.ZXp' );
define( 'NONCE_KEY',        'n*_$igw.FbW%ma>RN3PDmCu0`CJ&lTnT1V1yL%v1}o10EV-P%9O45JxO^9<4jxI+' );
define( 'AUTH_SALT',        '?F?9[5Tr])NM6VKQNa)3T$|VArh;U&Sj+ e>b}[yg7Z30 D42A,Z-<&;qGnVQd`D' );
define( 'SECURE_AUTH_SALT', 'bGpF~2!9 Es2Wzp(16T-gL4T/Ywu,!TJQ*%|>z$Se/(&-iu1tMNH`6O+2mQykdW/' );
define( 'LOGGED_IN_SALT',   'eXGDLToTC.g3{/C7xTg<&T<u[%] Fi9b4-yv&%Qa*_&Lm~+)R:4ho GQOzT_3eGA' );
define( 'NONCE_SALT',       'uotyrs7eQAFv~0R_tuBoUWSZ mhR`AY)lANgQm;~iCZfZ>:mt-(U7c)yn?`R+IVb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp52_';

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
