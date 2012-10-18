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
define('DB_NAME', 'shopping_wp_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'vgbU]J|ee{/ddgpqUM=CZ<4D{C_m,<]->Ao,Nu:^Mzb{iKHT@W-pxH(_-(TlwjGZ');
define('SECURE_AUTH_KEY',  '=RShO:N wqdwz{bQ`T~v-`NO90:KKxt5FrkH$-gv-kv--7;qT1.I9gcA_Q$,*:Z+');
define('LOGGED_IN_KEY',    'TN-|6rDi2]H^:G+>]-J`|.N&{W()aOl8y -(%2+m{,Lbw31`5Uu97kP9m@5W|;5h');
define('NONCE_KEY',        'w?}/j&7Nz+FuWs=czjLIU5MFiJ@I+4PSfF!qVd},+JQgP11kA(P{7Vht_x+$g4+o');
define('AUTH_SALT',        '!$Yw%5W[&vO5^YnFXw;i]OCx|M:fg5.lpWr0`/.b-%]Xttlb<Jh5>)K3Bt!`!sY}');
define('SECURE_AUTH_SALT', 'ofJfY2p83X5b.8J&df%/|gHA_@_p0+Sp_|-9zg9kY*}QzhP~[&A+AME@rBah_r]c');
define('LOGGED_IN_SALT',   '@$lb|,[+:cM>^aQd|<|yhtp/E+=9+#a=/To&Lm%U>t,O`c*PItwIpDJB=+^h_oY?');
define('NONCE_SALT',       '6qX=#9fQiTI/2++UR+lH{ba~bd=tIt,0SnIoF@1C2]#N`l//E%,5MDibs(YyRP1#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shp11_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
 * language support.
 */
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

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
/*---------Required changes---------*/
//define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . 'shopping_11/shp-content');
//define('WP_PLUGIN_DIR',$_SERVER['DOCUMENT_ROOT'].'shopping_11/shp-content/shp_plugins');
//define('WP_POST_REVISIONS', false);