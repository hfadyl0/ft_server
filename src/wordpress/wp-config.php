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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hfadyl' );

/** MySQL database password */
define( 'DB_PASSWORD', '1337hfadyl' );

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
define( 'AUTH_KEY',         's<=ngH8m&Ateftox{,k.YvyMcN.4bV%o0#z_=.y3n&SC5[d_Zzq(9k`<GR6 5M+u' );
define( 'SECURE_AUTH_KEY',  'wu33:]{wZgs(u8qB~O)LMC@F=[A`<]dZ8E95O)Kdq{GzfpYdGk4gVyX5Gt3V#U$h' );
define( 'LOGGED_IN_KEY',    '~*0[Bl7v@JfVH~EQ+rJNScNI! q~PzxyqC!u&L7)IJ[7=yIEe_wI1b=VeqHDR2I*' );
define( 'NONCE_KEY',        'u^]Z$n6]R{ZDbgpbskTT<y:HG>0HA}Y%[oE|T81X=`,c ee~KvDIo2h>n9&r<:^D' );
define( 'AUTH_SALT',        'cfqYHE%Q{gS5(w82|_J+i0.F]xGb*yQ3*Jnb;*uhcN969io=)OxoB9^0ocpmuTpa' );
define( 'SECURE_AUTH_SALT', 'A?BgEdM_6!xn[NDeF6m +|<(ytVYHo98<[8(lVVq}1p-kZ*{f<u4<.unBm% HSZ-' );
define( 'LOGGED_IN_SALT',   '8WP$Dm$Twith2nKCL.s_.^r}VX/1^l`7xC35QmQpNfe cOXJ)=|]X<!=ANwFdBFV' );
define( 'NONCE_SALT',       'yp@Pc<:QwlCvfkO7P mCdqX2&v6#.zb6iP5ct{P;>5aQjg+o~Hok`U.`-0AmxUUq' );

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