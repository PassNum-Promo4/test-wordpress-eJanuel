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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '******');

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
define('AUTH_KEY',         ')Y!8?[]xG0y73n:1RMHk+YJ5n]6|Br~v[6Vcz0PRm%5&>Gu/4!ia09W8!Y.nCboC');
define('SECURE_AUTH_KEY',  'nOmqz<mN )`)s8~IfO1F&2H8llpk6Y5f.M48peg7PTNd|h`2[3;r51u+`q}?sDg4');
define('LOGGED_IN_KEY',    ';jmPn$5ZXm7Sa=<M]Xd*&GYm?xc@#bm *TSOe^OZ,#2Ikvesw[/+J%TuQox+:Lsk');
define('NONCE_KEY',        'MpOCOt6G{eNe3.P5{&.&FZQ`XpXk}-I$jI:F^Lw>Pyl3; -=,y/7@0}p9tY=H1oR');
define('AUTH_SALT',        'h=.mZ5T,5kIA[-Fa$MmaRc9qg?J&XSh>e|H@0f/H_S5K6e[<(R`G]J5{<i>LwJv)');
define('SECURE_AUTH_SALT', '_WGtA??w`QjADC>_[k+A]$CLB-{]WitRMA;6/~Z#% O*lD>8RvuMKw8NtmV{X_1?');
define('LOGGED_IN_SALT',   'PKsXjk)lQ!|)m@bV-Q,4=DV^F5AX?!cAwSS F7@yR $T9K?r==.a.KjaD0h:NZWa');
define('NONCE_SALT',       'o&YLl9OeF<6^KncD,:<Kd3=~IpZD59xu,Z@>v<~iz&Ia75i{1o@}r_#s{t%)G(x=');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
