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
define( 'DB_NAME', 'amadi' );

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
define( 'AUTH_KEY',         '0F(&DckV5fh@9a40Uv#*N35@Q?N9kxV2}#.8x%-0eY,pU<oEKPo#C~s w=BPCL*m' );
define( 'SECURE_AUTH_KEY',  'xad>#0,{Q&)>>H)Tzbq7z:Zy.{-S!new:34S[LzR6nF)g!zjl3Jo_-&S!?onPeQ3' );
define( 'LOGGED_IN_KEY',    '3U5bcdLqr.pT!m<T]]a@ygak b I3:j-&i87kj%NXf].kPt26OnaHKsx3 Njj(Uw' );
define( 'NONCE_KEY',        'm}sFr6<aJO? i3z#IT[ni_M^|X((RFD^A1IiF/s`|TSM<$efc+?m%{A+9bR(SymP' );
define( 'AUTH_SALT',        '-Z, $IkgXEdzPD:!-z|3aZPbK2qtZ7$z%Mh>r*k,=f<vt0.`,O;idc:KyI.s3hcC' );
define( 'SECURE_AUTH_SALT', ',oom$wKn}69nY/x)*bX0O?hvQK3J,$g!eWneKyY|z-{Q[uv:D#}2K6Hx(c-2 <9T' );
define( 'LOGGED_IN_SALT',   '/~e>;5mSI4a2O*yUvfAfBO:Y[KPpS:cI^5&IvzG13bFp]%]St,m [<K-|NPV:{qn' );
define( 'NONCE_SALT',       't9wf(X8(5KSMP`$%O5s{n91iVN:FUaG:-5}21CHuIWyk;<Jeaw DjUKZJjgBd42p' );

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
