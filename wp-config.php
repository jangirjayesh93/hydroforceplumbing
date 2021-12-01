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
define( 'DB_NAME', 'hydroforceplumbing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w<Gd-PBVX3L98Y136BNM?W{S4<;W[X4/92mH=VD%$5x]_+;{Y09ce^o5(yqOV y[' );
define( 'SECURE_AUTH_KEY',  '~Mf$N*BG:5B@!m[4o}/?A9]<3%. +5F?&/P3-lG_)bs}=I(!V,zU)Q5W#^*|tf;|' );
define( 'LOGGED_IN_KEY',    'YRJRHyfNAzO*~TH:+O%68]u(@2bRVr0?9^%F/6 >tXi~GC0L{UK_BjE]})5v5mbI' );
define( 'NONCE_KEY',        'Mh)WDF9legr+y9xzqa28KVdc}YHp5wVJ2rQO#3i}qo)/I ?<z>5lHD.w0^kf&&)0' );
define( 'AUTH_SALT',        'EO!Z)a8>lf66|hr[YmU450e>)C,Us7C%MD]!;8!|V/|NKh1,y1q^TETaS2GolyX`' );
define( 'SECURE_AUTH_SALT', 'FV=Lyx8|o^umO`^DQpRie#_O>S18/VArk `dJ-i`H14Fa9X9A6pumjFNArJML[?C' );
define( 'LOGGED_IN_SALT',   'E}8FfaX[y+c`D]gV,ZQMdUA^}HS?6jF~d>Ay<^`1+!$W%1{^>%]b{6+XJ-tLDjC)' );
define( 'NONCE_SALT',       'A+B3dvca9*vA{^:6m)kpH:9LS!tQPXnGI<J)1iW#Kb:Gh[}PbuS#Rjt)4GVweRj.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '011hfp_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);

define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');

define( 'WPCF7_AUTOP', false );

define( 'WP_AUTO_UPDATE_CORE', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
