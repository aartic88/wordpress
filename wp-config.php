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
define( 'DB_NAME', 'testwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         't7;xm9:R@r?2B/FKj6!KMx4sdZs0u3*I~mSMbBJn1Az0IgQAD~ ]N{|g0Ql({v`I' );
define( 'SECURE_AUTH_KEY',  'B:h|7--vP4okOe-pdQ:5iwG)H$U(B+|v@rym?28tm-F{ 9cijx8S4B^+P!3#-zDy' );
define( 'LOGGED_IN_KEY',    '[vM+&`~}Y>5Jr=TWmWtqv6P@%_rhSt5i:CCJNam6y}GD%~<r=y`ehJKI4NUd6yKt' );
define( 'NONCE_KEY',        '&`%&C@;Fy1>$i$p%oIrq?:IrZH,}8UQVO<D5t6/T+P>Nrej@2lzB:iC5zmPuiOPi' );
define( 'AUTH_SALT',        'QKeYxSWM0C/$ZU&B7tHvAPvj zJ<M|A1?.@4`ygy#C`i#K;cg;y-aXrDAASSUtSC' );
define( 'SECURE_AUTH_SALT', 'Vj-+kyIAV}O`Hp4m]0!aa8hU+,wh#J;y]>=n`En0d(>^^ j>@zFH$q+1sEte.mc_' );
define( 'LOGGED_IN_SALT',   'H6aZ$0>9U.~,8s#h!.vAMS6VFq)?oyB])GN`;x:GF$a^cm41FhuNPVXc)!vZUIIw' );
define( 'NONCE_SALT',       'bVkG|0Va0sBwA`[n+.!;fNuf*LB6hGd l1PGgX)M-1~e`{u+&GCvB.n6J;*QeW)%' );

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
