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
define( 'AUTH_KEY',         '4ykM@n0_!49swAujYJU07x+Mpq3$)}t+qZ2YrD/]a$8Qs=0#~RcNPere~`e-[T6|' );
define( 'SECURE_AUTH_KEY',  '4jy=Bg394Eg6}~8u(7A{WW%WTZWVZ{kSZs!LoKH0z+CNa21!|dHN<p`?3%6{v39F' );
define( 'LOGGED_IN_KEY',    'k4FSaL#Ky=`I@iA7XsKuz)$>KKD R>*h;_nkN|#bj~p4C9gU.xv~ZL=[V+EmR&!k' );
define( 'NONCE_KEY',        '[*++jg_oGJO=R==992+LpG;3R:a9,*d| xH*<.4A2}B4.zCBN6Q3K9M0M|:S^M4#' );
define( 'AUTH_SALT',        '#vk-CP,3LETwy07=4Vnw=?a9$w5#0I.(Y^WE%laadoOWHdsVx/N4,#P*&9_=Zi9@' );
define( 'SECURE_AUTH_SALT', '.D?QK=GCG&IKCbmofKNw(p1F711AtfE$.ynjl,RpJQX5+N:t?f_W<NPU$+yiA4jz' );
define( 'LOGGED_IN_SALT',   'Y/%f}`D?;I9_6,5LL+RO9-uLf5hrugMuOq9#,8&;Si[dw.~|8P| CtLU-,EM5%e8' );
define( 'NONCE_SALT',       '`0~l=hQK(o ) _yu.!$^|1bWLjUPx+KW6;c[Gme?4X,p:(A7c$jP--GdiTZpwlF}' );

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
