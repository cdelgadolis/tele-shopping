<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tele-shopping');

/** MySQL database username */
define('DB_USER', 'linux');

/** MySQL database password */
define('DB_PASSWORD', 'linux');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ob@Tn4Zd/+IXG2IfJ&tsZx<{F);]TKlo 1WYx [.<sxY0=pD8Xmps}Hxf+FsX2h.');
define('SECURE_AUTH_KEY',  'm?}H8(?:VVR{ixaFZ1L3bjcSHDMRUi)P(aqwfT/sMB5@xq@{Pr0hj{9|_YmDP;F1');
define('LOGGED_IN_KEY',    'V7[5+`BN7&uFBT *%LdGXFiHbTDKZdW`x/dt(9rGf#:bp5uP34@7<@Z!-Zn:Bw/$');
define('NONCE_KEY',        '#})VK9HMEwGfD*NnJz1J%KCO{e(t;E%y1HSOen2ey~goQISx.w%Nh&gm3YNGnlk~');
define('AUTH_SALT',        'PLq`fxJf:)A?eF%D|!eT$6.t5,fa&Lf;in`E#m66QhzglSK84Ns)|f3t}xA3&:S0');
define('SECURE_AUTH_SALT', '6mfT,GX&ZK&;,kd{xr>[<eCJf@sLR~Q$Ux(Ip& R48k-G|@x=rEY}kTy6vs>Fpq,');
define('LOGGED_IN_SALT',   'X=zu?7wu*HKH^RhYD>>tcqGij6Apy1[$+$[|Wb#=lz<am2|KMeuQ6SK>]?iL9Hab');
define('NONCE_SALT',       ')=T>JF;M@0><5(mvTHo+>SR6El+GE=??a8:_Yy,3$qD*>Jr}QnrL5oKGaiJ sCMI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
