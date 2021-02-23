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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wood_shop' );

/** MySQL database username */
define( 'DB_USER', 'shop' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456a@A' );

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
define( 'AUTH_KEY',         'Kxj9Z}[dp|d#)2uoFUJp=kB&*FxwF^tCF}9U<eQ~e]=R[e<G>lYaGL(6aOYdr8s$' );
define( 'SECURE_AUTH_KEY',  '/]$r-5KH+GF26T5s5*M1t,4xzFNwS[`z-bUMs#^CWt:;uqD5y]Uxv5(?Z%^A@be}' );
define( 'LOGGED_IN_KEY',    'h^%Y[qSInkki)kF1sU}a#g/7A?(+},Y6XcRy{Y9DXQ$U*KSr]cj~8c9R4:wZ}DC#' );
define( 'NONCE_KEY',        'nbdS+6h/[  .-hMxh7 nfP@_S9Wx2N;I<Hjw#}Nw<;/;8/n3Ssp3-U}bK(Kl,g/(' );
define( 'AUTH_SALT',        '3(-0JAz-7K.lg1XX!{$F]S(_b/ACa>EO|?VY6ADIXlmh2,~:)JZr]Ua)6{l~.nBi' );
define( 'SECURE_AUTH_SALT', 'z$a})Sz U@vQkeztCOmCw+Ug5_~zyepockZ0[ej]1)F)i*sQ+Rq3C@s+H}-pnv4`' );
define( 'LOGGED_IN_SALT',   'q{B=.:L[WlvYo4MSDvkw8 Vkn.|Kn4y0TlNj@L*TFVifRtr:u!Yt7V0Tc!n[`3|j' );
define( 'NONCE_SALT',       '%U|Ib2:,6:Ei4-r6lLZWPGXDO]{=O]XmR+X4!t:l]ClOfd<9[OQ:,|$0hOm_+N76' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
