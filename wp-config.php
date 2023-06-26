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
define( 'DB_NAME', 'wp-ecom-v2' );

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
define( 'AUTH_KEY',         'Ec/6QzH$fK^(Rp0hrnU{VvA=$6HV|qutb&q22RB?Zjo%}r2*UEup55DX-t7#G31e' );
define( 'SECURE_AUTH_KEY',  'j5FJ={Z@@V4$orL(&5dC3c50wwn]16 [cR( @{bjtU3c3M%?Fv7}R&(O}!(X]%:~' );
define( 'LOGGED_IN_KEY',    '@k4KL%[j@2{V8<ukQw%&WC%A{R][OnccDaJpmoHn#H3WQ?D`Dxn[O:[T!CE,g/=O' );
define( 'NONCE_KEY',        'A(saNMXT:+!NKF3yQg-9{2oE&42n C7g>#j<V0mGJB1[{4v`v;_l5x`^Rx{>1u[.' );
define( 'AUTH_SALT',        ',rc&wlUY!D@^hS&b$5GD~z18zJ0{3H45e]EyHAa -tP:LwAyDlD~R79Pl=M8Lyv$' );
define( 'SECURE_AUTH_SALT', 'ARKUsEp]Vo-=f#sdHPO2=~.f7ViZCwm[}ddL_]vbJ|I(7^pshz4I&BzcH$pwT`%7' );
define( 'LOGGED_IN_SALT',   'l&m:az6Lb2P#MdT8La}(rCb:(EFi0%~ WEkOl<T117Il-5lVdOC@L8lDB:=c{J_S' );
define( 'NONCE_SALT',       '?ByIeM-9j:7x4zUpRIBY!Nt#|ICsP(+J90o/7PAli0MY~=(DwE.a/uIedZ TmQWE' );

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
