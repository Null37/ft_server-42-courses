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
define( 'DB_NAME', 'zer_db' );

/** MySQL database username */
define( 'DB_USER', 'zero' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zero' );

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
define( 'AUTH_KEY',         ']SF^hW;uS-4fk:X5Nv7Sisp&[2&-3{?w4;?_%!,mGn|Y/@Z[bW/3 !94?:YC7w]m' );
define( 'SECURE_AUTH_KEY',  'e@tXIBG3l|?:f[96<w?tsp,<R0U-,VG3qXqBuY6O]lC;-)n_SK8LVW)bA57qD5X&' );
define( 'LOGGED_IN_KEY',    '`vn+jrI0|=4A<S[t1VGK(!nUtj9k!a/Y&yDSOx[(tNd,BNOx@gA@G^D.8[oE[TNl' );
define( 'NONCE_KEY',        'v+{B!,paFe_RbFkwdZM}5mYt[t#|s~^b3[S_ha/$,g[XF]!{Ubjr[*^.;O>W66BT' );
define( 'AUTH_SALT',        '=nt6ZudgkSm7>qdZfyV4.2`jOZ5RHd&b?l<aeck}Dhv+6Yi=NCMwZk@>4gHQvdh&' );
define( 'SECURE_AUTH_SALT', '2voqk>NB9x$gu%@>UX&7^i{K3?CT%v$z=!i?$y(G%(DX;W-5=71!=)LC| ?sl%X1' );
define( 'LOGGED_IN_SALT',   'Q1g14S.(IFb!_L!viPxmS:SJa,EF+#j!Imq,<xj1enA^(`zg0GYo96+jc%U/CB*;' );
define( 'NONCE_SALT',       ']AGIWnBOqA AH}Dn8oLrT >%~`a @#PqY[!h@i%!w5``4<x3}QZiFMIle^<QS=ZF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

