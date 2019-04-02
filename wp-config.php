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
define( 'DB_NAME', 'wp-practice' );

/** MySQL database username */
define( 'DB_USER', 'wp_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'D<f:}xaa+ySk<(5vJ$H5~Y=lW.*l2Ub:UA=zDfm(GxC_$/z!NonhmP+v9kcPP7XN' );
define( 'SECURE_AUTH_KEY',  '{_,JuEq2#0y~efQLhVtvR#l|fXo)Q#Z:v7Pz8E!~h_<,<2!h6Vk[lx=6j[tH9h1k' );
define( 'LOGGED_IN_KEY',    'D+#mWI.V-|NC#6jSmVgLLtFt0qL}~saJSI>g%`&uc}2;xS[BS~?S79<H~kKb.q(8' );
define( 'NONCE_KEY',        '%<_gml`; O+~TY(,%NY{:vFWQOtmldM31(R;ypE_b~/lQA,dAW-)ibg&1NjNjH4%' );
define( 'AUTH_SALT',        'J1k0rBk.%j!AnalPL9F~r[cfvuzaXcaeoYUe~tvK4F1 cQGL(v#-Llj1SwR#]VDz' );
define( 'SECURE_AUTH_SALT', 'Wt~6CL6f[!G _#fL#}_)8!ct<>#Y`;^(MuNLjE&C&Fl/Zt2m/Yfl_auspWpXy{mY' );
define( 'LOGGED_IN_SALT',   'R3U%>[gAEfT&J{mzZC[kq~yV4FVPjbspwM[q,~KEtoLbyzzvMo2;lSr|H~A<. FN' );
define( 'NONCE_SALT',       '/:hvK]V2:.GFG-`9by!!#,a5aj#_4C)Hm%*oJ493kJ^%<X7#Y43jV_/DCl%tuFq ' );

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
