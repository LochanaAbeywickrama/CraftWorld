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
define( 'DB_NAME', 'craftdb' );

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
define( 'AUTH_KEY',         'M2jh6p=3L/NHVP9ewC[B`*fvA[*L^CZ]7Ip?Owt &JKrK3bJJwEl}xoi*[a;EUG(' );
define( 'SECURE_AUTH_KEY',  ':H[w(S U)NxE(>-H!Ul+l@b+KIs}*U_JaBU}>.o^/MX21k=84iR_eEtLEDx/F]9J' );
define( 'LOGGED_IN_KEY',    'F{Dk BW2YO%G?I{E+i6.J}0c?#%uSE~p|pJ]dJIP(C(jNIB8H7C_e#mc6GW8eQEw' );
define( 'NONCE_KEY',        'ae;USeZ47VHgzQ%Rn&G=Hq :^a/MpL}yt1=;Y!wQ4oJ3C^pJ#j8 3uAOp|NKx:V}' );
define( 'AUTH_SALT',        '5w},fmI96ik!bhJ/cIV}dJe:Aj`^J*`asNW@@3J$P5dUqZ|v[,nvrg_[xK$NX7*/' );
define( 'SECURE_AUTH_SALT', '^k38J#WL.l{`113sC( ,TNs]ShJ0)p$U{=Ts=zz/pth[<sYX=JbY@z6/W 2 aT_a' );
define( 'LOGGED_IN_SALT',   '^<UrMGxez~l(B}n+(=o_LKUQa# v[o*y:DH@>~-=_QV599&un8IVtIGn*t[YOH}G' );
define( 'NONCE_SALT',       '1vkYuB6m0el,flT:J|.u+Lp4jjn>4&Ocza?q3H%#;1ZH81|tNEPWOb(TA6bNPRsG' );

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
