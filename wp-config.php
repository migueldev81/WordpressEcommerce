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
define( 'DB_NAME', 'tech_store' );

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
define( 'AUTH_KEY',         'YytfJy?JwXRp#[KoTCSu`Y)Z4c^]@$H8g6d<8[t.}I%JTQ.*ncYHi<90GL9=eu&:' );
define( 'SECURE_AUTH_KEY',  '^eSB~&BstPxJXMx~I{38 CTZ$R]i?eHaHu^SNQ:XqlG]Rh.3(]:oPm4M*&[f<,<_' );
define( 'LOGGED_IN_KEY',    'o+|lY%i:O#=gZ8S)5,Sh0]#|kip]hE CBj?|.ed]qo3+_CR!p JtRQ{Hw$XigRdK' );
define( 'NONCE_KEY',        '6ln%]I?Hlmv2Iq]Sszb?{2moTEU>3hpd%6@fQ]raMf{Z;%]WRqx=Rq:6s_`Rh7cb' );
define( 'AUTH_SALT',        'xZ/:z>Gwn{>2K,*Ew(UEEJ{qmjKZqiy]^)(-m|W0EMRUAU7RF$^$G#9RR5)@%Jaa' );
define( 'SECURE_AUTH_SALT', '8hc>mHHtur<%:I>J.!T`/DCs P1H1d>Ff@#I r]m!B#L)=BP9d|:dHZ5l)~U(VJ^' );
define( 'LOGGED_IN_SALT',   '6xr7=j^/1 %a|fr34)>Ij<TFy}^aiKeY@TmkhLBJ=U63GG5EJrmn/rVmr7:KY4y$' );
define( 'NONCE_SALT',       '$yfJ;ipChgj[Y=x}f{2tSb:*RF/0hL5vvF {l<rA&Y{>XCTg;u6em@y ^&p,hrg(' );

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
