<?php get_header(); ?>
<!--=================================
  INDICE
  ===================================
	* PORTADA 
	* CONTENIDO
	* BOTONES POP UP
-->

<main id="comercio-exterior" class="contenido pagina <?php the_field('pagina_cssclass')?>">
<!--=================================
* PORTADA 
=================================--> 
	<h1 class="cover">
      <strong class="titulo">
      	<?php the_title()?>
      </strong>
      <span class="icono"></span>
    </h1><!--FIN COVER-->

<!--=================================
* CONTENIDO
=================================--> 
    <article class="articulo">

		

<!--=================================
* BOTONES POP UP
=================================-->
      <section class="botones">
        <a href="cotice-servicios.html" class="boton popup cotiza">
          COTICE SERVICIOS
        </a>
        <a href="http://181.143.150.243/Consultas" class="boton externo inventario" target="_blank">
          CONSULTE SU INVENTARIO
        </a>  
        <button class="boton popup  equipo">
          NUESTRO EQUIPO
        </button>
        <button class="boton popup  ventajas">
          NUESTRA VENTAJA COMPETITIVA
        </button>
        <button class="boton popup  consejos">
          CONSEJOS DE SEGURIDAD PARA SU CARGA
        </button>
      </section><!--FIN MENU BOTONES-->

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
