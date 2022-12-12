<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rozman' );

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
define( 'AUTH_KEY',         'X)pZ2pc$a((;)H~H(2*Aq%d4k|qWglU_%1 oH5sY5PLJ HP[~v aQ`V2i$egy:Yv' );
define( 'SECURE_AUTH_KEY',  'GLt}_#:F9z</?F|U!e)!-b(gpi]EBI_9vD:mCb9:ucD%xx@{J*Tk2Q)i9js2Yy(7' );
define( 'LOGGED_IN_KEY',    '[5cWpESQ=~V@KRYD#;T,a{WJr_nlj,MsUebcTa2TcR>qQr:_&|&Egl<0?jaXQ5_+' );
define( 'NONCE_KEY',        '7:EtF:xC&S%oW]t>xWqf:G)l!`1R54^|q{?v/^t>MAMojEv~QZBI-<[uf$eUjlOm' );
define( 'AUTH_SALT',        'yGz27@@fpgF|Nw3:7,_2VS,n]8twjksm],OPs1RYQa@;i%%hLA?,*Dj,~(,nr74&' );
define( 'SECURE_AUTH_SALT', '.Ac3CnV){Sb;a1jdZHNF]:,qVaUJ^Z?-i6<{{a`%NFp[Lb07rVH]u;3B/67d:ngD' );
define( 'LOGGED_IN_SALT',   '] }7g)>M_A6? .dd 0UyS}IkTKiyDYH4X?k|LWg?a.d}wU?o>&Y5_kmqyPCr3Na:' );
define( 'NONCE_SALT',       '*x:,b+>DRdV=xdo8]%HGYlKP58|P41Lu#5BOZ%-HDwt~}1Ml8Ti!BB9]!a =^hHD' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
