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
define( 'DB_NAME', 'agl_exam' );

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
define( 'AUTH_KEY',         'J}QP AeFcK JvTMnHutfju uu/OJcSsEfMou J3YpLh?!v4F{F#|rRl%K;noqi3H' );
define( 'SECURE_AUTH_KEY',  '/J3=rRNKX4F7]R^YPJYJ<:R)>rq;vIL&f4Je8O,vp5/6PRM[@W^_bw ^3*z<O&Ly' );
define( 'LOGGED_IN_KEY',    'w|CXj$g:%Pg)*]ZKWTijvx=l)21D OD`F @{=Gd(PkU[g<$t+Pi85n=1P<k-EvvV' );
define( 'NONCE_KEY',        'c<W$|*t5zUmBs)nsR/WN8qOXCAOK?,S+Vk?smQOS-#%{(^IHCw/&_=J(x.{#WSBG' );
define( 'AUTH_SALT',        'pRkKEDj{58/~=7^DyLxEg~AHrd3pBxSXMceL1UE c9pYBJy./$O~u4,KA$F>e#!^' );
define( 'SECURE_AUTH_SALT', 'G[w c4uGU|w#r+X)1Q3PL_hQaIIax$87UbuWzD kblbJKJlfmLH?%3z(Q&zxR+x5' );
define( 'LOGGED_IN_SALT',   'HzurG|MAE6Fcd0l![o*ortlVZL$QVH+0Z<pY$3PMe=mZo{W:DMEOH&lSsZ:!.^/,' );
define( 'NONCE_SALT',       '3uqktL>8t^$VBE%m.-epU@TC_^dZ+x4!=7#M5hPiiM~O4rHyeNqk4ty#;nsuTICo' );

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
