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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'khachhang_wp_jkinterior' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'd@t@base' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'vJ9L%2{+^.BBgWs@gwh23F-.&%4=FzTlV*>c]I_~0rX>I>Vmj> T[k8N@poEvZ<`' );
define( 'SECURE_AUTH_KEY',  'pUC]o:W6_ZIZqoX`NEM-U3EEJjj-49C]sO>tNk-+`6>e*1WM^g,B>ny;}]?iWjpn' );
define( 'LOGGED_IN_KEY',    '><qG@=d/X-E,E_D~5FUMJKaWQfRzeV9ZIGrRoB+#i.WO$.=#Ass+Wz/LoRqe`.jb' );
define( 'NONCE_KEY',        'K-TMwKV|&kYH=ce)s0JEd,`%<Y1#PmTNS3=EQ5W+9E!]zf4zABL2el5!9~0K#:{;' );
define( 'AUTH_SALT',        '*a1c-RQ,:TB7uH](Uh$RzPZ;f&[^=c|aB$n{M>QQs[r>Ar(0R53L~3f&[)3Wf=;<' );
define( 'SECURE_AUTH_SALT', '&n0{rI$YQMy!tYve!<WwYA9Mb|w#DdQ=[o~|}hOCEehgm8/age3~/vL&5;LX2XEW' );
define( 'LOGGED_IN_SALT',   '${RR!?[AZ;1~nl$fT.dKYuFqn5gU6w`b@ ^|tU1_AXV1#:-Skj;Pm^$oW!V4+K`a' );
define( 'NONCE_SALT',       'vTvn<}o{91tx])$T?PjRn2DJn!>S$ThNx-qRl_m&x[*DfZ1eQ<mY22Y4-Su@rKCB' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
