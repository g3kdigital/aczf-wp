<?php wp_footer(); ?>  

  <footer class="piepagina" id="contacto">
    <section class="form-plugin">
      <h3 class="titulo principal">CONTÁCTENOS</h3>
      <p class="parrafo">
        Estamos atentos a sus necesidades y demás requerimientos de su empresa, por favor diligencie el siguiente formulario y nos pondremos en contacto con usted, en la mayor brevedad.
      </p>
      <form class="formulario contacto" action="https://docs.google.com/forms/d/e/1FAIpQLSf-D3X7IGva-4td3glxpEB6QjHVnxj2JDN1NPGSYY5-jkFCBA/formResponse" method="POST" target="_blank" onsubmit="">
        <div class="pregunta texto">                  
          <input class="entrada" type="text" name="entry.1730010781" value="" id="entry_1730010781" required="" placeholder="Escriba aquí su EMPRESA">
          <label class="etiqueta" for="entry_1730010781">EMPRESA</label>
        </div>
        <div class="pregunta texto">          
          <input class="entrada" type="text" name="entry.1409352923" value="" id="entry_1409352923" required="" placeholder="Escriba aquí su NOMBRE">
          <label class="etiqueta" for="entry_1409352923">NOMBRE</label>
        </div>
        <div class="pregunta texto">          
          <input class="entrada" type="text" name="entry.1467596100" value="" id="entry_1467596100" required="" placeholder="Escriba aquí su CARGO">
          <label class="etiqueta" for="entry_1467596100">CARGO</label>
        </div>
        <div class="pregunta texto">          
          <input class="entrada" type="text" name="entry.536728232" value="" id="entry_536728232" required="" placeholder="Escriba aquí su DIRECCIÓN">
          <label class="etiqueta" for="entry_536728232">DIRECCIÓN</label>
        </div>
        <div class="pregunta texto">          
          <input class="entrada" type="number" name="entry.1235083279" value="" id="entry_1235083279" required="" step="any" placeholder="Escriba a quí su NIT" >
          <label class="etiqueta" for="entry_1235083279">NIT</label>        
        </div>
        <div class="pregunta texto">          
          <input class="entrada" type="email" name="entry.297077947" value="" id="entry_297077947" required="" placeholder="Escriba a quí su EMAIL" >           
          <label class="etiqueta" for="entry_297077947">EMAIL</label>
        </div>
        <article class="grupo-fila">
          <div class="pregunta texto">          
            <input class="entrada" type="number" name="entry.68465605" value="" id="entry_68465605" required="" step="1" placeholder="Escriba a quí su TÉLEFONO" >      
            <label class="etiqueta" for="entry_68465605">TÉLEFONO</label>
          </div>
          <div class="pregunta texto">          
            <input class="entrada" type="number" name="entry.900829928" value="" id="entry_900829928" required="" step="1" placeholder="Escriba a quí su CELULAR" >      
            <label class="etiqueta" for="entry_900829928">CELULAR</label>
          </div>
        </article>  
            
        <div class="pregunta checkbox">  
          <input type="checkbox" name="entry.1165625552" value="Si, acepto la Política de Tratamiento y Protección de Datos Personales" id="group_1165625552_1" required>
          <label class="etiqueta" for="group_1165625552_1">Acepto la 
            <span class="trigger-politica" title="Clic para leer nuestra Política">Política de Tratamiento y Protección de Datos Personales</span class="trigger-politica">
          </label>
        </div>
        
        <div class="pregunta parrafo">          
          <textarea class="entrada" name="entry.1592366459" id="entry_1592366459" required="" placeholder="Escriba a quí su REQUERIMIENTO" ></textarea>            
          <label class="etiqueta" for="entry_1592366459">DESCRIBA SU REQUERIMIENTO</label>
          <button name="submit" value="Enviar" id="ss-submit" class="boton enviar">ENVIAR</button>
        </div>          
      </form>
      <article class="divisas">
        <div id='gcw_mainFOWxbzZ8g' class='gcw_mainFOWxbzZ8g plugin'></div>
        <a href="http://www.banrep.org/es/trm"class="enlace trm" target="_blank">Link TRM</a>
      </article>
    </section>    

    <!-- Menú Dinamico (Menu Inferior) Wordpress -->  
    <section class="otros-links">
      <div class="grupo">
        <h5 class="titulo">
          ENLACES DE INTERÉS
        </h5>
        <?php
            $args = array(
              'theme_location'  => 'menu_bottom',
              'container'       => 'ul',
              'menu_class'      => 'otros-enlaces ',
              );
            wp_nav_menu( $args );
        ?>  
      </div>
      <div class="grupo">
        <h5 class="titulo">
          DATOS DE CONTACTO
        </h5>
        <p class="otros-enlaces">
          <span class="enlace">
            Dirección: Cra 106 No. 15ª- 25 – Bodega 93
          </span><span class="enlace">
            Manzana 14 - Zona Franca Bogotá
          </span><span class="enlace">
            PBX: 57 1 4 924830
          </span>
        </p>  
      </div>
    </section>
  </footer>

  <?php get_template_part('template/ventanas_emergentes'); ?>  

</div>  <!--contenedor principal-->
  
 
<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,600,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://aircarrierzf.com.co/aircarriericon/g3k-aircarrierzfont.css">
<script src="https://aircarrierzf.com.co/js/codigo.js"></script>



 </body></html>

