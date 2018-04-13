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
define('DB_NAME', 'wp_proposal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'rDf#_7z}L|#Y[<+j[TaY}0n#I~|0L}w^K8I@9b%NVv#z|] X!vq8])OQ;0lV]nA.');
define('SECURE_AUTH_KEY',  'TCt$H=3g!5,Vc5=a(z.#R6l)$&sd<r8,C{*GstHfgUX9Dcj5EPl]2*`F/GlJ@^uW');
define('LOGGED_IN_KEY',    ' 4qf99V8S)]V-?iN;eo<jNf@(yO$:;(DQM{)p@jJJ|T$~bkBl#<w%Y=eatwB?Fey');
define('NONCE_KEY',        'Sf-w7OIUg*=SV^MV(}6hj!K/GQ3Zrh*`((xQht=1N^Jl$A)y)RMg]SlMeq$zU:W5');
define('AUTH_SALT',        'Nt*7=Cp3K1/892%+zlM(}7=l6h^s:KGkr)?RFPg7xiMup[J nN1.p@f??5/I%dj/');
define('SECURE_AUTH_SALT', 'DCxc!Li&p9wIbmjCC3^,?:^=K/?Jn(9Cd}kAKE=p = v4&?|R4Ho+ITB!8gO)(t=');
define('LOGGED_IN_SALT',   ')DAB^<gM$ig/mz@2X6z6GY~}s98~-3[Tof4HPYDb?&}w,R~/>nmwNxn vi+>du[I');
define('NONCE_SALT',       'GOyx&6%s.&B<#BY8Qhlj8W0F*Fu=X91*}JJxq5X`HUS+V=#yqcyzD2;Jwk1wS!%Z');

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
