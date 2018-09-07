<?php
    /* Template Name:  Tratamientos - depilacion*/ 
    echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section" id="t-depilaciones">
    
    <div class="container desktop-center">
        <h1 class="saqua uptown">Depilación con 
            Láser Diodo
            </h1>
        
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Tratamientos/light.png" alt="LightSheer">
            
        <div class="fcentered fcentered-mov">
           
           
            <div class="w-box">
            <p>Es una depilación definitiva  que puedes aplicar en todas las áreas del cuerpo para eliminar de una vez por todas, ese vello que tanto te molesta en menos sesiones y virtualmente sin dolor.</p>
            
            
            
            </div>
        </div>
        
        <div class="desktop-hide">
            <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>
        
    </div>
     
</section>

<section class="template-section payschedule pork">
    <div class="container">
        <div class="flex">
            <div class="col fcentered center">
               <h2 class="uptown">¡Disminución del vello desde la primera Sesión!</h2>
            </div>
            
            
            <div class="col fcentered center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/money.png" alt="Costo">
                

                <p><b>Según el área a depilar</b></p>
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

