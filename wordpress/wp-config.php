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
define( 'DB_NAME', 'nerdicdesign_com' );

/** MySQL database username */
define( 'DB_USER', 'nerdicdesign_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EwcKesbz5PYYNXbPMab7qHBH' );

/** MySQL hostname */
define( 'DB_HOST', 'nerdicdesign.com.mysql' );

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
define( 'AUTH_KEY',         '2IY8%;6%~kUI4h;OTiZvf9b/p9{1neQ865o4$68LF)UHS#=T-?!I9=0PU<an`7F]' );
define( 'SECURE_AUTH_KEY',  '6Vs:DoafpsjlZ9dsd6cDzc`JN,7PHcc0578E$C^g>N!r+[qXAaAwO[Zo= 972=GU' );
define( 'LOGGED_IN_KEY',    '=l@Vw,ulW0zlZI~IO^ORgN+(e5dIO~h9>Qp>kajGI$7w^c+|HA4UxBA*pmz;N`0,' );
define( 'NONCE_KEY',        '[<njrli)wMQZw@p4/ N!V!nZ^>)=)(J <6(bsn}~q4I,Qg~fz#Sxrgv|1h!]OvjQ' );
define( 'AUTH_SALT',        'Pan_l4Vj4=A5kcZUh8r^wMXw^82s=KlW!,n$.AVI>6@N^:Ob5w?M%)CxP7([(/6:' );
define( 'SECURE_AUTH_SALT', 'zPO4_Cf|G.H&I3(6M+A)G*a.$|R&+h&IXE3*#e)Llg[(w>s1;,YPFFNB<r_dkMFB' );
define( 'LOGGED_IN_SALT',   'v_@Y_H=-M{GH.o3f?kF<yBo{Hpfp84{D<&n3ptg{gty4^ l2ZniX:m+zgzh;|S33' );
define( 'NONCE_SALT',       'j2d]xj7zy]9&uAhFz2{>]qx4f!eOS<u#Iz*vfs{O)Z+R@$sDLOCRU<ICkr/@6Ob*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
