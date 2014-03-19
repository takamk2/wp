<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'gyanmk2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mKK@yx]+4MTnO%fMxm.3kni?jQqXP~R.W8>YB/8nv-p9XYTYW+&{|VFQC@~80e3m');
define('SECURE_AUTH_KEY',  'C]w TaT#._3MAVXbuST3CG]3-.!FI /5^ELVA!x`YZO(J@2G+!dUS-7x,,`2oir}');
define('LOGGED_IN_KEY',    '+ize4YGH<4#!(PfTskN9~fquq?)[ SfBmDCtbHmy(}7<.KYQNc-L~%@w(s$jE+Cd');
define('NONCE_KEY',        'j3l=i>aA }~[FXr$3tqwLXp)dt`ZLF2%,0LjkUS82-&71<tfWZ_F!,]4`Y>_JxSL');
define('AUTH_SALT',        'Y^~q9ei`;SySF?B{>p9``YmI1#_lG3^r&d&$?B@4E:7UB+HE`/aBXUYe!=7m9:4M');
define('SECURE_AUTH_SALT', 'vf:CGM<Lb)zv>G=SbI~ZQebCX/p=Nm*k7+LK5&!&S:D^i71?Nn11#L0 5j-c# r`');
define('LOGGED_IN_SALT',   '?Cc%P=VM~Ka+tzUlUxLZYZzF7*P;YQpCx36N#A9o`w:F1l:>s5|XYfE@0>6BxN*&');
define('NONCE_SALT',       'AH5Gu_o};nf-@^D[~inRq/JeUIkx]o^S)M)U{LzD<Ev!^|@W]r,|V_R1cu4l)HrZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
