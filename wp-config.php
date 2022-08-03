<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
//define('DB_NAME', 'BI-Wordpress');

/** MySQL database username */
//define('DB_USER', 'davidwetherell');

/** MySQL database password */
//define('DB_PASSWORD', 'Endaxi123');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');


define('DB_NAME', 'thebriti_BIsite');

///** MySQL database username */
define('DB_USER', 'thebriti_bidmuse');

/** MySQL database password */
define('DB_PASSWORD', 'Maha3AJTUBhuLqzq');

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
define('AUTH_KEY',         ':1vt%x(~y:o#4Vnv{{%JhC!&i|d`lz*jX|;6/a;NFuiA/K|k2PwxCOD:zMzCO[1w');
define('SECURE_AUTH_KEY',  'X<Z!XvkkZHNM$WU6=Q$4!%{S]FlJ;KCTZ~*d6B&djAcu|~!z]#qoT*MK<^a=MBg`');
define('LOGGED_IN_KEY',    'W^L|Zb^:>mUg 1tebnp.#!CeX|YB_XPc.5Ea)iMa@xf<SmND%Yu+jN U2/G~)l@G');
define('NONCE_KEY',        '8cJ> X~K$QFOF5kE&0|Z%bx:4|[0&~|QZ9>`IC8B!|y7O).?v|!5J3cZ`Ml1O(<G');
define('AUTH_SALT',        'y<cT)M)VA%v5v0v<c`23=3&g]kj_4}oNh.b$P>P74|I|eei;.5xkQ(-m2&1C]Kp*');
define('SECURE_AUTH_SALT', 'F:pCu>Cphu/~MrZ))pV?&pk9A?:{tQ2zM.c_[Jnc&%#Xnj)@:0o,0.:nt+4O^`B ');
define('LOGGED_IN_SALT',   ' =mw`V8_F7}@h,+mR7P6O6Zp*bU>d/tdPY{.K^.jQ![&+m_cdJWIfXUP2#a->,:3');
define('NONCE_SALT',       'Vc1@6Usw<543 ELw|dk[wh4_rLVc7!H!uDqgJ0Y]M7I^1W@<oD7uNO^Z:R+7FI$m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bi_';

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
define('COOKIE_DOMAIN', false);
define('WP_DEBUG', false);
define( 'CONCATENATE_SCRIPTS', false );
define( 'SCRIPT_DEBUG', true );
define( 'WPCF7_AUTOP', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
