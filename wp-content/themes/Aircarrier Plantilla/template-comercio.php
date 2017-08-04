<?php
/* Template Name: Comercio Exterior */
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

  		<figure class="img-container">
  			<img class="logo bspsa" 
  				src="<?php the_field('imagen_comercio_izq'); ?>" 
  				alt="Agencia de Aduanas Nivel 1, BSP S.A." />
  		</figure>
  		<div class="grupo">
  			<?php the_field('contenido_comercio'); ?>			
  		</div>

<!--=================================
* BOTONES POP UP
=================================-->      

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
