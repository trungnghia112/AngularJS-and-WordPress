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
define('DB_NAME', 'ng_wp');

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
define('AUTH_KEY',         'D~Y9v6L!MS25@rd)+$x8p]]yCwuT%N_x;y-V<m72R] -ay]+*qiF>u-8Ihj+f;+x');
define('SECURE_AUTH_KEY',  '}W@]9q{U]L_ZWGmNS$1]dx|*D>)ZqDcLK+}@|tbOY*fc07<z]</HgD3h?|M.ULl[');
define('LOGGED_IN_KEY',    'j$R8v~ty|_<-S+X<+;yBn|5Jt$C8T5}h6&p=)[vD%XV>ixb XF~9X5~W#geRO#^4');
define('NONCE_KEY',        'Tbk[O[9jg3= 5H*d$!dt=+0aXoFAy)EG :/;7A;;XBxDsiGVm4:Uel3+mqt*U3w`');
define('AUTH_SALT',        '~H8vJnAv}&-V /d#-?mdb <+Uu>1U1]~~MEl$N;X6v-|%py-d+7F5:>x=sPpK`_+');
define('SECURE_AUTH_SALT', '[>hS!p*/E>&uzl.{z-IRHBT)YC=4kOJ IC^-X^Q>3@ _D*TVr;Z*+J:MJiQK!v<?');
define('LOGGED_IN_SALT',   '!e-//(|XP)$2hYAItmV6k-7q>g^O2=jXNwJ =W}~ju+hI8F>; PR-(Y]qtbc9[C4');
define('NONCE_SALT',       'm V:!maGk|42G+-QE!#KVHhiB0P_n%SN CZX)N@a$S]&L~~7E.SU|<kq+0}o<L*%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ngwp_';

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
