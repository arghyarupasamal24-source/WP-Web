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
define( 'DB_NAME', 'web2' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@2026' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'DDoJF5+KXd@n]^kJ/_2&,58>}i*R6OhIo0KY@u_x:@uig0u%Pq?*KH}{%>uzjCZ!' );
define( 'SECURE_AUTH_KEY',  'U_2@HXN$(rpz%&HjGzQ# 7WFS?Q=Vct3@S#V;zgq;3R.hpS,$SFW53;=U_tHz1:f' );
define( 'LOGGED_IN_KEY',    'Jaif.u9?*ethZ;),=INbI@N(_%1]4jr>l((cmRNgC2 @Zwje}1=%50pv4;6(5(zG' );
define( 'NONCE_KEY',        'ZZ=(4/XQvj]ToEv pF[6fJ6h&9&I!9kGgpo9|k9ow94Ev?us=RO_6;:5_?lwM%[7' );
define( 'AUTH_SALT',        'Xq2eZS+K*}R)d^03]XE%Zwc+4xSrzY]OcFY;Ny%f|`QM<L74AP&BG*37sMFIw{r`' );
define( 'SECURE_AUTH_SALT', 'u7;<5a}#9 %5l#eK;sTAySe>uq[pLz}2C8*2K8Y%{P6bFVc<swj)8$~dL{<C{2.?' );
define( 'LOGGED_IN_SALT',   'p@?Q7$#0A#g<JeliI8+yi%by%.Tx=+<;;jdgx3G{01H:B<KzJA=,v7gfu$,Vkkw@' );
define( 'NONCE_SALT',       'RLZk&=8.:-qW[nkhdON4gIQ4fEcQTMn!3QfQ}:))up?b8v(p`mYn:;^UKgI/Fg>X' );

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
