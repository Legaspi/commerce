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
define('DB_NAME', 'commerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '.~>q@gQ/|[o0& }]JE$Y_R? I0]]% ]A>SRV0]2?^&dBBm!OS7vUQ2p:]fCV#m?}');
define('SECURE_AUTH_KEY',  'g[7:DFFqIzk/poI7s1%n@w*~#3-MR8*G-.FRZ#SBfvI=>Z5W;n!Wi7CFjB.xG&C{');
define('LOGGED_IN_KEY',    '4Yt1YX(+vg78=*Z!jUjMQZt;D7VU{r+@PDk!v3I.I8~cB#iK&C_K#K_S>t1#gg|.');
define('NONCE_KEY',        '{nv&n[cW14gS>tX4rqWjk6h#QTmrBd]=)F WViw{e^whOa`5m2;XH0!r:tU[!RvT');
define('AUTH_SALT',        '!iOW@rpv3QKhlS/}?_q][j[T 55ZS 3)=Mf[0X3#e2KzPL{qHX1 >He/]o}pX7P7');
define('SECURE_AUTH_SALT', 'i2^,vuaE;g@G6YoN@g^AX.6R@f)<%vxk~=Z1<^v_VrhK(oZ#n(=-llAzIt2jDs*>');
define('LOGGED_IN_SALT',   'e]{tZ)&D.Z<6n~h.=)%_A26b%rgXNfCt[)Hfm)VK+xW1/~~#PcR8npcE~$*:/Gt#');
define('NONCE_SALT',       '!,UW@D3[:}7Od@VnZO2BdQ0Qeuv0#-s&~ifX}pRNfX[*xLWV!?tJljsiAOugeEp4');

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
