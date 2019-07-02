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
define( 'DB_NAME', 'modernoimmobilier' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Glorie@1' );

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
define( 'AUTH_KEY',         'Ue:_}wUR|]SzKC]T&sQ/7]CxT|@TOs&{;s|2Fpk gEfBxYnPr*F%s4O_&s(}/:Z*' );
define( 'SECURE_AUTH_KEY',  '/nz&d=fdD;.w-ssMG3&jcZuc}QNRvMrm1lA^!E@#hdzruigk9`2;8(lSBqS v,D[' );
define( 'LOGGED_IN_KEY',    '*OpxE?K85AcCd6vqp]~GM~~HukpVleWB`1x%vlb?qkNTw^)0Is_pFl(mSw!B-t{c' );
define( 'NONCE_KEY',        'Dy1(2L;e|p/.TW7o*/CtzdaTzz;Nkk+`3 jN;7sFct`9cxKd)Q!0|+lp#y_QStkf' );
define( 'AUTH_SALT',        ']of,`Xe6H,d?4spIE t;.P:s02f@&d.^]Vi0sng}P%9S!#^l029^YrLLW:}%rLE/' );
define( 'SECURE_AUTH_SALT', 'Mc(yT`1B<yU[O|QWqJ{3hRCEhx:aVi/pmq%{T u2gdg;m6r<.Volzz|M(lwBdK{6' );
define( 'LOGGED_IN_SALT',   ' ]4g.0X4NTl(f)^AD&rlMTu8r)]u/?3=}X_Md^3<yNmxTY+}vN#{Auaq0.XrgQG>' );
define( 'NONCE_SALT',       'o(W{e/u_d^A(Ki(TN@Cm-U<6d27ofd/:sz)q$%}$JLq,eb;/xD5{w3jt&,RMDNO-' );

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
define('FS_METHOD', 'direct');
