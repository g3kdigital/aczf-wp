<?php
/* Template Name: Cotizar Servicios */
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

		<p class="parrafo">
			<?php the_field('parrafo_1'); ?>
        	Seleccione el servicio que desea cotizar
		</p>
      
		<section class="contenedor-formularios">

			<div class="grupo-form seleccionar formularios">
			  <button class="seleccion formulario comercio">
			    <figure class="img-background"><span class="icon-fa">
			      <svg class="svg-img icono-comercio" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.5 103.501">
			        <path fill="#0058A8" d="M37.8 27.68c4.25-2.5 8.9-3.73 13.95-3.73 5.04 0 9.7 1.24 13.96 3.73 4.3 2.48 7.7 5.86 10.2 10.12 2.5 4.26 3.8 8.9 3.8 13.95 0 5.05-1.2 9.7-3.7 13.96-2.6 4.3-6 7.7-10.2 10.2-4.2 2.5-8.9 3.8-13.9 3.8S42.2 78.5 38 76s-7.63-5.8-10.1-10.1c-2.5-4.3-3.72-8.9-3.72-14 0-5 1.25-9.7 3.74-13.92 2.47-4.26 5.85-7.63 10.1-10.1zM61.67 42.8c-.05.03-.16.15-.35.36-.18.2-.34.3-.48.34.04 0 .1-.06.16-.18l.18-.4c.06-.14.1-.23.13-.25.2-.17.5-.35.8-.55.4-.14 1-.3 1.9-.43.8-.2 1.5-.1 1.9.4 0-.1.1-.3.4-.5.3-.3.5-.4.5-.5.1-.1.3-.1.6-.2s.5-.2.6-.3l.1-.8c-.3 0-.5-.1-.6-.3-.1-.2-.2-.5-.2-.8 0 0-.1.1-.2.3 0-.2 0-.3-.1-.3-.1-.1-.2 0-.4 0h-.3c-.2-.1-.4-.2-.5-.3-.1-.1-.2-.3-.3-.6l-.1-.6c0-.2-.2-.3-.3-.4-.2-.2-.3-.3-.3-.4l-.1-.2-.1-.3c-.1-.1-.1-.2-.2-.2 0-.1-.1-.1-.2-.1s-.1 0-.2.2l-.3.3c-.1.1-.1.2-.1.2 0-.1-.1-.1-.2-.1H63l-.2.1-.1.1c-.05.1-.2.1-.3.1l-.3.1c.4-.1.37-.3 0-.4-.28-.1-.47-.1-.6-.1.2-.1.3-.3.25-.5-.06-.2-.16-.4-.3-.5h.2c0-.1-.1-.2-.3-.3l-.6-.3c-.3-.1-.4-.2-.5-.2-.2-.1-.6-.2-1.26-.3-.6-.1-1-.1-1.2 0-.1.1-.2.2-.2.3 0 .1.1.3.2.5s.1.4.1.4c0 .1-.1.3-.2.5-.2.1-.2.3-.2.4 0 .2.1.4.5.6.3.2.4.4.3.7 0 .2-.2.4-.6.6-.3.2-.5.4-.6.5-.1.1-.1.4-.1.6.1.3.2.5.4.6v.1l-.2.1-.2.2c-.1.1-.1.1-.2.1l-.1.1c-.3.1-.6.1-.8-.2-.3-.3-.4-.6-.5-.9-.2-.6-.4-1-.6-1.1-.6-.2-.9-.2-1.1 0-.1-.3-.6-.6-1.5-.9-.6-.2-1.3-.3-2.1-.1.1 0 .1-.2 0-.5-.2-.4-.4-.5-.7-.5 0-.2.1-.4.1-.7v-.5c0-.3.2-.6.4-.8l.2-.3.3-.5c.1-.2.1-.2 0-.2.8.1 1.4-.1 1.8-.4.1-.2.3-.4.4-.7.2-.3.3-.5.4-.6.2-.2.4-.2.5-.2.1 0 .3.1.5.2s.4.2.5.2c.3 0 .5-.1.5-.4 0-.3-.1-.5-.3-.7.3 0 .3-.2.1-.6-.1-.2-.2-.3-.3-.4-.3-.1-.6-.1-1 .1-.2.1-.2.2.1.3-.1 0-.2.1-.4.4-.2.3-.4.5-.6.6-.2.1-.4 0-.6-.2-.1-.1-.1-.2-.2-.5s-.3-.5-.4-.5c-.2 0-.4.2-.6.5 0-.2-.1-.3-.4-.5-.4-.2-.7-.3-.9-.3.4-.3.3-.6-.3-1-.2-.1-.4-.1-.8-.2-.4 0-.6 0-.7.1-.2.2-.2.3-.2.4-.1.1 0 .2.1.3l.4.2.4.2.3.1c.3.2.4.4.3.5l-.3.1-.5.2c-.2 0-.2.1-.2.1-.1.1-.1.3 0 .5 0 .2 0 .4-.1.5-.2-.1-.3-.3-.4-.6-.1-.3-.2-.5-.3-.6.2.2-.1.3-.9.2h-1.1c-.2 0-.4-.1-.5-.3-.1-.2-.1-.4 0-.7 0-.1.1-.1.1 0l-.4-.4-.35-.3c-1.1.3-2.2.8-3.4 1.5.1 0 .3 0 .4-.1l.5-.2.4-.2c.8-.3 1.4-.4 1.5-.2l.2-.2.7.9c-.1-.1-.5-.1-1.1 0-.4.1-.7.3-.8.4.2.3.3.5.2.6l-.4-.4c-.1-.2-.3-.3-.5-.4-.1-.1-.3-.2-.5-.2h-.8c-3.5 1.9-6.4 4.6-8.5 8 .2.1.3.2.4.3.1 0 .2.1.2.3l.1.4s.2 0 .4-.1c.2.2.3.4.1.7 0-.1.6.3 1.6.9.5.4.7.7.8.8.1.2 0 .5-.4.6 0-.1-.1-.2-.3-.4-.2-.2-.3-.2-.3-.1-.1.1-.1.3 0 .6s.2.4.4.4c-.2 0-.3.2-.3.6-.1.4-.1.8-.1 1.3v.8h.1c-.1.3 0 .7.2 1.2s.5.8.8.7c-.3.1 0 .6.8 1.6l.3.3.5.3.6.4c.2.1.3.2.4.3.1.1.2.4.4.8.1.4.3.7.5.8 0 .1.1.4.4.7.3.3.4.6.4.8l-.1.02-.1.1c.1.2.3.4.6.5.3.2.5.4.6.5v.4c0 .2.1.3.1.4.1.1.2.1.3.1.1-.5-.2-1.2-.9-2.3L40 52l-.2-.6c0-.3-.1-.5-.1-.6 0 0 .1 0 .2.1.1 0 .2 0 .3.1l.3.1s.1.1 0 .1c-.1.2 0 .4.1.6.1.2.2.5.4.7l.6.7.4.5c.1.1.3.4.5.7.2.3.2.5 0 .5.2 0 .4.1.7.3.24.2.44.44.6.7.1.2.2.5.3.9.03.4.1.7.14.8.06.2.16.4.3.5.2.2.3.3.5.4l.6.3c.2.1.4.2.4.25l.7.4c.3.2.6.4.8.4.25.1.44.2.6.2.15 0 .33 0 .53-.1.2 0 .4-.1.5-.1.3-.1.7.1 1 .5.3.4.6.7.8.8.9.5 1.5.6 2 .4-.1 0-.1.1 0 .3l.3.6.3.5.2.3c.1.2.3.4.6.6.3.3.5.4.68.6.18-.1.2-.2.3-.36-.1.2 0 .4.27.7.3.3.5.4.7.4.4-.1.5-.5.5-1.2-.7.3-1.3.1-1.7-.7 0 0 0-.1-.1-.2l-.15-.3-.1-.3c.1-.1.1-.1.2-.1.2 0 .4-.1.4-.2.05-.1 0-.3-.05-.5l-.2-.5c0-.2-.1-.4-.4-.7l-.5-.5c-.1.2-.3.3-.6.3-.2 0-.4-.1-.6-.3v.2l-.1.2H52l.1-.6c0-.4.04-.7.1-.8 0-.1.04-.3.2-.5l.2-.5c0-.2.1-.3.1-.5.07-.1 0-.3-.12-.3s-.35-.1-.6-.1c-.5 0-.8.3-.97.7l-.1.3c0 .2-.1.3-.2.4 0 .1-.1.1-.3.2-.1 0-.4.1-.8 0s-.7-.1-.9-.2c-.3-.2-.6-.6-.8-1.1-.2-.5-.3-1-.3-1.4 0-.3.1-.6.1-1 .1-.4.1-.7.1-.9 0-.2 0-.5-.2-.9.1 0 .2-.1.4-.3.1-.2.3-.3.4-.4h.4c.1 0 .1 0 .2-.1s.1-.1.1-.2l-.1-.1c0-.1-.1-.1-.1-.1.2.1.5.1 1.1-.1.5-.1.9-.1 1 .1.4.3.6.2.8-.1l-.1-.38c0-.2-.1-.35 0-.5.2.7.5.8 1.1.36.1.1.3.1.6.2.3 0 .5.1.6.2 0 .1.1.1.2.2l.2.2h.2c.1 0 .2-.1.3-.2.3.3.4.6.5.8.3.9.5 1.5.7 1.6.1 0 .3.1.4 0 .1 0 .1-.1.1-.3v.1c0-.1 0-.3-.1-.45v-1.2c-.4 0-.6-.2-.7-.4-.1-.2-.1-.4 0-.65.2-.2.3-.4.6-.7l.3-.1.6-.2c.2-.1.4-.2.5-.3.5-.4.7-.9.6-1.2.2 0 .3-.1.4-.3 0 0-.1 0-.2-.1H58l-.14-.02c.2-.1.23-.3.1-.6.1-.1.2-.2.23-.4s.1-.3.2-.37c.2.3.4.3.7.1.1-.2.2-.4 0-.6.1-.2.4-.3.7-.4s.6-.2.7-.3c.2 0 .3 0 .3-.1v-.4c0-.2 0-.3.1-.4.1-.1.3-.2.5-.3l.4-.1.6-.4c.1-.1.1-.1 0-.1.4.1.8-.1 1.1-.4.2-.2.2-.5-.2-.7.1-.1 0-.3-.1-.3-.2-.1-.3-.1-.6-.2h.8c.3-.2.3-.4-.3-.6-.4-.1-.9.1-1.6.5zm-5.9 31.76c4.97-.87 9.2-3.15 12.7-6.84-.07-.07-.22-.13-.45-.17-.23-.03-.38-.07-.45-.12-.43-.17-.72-.27-.87-.3.03-.16 0-.32-.1-.46-.07-.15-.17-.26-.28-.33l-.45-.3c-.2-.1-.33-.2-.4-.24l-.25-.22-.26-.2c-.04-.04-.13-.1-.27-.16-.2-.07-.3-.1-.3-.07-.1.02-.2.03-.4.03l-.1.04c-.1.02-.2.05-.2.1l-.2.1c-.1.03-.1.07-.2.1v.1c-.5-.4-1-.68-1.3-.8-.1-.02-.3-.1-.4-.2s-.3-.2-.4-.25c-.1-.06-.3-.08-.4-.06l-.4.3c-.1.1-.2.3-.2.6l-.1.5c-.2-.1-.2-.3 0-.6s.2-.5 0-.6c-.1-.1-.2-.2-.4-.1s-.3.1-.4.2l-.4.3-.3.3-.3.2c-.2.1-.3.2-.3.3-.1.1-.2.3-.3.4l-.2.4c-.1-.1-.2-.2-.4-.2-.3 0-.4-.1-.4-.2 0 .3.1.7.1 1.3 0 .6.1 1.1.2 1.4.1.8 0 1.3-.5 1.7-.7.6-1 1.1-1.1 1.5-.1.5 0 .8.4.9 0 .2-.1.4-.3.8-.2.4-.3.6-.3.8v.6z"/>
			      </svg>
			      </span>
			    </figure>
			    <h6 class="titulo">COMERCIO <br /> EXTERIOR</h6>
			    <label for="" class="btn">COTIZAR</label>
			  </button>
			  <button class="seleccion formulario logistica">
			    <figure class="img-background">
			      <span class="icon-fa">                
			        <svg class="svg-img icono-logistica" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 105 105">
			          <path fill="#00B7ED" d="M67.22 9.24c.77.9.87 2.18.3 3.85-.54 1.6-1.47 3.1-2.8 4.4l-4.18 4.2 4.16 18.1c.1.3-.02.6-.3.8l-3.34 2.5c-.12.1-.3.1-.5.1-.06 0-.13 0-.18-.1-.26-.07-.44-.2-.54-.44l-7.26-13.2-6.73 6.74 1.38 5.05c.08.24 0 .5-.2.8l-2.5 2.5c-.16.1-.37.2-.6.2h-.06c-.26-.05-.47-.17-.62-.36L38.33 38l-6.55-4.92c-.2-.1-.3-.3-.34-.6-.02-.23.06-.44.23-.65l2.5-2.53c.16-.14.36-.22.6-.22.1 0 .17.03.2.05l5.05 1.4 6.73-6.73-13.2-7.26c-.25-.13-.4-.34-.45-.6-.03-.3.05-.5.24-.7l3.32-3.3c.25-.25.5-.3.8-.2l17.28 4.1 4.16-4.16c1.32-1.3 2.8-2.25 4.47-2.8 1.67-.56 2.95-.46 3.85.3z"/>
			          <defs>
			            <circle id="a" cx="52.5" cy="52.5" r="50.25"/>
			          </defs>
			          <clipPath id="b">
			            <use xlink:href="#a" overflow="visible"/>
			          </clipPath>
			          <path clip-path="url(#b)" fill="#00B7ED" d="M27.26 95.8c-.4.42-.88.62-1.44.62-.56 0-1.04-.2-1.44-.6l-4.1-4.1 2.88-2.9 2.66 2.63 2.67-2.63c.4-.4.8-.6 1.4-.6s1 .2 1.4.6l2.7 2.63 2-2.05V80l-6.7-10.06c-.4-.56-.5-1.16-.3-1.82.2-.65.6-1.08 1.3-1.3l5.7-1.85v-9.6h4.1v-4.1h8.2v-4.1h8.2v4.1h8.2v4.1h4.1v9.6l5.7 1.85c.6.22 1 .65 1.2 1.3.2.66.14 1.26-.23 1.82L68.92 80v9.4l.6-.58c.4-.4.9-.6 1.45-.6.56 0 1.04.2 1.44.6l2.7 2.63 2.7-2.63c.4-.4.9-.6 1.5-.6s1.1.2 1.5.6l4.1 4.1-2.9 2.9-2.64-2.67-2.7 2.66c-.4.5-.86.7-1.43.7-.6 0-1.05-.2-1.44-.6L71 93.2l-2.66 2.65c-.4.42-.88.62-1.43.62-.5 0-1-.2-1.4-.6l-2.7-2.67-2.6 2.65c-.4.42-.9.62-1.4.62-.55 0-1.03-.2-1.43-.6l-2.7-2.67L52 95.85c-.4.42-.9.62-1.46.62-.56 0-1.04-.2-1.44-.6l-2.7-2.67-2.66 2.65c-.4.42-.9.62-1.46.62-.55 0-1.03-.2-1.44-.6L38.2 93.2l-2.67 2.66c-.4.42-.9.62-1.47.62-.56 0-1.04-.2-1.45-.6l-2.7-2.68-2.6 2.68zm50.48 1.23c.4-.4.9-.6 1.44-.6.56 0 1.04.2 1.44.6l4.1 4.1-2.88 2.9-2.66-2.67-2.66 2.66c-.4.4-.87.6-1.44.6-.58 0-1.06-.2-1.44-.6l-2.67-2.66-2.66 2.66c-.4.4-.8.6-1.4.6-.5 0-1-.2-1.4-.6l-2.6-2.66-2.6 2.66c-.4.4-.84.6-1.4.6-.6 0-1.06-.2-1.46-.6l-2.66-2.66-2.65 2.66c-.4.4-.9.6-1.4.6-.55 0-1.03-.2-1.44-.6l-2.6-2.66-2.67 2.66c-.4.4-.9.6-1.44.6-.56 0-1.04-.2-1.45-.6l-2.6-2.66-2.68 2.66c-.4.4-.9.6-1.43.6-.6 0-1.05-.2-1.46-.6l-2.7-2.66-2.67 2.66c-.4.4-.9.6-1.43.6-.54 0-1-.2-1.4-.6l-4.15-4.1 2.9-2.9L26 99.7l2.6-2.7c.4-.4.86-.6 1.4-.6s1.06.2 1.46.6l2.6 2.6 2.7-2.6c.4-.4.9-.6 1.44-.6.56 0 1.04.2 1.44.6l2.68 2.63L44.9 97c.4-.4.9-.6 1.44-.6.56 0 1.04.2 1.44.6l2.65 2.66L53.1 97c.4-.4.88-.6 1.44-.6.55 0 1.03.2 1.44.6l2.66 2.65 2.66-2.67c.4-.4.9-.6 1.45-.6.55 0 1.03.2 1.44.6l2.6 2.66 2.6-2.67c.4-.4.9-.6 1.4-.6.5 0 1 .2 1.4.6l2.7 2.66 2.65-2.67zM40.2 59.48v4.1l12.3-4.1 12.32 4.1v-4.1h-4.1v-4.1H44.28v4.1h-4.1z"/>
			        </svg>
			      </span>
			    </figure>
			    <h6 class="titulo">LOGÍSTICA DE <br /> TRANSPORTE</h6>
			    <label for="" class="btn">COTIZAR</label>
			  </button>
			  <button class="seleccion formulario z-franca">
			    <figure class="img-background">
			      <span class="icon-fa">                
			        <svg class="svg-img icono-zonafranca" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.503 103.501">
			          <path fill="#2E3191" d="M62.503 48.68v6.213c0 .223-.08.44-.235.654-.158.213-.34.33-.54.354l-5.206.81c-.248.79-.605 1.64-1.075 2.56.764 1.08 1.77 2.37 3.022 3.87.15.23.23.45.23.67 0 .27-.08.48-.24.64-.52.67-1.44 1.68-2.77 3.01-1.34 1.34-2.22 2-2.64 2-.25 0-.48-.08-.71-.23l-3.87-3.03c-.83.43-1.69.77-2.59 1.04-.25 2.42-.51 4.16-.78 5.21-.16.54-.5.81-1.01.81h-6.24c-.25 0-.47-.08-.67-.25-.21-.17-.32-.37-.34-.59l-.77-5.14c-.76-.22-1.6-.57-2.52-1.04l-3.96 2.99c-.16.15-.38.23-.68.23-.25 0-.48-.09-.71-.27-3.228-2.98-4.84-4.77-4.84-5.37 0-.2.075-.41.234-.64.22-.31.68-.9 1.373-1.78.69-.87 1.22-1.56 1.576-2.05-.51-.98-.904-1.9-1.17-2.75l-5.11-.8c-.22-.02-.41-.13-.57-.31-.16-.19-.235-.41-.235-.66V48.6c0-.224.08-.442.24-.654.16-.213.34-.332.54-.354l5.204-.806c.25-.786.603-1.637 1.072-2.55-.76-1.08-1.77-2.367-3.028-3.867-.16-.25-.24-.48-.24-.67 0-.27.08-.5.235-.68.49-.67 1.41-1.67 2.76-2.99 1.346-1.32 2.23-1.98 2.65-1.98.25 0 .486.07.71.23l3.86 3.02c.76-.4 1.625-.76 2.586-1.08.25-2.42.51-4.148.78-5.178.16-.54.49-.808 1.01-.808h6.25c.244 0 .47.08.67.25.2.17.31.36.336.585l.77 5.143c.76.22 1.6.57 2.52 1.04l3.96-2.99c.18-.157.4-.233.67-.233.24 0 .48.09.7.266 3.23 2.98 4.84 4.774 4.84 5.38 0 .2-.08.415-.236.64-.27.356-.74.96-1.41 1.814-.67.85-1.17 1.52-1.51 2.013.52 1.08.9 1.99 1.14 2.75l5.1.78c.23.04.42.16.58.35.15.19.23.41.23.66zM47.08 57.816c1.683-1.682 2.52-3.71 2.52-6.08 0-2.376-.837-4.402-2.52-6.08-1.678-1.682-3.705-2.52-6.08-2.52-2.37 0-4.398.838-6.08 2.52-1.678 1.678-2.518 3.704-2.518 6.08 0 2.37.84 4.398 2.518 6.08 1.682 1.676 3.71 2.518 6.08 2.518 2.375 0 4.402-.842 6.08-2.518zM84 32.186v4.702c0 .357-1.668.705-5.006 1.04-.267.606-.605 1.188-1.008 1.748 1.143 2.53 1.714 4.076 1.714 4.635 0 .1-.042.17-.134.24-2.732 1.59-4.12 2.39-4.165 2.39-.18 0-.69-.52-1.54-1.57-.85-1.05-1.43-1.81-1.74-2.28-.44.05-.78.07-1.01.07-.22 0-.56-.02-1.01-.07-.31.47-.89 1.23-1.74 2.28-.85 1.06-1.36 1.58-1.54 1.58-.04 0-1.43-.79-4.16-2.38-.09-.07-.13-.14-.13-.23 0-.55.57-2.1 1.71-4.63-.4-.56-.73-1.14-1-1.75-3.34-.33-5-.68-5-1.04V32.2c0-.358 1.67-.706 5.01-1.04.29-.65.63-1.23 1.01-1.75-1.14-2.53-1.71-4.074-1.71-4.635 0-.09.04-.164.13-.23.09-.046.48-.27 1.176-.67.695-.404 1.353-.786 1.98-1.146.63-.36.964-.54 1.01-.54.18 0 .69.52 1.545 1.56.857 1.04 1.438 1.8 1.75 2.27.45-.05.787-.07 1.01-.07.224 0 .56.02 1.01.07 1.143-1.59 2.175-2.85 3.09-3.77l.203-.06c.09 0 1.48.78 4.167 2.35.09.07.13.15.13.23 0 .56-.57 2.1-1.72 4.63.38.52.72 1.1 1.01 1.75 3.34.333 5.004.68 5.004 1.04zm0 34.396v4.703c0 .357-1.668.705-5.006 1.04-.267.606-.605 1.19-1.008 1.75C79.13 76.603 79.7 78.15 79.7 78.71c0 .09-.042.166-.134.234-2.732 1.588-4.12 2.383-4.165 2.383-.18 0-.69-.523-1.54-1.578-.85-1.06-1.43-1.82-1.74-2.29-.44.04-.78.06-1.01.06-.22 0-.56-.02-1.01-.07-.31.47-.89 1.23-1.74 2.28-.85 1.05-1.36 1.57-1.54 1.57-.04 0-1.43-.8-4.16-2.38-.09-.07-.13-.15-.13-.24 0-.56.57-2.11 1.71-4.64-.4-.56-.73-1.15-1-1.75-3.34-.34-5-.69-5-1.04v-4.7c0-.36 1.67-.71 5.01-1.04.29-.65.63-1.24 1.01-1.75-1.14-2.53-1.71-4.08-1.71-4.64 0-.09.04-.17.13-.24.09-.04.48-.267 1.176-.67s1.353-.78 1.98-1.14c.63-.36.964-.54 1.01-.54.18 0 .69.52 1.545 1.56s1.43 1.8 1.74 2.27c.45-.04.79-.068 1.01-.068.226 0 .56.024 1.01.067 1.144-1.59 2.176-2.84 3.09-3.76l.204-.065c.09 0 1.48.78 4.165 2.35.09.063.133.143.133.233 0 .56-.57 2.1-1.72 4.63.38.52.72 1.1 1.01 1.75 3.34.333 5.007.68 5.007 1.04zm-8.6-32.047c0-1.162-.425-2.172-1.277-3.022-.85-.85-1.855-1.277-3.022-1.277-1.16 0-2.17.427-3.02 1.277-.85.85-1.27 1.86-1.27 3.022 0 1.187.42 2.202 1.26 3.04.84.843 1.86 1.26 3.04 1.26s2.2-.417 3.04-1.26c.84-.838 1.26-1.853 1.26-3.04zm0 34.4c0-1.167-.425-2.175-1.277-3.024-.85-.85-1.855-1.27-3.022-1.27-1.16 0-2.17.43-3.02 1.28-.85.85-1.27 1.86-1.27 3.03 0 1.19.42 2.2 1.26 3.04.84.84 1.86 1.26 3.04 1.26s2.2-.42 3.04-1.26c.84-.84 1.26-1.85 1.26-3.04z"/>
			        </svg>
			      </span>
			    </figure>
			    <h6 class="titulo">ZONA <br /> FRANCA</h6>
			    <label for="" class="btn">COTIZAR</label>
			  </button>
			</div>
			<div class="grupo-form seleccion alcance">
			  <button class="btn nacional activo">nacional</button>
			  <button class="btn internacional">internacional</button>
			</div>
			<div class="grupo-form diligenciar formularios">
			  <form class="formulario comercio"
			        action="https://docs.google.com/forms/d/e/1FAIpQLScq2O-jdpsjfmvOuVol4HgwD6bGvKHxy0R7Rymz7rwXeMv3gA/formResponse" 
			        method="POST" target="_blank" onsubmit="">
			    
			    <h4 class="etiqueta titulo">COTIZACIÓN COMERCIO EXTERIOR</h4>
			    
			    <div class="pregunta texto nombre">            
			      <label class="etiqueta" for="entry_384916687">Nombre</label>
			      <input class="entrada texto" type="text" name="entry.384916687" id="entry_384916687" required="">
			    </div>  
			    
			    <div class="pregunta texto empresa">           
			      <label class="etiqueta" for="entry_1485556136">Empresa</label>
			      <input class="entrada texto" type="text" name="entry.1485556136" id="entry_1485556136" required="">
			    </div>  
			    
			    <div class="pregunta texto numero">               
			      <label class="etiqueta" for="entry_1587973391">Número de contacto</label>
			      <span class="grupo-entrada">
			        <input class="entrada numero" type="number" name="entry.1587973391" value="" id="entry_1587973391" required="" step="any">
			      </span>  
			    </div>                      
			    
			    <div class="pregunta texto correo">
			      <label class="etiqueta" for="entry_323280995">Correo</label>
			      <input class="entrada correo" type="email" name="entry.323280995" id="entry_323280995" required="">
			    </div>  
			    
			    <div class="pregunta radiobtn tipo-tramite otra-respuesta">
			      
			      <label class="etiqueta" for="entry_930735309">Tipo de Tramite</label>
			      <label class="check-container" for="group_930735309_1">
			        <input class="entrada radio " type="radio" name="entry.930735309" value="Importación" id="group_930735309_1" required="">
			        <span class="etiqueta">Importación</span>
			      </label>
			      <label class="check-container" for="group_930735309_2">
			        <input class="entrada radio " type="radio" name="entry.930735309" value="Exportación" id="group_930735309_2" required="">
			        <span class="etiqueta">Exportación</span>
			      </label>
			      <label class="check-container otra-respuesta" for="group_930735309_3">
			        <input class="entrada radio" type="radio" name="entry.930735309" value="__other_option__" id="group_930735309_3" required="">
			        <span class="etiqueta">Otro:</span>
			        <input class="entrada texto" type="text" name="entry.930735309.other_option_response" value="" id="entry_930735309_other_option_response" placeholder="¿Cual?">
			      </label>
			      
			    </div>
			    
			    <articulo class="grupo pregunta peso">
			      
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_851225593">Peso</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.851225593" value="" id="entry_851225593" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_21060206_1">
			          <input class="check" type="radio" name="entry.21060206" value="Kg" id="group_21060206_1" required="">
			          <span class="etiqueta">Kg</span>
			        </label>
			        <label class="check-container" for="group_21060206_2">
			          <input class="check" type="radio" name="entry.21060206" value="Gr" id="group_21060206_2" required="">
			          <span class="etiqueta">Gr</span>
			        </label>
			        <label class="check-container" for="group_21060206_3">
			          <input class="check" type="radio" name="entry.21060206" value="Ton" id="group_21060206_3" required="">
			          <span class="etiqueta">Ton</span>
			        </label>              
			      </div>              
			        
			    </articulo>
			    
			    <div class="pregunta texto tipo-mercancia">
			      <label class="etiqueta" for="entry_1178440189">Tipo de Mercancia</label>
			      <input class="entrada" type="text" name="entry.1178440189" value="" id="entry_1178440189" required="" title="">
			    </div>           
			    
			    <div class="pregunta radiobtn termino-negociacion">
			      
			      <label class="etiqueta" for="entry_564033274">Término de negociación</label>
			      <label class="check-container" for="group_564033274_1">
			        <input class="entrada radio " type="radio" name="entry.564033274" value="FOB" id="group_564033274_1" required="">
			        <span class="etiqueta">FOB</span>
			      </label>
			      <label class="check-container" for="group_564033274_2">
			        <input class="entrada radio " type="radio" name="entry.564033274" value="CIF" id="group_564033274_2" required="">
			        <span class="etiqueta">CIF</span>
			      </label>
			      <label class="check-container" for="group_564033274_2">
			        <input class="entrada radio " type="radio" name="entry.564033274" value="EXW" id="group_564033274_2" required="">
			        <span class="etiqueta">EXW</span>
			      </label>
			      <label class="check-container" for="group_564033274_2">
			        <input class="entrada radio " type="radio" name="entry.564033274" value="FCA" id="group_564033274_2" required="">
			        <span class="etiqueta">FCA</span>
			      </label>
			      
			    </div>
			    
			    <articulo class="grupo pregunta valor-mercancia radio-btns">
			      
			      <label class="etiqueta" for="entry_1658544443">Valor de la Mercancía</label>
			      <div class="pregunta texto numero">
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1658544443" value="" id="entry_1658544443" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_1709596086_1">
			          <input class="check" type="radio" name="entry.1709596086" value="COP" id="group_1709596086_1" required="">
			          <span class="etiqueta">COP</span>
			        </label>
			        <label class="check-container" for="group_1709596086_2">
			          <input class="check" type="radio" name="entry.1709596086" value="USD" id="group_1709596086_2" required="">
			          <span class="etiqueta">USD</span>
			        </label>
			        <label class="check-container" for="group_1709596086_3">
			          <input class="check" type="radio" name="entry.1709596086" value="EUR" id="group_1709596086_3" required="">
			          <span class="etiqueta">EUR</span>
			        </label>              
			      </div>              
			        
			    </articulo> 
			    
			    <div class="pregunta texto tipo-mercancia">
			      <label class="etiqueta" for="entry_1079138048">Ciudad en donde se Nacionaliza</label>
			      <input class="entrada" type="text" name="entry.1079138048" value="" id="entry_1079138048" required="" title="">
			    </div>   
			    
			    <div class="pregunta checkbox politica">  
			      <input class="ckeck" type="checkbox" name="entry.356698743" value="Acepto la Política de Tratamiento y Protección de datos." id="group_356698743_1" required>
			      <label class="etiqueta" for="group_356698743_1">
			        Acepto la 
			        <span class="trigger-politica" title="Clic para leer nuestra Política">
			          Política de Tratamiento y Protección de Datos Personales
			        </span class="trigger-politica">
			      </label>
			    </div>
			    
			    <button type="submit" name="submit" value="Enviar" id="enviar-form" class="btn">ENVIAR COTIZACIÓN</button>
			    
			  </form>
			  <form class="formulario logistica nacional"
			        action="https://docs.google.com/forms/d/e/1FAIpQLSc1RYR5qbhbAlYy3KFHYDuji1g9yW6twshvedCq9JMzkZZMig/formResponse" 
			        method="POST" target="_blank" onsubmit="">
			    
			    <h4 class="etiqueta titulo">COTIZACIÓN LOGISTICA TRANSPORTE INTERNACIONAL NACIONAL</h4> 
			    
			    <div class="pregunta texto nombre">           
			      <label class="etiqueta" for="entry_384916687">Nombre</label>
			      <input class="entrada texto" type="text" name="entry.384916687" id="entry_384916687" required="">
			    </div>  
			    
			    <div class="pregunta texto empresa">           
			      <label class="etiqueta" for="entry_1893497908">Empresa</label>
			      <input class="entrada texto" type="text" name="entry.1893497908" id="entry_1893497908" required="">
			    </div>  

			    <div class="pregunta texto numero">               
			      <label class="etiqueta" for="entry_1587973391">Número de contacto</label>
			      <span class="grupo-entrada">
			        <input class="entrada numero" type="number" name="entry.1587973391" value="" id="entry_1587973391" required="" step="any">
			      </span>  
			    </div>                        
			    
			    <div class="pregunta texto correo">
			      <label class="etiqueta" for="entry_323280995">Correo</label>
			      <input class="entrada correo" type="email" name="entry.323280995" id="entry_323280995" required="">
			    </div>             
			    
			    <articulo class="grupo pregunta adyacente ida-y-vuelta"> 
			    
			      <label class="etiqueta principal">ORIGEN</label>              

			      <div class="pregunta texto">
			        <label class="etiqueta" for="entry_650592309">Ciudad de Origen</label>
			        <input class="entrada" type="text" name="entry.650592309" value="" id="entry_650592309" dir="auto" required="" title="">
			      </div>
			      <div class="pregunta texto">              
			        <label class="etiqueta" for="entry_1573843207">Puerto - Aeropuerto</label>
			        <input class="entrada" type="text" name="entry.1573843207" value="" id="entry_1573843207" dir="auto" required="" title="">
			      </div>

			      <label class="etiqueta principal">DESTINO</label>  

			      <div class="pregunta texto">
			        <label class="etiqueta" for="entry_785285150">Ciudad de Destino</label>
			        <input class="entrada" type="text" name="entry.785285150" value="" id="entry_785285150" dir="auto" required="" title="">
			      </div>            
			      <div class="pregunta texto">              
			        <label class="etiqueta" for="entry_344011928">Puerto - Aeropuerto</label>
			        <input class="entrada" type="text" name="entry.344011928" value="" id="entry_344011928" dir="auto" required="" title="">
			      </div>
			      
			    </articulo>  
			    
			    <div class="pregunta texto tipo-mercancia">
			      <label class="etiqueta" for="entry_1178440189">Tipo de Mercancia</label>
			      <input class="entrada" type="text" name="entry.1178440189" value="" id="entry_1178440189" required="" title="">
			    </div>  
			    
			    <articulo class="grupo pregunta peso bruto">
			      
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_851225593">Peso Bruto</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.851225593" value="" id="entry_851225593" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_469286448_1">
			          <input class="check" type="radio" name="entry.469286448" value="Kg" id="group_469286448_1" required="">
			          <span class="etiqueta">Kg</span>
			        </label>
			        <label class="check-container" for="group_469286448_2">
			          <input class="check" type="radio" name="entry.469286448" value="Gr" id="group_469286448_2" required="">
			          <span class="etiqueta">Gr</span>
			        </label>
			        <label class="check-container" for="group_469286448_3">
			          <input class="check" type="radio" name="entry.469286448" value="Ton" id="group_469286448_3" required="">
			          <span class="etiqueta">Ton</span>
			        </label>              
			      </div>              
			        
			    </articulo>  
			    
			    <articulo class="grupo pregunta adyacente volumen"> 
			      
			      <label class="etiqueta principal">VOLUMEN</label>              
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_586297913">Ancho</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.586297913" value="" id="entry_586297913" required="" step="any">
			        </span>
			      </div>             
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_584024466">Alto</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.584024466" value="" id="entry_584024466" dir="auto" required="" step="any">
			        </span>
			      </div>    
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_1792292376">Largo</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1792292376" value="" id="entry_1792292376" required="" step="any">
			        </span>
			      </div>
			      
			    </articulo>  
			    
			    <div class="pregunta texto modo-transporte">
			      <label class="etiqueta" for="entry_1981886525">Modo de Transporte</label>
			      <input class="entrada" type="text" name="entry.1981886525" value="" id="entry_1981886525" required="" title="">
			    </div>    
			    
			    <div class="pregunta radiobtn termino-negociacion">
			      
			      <label class="etiqueta" for="entry_1472818493">Término de negociación</label>
			      <label class="check-container" for="group_1472818493_1">
			        <input class="entrada radio " type="radio" name="entry.1472818493" value="FOB" id="group_1472818493_1" required="">
			        <span class="etiqueta">FOB</span>
			      </label>
			      <label class="check-container" for="group_1472818493_2">
			        <input class="entrada radio " type="radio" name="entry.1472818493" value="CIF" id="group_1472818493_2" required="">
			        <span class="etiqueta">CIF</span>
			      </label>
			      <label class="check-container" for="group_1472818493_2">
			        <input class="entrada radio " type="radio" name="entry.1472818493" value="EXW" id="group_1472818493_2" required="">
			        <span class="etiqueta">EXW</span>
			      </label>
			      <label class="check-container" for="group_1472818493_2">
			        <input class="entrada radio " type="radio" name="entry.1472818493" value="FCA" id="group_1472818493_2" required="">
			        <span class="etiqueta">FCA</span>
			      </label>
			      
			    </div>
			    
			    <div class="pregunta checkbox politica">  
			      <input class="ckeck" type="checkbox" name="entry.356698743" value="Acepto la Política de Tratamiento y Protección de datos." id="group_356698743_2" required>
			      <label class="etiqueta" for="group_356698743_2">
			        Acepto la 
			        <span class="trigger-politica" title="Clic para leer nuestra Política">
			          Política de Tratamiento y Protección de Datos Personales
			        </span class="trigger-politica">
			      </label>
			    </div>
			    
			    <button type="submit" name="submit" value="Enviar" id="ss-submit" class="btn">ENVIAR COTIZACIÓN</button>            
			    
			  </form>
			  <form class="formulario logistica internacional"
			        action="https://docs.google.com/forms/d/e/1FAIpQLSdMoCi990DZaCoKwf1LgeDck3o7lUdlkwoLOyTOJs_s4vaQTQ/formResponse" 
			        method="POST" target="_blank" onsubmit="" >          
			    
			    <h4 class="etiqueta titulo">COTIZACIÓN LOGISTICA TRANSPORTE INTERNACIONAL</h4> 
			    
			    <div class="pregunta texto nombre">            
			      <label class="etiqueta" for="entry_384916687">Nombre</label>
			      <input class="entrada texto" type="text" name="entry.384916687" id="entry_384916687" required="">
			    </div>  
			    
			    <div class="pregunta texto empresa">           
			      <label class="etiqueta" for="entry_689898049">Empresa</label>
			      <input class="entrada texto" type="text" name="entry.689898049" id="entry_689898049" required="">
			    </div> 
			    
			    <div class="pregunta texto numero">               
			      <label class="etiqueta" for="entry_1587973391">Número de contacto</label>
			      <span class="grupo-entrada">
			        <input class="entrada numero" type="number" name="entry.1587973391" value="" id="entry_1587973391" required="" step="any">
			      </span>  
			    </div>                        
			    
			    <div class="pregunta texto correo">
			      <label class="etiqueta" for="entry_323280995">Correo</label>
			      <input class="entrada correo" type="email" name="entry.323280995" id="entry_323280995" required="">
			    </div>                          
			    
			    <div class="pregunta radiobtn tipo-servicio">
			      <label class="etiqueta" for="entry_4704579">Tipo de Servicio</label>
			      <label class="check-container" for="group_2112256063_1">
			        <input class="entrada radio " type="radio" name="entry.2112256063" value="Carga Suelta" id="group_2112256063_1" role="radio" required="">
			        <span class="etiqueta">Carga Suelta</span>
			      </label>
			      <label class="check-container" for="group_2112256063_2">
			        <input class="entrada radio" type="radio" name="entry.2112256063" value="Contenedor 20''" id="group_2112256063_2" role="radio" required="">
			        <span class="etiqueta">Contenedor 20''</span>
			      </label>
			      <label class="check-container" for="group_2112256063_3">
			        <input class="entrada radio" type="radio" name="entry.2112256063" value="Contenedor 40''" id="group_2112256063_3" role="radio" required="">
			        <span class="etiqueta">Contenedor 40''</span>
			      </label>              
			      <label class="check-container" for="group_2112256063_4">
			        <input class="entrada radio" type="radio" name="entry.2112256063" value="Contenedor 20'' HQ" id="group_2112256063_4" role="radio" required="">
			        <span class="etiqueta">Contenedor 20'' HQ</span>
			      </label>
			      <label class="check-container" for="group_2112256063_5">
			        <input class="entrada radio" type="radio" name="entry.2112256063" value="Contenedor Refrigerado" id="group_2112256063_5" role="radio" required="">
			        <span class="etiqueta">Contenedor Refrigerado</span>
			      </label>
			      <label class="check-container" for="group_2112256063_6">
			        <input class="entrada radio" type="radio" name="entry.2112256063" value="Planchón" id="group_2112256063_6" role="radio" required="">
			        <span class="etiqueta">Planchón</span>
			      </label>
			    </div>
			          
			    <articulo class="grupo pregunta peso">
			      
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_851225593">Peso</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.851225593" value="" id="entry_851225593" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_982011570_1">
			          <input class="check" type="radio" name="entry.982011570" value="Kg" id="group_982011570_1" required="">
			          <span class="etiqueta">Kg</span>
			        </label>
			        <label class="check-container" for="group_982011570_2">
			          <input class="check" type="radio" name="entry.982011570" value="Gr" id="group_982011570_2" required="">
			          <span class="etiqueta">Gr</span>
			        </label>
			        <label class="check-container" for="group_982011570_3">
			          <input class="check" type="radio" name="entry.982011570" value="Ton" id="group_982011570_3" required="">
			          <span class="etiqueta">Ton</span>
			        </label>              
			      </div>              
			        
			    </articulo>           
			    
			    <div class="pregunta texto parrafo descripcion-carga">
			      <label class="etiqueta" for="entry_446049078">
			        Descripción de la Carga
			      </label>
			      <textarea class="entrada" name="entry.446049078" rows="8" cols="0" id="entry_446049078" required=""></textarea>  
			    </div>   
			          
			    <articulo class="grupo pregunta adyacente volumen"> 
			      
			      <label class="etiqueta principal">VOLUMEN</label>              
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_586297913">Ancho</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.586297913" value="" id="entry_586297913" required="" step="any">
			        </span>
			      </div>              
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_1792292376">Largo</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1792292376" value="" id="entry_1792292376" required="" step="any">
			        </span>
			      </div>
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_584024466">Alto</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.584024466" value="" id="entry_584024466" dir="auto" required="" step="any">
			        </span>
			      </div>   
			      
			    </articulo>  
			    
			    <articulo class="grupo pregunta adyacente ida-y-vuelta"> 
			    
			      <label class="etiqueta principal">ORIGEN</label>              

			      <div class="pregunta texto">
			        <label class="etiqueta" for="entry_650592309">Ciudad</label>
			        <input class="entrada" type="text" name="entry.650592309" value="" id="entry_650592309" dir="auto" required="" title="">
			      </div>
			      <div class="pregunta texto">              
			        <label class="etiqueta" for="entry_944097990">Aeropuerto</label>
			        <input class="entrada" type="text" name="entry.944097990" value="" id="entry_944097990" dir="auto" required="" title="">
			      </div>

			      <label class="etiqueta principal">DESTINO</label>  

			      <div class="pregunta texto">              
			        <label class="etiqueta" for="entry_785285150">Ciudad</label>
			        <input class="entrada" type="text" name="entry.785285150" value="" id="entry_785285150" dir="auto" required="" title="">
			      </div>            
			      <div class="pregunta texto">              
			        <label class="etiqueta" for="entry_1989648467">Aeropuerto</label>
			        <input class="entrada" type="text" name="entry.1989648467" value="" id="entry_1989648467" dir="auto" required="" title="">
			      </div>
			      
			    </articulo>                  
			    
			    <div class="pregunta texto tipo-empaque">
			      <label class="etiqueta" for="entry_1178440189">Tipo de Empaque</label>
			      <input class="entrada" type="text" name="entry.1178440189" value="" id="entry_1178440189" required="" title="">
			    </div>    
			    
			    <article class="grupo pregunta adyacente valor-mercancia listado"> 
			      
			      <label class="etiqueta principal" for="entry_1981886525">Mercancía</label>
			      
			      <div class="pregunta texto numero valor">
			        <label class="etiqueta" for="entry_1981886525">Valor</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1981886525" value="" id="entry_1981886525" required="" step="any" title="Debe ser un número">
			        </span>
			      </div>  
			    
			      <div class="pregunta seleccion-lista">
			        <label class="etiqueta" for="entry_272399299">Divisa</label>
			        <select class="entrada" name="entry.272399299" id="entry_272399299" aria-label="Divisa de la Mercancía" required="">
			          <option value=""></option>
			          <option value="COP">COP</option>
			          <option value="USD">USD</option>
			          <option value="EUR">EUR</option>
			        </select>
			      </div>
			      
			    </article>                    
			    
			    <div class="pregunta checkbox politica">  
			      <input class="ckeck" type="checkbox" name="entry.356698743" value="Acepto la Política de Tratamiento y Protección de datos." id="group_356698743_3" required>
			      <label class="etiqueta" for="group_356698743_3">
			        Acepto la 
			        <span class="trigger-politica" title="Clic para leer nuestra Política">
			          Política de Tratamiento y Protección de Datos Personales
			        </span class="trigger-politica">
			      </label>
			    </div>
			    
			    <!--<input type="submit" name="submit" value="Enviar" id="ss-submit" class="enviar">-->
			    <button type="submit" name="submit" value="Enviar" id="ss-submit" class="btn">ENVIAR COTIZACIÓN</button>
			  
			  </form>

			  <form class="formulario zonafranca"
			        action="https://docs.google.com/forms/d/e/1FAIpQLSeMJBq107w1m4PmAWYXX4ab7IGXtYfizaNGg1PQaOMIrp9_IA/formResponse" 
			        method="POST" target="_blank" onsubmit="" >            
			    
			    <h4 class="etiqueta titulo">COTIZACIÓN ZONA FRANCA</h4> 
			    
			    <div class="pregunta texto nombre">            
			      <label class="etiqueta" for="entry_384916687">Nombre</label>
			      <input class="entrada texto" type="text" name="entry.384916687" id="entry_384916687" required="">
			    </div>  
			                
			    <div class="pregunta texto empresa">           
			      <label class="etiqueta" for="entry_348711557">Empresa</label>
			      <input class="entrada texto" type="text" name="entry.348711557" id="entry_348711557" required="">
			    </div>  
			    
			    <div class="pregunta texto numero telefono">               
			      <label class="etiqueta" for="entry_1587973391">Número de contacto</label>
			      <span class="grupo-entrada">
			        <input class="entrada numero" type="number" name="entry.1587973391" value="" id="entry_1587973391" required="" step="any">
			      </span>  
			    </div>                        
			    
			    <div class="pregunta texto correo">
			      <label class="etiqueta" for="entry_323280995">Correo</label>
			      <input class="entrada correo" type="email" name="entry.323280995" id="entry_323280995" required="">
			    </div>    
			    
			    <div class="pregunta texto tipo-mercancia">
			      <label class="etiqueta" for="entry_1672333935">Tipo de Mercancia</label>
			      <input class="entrada" type="text" name="entry.1672333935" value="" id="entry_1672333935" required="" title="">
			    </div>  
			    
			    <articulo class="grupo pregunta valor-mercancia radio-btns">
			      <label class="etiqueta" for="entry_1981886525">Valor de la Mercancía</label>
			      <div class="pregunta texto numero">
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1981886525" value="" id="entry_1981886525" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_125816056_1">
			          <input class="check" type="radio" name="entry.125816056" value="COP" id="group_125816056_1" required="">
			          <span class="etiqueta">COP</span>
			        </label>
			        <label class="check-container" for="group_125816056_2">
			          <input class="check" type="radio" name="entry.125816056" value="USD" id="group_125816056_2" required="">
			          <span class="etiqueta">USD</span>
			        </label>
			        <label class="check-container" for="group_125816056_3">
			          <input class="check" type="radio" name="entry.125816056" value="EUR" id="group_125816056_3" required="">
			          <span class="etiqueta">EUR</span>
			        </label>              
			      </div>              
			        
			    </articulo>  
			    
			    <articulo class="grupo pregunta peso bruto">
			      
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_851225593">Peso Bruto</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.851225593" value="" id="entry_851225593" required="" step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_1275079725_1">
			          <input class="check" type="radio" name="entry.1275079725" value="Kg" id="group_1275079725_1" required="">
			          <span class="etiqueta">Kg</span>
			        </label>
			        <label class="check-container" for="group_1275079725_2">
			          <input class="check" type="radio" name="entry.1275079725" value="Gr" id="group_1275079725_2" required="">
			          <span class="etiqueta">Gr</span>
			        </label>
			        <label class="check-container" for="group_1275079725_3">
			          <input class="check" type="radio" name="entry.1275079725" value="Ton" id="group_1275079725_3" required="">
			          <span class="etiqueta">Ton</span>
			        </label>              
			      </div>              
			        
			    </articulo>  
			    
			    <articulo class="grupo pregunta adyacente volumen"> 
			      
			      <label class="etiqueta principal">VOLUMEN</label>              
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_586297913">Ancho</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.586297913" value="" id="entry_586297913" required="" step="any">
			        </span>
			      </div>             
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_584024466">Alto</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.584024466" value="" id="entry_584024466" dir="auto" required="" step="any">
			        </span>
			      </div>    
			      <div class="pregunta texto numero">
			        <label class="etiqueta" for="entry_1792292376">Largo</label>
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1792292376" value="" id="entry_1792292376" required="" step="any">
			        </span>
			      </div>
			      
			    </articulo> 
			    
			    <articulo class="grupo pregunta volumen mercancia">
			      
			      <label class="etiqueta" for="entry_1113942463">Volumen de mercancía mensual</label>
			      
			      <div class="pregunta texto numero volumen-mensual">
			        <span class="grupo-entrada">
			          <input class="entrada" type="number" name="entry.1113942463" value="" id="entry_1113942463"  step="any">              
			        </span>
			      </div>
			      
			      <div class="pregunta radiobtn">
			        <label class="check-container" for="group_419539065_1">
			          <input class="check" type="radio" name="entry.419539065" value="Kg" id="group_419539065_1" >
			          <span class="etiqueta">Kg</span>
			        </label>
			        <label class="check-container" for="group_419539065_2">
			          <input class="check" type="radio" name="entry.419539065" value="Gr" id="group_419539065_2" >
			          <span class="etiqueta">Gr</span>
			        </label>
			        <label class="check-container" for="group_419539065_3">
			          <input class="check" type="radio" name="entry.419539065" value="Ton" id="group_419539065_3" >
			          <span class="etiqueta">Ton</span>
			        </label>              
			      </div>              
			        
			    </articulo>  
			    
			    <div class="pregunta checkbox politica">  
			      <input class="ckeck" type="checkbox" name="entry.356698743" value="Acepto la Política de Tratamiento y Protección de datos." id="group_356698743_4" required>
			      <label class="etiqueta" for="group_356698743_4">
			        Acepto la 
			        <span class="trigger-politica" title="Clic para leer nuestra Política">
			          Política de Tratamiento y Protección de Datos Personales
			        </span class="trigger-politica">
			      </label>
			    </div>
			    
			    <!--<input type="submit" name="submit" value="Enviar" id="ss-submit" class="enviar">-->
			    <button type="submit" name="submit" value="Enviar" id="ss-submit" class="btn">ENVIAR COTIZACIÓN</button>
			    
			  </form>
			</div>

		</section>

<!--=================================
* BOTONES POP UP
=================================-->

      <?php get_template_part('template/botones-popup'); ?>

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
