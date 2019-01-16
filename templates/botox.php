<?php
    /* Template Name:  Botox*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>



<section id="botox2" class="mov-hide">
<?php echo do_shortcode( '[rev_slider alias="botox"]' ); ?>

</section>

<section id="botox2" class="desktop-hide">
<?php echo do_shortcode( '[rev_slider alias="botox-mov"]' ); ?>

</section>



<section class="template-section" id="funcion">
 <div class="container">
 <h2>La función del botox</h2>
 <p>es la de inactivar los músculos. bloqueando  <br>
las señales nerviosas que los contraen.</p>
</div>
</section>

<section id="actua" class="template-section">
     <div class="container">
     <h2>¿Como actúa botox en tu rostro?</h2>
    <div class="grid">
        <div class="col">
           <h3>Aplicación</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/aplicacion.png" alt="-----">
           <p>Con una pequeña aguja, se 
inyecta Botox en la zona 
que deseas.</p>
       <p>La sustancia bloquea al músculo impidiendo la transmisión del impulso nervioso que produce la contracción y tiene como resultado la relajación del mismo.  </p>
        </div>
        <div class="col">
           <h3>Acción</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/accion.png" alt="-----">
           <p>La inyección no paraliza el
músculo, por el contrario: lo
destensa.</p>
       <p>El grado de relajación puede tener mayor o menor intensidad según la dosis del tratamiento y los objetivos establecidos entre tu médico y tú. </p>
        </div>
        <div class="col">
           <h3>Efecto</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/efecto.png" alt="-----">
           <p>La acción directa sobre el 
músculo impide que éste  se contraiga, por lo que eventualmente tu linea de expresión desaparece.</p>
       
        </div>
		<div class="col">
           <h3>Resultado</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/resultado.png" alt="-----">
           <p>Los resultados son notorios pasados los primeros 15 días luego de la aplicación, aunque el efecto puede durar entre cuatro y cinco meses.
</p>
       <p>Los resultados pueden ser mas naturales o artificiales dependiendo del tratamiento que elijas.</p>
        </div>
         
    </div>
    </div>
</section>
<section class="template-section" id="aplicacion">

 
 <h2>Zonas Aplicación</h2>
 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/aplicacion_zona.png" alt="-----"> <a href="https://bodybalance.mx/tienda/botox-toxina-botulinica-tipo-a/" class="btn-brown">AGENDAR CITA</a>

</section>
<section id="manera" class="template-section">
     <div class="container">
     
    <div class="grid">
        <div class="col1 primero">
           <h2>LA MANERA MÁS EFICAZ DE ELIMINAR LAS LÍNEAS DE EXPRESIÓN SIN BISTURÍ</h2>
           <p>Botox está compuesto por la toxina Butulínica  Tipo A, una sustancia ampliamente utilizada en la medicina desde hace cuarenta años para indicaciones terapéuticas y cosméticas.</p>
           <p>Aunque su origen es biológico, a partir del cultivo de la bacteria clostridium botulinum, pero uso tiene eficacia y seguridad comprobada.</p>
           <p>La aplicación es rápida y casi indolora sin embargo se puede indicar crema anestésica local dependiendo de tu sensibilidad.</p>
		</div>
        <div class="col3 segundo">
         	 <div class="grid">
          	<div class="col4">
           <h3>Antes</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/antes.png" alt="-----">
           </div>
           <div class="col4">
           <h3>Después</h3>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/despues.png" alt="-----">
           </div>
           </div>
			</div>
    
    </div>
    <h2 class="resultado">RESULTADO DEL TRATAMIENTO <br>BOTOX FACIAL</h2>
     <div class="grid">
        <div class="col2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/b1.png" alt="-----">
		 </div>
		 <div class="col2">
		  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/b2.png" alt="-----">
		 </div>
		 <div class="col2">
		  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/b3.png" alt="-----">
		 </div>
		</div>
    

    </div>
</section>




<section id="costo" class="template-section">
     <div class="container">
    <div class="grid">
        <div class="col">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botox/caja.png" alt="-----">
        </div>
         <div class="col">
            <h2>Costos</h2>
       <p><strong class="rostro">Rostro completo </strong> <br>
(patas de gallo, entrecejo, frente, y lineas de conejo)</p>
      <p><strong>$7,500.00</strong><br>
(incluye retoque a los 10 a 15 dias)</p>
      <p>por unidad (si el paciente sólo quiere aplicaciòn en una zona)</p>
      <p><strong>$120.00 </strong><br>
(cada zona)</p>
       <a href="https://bodybalance.mx/tienda/botox-toxina-botulinica-tipo-a/" class="btn-brown">COMPRAR</a>
        </div>
    </div>
    </div>
</section>




<?php echo do_shortcode( '[text_block id=1132 description="faq_botox"]' ); ?>


<?php 
    include("shiny-footer.php");
    get_footer();
?>

