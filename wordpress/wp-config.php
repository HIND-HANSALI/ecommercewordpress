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
define( 'DB_NAME', 'ecomwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '4I,iFNZs/A,f~/,:8`/V2VbHN}C}Ad^R%D17+MO=p?I::Qe/n+[A&Qg;)1C`ARo<' );
define( 'SECURE_AUTH_KEY',  '?zpMX?.VC0KDP>o.T)nk%/+hE,C|UjAf@w`p5G xm=^((p~hki[%+ys|E|Efl GI' );
define( 'LOGGED_IN_KEY',    've9tr{m+Ga5m{@Q .P0{2H9y|D_]V+WbTS]pxjeHRJIZ1ukt_3H]:?pw@@8xT,;l' );
define( 'NONCE_KEY',        'zEDXwh4*zy{#:sy~dqN]c`2N$Og!vj8wh%hOI5$3Xnt$ff7tVK]v;K@Gs?DU7uW0' );
define( 'AUTH_SALT',        '^Fi-5[&W1;>ESyX@,m^ Kq2ME7W)6**IHqmTn5$&Xg%mM|*dA$s6O2#X1tLM*f0%' );
define( 'SECURE_AUTH_SALT', 'Yrw/=,AK 1D 8x3 4Y&MS{(cac#&xw^<G-e@Z erAl|AX<v[&Eqy2Z#zA]dj#8yk' );
define( 'LOGGED_IN_SALT',   '9lFRGRD2[]cYVV&ZsI}%a{isp`)LT~nN*$oyd=G@Rb-;Rd>sNf!/UH8BwF%C/_p#' );
define( 'NONCE_SALT',       'SkC5q09sJLIfY1]:0Kt1o~|%la&LzU0MszE7(zK+p94bSeKRVM~wwS(8q[[-&!65' );

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
