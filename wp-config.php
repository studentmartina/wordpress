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
define( 'AUTH_KEY',         ':P{Wl(|-m,Kr|M1IXFlgCq=**P^KV $PP {Yq*kIa -i^rcGR9NrV(V.(TnGpH9t' );
define( 'SECURE_AUTH_KEY',  'A{Z~%s;X!9Z9W?%=/%H9?P+lyb00nx`9q>jr8O>K< VPYuksYZeRdQQWCi(_Z`EX' );
define( 'LOGGED_IN_KEY',    ' U?c~~G%dKXT]e`I52x@Bgj|Mr5cc |<!~/?D3]v4VAH.fzs3zwau0!6c^x]nYq5' );
define( 'NONCE_KEY',        '3W?TvDu>[;tpv*$s49Y8j03/G:X~uIvP#{=UJXr9x1K[AyDw&[lY_}gJR+dx[]<a' );
define( 'AUTH_SALT',        '+EEv,hx%sj~^H1Q]^Al.N[bx5!_+@{0K./~n/>HnYN:HL/c|g&sxg[erfub(lCzn' );
define( 'SECURE_AUTH_SALT', '[!`<UuR?nU!F4Wp3h#$U2=E#8U+u|} A+N62Guj_~Wk_O~u><uL6GL!GW`cnN?G>' );
define( 'LOGGED_IN_SALT',   'xf^.EB_{S${?wm<#C_[1+*|-qf`mrSxgM<_x!PjycB(h[2!US)3#saqE?IPiU.)X' );
define( 'NONCE_SALT',       '#!KZ)4zY47Dp@* rBYRMYJqP_tgmuL+Ty!fWC2w:U%yLe9arg[I3q: A=46?Nr}L' );

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
