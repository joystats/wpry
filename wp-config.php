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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'rIAMPHT8x0gv9vmjJMcjzAQ871wW6iuSd4y/+krfTPL53nlH6aZ3iezgqXFgWrg5GMWl9yNZVbkGCUliaLD5MA==');
define('SECURE_AUTH_KEY',  'UHZIqsojTot8P3bxnYpyRtz5ieHvUrGF4YxZIdCaPkaQQHE0JIy4VJTsf6jVdP6RRQ8CvSOmSYPmn0einAOVPQ==');
define('LOGGED_IN_KEY',    'cJAbIbesgKqrkMdJtVsEnnS6cjWQRQ79OVZXnAsD+GH7H5sfUr3cvZFbstRGCG04384snqY1f65wl7POfGN79Q==');
define('NONCE_KEY',        'T1DJyWyamCAd3fvr1JzIkjeSmFPvl78OHTqEmnWsR1OK38Yq9Gl5blLtItwsMoFGuTH4r5fUsH8SBN3gEQbCIA==');
define('AUTH_SALT',        '6GeUCurPrSaxzpLZCGCdMIEvzrMURTwlA3d/mFosF8WQqAcCiLaGmYVBjrHAiljsEvM2LwyAS/MgniDFEyJblg==');
define('SECURE_AUTH_SALT', 'Zg3m8ZImZhAhx124dgBv4tMCDEKvDjregcpzd88VRRpY62cHmqMe/+wBNaRRrGCjwWLEnrZMV/P48nyPaWBsHA==');
define('LOGGED_IN_SALT',   'wz+mj3DAcaMzayiVA87YArGtJ/csTgPWhEsMB+jK5o7ZjaDp5awH9psl8L1qfWzFyN+NpkzXUCUcWsqjC9PSiw==');
define('NONCE_SALT',       'BvG8sUDCuHTfmBD54RBjuIkwsqUg1TRHd0usSqFOwFVjhXoY0sQmufv+/dDItGo+fzD2YB/vi0rT1/o+Sfnqmg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
