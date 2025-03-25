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
define( 'DB_NAME', 'u963556535_vbkiG' );

/** Database username */
define( 'DB_USER', 'u963556535_Q88Ir' );

/** Database password */
define( 'DB_PASSWORD', 'JWeDpxxstm' );

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
define( 'AUTH_KEY',          'h0Ms/X,icd@&&y+,.M.E18b?[Y2>l}<.2$ukPx<SR]rze$w&&1+>f)n`62[#!Q,t' );
define( 'SECURE_AUTH_KEY',   'GUJl|kEI8V~Vpw=hv9k(w$GjWz0 +J@=ucC4][3UxD|X&{KskFm?aJ6JyV_?p<bG' );
define( 'LOGGED_IN_KEY',     '2!X-<k6I3ENnWV~r72~E251{19KILT[cug88(Krl*{qWZgaIR:.pI2dw(E_-:W;9' );
define( 'NONCE_KEY',         '. ~HhYd/w@[S`R;Vkx,gR:]P3Ru-Y}<S)U{xC%ss;5S;Sq#4x8j*C?Qk%8h]vo;R' );
define( 'AUTH_SALT',         'D:T4B_b^Rwx&ey<HDcbfjGZxX-[sN=;[5DTm}|-trh[J??9A)ch>yxXlDDFLPfGk' );
define( 'SECURE_AUTH_SALT',  'Y,S FP:?8*A,vp1zg9COh]]KoNGu+Nzo,x-*n]=(S<gEq;6F/9!s:v_!G8A@`Q;`' );
define( 'LOGGED_IN_SALT',    'P6^{Z~iLq*22]7Z%:wVx/?^o#[!b2w`Y0rq_Z_ZX3Yhyrn@xm.,w`|ov%?Capecq' );
define( 'NONCE_SALT',        '*35S)]EzIyDFr])tIR(;{UuIz?IdzuPV*>|NF;^ 7cY5.RA%p/Xz7v!z,uNb?,aq' );
define( 'WP_CACHE_KEY_SALT', 'xxyppW:_`fhU%hWW#6I1f*@hd.uiEs&&RhLj]>~8sb]=]eC*Y/uIqeb/K^=OSX[1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '473e92d0f531d601c128a6a961c44f38' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
