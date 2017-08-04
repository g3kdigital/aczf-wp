<?php
/* Template Name: Logistica de transporte */
?>

<!--=================================
  INDICE
  ===================================
	* PORTADA 
	* CONTENIDO
	* BOTONES POP UP
-->

<?php get_header(); ?>
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

		<section class="grupos">
			<figure class="img-container aire">
			  <img class="imagen" 
			  	src="<?php the_field('imagen_logistica_aire'); ?>" 
			  	alt="<?php the_field('txtimg_logistica_aire'); ?>" />
			</figure>
			<figure class="img-container tierra">
			  <img class="imagen" 
			  	src="<?php the_field('imagen_logistica_tierra'); ?>" 
			  	alt="<?php the_field('txtimg_logistica_tierra'); ?>" />
			</figure>
			<div class="grupo">
			  <h5 class="titulo">
			    <?php the_field('titulo_arriba_izq'); ?>
			  </h5>
			  <p class="parrafo">
			    <?php the_field('texto_arriba_izq'); ?>
			  </p>
			</div>
			<div class="grupo">
			  <h5 class="titulo">
			    <?php the_field('titulo_arriba_der'); ?>
			  </h5>
			  <p class="parrafo">
			    <?php the_field('texto_arriba_der'); ?>
			  </p>
			</div>
			<div class="grupo">
			  <h5 class="titulo">
			    <?php the_field('titulo_abajo_izq'); ?>
			  </h5>
			  <p class="parrafo">
			    <?php the_field('texto_abajo_izq'); ?>
			  </p>
			</div>
		</section>

<!--=================================
* BOTONES POP UP
=================================-->

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
