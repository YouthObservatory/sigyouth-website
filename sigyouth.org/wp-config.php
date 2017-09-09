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
define('DB_NAME', 'sigyouth_wdb');

/** MySQL database username */
define('DB_USER', 'sigyouth_wm');

/** MySQL database password */
define('DB_PASSWORD', 'Ve!vo;M?,Z!l');

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
define('AUTH_KEY',         'c6$(Q/joeF(XXS7`/a/){/;VX!TO$8.,.Ejp8q*jY8,B:7%;tQ=.VF8dQBTc{78L');
define('SECURE_AUTH_KEY',  'I@{,8b-At99c1^5-_D1~?=HAN#OZn-~[0q%7Bx`,~ o9Kse=|ShY 48S}<w,U}s*');
define('LOGGED_IN_KEY',    'yVg4l-S0lyY+pe^(ecAUKs4z@1pX(k0,U~)n@s]En} ryd`1sVtSj-_a5WVB@/D@');
define('NONCE_KEY',        '8,0G;e4u+.aRfq.^6-qZU9h$X88c0B0L8|`e(m~1y_;}>>XO0-f?UKdp(|_Z|LKQ');
define('AUTH_SALT',        'mUf]-.c00L`5>pr0C+` +3j0:Ef%;S,cB`3t9JgCqb`D1;[L1!l`G}sNjLRSp$Ce');
define('SECURE_AUTH_SALT', '6b~G5B!UT;cNpmS(j.jVT9LOQ@~[HG&o(SWot7UG(`9?9`PyPqJ;QplBNO2dK(<0');
define('LOGGED_IN_SALT',   'ky4hJP}xEX{1}f&Ee$cZZ=tt4v<goc [E7NxOm*,*d$EbJ3< zsZf6|;sV@}eFYr');
define('NONCE_SALT',       'eWT*owwA-||}bjl6rdk>@AsPwuBc1?[NMe#WJUIhK{xY){-~Yr%:kxrwYtdAiU$1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sigy_';

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
