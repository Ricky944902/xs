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
define( 'DB_NAME', 'ricky.com' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'F`t va+TKbi5Ij#=^B!2<e7.-AM3?_t9~=nO>lX/8PSx+MNcePx^_!IC=u2cAV%~' );
define( 'SECURE_AUTH_KEY',  'yVCPIkZ7~w!^OOu;7%[yC,z6_Y)p`/3My9]P~f(0v.F`fvTe`@Ey|itQ>*ufCTCQ' );
define( 'LOGGED_IN_KEY',    'i(}jY/N1uG,sjO!O;jtLfvo+.+sN2O.q+-z0^><1J0#nz6%7c( jP(yOu$5c69QC' );
define( 'NONCE_KEY',        'v,6L-526E%4u1RCj9GhDqfcZ@f?;1Go%sP3_A)j7z-Y*=*B^..Ig &A3I$Nhhj+{' );
define( 'AUTH_SALT',        'ltb7^B%1:0T=Rp8#/wNqJHu6=^IN&KKLom@xBHLcMh|5? 0VJK/Q44]}3E:>U_6X' );
define( 'SECURE_AUTH_SALT', 'vVlfV8!xWp(Aqzetdt@]`qfwr+,kv?7+6X?NDMb0EyZ=WMIkOIRQ87]1h=`L=b-Y' );
define( 'LOGGED_IN_SALT',   ':Wtwd56EJd`AA/L-y41^#WJT_P.{vzKjL,*i_zhI?bu%bz5L3pot[os,l6}hJ6y%' );
define( 'NONCE_SALT',       'v[EWbS:&v.3L1?/J[o/8Yj//r1V8<LdCE SFh@vtv/%M~0fat)mLuP<z!]dz^*D/' );

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
