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
define( 'AUTH_KEY',         'CnbW,W[q1w_O)2>^H<HxzX7yUulCMO#xhd|{Sm9t[iP1iOQL$G8Xd#=nFObme%+q' );
define( 'SECURE_AUTH_KEY',  'i`=uUt^OpTEw9kO&ipu-G/KlYp4Gz{/K`8UaK,_+JCsyUp?3pW`YheP(j8*o?bxt' );
define( 'LOGGED_IN_KEY',    'p~]iaMm[^ay8}S6IJ/nZqT~cl9|t7x:W^`QymJ9ai-Y EIe}7>BD%7u5>2(T9%Qj' );
define( 'NONCE_KEY',        'qGmkX,`0e28! HO9+ ~0<62K|BYSD9eZK~hT~T6_bdo|V|1rf9)cAEF125G989Dt' );
define( 'AUTH_SALT',        '~V@CME|>K;(Mee}-fyb`&:7c)GIPM42Udue~!]rfj|lCX%<[3()]I8_a7W2A;:fU' );
define( 'SECURE_AUTH_SALT', 'fO ?9{:ty;UX_}qA=2I =rIA05?Mc4Dn;<Nc/yqQnM}mv;;ko6wXRanaJa xN% L' );
define( 'LOGGED_IN_SALT',   'c<G[5~:W#tZBxYgLC0#IG*pD:h|*Y|1T;GweJm0E-k6GT*+Fsz#h~[uc|Ncgmodw' );
define( 'NONCE_SALT',       '4 BerLMP@(j_*Ll5`xoq zD#n$t$<dP/!,6+%QFjQUk8:J9~%`nLO,56Nk]tp3`X' );

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
