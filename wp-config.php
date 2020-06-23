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
define( 'DB_NAME', 'heroku_8734c6f702fc61e' );

/** MySQL database username */
define( 'DB_USER', 'b4b832226e59ff' );

/** MySQL database password */
define( 'DB_PASSWORD', '98d85ad3' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-05.cleardb.net' );

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
define( 'AUTH_KEY',         '.[@Yz5<VGVQ9zaTK43}[z*bPq?`.91g{BJ<I]`3e74iaPW+>&e0LIOQs;bac,HQQ' );
define( 'SECURE_AUTH_KEY',  'VJRD%s@Ul|e w<iE7H?U tFnpOs|=Tg~<^Hk&=UaaN_Cf0wTE}C6sdZ>5QI^<k0;' );
define( 'LOGGED_IN_KEY',    '1`Eaubfqb-%4a[>@.Y?D81M8M NLS,qrul_8=t_o} rpe;d#d<J3m8SK/RImb,1>' );
define( 'NONCE_KEY',        'swv#UJ#(L2w*xI)0|x,lkZ!uN@q+xM#7^=Ks,-QP)Q_V3;m%pAaY.ru]ls~Qu&w6' );
define( 'AUTH_SALT',        'oC!%U`dyD1,M[r&A?26;iuxYW^uSTz#w#,=]dubW)GeDBohd&nK-jdbRCf`lgzLU' );
define( 'SECURE_AUTH_SALT', 'kSDIQH2rd(G`1ATTVvY]ywuvrhF/5HiARxBs)uYW%EcTo(wpI32:-`stlVo=z:sX' );
define( 'LOGGED_IN_SALT',   '2{+?&HMLwZj_;BxwCy#m}Md@xNjK0IWi%~f_;~b;;V|zU*0j_5SP7vjTD+r`(7h7' );
define( 'NONCE_SALT',       'roPN.o/;ho.E4?uKvTM@bPcEM5b}4_Jp,nTM-@omdOsu82dG:#41}eajA9ft-mz8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'axs_';

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
