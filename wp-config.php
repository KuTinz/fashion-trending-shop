<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fashion-trending-shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '>:g_$Vd@Q;A<m>XE[f8>2)5F>c 50j8sWk.-sk0yOmq<KK/nP4b(iGZVkWCqR8|E' );
define( 'SECURE_AUTH_KEY',  '3Qn<jfFqy)099;~|[NE/[I,w;.KMwQDz%>gWDA9%Jxbz@n!DA@OT6er1w9GAAvi/' );
define( 'LOGGED_IN_KEY',    'J[10WS-yXezwn)g&n>kuo!{Z/`deSNoH*Hrb]seL~jR|g@?U/^WNt*Edvj+DofZ2' );
define( 'NONCE_KEY',        'kdFbGoTEr-}S@?=ew:sp5Un-d)>p8W9KoRlJ5Y:TEAAw~NhpAkk8YL[2AdN5/cWp' );
define( 'AUTH_SALT',        'muO5N1}9#gc$9OI*vHh.CU=CkKyDVxb(x8#42c-0/0;Yf[k!6YXG;LA$ecE9t5lO' );
define( 'SECURE_AUTH_SALT', 'q{scK3qXPBi/hw.ANR=|xnEJdnP!4iiLM7S]^_U=$Qn0ufz_chSUhc1:qx4Ql_sE' );
define( 'LOGGED_IN_SALT',   'xQUd#MT<}+p16(*3{=`k5n<3{D`V1a:n9+Gs:&v:kTWz4zm0(}qjcWxM[S|gvsIz' );
define( 'NONCE_SALT',       'xWi9jBKqFogPHFXqe604*#{G(mVPSkL e%AM]AaSG{9S|?{PqrqYv/Y9NSTI)P=*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
