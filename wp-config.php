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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'rm]%]Ro{A6t{o)np[B&t]STA1Rbf#M`/vk ,~OBV|iy?MLdCTQR%ROl3o9RrL:bx' );
define( 'SECURE_AUTH_KEY',  'E3A.Fq/zEg.i6plkh:!*|{NH:(A-3n}L7?k0Fm-%7 PRhxS@)et2 :T$EGxM5J4I' );
define( 'LOGGED_IN_KEY',    'Fizn%+)o[M?y]v`hf9iQo*I`X_^(9GC.N.Z,lB#qO77$km{Iz2w15)4<@IAPjX+P' );
define( 'NONCE_KEY',        'KjxU~)j8+IWZ<nnTtB,4;2_<?[[J>`b){t%UrZ^eaw~ Cw{rR:i3jP$@~Fk#>NC<' );
define( 'AUTH_SALT',        '-`sR2<E-?5ad4CM|FA+:MXfS%&V=(e{dngJqnF1~S{C?m0e=F/g2aHIEyD$..qoY' );
define( 'SECURE_AUTH_SALT', 'bLiPR92[lDHbdSd.d:#eP,5$V6wU*j{=Ve-SHfw{p($fMdf^<b<-w&togxfC~C]0' );
define( 'LOGGED_IN_SALT',   'Yxw_|nk>ahs4]hwO)U^^oqZEJA:d+lp*Wt14L1<ToM)fW<aHrLM_3_$eVe2j/sI~' );
define( 'NONCE_SALT',       '(6QLmW*-8c_Ruewfb6WOJzn9_yPD42,,0$o!G;c+$9qs87W_W24m7gMZI1j~x*{v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Hf4okM_';

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
