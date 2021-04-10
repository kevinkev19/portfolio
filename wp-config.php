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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'sZR0^+Fi)dE<^Vo]sDhBh9g}{R<3`]YU?V:`![b!:^gR3*p$spz.~.@kMlK!n:W6' );
define( 'SECURE_AUTH_KEY',  'oh.57enz!B|+saLn=GU62T:ngf1HLfH53&ISLXrf4KagY;mQ)i9z/CcvBSDpHqN$' );
define( 'LOGGED_IN_KEY',    's-XN%)IXHLH3X}4Y6{!|68^1!< *wRNx>;($pM!KmZ.a*5Sez)n h:2uI=Mh# q7' );
define( 'NONCE_KEY',        'HLow9<!Ck3RFW1@TOyD)~oGjMyZUj3VIo8m;?33h?<;d-{6/3NPp;)YxFmS7wH,x' );
define( 'AUTH_SALT',        'O8<+|n%~mp.4 zh7Pl+^5C5_V;H@dE~[[.DK}T7*NtT},,MHVVo3Hh9x$>#@FfWf' );
define( 'SECURE_AUTH_SALT', 'wLxo9r%(Js6:(BMTDEyIp=!YfTMM`SHl0BLq+7$0t?E1Cw=<J~,LA`&7IfH**kq]' );
define( 'LOGGED_IN_SALT',   'jBN>FZvf<(#-TJ;P;!SW`0Si3n9[p:-[(F]wJGR]G`[mL}<)29>}CV+xjNB429wM' );
define( 'NONCE_SALT',       'z6 Bm;RZyW -D{2,mWbJIi[/>0Z&Q7+H3slEcG[!wr&=S $9Qp Fs>Md+j,:aYy$' );

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
