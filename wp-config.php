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
define('DB_NAME', 'staugust_wp');

/** MySQL database username */
define('DB_USER', 'staugust_wp');

/** MySQL database password */
define('DB_PASSWORD', '9@8Sp376B@');

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
define('AUTH_KEY',         'oybkcqnnxe31vthqwoxvl2xmyntqhtzt53fzpkmh3ytpltqtmgfsvyqngcnqjaxh');
define('SECURE_AUTH_KEY',  'pewgqzas2pil4k3phibcecml9endo95198iexwsur0gve9uyo7aigxbgkrjfi4bt');
define('LOGGED_IN_KEY',    'ue1rpallsij0b4h2hzrk7wdv3atb3wbruhppcyqos3btpdrroql4cdvhcwmwhxy9');
define('NONCE_KEY',        'tpp4ei2zrfaa7ecuiiyb1gtiifcw2rvyr28dbxyw2nqwgo9obecrzwx6x3d7pksu');
define('AUTH_SALT',        'ic7gb2hvcasozucdg3rs8htoljhfifacrxmyhwkgxrp9lfke7ye2i3udswd0yd1o');
define('SECURE_AUTH_SALT', 'ajsnyytfkxtvxuyficvida3bgui80bswdp1stpobavspff2im2fisxkc23neuey1');
define('LOGGED_IN_SALT',   'hhyh4azaiehxfbcnrpwzgh0kzihtrasblloe3tfrreco391c8saihsjsztlcyo8c');
define('NONCE_SALT',       'jxlx0gg4vlxo1d0ukwjmtokxtrcje1mosbg97razyk3mudybq6qafc3lu9defab0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwt_';

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
