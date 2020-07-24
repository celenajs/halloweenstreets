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
define( 'DB_NAME', 'sam_halloweenstreets' );

/** MySQL database username */
define( 'DB_USER', 'sam_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S/852*963.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'wP{~dtl_{1h5 -}8.}lZLz=}%DrhPQdC2Rhpo]BwmzUV5iD7;|MeDazMlCr#2OU%');
define('SECURE_AUTH_KEY',  'QXMcZb(0C=d+aFm3j.|Q`Ni5 |4o?1l3xyo&=JqmMTQ?,a?8.p|VAvU9#R;(6)oW');
define('LOGGED_IN_KEY',    'H-*2L-j)w8n;(ZQ74mw_C,#kpt n|a=1}LZ[c]nt07ngB?v!9-RraMdF ?88_1&9');
define('NONCE_KEY',        '.q^e1b+%)s&r=Eta8!+^p`3&(i_WK&o}yO-`/gCMJ@J^6B4+{=&p4olsci =i=O$');
define('AUTH_SALT',        'hXB+iY9fY 1UgRjJCmc`+n8;7jq#q^grcrJ-&Gs2+|wzw9vzjL%r5HVTk=%F@RE$');
define('SECURE_AUTH_SALT', 'vZ]-&B4;nKUuxE3S$R_W]n{tDs[oviN)>,Ml3/?$rND$74PDo5?Xos}Bj#!i07a^');
define('LOGGED_IN_SALT',   '_Juisa `D4OtWzD_ aiaC*<D 8Fl6G.d83T;}QkUq`E:d}qcV-lR5xTX<c[zhT~a');
define('NONCE_SALT',       '7r[ds8eF6yY4<vTR3_9M;hv7n3P^iD3o$%|jKzQB!_FMs<fFus7FIl:oKmPhNe,6');

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
