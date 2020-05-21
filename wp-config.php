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
define( 'DB_NAME', 'dp_caldogpark' );

/** MySQL database username */
define( 'DB_USER', 'caldp_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cdpadp@ss' );

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
define( 'AUTH_KEY',         'xRDm!ccMwM/=ON{V*0^>XDl_H>pD>OWFSD?K9n|st<jgB)99rALNLp_aSxnsq1:f' );
define( 'SECURE_AUTH_KEY',  'No}!ZGWWAdhRLb42v%%%q&Rp4QA6Hc%Jnhe$6Buzkzq^ex3zC)Svd2fJ!^?e#V%[' );
define( 'LOGGED_IN_KEY',    'KBILGim<s#BspE0y*`09bfZ,^)|GM9!4RUp+HX.Zos&m0a#Y2;+=!0x#a]G[u2Kp' );
define( 'NONCE_KEY',        'WAq9z~%6QmebVH6{,V-Zq3lzwICjzAo LJ|Ea+}RKqjiBVb@/g d$UX+sZ3]Pwna' );
define( 'AUTH_SALT',        'Ga( qd2_s2|5pm5Hln;6Y+3IvB,d_vmkj0?BZRD[:ie1_Y7goJ:(|~Waf!/CL<04' );
define( 'SECURE_AUTH_SALT', 'B$~vz+8k$^0D*S9QS> %Bxt6Kwh0A@9E$zwFQsHTYLsj>72/N~x$uj2[8kW4,{&5' );
define( 'LOGGED_IN_SALT',   'd(q|(tbX8VW@FOI $$pB5,zTbg26u-KtrSvQh&ZOAi4zu+@XElzuV7yG^nf0@`I#' );
define( 'NONCE_SALT',       'YYeo[uX@^m@,M(zcq17cf2rg4v)0Y>Ic;TGpQtODS87qwuz>,25&dS.CSL_T{>zF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dp_';

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
