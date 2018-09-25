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
define('DB_NAME', 'learningWordpress');

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
define('AUTH_KEY',         ';&~E}wBb0t9RrTG:vjrkqH]Cy#r<=$K2<SJ(7@4fm=(I?VJc;8h:XkD&M>*P,vY<');
define('SECURE_AUTH_KEY',  'SGxtNfnv4afY&u=oK`?LS+Oe=W7Hfy(K6VYZNOs1I.&1p Y @K,0sZGZ?{VYW=hJ');
define('LOGGED_IN_KEY',    'K*rD>(^7CQZ(tpTzP=wZ6pL}zMr>i*p|mQ;{%v.v95LCHmY}n{V`~5QfQ#+ix+5Z');
define('NONCE_KEY',        'u?3fEk0},Q=gh~[P1{`_ulU?s%+M;UXM56K8*2{p8K2kOf<7x5x9[Z&?LdMx8qe|');
define('AUTH_SALT',        'c?!Je&]lQJ+PXDN 9naipq$^#zl^{xsfWE?M04>v-Z2$|YlVPS@;&l&%06Hq!@Cp');
define('SECURE_AUTH_SALT', 'qx;uc$+Dnx>HiJ!msrl FO0o3aIxQLsd~g_1e:#6O!bu7B}k@h*,h]sB(a?;o]Ox');
define('LOGGED_IN_SALT',   'c00JJB^)hxc;sc.ipHKQE3%.pgM8fP/~Nz$N)g:PU]/v|1Ad1Qa%+/kr9]>#DI%;');
define('NONCE_SALT',       'l,bO=%H(*v1@V+^!pdV//U2_&@anLI!2}nUs_-]VMvKxC|<p/}y-!P>t9xS<1p,8');

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
