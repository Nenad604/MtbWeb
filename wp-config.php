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
define('DB_NAME', 'mtbweb');

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
define('AUTH_KEY',         '}|`;/PYNqe4(]Y6Lz;%/iB#2aFxk$Z 8yKjru7w%O4ENZ2I.3I9I$n1&&-o&42 u');
define('SECURE_AUTH_KEY',  'Y_.a}AwShU{+j|>SJz2&!A^c+eG88~WpSDT5EpCka.1I`k{a4d)QneaOP&gmA%aB');
define('LOGGED_IN_KEY',    '7,{S=e`I8VW4V&EJ*0|cRecm15)+17AVhdj$ja67+AMn~FbJ6aTdyKw`I 5wM}Cw');
define('NONCE_KEY',        'fdVYteh54es.|0$U8E_Zc Z&xMQ@PlMVzEFtpgt!0,)Qu|5Qa3Uc*S.46%dUY1| ');
define('AUTH_SALT',        'AyrI($+$[G5IOJ~ml @k70(*j;Nz2Gj!XVe*S1uSrh8&tKUvMBT:4(3JpY(3e&20');
define('SECURE_AUTH_SALT', 'AXjZ8_M@.XJ_Xb;AnH>3c0MJgH?~41 !DC p#s?q<(f=VoFO6~]HHRnjRF=l`dos');
define('LOGGED_IN_SALT',   'rL9o?+-#%QzJ4`_dVr<(A6IX-t7R*XNe$W4vW70+t2s~A24iDdU` X!vW-q<sDx;');
define('NONCE_SALT',       'e@09G}wc.teR||;-_>[nY`6uFkT[aGxTjW3pS&V ub4s#D*dDpVLI8@K7&1)k8$Z');

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
