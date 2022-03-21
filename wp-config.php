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
define( 'DB_NAME', 'ecommerce-1' );

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
define( 'AUTH_KEY',         'R(Rm!KkS6/q`A|D]mAcpmDPs BPXgMVct3,l3)3U5<juZJ|LCVqZDOZ]3< !s?j/' );
define( 'SECURE_AUTH_KEY',  'AXVqZNr_q{L.@blu`m3J8+~Z2n4+2%wK:9IUHz9/Ib9=?>l+p9t2nvbAl.`9r I?' );
define( 'LOGGED_IN_KEY',    'y8tEGu?C|2!=nXesS@S+0S2i%i1DxS>hJ}PDEerJ/$gxjAm.ou^u#6DZ^h5Q06,*' );
define( 'NONCE_KEY',        ' jMXOq-V9;uxl?_w,.FdK`A3#$5JSU:^!P/;Xr12`[|v*P|-r|>()Z&,{[i5x>  ' );
define( 'AUTH_SALT',        'wF668Myi(8RiV~MsJWU2rp<Gk|.[(4Le+Iem[B$2h8MO}W2]0lEw%JXYJ^a,OIXs' );
define( 'SECURE_AUTH_SALT', 'cWLbL_qK1(z6Iq2q<F1]kX0;Qu6c0Fi}VRU(.u&tlj&i`uS<cQtr k1>9h{H70*4' );
define( 'LOGGED_IN_SALT',   'Q)X#C0*FeZNuQlHu_WW5YU_!/Z|lYOA:S<E2~0SbQ:aG%%Up^iH99=jxiSJp4Q;_' );
define( 'NONCE_SALT',       '$H;qET{]ss|8a4q$P/};Q^XoysHJv</D2qWHTqWcBaOFT>IF}S-ww$}^l^u!RETO' );

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
