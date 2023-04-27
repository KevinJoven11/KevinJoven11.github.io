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
define( 'DB_NAME', 'kevinjov_wp810' );

/** Database username */
define( 'DB_USER', 'kevinjov_wp810' );

/** Database password */
define( 'DB_PASSWORD', '])7SnC988p' );

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
define( 'AUTH_KEY',         '5uyuuj5vnpklleqetkyssrv8d1yw6vg8bbzttiptccdtrem6gfcxr2klqtgabogt' );
define( 'SECURE_AUTH_KEY',  'mtelljv5x9phgeuemabfz9jirqxuml0k5euq3ybcj7nzwpe7obcifz1sqsflva7i' );
define( 'LOGGED_IN_KEY',    'ejs4cydepayqd3l6lqhaywpk67xdb53ci8dxib5f8qcyh4j7nsmbpjyw3hjfcrql' );
define( 'NONCE_KEY',        'djd8202ga4hgxdtei9ypoz3mdfnaluocxfafow48e3hjlvewl3wvfnjbekoikuwq' );
define( 'AUTH_SALT',        'wzgrgm74vcyrqxqrw5j0nbbdzsknbdoiyvubrklknj4cstcz1acxfxe5tlvrcc33' );
define( 'SECURE_AUTH_SALT', 'dhgh0ynwkeptdzs9ko9viemcuhlvjatqalop0jzhimyrrjaqiuwgo9auyajsovwy' );
define( 'LOGGED_IN_SALT',   'eqm6mxcrlludjk3wreufidcy0sv7hqfq6np2iquv13yquwqzgnqs3k7rgn9zbnkr' );
define( 'NONCE_SALT',       'g5uje5xq0i0jnfjvzgn6kxbwlsidj6edp0oilyzv9nbhiqri3wnjpvwzsue74gi2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpra_';

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
