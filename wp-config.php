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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tes-wordpress' );

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
define( 'AUTH_KEY',         '0Np9H-[ihW;|8SUIhn?Q&]OH{kRL<H`&K$Xkuz`_os(Q6]P/=9Q.m~^a7(iU$$fD' );
define( 'SECURE_AUTH_KEY',  'JPR$a8$~B|yx0dVvH@}Wy+Y:>E$p`uk1Yiz;HUbw$:DSPXR;.]]nsB;{pM/=QkoS' );
define( 'LOGGED_IN_KEY',    'Y6)nCpO2#&bC_[vX:}1oB|yjj>KWwqEfGB1lGZS>?^.}6>(OV$SbIKNmh4dg)`LU' );
define( 'NONCE_KEY',        'WdZ@@_U-~S/J UOD)mJi!Tj|vJU~8X3cdTs @$G0E@^+|MKwSU&`c.*=Bsrkp,bL' );
define( 'AUTH_SALT',        '-Qj,U|}}p(`(O86g`x}dE=NzD8:?UFi?@}D2krd6k7)kLyQ4qe4$~D+DtH_`yEeB' );
define( 'SECURE_AUTH_SALT', '`;08xR,!3Q3F;AF#0s@&l-2,+ <+H&!|sTHsFweS(G:[CfO %/+|~&uHY65>wi0h' );
define( 'LOGGED_IN_SALT',   'UJp!9=nzvW7my9y3]nY]>&)Yx^4~8_;v9jh9,.P/8)RUAXboTVJ<FcplUo;pIV&5' );
define( 'NONCE_SALT',       'pXGK,$xJb8R7)gK>La!^9[+y=SOT>|JOrA,V8&J<L)~s`Ts<5<frH^NYh6-gcB*r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
