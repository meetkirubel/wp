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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         'Wp.9:-(i6]qdkf2]o4p^y31+B56D<d}CQwwq/Cq:r-lBOJF2m=+4Qyz@D3vL$!RZ' );
define( 'SECURE_AUTH_KEY',  'f?RbM?4u Fj++rR,L6i8[Ul r6G*lKT0Vd._bR?a65[UZh#/dQEa__}.:gw_,e,3' );
define( 'LOGGED_IN_KEY',    '<qn$c|&CvOpkmRFJ+gHbJZ#_b5u:F@_|@r&%yW<ujy41](_7`v1kT1c#xTtFVV:F' );
define( 'NONCE_KEY',        'C[hAaHTZ2c6w~nbHzo0]Ja$,6[x;xE3Kr!;%Zos=%ZdRj|6a if^VL[%!GWX#8q$' );
define( 'AUTH_SALT',        'E]q.2Z9]7^_qe]4b.R=$;FMyz zRuItSa v_y(_RV1RVt4q!ufK}Oe<;wwvEKEMa' );
define( 'SECURE_AUTH_SALT', '`f.%H8?^]w<N[1Gh!*UD9iu,gMy:!`z-1Eh%^];3B5q@*xDsUmH^#NHyF.Ko79zf' );
define( 'LOGGED_IN_SALT',   'j8q;#Bca8 }y5cd+>HTr4d-7y]6d}K1CD~Va~@hv|r:9oUFM#K/nmXfnfN9^&N`p' );
define( 'NONCE_SALT',       'iSeyNiJy^yFuC4R=^3UpvLbE{!e`r&0znoI47o1I+u<d2W^{58cEA*MU@J/$,|ez' );

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
