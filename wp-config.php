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
define( 'DB_NAME', 'S3AmJnL94U' );

/** MySQL database username */
define( 'DB_USER', 'S3AmJnL94U' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qs7LaN7JUz' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '^xP;bPW_MyTz0UGtJX5<+YF@(~t 6Syp2Nj|?iqs#q9RFba+rYW7QPToy|?z]o6&' );
define( 'SECURE_AUTH_KEY',  'U/=)dTQ!(O*,&J1lG#@2lEfHq1$m6`s3^];7-ov*nEDn7{WII)>!!MbO/J6jD>(c' );
define( 'LOGGED_IN_KEY',    '/7VDQ^O)Kw>1aw,b@&BDFxqr(CPdN})Bpzgz?M]dPyP}j|@:x6d!64`Q#zqwsm.0' );
define( 'NONCE_KEY',        ' m+<F1=(N,<G9m]6pd|,6B?tbQlwBpM6aM^:w3=n_c<2zj*_thl:D*HMn@X$`Vai' );
define( 'AUTH_SALT',        'ri8)/&gEjMFe9!0M47}y5]vVpt+is5G7P4wn1UF(L+a]Zpi0mYCjpx*2q[&aoJ@w' );
define( 'SECURE_AUTH_SALT', 'onVe_$@DZ/IyA3ccNr6lxT-xx8T,sbaMUc*qGnz`?fAi0u2Xy{:tI!5n3H.R5^q>' );
define( 'LOGGED_IN_SALT',   'Vz[uyDfnN_[[Q1r$(s|AF^Uy_wWi,C$r1%N@)B(ra=:,_v+e0!k2j7of@0<OoOme' );
define( 'NONCE_SALT',       'BVNR-Vx;7E_/-[p+i;(7vJBOe^n=*T:S%zW`fXeRl$trJCG0JGd7SvSOKxKVm?}P' );

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
