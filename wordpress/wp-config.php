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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'n`0H:sgLZy-&xph_8aB 7[_;I~,ZpA[D1;K`}z8ROg@uog4wU[10c.d z5PRfeXS');
define('SECURE_AUTH_KEY',  '/,rER$uP166dV&o*^i<SLTc-Y^[Mj;8gX]M`*e//;%Y6dTrY,(!a$D~nEJ1 x/}.');
define('LOGGED_IN_KEY',    'ff-<tpUpsso};GUw7hpqe,WWl,])_:8#< poCF)YH8gjiM<8}.^kY%#}%c~^oUfq');
define('NONCE_KEY',        'zfqye+FsZ~S,fYav2F_A12#@ch}}D7el-V ;;:JQ(0jU?<kkHZL+hSY_S2@ Dfg6');
define('AUTH_SALT',        'S3c3SOi!?|r?,V:$]SVs+r^Yed-G[u>v>T>G>@s$H>n(x,sK~~Ph_93L$Lhb&{4?');
define('SECURE_AUTH_SALT', '9!6vdWUq}>8t8G}J`]?Cd2Qc#$(-gIdM7cKv1KYoX)29)S,Z`X#76~dx[kO!Vc5_');
define('LOGGED_IN_SALT',   '_OmB~|Y&VV <PdP4ospg$-X;q-}$S!RlUviq!gZDVd[)W^_(JqS/t{:sQUQ1Y5-e');
define('NONCE_SALT',       'fvyxdtJ@jz I5,M|CXK^KwV*W#]`#I+xhf.hI:Uizy+&rA.Y}Lv+&f*_$2rs(x|9');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
