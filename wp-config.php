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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'to`9jRmSZi+`r0;qJE=k_4}rn{ex]~)Q?]3X&!EV%B=+#yMFdql`SEL-zHJBW>+t');
define('SECURE_AUTH_KEY',  'gB8-=n!5eBf3Ua>Fhsuiu l1/F;Ow6nFo<.-;bc;|qMDEz1etC}9;xg.5dbJ+[e;');
define('LOGGED_IN_KEY',    'S<FvJ|pIYJiS*u)Gx31:p+buO[R-=S4|_)#vo)M(HT8`Q8PVtru$-csYpa|-a{j|');
define('NONCE_KEY',        'G~IdZ%_DV#`(#- ROc|Q|H+&o${YgPcZ<GE:r)6Xim^+|%t1In8`#ehAfV9>XR3C');
define('AUTH_SALT',        '1wgW`5LjVQM|2BZeBTP  K_)!Pa8yVfRwCliz*=;*V:iG:Sgt}B-20]pY%GyWn+x');
define('SECURE_AUTH_SALT', ':uKK2-W2KXvghv|gszdEq,=Q2y4QSY|7Lx{3Wy|NaMya S?mc0|6pNXH,k!x?+vS');
define('LOGGED_IN_SALT',   '.,L@;VjZJ;!gohAV/GRp*4]k&U+qs(IeFtHE`gd%_osl}({SrID0c)M@|Mg/C2]L');
define('NONCE_SALT',       'dR7s4b8N9<hyhG;z_>FWt1Ah)q|gKIXH?|`C -l7(H21AkGT&b4OhK|NE)n$$G{u');
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
