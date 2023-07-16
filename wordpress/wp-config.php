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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';ZGwmvz2U5npu_1SbX?9PH~P<Am-fdF@[9`*T,M2-U*IeNSW+Y<vy#vVG<!aU`pE' );
define( 'SECURE_AUTH_KEY',  '4Dxj!,yU~kY+uf:*=R*B+K@S=N@c7WGTAZa)y7E5RU2Pq)_*G9@J}.XQZwv?eV8~' );
define( 'LOGGED_IN_KEY',    'x?k ;|vY1u-q;1,P<}wQvS qIv%5;RN|)dU)[ Kdl&fZ#MT&b^sq[vf#ZE|P~_][' );
define( 'NONCE_KEY',        'z}U-FWZu{CZwWobMV!ned }4s&}dQ|eI;[t(^&euJ7 :[?kj/!A=Sh`:3z[&/RO6' );
define( 'AUTH_SALT',        'I$#TPdFy<8&$deJpq66;>bj@Agfnbjh][w!Yls{j53pSW[oM&C{PEQn,s&hoU0em' );
define( 'SECURE_AUTH_SALT', '` ?KM&<xObeG-Uwg+uvF$>x52|Ge~Mwn Jk7zrO4C8Kwr7>F;3=[EogNDUM*JHLA' );
define( 'LOGGED_IN_SALT',   'A14xg;M.ri+[ez/^{p[]^%zu.Ocs0$4Ap0W`eH&!M1Esj=Z[*2)9j?N;~_Kv&1P,' );
define( 'NONCE_SALT',       'Ravj/u-F8#ep6aoOrYa32OJJ4ID`0MFo9YZ3*X?@t}ZgHLZ2KW_4)oR5=Tqi=*Rg' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
