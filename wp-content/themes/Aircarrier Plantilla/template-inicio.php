<?php
/* Template Name: Inicio */
?>
<!--=================================
  INDICE
  ===================================
  * VIDEO BANNER
  * CONTENIDOS
  * SERVICIOS 
  * NUESTRO EQUIPO DE TRABAJO 
  * NUESTRAS VENTAJAS
  * MAPA
-->

<?php get_header(); ?>

<!--=================================
	* VIDEO BANNER 
=================================--> 

<section class="banner">
    <div class="grupo-video">
      <video class="video-background" loop muted preload autoplay poster="img/video-cover-aircarrier.jpg">
        <source src="<?php the_field('video_url_mp4', 3); ?>" type="video/mp4">
        <source src="<?php the_field('video_url_webm', 3); ?>" type="video/webm">
        <source src="<?php the_field('video_url_ogv', 3); ?>" type="video/ogg">
       Tu navegador no soporta HTML5 Video  
      </video>
      <h3 class="titulo video">
        <?php the_field('titulo_banner_video', 3); ?>
        <button class="btn video">
          <i class="fa fa-play icono reproducir" aria-hidden="true"></i>
        </button>
      </h3>
    </div>
</section><!--FIN BANNER-->

<!--=================================
	* CONTENIDOS 
=================================-->  
<main class="contenido inicio">

<!--=================================
	* SERVICIOS 
=================================-->  
    <section class="seccion servicios">
      <h2 class="titulo principal">
      	<p><?php the_field('inicio_titulo_principal', 3); ?></p>
      </h2>    

      <article class="servicio comercio">
        <figure class="icono svg">
        	<i class="aczfont aczicon-comercio "></i>
        </figure>
        <h4 class="titulo">
    		<?php the_field('seccion_servicio01', 3); ?>        	
        </h4>
        <a href="comercio-exterior.html" class="enlace">LEER MÁS</a>
      </article><!--
      --><article class="servicio logistica">
        <figure class="icono svg">
    		<i class="aczfont aczicon-logistica "></i>
        </figure>
        <h4 class="titulo">  
        	<?php the_field('seccion_servicio02', 3); ?>  
        </h4>        
        <a href="logistica-internacional.html" class="enlace">LEER MÁS</a>
      </article><!--
      --><article class="servicio zonafranca">
        <figure class="icono svg">
        	<i class="aczfont aczicon-zonafranca "></i>
        </figure>
        <h4 class="titulo">
        	<?php the_field('seccion_servicio03', 3); ?>  
        </h4>
        <a href="zona-franca.html" class="enlace">LEER MÁS</a>
      </article><!--
      --><article class="servicio proyectos">
        <figure class="icono svg">
        	<i class="aczfont aczicon-proyectos"></i>
        </figure>
        <h4 class="titulo">        	
        	<?php the_field('seccion_servicio04', 3); ?>  
        </h4>
        <a href="proyectos-especiales.html" class="enlace">LEER MÁS</a>
      </article>
    </section><!--FIN SECCION SERVICIOS-->

<!--=================================
	* NUESTRO EQUIPO DE TRABAJO 
=================================-->
    <?php

      query_posts( array

      ( 
        'post_type' => 'pop_ups',
        'showposts' => 1,
        'order'    => 'ASC'
       ));

     ?>
    <?php if(have_posts()): while (have_posts()) : the_post(); ?>    

      <section class="seccion equipo">
        <h4 class="titulo">
          <?php echo the_field('popup_titulo', 3); ?>
        </h4>
        <figure class="imagen">
          <style>
            .equipo .imagen {
              background-image: url('<?php echo the_field('popup_img01_big', 3); ?>');
             }
             @media (max-width: 720px) {
              .equipo .imagen {
                background-image: url('<?php echo the_field('popup_img01_tiny', 3); ?>');
               }              
             }
          </style>
        </figure>
        <article class="articulo">
          <?php echo the_field('popup_texto01', 3); ?>      
        </article>    
        <button class="enlace boton modal equipo">
          CONOCE NUESTRO EQUIPO DE TRABAJO
        </button> 
      </section><!--FIN SECCION EQUIPO-->

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>

