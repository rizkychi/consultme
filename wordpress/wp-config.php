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
define( 'DB_NAME', 'db_consultme' );

/** MySQL database username */
define( 'DB_USER', 'konsultasi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Con5ulT' );

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
define( 'AUTH_KEY',         'QOrnV.3v>MS6LW8-_4UI<=PnX(o-(<G_6iLL2Y|}U^18c-[JnPRGw#%FYx$y4eP@' );
define( 'SECURE_AUTH_KEY',  '6we.7h]5,{yd}0kQo<|V~M3ugYN 62.=*FZ!9k16,n#u0Aysib<@|f5!?t1G.VO6' );
define( 'LOGGED_IN_KEY',    'z<vH@(nK$t=HVm7;,HADH99Qd)<f3rtQhO72F[-He5|j`Sz2vRh9rZS,8upZcd%b' );
define( 'NONCE_KEY',        '(CZd.=A$5h* efgmHI6g0oZP:}7F x>!3( Ubn-Q[dKDt]Q8@gYKItO^pO@j_2U?' );
define( 'AUTH_SALT',        'z#AZoRxP_T~b6PbPbF(koAwqEom~`;<`x7`q-|6Y{L&j)p5B BDv&H|?tO#;7:aB' );
define( 'SECURE_AUTH_SALT', 'Nfp}^}fnobw<2HN@IL5vN.2C)4%}PO 12jWEI5DQgMLaM;txWm/z:X=x1&T~gjBG' );
define( 'LOGGED_IN_SALT',   'O,f?G}4v?f1wwMS=bb J DIcrmpTZ05j,iV2A7+!B<~b vgYG%j4K2t!XzcI<]qo' );
define( 'NONCE_SALT',       'ju&SA{K|tf)N%fuE$}T^8HCyTPo1^#c}%|M%%UT_;z0[bPZBhB-b>`avmKFxfC2$' );

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


define('FS_METHOD','direct');
