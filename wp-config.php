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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'oB#cv^`ofK;Y4V}N4qB(4an-=BTUC1|,^DqNc1v+MfD|>&1+[_~0L~UD,s%;m[pG' );
define( 'SECURE_AUTH_KEY',   'q;1_|J{#Z +m?Rr<o?_*PI/1*l:-S`#qz`A!lIbrdKP3E2cS4916D<k0]7v{YbR}' );
define( 'LOGGED_IN_KEY',     ' PZnKxm1Pawbdf52<wX28rXS#.&N0RK8Hv@Q<{O$fRDN!ga)~cv/-8n/D)] =?0e' );
define( 'NONCE_KEY',         '|2tO]s(l-F.%NxD0Dc`@15</Xlq>ztL/.M@0!qu_.6b%LpgIUA}{+@Me3Vgs5 L{' );
define( 'AUTH_SALT',         'WyL:=]+xg+d6e BLL?W:yCeFeRzJiTeV^-9v3i^>8>bxb:%;x1#T#gg+sU{Su?>3' );
define( 'SECURE_AUTH_SALT',  'c8MJ;c@vvxT.IUWIE8x$=R4wIx6$<[L[){)(M$xSUA{<Z3-m1*9HNS/[#fbY:<{G' );
define( 'LOGGED_IN_SALT',    'Mm_a#.9}u3QAqID3HpQSJwbdP.RLlk|6<+k/4WJC|;{e=&c[,^*4LhSg1Z>]x)XY' );
define( 'NONCE_SALT',        'EZ9&p-_t;Zz{ExZ-}p,AuVW21hQc%<|U,5tt*?[7+3 <eQ946ssxdg~#kUMl0?4C' );
define( 'WP_CACHE_KEY_SALT', '&NNv|dhz;9UzI>y063Is=$r*>O7|z5_P{4Q[jWI3~RghI5TMf32|ue>OeC[2@PX/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
