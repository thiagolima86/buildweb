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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buildweb_site' );

/** MySQL database username */
define( 'DB_USER', 'buildweb_site' );

/** MySQL database password */
define( 'DB_PASSWORD', 'build2020' );

/** MySQL hostname */
define( 'DB_HOST', 'buildweb.com.br' );

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
define( 'AUTH_KEY',         'C1eID4X7?H?%|Rfs2<$36;|Zg`RR=^DV<^!pqKr[s?8,A,*DL;M=H2C5uZR_:OG0' );
define( 'SECURE_AUTH_KEY',  'fg>@8_Lqd)fBaV3^t&+p[W|[;G;T*{Usw<Q&1TF7Ql6M686z$8AeHQwc:ZDx3=K(' );
define( 'LOGGED_IN_KEY',    'RCq=xgAH5Y[-,N$|dbU[x<&Td=i=>#DXSZ0|Y-cbafHv$?(`:SUW^_K0]krTs|IU' );
define( 'NONCE_KEY',        'Cp?m4k)G~.kr;%{1Tw{#L/p~L3IDBj&9Kq5db^T_PGs@FpW`,i0<(/`Aj{{0?4Kd' );
define( 'AUTH_SALT',        'J_R!v;S{6O.U c;Df017#<1%MeXD}(e1b3K]/=l%[-~ pOG=q/amy($]gw5? d*e' );
define( 'SECURE_AUTH_SALT', 'E-br(_F*w=GNU..2Ew@rJi?c|KKPJ7+wT|X3B*u5K,-tob(r !vyqJ!$9Mt~vKPg' );
define( 'LOGGED_IN_SALT',   'Ov`UC.7@F#b4`9n51NU^F<4>~;))jj`)e8&J2z>{8Iw@k.H{jS_NcBwy_;eSUDVx' );
define( 'NONCE_SALT',       '6wX%]ShkMG7JeTp8xb((^~/7_dlpw,6 QjVaY}PhM?t6*Lap<9O?&MX;k!!@E3V#' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
