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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'P7EVcqQN4Xd a/-?2gqQMNWlB+8h8jY!&L*DUh% 3CbH<<UN]o1(fz7&]UiRT;1%' );
define( 'SECURE_AUTH_KEY',  '}S^bIOp8}nJ$P@)/{jEH^dI&jdAXT5@#`{B*_.>67uSd1ypWxMB`t(Yr4m6v-/42' );
define( 'LOGGED_IN_KEY',    'I.8&f[97Ws7(M437U{:E9=OjAeg<:)eC-:ewWfLY|b64ycz<*~oV[2r8[es*!9(G' );
define( 'NONCE_KEY',        'i9,4 d4Q^-I::~3+Il)H3i+irnfE74VS J`DioT_@lAF-&@0/EqFcwsSfA[ B#k%' );
define( 'AUTH_SALT',        'M*.]ru}N<Z$ 8;V]M7]Ih4OCX-F6V4e <hl;c=^_`dT},1uiU99j-(jrkJ78aQt7' );
define( 'SECURE_AUTH_SALT', 'Nvm<FI.hg1a<K&btwDIR0mmKE]Y0Cm_I4pOhl81>{:/<vUcG+D<._[kFV=<x$4 X' );
define( 'LOGGED_IN_SALT',   '+,7e]PW}9y6ECdvDk63}7.pLt~i@Y<f6Q5m;$$ig/ >LY7L;nF)~xF+E!|Q1ZjJ7' );
define( 'NONCE_SALT',       'rYR3D>6]Alb]TJ<<e4VFM/alvG/}TCIe8FEq!xnj])7|/(qs%hLyGR$u&]B^&L+{' );

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
