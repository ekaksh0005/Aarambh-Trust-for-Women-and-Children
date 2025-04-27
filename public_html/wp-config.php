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
define( 'DB_NAME', 'trusty22_admin' );

/** MySQL database username */
define( 'DB_USER', 'trusty22_trusty2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hT%^yrjZg%If' );

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
define( 'AUTH_KEY',         'KXtC-FX/e7Da5VYvrlQD7 GcQmf?A?&DsAw-{/691DEb1m9(RR~7<PvJtT)TNyhH' );
define( 'SECURE_AUTH_KEY',  'X`zM{O$4dfpNw)wb^AUW[w0+48v.!){ep_cRqw` NAltu7DjddwfgZI!21Y7bYGy' );
define( 'LOGGED_IN_KEY',    ':B*Pb}@xb>4!l3mfql(YP:@Nb*Vh${+9ID/xaDONT0>BK(3n^dkDq:}uicJior?I' );
define( 'NONCE_KEY',        '.v-Z>wDZKzRUu5|q@l]%:y3A9K..A}(]a!ym^_-mY9==3dj1KrOGg.f:Fv_a:I]k' );
define( 'AUTH_SALT',        '.ddkX]cZO5S3TczlGJPYD r_=o[lN!z)vD<8YmPd9T!32IQel^a{@~O!3k^ULW`r' );
define( 'SECURE_AUTH_SALT', '4(f)SK/hs*d5Nr sY}R5mcW)p-&# P}Iq!88GSL)<9`aX-}WcFYHMb4axayr~5%q' );
define( 'LOGGED_IN_SALT',   'R?x&WG%S8wzZC(K-(]zi@Rjrj$g`3xLztazuS#iJK0?%T&wzA-`*.p:BtG0K(+5=' );
define( 'NONCE_SALT',       '&{O?Ps,~4IVTP#z%B+@LJbKM6bPuu]UarI>9g2SoLfoE`t>}972iy@}b`oI{H$N}' );

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
