<?php
/* Template Name: Zona Franca */
?>

<!--=================================
  INDICE
  ===================================
	* PORTADA 
	* CONTENIDO
	* BOTONES POP UP
-->

<?php get_header(); ?>
<main id="zona-franca" class="contenido pagina <?php the_field('pagina_cssclass')?>">
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

      <div class="grupo">
        <h5 class="titulo">
          <?php the_field('titulo_arriba_izq'); ?>
        </h5>
        <p class="parrafo">
          <?php the_field('texto_arriba_izq'); ?>          
        </p>
        <a 
        	href="<?php the_field('url_link_inventario',42); ?>" 
        	class="enlace externo inventario icono" 
        	target="_blank">        	
      		<?php the_field('texto_link_inventario', 42); ?>
        </a>
        <figure class="img-background bodega zf8">   
			<style>
			.img-background.bodega.zf8{background-image: url('<?php the_field('url_imgbodega_01'); ?>')}		
			</style>       
        </figure>
      </div>
      <div class="grupo">
        <section class="galeria">
          <figure class="img-background bodega zf3"> 
			<style>
				.img-background.bodega.zf3{background-image: url('<?php the_field('url_imgbodega_02'); ?>')}
			</style>        
          </figure>
          <figure class="img-background bodega zf0">
        	<style>
        	.img-background.bodega.zf0{background-image: url('<?php the_field('url_imgbodega_03'); ?>')}
        	</style>          
          </figure>
        </section>
        <h5 class="titulo">
          <?php the_field('titulo_abajo_der'); ?>
        </h5>
        <?php the_field('listado_abajo_der'); ?>    
      </div>

<!--=================================
* BOTONES POP UP
=================================-->

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
