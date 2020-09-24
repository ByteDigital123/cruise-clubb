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
define( 'DB_NAME', 'cruise_club' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.10.10' );

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
define( 'AUTH_KEY',         'XOUO+e!hSSh& )e)plLL6X.[J?7p&>stQQZasc&>DS4{tn*._gt8$m[O}G0D12%T' );
define( 'SECURE_AUTH_KEY',  '2]lz7dQ?YI[FF0 >m54&[[~=r]S7M;DPO;-Hb  SdI7mb}jI_ltnJ=5&K8B}GY?G' );
define( 'LOGGED_IN_KEY',    '_IyJb-K9RLp/.oX!O;]DR=(>X4&9+)(M ^a.M$r}_[G&ub!_]19$>c^w`?Wm=TWx' );
define( 'NONCE_KEY',        'Iq`d ;M.d%] $_8{=U}$W}qWXrIf7KMv1jz{vSqTpBW2<,F`32fO@sT_.`GTi!PX' );
define( 'AUTH_SALT',        'c@c=nT3Y#v<i~rI+%|-|2(4[RW^x:;;tv;u$.`{5.-<^*CBFc5w6Uiz%>1C};d.b' );
define( 'SECURE_AUTH_SALT', 'E7B^mI7r7dyL.E{6D}kT4eMn7|[l{TGSM1dN2RQ.jv~S9:=I-<m A!l>`F`MCWK!' );
define( 'LOGGED_IN_SALT',   '?1WH$QXqdDqPkJHgi}.wr(RNY*/*1;HBiYRD@N]*U*Wd`r(mZptCsO>rkA4LkF(/' );
define( 'NONCE_SALT',       '0?9lo2BMj%$+VG@jsLt<6Z[u@|ndIg2/HS_;LP2j-M$y*e:W^1B){qdlu:E&${;E' );

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
