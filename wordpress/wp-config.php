<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'surticocos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'adminsurti');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin369!');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8u/#-QSmrN(O:>p@41Z*<dC$: 33[7ZBw%LH),V2q8u<HksRm !&D<lJ6Za@:tSm');
define('SECURE_AUTH_KEY', '5^KeEht lyPM1U+u[+<!f~*==P}.wITH_P+6Gg?|-eZ@_Hx6kG`I]B@6WGL<+ekV');
define('LOGGED_IN_KEY', 'ml`xLdr1oN_aL6KMag/G]NmhC_D$w}VA!U?&q{m3KQ[>;vs9Jc*$cg4cR0GH,5R/');
define('NONCE_KEY', 'j$^bD5{=FzrRfo}*dih&=_2IMZSLDZs%oPU#;HJ=P6xYGAHb&4!B;E=j/2%bOI<6');
define('AUTH_SALT', 'n87Qrs#St|naKo!Aq[;(SK,.[_L^.^So1(lZ?>pQbzWb,)gm]i+I:u(x$DyOPQZ2');
define('SECURE_AUTH_SALT', '#b>f:s!Vo;E>qEh!PO,MaRif7``YH5{R<.__T5&Q~bi%gqXm.RtP;n(,nEA}1FL.');
define('LOGGED_IN_SALT', 'U:v/xH-P I&2S?)0msu|H>(jq-;Pl!a?jSh/`6N?6sfj:.}S##R@OK 0O0.N)a!*');
define('NONCE_SALT', 'Pzx&pXSSck`Nlc*)&kFPJ !>~9pKX?Nc(;:SnNoe .;r#LSf9<< ttlpVIY-sN) ');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


