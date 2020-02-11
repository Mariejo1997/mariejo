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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'password' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nisvnE/(TObjV73E[8wKp!=U)Si_%F[18FB}CEt)uN[1z`2]L#H)?hEO)4>+qoca' );
define( 'SECURE_AUTH_KEY',  'b,Sr_PVn2MuI,59.$P^w9E5#{6>Res;@Og cU7]CV},Tz,EYGDD&=qd|Bs-!,mpJ' );
define( 'LOGGED_IN_KEY',    '.rB)(L(p7B&>|26V$#362KW;LKE9?DMZ^Y![|4EV^fvbcS9u*J#n+E^@&]]b~?el' );
define( 'NONCE_KEY',        'lJQyX:o;*+ JsW:`GAW%j`|=](E}+QYPI!2J|zj.I9NAEO**/{n=J#cGug%j+2y~' );
define( 'AUTH_SALT',        'x1?12[``ZZYUrQjH?(%l}WjS]=zeR)S 8-OeNiNjt+C(s}X8Rq+~R/L_A({ICkUm' );
define( 'SECURE_AUTH_SALT', 'X6:R-8jF9ybxFgkd474)0Y!#mcP{?2=}.J$.Z,j|X-d4<#s<:kOR wF=H09vlkmP' );
define( 'LOGGED_IN_SALT',   '..P51XaB%|3xRXg}-1{oRLrS5dQI)yW=d54.Zwy!Pi{_w{/cx@[<&`XqmcW+8MDN' );
define( 'NONCE_SALT',       '=fs9|y2/[ovas5lp$a^0k (xTn{b5BVibl9(%<M>%i[M]@ICu#dJ]TB7$F8V=lgN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
