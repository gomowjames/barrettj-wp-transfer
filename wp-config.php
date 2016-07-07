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
define('DB_NAME', 'BarrettJamesWebsite');

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
define('AUTH_KEY',         'HhKE0|wH6ChI+KWcCB:_?OU(Y}.Z<-%<|<-+K;3{XrDBke}Y>^KJecekL7ry/3}K');
define('SECURE_AUTH_KEY',  'P]_Q-?lmzC-;Ji5)cj$HO|TyiG4GDj*C Q{OPw*M9zkRH5!AE?q7YwZ#d*KXa!A*');
define('LOGGED_IN_KEY',    '9+VN+SH9tF*FQ~tt4IWam0Uy~Rjg,&,c p!w|e6b8~G6C@4in@IK!!T9,KIh%^zg');
define('NONCE_KEY',        '3)_A~Enm&<f}Qq(hS#hN3Mw4DAv$H94*p5b!].:ac9(?rLr{yj~}e/31vds/a7lG');
define('AUTH_SALT',        ':e60J;RE3%uKI*sJ3$iGb>U6iG!Ix.VC~*dVG2sXqvPwx-!_Viv_WS>4KiH?Zr<^');
define('SECURE_AUTH_SALT', 'zz<h9eC@+T.V8EwB&UT)[K]Kk~E^HFpnh!<v_]>~HRSy&B(6zp45k8~PD.Lc/X7l');
define('LOGGED_IN_SALT',   'vSNv9Z2=r=_QU+(%2 {@$+(MUG@A2AZ>WX2fI1YRlLu8iM89V-#c;)Vunty<mQed');
define('NONCE_SALT',       'n]&b3tZ~qv,T0U:_pnu_Cz:oq*/gdbm[}nKw9AU_C^?WfUji%v0!?<zi3F4)FS!P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'barrettj_';

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
