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
define('DB_NAME', 'assignment2');

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
define('AUTH_KEY',         '7~FDa&W`6T*)He^j,wPXJY(2he?rV_+qpq}pL_Q-5P[b.5GDVE~-MlVA[n^wO&nM');
define('SECURE_AUTH_KEY',  ')#VUfVw8^aAV;V)l]IdNKrV=w{CoQvld}!dScjOy?.|z)G-~[~&.#h(;,e0HJ(lu');
define('LOGGED_IN_KEY',    '~j41HZ}Fa`^:b_piUx8 y0(kq.m0K9(}<oHn}|Xa%w=1LD^<WP%b=`:e,XnX6$=:');
define('NONCE_KEY',        'K;#!)SzV1rkB(NpEQ!3P}j>n+m-M36&xik~-,&Fb>T<$_G;5lV2Xi7}Um1HA`?go');
define('AUTH_SALT',        '~MIphjya0F0EtV!}~N)Jg{^.;&h|WavO8@V35[R_g36;!7ejU$W|L+D0`&)qx{Y&');
define('SECURE_AUTH_SALT', 'B>5;P.|6:`E#)K3~ZlGN-0_y)fUAWk{5Y_B^Ybk]qd-cD)$BQm#1ObfuXzIHEf3u');
define('LOGGED_IN_SALT',   '%Kkn9]%:wGLXJZ`;Zz?w%O+a>,&_?[I9;@QtxG%Gy/dr7ZJnD4+MT@#QjW~:w<&d');
define('NONCE_SALT',       'KEZr? NbJ8[_7Z=6rG)S l3&wjCg8:9[J8/bw(&bg6h_&xJnLKl1V/;A`%)?~DF ');

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
