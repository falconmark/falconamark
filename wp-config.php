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
define( 'DB_NAME', 'wordpress-db' );

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
define( 'AUTH_KEY',         '~-hGic*_6Uq|]6q=?yfQ)56-Dm3-j00(S@e(7(kT~k^zV&1Dv|SOd]+}4F$m7ZFv' );
define( 'SECURE_AUTH_KEY',  'N3s8U/~S`{EY+2MemSflZYAxaW>@=!8yCbdi- mlqGCjPt_MIb|r_j{4Dm <-RRm' );
define( 'LOGGED_IN_KEY',    '?6G>;P,cai]Ac#D<9R1MVT^L7f iQdR(kKI5R9Rvz~9Y40mzB/h%@zql*vTv:y?k' );
define( 'NONCE_KEY',        '$h.hMca9~WzwiH;Ls.$!:8S_t]3;)hWnz9H Z=a+]vljsc]}H|fk{b?F`NM-P2Id' );
define( 'AUTH_SALT',        '^rcpvWA#$j+csRP;=K1)WQIJ)1aA(KB{N!dF7aOCd~#MA9{uIeDG}7m?&[BRh.Z{' );
define( 'SECURE_AUTH_SALT', 'eO6{GBv5oOS47he=R:90(XzUw%@n3S6rbSW)YFCUq_9el-(EJ_<=~2505nz]0^SY' );
define( 'LOGGED_IN_SALT',   'rDck9bOyfM@[~3!tPF8`eO!Z=+#<m~{<=`d {hKmc6}X?nJk!|dM,%>N1[jI._PK' );
define( 'NONCE_SALT',       '!o;oQ^:3FY=oU5==@mU7sP8a5flGo0w]{N:+z=9Fm]]yWX0GC!yL1} :DP#A+jyg' );

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
