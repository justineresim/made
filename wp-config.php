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
define('DB_NAME', 'made');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.CfJstgr5I-X-cCN+O!CLk$|71)+XY?DB-.V(y@+PabO5.8U`>)P.!F4g$U< ;7o');
define('SECURE_AUTH_KEY',  '3]zI-T[TueKRNFL^Du}Xu#9Cc1nEJ%x[ .=(~H(},6.DA cqOLcGc7o{8NiiDP$k');
define('LOGGED_IN_KEY',    '.Oir82>cWz1+k0N<15 g|lwC=GQ4;30mV/+3~M.EWaY-VQ=#yj}l^T->1^}9tBeM');
define('NONCE_KEY',        '~n?Gyc8{g9lp?Nm3;A-RvcXT-(,U.@vZ5g}f&m4[O-tSn(Vxan1{{H()7b=d)a2s');
define('AUTH_SALT',        ')xG6lu/+Ke+naq3k22Z[p,|V0,wGgb~EYsb|,}Bfwuo|uTOL5&`;N9,x .*-)h|D');
define('SECURE_AUTH_SALT', 'zPhCwo-T*N-P_~7^LpJUbO0iG 5H_[.5+hAA_]|B4u!J-W#sR:w^$<|6pRGoj-FE');
define('LOGGED_IN_SALT',   ']2,lZ/ V^tJJxv|qN4!RhRIj[hg/+:h34fL]]uWff-$(3QZ|!l|uX9fG*:#uxgZ8');
define('NONCE_SALT',       'jIaWhV<x`^M@%$c8T`a8S4-bnCrfeppZ-g|Al|pF7t5H$J,|ugcKt,s$-c4=<; z');

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
