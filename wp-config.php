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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u_digital' );

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
define( 'AUTH_KEY',         'UIf*!ebI>[C:Qy~><4w*#O<0O6@3T.*6ORy0yC3uTlfwEETGw%?~3Q[ fW9lE,h|' );
define( 'SECURE_AUTH_KEY',  '#/MR.q^bEMySi]92pEz]&*j5/IM1&)Dq Vhsv|v2;a]=C%zS$u]JGQB`7,N?#!;h' );
define( 'LOGGED_IN_KEY',    '^Le6/UyT37!{|f@ OVU{8JEuEtdW9addur.EK da<5/~(`YQ<m!}:QgZl-Z34#R/' );
define( 'NONCE_KEY',        'MJJIVxaXWInd<RSwXwDz4&GAq4t&`v@H%9H&R[i%+MzO/yp3@~(B*6st#>*+uSd?' );
define( 'AUTH_SALT',        ']a.4P6$0rw}1M]zrR0r})yx8P*Ysc^Z1h0-:a|4-{P#NrF^71FjV_Fpch>&^u4Go' );
define( 'SECURE_AUTH_SALT', '-J`K*Eh+OV,[WdnSH7>gf8JF/)t ~?)ZjXi0Lh{<w:HNrV*DZKk0r?satuR%?~bG' );
define( 'LOGGED_IN_SALT',   'GeW(Y:U}Zvuhtz&)iwWC<Y..ukQ-CmY#M1-}-x06i8SVz*peWNR:t-AiDkr&Q=:Q' );
define( 'NONCE_SALT',       '!esrg.TTP<`So[BkN~p_hB(:Kh:9 gvV2NO9AC|=F?V.>c@+M)=O/Q%5=BQIabJ1' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
