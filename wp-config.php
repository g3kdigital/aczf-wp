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
define('DB_NAME', 'aczf');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'aczf-admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '417784093K/*');

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
define('AUTH_KEY', 'Z%Nq1P/Vm+ZwuwOD7wvVxN79;;<Aqafj;O$aX/g(|%T:BhHF<0I.Hm1oBwGLaFYD');
define('SECURE_AUTH_KEY', 'PIP2rL=!5_2})VJAVYo,,=FV~z)xdn0D3^#6>2.ls-[M{.n@Ws&/&+&?<>UyN:d ');
define('LOGGED_IN_KEY', 't0h*pq,nW3F8-/A` huTQ7+Iu8G6,Ws1)!G8u.3[SIF`MIask:vTx*W-[}rx0v|7');
define('NONCE_KEY', 'FJzK#*jR)vV.e:0{Z#b2]E|-1A;R{#%8MiHuGpn2B<mi;S4P6%5/4t^?KQJ#MzFV');
define('AUTH_SALT', 'O$muE>yU1ko|%k[yA4HP1zir&75_r+l-/GL]s2-F*K~Sh*`9?kl*,xI5Px/5%9Rf');
define('SECURE_AUTH_SALT', 'ZwWyl|2]#UGPbdWlc/12s^?Z={E=ubq}ek`prwR7/O.C%r*Mrav74,`Mh$+`6<*:');
define('LOGGED_IN_SALT', 'p{H|Vlw=q*1!36rwwVE>J*fex]~N,^}o.h3(9uvo&oCh9^yd!a$xfD)LOot6C6m?');
define('NONCE_SALT', '*-N,?4(adVt*94nPu2~sqquSunc^*yN-djysOJcflT?%bbNFLgV1ZmZ$CzU|OIR>');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'azcf_';


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

