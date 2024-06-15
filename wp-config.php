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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '8gm$4eVO;a_):=clxfb,Nw#G xlw[Hzc~l!R:,s>rd3M&.wir*(ES^}1!v$o_.v1' );
define( 'SECURE_AUTH_KEY',  'Pc+,5L<&vo9wk?N%O;jM3e=:TKR%I,i6J8D&CZWJ4.zR=sHG>_@vQM,;q5?%Cw}2' );
define( 'LOGGED_IN_KEY',    '7^orod]_B@CcCHR6bhM)|nQmn)}/VcU2Q#/&O{[?Uw9M2ZsBs=:@Xy_ml n5&#RE' );
define( 'NONCE_KEY',        'atyQF1;`14.I7nP38)nVznUl_%(|+5^3djq}|qN_|OxLc;c`5]2_8+HXx6VTbFIk' );
define( 'AUTH_SALT',        'hTP|^DKwYGZ)9f9fX*jFFD(qbx& ZRfr#y3@%uE$@]7(eX6;;f-bau!o90fmI3[L' );
define( 'SECURE_AUTH_SALT', 'x%d;`4K~zEXxbh3b P/C*8DV=Lt#_zHBM?rit_Yypg]W}i=r7t6y=ZV^Gs<Os&g>' );
define( 'LOGGED_IN_SALT',   'VP]3Z>^%S,$DC-9A][U2vv)vC/P3sYF?I,BB*Td} GXFz Py[x:a2B9{n`}k1aJN' );
define( 'NONCE_SALT',       'Sr8h)Xz}z]0jKe(2g.*)c`LLy600R+xx?Xs%#a;V|X[XL{*)u.ZGZ5n*g@^XuV|s' );

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
