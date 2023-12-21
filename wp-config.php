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
define( 'DB_NAME', 'AmadouGuineaProject' );

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
define( 'AUTH_KEY',         'ZvQ@X)Xq85ARE7hOepob|nxhHh:V/ }8Y~+gWG<sp#o+nLXN!`S=8bk<-cjkgABI' );
define( 'SECURE_AUTH_KEY',  'V1Pc$>=2R:^!t}xnzIs_df93%S74[8@Q>(9A.U^)M+q3]X*jfEpi+P]?NC>2n801' );
define( 'LOGGED_IN_KEY',    'vkQPaYFPrhb^N7(5mC}T[|HJjfGo[b,#LkWM&/C^cC4AN)B*B~d.D$P;6ai/:o^-' );
define( 'NONCE_KEY',        '8!X^(RRMXds0m:aVXX]2)sYK B02f8]~g;!2KvuI,fu428%=~s!(m6hV&O_7@nuf' );
define( 'AUTH_SALT',        '7 l1TB2%,]sSR;gk !e[bk4,DAl+IPbh[A7*gn=[ fHPB./yEK5*kSn0P2*Q+_d{' );
define( 'SECURE_AUTH_SALT', '+GsiqFW{5*?m1S~}vJ)[ADGl2q)3:K}1977-lFP>-4;i@SuRshA|*tC69lkYFi5$' );
define( 'LOGGED_IN_SALT',   ';,=((hHmzAVsOZMjI!F:Jf{pO$i1A^] <mT[_%<,.zzsKC.mMX@{7fMn5PN&(dnd' );
define( 'NONCE_SALT',       ']h]YR*PT<3!//3^Lw`Pz/_SLA=w0u/qi(p$&`}li]{/-?<QkzY.|!c@SLSYIo%_2' );

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
