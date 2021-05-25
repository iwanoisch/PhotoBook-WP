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
define('AUTH_KEY',         'DMTth9DWOzBBZg40JGrzQgKWl66blSgvjnYMcoqEOrndscxeJtYiaOibLM964qeQeB2DBBy1pm5kEe3jPrj0vw==');
define('SECURE_AUTH_KEY',  'Xz17QiEZE+zOU3q7GC6EMVuOYNq2L1fBm42eDWu6bTYy9MgtHUECfMylOUTvTb9gGoOdYzH+goNmc2CG1nZxUw==');
define('LOGGED_IN_KEY',    'XPUeIZ94fxqUAZZBF0TpCNc8yzK72D8a2LxryDv9EYLWoeLG9THiOni2eu+HvBBdjF0+ihgS11DL1X543YRa2g==');
define('NONCE_KEY',        '6ZuSZ4iY9F4Lg0crJf/aSLNjEIbY8sdS+fsrkVI56Ur90hRHJ9g9drZgoQDsqlVvGNMjVJjVhcKfwbzVB1fgGg==');
define('AUTH_SALT',        'Mx+1jfaWQt0/cY73ItDMRismPw4jtoD2P7l0D89Z0FRahV7gl4f9b+FNkucY0A0LKghrsk2CQk3Tp6LRNhDrWg==');
define('SECURE_AUTH_SALT', 'yyAD+cEj9y0YGqtkGF3Y2upcHSRQD4Zxsev2DOTW2yRy55/frLFviGNTLPS4ayL52901+QaSihEbm6JZfOOiMA==');
define('LOGGED_IN_SALT',   'e1z7pb0m2RUm3uF+na1AmZyU4u6YlovvTMWeH/Ek6c7zLeMhzsRa+HmL0Y5ynjLevGbOgOU3z+ztkK4ALWx/JA==');
define('NONCE_SALT',       'XRdSfvOk23oaMIPPE0r/LQZSrCy0Frhz8FiqJexoXt1zg3dNG5t6qPpE2DzHpqjMTbjqZeItjkM9iMudw14ruA==');

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
