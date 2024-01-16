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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          't?d}8c5N8bf19(WW/t=vfMY&^y*6QKLl5zMDnAp& -qnZhU;ogYAgLjrj6+?A,EP' );
define( 'SECURE_AUTH_KEY',   '3LEa(JPUj|xs4*}1(Q!<Q[~-i[1o8O,1joCXYq_68[dUd*v,gO?+JCY48`|w7(a*' );
define( 'LOGGED_IN_KEY',     '!,4kywVDHCX?+M+NQ[*sYk$8=O!6tz,tS,):KCn~io#S-E:*%Jf1I:  JC|Uf4l(' );
define( 'NONCE_KEY',         '$aY Z8;3u!ECo?E0:MM{3q^:>M.7wfv5p|DhHG TX1Jw7U;UB[Vuc#tPiMHO-o=x' );
define( 'AUTH_SALT',         ' y@r!M)iSNY>.Q3R!Z2>RO9I@Hg{x1*Fpb=VHUy0o%bN^%7t-tjiZ~][k.BaPe[}' );
define( 'SECURE_AUTH_SALT',  'khY~_ki]j26fco1=lm3hoNAu7},Ib!nbbS_(f9zeIo|3%X!i ?8st2{sb%XW5T|v' );
define( 'LOGGED_IN_SALT',    'fDajek|.5irw*49^[*zcV==QR=i^lc2 1@})Sw@,V5* Jt,^;vc)5N_aqL>#wI[X' );
define( 'NONCE_SALT',        'F#rzg5[|S*j`Z$hF5t!v-enk@59AKb  W91H&s=IQ5Dkv8[DiM}M/YXUK;:[$4XX' );
define( 'WP_CACHE_KEY_SALT', '}iLK$GhRmFt7dR,kAcbep}MMFMP*M?Xfw6/U.EMERlN[,3}c9|1A`1h4nq+|./lh' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
