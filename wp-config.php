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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'XYln]mA^lkZ)o]Iblk-L,74~2zr?r}(u3~aC.<kB1]b:5m]^(nPt7W|h$r(51G*z' );
define( 'SECURE_AUTH_KEY',   'adhCu.Jw37A2agA91V-5tWF;jT]/2CvP2~R[y NtSd{0-yx`(q_ZMk[h&7zf82ZB' );
define( 'LOGGED_IN_KEY',     'fVMCm-<H%YVK(DxCgZvgVm.j%G]2ycMkzJ>+!E0Jhj^IaN/al;Yeed:~UHZ0^.=X' );
define( 'NONCE_KEY',         'W]Ja=87@h29!sbc&9!(>|,L0YiKtz~8yCOizXAyomXQJ2Mm=#TG0);l;qHl5&^h[' );
define( 'AUTH_SALT',         '#-6ORUUYMjz3Gw(w<}zcJ 6*%5=y&R9}9z_P_3hAOa;4H6,3Z/`hH^cmxKdfN*fM' );
define( 'SECURE_AUTH_SALT',  'w]B8SD(wT|?L&}Ov<CIf,?{g0TUDfcP83wb-HB%RXC,p<AO5E9ai~m*kUc&=9KxR' );
define( 'LOGGED_IN_SALT',    'lP:Dn#(3AtH{,hQF+5gO}hXFa*=NJ/h@h+tMVz);0oL[!?wj!qLV;pHlji<q(saZ' );
define( 'NONCE_SALT',        'YHxP8e7)^Y>v}B4^Qfc+l~b0Do]-drrO5MZG1R9S&+-I%+;L`>s{c{A%VxGEcG93' );
define( 'WP_CACHE_KEY_SALT', '}bI$@QN)Fv)=moC-vV/N$A!5O)e,~Kh?n5*q*Kb{f?OJ;?5;?2#&k~M2QXF1s8A|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
