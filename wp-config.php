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
define( 'DB_NAME', 'hookedmcr_second' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.10.10' );

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
define( 'AUTH_KEY',         'v_p4y~{Ig_![UzFRyT`95?jC:}LBKUVPi+I>#EQy-Rke`e%tJ^h084/m*sWtIRS!' );
define( 'SECURE_AUTH_KEY',  'Ve0),FM9N,}4)Ny!.kq&7yZSiFjGpF*tWhH$6X~H6SE!-y]RFEk7;0qdG@zn,^|}' );
define( 'LOGGED_IN_KEY',    'F2~l6Et3(P%=cmoe1-j9Uj>N0@s.{8hDo6Og$}3sX3iN=KQ D1IGXCs5X1$bf+V6' );
define( 'NONCE_KEY',        '9X>5(u5G;#l2`.bt6! &JWTo5.QiJT)6!9mY6&r1gSW+:<}wmOanzmBblqqxx93&' );
define( 'AUTH_SALT',        'E}(`{ig3^PYDs+P0iNumhCz[Volx3wIipu7@YLh<Gb98NPkw8Pm8:br}GGF3d_0&' );
define( 'SECURE_AUTH_SALT', 'fPSZ?E$G>#cV*-pv].F#y1X(MHFA]]^8Y1D.x7>sG J?R9SC?&1FJ_(a-^E|Iraj' );
define( 'LOGGED_IN_SALT',   'a<;FLI~Ti z^:%C+6$G}Cx=fHZK.IIL^p%x&S|3c#wKp2IWxLon[iY:6ETB8o9KH' );
define( 'NONCE_SALT',       'HF>/,;`M*2r?v)u~S?)6gI8X)I&gMg:A&RJsNC:)2+r/0QKTh%a@n1][l/e <@ox' );

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
