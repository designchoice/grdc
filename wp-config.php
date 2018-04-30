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
define('DB_NAME', 'girlsrockdc');

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
define('AUTH_KEY',         ']Wm75/rOWbvYX>e_dVkWu0m3sc8aDH=-g<!%AKWU&8U2)sGKpyVnk]V[@W,n_PC)');
define('SECURE_AUTH_KEY',  '!%$t.]sy*$O,H>{%{pMQ`l&xc|kjm:8u`F9qR5oODKnGTb-{Tku$Qf;g$17.8d}X');
define('LOGGED_IN_KEY',    '>3)Z9x^]P3K1U}~Q}D5/$3RO(.**Q)4BP$ki}O_yFqI]BF(!L(+HLxO`aN8Lip{U');
define('NONCE_KEY',        'i}Xb+qUJnY;9AF?yYu_1<aqqx4R10u$drxm}@w]h+h} =v0@(H]U6bvo|?6N{+3V');
define('AUTH_SALT',        'pC=~v2zT-N,9m.(5J9R2e3L94=W(%D 2SUhoA>;OI:U^y+A~Z+KF8k#ij.32!rQy');
define('SECURE_AUTH_SALT', 'M{uZh!(QXT+sPU 1,6pa%:|k<KWOIIvt9beca1:veqmO#},aCb:(G`x49XiWdZTI');
define('LOGGED_IN_SALT',   '{K.`c]H8iQHL3QM#zG8`?9>?j`,:&`G|Szz#s&wZt}J:w_GTBzd82=~3u%ey>#g ');
define('NONCE_SALT',       'r}mWZbAI>kg!Vwx5r?<8[,9j-]EiKYi,z]N9B?& zZar{7k5wx]G?U$`-d/H{s<b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gr_';

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
