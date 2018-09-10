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
define('DB_NAME', 'library');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'F$rest%B#LiMs^^102');

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
define('AUTH_KEY',         'twbftprvavey1fqtkqm9vnc0ghnkoetbk287xibjbmksalyxhpwhtv9qart0m3da');
define('SECURE_AUTH_KEY',  'yh7nwniqcabudphtnuuak14ai69wndhcuerfumcvau119a9noo001ftekhskf4p7');
define('LOGGED_IN_KEY',    'mapzlag0bg4dij6fag4koebgdfw8vv7bmi7gfjyds5zsuxlya2rj6pwj3njkv5lb');
define('NONCE_KEY',        'krnghwneocruoeayc4poqtnyvxsyjachogv25thpb6fxcmjpk0966mdd0mi6i2mi');
define('AUTH_SALT',        'k498s52pdhkvep3ulio7ts8ohnb3dowejqxizewqnjce2ehe05iferg45xpyczvr');
define('SECURE_AUTH_SALT', 'o0al96em0bvskvv1y3zhselralrgvvuiidmraimziuxqf7k1kas8haltesp4s4id');
define('LOGGED_IN_SALT',   'uknnlbtlfnfimr0be2s3gqcxoakakeyeak7oyfsnrhkoflj6tjrnjz8xxxdugzhe');
define('NONCE_SALT',       'haeizgbq6wohzsiet98croeoycsqc7uy8tsncfyn9p7vyg8pfcc29pn7cfyzyp5h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyc_';

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

define('ALLOW_UNFILTERED_UPLOADS', true);
