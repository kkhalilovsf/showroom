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
define( 'DB_NAME', 'showroom_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Y)zw#N`b,xfc]&d~[F>`v3,dPS6F5JLL=gCUM.)%h;2<mMXMDF(qA$G9fMU;&/qM' );
define( 'SECURE_AUTH_KEY',  '/*h%WF$iEaW`D~hG_{,O.n+6&Ou%sV@z}?:sG-YYh/Kn[yxt$R1Xq$KHJ{PRO6rV' );
define( 'LOGGED_IN_KEY',    'L3w*uW;pNjk1g6ds)Qa6PaGu[Njj*+amzUOi]0-j(ddRJQre39_I>}8REEkoMYq<' );
define( 'NONCE_KEY',        '5 >?sd{Lf0.]<ggsP[O>11y?!``N rv8e9U-mGKNl*s4B;,S4VRh*rrBrRC5 lVw' );
define( 'AUTH_SALT',        'jT@F_sd^cTlHj)$^0v;W KG/G&FGq/-*FRCOi+{F3=IbimSb!Z-YBm>>;@3z=b* ' );
define( 'SECURE_AUTH_SALT', 'u TqRFUuC]$^Z@;r3)gpz|?s#I@C|5e01dX&flK&Sz*Chfn-q-os5pI>oPkD]&t/' );
define( 'LOGGED_IN_SALT',   ';^fd/Gh{JosMx/e0[Ijf= vMlKFhaFx9Z:4[;ZY{}E}~U/q^bf-t)hM}F^nR=p7$' );
define( 'NONCE_SALT',       'E*Ms! t3si!J|x^JW<Jw*]V]5>)u?H8aggxQ51fFI|z#6&lYX:LE$cv46a^1(-`V' );

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
