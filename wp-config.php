<?php
/** 
 * Configuraci�n b�sica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener m�s informaci�n,
 * visita la p�gina del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionar� tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'franksdt_nuevowordpress9');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'franksdt_frank9');

/** Tu contrase�a de MySQL */
define('DB_PASSWORD', 'frank123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificaci�n de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves �nicas de autentificaci�n.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzar� a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'RcmD-(-Vf{az. oxY6WuaHqqVXD8vQw=$!pz6hsYbuxI#8gZY(?UspdJjO-m`!qU'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '*JaE2{NJ`Bnl/`Q;s^N+9m-SUQ(Xeex+]%_:AH+X:&t|H)NH>!aS R__Q[~|cf?H'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'ZzZ]`oj4xLNgt= nNqGTclD3gGg+^NWIg/.J#jek|4RAq;T(U+*[P6FU!|P5pRzp'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'kBb|-+4B07#pAD,<FX=EK!HIu.^+FbYrRtC@Mc!-hmN/3m0fudu%b$,Dxg;zbd%7'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '(|9]g0dgll3ZgJ$vlJ(.9aGZJ)>MLJsqb;2 !RYc|M([W1!+y`[e{)?ry*C7k7#r'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'VdnKI.mCyF$|wXe-|+4:;#1 jcfOKM^OR?f$_Iv9$W1}BKfM.14ITOUZ{oobIpd0'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'U0UMU+^ZuJ`(1oL7u;kXE8%!7!(=DuUnpNCVn|R[#n+9?)X,>T2z(UGp$y3O~ SP'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '1*xh_;y]Z%Q+jt.c$Y?4NoA#bTIS5exBQ>f:NH-F :<}_v2@P-$>x!3nVrf2~b[.'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo n�meros, letras y gui�n bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copi�ndolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catal�n.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* �Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


