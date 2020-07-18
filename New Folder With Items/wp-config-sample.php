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
define( 'DB_CHARSET', 'utf8' );

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
 define('AUTH_KEY',         '_+I<.<P@Y|OisWw1KAL4]F0 `;Wrh+TVI|Qai*@co0G#W|ph6&+r>EC_C:SBM[+3');
 define('SECURE_AUTH_KEY',  'YaX#9Av*Zt1?YF^U]J:Rs+dmDfv!or`IBz3H6+_a[eEQ`16=,gkO8Eqj:s0#{Oc ');
 define('LOGGED_IN_KEY',    '%$-f1/n]ob0C|CyPO,hd`-{/,L4>v+GnH|h[x-j,})6A,LKJJ:an>i%z$GcFtt )');
 define('NONCE_KEY',        '8/-0RKC<8l320|.$vHQV[p9{t-WwnOi=;O8e1Y,YTrhVliJn$8rOI#aW9 /_59=/');
 define('AUTH_SALT',        '#P+>CHg}(ey}6(Hxv&z$l$xJ:7@iZS6rS3XU_@D% cA!;+?-u4-9ZK4zV8Z|jV5T');
 define('SECURE_AUTH_SALT', 'qUU_r)|z(|sl@pD|RU}$ga1h$PGY7d`t6KUlIjBQ #~UsB,h+$hpbh; dlrduzfM');
 define('LOGGED_IN_SALT',   'vYr,{*}_Gz>|Mq2gt-+VP[pi>3^ +Cb2@rPz*^Py*f#-#&o!B;/SA>?w-!!)/C$}');
 define('NONCE_SALT',       'dWFNM1*LTXv%-,< a~{::!-h/s.Q_Fzfp,8O*8eOcTTc~}I+d-tIp9P!ZU2s#7uW');

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
