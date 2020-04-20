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
define( 'DB_NAME', 'bd_praktika' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bwk~k$(el0O?Ky(Ds_Z#IvEZzYl:.#Mrj,QOo&den=WJ `)?fRO_4Gz}I0Ib 0{(' );
define( 'SECURE_AUTH_KEY',  ',Beadl:%Zz@8Z67NF0i<w)k-rFYrWH2Q3X=x8E7lKTo=`*UY#$xb}Lg9QyV!=7V~' );
define( 'LOGGED_IN_KEY',    'PUXVRp:QJ Vl>10GT~zgJ>U5a>8hG1qh}%/Bqpt1(hhC#D$x )-t*UKxDT[lCIP(' );
define( 'NONCE_KEY',        'cp@OcPr[#}7zQHX$T;_ D(a?k#X%6XJ*Zq}Ra!tstx`,lx_xm+7tBLjfD9Ny>w4T' );
define( 'AUTH_SALT',        ' BA)jV6by81~ L(ac1z1W:OnG{zm;LgYth}!f/jy$_G2qZ>sb^t8e2AisvLjZy-0' );
define( 'SECURE_AUTH_SALT', 'sopf:/tS6AZQz?>>)}y{|}e?h~D1[0$_NOmsa1F:u%HTRhhuabg,,iAPpIZ@p3a#' );
define( 'LOGGED_IN_SALT',   '$}C+`GFCKBq[kvl$X</z`Sx&1qDtjtI4+9,U:LIc*Q-/p^dAx2}RU>H]<;j&RLBS' );
define( 'NONCE_SALT',       '83`S~YG2Ahokm}L0vZ8B,~x:#=vM<rqzB!VW+f#1th1TFQ[s`e^6o-EF>zXBR^|$' );

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
