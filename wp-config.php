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
define( 'DB_NAME', 'siteperso' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?ZsN|sB`$-!eu4;]hlBd^Sf o=Ab|cBUN4x$G)MOSSda3X4*v4+aleAq&Qi<iB:!' );
define( 'SECURE_AUTH_KEY',  '_rN~$~r[@:sc1k!Yy@r4vA!JP/8Ukm5mn6$_kOMiadbR`EYb#Aw2kC@re?4GUd-7' );
define( 'LOGGED_IN_KEY',    'k}sZ.#^Y4w(VoCYzbjV82waaUWxgn{r$shv~;?.lPl$m@d^bZdCYDklOb.W~o,Yy' );
define( 'NONCE_KEY',        'KZVy|!%,nSR8I@jx[F<JoaX:nPfeO;1r?J$yJK(PDU1RU2B<C3M/i& f::Ot.!o]' );
define( 'AUTH_SALT',        'ayFnA*sTeFFT(Ka5W}a&Cw~5l&1[h:[f7HewD0@>(h@%SQm(Ou*UrL,}20TZ_!P?' );
define( 'SECURE_AUTH_SALT', 'c$tAP=QN1Vx{;:)D?rK%dFeGHp:|KED+>~<.{3(X=Di$c tN&+6t]cE][<O.`h/X' );
define( 'LOGGED_IN_SALT',   '|kOF(d@i vHKhOVInC->RMIjtSqNj~H0lk.D=xhPQa72*6)s8ts[._HY-;:1`$mt' );
define( 'NONCE_SALT',       '_rmNE9`4m2E[G8B;#-PA -^#) P#TOH ]*PY<R~Er]mde2g^Iu@UJxOOMu#9[WFa' );

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
