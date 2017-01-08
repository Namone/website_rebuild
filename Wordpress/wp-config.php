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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'namone');

/** MySQL database password */
define('DB_PASSWORD', 'muggins1');

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
define('AUTH_KEY',         '31QHo{j8f{?x_X$E;l;v_[u@lFD.=x!GTM.os#4Dhhu#]cJDWDbOZ{ ifn[c.iPF');
define('SECURE_AUTH_KEY',  '!i!J +JLXA!%P YQ=h2IrQ*@A5<:tVOvM!z#J7Sj0}kNh@iOM9sD2kN-FYl)dvHI');
define('LOGGED_IN_KEY',    'k9 bteKi~#8xG342C3%! eBq?arRt5^E14>HnZ3aRRpTRSvDgQKOd79xoLBEq~).');
define('NONCE_KEY',        '(YQVZ$=e!+Bo*^?{{)+sDkKM}hACk,++Rk(wcbCoI>M4_KMJJ9s{.s9<D9463cQP');
define('AUTH_SALT',        'njWflpiR$(J{3//y%zMY,VI>7@@h]q!exiM((?z>KH{i0RFg=E#mgMc]^4Efaz1@');
define('SECURE_AUTH_SALT', '^Cb!Vu}k(TOj-l$U=t<jIM0Hk)][0CLW0Pz$y:i]OE+ZYA8x?bpRM{sLGI5WAq4X');
define('LOGGED_IN_SALT',   'i%p0*HuLLWf%|!yzU}$4(D 8fgzFZuX$c$m&NZ[Unffqnp@TT`IFaXD<lOkA/l0G');
define('NONCE_SALT',       '(;s,zLi#LP*Zl_f)M}2gt1zpu2_,C<C@YP2h6*I0Vb8n;&Et34QRu47D3H=]QCMk');

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
