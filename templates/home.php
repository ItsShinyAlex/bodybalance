<?php
    /* Template Name:  home*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="mov-hide" id="slider-home" >
    <?php putRevSlider("home1", "home-new.php"); ?>
</section>

<section class="desktop-hide" id="slider-home" >
    <?php putRevSlider("home-mov", "home-new.php"); ?>
</section>

<section class="template-section" id="bodyb">
  <div class="container">
       <div class="relative-top">
            <div class="fcentered">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/BODYBALANCE.png" alt="BodyBalance Centro de nutrición y Metabolismo integral">
            </div>
            <div class="flex">
                <div class="col">
                   <div class="fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/fruits.png" alt="pera, naranja, toronja, manzana combianadas">
                   </div>
                   
                </div>
                
                <div class="col col-txt">
                    <h1>
                        Es un centro integral de nutrición y metabolismo.
                    </h1>
                    <p>
                        Ofrecemos consulta  médico-nutricional, venta de suplementos  y  tratamientos complementarios cómo modelado corporal con ondas de choque tecnología suiza Cellactor SC1®, faciales y depilación laser diodo. 
                    </p>
                    <a href="http://bodybalance.mx/tratamientos/" class="btn-brown">¡Saber más!</a>
                </div>
            </div>
       </div>
   
  </div>
</section>

<section class="template-section" id="consultas">
    <div class="container">
        <div class="flex">
            <div class="col col-txt">
                <h2 class="white">Consultas de Nutrición
                </h2>
                <img class="line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/w-bar.png" alt="----------">
                <p class="white">
                    Te ofrecemos tu consulta médico nutricional personalizada, analizando composición corporal con tecnología InBody, estilo de vida y necesidades, para obtener la mejor opción de tratamiento.
                </p>
                <p class="white"><b>¡Te acompañaremos hasta alcanzar la meta deseada!</b></p>
                 <a  href="http://bodybalance.mx/consultas-de-nutricion/" class="btn-brown mov-hid">¡Saber más!</a>
            </div>
            <div class="col no-pad-bot">
                <div class="relative-top">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/smileGeen.jpg" alt="Nutrióloga">
                </div>
            </div>
            
            
            
        </div>
        
        <div class="desktop-hide fcentered center">
                <a href="https://bodybalance.mx/consultas-de-nutricion-presencial-cdmx/" class="btn-brown">¡Saber más!</a>
            </div>
        
    </div>
</section>

<section class="template-section" id="servicios">
    <div class="container">
        <div class="flex">
           <div class="fcentered">
                   
                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/cintaMetrica.jpg" alt="cinta métrica">
                        <div class="fix-h">
                            <div class="txt">

                                 <h2 class="brown">Modelamiento 
                                Corporal</h2>
                                <p class="white">Con Cellactor de Storz Medical™ tecnología suiza, resultados rápidos, efectivos y duraderos.</p>


                            </div>
                        </div>
                        
                         <a href="http://bodybalance.mx/tratamientos/#modelamiento" class="btn-brown">¡Saber más!</a>
                        
                       
                    </div>


                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/laserDiodo.jpg" alt="Depliación láser">
                        
                          <div class="fix-h">
                        
                            <div class="txt">
                                <h2 class="brown">Depilación con  
                                láser diodo</h2>
                                <p class="white">Depilación definitiva en menos sesiones.</p>


                            </div>
                        
                         </div>
                           <a href="http://bodybalance.mx/tratamientos/#depilacion" class="btn-brown">¡Saber más!</a>
                           
                    </div>


                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/mascara.jpg" alt="mascarilla de barro">
                        
                        
                        <div class="fix-h">
                            
                            <div class="txt">
                                <h2 class="brown">Faciales</h2>
                                <p class="white">
                                    Microdermoabrasión con punta diamante, USG, fototerapia, limpieza profunda y aplicación de mascarillas.
                                </p>
                                
                            
                            </div>
                            
                        
                            
                        </div>
                        
                        <a href="http://bodybalance.mx/tratamientos/#faciales" class="btn-brown">¡Saber más!</a>
                        
                        
                    </div>
            </div>
            
        </div>
    </div>
</section>






<?php 
    include("shiny-footer.php");
    get_footer();
?>

