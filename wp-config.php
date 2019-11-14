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
define( 'DB_NAME', 'second_test' );

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
define( 'AUTH_KEY',         'aR0ud%}Dmx!Fs*oz^lk+dt?HFBH-rb8a-Q=w6pA&56>kD?b%rn^]Sc|EQ)kS~Bxv' );
define( 'SECURE_AUTH_KEY',  '1%}5,E& 4-|QpktN%j/X}T,;Z,5+]r+%VFj$>5Ah!T*OfQ~M_6C8!p6(W}]j&mD@' );
define( 'LOGGED_IN_KEY',    ',y+*;84<xb,c1d#])Z?WV{MT1h|$Xe>lu(r32{C8[)5M`UeUJ4j6b<|jBG;Xy&Qk' );
define( 'NONCE_KEY',        '7:VMhb76TppG;qe{K2}$JCW`kMJ(pHq?L|vno}O*V>/VLUA0^lMjqWrF1:<NB3Yd' );
define( 'AUTH_SALT',        '<,[OY.V{Q`%hbRM[W({N%su<wQpl00&qC~Ep!HdC#!VI)S|}=@kWlmuQ5[c2PfQ:' );
define( 'SECURE_AUTH_SALT', '$@{@RZwE|V-jmOJwRsOER40(p;AadbG,;G9P,NQq&/|nw/B?DuX/]/JcKeAj1#kk' );
define( 'LOGGED_IN_SALT',   '5`>^d3Aldbq)}+P984U3lO3cyk?3V9!572AkrO~Lth!5!VE5CYEb$LOV;cup?Fnc' );
define( 'NONCE_SALT',       '0tc!6_3w@<Memr=3r$W$:a2gY.`)0fA1 #Dne%fr=QFP~F3YKYO?6K4]Aq^_gnnG' );

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
