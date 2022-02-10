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
define( 'AUTH_KEY',         'oR{C|lBTOCYjzeadCK:pNFEWw+7DH?HDch*y[HFl(S[74~V`na2_7=TqU$Lf`A$U' );
define( 'SECURE_AUTH_KEY',  'iddciWvfS!D|m`qv*pz)YJD;I[6)Uok/WSBNiw,ZJEnjt>N(|TP`<.ZoT#C6Now^' );
define( 'LOGGED_IN_KEY',    '(4txX2< <^*Q9J*m FKSxn+D/%5M7Gd0Ct#0U-@Zog^h1^5_W{>1n}ZNbc9Y^nT5' );
define( 'NONCE_KEY',        'X5/-Kme {^6AvvF,[Omh )XiR2<+BD=}&%hf]W||)4R27OgfQRq1,P0nBR,)`F=q' );
define( 'AUTH_SALT',        '-:rDY6W#*CB^G#*T|CS]QinYS$qchC&|CAb}RT{v~K=FY(8.=eGE&q)&zoafdrD,' );
define( 'SECURE_AUTH_SALT', '_C~{~_`OPbGne%xLbg(_@,w_IrJV1[.pa=J)((<~(/9]tr#t|{8:@wF}&JP!8Rr(' );
define( 'LOGGED_IN_SALT',   'BsJ x5u^=~7K/m!gTC,O;I!0BU`G[kB9vyG1LF%z(}S.yPOQ~$g9yy#EL9v,mIP!' );
define( 'NONCE_SALT',       '%4}+TW=Z3#lN,ye<We_ irq f-SFKb#,Stkr$FKB_w+.o#NSC7/A 2+U,VugJAUg' );

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
