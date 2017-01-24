<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pixelatti_dreamhosters_c');

/** MySQL database username */
define('DB_USER', 'pixelattidreamho');

/** MySQL database password */
define('DB_PASSWORD', 'd5k!wE^P');

/** MySQL hostname */
define('DB_HOST', 'mysql.pixelatti.dreamhosters.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OxigPgCbLLJvi82ZdVtL3wBxm6WUjFnLPGpmeefd4l3zn4bnzlRcJF4O2Qcc935C');
define('SECURE_AUTH_KEY',  'G4g5sL75aOtTrDZCKjfYphEOyGHlfhg0ZrE2AiMZRKTVwuwtmW3D8hcCvPAVANQK');
define('LOGGED_IN_KEY',    '0ywDnkchVu65X75h4bjZRnCjD1IAq5tJYrpcdeaeXvelXRX9piv8Dz4DTkKekN7m');
define('NONCE_KEY',        'U6mjsAMpXdpCv1jDX7IpGpLHPbbEWxJVDM4roZhpcnmLtMNWBoCUKybJM9KrYbgI');
define('AUTH_SALT',        'TydyoGi2Nozcu1BzfxsuPbsx8yK5E0i7QGCUIbIWkYLiPsvNREikZMz1UDSuRJYI');
define('SECURE_AUTH_SALT', '7yoDEz4RW2np7QvhVoLaWcW4qEtLA4yPqHo3juTa8xldIx3FZY2eJo2gR5waLpcL');
define('LOGGED_IN_SALT',   'EcVKJoeQxaEFY7oBuixvJ4DasKNZ6z0x340yeYG4l3rdCSI0CarbPxTLsrJNHNIM');
define('NONCE_SALT',       'ONQMYZspXK8npvsW5oKjTESclHFRl2SjegQ851QQDXsZam6zYzS8sWZ7a3JzvQck');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR', '/home/hallmedia/pixelatti.com/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_HOME', 'http://www.pixelatti.com');
define('WP_SITEURL', 'http://www.pixelatti.com');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'whmo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
