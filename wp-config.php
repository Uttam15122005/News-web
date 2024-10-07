<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Gw~c^-:JtAH-F*vsCeI7V_Y@n0!S3`RhIFn:$E%;czWF[LKkg~k% n>qpUm;5osE' );
define( 'SECURE_AUTH_KEY',  '#d)(#GVa1c/l;sR RiqwsWC;@e:`J5~+N_p=[D a76yl^kxeGC9w-L)q*& V=V[#' );
define( 'LOGGED_IN_KEY',    '_$Af/PS)0COy4OV.m+B)A#ZMn><2&bRwj/3VR++mL),a[Wu:=}e8_>~T=@/a2a/5' );
define( 'NONCE_KEY',        '9d6p%|.tjElG2P6nvXvCm~:-h5{<jZ5DKKa wd2&~P)pWDEGxX1~kL~9@mvN< I5' );
define( 'AUTH_SALT',        'nZ^kZ4HYZ=#tt^pPl[/t3q4O>@|95g6of5+lU>B{c2LLNtdojv!m!.=;WC+p9{sL' );
define( 'SECURE_AUTH_SALT', '+~<M4:m*7vK=o%*+m41?J5b8W%utmH/nfN0z`R$~/)L>WW`D51/3POG`(!la0 jY' );
define( 'LOGGED_IN_SALT',   'nt8[-wuMW;{q/|b%&j;P9vi[8OmZ8PO3t#k>y{;.JNSJ3?23W.ev2y?^7t8Z/ZPH' );
define( 'NONCE_SALT',       'MH?cc>>|Zc3ie3rf;#o6ZwxIyPE`~yc}$cY1Q!Oz_HaU/,U/>p2J`3SxIWr8H`sW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
