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
define( 'DB_NAME', 'coupon_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'hYA<vFvF1KI9VG%oT%.jSyWA~H7.ewcHuly v|jN(CccI[z6y[Z{8xBPoX*DK 5&' );
define( 'SECURE_AUTH_KEY',  '*M6V-iWsD=I/4;W|1OR_{$ND9z!,!tjWa-R5&!QhP=d0$taF21azP}Gff_YMP}=M' );
define( 'LOGGED_IN_KEY',    't(m$u$jYk/[T0;[a;}/p!D:H_g<Idn3C?|EPEW%U8JN_]GLGcaS!.@A?OyT:HdZr' );
define( 'NONCE_KEY',        'iRGyR{D0Zb64>v+:75^!=r.]pv6S9yF][1 )x|a6 Hp<.Wz! WFMcyxr<KCs]g&U' );
define( 'AUTH_SALT',        '|l<;Qu%bTJcRZrGoUkR=>iWC7jMDSH5C7795tP7&U$4r?w!6G;_L-sGuBjAMk|wD' );
define( 'SECURE_AUTH_SALT', 'nC~o<b@Vh:DL`w7<79Hu0yYAR^~W/X*qDr-jM>ntrozX.XjIBO7T-k61C@qCwP.v' );
define( 'LOGGED_IN_SALT',   'AuVIrsuOBZwZ;FBYI4G>zqpT.]>v>{-8G*Bvh4IZIq1SL+FQfjL-$w:UF,c,;g8i' );
define( 'NONCE_SALT',       'l(Fd~{OM6TaUZ+|v~V:B%0EX2=<Q0wQ+{/U0G=fDg79GU?+mXI!]h11v118;uyEl' );

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
