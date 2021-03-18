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
define( 'DB_NAME', 'astrica_db' );

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
define( 'AUTH_KEY',         '|yI%@+`D2ejptQo[*mN5YQvq%u7UySU_)SXJaVv{SLkK9G5bW/;hA6lCY,G+Y@W<' );
define( 'SECURE_AUTH_KEY',  'p,4;bRU[f0Kxa@T+Rkl;Rv_D@z7xAFL!-M/m0RA`y0ql33=,o8Ts?Q)_UNV^$r$|' );
define( 'LOGGED_IN_KEY',    '(Zylq^aj^`dP>28ROf%t2lL6v[%K&,mkuN_HiP?D%E8clB^xlTK7f:G[m,>*=pGM' );
define( 'NONCE_KEY',        'F$GS.C?#R(hVVKlf~6BH>uw!1&>H`>.yTd*|}DcrA[PZh84!v/ab{,4j};.X#CP0' );
define( 'AUTH_SALT',        '/Lzw)NPkrNg*5X4G?s:Z@;VYL,CML$/pLn+*xlN^jltdT{`[F}^^~`OH<X3ivRz}' );
define( 'SECURE_AUTH_SALT', 'y5)F2Sk@+y4C&}-]_438&CvI!;<fo;SWh*w#:]*2B+D/NV/sn!|R|g0]}.q=#+?4' );
define( 'LOGGED_IN_SALT',   'EOae ]*ulT{z{4Dui%iM7xi&tc(h)2YBK+.TXtOcVvD@oq/I2#)Cmkh?/`K81 XC' );
define( 'NONCE_SALT',       'j1@xdaI|;nL4Q/CCTj)N{=>@AfhBVP]EUj-xboBnDAv)*fKjSqI1FETU;r%$3_H,' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
