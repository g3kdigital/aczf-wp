<?php
/* Template Name: Proyectos Especiales */ 
?>

<!--=================================
  INDICE
  ===================================
	* PORTADA 
	* CONTENIDO
	* BOTONES POP UP
-->

<?php get_header(); ?>
<main id="proyectos-especiales" class="contenido pagina <?php the_field('pagina_cssclass')?>">
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

		<h5 class="titulo">
			Gestión en Logística Integral y apoyo a Ventas Locales 	
		</h5>	
  		<?php the_field('parrafo_1'); ?>
		<h5 class="titulo">
			VENTA DE CONTENEDORES 	
		</h5>
  		<?php the_field('parrafo_2'); ?>
	    <a 
	    	href="<?php the_field('url_link_inventario',42); ?>" 
	    	class="enlace externo inventario icono" 
	    	target="_blank">        	
	  		<?php the_field('texto_link_inventario', 42); ?>
	    </a>

<!--=================================
* BOTONES POP UP
=================================-->      

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
