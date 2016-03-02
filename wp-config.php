<?php

/* Memory */
define( 'WP_MEMORY_LIMIT', '500M' );

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
define('DB_NAME', 'kantarretail-hh');

/** MySQL database username */
define('DB_USER', 'kradmin');

/** MySQL database password */
define('DB_PASSWORD', 'kradmin123');

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
define('AUTH_KEY',         '(z?8Tto>J=-z-8xEeA1k:[$>5&ka6zyNT.-w]xx|m6y|6^NyAnXvW+2V}I3]Y-Yk');
define('SECURE_AUTH_KEY',  'e3}D}IaqXLOqK&08|E+S^YU{L5r2^d$(.nv-)T-gqEkDw_o=dRvPf2:~#gYy`uEN');
define('LOGGED_IN_KEY',    '285*=0`~|CW{@I<UVoF!A2=$@c1FYeA 5+QJU4f;J:AvoC/S7MM/Pxk}+2H2{QoN');
define('NONCE_KEY',        'I0;X>glWP1zhF}Y]+v?w[k.vu(f{tR9mS*uTQYfE[:|-M`{<}r<6:=2iA_vOPg~c');
define('AUTH_SALT',        '`|OY&}oc0rl~;1N#U*YJ@.gUp.)7O^3|{e>/XPJD.hyw+dGKx&Ug=QRo8CY=G:?J');
define('SECURE_AUTH_SALT', '4>|yd}&7KWxR:*I<.Pyj[:#cUrS;0E Pf.OEcd5pBWrcE=|S%En;.S;~0)u_.WPF');
define('LOGGED_IN_SALT',   '+p,#R(jRDrzUoL|0^W6Aye!QQ+@|{JJD;LqUG<:+7$EM=|19|wFDVCgaT5Ii+|)L');
define('NONCE_SALT',       'QacJ=abNSm8Yy,$(s=GtjMeO+:ATk@adD+}x>dO,PoFc~o=P#*/6Zc]7rCU(gXVY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt7j4p_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

/** EXAMPLE - proxy settings */
define('WP_PROXY_HOST', '172.16.191.194');
define('WP_PROXY_PORT', '80');
define('WP_USEPROXY', 'TRUE'); 
define('WP_PROXY_USERNAME', '');
define('WP_PROXY_PASSWORD', '');
define('WP_PROXY_BYPASS_HOSTS', 'localhost');
