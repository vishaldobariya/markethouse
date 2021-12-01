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
define( 'DB_NAME', 'markethouse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('CONCATENATE_SCRIPTS', false); 

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
define( 'AUTH_KEY',         'Zz3PNH7sk 6QO{s|@c)!D#s N~V5bGT:FLq=A7[v<-UCT#lfK9uZxcF|q_{$b=;C' );
define( 'SECURE_AUTH_KEY',  'Fe%HKY*[jm@eyABq31T^=BH&r~!)L_KanGo1pE9k!Fmy4Ij+vM;_#.~DjWOp~(:`' );
define( 'LOGGED_IN_KEY',    'bjb(Ex3(3a_IS]U^TnYjdo. 5c 8j$+kEp{v8z81C3^M/T>uS|Vv>O0;VF6+6H~s' );
define( 'NONCE_KEY',        '$V|-!_AXSRI`rDnd|S&PgSIfo@?ECLFhUUKOOfp-V#VjDE:@KhC4TUDo@a!lfH!Y' );
define( 'AUTH_SALT',        '$W9cwQ&0#72,%E)MblPU+c@$Y&DU=bDeu,#}XH5+`WBXxa~D[3MPRFdB]f:e_|c[' );
define( 'SECURE_AUTH_SALT', 'DI6T(,CB; #/QQqqnU:qcHHlSZH7epdg8?h p:rbH2!+YO<*L*U)Xoqknu67A|rM' );
define( 'LOGGED_IN_SALT',   'cu);b?MQ<He19Gpn<8Q0w>V2[vM=1t&y]Ps(Rt{&RCN X+OkE=!7+Vj0C**{5a[U' );
define( 'NONCE_SALT',       'w%@PZT6h2}i9^xG1FigQybQtNCTKV(_&J8VW7LqRQ.}a}nZ/rDK0mzkace_tl=:e' );

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
