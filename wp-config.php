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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'g$CA/`0bg7$}&Zcx%:$G63/*:V+x;4xh/;$73VT2c}OItF.lxHH`S;j1l,iZ*@I=' );
define( 'SECURE_AUTH_KEY',  'I}5xQiS9#k6HnC9sgs9<=%|l%dwdz tLQtN-G-=nh`FZYSHzk]9<ldz%GFmv(SPS' );
define( 'LOGGED_IN_KEY',    'Tem;^!A{)i!6uVgOc*Osw}&XUNtm0?6P%`?sE4R7m.7F7+4W~32lKHOU!f8ZTCyc' );
define( 'NONCE_KEY',        '(QUGlnaHbylcZ)LK`.&Ao b $mL 9r.R/9T$(nif@3ZszLO2O.=g:f;MRC C[z<^' );
define( 'AUTH_SALT',        '`jF9PXSzz^Vk%@Vw=Kr7^(B73@b;ons|nZ7vT1:|}K|A[S,(vt?*|B2Bl9TIEyjx' );
define( 'SECURE_AUTH_SALT', 'b6*MwakOpod}Q-z34]:H^KZ uEF3]{{0COvG}!D9DsMO-Uc+e<5Wq(E!EyuLbI78' );
define( 'LOGGED_IN_SALT',   'I6,.D?JM]: 6$36z0_M-#j<mPg|^KEp4Hys*rjToB=c-&81|T5,1FH@~V,_(udaD' );
define( 'NONCE_SALT',       't_q.${z7kO<ydF*Dy,BI|e]gCey  Xlpbm?z]PU]cH8)axE>&K(f[#T5 >Slpff@' );

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
