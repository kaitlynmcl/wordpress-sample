<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_wp_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'perpay123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'u]:]hbq_[qKxOO)Esb2@%qy]2VhMhq?I~q2y/j1z{i:on$X*=;|^tNlIk$E*qevQ' );
define( 'SECURE_AUTH_KEY',   '7Q6vRf<yCG%c}$!ahY[;s-e1V:c!,{^`Wsf;XmpBbjO|EM-Tw vT*#1WDED1||uI' );
define( 'LOGGED_IN_KEY',     '*%q!Ay=TUxTp-uqaegJq>7NY5!PZ-BgOUmv?th^m#N,j$xey1Z6COjDzmk66L#a^' );
define( 'NONCE_KEY',         'N,9bQOVPXJ#g<I9SV)#{cGl$g[XxW~gPeiyT4:S; v&e2<&X1]D@P%&FBcR2v96j' );
define( 'AUTH_SALT',         '0=0URjCsTnOLgtwo iX4a9UY[|sx_VlCa~`^-Q`B2i+c{0>-%zC}cL3}j}~3/@y?' );
define( 'SECURE_AUTH_SALT',  '+&cM)9$>)8wYJ?RZ_CPf~MlK]D@|P}Ons37&.xomP!~H>7%k~zdEn6%[p9;j(W16' );
define( 'LOGGED_IN_SALT',    'B)tqlQt!x2Q3I:9+jsL|pOox(Y5%PNmUj=q99%qiSuD}B!urn%{KN~Bl]*t[*-ug' );
define( 'NONCE_SALT',        'e>{y]xL?p0f?JFc}og$5qMU__NH&tzI?{hsoO94M+hQPnT-[P.)6C;QedQn|asdh' );
define( 'WP_CACHE_KEY_SALT', ')o.7ssy6C%>Y8m;o!fokMA|Tif:6uULUhUNcO>9i:l%fj7keg/1AP^C}++:*Yi80' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
