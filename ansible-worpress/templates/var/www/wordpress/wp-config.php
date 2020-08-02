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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'yFK!MkPuFFDdyIUqm&8^EZjpz,{jFYc.~`:P;SgbjSHkNsYnLlqu#9a;c>a&LB|x' );
define( 'SECURE_AUTH_KEY',  'E5[3@F^]Qa{=,Rfd!sSF1E4? )+W_<6!L89,ldA;&>A:3p. h0](1<[=l;X:q9og' );
define( 'LOGGED_IN_KEY',    'j<RzQELyYi@#hk6;iHf_6qbF:,:ag`n`S%O5C$,cWTFaLqt$x!@<Qg&Ox|5eC}6!' );
define( 'NONCE_KEY',        '[}1J$Mg. 41k$3J8&$Xb~D|yH:/}nGnMAKx`bvaX&g}7D3^Q.xoBecNi?8L]3tY{' );
define( 'AUTH_SALT',        '5^QVPX=AGjeZsCRwxWup*/~hBW8@@mBf *r1f*6mV74oa=qlQxw&]u]5A&S[EOQp' );
define( 'SECURE_AUTH_SALT', ' ,QNGgy8@XQ(qL:8 1CAjHuM+{ZyZA!DZ,hM0z/5H>G`oaX7K([{*oy:3jVMZmvE' );
define( 'LOGGED_IN_SALT',   'Pe3[]G04a<ch{reijh{rWyDU;;&]?l?eBFIa2 (5]NFCFFp,BYaL{)a&=a,C?Ad8' );
define( 'NONCE_SALT',       'V%ae*%UByL)o`W[J!F5ZmC 9^]yM;LY-nM/,W&{.40k6UzkqSYE}|B=L:wnNrR9B' );

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
