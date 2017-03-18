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
define('DB_NAME', 'leo_bd');

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
define('AUTH_KEY',         'DJ>P-AIuJm{W^Tf#Lv0e2mwI;%M4wU[01,N)g<*Xp U<ScvxEWgd$^v1bf8x!W<P');
define('SECURE_AUTH_KEY',  '}m`h&4UxJq.t#[}L]Zl#.ceOmS[|E-Uop<p==K,htpOqqm3=qG)xJg2vx3~sbY%f');
define('LOGGED_IN_KEY',    '.l{.vnA&!-HzW4}_L.?m~Dw~Z;f#*M(B%GadO[V1 v&P7#:=4nXB6Y p>G9`U:,n');
define('NONCE_KEY',        'CJ&{uh!5e!MhA/zfv<#J|L^S{+c]v vOiPRcv8oA#YYv1vQda|XD0-@wH6H`ADdO');
define('AUTH_SALT',        'o&x_[yxHe!Hw5#I80W/p/u%5!sE5CJzT%TIj3u3aMEO[fytf?eA1lI?Tzj<}2gN]');
define('SECURE_AUTH_SALT', 'xi;{yO_lmI` d-r`ZTBot!3EP,X)y`n}/2C}_vj $hE? 0gfg:oYnyCry`CMYHN#');
define('LOGGED_IN_SALT',   ':w0Z;X1OV&?Q&kC]R$-SuVzf2?&Wv^2IZTZ*!R_`5$%+rPvfb/DWW-Vija5tu|E4');
define('NONCE_SALT',       'q=g|m7AVFg20}6:9Jd_Ap4@=$jNZ#8;vN{],*}#Lw#&RB]]*>lU`<,taCBVa`Rzk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpLeo_';

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
