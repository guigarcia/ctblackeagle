<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'guigar66_wp700' );

/** Database username */
define( 'DB_USER', 'guigar66_wp700' );

/** Database password */
define( 'DB_PASSWORD', ')p1wg3n]5S' );

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
define( 'AUTH_KEY',         '6erbofsfn3ig6vmbmf4p2weotxontrr03wirevwsgdbyfjjj2ycqo5vbwwalaang' );
define( 'SECURE_AUTH_KEY',  'nbe0pltrbv5qknckpvoub6vgvcn91hydh7kt9yguplml1oo3jmpag3mvkvqwt0hi' );
define( 'LOGGED_IN_KEY',    'fnuyrvzqg9j4hdz6ckdqzf4v6yvp7f7c0kmk684zl4jucmg5tcesocbojxjigkzc' );
define( 'NONCE_KEY',        '5opxnd99plcpzr2tnjnmnipcnzcscikdffppvv68xchwc3hajqvzy5mnb0xfw8j7' );
define( 'AUTH_SALT',        'xpujf8gplkpujavpxqrrgomczmox1ggic6n8bpblxjazs5zpdhs0bz9rgoepujlv' );
define( 'SECURE_AUTH_SALT', '4t4hzsjrxfkwv2h2cfmgdj8jrslijzf5oeu5poyy2dux7cwugqngt4ucdndn60c1' );
define( 'LOGGED_IN_SALT',   'ewjjl6ykdsu8hanl2va8epnqlxm1rmr6yotmzrj1jm1gfwhpabrfobabnxucd1hj' );
define( 'NONCE_SALT',       'b1azsfgmtwwb0z7ka0fujkhvbbdimqmbhcop78ikvbzzvfxy07rrbso6f910bomh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpio_';

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
