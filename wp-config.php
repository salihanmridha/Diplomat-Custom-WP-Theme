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
define('DB_NAME', 'wp_debug');

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
define('AUTH_KEY',         '8z=O?m6}s;3n 7C]ykO B$KA)c;$dTl:[`Tk+nrl}[Ju[P)Iu2gYo:=jkY`D-uEp');
define('SECURE_AUTH_KEY',  'B`.-ju#JR,NXIG#/#L?G|`fXT)R1:yv2u4WTFRAc#;K}fcp:ZH[ACc$9#Z@hNNU2');
define('LOGGED_IN_KEY',    'L%#g,LDJ?XxAc^dYCJ0;r+XQrdTig/pmnBRc3>[jhOaJ67zUlxANl183w)4x-Tdp');
define('NONCE_KEY',        'Qld*yEEyf)3=4(^5RMW/$/3eAu8yK(PiKvtL[Po/Fe#UzG#dJE9Jj]-%.%>EWBA0');
define('AUTH_SALT',        ';d58~}D<m3Rv!/uhkIq=%0[~FN4n,6B6j2b_tvtka#Au3N]51NZ*.lLvB^dGtGzc');
define('SECURE_AUTH_SALT', 'Nj-ng0dhlp+!4Ch7/; &U8@Du-2EpC>&xSn$Y4.g!UDnY<8,Oc^y@i}Z^c2QPh8v');
define('LOGGED_IN_SALT',   'X![YN9Oho!BsnKO<={w9,qc1v`d12p6~.~u|=8Sow{.raqn%oz^~[k~,s^+X3dbn');
define('NONCE_SALT',       '1)^5Jn&}y0N=?.BmtBidtw}j;D(b=O)F@%Y`D;|i_as&AfIt[w99nUT)bD7SCNZW');

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
