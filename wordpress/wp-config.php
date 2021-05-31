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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-}u$~)It]v5utZ.G=R9j[Q%z#iJw4,D~qXkD/#i,f/?^.;1KP-f1[*2H#0XQqB}q' );
define( 'SECURE_AUTH_KEY',  'S9A5i)KTMq+.7P=}=$Jkh65-~=5Sh]Z%r=TMCyJWcF<K~*=ykft}}xTd|]d;-v@F' );
define( 'LOGGED_IN_KEY',    'XB}!hhz<[020L81-9RRaVzx=GQygP Pq6[vlm/fdQy)<]AxcLOEq<A)pDR>%FU*S' );
define( 'NONCE_KEY',        'fq/+>|x^*Nf,MY&8ghJ*h}LiyA7X%AP?Pcti UPO>etb2g/H#iTNuv(SSH?%EX-5' );
define( 'AUTH_SALT',        'JsM5&DNGF*@)`Hf=+=@3<FkWW_M_&~TcbngU<b-hs0(,gxwA8e(9#EsWfyK4YkAx' );
define( 'SECURE_AUTH_SALT', 'C:#nj{[d5OZ!L&)0R-XcJfMw$8#1)[l%t#[`14Gazk`}5y[,%J6,$[K ~t9)l~{.' );
define( 'LOGGED_IN_SALT',   '{TH=<w76 ^FA0RmK`fcSK!@&-<.e_SmKf$aJSbq#.x:f:<VCg1ODtTg_!l&Fk47O' );
define( 'NONCE_SALT',       'GZVAw{s)HLrkn8zZm^vF> g@3?~4X-LvljNz1(-Y{4e&!^)JVdtfL1_@$3.jb{^F' );

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
define('FS_METHOD','direct'); 
