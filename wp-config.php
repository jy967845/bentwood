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
define('DB_NAME', '***');

/** MySQL database username */
define('DB_USER', '***');

/** MySQL database password */
define('DB_PASSWORD', '***');

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
define('AUTH_KEY',         'qTA/uf0emil((zcHp{ZXVEO;AzCFpN-IijS_Qf~sC.iQ!y3ii.1-#KA<%YW.lE<_');
define('SECURE_AUTH_KEY',  '2$wz48ah(kSw!SHgL`-.,.i#zE1`6O<[Bpp}k9-6oCy1VR9&+q%?JsydBHf/nQ-6');
define('LOGGED_IN_KEY',    'F3G<xL@r][zlq,gc{s2/hYn0@Xw`v{ a@$${N<YP-&=)^L+3fd45KCDBnBF#)kK/');
define('NONCE_KEY',        '4f/#_S00r~*|u>A|L4KR1Ze>=kJx?jf9UN>I4?<]MZt7,iO!$sPEAI>8NFj=Gy)/');
define('AUTH_SALT',        'g5CKI#^Tu<gE4sfw:*0Em+YjS;%&1K<rS`hgVHn=.JDM1iPS#Kx;Z:^G)DyQT!YH');
define('SECURE_AUTH_SALT', 'QJPju9EhFBLWMfgn_Z0jf^&t:FXf<Pt~(NDWCy=:8,KtSjL-oT;sQKBlKj^ZiV_$');
define('LOGGED_IN_SALT',   '*H[p.g#,7dYEl9fCX|GyU[68o@kzW6-F[rWpn| >RQ1!N>N4UgJIwmt(z XQ/%V#');
define('NONCE_SALT',       'O8}F*.:q0`eXDMq[pPfiOH{-Uhth|{m:o/KP4S:9tc4Q`r9{cHHi$sW 5?[gkd]O');

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
