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
define( 'DB_NAME', 'gymfitness' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{@60g7gh<2e-BdOqdJxC@m#z93k$zB{Ozb>ZSi^j<_OCVa+m-qM<ITlh(mm1vkWn' );
define( 'SECURE_AUTH_KEY',  '3e#pPB/aPWW`U UlaeQcU@@Dr[ynnJvK~J75YzY)Eq!Rm-/@8Y_GG.g7].+ne8 +' );
define( 'LOGGED_IN_KEY',    'GBdUY1&4J_JE>:D&zSOUGRB%2;q7/wQ&:@h:`LaeUK2kJo3)7(gmxMKH.+r.!U@2' );
define( 'NONCE_KEY',        'oe<.cj3F(w$^[_(yb=O5KKzy-7jn+ !{8U^3Nl(J,Bl]vk6p,>5D.bEl[}%]`gW[' );
define( 'AUTH_SALT',        'Np@Bo%S{=CGd3/i(lmi>8`*KVa+G& Cooxoq$)ZCAagjA.Q{[#HLLX{F+cmpqfqj' );
define( 'SECURE_AUTH_SALT', 'D+,-]we?UAHWwqequo0{NSW_5{55,RpBTr,fh1Ica_>KtpZuPS&nnD;LITprAqR ' );
define( 'LOGGED_IN_SALT',   '{~S!oR3-NER1Y b/ri,CjHLt|} m%BTq0nR:m#=c`S(Wn:AK#DG<Qc`0E(3sMV5)' );
define( 'NONCE_SALT',       '>iY6HsVV26$ry-oWp;IK-|yJo$O/C^6{#@f1Mz8(1TAd6xHB-!C*{;A&k$w1OsR:' );

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
