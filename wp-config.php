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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfoliowp' );

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
define( 'AUTH_KEY',         'NgdEutYA@Z9;ts{)`PWqiUk_i}Elm:^5aN_KN_ID.vtnz~@;#;f:(BfNZeSm*Z;E' );
define( 'SECURE_AUTH_KEY',  'X5Vcpw//Egc+Bw*[1^X.VY-YMb!LF/d4E)oHfs^U`!8-^.*m<Hu1nO[dJs0{gtzr' );
define( 'LOGGED_IN_KEY',    'ggFSs<9}T75PE*fER:DZczqg?]F0Pj<36e 8m^?e~pItg=3}]N8f9a|^,cYt$(Tx' );
define( 'NONCE_KEY',        'DJgLg{gBx>xj1}=o( ^&l1X}1KZc/Ys4k2&&8uCs)[i/Zh4XE8JH3!B&TznsQLTA' );
define( 'AUTH_SALT',        'O7C/:O)ck||vRShEdt)3UlE,4}&Dd.9nxGYd#}_`0%^<2eL3df^$g&,o86ERH&Po' );
define( 'SECURE_AUTH_SALT', 'L]H1LUmC=b~71IWs%LpeOt3DD8psrrSQXhH%$^h~lNtsz1|=U.<7oO^WD%i>LmR#' );
define( 'LOGGED_IN_SALT',   '0RIie[$CD]8]5q-i3ZzUsdF@**.-IvogUhe]iN m8$ &HExb7`1eb[2(+_>`|TFN' );
define( 'NONCE_SALT',       '?>Mt$]:W(+ZrswIR`@>~pBYCu}@T)FoV(=H/D}Q%0p5F 0QDJS&|PKW2%v9`{g<K' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
