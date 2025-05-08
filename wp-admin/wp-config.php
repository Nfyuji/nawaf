<<<<<<< HEAD
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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpres' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'tw]?+XY<w<+MaT/Ep8`0L4/edAU e,_A?1P@wkM-}Q((8q[L1-#~F&?(Sw*ups=o' );
define( 'SECURE_AUTH_KEY',  '`ba@u_O6!c9ToiLLF8L9yC7eGk4!@WqYwrI55=I6&7+GDj%H8qQJFZv7W`qO$$K@' );
define( 'LOGGED_IN_KEY',    'gfW-on&y!7PKXma3&(Q,P*hF8G&`HY^eJq?^x#+hmL#0[/-@9UL*N5D=O;#Bx4T ' );
define( 'NONCE_KEY',        '[2. M+}$Sc.|2G+z<i8_P`|Io~`72);vDwA5K*FH+52Ag@xW3oWZL?mq_uQRs(ZF' );
define( 'AUTH_SALT',        '`JkDW7n*<@B*yrxaZyNkY/fu4EW =w&~&N$-33R+SJcP{,FIwKOW$(@_@fWJ!80w' );
define( 'SECURE_AUTH_SALT', 'D=trPbDSh@G:u2,g(FXr|C#hrK4$C)!0xw;xq&#Mx2wzK]sIYpKMynG_Quf$>V$f' );
define( 'LOGGED_IN_SALT',   'd@`?E}IFZDnw NoS%.7&J=]&!-L!/3wCX~RkmeH5VW,9Wj6xW8]onVD::m1F?2ig' );
define( 'NONCE_SALT',       'h?dB|{i6FHg.k$`0WEheF<a(]$mdQI-7k:.n%842*FyUPeg( (lA.]KHQQ;7I5h?' );

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
=======
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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpres' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'tw]?+XY<w<+MaT/Ep8`0L4/edAU e,_A?1P@wkM-}Q((8q[L1-#~F&?(Sw*ups=o' );
define( 'SECURE_AUTH_KEY',  '`ba@u_O6!c9ToiLLF8L9yC7eGk4!@WqYwrI55=I6&7+GDj%H8qQJFZv7W`qO$$K@' );
define( 'LOGGED_IN_KEY',    'gfW-on&y!7PKXma3&(Q,P*hF8G&`HY^eJq?^x#+hmL#0[/-@9UL*N5D=O;#Bx4T ' );
define( 'NONCE_KEY',        '[2. M+}$Sc.|2G+z<i8_P`|Io~`72);vDwA5K*FH+52Ag@xW3oWZL?mq_uQRs(ZF' );
define( 'AUTH_SALT',        '`JkDW7n*<@B*yrxaZyNkY/fu4EW =w&~&N$-33R+SJcP{,FIwKOW$(@_@fWJ!80w' );
define( 'SECURE_AUTH_SALT', 'D=trPbDSh@G:u2,g(FXr|C#hrK4$C)!0xw;xq&#Mx2wzK]sIYpKMynG_Quf$>V$f' );
define( 'LOGGED_IN_SALT',   'd@`?E}IFZDnw NoS%.7&J=]&!-L!/3wCX~RkmeH5VW,9Wj6xW8]onVD::m1F?2ig' );
define( 'NONCE_SALT',       'h?dB|{i6FHg.k$`0WEheF<a(]$mdQI-7k:.n%842*FyUPeg( (lA.]KHQQ;7I5h?' );

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
>>>>>>> f388694964c8d6c918732c4a9e15463e71c6b116
