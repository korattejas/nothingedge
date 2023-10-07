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
define( 'AUTH_KEY',         'Y%Q>kV2=Aen`@-f,>m=XwZ:Cf3Y9`94U4yw1,y3#m1UrgJ]i[wp(!aczY?9#2f#a' );
define( 'SECURE_AUTH_KEY',  'N,a%A(+1.LW-YU:$7vgpvZa{gY!>h79`!O)-e/[J1Ydduh@8dS{R%PbX=[2I@A^k' );
define( 'LOGGED_IN_KEY',    'Vcs4j RNhRm.v<-TgvgxBPBxb@*Y+y(c(|pVqLnK?JtX(TjOC|@>K!:lGRSvu;Lh' );
define( 'NONCE_KEY',        'KjE_Jlh-`9pzi(x@BI|.P A/(n e+Y+dvzjnwR}yt[@@@>]Z@m:HopnnYue-A %r' );
define( 'AUTH_SALT',        '3vG}.;DEGP7q~>ACn+?0Yb,Ar*tkA(;O3!K8(#xWol[~#k({p0*yXFp~>X[nm5P?' );
define( 'SECURE_AUTH_SALT', '`MnFKWM0nW`9lEEz9sO,iF:_po:/pke(r0n/H NG7r/hXsXJnB7X(*tNm<P?V!{5' );
define( 'LOGGED_IN_SALT',   'S3(p<]&)~W>??2g:5[[h;Hw6^BS&NU5^(!*r3z-(VGGg3fo<]Z9yj]{tT#J)&(vV' );
define( 'NONCE_SALT',       'pcZ_B&O]Ro29M~X$+U@j(8U4YwVwxf)Ene)GlXt!^&l-k!KtKWSTq+vlrlqw@&~1' );

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
