<?php
define('WP_CACHE_KEY_SALT', 'edc030954d4402bc4b8e461089d7bb23');
define('CONCATENATE_SCRIPTS', false);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'wp_elbil_no');

/** MySQL database username */
define('DB_USER', 'wp_6f6j6');

/** MySQL database password */
define('DB_PASSWORD', '!mt96M2rNF');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', 'MA0TjanR)0G)%h33+%6z]xMR/9s_INwVF7qMh3Y6)z7)n(-J)8z3steq#X87#wU8');
define('SECURE_AUTH_KEY', ';N3o|I-%%P*iT#u6Y~2yQSbzc8a278APl:jxM8+le2L8!1)32a76Rx+3%qj2tS/M');
define('LOGGED_IN_KEY', '4lndm_q4C]i97B5/(1EizT43*Ia663/0SdR9-RQE6K#f0X7j679t|0Q[@9+;v+b(');
define('NONCE_KEY', '0!jN19:ZR%:Np*T55Y3bJWb1rux|%b:7T63fk4)[T:~@%AU03/yy;v5;(93-JXGi');
define('AUTH_SALT', '1|!njb2*/#;u1#/1x_Ct82zL:N2a7p+/04ES@oR(m21fs9Ewmp#oax#JH31)E#2N');
define('SECURE_AUTH_SALT', 'XM9344ap7A08J5oL9a8*981N%qRNwB4|9_E6pZcQ+~*5U7y(2]U8:k94580i+QiF');
define('LOGGED_IN_SALT', 'Q/N_1:dP*zIO);bV95Pi4tok)FYa8c_AjDq61od@xH5N9RyGh:y;S6eOr8o2rNnd');
define('NONCE_SALT', 'wn2w[5iV@0c7R[8FN2heewF9Em62h[;@f8#-1PT|A#420@bR3r0lkd5KPI!2vKPt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '90s37HZ_';

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