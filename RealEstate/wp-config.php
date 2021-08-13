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
define( 'DB_NAME', 'demo_immoville' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Q$E^L=?%fgHq,lYxy|I[EE$+&O39jD@Sq&AHfsbq[nhN~M%t7e0qHsgev8xg8$)F' );
define( 'SECURE_AUTH_KEY',  'BR+/2=d,2.PL!ZUE9#fw%Nt0N7<~U~_ +IIVHXXbFvxlrm[xM6]P^d3@=C;yCS7I' );
define( 'LOGGED_IN_KEY',    '!1FK,C7BWeg#HZndia9/*.y/vOi>0k2IdvM!J3H/8or&@yiKC)p`B8m[/V]Bm `s' );
define( 'NONCE_KEY',        '?@#x#!NfJ^cObn[}fXaYL_F!Ny|l:&0le<(pPh0](XcGBPZ0b81@[>1Z9$[2+m8}' );
define( 'AUTH_SALT',        'pFtrN 7YwU-9/:&(KG:<hkEXQ]tkQ/xpkmY&?L9P%rt4T|.=rVMLVI>9< 3FlR^N' );
define( 'SECURE_AUTH_SALT', 'AV80t@j::O7OW6c/@j|;_}w#xUF+T^IO>*Vhlzi[$}~l-H~EfdRj{0utDv=6=~Z>' );
define( 'LOGGED_IN_SALT',   'M=a?_gQk-9l)ID)!KE&r:bg!.#{A0|ZPs)Ih>jR /u/s85U7qI;)R(7_5O(sHXUt' );
define( 'NONCE_SALT',       'VKI9(dL`2B#wUbj4-n[g=MiQU8h]du>W!sJyfebQz3<I|F1[[G<l36X>9OZ6-wd!' );

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

define('WP_MEMORY_LIMIT', '128M');
