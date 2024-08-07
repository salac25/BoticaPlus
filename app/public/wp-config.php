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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'snPrVe8^=U~x<6ERlcO9>`ME3qK_g;[i,Fu2L$gSI#Lu3jzn}wfPxSsO7qHy:yRv' );
define( 'SECURE_AUTH_KEY',   'd-[LS4IC$6ijYns`O:DAt[3l.H4VYEb0sb[rO>OK<8,Y-KNEz{L({f4cr@8e%hXN' );
define( 'LOGGED_IN_KEY',     'e7;-!88xhw#[eh=RaeS sZU=9.S}wL+U=oOB*k|sXe,?5.uT:c_26x?A_z60<D=Z' );
define( 'NONCE_KEY',         '$VCwW3OOc3POr-auaq|koy@#zt>]y76]&V1?D1 tU*[:-3kRJzhlzar0|S774&O*' );
define( 'AUTH_SALT',         ':dicR9RcTROE)3_(^T0!N%&3}KBN@:V#JeC+TD9;MZM$f7cBzx<5f3:ReT&ZRiF9' );
define( 'SECURE_AUTH_SALT',  '.S.>D$-Z9U*?zj%kJ@ie^;(}_%x$]1ZTQx25>BNkEPM XO)Rg $BnCI{P<pSmf_Z' );
define( 'LOGGED_IN_SALT',    '<jc?+L/<_^iWNyk72;eQge4-@SU?$JVxE)LQ8u|NuQ07:cqF8JO=ua6YMf P54=5' );
define( 'NONCE_SALT',        'p,=t0y)p+~]t #d,6eXh_lqz@qqUZ2)g`QQ|]gf`mU[Q%p aUwg2T?>w0KsE=cLI' );
define( 'WP_CACHE_KEY_SALT', '#T1HR.wnz+-mKgBYxi3QbZ4 s*CcK:<H%o^o15(UMj24wvrrX$1g7=Ydx`J0gjwP' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
