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
define( 'DB_NAME', 'wordpress_biennio2_202021' );

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
define( 'AUTH_KEY',          'H$sBRq=#rBb*DQu*!.<vzD;j%6<{y=X9.w:@5p|]Pc25{JvnF3_O!dF|d6SEs#KF' );
define( 'SECURE_AUTH_KEY',   'h5$AJ6g1,=YePy(!]C67:+H?Dr1p9mL$&zMnVlCa^?p!]aqY3_e)LNs0flkL]3HJ' );
define( 'LOGGED_IN_KEY',     '34uw3PN1/ Zhv]RohA|o5&CT|{$rlpCyl$w4%_l9<^UK~Es;tz{ ht1RgFfq8PP|' );
define( 'NONCE_KEY',         '4k%FIowUI4@TumkdYr`9DJGV}PKg[I+=i&!>e(2<qP]t>IN7lI9j Ya)|Yze:p09' );
define( 'AUTH_SALT',         's)U#Z:ph.P~8?{W%;>QdMbOf_O6.Dc!YUBZ]kP^t|ZY$MNJ3MbH94.A*7O!u:L(C' );
define( 'SECURE_AUTH_SALT',  'mx:x&7-kpEa{soVf eVL R6vhX-+N9. rpXp.Ko`Dl2di),7Cs>H%oP-XJ_F}~T)' );
define( 'LOGGED_IN_SALT',    ':3b&]bJ$#0aVynX[b{hc%#(ds{lW:qO({|q<@ B0*0~AwwR<8+VJdX#m1^8k#Icg' );
define( 'NONCE_SALT',        'Y4RYBq?pg0S4=GfU<pNiE3;V`_I^y.`CWUVov#QTMGUG`c[xBkj<0+L#mS6C..[;' );
define( 'WP_CACHE_KEY_SALT', 'GFX/:K<uA=8@2-z6Z}~S3WCj+NzKijV%K2Exl^DI3}gMLD%9V8dLy1`_3Wdsrq/4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'IWsFa2fG_';


define('WP_HOME','http://localhost:8888/wordpress_biennio2_202021');
define('WP_SITEURL','http://localhost:8888/wordpress_biennio2_202021');
define('FS_METHOD','direct');
define('WP_MEMORY_LIMIT', '256M');
define('WPCF7_AUTOP', false);
define('WP_DEBUG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
