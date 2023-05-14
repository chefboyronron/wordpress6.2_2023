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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '7}%;u-ovjk>g-si*,/lD_5[=NuPoh]V_:v,EQnIE3`!]5<?-fn-K?%%.J=~H{5! ' );
define( 'SECURE_AUTH_KEY',  'e!)mo{<|25Pf2$JE$Y)jABZ6YkMxu:B~f@w^?KHg5OKQ!H<i;P2tV>zF69Q-nYmy' );
define( 'LOGGED_IN_KEY',    'uo^[#5P+~9uD:yx|dx`Ca)d7!1NeL_QQ>[eAy l:T!9 :s$t?ke1D ]2 Zuby=31' );
define( 'NONCE_KEY',        'z94FA#sz*bp~yfy[24ra+vo!Yc>u^Y~=!zgcpHP42<%Yz:D?.K#rk04e^G7=,r:o' );
define( 'AUTH_SALT',        '<D4w/lL)c>lQDj c6Vx~}Hn$:1{Gk%3va#D(0I63Up2G8xrPc#JNB:+J%2$xdL9$' );
define( 'SECURE_AUTH_SALT', '%r2w}^5sIZ%wR,kCA%.*9YgA~~;o/+>hK,UuoDW(d.?|#:J<4hA/JVB#6>h ]Rz&' );
define( 'LOGGED_IN_SALT',   'A4c=nxv*Ap __mTXAv8[bpj!uP`$Y47wB;ynW<RgtgDlq1/vZJtmp*pgF[Bl$ZUb' );
define( 'NONCE_SALT',       'iF{gH5D{Frz|a}PjatDo!UvND=S/?(j:e0z^bqx&-z6RTtO<}M($0P=;K0LhPH_L' );

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
