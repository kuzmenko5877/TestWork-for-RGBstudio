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
define( 'DB_NAME', 'tx535795_db' );

/** Database username */
define( 'DB_USER', 'tx535795_db' );

/** Database password */
define( 'DB_PASSWORD', 'XWr3cbed' );

/** Database hostname */
define( 'DB_HOST', 'tx535795.mysql.tools' );

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
define( 'AUTH_KEY',         'kJg|E~KS~Amp}2ZQku/7WPi%&@jNgx`*vq7_0U8p&TTz^EudK~4Kez,Dt*ywIM62' );
define( 'SECURE_AUTH_KEY',  '%E4QhrJjzegvd:8#61%U8RDA3F1W]qlsdfUf^|FLF( 3yXh!px{s61Z|OS_&O}Io' );
define( 'LOGGED_IN_KEY',    'ab#9y69DkH}.r^Xx70-h9&f!=.j+w}/-vu:Z8:OrP`>*o!cy2K}A*Za>:UbkHylj' );
define( 'NONCE_KEY',        'oETRb.Lcrd]xw<B?G8$&fUSfA75vGsu1@f05jaw!BsG`^6CXK.bQJ,<A~i6My$@4' );
define( 'AUTH_SALT',        'jfByw9M{_}B|KF@%6Fw%$uTKM5_i<:uoM6]3,k^nqW?Tv BDX*<BPwUL8&ZF-B>f' );
define( 'SECURE_AUTH_SALT', 'p{!akaT]Qq1u25%CP13c4leX9s1Cng.>;CRL}^DZJt,1W5%k6r28XRkzNfZfUUH%' );
define( 'LOGGED_IN_SALT',   'nDi!w@B5{Vr?ihrBfm%9kB6X^cl(wLwqOWd?OmVV_EJ?Y$1f)J|5scy~}%zixC[!' );
define( 'NONCE_SALT',       'n+[9NNg5P(W@;s(&v2Er)b<Vz)]5^V5M)O9NsPmCzK@Fq5B5zs!:%mF<Ahsx+uJb' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
