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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']&-7FCg]!zPJO56b<g`U{39!]L8[ y}[zrF-opCW}pj,73}bAgC#V:;x8JoonUZQ' );
define( 'SECURE_AUTH_KEY',  'MN4+l@@*CwN,-W.@@d-+OUfek0rGzU!T20(< k!KAn3)gtA!m7AY-ioPiWYt/J({' );
define( 'LOGGED_IN_KEY',    '5>/Li/nf.mqo!s=bdu.$qJxmFz3.CWFwBpDXrW1iCs>#GH(10oeU#1;kU#E:!y#2' );
define( 'NONCE_KEY',        '5<{7U6jA(QFry]T2H@Qpm<vTfqa3L/uMF{+A+i,7t:Jm&BJ5+[J]tIyB#$C9~S[J' );
define( 'AUTH_SALT',        ':n{oQ+/B*(xN @/*;3[o~KP>P>,4A~-k]M%WKJnCCT!+b JIty|(chT(Lyi8 .@Y' );
define( 'SECURE_AUTH_SALT', 'vf>{f$PJjgi} .Z_easRXxUCV^Q%,H>_Eyh@j68e%[-ySHE?,pGeGomr<VG4yJ.&' );
define( 'LOGGED_IN_SALT',   'cg;[tTQN8H8|+b@}6VdT_J~I@%<`muFYt[{[Ors-M6{*|HNo _^dZ#JHM2AJh074' );
define( 'NONCE_SALT',       '/x?&EYesL_PvZqI4b<Fptd{X8w C[6*<&tE<YKlCK/tAqn.REOriJb1Y7;&/E`w{' );

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
