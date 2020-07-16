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
define( 'DB_NAME', 'i6715318_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6715318_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S.sZusV1fR5hbSQTByK11' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '5Hze4PkqhrEdb44z3tUXefEDSzzKnXrL6ly31BjxVIc2aLP9IXWg1YfexAf6Y0nl');
define('SECURE_AUTH_KEY',  'BmNjN7wyWedXqCJ8BVQ5dXcoyMQirQG7Kz2XCtENIeGBUFbCrouw8WeBdq15MLms');
define('LOGGED_IN_KEY',    'uZy9zx1ljieNxhhhg2vbeWswhhZopiJKFn551SpoZPJNZUavRwBA7y8jy4Cs58lA');
define('NONCE_KEY',        'E6J5RZglp0ySn6yiwU2CHdfJl5dWTH1a5bcs8SkFyWklOIly9hKWmphTVUxMzJ7H');
define('AUTH_SALT',        'Ddt1OYesFRAyXx2cTqKylcty0mwpMYh84U10pC3T1RPmfmJFHpI9zobbSJWPEgzG');
define('SECURE_AUTH_SALT', 'LvYEqoiqESGwNmcJPchou4GU6yyuLaOilR8nPbH4Cu05AOm96QnhQDViONOJ09Uj');
define('LOGGED_IN_SALT',   'nJzYoNWQALwH2jO10eVOBT6JdY1jNAahI4SZE4wBAsFStxuFKAorrrz2q9PBnXb3');
define('NONCE_SALT',       'tlEeGVYjDSUv31PyxrzEB0OPLEBqhChUuf9U1suS2Q8z5BLXwU0ByDWtvNBSiREo');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
