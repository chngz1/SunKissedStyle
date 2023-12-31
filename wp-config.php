<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u900825059_3MFAo' );

/** Database username */
define( 'DB_USER', 'u900825059_jxG5l' );

/** Database password */
define( 'DB_PASSWORD', 'Vi2lQ7G4Ym' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'RahiKr^^5c>z.taa0mktuY()Xr&e$dFk4axwO0.iby3U^?cVn#J:U|jf#&~,P(vg' );
define( 'SECURE_AUTH_KEY',   'oCv~*vFJW5qH%$Xv#9ZVw1s7Js;(-pB6TRpcvnV~I%XOPd2>0 `m`?W;HLL;/^x.' );
define( 'LOGGED_IN_KEY',     '6wH>@J XV:L6m_mvjjU.Y{+~1Ac6Q++5xZ-]y9r],pJ4y42o&$tGN >6oxRv{!X8' );
define( 'NONCE_KEY',         '}ArZ`_doBnB9|a_gV9^EUdA8v)L3&z7(To_1uqS9Ud]SzEo;|@TuaSt+,c{fIHj4' );
define( 'AUTH_SALT',         'ixg4~P5us7uMZk4|DN{-.B>fNp;]$z%6TTpy|WA~~{]aQVzK!wW7VM!on#AyCr7L' );
define( 'SECURE_AUTH_SALT',  ':mp6P.WAk5;Z3Tu|i>.b`g8t<.99=hbtM=Cv(=80h_l,nuUraI_>BFjlzoqyg$l1' );
define( 'LOGGED_IN_SALT',    'XgX_y-+3(a~s%R2_0<%t$p^-|2nv/W<W|[-A]eDEmZfLjBfO[n<joG#^j^5s-sFK' );
define( 'NONCE_SALT',        '>dd_mTQ-Ve-j{>N?C&#/m8iO_O7f/A(eUs$FgpR7{G$u!UQBauttaU9(pL/N%pm ' );
define( 'WP_CACHE_KEY_SALT', '7{DWy!OU{ WmV[>ZOEI{tF@H^_>c]lY6C1h[e(+v/(k; {x=5}+r3G3B_AOHY6od' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
