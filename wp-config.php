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
define( 'DB_NAME', 'biznes' );

/** MySQL database username */
define( 'DB_USER', 'adminBiz' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'MtN(1eDdhe7d|5p*}if).vgPLU`hu5fLMMXpd%#LzsKC_p<<Xz1tR~wvRHEED<BN' );
define( 'SECURE_AUTH_KEY',  'm3]g.AqBf*RxgdGCUOwi:]s+|$IW~)[1F+_lR}8%[eFxY4r2PY/o8s{h1.5o^GC{' );
define( 'LOGGED_IN_KEY',    'IBV/qcC>L$rfSlvi)6*}6VAz2y*Kv1jo)^MN/l*DM+Gkc~>_=bKx!8OyNQ,kkqGq' );
define( 'NONCE_KEY',        ']x==}h+%DQu,uN|V?I.wTrCU8g*U:uX@pNJ _DhL&-C@dVt4D>:B>mH^z(t xxi}' );
define( 'AUTH_SALT',        'q1q(+~{e{khGr-FkGT/B/=}gbu+So 4ru91<ONo5)WR1?L%^F1/VNCut[xv=1~&7' );
define( 'SECURE_AUTH_SALT', 'QvaWM:A$YIifDDl(lBv:}JDLtxaJr2~GLX&,`Y Dmtr aHnHQqhhu9nwpV6mTgVZ' );
define( 'LOGGED_IN_SALT',   'F&*P #[XIKu[ kI1F$0,fXA|kp:(RE^K.+T^M(U[U_^Mnxk)v &v4qq_b:4r`c8n' );
define( 'NONCE_SALT',       '7eC6|KZ[nHFRk7?yvTQW7Z}+p58)C}BIRN~XY)IexL[A0$t}eTe$r;#r~o}/Xiu^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbiz_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
