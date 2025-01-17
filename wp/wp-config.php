<?php
define('WP_CACHE', true); // Added by SpeedyCache

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanghoa_wp224' );

/** Database username */
define( 'DB_USER', 'hanghoa_wp224' );

/** Database password */
define( 'DB_PASSWORD', '][2isfSp11' );

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
define( 'AUTH_KEY',         'rahp60sfvbosgwxaojah7zjlumxievg0ev638h9js45cd25xgcebpciuae2v9ivw' );
define( 'SECURE_AUTH_KEY',  'yqtalovjmal8nho1npscotycoz2x63rnghmwb2iozothzumvqzy7vmv8fuylpnn3' );
define( 'LOGGED_IN_KEY',    'x1vacp7oe3zdjge9qnvvap6vdja2zwktqizep7cbovokyuh4aq49fcmulpexwhhq' );
define( 'NONCE_KEY',        '9podasdusz2bfskjk3s7xvqrmfq4nzdeatczpajn3qk2w2bmojy2cxm1dnwop9he' );
define( 'AUTH_SALT',        '8qvhdejeamkkfav50a3liv477fbljapjeiqq5sv9vec5vmscipwhjknfb6b1yjr5' );
define( 'SECURE_AUTH_SALT', '1v8rkemxvtwtjids5cdrsn4fdj1xfgoi9u0nxoajy6v1hdptot6gbm62e8xgcnag' );
define( 'LOGGED_IN_SALT',   'r33cairlr61usbvgeocg3lwlwzbz96rpcyrkjyk8plyqziep78ltp3s1juleno4x' );
define( 'NONCE_SALT',       'tbz5wdbxdjnjobhzzmrr8mczufgdohhbcx89ecpf4hgb2ujwe2ibhedtesmlaorg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpw0_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
