<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'portfoliouser');

/** MySQL database password */
define('DB_PASSWORD', 'qxwv35azsc');

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
define('AUTH_KEY',         'x+7P#Y:4(y+kynLbF|-Z0BZ? zn@$o6&^5qd&,55)NIc?CV-:GRg/=}D5LyD#c/f');
define('SECURE_AUTH_KEY',  'R$a%89*3d+-J;%W4yCoe(s%q$sn->@(<K9$G%jK@8;G*lnETb|l`ZGu@5pZ!Lf@]');
define('LOGGED_IN_KEY',    'Ehr7Y-![l9[r%9iXx=ly[KA:BMi$-k ?SWCXl[iEGDTODW7 VyVPqM[V=a_p-W_r');
define('NONCE_KEY',        'e7Io/D~P>j^/w7YaGu!kpY)EC;WwCziYq*|-W2?zD6C}yM7EU9ZE<Gl1tmcQr<7j');
define('AUTH_SALT',        'n5Jg#&B]+bw.m&%j4ekP+J H4VhiM^J;4Ndc0]Fj-YZ@.{swbGle3@29pxf=p*R8');
define('SECURE_AUTH_SALT', 'e~9DJ{V[!}FP+>B6|!Y;Hj9x?$B*SIgFw#JTe9)D|YE,iua)>zuyuu0]4gH4m=&S');
define('LOGGED_IN_SALT',   'hs6ixX-.!S%#FsY%KTw^6,z`=D[3P1<}|Mx4TxlHvK|VymH}`::~TWKLQgedR|=M');
define('NONCE_SALT',       '7Uy|l(-T8)5GKXbhr)<5dkza`Kd3v9EBG[>XBkLf4JP6FUf(3mp|fv+%3Gv^+.3~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
