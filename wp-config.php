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
define('DB_NAME', 'dei');

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
define('AUTH_KEY',         '`a?pxiKz3MYhy.7z~L$)3~{ZwO&B)l )rd]HkF*Of=}vYPA)y,ifwJLw)NXuXqoV');
define('SECURE_AUTH_KEY',  'J Ty<}7|H-2nqDq4!m{``%u)z6EAbpsk^QMe]C&;`~R2UPCc`cB/qTiqakzPf^2B');
define('LOGGED_IN_KEY',    '|?sS0bPNUJ~|H_AruOm;^S|:NqW)BQ:@G]-ht%nBjQ^,e#ir!E f~hCPdQ`])s{Y');
define('NONCE_KEY',        ' 9IIqgjY9FXuzq&nnl=f6-)s|xQDQOC.gkOZQ`uKuul2L9X^#rRc.OP]Ct{`OmkJ');
define('AUTH_SALT',        '~tLfn<5d0g3jAJ*yRijv}9o.vh<&%rwF]B5gCm-zTQ992-#b%e6k69lJW7.cFZ#p');
define('SECURE_AUTH_SALT', 'vf?LVu0`>?PT*zcqs`K1TW&okZ,Uz*5Q.-^N=@+SmIDH]tI4eQ#YQ5E]~=}}[`j?');
define('LOGGED_IN_SALT',   'sD1h V3n-<z7:p&:~#OvbIu>wG{S5tbh5xL!$q*!LE3ztl$UjOxIxFi:#w{Erf~N');
define('NONCE_SALT',       'W^QYvL8M6g za].bRIvQSw]fY}ZW22<[hCl|7,Bal]?aZZYfU=k-#r|:?}ZqzJN&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mmgv_';

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
