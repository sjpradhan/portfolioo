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
define( 'DB_NAME', 'satyajit' );

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
define( 'AUTH_KEY',         'lC63(AyHW0^5_qWf,P-L.rFC~?LgXcuz@)PD1k]L[V0BZX0M?D^ 99K=N_FveJpF' );
define( 'SECURE_AUTH_KEY',  'GQ4H X/YaR_91,[8q[Z4l%Mn7d_}#_E~Q9Je9R6 _uW?FUw?;Hnwzp#r8ZEU45o#' );
define( 'LOGGED_IN_KEY',    'B>+7CbNXjsJ9jEIZ{b+,$./,%bk}9=kU][9sy=t*MS9eb_`lvx4:+f~ydxB u]!x' );
define( 'NONCE_KEY',        'V5KvJXu{u.qDnfp39PVFW[X=P[kSbwcHcVN,Jo1/jR> e1h{QTyuOuDSc# `)8~;' );
define( 'AUTH_SALT',        'ly8LzR_aMR=&P?.wMXeIS5_|{>8o$N^1)7(29SNB<GgvU8JN_Xr.SQY$ee)jklG>' );
define( 'SECURE_AUTH_SALT', 'Hz,?f2K8k6eZ3Qp,zw`4ul) )G]9;J!|m+v(||l1Dp^p#rE)Pj 6Sy!]@C.<^}A2' );
define( 'LOGGED_IN_SALT',   'qi|P[0QSB]&U8J!7FF<[m]629o1`dc}Woa7xbnGU+7D.oMuj65(*W`tBXlo]5umf' );
define( 'NONCE_SALT',       '@QbC_(mQTTxu6**{~Q(^bLu<$O1Su=W7<Z9up~QcIW4j/Mc;fbmkLd9I$lBCC3HB' );

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
