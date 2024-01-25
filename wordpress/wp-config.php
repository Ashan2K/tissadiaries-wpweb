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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '3$YY^xnHbu;nB[rJ57(d$-@i,})?S&O;:sce[4nMS8c5NRNqdN;3v};CW%&-JSt7' );
define( 'SECURE_AUTH_KEY',  'AU}sxS=za]D_iE9(LVc1RoZ(Zp<mlcT.rU6GVW)zX&zBZt#*YUzoTS[=px&9Z;-S' );
define( 'LOGGED_IN_KEY',    'O1h~H,E[zRlLJ@1FiG6n&XKdH0eR^t @Odom CZ-RQmMe<6L:nV/Y+G5GVr8;Zp}' );
define( 'NONCE_KEY',        'HRb)qNOcVEpYv]#N@n1sb, BAfiVX(4=7@h}quClKXA$&R4qkWTz4Od,aT>P9Jx)' );
define( 'AUTH_SALT',        'J4hU#SnimsXVS##}.MY5S#seVqn55^`^ET!!v}r>NSW.g&B+J$(u*8w{8?M1l,Q[' );
define( 'SECURE_AUTH_SALT', '.uRbSgTlnm?=id8SRf;;3Y/+U#Fu;p&]}[jI=B{#I!OpRIlvWH;RZ+~Rg:O#9j5$' );
define( 'LOGGED_IN_SALT',   'X:RCR/jwk,oSf`KHX46%-<[X;.~iYr`+6a2ui5Eor@YQ.,rL0&)x6(<BRM%Ltsv)' );
define( 'NONCE_SALT',       'CM}r0Q,A>d*dgIJaeP$B]#q/XTsrjiti0p*i.0!uLZ!2)8bOEQCRlR,L<`LB}9mH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
