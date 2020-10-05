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
define( 'DB_NAME', 'sheworks_db' );

/** MySQL database username */
define( 'DB_USER', 'sheworks' );

/** MySQL database password */
define( 'DB_PASSWORD', '12341234' );

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
define( 'AUTH_KEY',         '682hA7NKmVF&ZeJ>CQYfpb_K<Ft0!,XjuJ5j&&I]y&tIZ&=^O^2b&E:|Rrp{8,V^' );
define( 'SECURE_AUTH_KEY',  '<^|I|qsL$bp!8}<5vF%t69dfv|U6]O&o|S8=Wh S-1Wd}3>+Q6enefX0FolHjLGu' );
define( 'LOGGED_IN_KEY',    'zI.o4.<vg &x{ARPvTpD~|RG?*stpwSU{TILkaf}Y-`6/>{MJ8N N5OL$47G[t@I' );
define( 'NONCE_KEY',        'c~.vc*}6V2s9aY?X~S_%_8XQR,2xb[jCY4=DmoStI~4Qwj,A[6olfA=u#w(|wT-O' );
define( 'AUTH_SALT',        'YR.#SwFIm;{k81&KO.3sn^INU&|?2|9hH#r3!4y|]6@4rmQ#Eo)9&?RP_8@b_5%2' );
define( 'SECURE_AUTH_SALT', '|PQ5[,[sz!bJy/Km~j/V|Bx,k-[6lAB`bNN.@$/)b;|PCz~-)$^l~3h@DA<A=KS6' );
define( 'LOGGED_IN_SALT',   'iC|LMa;&wzY(dEV0/X0Q9I!R3(d*aB&jL_i{xOKnDct_b)xr?x:_An@bmI$g} ^t' );
define( 'NONCE_SALT',       '}2}hU2#des_Ld7r-gkb7!`i<X:&a)!-uJgWOY6k]AO%@r.>F0EEWv.GK;-^0-zG7' );

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
