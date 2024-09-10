<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         '$aSf0G1SDSrY8qi~^f0450^:4z?M|G+.a4c# DUK5Y`!Aap 8lB7f#cVp[r ].i;' );
define( 'SECURE_AUTH_KEY',  ';XCf-i7Y9JCKj3LMULS{z9nDl]_gt#J#Tn%]9aV2{RX<C*6?+Qb7 |qpK$-0>W3b' );
define( 'LOGGED_IN_KEY',    ';S7T [h{<h.,^!,=9UEb1.iQ1]ce<Wpz~yas{{K~[(J:`3!g]ANKM<5E&Z$WewFN' );
define( 'NONCE_KEY',        'u@K6fcD5Qt|xnIDB^H(/_HiTS2<=c(2k>v7Fwt+$6J{k0tl]idcJ{Q=wmOm-tL~)' );
define( 'AUTH_SALT',        'gFdp^Q`$l06v..^*5]*1WV6g,Q0y7eIQ[_{JD^w(/3A`].0BV)&b`#c/;o&r(t46' );
define( 'SECURE_AUTH_SALT', 'MUX!B6?<X9ciPaer3BbsR]&_VF*^Vl]59nsRps;]jxNp]S`K$&GdvFq;$omzSa,e' );
define( 'LOGGED_IN_SALT',   '{4M_wR)I#Cg@-Og==.,]mb|u>HGj6LxCB0Px*[31I{/tkG7eiZiZ*j/8}wgiEoh?' );
define( 'NONCE_SALT',       '>T67GnwxX8g.Jm{^gH:=+d17XszHOde[h-k$S&dIXe(YfMstzc+R04c9!K;jgzv+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
