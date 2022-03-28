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
define( 'AUTH_KEY',         '3,+>^,j=w:b.uesFwJ?,DF-hUVM6g>WJ?bn%4ucT7D$C;W188;(8!4]M~2-w.Z.>' );
define( 'SECURE_AUTH_KEY',  '18)H~0fX_.ku[G.v[oHgpxfL}HG0QL*5F)#U;94kyfLMo -GFgz6S+FxN7wp,eA|' );
define( 'LOGGED_IN_KEY',    's8t%>Sw&?f(B+5w]U2too8Q*zQI~!^n9,;Abt:s|3lj%(ZWQ~<CdW&E(G]{mD@GS' );
define( 'NONCE_KEY',        '{vt4wW7&)_2#LCk5HAdH=Ki7`2DIiuqHA.9f6!N[BH<AE[K}K(d:_9sjhlO)TrAo' );
define( 'AUTH_SALT',        'Ja >#}k5k bd!JBO13E|}An0Ne}r~Y%C5^i%)qRi!Dp<-LJ8bOd^derSC{wQ@4~~' );
define( 'SECURE_AUTH_SALT', ';km[!$@>b/,bW#q<.z4,/35?~x%*UG/oxQGWi5zCjCX(7-?PAr-$5OllxX*m!3H9' );
define( 'LOGGED_IN_SALT',   'F`=I`hZ:S/(/)3`B<~qqFK3#nKMWF _*jZ4PK?/Py(m||M0?jsF#pjX,tt|;jtF{' );
define( 'NONCE_SALT',       'A>y8-xAE?7>={<-I-s87q- U`SMkC?Yj+#76Ea8Cx:!B`LUZP>qvsGXZrq6kxs Q' );

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
