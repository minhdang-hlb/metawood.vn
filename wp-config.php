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
define( 'DB_NAME', 'metawood_v2' );

/** Database username */
define( 'DB_USER', 'metawood_user' );

/** Database password */
define( 'DB_PASSWORD', 'Met@wood224466' );

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
define( 'AUTH_KEY',         ']7opW[`7nAks6^tIfm~Gj)x%Y}8~juu<q*a%QMc`Eg!IU+R%`vf$Ds-Re[s(5fnB' );
define( 'SECURE_AUTH_KEY',  ');zMqo.jc!IfFpW-AK:zj,(`]$g8;K&7x|Ym%)R@w,r#*,.`K{@<o:-dKre2 jp2' );
define( 'LOGGED_IN_KEY',    'Xp?$<J,P@cAyaT7>P124xt=(c!$^|Q{PBM]&&p<fUnA{[TZ|Jhl.J6Ol:<f9/EL0' );
define( 'NONCE_KEY',        'H8rUd0F}%9]Az+<p53k7SL8E,d8ER*?<M6(>vZ7<C,Mc,ZXC]zB1C&@n0}8rr_ZW' );
define( 'AUTH_SALT',        'Sa-xT&(f&Tuj~Az} zD&dY<=N>4<]%t,&eWa#to5Xo{8f,0@y2J3~n=lFJ?NixuA' );
define( 'SECURE_AUTH_SALT', '#OMyo-~0W>sW/AD`g5FH=zYX.C?|nXzM4xM0b0khx#&&TMxq[`jpjFpG2^I5kT2K' );
define( 'LOGGED_IN_SALT',   'S,=Hk_E8lp4hI<{F1>|73:Y[VVE>PcE3r=Xh7YS2#,w_N kv@I[#WVUwyvE!xd<i' );
define( 'NONCE_SALT',       '-Dy14,(Cq0~*aZN90r-Y;;`o}Ui z(?gE}4eS*4<6,E?!1 %nimp(/HvA]M3rQUY' );

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
