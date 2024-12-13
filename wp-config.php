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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Jnp8Up?BsJ6-=pl5C_2CQ&fP/Fd+<k*#hQ@nqp.SsFTH>*%<89f#,{L*ec,abRhr' );
define( 'SECURE_AUTH_KEY',  'GtW&^,`8DbVkclV]u0m&0b5=6sWu`~;Dq,K,~9Cz4i2^(tkQNJ07r?U@AZ0&H4:>' );
define( 'LOGGED_IN_KEY',    '-5)7L3.=|uC3?KHB2HmN3DcX!D7{O7>YsX64LI 5.dI8TKsF?r!VJiDj[3<0,Gz;' );
define( 'NONCE_KEY',        '.aP`h+ps,Y*]]`)rj0Jg8,> E,&2kcpY6GPM{1Qe5-6OZ|&^::&o@sMc0~3^^PF8' );
define( 'AUTH_SALT',        'DSc%y+;3e*YC9!+fUCX k}fcwq [8_mF&m;IXu,~ocT@^uw.dwD7uO]8ONFq0U7?' );
define( 'SECURE_AUTH_SALT', 'Fxji~>q4kBaLY|X.E!**S`S=NH|%?R;$K1t^]BU$S6&AfMX2/3*ir]?_ybiR#lJr' );
define( 'LOGGED_IN_SALT',   'N=^rlV}}^)7%kTg*F)V?t~Gw+nRa(B@c-Noog5+#8anVRG[jB}!&f_Dc1nZrb,uq' );
define( 'NONCE_SALT',       'cMNtZWo4M7imVC;s%hmt7nuLPUNW]Pu<:Kt]P?*8P1PT 7z)$NFwyIB#[Iu9eDlg' );

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
