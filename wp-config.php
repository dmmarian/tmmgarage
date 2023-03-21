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
define( 'DB_NAME', 'tmmgarage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'windowrandomchair' );

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
define( 'AUTH_KEY',         '-1aCri([G3HAPh lXUO{$z&m6e>]4w1>x| PlN2_HhdV],uRP0JAP7~(g]UwL?a0' );
define( 'SECURE_AUTH_KEY',  'r?1v[/>?qpJU]CV]Mw~8W%4K`~/X?NWku?I-U2bC}+RG93*?.n$ h@eb[vY`p`8(' );
define( 'LOGGED_IN_KEY',    'v=NrM`wS#d|vew=Sp#X;@A[<utQ{7gap(s,B|yCtq]>d3]6kYDkNY,am$gi[2h9f' );
define( 'NONCE_KEY',        '|f[bsnd<hj8Y!t&kW%&4}u3,3~QesC2Z8&z%$Nz[o(+zim8~JYgLX*a2v6/ YRol' );
define( 'AUTH_SALT',        'C;M!*PXYiaf3UbjTz<3P>[oF4N`R;v6m=B%vXOtD+2ps]ZhIjh!AoGZFBEej$!$`' );
define( 'SECURE_AUTH_SALT', '*-7@MO27NcOAqt|!Mh,u_=]U.$b(v^Wmldeg!{Nqs5MoLf^4}O50_j5[+I~vyGV%' );
define( 'LOGGED_IN_SALT',   'i Y$+??h7y%PP[Ht5X}ZIHmv(~/&`0Q$L$)m%P?/j`lnf$8Y Hk#X}p7W]IX;j*y' );
define( 'NONCE_SALT',       ':0= !R<gW53#h3-=pZnoSD_Marn{t44nWl(m<oMW{LY:nI![-#vqRA:;ur&p$Rf_' );

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
