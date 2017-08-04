<!DOCTYPE html> 
<html class="index link-01 pag-inicio ambos-logos">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="theme-color" content="#0058a8">

  <title><?php bloginfo('name'); ?> <?php if ( !is_front_page()){ echo " | "; wp_title('');} ?></title>
  
  <meta name="description" content="<?php bloginfo('description'); ?>">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="es-es" />
  <meta name="keywords" content="aircarrier, zona franca, importaciones, exportaciones, bogotá" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  
  <?php wp_head(); ?>  

</head>

<body translate="no">

<!--=================================
INDICE
===================================
* MENU ARRIBA
* MENU PRINCIPAL
-->

<div id="inicio" class="contenedor principal ">

<!--=================================
* MENU ARRIBA
===================================-->  
  <section class="menu arriba">
    <div class="grupo config">
      <span>LEER EN:</span> 
      <b class="icon español">ESP</b> 
      <b class="icon english">ENG</b>
    </div>
    <div class="grupo redes">
      <em>Siguenos</em>

      <!-- Menú Dinamico (Menu Superior) Wordpress -->
	    <?php
	        $args = array(
	          'theme_location' => 'menu_super',
	          'container' => 'ul',
	          'menu_class' => 'menu-redes-sociales ',
	          );
	        wp_nav_menu( $args );
      ?>	 

      <a href="https://skype.com" class="link skype" target="_blank">
        <b class="icon-fa-non">
        PBX: 57 1 4 924830 <?php the_field('aircarrier_tel'); ?>
        </b>
      </a>
    </div>
  </section>

<!--=================================
* MENU PRINCIPAL
===================================-->
  <nav class="menu superior">
    <!-- Logo esquina superior derecha "logistica" -->
    <a href="index.html" class="grupo img aircarrier logistic">
      <img 
        class="logosimbolo logo" 
        alt="logosimbolo aircarrier" 
        src="https://www.aircarrierzf.com.co/img/logosimbolo-aircarrier.png" />
      <img 
        class="logotipo logo" 
        alt="logotipo aircarrier logistic" 
        src="https://www.aircarrierzf.com.co/img/logotipo-aircarrier-logistic.png" /> 
    </a>
    <!-- Logo esquina superior derecha "Industrial y Zona Franca" (Aparece solo en Móviles)-->
    <a href="index.html" class="grupo img aircarrier industrial izquierda">
      <img 
        class="logosimbolo logo" 
        alt="logosimbolo aircarrier"
        src="https://www.aircarrierzf.com.co/img/logosimbolo-aircarrier.png" />
      <img 
        class="logotipo logo" 
        alt="logotipo aircarrier industrial"  
        src="https://www.aircarrierzf.com.co/img/logotipo-aircarrier-industrial.png" />
    </a>

    <!-- Control del menú responsive -->
    <button class="btn menu-burger">
      <i class="fa fa-bars icon burger" aria-hidden="true"></i>
      <i class="fa fa-times icon close" aria-hidden="true"></i>
    </button>

    <!-- Menú Dinamico (Menu Superior) Wordpress -->
  	<?php
    		/*
    		* Displays a navigation menu
      	* @param array $args Arguments
      	*/
       $args = array(
        'theme_location' => 'menu_main',
        'container' => 'ul',
        'menu_class' => 'grupo enlinea enlaces',
        );

       wp_nav_menu( $args );
    ?>	
    
    <!-- Logo esquina superior izquierda "Industrial y Zona Franca"  (Aparece solo en Escritorio y Monitores grandes)-->
    <a href="index.html" class="grupo img aircarrier industrial derecha">
      <img 
        class="logosimbolo logo" 
        alt="logosimbolo aircarrier" 
        src="https://www.aircarrierzf.com.co/img/logosimbolo-aircarrier.png" />
      <img 
        class="logotipo logo" 
        alt="logotipo aircarrier industrial" 
        src="https://www.aircarrierzf.com.co/img/logotipo-aircarrier-industrial.png" />
    </a>   
  </nav>