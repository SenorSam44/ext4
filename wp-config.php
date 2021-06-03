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
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "admin");
define("FTP_PASS", "iamadmin");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'V7n4bGPcTD' );

/** MySQL database username */
define( 'DB_USER', 'V7n4bGPcTD' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L3TB6Hvs7z' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'x^*r:a<8oImIeI N#+p@m:-X6:Vp^FM]A*0M~v8z$v5LJVM,WsGrVSnU-pN[n= Q' );
define( 'SECURE_AUTH_KEY',  '{Qg# ^HE9IOBFe6F9@0#&kf7Vy/^[HFoat0&9L1lp7`J5X`$+zR.]% Z^Eom__4|' );
define( 'LOGGED_IN_KEY',    ')<k=.QFlBgtDk>d*2F|D[^eHM0|SM.u:YoWAafy;QTI^~;xfp$uT&IKgaz0BWZ#;' );
define( 'NONCE_KEY',        'I5i`u|QU;o9<E=JFQeab*}Y*}}Ja(CWrb6H{p5e*|gT:rUiSu_^6<{U^@Ju#w7l}' );
define( 'AUTH_SALT',        '+[{F^6e*KO:4~-s0=ABP_n}cwshI{*w+*pU,1|8a]kNp;J9-aI@vif*MmS4TE?)#' );
define( 'SECURE_AUTH_SALT', '%PoGNd}7;p@f;XCb_ oK,v))Ab2wq:r} }W rf@Ht/|@b3*:)P`TiX%EY*^JSt^$' );
define( 'LOGGED_IN_SALT',   'gi~-OrY[woX#}(uv5YQ-E*]1[((J-JpuV{<Ox>z)>! |<@T~&#u[+JSM6KtcZUGT' );
define( 'NONCE_SALT',       '}DciOw^KKPV5]4BzP=e`c)eq%JOJ.-{SAKC@n4[j2;rrk+e>um1IBV>O;zkkLLM>' );

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
