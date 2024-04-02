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
define( 'DB_NAME', 'nuevoproyecto' );

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
define( 'AUTH_KEY',         'aH9.,Ie[2/e+{Ag@<HM/rG=JuCY@%UyPO]6)$LaZw_BWGtY6]XwXvQ)vw3gLqW8^' );
define( 'SECURE_AUTH_KEY',  '8Z=nh04Zk7xhM^=Aql MRb)D-d{yA{qTxj2D>W(ba&R<az#<(X8czxoqt&zqPU~s' );
define( 'LOGGED_IN_KEY',    'e!4=j oH3nCYxaX#p%c,FbRF;[P;R8;XD2A`K?[nDD@`br[pfz(}2)`y!s~TM.nB' );
define( 'NONCE_KEY',        '[RRN~@Xf~-IT|x[+k*[l`kHsn(rGpvQ}#|gF`Kd~*jr?g{HK`WPz*28e+)y{foC0' );
define( 'AUTH_SALT',        'z,Q6m:;-B`FRUu!b bSvEfuR=76#EM+cMKN4h#f3(3-:>,Z&~b^v{@q|GsrBE5vD' );
define( 'SECURE_AUTH_SALT', 'A|0Or/i3>UB^oC%;76/c-#z,GtKn*N6,AR~K[e7l| *F/_U5!oAS0w@8+qf+S3vb' );
define( 'LOGGED_IN_SALT',   'Y~,x.X8dY$mJ~&uD/2 1Quv2 mvXu>O+3t5[a&,5-,/|7pHjiC+@Qj<y5},$p-YU' );
define( 'NONCE_SALT',       '|h_jNNl)l{*vfvbW&C$e)~puq{+U,eJZw`~]ywD!BTk&k|h_gl02BMlaK#]iOs<b' );

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
