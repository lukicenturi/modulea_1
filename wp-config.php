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
define('DB_NAME', 'modulea_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U?iDLXtl]`E*[Sc5mgT3HK8v2w[eI_5 e)~qxZn<cUJeCBaSa&JSBu`ZxNA2Q!jr');
define('SECURE_AUTH_KEY',  'qF|>(+xqW>!UMoS`2,1mi*##Ai}~%:p`D OtggBA?UI(H2=5DLI^}qMo]*I&(<^l');
define('LOGGED_IN_KEY',    'G`eTCaosb[~Jn6oN@r$Wh:vR5FQ~m@M^0&&0u9U,c:~}_~Jz-0.i<?wM0=IYM>t%');
define('NONCE_KEY',        'NRD1`7x3QzwO|BM+3(96wmiW2@H7<3#`Q8(AUW=hVzQ)5wLX*yw5!(YOZAAI83dI');
define('AUTH_SALT',        '~lYTU NWsW*gP _C!u[4iIA%#-]t?;DH~A2LYk_aba%p,]xvYPTdb??-gC|gA_Lh');
define('SECURE_AUTH_SALT', 'w`!JuBi2+Zs^NkEoy$Srb@1`Gnfx^5O%uX,O[wy`@<!ZT=t[l%4Qb1C<p)39T;(4');
define('LOGGED_IN_SALT',   '7y6OvCenp&:dkHCN{j4r5b!jil4#W+~~@s9U}4U@#3Ytz$QGmLT>h%7YDkl|b=S~');
define('NONCE_SALT',       'BkLJBR53{_RF6QN._D2i134o8icGPaC>9r}k?h-s5>>tXm*}26v~j7nJ$CJ:@ba=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
