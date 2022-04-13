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
define( 'DB_NAME', 'labb1' );

/** Database username */
define( 'DB_USER', 'fredriklexo' );

/** Database password */
define( 'DB_PASSWORD', 'hejsan502' );

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
define( 'AUTH_KEY',         '>X@HLBRUSRIu}1I8B/zh0,<BZ[M>-YwB38Eyr+f(~4WmnnfXx9zeIp8q5xfV:Xf>' );
define( 'SECURE_AUTH_KEY',  '_pQiRGK5w6wf$ac.;LhM9@3|yki~OB5%>f=n2I7OFOZ}^Uft9.W1dt`R7A]>s>9K' );
define( 'LOGGED_IN_KEY',    'F)L@Yt7_HabL;Bt^%DZEFT_{6]i3i+M:v*Q{/am<SJC%j7,-[h(#UNM#M(@[{ q@' );
define( 'NONCE_KEY',        '7.y.YQ%Ppw{4cM,R>>.gViCpl.QmTX}}FVH 9*HS]6*R?Ta)oM`0VF6~D^veJq`B' );
define( 'AUTH_SALT',        '7Sc^L6c}UWY^=tL1 MRsC``(5p_8aY(vf1l/9S8y${vtm)+^5|;iBQ@mANVLw4ZI' );
define( 'SECURE_AUTH_SALT', 'y(in#2&kwo&YUWEk8b?o4CEEY<VF,6^UC/M)9A<NU5P^*.+0uNsf%vM|~J]g+p }' );
define( 'LOGGED_IN_SALT',   'fGt=9p?K# Bq0] #ga[RxML#]}krkIaD70{KY6;8hE?qYg=NKM[0ol0DfCQQ>y#h' );
define( 'NONCE_SALT',       'x66lFoj-5RvQXyg<Tg1&_|6(=Cx=G3bXTMfLs[Url<7aGGwIhW8rw_c&FHwFj?-C' );

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
