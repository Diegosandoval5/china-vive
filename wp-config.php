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
define( 'DB_NAME', 'vcs' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Da=I60s#;0?Z}ELA}_6bh-5mE{@*%6Ol,3o>(}/P]/LSyvtvH uuV-JQz]vIH!tP' );
define( 'SECURE_AUTH_KEY',  '04>Gl]Br[3l!~#Ao wfAD+bJEWs.9Pt=m.&1d?9tn1yym~1x^6?VDF61-OnMB3PO' );
define( 'LOGGED_IN_KEY',    'FT3O.E9jvb9;`UG ?<k}^<R[C/=S&$T$,H)fim]92wkn ]>)%VcJ.`3au8-Wm-Xt' );
define( 'NONCE_KEY',        'eV1M8,^[xVNff!qVdl520.nL8< GchL*Fv`;~SX#FH k3>zVw5=iQfXye0dN_R&(' );
define( 'AUTH_SALT',        '4$C*}!h1j_.HA[/.%I&iR;8klB<3*+V^MX+?!,|,Vf_bq%9>e[3h=Sl|sxbFZO~q' );
define( 'SECURE_AUTH_SALT', 'mXvU$6|6fh+p@M}tjAj/OD:TzvCyeGVK*zLugaosI>{#rhvI/#x)oV~~?Sd :4yy' );
define( 'LOGGED_IN_SALT',   'aX-h>zZj8lniUNifNe6K/Yo{as@W? hvDmZuf^ujO+)5h:j0#:thU4fwgpR)y2]<' );
define( 'NONCE_SALT',       'q#1+5.bl8rxNY%(z4!EXX C26{.lWt`gI3Ewk^U: +mF/R+oR,Wvza4A9*;v5AC0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vcs_';

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
