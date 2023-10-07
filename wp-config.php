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
define( 'DB_NAME', 'vespaland' );

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
define( 'AUTH_KEY',         '2Bj<{(E*!>XdkK?Pr5|Bfxb~FahK7R8Xn.I9:6n0bWsA|w1ukKttFMuCf!H54,7g' );
define( 'SECURE_AUTH_KEY',  '5eE4|$0>o,0c_wRk&&wJ1SwNQ[-xsv4,Mfb9XK})XRzUI:84J<[p`cX0_D)QsE%~' );
define( 'LOGGED_IN_KEY',    'c>js&Ol+RH@5{[1TBY7JqA9rV~-2!GJV|0lylYsPvqx~+Naoaee;9`5MM WRoCFv' );
define( 'NONCE_KEY',        '8F?+,|GYqvf;Va!3]cv(,`*UQ_zHR#,,p#Z-d`$,7R7iI=UPlB<caCs}^<cLv5]N' );
define( 'AUTH_SALT',        'XSxXl:epR ~}-m7tn6~PVV8ADF0@O#h.wn_f$;*UHiDqXuK`D_$~0T)vbk[#E.Z+' );
define( 'SECURE_AUTH_SALT', 'L2=$ppTVB{T!txal%R]./rBqdE#P pE(!iumc2}[+W*8!VyPz,P1v`UMf.X;&69/' );
define( 'LOGGED_IN_SALT',   '-eg9e P4$>[Mv$=OSg7XYg^?hA8~]1_GWInY2#tTV[pz44(*G>7IBEYo-;6I67C=' );
define( 'NONCE_SALT',       'D|H~^MIz0DRnYM/~IEnZ8DP>26P+yhV!VC~ ]qkI]tK&U>t/[+Tr1o^w5*^_Fz8&' );

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
