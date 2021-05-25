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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UwISSmD/oA4VIau56yfsAu1MD8anx+UgndEKvqOcFJtgfVvuSvf9111zrZ0fEAgzUqtkNaem6KwUHKvjRN2QDQ==');
define('SECURE_AUTH_KEY',  'dvnp6+6gbztE8KI4E1QIRTGLdRuubqwKt+QRhv+TUd1kwvuc1fDxHig1rNGI22g71vIrcOcQqWzcSdUaUP8+gw==');
define('LOGGED_IN_KEY',    'MNujJWPUZjAJ897PFFpbcQj2z/kxkZrWXurkA9u9sXMITupyucXU5hoBK+j96+bgzqAdGRS4USPT3+Zfw5Bu2A==');
define('NONCE_KEY',        'kSxBt3Rhs7twm8Np2fhWBa6ANmsb++VASlOCfaIb0XJcSpmdQ0AP/piLcHlnpeP90I/pN5lyD5Vt/1DtoKZpZg==');
define('AUTH_SALT',        'zZq0oOdw40TMg+qCyMPCwwJITznJsJdb45du/HxzKX4J+3Nz63bQGzrqPF8QK+QIKHUS/cNF4fWDhilM9prXgw==');
define('SECURE_AUTH_SALT', 'JNUAGBMomgD1prSoKXmPGf7ii3xo/wOgKix+Y8R/atlcYuzOHCG1Y3id3yJwQ55YBHGyVdi0YPmiG9d+nu7tHg==');
define('LOGGED_IN_SALT',   'tP/Qus63iAus3W95hpboj8nNzFrCUyZq+6g9S7UOl91icIHaDMKVbNKk07TZ8GzNSSEpNg7b53hwgsG40/NO4A==');
define('NONCE_SALT',       'sguSjgU0+w/x6QTNjqOXpWNILjuGexQQO2czIP2W5j1+mP02Zg5bJjwyPfTz4nfRLUQLDkKJwaXKFpKhqfF0Mg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
