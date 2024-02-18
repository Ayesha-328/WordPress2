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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wok' );

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
define( 'AUTH_KEY',         '=C]@&KKhHL5=//yPLD9Zy}9zqmkIF2/+01X.Yn-U;dg5nvB:1OK;WBs_~*1CBi()' );
define( 'SECURE_AUTH_KEY',  '$=0]G ?8J)I+< {O5PcD!#)ym4r$.U%Q_KCnX)g ,;.7pB[~`vX)v1./NxmU[M[t' );
define( 'LOGGED_IN_KEY',    'S3Lj?F5JPs2cc%{awA!:hi7tB#ys;%4)Uh3vm?,-3YM1{M*^iipmc7mDL:0H$iNC' );
define( 'NONCE_KEY',        ']2LS..CS@B/<)M9qX*V1 ;k@~b?H[o(5v?H!<t9WL}[)DFzj/q21*#+&ca]XNX%y' );
define( 'AUTH_SALT',        'K,l}:eMp7=1lO36s7vkjk53{;D_QfF:$&&XJqiKeh}r~q %$nlXC8(T /nW34omV' );
define( 'SECURE_AUTH_SALT', 'ToODGR@|?ND;VuP$E3p,x;zU(,mu4uG+~oTf30l4#sYLd=.@he^o(blf57(,_0bU' );
define( 'LOGGED_IN_SALT',   'p&N?OJo6V`>a##wpi/25w!(DGUt[uL;4?G:GMD/T9}ggI8&5nAzft#dv.`.oM5>6' );
define( 'NONCE_SALT',       'Sy[phK9IypaudC-wk}tq &)vkIxwKj,>m`/9K*-{nsi}q4<(t~vx%X$ ;4g$)?=l' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
