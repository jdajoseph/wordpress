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
define('DB_NAME', 'wp_jpacific');

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
define('AUTH_KEY',         'F^&o@)1yFsLl%RZ/H#Tj%VXQDI<-kpl+:L(cd|6m!ZfVG^T7R<NMn+-10= X:!:P');
define('SECURE_AUTH_KEY',  'C.-DZoX i}#<_)tM  &<,Y*UcJ1nXe!ie^8Z{`]Q2KpIv1@CO^Uu{Dj=)oRJ2@N5');
define('LOGGED_IN_KEY',    '<~[nEz{3vu,J`ysZ{2_w|J%n7_#|j8P#71_a_>J1^g<F9|fP3^,82de(GyI,Tj8J');
define('NONCE_KEY',        'E<BXp1%7VSw:}Mb_mFj)igjOMdq{o[l%$HnIk4!?;Lvsl8$|oni@)L8=#}_D%*$V');
define('AUTH_SALT',        'uDLK}/)e;~#wPZm60c=1$hm,V4bG*9l8:powgClg5]u7bQZB&Rsg^#:vjLW J;_%');
define('SECURE_AUTH_SALT', '8.aROI7sA5,|_(Ch{<%*KDPB=:g7BEzM!YK3^^_m@Q4_>nAty~5tId`pe61`ZDDY');
define('LOGGED_IN_SALT',   'hcS=.-^PEYP>NODZ<1f>p#-6u{!bhYL-4`f^Qlu<.7.{JxwAH@&w$==:M<xPSc|s');
define('NONCE_SALT',       'fz)C,9N]#p|Q9bI{,nvy&u8iKkc6lvL0:scn]t4k/+gVoZ1N0a-DlBqVlk2+tI2V');

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
