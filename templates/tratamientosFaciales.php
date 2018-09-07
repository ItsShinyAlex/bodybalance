<?php
    /* Template Name:  Tratamientos - faciales*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section" id="t-faciales">
    
    <div class="container flex">
       <div class="center fcentered">
           
                 <h1 class="saqua uptown">Faciales
                </h1>


                <div class="w-box">
                 <p>Te ofrecemos diferentes tecnologías como  microdermoabrasión con punta diamante, USG, fototerapia, limpieza profunda y aplicación de mascarillas de acuerdo a las necesidades de tu piel. </p>

                </div>
                
                <div class="desktop-hide">
                  <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>
        </div>
     </div>
      
     
</section>



<section class="template-section payschedule pork">
    <div class="container">
        <div class="flex">
            <div class="col fcentered center">
               <h2 class="uptown">¡Resultados desde la primera aplicación!</h2>
            </div>
            
            
            <div class="col fcentered center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/money.png" alt="Costo">
                
                <p class="smallest">desde</p>
                <p><b>$500.00</b></p>
                <p class="small">¡Pregunta por las promociones!</p>
                
                
            </div>
        </div>
        
        <div class="fcentered">
            <div class="realtive-top">
                <a href="#contacto" class="btn-brown">¡Reservar!</a>
            </div>
        </div>
        
        
    </div>

</section>



<section class="template-section blue-howtopay" id="howtopay">
    <div class="container">
        <div class="flex ">
            <div class="col" id="pills">
                <div class="fcentered"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/creditcard.png" alt="Tarjeta de crédito"></div>
            </div>
           
            <div class="col col-txt">
                <h2 class="">¿Cómo Pagar?
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/w-bar.png" alt="-----">
                <p>
                    Efectivo, debito, crédito. 3 meses sin intereses todas las tarjetas de crédito y todos los bancos.
                </p>
            </div>
            
            
           
        </div>
    </div>
</section>






<?php 
    include("shiny-footer.php");
    get_footer();
?>

