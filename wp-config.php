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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estrazioni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'LZ.?-jYY_@]Y{hwK2-*~f6&D){qXqM [>wCSn{9^29=fN-(Th*FpxgW4F@1$/ii)' );
define( 'SECURE_AUTH_KEY',  '5Mv^(n/WrGV6v>Z;?*6/UC*sc:_(%d[u(%Nx}OlU.+S@)[*x@6M8/XU`o{GYTb9f' );
define( 'LOGGED_IN_KEY',    'R3XF/~8y}~%{v!C&!v@IeTq.%1?Mchi0JX6.x kqnh. Z!y46uAgA&L~|!kPFEb{' );
define( 'NONCE_KEY',        'lyk.91JF98;Cs%$Uty/HW#?$p8l uJ()QL+<upl2^R:N`0qVqk#IvyB:R ]+<hf.' );
define( 'AUTH_SALT',        'wJqmrTLAV`g:&zNG5U;w7.,$N.t=S1/mbmeh$9%+UN<DzwBp+[yAE>Yu*d0z,Jcz' );
define( 'SECURE_AUTH_SALT', '5EW75V{z0exsh:GZhiTsM^NZxYQNX~=kF]Z6G7pHAVk/X?{`yrJcbx+!P$)zYB*+' );
define( 'LOGGED_IN_SALT',   'QaIcV!D!3VftBTefldan~6g5Sq/HY$BD3go6LK>]unT)KgP?OK6]j[a2*i);g;Wm' );
define( 'NONCE_SALT',       '8mcesldo^U#W[Ois4fZqh_tXhhxWc_LtFIE?RmLR=WcB1vOLcNB,hP{5~<u-JLu}' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
