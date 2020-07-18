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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'redwood_carpentry' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eY]yWdB}gy(`JzD&ne-AIv,c|@jH@kp+ij%Qgy+kr@QJU}*,A_?*R&MF==[!.`c#' );
define( 'SECURE_AUTH_KEY',  'WM;)[GSx`OI]hpF_9:;%).63b( k <{$W7q:!>/Tv$ca-i[KAmfM_C+Gv7RN`f@%' );
define( 'LOGGED_IN_KEY',    ']4VVa<LCBi|~^U@l-z=d^=T5AgSLVHOCV}OdTbh4nZ/ReLLg:@o,Wj& u@4}V,Q5' );
define( 'NONCE_KEY',        'ne)2_4alR&5FaYquQ5,^*Thnlq@MY5adh=zBcjHrC|I[kL8;;!~S}`&dGCM<iQ(e' );
define( 'AUTH_SALT',        ':qyyUQGs{~+,<j#U0KmEQT..:@MD~9oV_UnM(ql!PGupj{&Z]n<-u,^{4rBO+gcH' );
define( 'SECURE_AUTH_SALT', 'v}0DSJT/<Q!/^ML` 9ul&&iza{]6Qjv88M3(1;Cla+Wcv]WVsW_jAy_{u!LR7cWB' );
define( 'LOGGED_IN_SALT',   'X]-0rCjc0,.WB5ODb9VLFg#oOWFJ&qo@UBQZ:Kv^!-ESwsBnI8zBQ7h1$?[;Vchm' );
define( 'NONCE_SALT',       ']m,HPAkl}y4CeeuPDXa~ms}f+Ul-;74k*#fE.NgiVs&T3R-jz=@v%b{i4)68$qe@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
