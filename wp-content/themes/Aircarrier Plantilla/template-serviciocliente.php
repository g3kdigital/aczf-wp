<?php
/* Template Name: Servicio al Cliente */
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

      <section class="introduccion">
        <div class="parrafos">
    		<?php the_field('parrafo_1'); ?>
        </div>
	    <a 
	    	href="<?php the_field('url_link_inventario',42); ?>" 
	    	class="enlace externo inventario icono" 
	    	target="_blank">        	
	  		<?php the_field('texto_link_inventario', 42); ?>
	    </a>
      </section>
      <form class="formulario servicio-cliente" action="https://docs.google.com/forms/d/e/1FAIpQLSdI0Gj2eHkoLT1n3LcgpG98tBcYG_0TkOtqkmqQQRLs-ZiM-A/formResponse" method="POST" id="ss-form" target="_blank" onsubmit="ss-submit">
                
        <div class="pregunta radiobtn">
          <label class="etiqueta">TIPO DE SOLICITUD</label>
          <label class="etiqueta respuesta" for="group_1393340046_1">
            <input type="radio" name="entry.1393340046" value="AGRADECIMIENTOS" id="group_1393340046_1" class="entrada radio" required="">
            <span class="texto">AGRADECIMIENTOS</span>
          </label>
          <label class="etiqueta respuesta" for="group_1393340046_2">
            <input type="radio" name="entry.1393340046" value="FELICITACIONES" id="group_1393340046_2" class="entrada radio" required="">
            <span class="texto">FELICITACIONES</span>
          </label>
          <label class="etiqueta respuesta" for="group_1393340046_3">
            <input type="radio" name="entry.1393340046" value="QUEJA" id="group_1393340046_3" class="entrada radio" required="">
            <span class="texto">QUEJA</span>
          </label>
          <label class="etiqueta respuesta" for="group_1393340046_4">
            <input type="radio" name="entry.1393340046" value="PETICIÓN" id="group_1393340046_4" class="entrada radio" required="">
            <span class="texto">PETICIÓN</span>
          </label>
          <label class="etiqueta respuesta" for="group_1393340046_5">
            <input type="radio" name="entry.1393340046" value="RECLAMO" id="group_1393340046_5" class="entrada radio" required="">
            <span class="texto">RECLAMO</span>
          </label>
          <label class="etiqueta respuesta" for="group_1393340046_6">
            <input type="radio" name="entry.1393340046" value="SUGERENCIA" id="group_1393340046_6" class="entrada radio" required="">
            <span class="texto">SUGERENCIA</span>
          </label>
        </div>
        
        <div class="pregunta texto fecha">
          <label class="etiqueta" for="entry_2018692801">FECHA</label>
          <input type="date" name="entry.2018692801" value="" class="entrada"  id="entry_2018692801" required="" placeholder="dd/mm/aa">
        </div>
        
        <div class="pregunta texto">
          <label class="etiqueta" for="entry_1433436413">EMPRESA</label>
          <input type="text" name="entry.1433436413" value="" class="entrada" id="entry_1433436413" dir="auto" placeholder="Empresa" required="" title="">
        </div>
        <div class="pregunta texto">
          <label class="etiqueta" for="entry_827911522">NOMBRE</label>
          <input type="text" name="entry.827911522" value="" class="entrada" id="entry_827911522" dir="auto" placeholder="Nombre" required="" title="">
        </div>
        <div class="pregunta texto">
          <label class="etiqueta" for="entry_1120538749">CARGO</label>
          <input type="text" name="entry.1120538749" value="" class="entrada" id="entry_1120538749" dir="auto" placeholder="Gerente / Coordinador / etc" required="" title="">
        </div>
        <div class="pregunta texto">
          <label class="etiqueta" for="entry_1924375287">EMAIL</label>
          <input type="email" name="entry.1924375287" value="" class="entrada" id="entry_1924375287" dir="auto" placeholder="nombre@empresa.com" required="" title="Debe ser una dirección de correo electrónico válida">
        </div>
        <div class="pregunta texto">
          <label class="etiqueta" for="entry_463658581">TELÉFONO O CEULAR</label>
          <input type="number" name="entry.463658581" value="" class="entrada" id="entry_463658581" dir="auto" placeholder="(+ Pais) (Operador) (000 0000) " required="" step="any" title="Debe ser un número" aria-invalid="true">
        </div>
        <div class="pregunta parrafo">
          <label class="etiqueta" for="entry_463658581">DESCRIBA SU SOLICITUD</label>
          <textarea name="entry.1952805496" rows="8" cols="0" class="entrada" id="entry_1952805496" dir="auto" placeholder="Mensaje" required=""></textarea>
        </div>
            
        <div class="pregunta checkbox">  
          <input class="ckeck" type="checkbox" name="entry.729567173" value="Acepto la Política de Tratamiento y Protección de datos." id="group_729567173_1" required>
          <label class="etiqueta" for="group_729567173_1">
            Acepto la 
            <span class="trigger-politica" title="Clic para leer nuestra Política">
              Política de Tratamiento y Protección de Datos Personales
            </span class="trigger-politica">
          </label>
        </div>
        
		<button name="submit" value="Enviar" id="ss-submit" class="boton enviar">ENVIAR</button>
        
      </form>
      
      <section class="encuesta">
        <a href="<?php the_field('url_btn_encuesta'); ?>" class="btn blanco" target="_blank"><?php the_field('texto_btn_encuesta'); ?></a>
        <figure class="img-background atencion-al-cliente"></figure>
      </section>

<!--=================================
* BOTONES POP UP
=================================-->

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