<!--=================================
* NUESTRO EQUIPO
=================================-->
    <section class="seccion equipo">
      <h4 class="titulo">
        NUESTRO EQUIPO DE TRABAJO.
      </h4>
      <figure class="imagen">
      </figure>
      <article class="articulo">
        <p class="parrafo">
          En <strong>AirCarrier</strong> somos conscientes que el capital humano es uno de los principales factores de éxito en la prestación de nuestros servicios, por lo que es una de nuestras principales prioridades, dentro de nuestra planeación estratégica. 
        </p>
        <p class="parrafo">
          Contamos con un equipo de trabajo altamente competente, con los conocimientos, habilidades y la experiencia requerida para el logro de nuestro propósito común: <b>un cliente satisfecho</b>.
        </p>
        <p class="parrafo">
          Las personas que integran nuestro equipo de trabajo se destacan por sus valores de integridad, honestidad, sentido de pertenencia y respeto, los cuales reflejan la filosofía de nuestra organización.
        </p>       
      </article>    
      <button class="enlace boton modal equipo">
        CONOCE NUESTRO EQUIPO DE TRABAJO
      </button> 
    </section><!--FIN SECCION EQUIPO-->

<!--=================================
	* NUESTRAS VENTAJAS
=================================-->
    <section class="seccion ventajas">
      <h3 class="titulo principal">
        <span>NUESTRA</span> 
        <b>VENTAJA COMPETITIVA</b>
      </h3>
      <p class="parrafo">
        Personalizamos nuestros servicios de acuerdo a los requisitos de nuestros clientes y sus preferencias en cuanto al manejo y gestión de su operación logística.
      </p>
      <article class="articulo ventaja logistica">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <strong>LOGÍSTICA</strong>
          <span>DE TRANSPORTE INTERNACIONAL Y OTM</span>
        </h4>
        <ul class="listado vertical">
          <li class="item">
            Comunicación directa con el proveedor del cliente en origen.
          </li>
          <li class="item">
            Constante seguimiento y retroalimentación al cliente, acerca del  estado de su Operación Logística.
          </li>
        </ul>
      </article>
      <article class="articulo ventaja comercio">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <span>OPERACIONES DE</span>
          <strong>COMERCIO EXTERIOR</strong>
        </h4>
        <ul class="listado vertical">
          <li class="item">
            Clasificación Arancelaria sin costo adicional para el cliente. (cuando se requiera)
          </li>
          <li class="item">
            Constante seguimiento y retroalimentación al cliente, acerca del estado de su Operación de Comercio Exterior.
          </li>
          <li class="item">
            Agilidad y precisión en el reconocimiento previo de mercancía.
          </li>
        </ul>
      </article>
      <article class="articulo ventaja bodega">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <span>SERVICIO</span>
          <strong>LOGÍSTICO EN BODEGA</strong>
        </h4>
        <p class="parrafo">
          Al ostentar la calificación de Usuario Industrial de bienes y Servicios de la Zona Franca de Bogotá, contamos con las siguientes ventajas  para nuestros clientes:
        </p>
        <ul class="listado vertical">
          <li class="item">
            El periodo de gestión logística de mercancías en zona franca es ilimitado.
          </li>
          <li class="item">
            Posibilidad de desarrollar Operaciones de Reexpedición.
          </li>
          <li class="item">
            Óptimos tiempos de nacionalización.
          </li>
          <li class="item">
            Nacionalizaciones parciales o totales.
          </li>
          <li class="item">
            Posibilidad de realizar procesamientos parciales, fuera de la Zona Franca hasta por 9 meses.
          </li>
          <li class="item">
            Cumplimiento de compromiso de exportación – Plan Vallejo.
          </li>
          <li class="item">
            Recepción y gestión logística de exportaciones.
          </li>
          <li class="item">
            Desarrollo de operaciones de empaque, reempaque, envase, etiquetado o clasificación de mercancías.
          </li>
          <li class="item">
            Seguridad perimetral y controles de acceso, dispuestos por la Zona Franca 24 horas, los 365 días del año.
          </li>
          <li class="item">
            Libertad cambiaria
          </li>
          <li class="item">
            Horarios de servicio competitivos – 24 /7
          </li>
        </ul>
      </article>
    </section><!--FIN SECCION VENTAJAS-->

<!--=================================
	* MAPA
=================================-->
    <section class="seccion ubicacion">
      <div class="contenedor mapa">
        <iframe 
	        class="embebido" 
	        src="<?php the_field('seccion_mapa_url', 3); ?>" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
        <h3 class="titulo">
          <?php the_field('seccion_mapa_titulo', 3); ?>
        </h3>
      </div>
    </section>
  </main><!--INICIO-->

<?php get_footer(); ?>
