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
define( 'DB_NAME', 'nhomb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Co[3o26yiTuGrx! S%*@[.,dSt[<96xbHQ.#QO,&-iOzQViI@G~^tKg)BJ&75?(w' );
define( 'SECURE_AUTH_KEY',  'gQ#%cqU^otE,N0HkV|wF3]xKSNFHuK4F+.GDGiYCYFU.}FQqVGkCL(NWrBs}L5r%' );
define( 'LOGGED_IN_KEY',    'A+SeWu#Hg?hjtt|~opf}cE{yFI82.6y,xymMs0_8i!lD~KZZVDeS<eNF6dBHe}ac' );
define( 'NONCE_KEY',        'c~Es1g6W{G M)BuF6{ku{c!dE;HnTZR,<}!+htni(?1~=|65k*E[vsW3C?v6)b,.' );
define( 'AUTH_SALT',        '8&QL].};ot28ReD{^T8n,Z. V%J5<u6GbxqP_@(!I=,->Z(dS8B7a)VbjeqI9A1w' );
define( 'SECURE_AUTH_SALT', ',b?&H.VAA,:`]?U*68-L:zn?(XF&ADg_f.$1_bbEV|^Dn2c|lw>>LotWIKuulg^u' );
define( 'LOGGED_IN_SALT',   'eqH|$aK/bAMt9w}{n+1sb~r?:;zEWh6V#}V`+sJ)eQ)4KIa-OtFp=Z1;_%}b<;`H' );
define( 'NONCE_SALT',       'ph$4f@]CV?#)w07yGH2p} gM8x[|FQO{WF9hCiwmI#0S|Y9wCYm;gV.GjzLdDi<j' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
