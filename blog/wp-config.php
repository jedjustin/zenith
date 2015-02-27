<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home4/rameyrob/public_html/zenithrecordingstudios.com/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'rameyrob_wrdp2');

/** MySQL database username */
define('DB_USER', 'rameyrob_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'Kw9gTVYU01ADT8z');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zt@zbs(JT3tWAp78f)9I4<Ge7|l*69QOynZftT6e5Z?#8I2:3N:5aMZC>hZ');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'cKrPkc8Oxwq$3(QT7KfRTiI!L2K9SdB0>(6vDib61rRYtM@KUEJbb1gBS2rAm6YS516e1=>d?6|');
define('NONCE_KEY',        '4#NCdpA4T^t9XU()X2AXqIPyqfD:<arV-P9h:HR)ZzU#aVE#7|^*o!yqfm-|aU4|ZDpYxbT7GH');
define('AUTH_SALT',        'e^\`g|/uXBO:Gn8v0-DmXP4MxnG0_MrE?HvtJRWXq!cm@z:VtM-H;>3y_j#y*N@)T-NwS*^BAUiyd)9R');
define('SECURE_AUTH_SALT', 'fm9kg0LHP516)(zjy8<5C^^RiZVb);5(2w|=gx<y@:dE^QqLQM:X_*2QMd^Lon)mR');
define('LOGGED_IN_SALT',   'M;r-Mkd1;kLemvskqp$FovjV<Ux;FV$wG1M#5Ej4==NRMO7wAQIbbT-^@OXCIT/zr!qp/I!rzp#P/-D');
define('NONCE_SALT',       '>F9|IGZozvS(KM14Lt9(^DZh1n@jgokWaiH@RNTAo_V~UbywkRz3vKBw8^)GXW@WNV|*\`m#JcU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');