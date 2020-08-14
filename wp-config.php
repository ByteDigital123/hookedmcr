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
define( 'DB_NAME', 'hookedmcr' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         ';@U-h$F*e2f}`V8C68Uh&AW!vQ[*vyrC)!N.: lH?|;b*)q]xt(C5u$6=E*tE$$H' );
define( 'SECURE_AUTH_KEY',  'R):$LY*DJWN*Ee9$RlJBF`v8+3n-6*ueQg>KM_2~>.hb?LF?9<hFZp!n`C}^m`LE' );
define( 'LOGGED_IN_KEY',    '4/_ AWS}:vXAnnuQD(d=z^%:h$9TDJWBlP4_~=$3r4otqzftjZ8~t?RmvU@z}@SK' );
define( 'NONCE_KEY',        'RI:{7IvhvB=.rHH_aupsHQ;,Ox(9&zJ0L75BEDwOX0T&91$xFz0}Y%QPyeUD9YrU' );
define( 'AUTH_SALT',        '^+c9QWd#=3KmIumjGQvp%L <)eQ?k9CqLz2@&WUK],ZWs!vL`CEt}A*(0f(*w34J' );
define( 'SECURE_AUTH_SALT', 'QKj]A,McQUCTwWo<F1v*pd.Hs:X7+i`*F23o?8j{PJ6a5pW|?/Y:8~DdCcrVpq(k' );
define( 'LOGGED_IN_SALT',   '2U+nF9t1hewS$>{lJ]n#Ii&YeiC_2%8a=&/({+SZbZx2iML<0D<km]Omuyc719w>' );
define( 'NONCE_SALT',       'zt&h=JPM:bk.d;|u,RD:Dah@Z?Cp#?U3v@qqi|?Ik~mc7,<LTE/][<wWXAtib+2*' );

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
