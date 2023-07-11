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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imlabs001' );

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
define( 'AUTH_KEY',         'ek(O9wUvFS+ ganohmY9vJ`X*5>A+&e+sY5gNZ//lHLZUza[vUC]WL?l[>(72f4U' );
define( 'SECURE_AUTH_KEY',  '#1rn*<h^ph<7vW:fFTae?]@{o@q%Y1P0!^ji@`@^z,t,Qe:N`a|zsbD!wfy`+>Gq' );
define( 'LOGGED_IN_KEY',    'Jj2jsUBk[S_*UK$>ReZ^S>=c1$aS=Ye7dk|@((*N-@b.J_2=?P>@7Ya|aR)&Jp%6' );
define( 'NONCE_KEY',        'ygE%vC4=D]aE/vp#r`f*&E|JyeXXv*rX~j8=.sMJ`de2X;|r<.5c@9AnuR^y)|.h' );
define( 'AUTH_SALT',        '`KCE.%B8I-51iVx[C7XEmLq]bY::3&w(-Kk:^_;s^hJmKiz}%,d(>1#vU>Q5IA#P' );
define( 'SECURE_AUTH_SALT', '(>ku}gbWl--N83?X&I&fvFK3l*Ng<26im:J82}!nBL_gE&88bb||[$m4Uj$]1UD`' );
define( 'LOGGED_IN_SALT',   'neI1wvZK{@BS^RU94;{U:sn>63#6O2]:~lKkq9S~A,X%Ei=Or*o}[*gYHH~Kxxi2' );
define( 'NONCE_SALT',       '}RQg.k9EvSF%1M@}r6;mk{i0#?TQ8:ObzM]bc,SIN|>Mk[d~QMN=k f1D[a^Nk.*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

define('FS_METHOD', 'direct');
