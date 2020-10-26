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
define( 'DB_NAME', 'Enda' );

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
define( 'AUTH_KEY',         '|h?>.7C~aPJITfH@>vSPH8:^)ibna9l@seyzXPAb[S^w6YRR@FKlBgukgmwpE[:N' );
define( 'SECURE_AUTH_KEY',  'T8K/?.3>=j-5.4H05yS?cX!_):ND~*n[ c+]a,ciPnPN!kL0*g.&m|,u%z(;X,q_' );
define( 'LOGGED_IN_KEY',    'q=P8k1UsFM;#OeQx2BG]&lWkmOHt G49)CwfC5Uga~>}d1BK#HAj8 FYUr<QRRzX' );
define( 'NONCE_KEY',        'zvQiTj--j`-ddRBIgoKmqy(s<2gh77eEv>I(lOC,@W$O}|01Jn^KIL6u3wb2R8SA' );
define( 'AUTH_SALT',        'GPB-HdXoO E9x2Rv:*3X*c/MMrL#Mh~&z.K]#ETs+Ii04b@xQ-7IGF*6et-^r43-' );
define( 'SECURE_AUTH_SALT', 'VIiXus5T:;OmZgJ?XKVc/`fC:]Hc&7Z|rqNMR+a5hnB lVFo^nzkmZ@>V&e|8cex' );
define( 'LOGGED_IN_SALT',   'xZ[SHD%y?gl[vW~-WVlTo1UafK_7gzo::V{M:d_8@Q4OLMO^EK?OC)3*G#wa}0jM' );
define( 'NONCE_SALT',       'J)lD.VcHM)>#N]So#6.jjgNnU+WK{o=DFA/NG9-xQqJ!@11wL$>p&jaO;ngySAH=' );

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
define( 'FS_METHOD', 'direct' );
