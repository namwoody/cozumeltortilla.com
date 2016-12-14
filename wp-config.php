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
define('DB_NAME', 'cozumel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7&B:3k!TA@yx5nRmd|ozp7aeQ(VGs&v)JZ%P?7ZF5Bxg,[dXmd4=1+Qdzyp+%(6v');
define('SECURE_AUTH_KEY',  'bf~c9M9 DX{i-=EOEvY!P!zE4m@LnJxh0N{gL5>?;tKAt|H|pBlmfcFGs ?^uuS5');
define('LOGGED_IN_KEY',    'a2Jb9E~u4UfcrGHoNO;kxT;wHKi8{Q(oWkchURl%Sn@NnNoih%v(m`D>j`C7[`vV');
define('NONCE_KEY',        'q-Y16L-1MazH0#M%Ejj-=&iEQd+I$!Ja8Q0z+h%:?&#x]/X)xzH!dUYH=:HK*2bE');
define('AUTH_SALT',        'm%?FYi|_&%k)T%gnv~xv1qQ]S]|@Kg?~_HLp0^l%3V?q.-pi4,mU/G;~|*{]|)up');
define('SECURE_AUTH_SALT', 'ZF>o.z[*y^o4F(^2l:+5mEiPd$3H[xdU=o{o?yDofrZ,WOgv5i%J4_[TFDP9ch_n');
define('LOGGED_IN_SALT',   '{5*6kxQt8hNCf[g2^:q8zhK;2$o/3VwoM0Q4vK2]vnI, 2*mSFXN}pV)A*W`Tx]D');
define('NONCE_SALT',       '#u7gvuN/!s0x5pQ&up/E59wbj$qi$Q`#BEUu|wEzSDu/@3vHFu5U_K@,lLjX&n>`');

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
