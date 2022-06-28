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

// ** MySQL settings - You can get this info from your web host ** // /** The name of the database for WordPress */
define( 'DB_NAME', 'vpatraldowp' );

/** MySQL database username */
define( 'DB_USER', 'vpatraldowp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define('AUTH_KEY',         'CJOj,O`imnpHrRu}|ke82Y-BXK+DQ4k->]#*YSmt`3 |_%{T,Z8gn.hFb/;?1m;n');
define('SECURE_AUTH_KEY',  'K`ScpCYO0pGv5_H-#MC?LjV@e%o{m%$+v8Uojvu8b-s`O1RpJ.uOr;|(<BWjYevH');
define('LOGGED_IN_KEY',    'vQ|2#a+Wh5U^f#|4zY+65Ad51f|IN.qQu!(2mQGYp^3p%+FdM$iv!Jp f53Xl_C7');
define('NONCE_KEY',        'W-AzfX8b|PePKNY5-ObHDmH!C;+?,B&+PDX5^ ^}CO!NEJ~5&8a@ {AZ<zrWkT:@');
define('AUTH_SALT',        'KGgWTlQN5`+NXR)M~o<iabHALVL+^U|8G:+g+_urywv#(8,aID9#^ApTA-*@i1%-');
define('SECURE_AUTH_SALT', 'pjgcKSBj<Kve2zu+@9x%)pI 5Sd48h>g0o+k^RA@lE%PAN70-mP0|i~4)T`%k+IS');
define('LOGGED_IN_SALT',   ';hI>2*oIWKTj=vSaoY&+*dP=8 3M+,cf6Ui&&CP<Z.|/+?6<4>}WeTo@5LNW6<&S');
define('NONCE_SALT',       '*L|_rB?+t(^=gwX}X&S5l~v,x&J2}L5|P9T.lhiPV{k`CD~=vYhSXW,WN~Y:cwUT');
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
/** CBP adds this from Google Cloud Storage plugin wp installation */
/**putenv('GOOGLE_APPLICATION_CREDENTIALS=~/GCPKEYS/pinche-poutine-1493932361575-fe95403afc45.json');*/


