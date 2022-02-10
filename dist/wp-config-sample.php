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
define( 'DB_NAME', 'swindpcs_wp' );

/** Database username */
define( 'DB_USER', 'swindpcs_wpadmin' );

/** Database password */
define( 'DB_PASSWORD', 'NHA_ayj!wmh2jzj7tpn' );

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
define('AUTH_KEY',         'lly=[hxNB:`zvgj@p!<G]6P_L-u$Ho:6*+ }sU)r88-zP>B.kL&?Ue4f4(wEaC}N');
define('SECURE_AUTH_KEY',  'oR X)D-AMX3b$1|[`+Q9ip`NlOLbl]Bj?5t3PobXI=vIU=][Co@2V+~exp(3KZ(,');
define('LOGGED_IN_KEY',    '&qh21QLt(bdF]?57MB%7I#Ace|x<e;]4CY/m`O+$c|<dgwbJH9Z=a=5VykZL_r;:');
define('NONCE_KEY',        'B1e,we!y1-Tney{lEY7?$>$$g^dp:.|I^-~c}&}]O^scg^J^StB%f:dVzM^!g)G)');
define('AUTH_SALT',        '{wisx)WwP@1T(4<L:-`?M}><+@ouymO^ Ps8p+!m*SeG-`0bW[:k6Z4=|DS..^hk');
define('SECURE_AUTH_SALT', 'lR|m@T`6p:ApSDmBOpIHN~#wYk8no;1<j#MaT2d(?co&*0xS]|-0~N|!(]{i90,0');
define('LOGGED_IN_SALT',   'Ad~8<>FWZ[0%Cu(o+1Cw|6=VB)e~,eqe2u3V.wCKSCJ*Sg78m8j0J|8!pFR:67W-');
define('NONCE_SALT',       'Hq$: &@Cv}=-eNo|}I~+#e$-z8zSNQr[jdBs7+I4461f86[nUH:;}WP/,vT,#^y^');

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
