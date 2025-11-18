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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'new_site_skomda' );

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
define( 'AUTH_KEY',         'AF>-m|Gj@&o$<T&>]jb5xgid`-Qc6o>M-^W7ffg?S1V^M`PTn?O~pw$kH`;uo~Uv' );
define( 'SECURE_AUTH_KEY',  'z`>c`%dWmTZweh?NUFb,*X7)!0K>_/Hw_{L5FV6(< OvE0<=2)h@5Vi:bpe|0%G7' );
define( 'LOGGED_IN_KEY',    '7w=)^-dma{56V7|9[R>C=]T*Ik7yaFjZ+9g;_D*6_L,-sS1#Nhr%U+[Sj=hI&sy/' );
define( 'NONCE_KEY',        '=UE B_7#WOI<e<Y&`acr>! f$V$lye;c+-[o^7Up2I_]D.:2:UV;M6a~Dv j2<ka' );
define( 'AUTH_SALT',        '}4=seuD>vISL$~2/.<lT*R,<~qAfPKXd([91hpe.s-~d,W}V8b1`;`7Z$gsO}RCy' );
define( 'SECURE_AUTH_SALT', '2Vi#Jgc%m[1P4IlI%fUE1m~3JzuMfUe]>:]]ch+V@@5.L8TFkJ&9+Wd4n32C8${{' );
define( 'LOGGED_IN_SALT',   ' Z0-`z5uN:Utik_PD6+]g<IaH1IpI|&5,$(=1m{z+RYsyHqm7~L66=k=0w}2S9T^' );
define( 'NONCE_SALT',       'Rp {8UPKCi,f#BX2G` {_{n8R)A2H>/=uJseV>t._<k0LlPhSSYWdkp4Q%n&(xe,' );

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
