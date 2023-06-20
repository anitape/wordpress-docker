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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '357@0#P*d%Yh' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'NLdPh@Az]C234B2T7=A].iaiqNQ,IXD>OXW_Y#6p1Ap~8cz(,h-=bvS/%thDV&vz' );
define( 'SECURE_AUTH_KEY',  ':Y?U0gZH^{i0AsosV$<.=?EHYGl-RpuPb#PHV|#qxbZEb2%i+kO,T*~?J(WA*5yW' );
define( 'LOGGED_IN_KEY',    'p(+8WfxSEMQaFiz5[5 {uQkIO3yWP~*$W8f~T3}J:7D]<w7zH4VV4c/[4x-,SC:~' );
define( 'NONCE_KEY',        '7ZglJ?ZB]FI^k`-RF)Fa(/TDE]d-j)Cr{kATYOaJ*IeURO 9G=uA+a2 ;es~En(S' );
define( 'AUTH_SALT',        'm/jbB0Lndo*kSZ5]@Ux#NSjrV=,Ez6}<`2h+*]6lj|v+FiZicVUQn;1L8Ni^]Y!|' );
define( 'SECURE_AUTH_SALT', 'vxi.Km#gQ9u|BCvt/.w5X&G{6Z&OHf;yrqW|ZDk5s6MG]Mz4!vP]Y!I_s|zRz(0Z' );
define( 'LOGGED_IN_SALT',   'Xkzx}A0r{a(LmVo3]!ZoLUHfC aPXZ,B).6PHBgNLxvU5.z<dA|}k[`&WK^rrk/;' );
define( 'NONCE_SALT',       '8T9rq~Kj3Ea2q=$B>RQqvP?<azEI<6u-!u_QWec&7RW4YxoV4kSY;[_X+*bM,bb;' );

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

define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
