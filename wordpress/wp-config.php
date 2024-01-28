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
define( 'AUTH_KEY',         'ptQm!aJj3N@CoiFk+(bZG.Vpj=]VM *h6ERcZ^1[J)^oGJli5kuvoy^4q^rA@]@]' );
define( 'SECURE_AUTH_KEY',  'Kz1E6=RmAcPf)Z_ywy GO_>N%Kup8,7n6AYZ&:$8blh7b7$Ew_*Y=HH?l>z}FYcI' );
define( 'LOGGED_IN_KEY',    ':945x{-TE$)rxv=DOiVLWGVfG8l;;oqr*_F^2f]AOjnw#dNK%D9wnlVx&9/F7Ey*' );
define( 'NONCE_KEY',        'm*bPu}7!xWi<m=Qlz>ZcfF8GPPlL~fq(*23GtAkE:Q[F&r>n,1%s|Pz[Q4qi4{+5' );
define( 'AUTH_SALT',        '8x@8*Z%0@=t!;XAq=gI4a:UV_{j?:lK$?zxX1~v! Y!~~/QR+mr=:=JKytv!&Rq5' );
define( 'SECURE_AUTH_SALT', '$`2j<C|f:]g]a<MyQ6qhJ/3ixZnfKSV l[]X@>BgX>.)wG;Q?F_-<?<%uOHsQ/R^' );
define( 'LOGGED_IN_SALT',   '--?MhIy2>tO)RJ83*ZTU1MLzK_Np2b) RVFkSmXFfuPozQL~.yqvS*=@F/]D%(%4' );
define( 'NONCE_SALT',       '8r3Ag?(%yJHaBeFqPFnZY3 m/ad[nC`BP%FD)oxI`zy)_S;SdemH&`7q:L%hPo|u' );

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
