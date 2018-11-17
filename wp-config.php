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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Se^n6gBI`?IkX6M^#_9P|=d4q+Z}5~mzi(v#hCVWHlSd0etl7FhmZJ;j%D9X^lgV');
define('SECURE_AUTH_KEY',  ':7fe@VV e82u,<r%<9]+lm!<uYc~Hqy)XU(g&,Q7c&9Jkv:erLBl,@2Ad]Lr}(G;');
define('LOGGED_IN_KEY',    'mbz^GzS1n|@T~k-32|6jIY<mG_xgWh}P8XW4q(Y-kn3USj^&|Q+ITXD+DN]B3p5l');
define('NONCE_KEY',        '9:&!nN9iB!*gLJNwH.>~L2&,e*h5{<CUoj(n:z>/[/[C`UxsFYzUzMJ)!6Ca^5Vy');
define('AUTH_SALT',        '3]U[{4kS@;15Ue&n<.OX^nNovpa_Ct*8)(0.MxXQAv}-q%= 1!}TdKL|yi;1ok{M');
define('SECURE_AUTH_SALT', '4Z%t{.pS|fO_W0sP*iNnFY(_`jO(=5S5OvXNqr#Y-~t6JvlxLz1?$D@Y>=F[i5*#');
define('LOGGED_IN_SALT',   'S*6do]P&)Cs4T-t?EF(SN`Q{c{|j$XLp%zfL1@[lFG`fYe}Xf;:Ps(MCTGWpMFL_');
define('NONCE_SALT',       't~!=1<Bi-)z&T[Q7xFJ~z.6f_D3C*iCR755$j:h7hz]|Hz:$Thjgarz^$*WOg+YP');

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
