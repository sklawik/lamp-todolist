<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_ROOT_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', 'phpdb' );

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
define( 'AUTH_KEY',         'U.JG$%*VP%;o9I]KRJ?OP1^ae@YnEtVD-T!yH&GsMKzfx-eS-/]p(%TH-UK`VUG:' );
define( 'SECURE_AUTH_KEY',  '=cza9dMN5#24z<T+Ohu@PVs*GN/R*8H@!KP;Q4}&NO<@H?rtM-4}U]CS4|Ly2F{0' );
define( 'LOGGED_IN_KEY',    ')G<J3idhW#qf<~4kz(o`E@7nfN{XQysNVjoUqHx`; .&eNS)Px+6=JM.S=O{00YN' );
define( 'NONCE_KEY',        'x[dhkzFpiCnCs]<+Y1s2?K8WVf(YN`<jFjF7&z_e$/bz_|.LxyfNkpUlEBzNWjLi' );
define( 'AUTH_SALT',        'U[>10`%r!cpj+SCykSMzkXqMo@.jSvU,.gycSJ<.NLS@6/ iR{MIoVotsvt]c!Ov' );
define( 'SECURE_AUTH_SALT', '$<)F#)[4R$93jwe1C[T(>+$(XQ*_w1$KzI;:Zta-GR>OcipGqLoqC6xBUk!0iZ>p' );
define( 'LOGGED_IN_SALT',   '#{&RaWOX;&wT`pu<wU>NA&GB(*F|F>Y]?lI0$YKQzSGl7+c=;<STW;-yC cV+?.}' );
define( 'NONCE_SALT',       'KbUe Rm,z#X7#M!_J&|:D)+CeZGU*#taDIIar#iSS8fo:9v9PvogD`J3179dRHpn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
