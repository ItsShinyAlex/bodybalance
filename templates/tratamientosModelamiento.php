<?php
    /* Template Name:  Tratamientos - modelamiento*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section" id="modelamiento">
    
    <div class="container">
        <h1 class="saqua uptown">Modelamiento Corporal
            </h1>
            
        <div class="">
            <div class="w-box">
            <p>Para este tratamiento utilizamos ondas de choque con Cellactor SC1® de Storz Medical™  tecnología suiza con resultados rápidos y efectivos para reducción de medidas en todo el cuerpo.
            
            
            
            </div>
        </div>
        
        <div class="relaL">
            <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>
        
        
    </div>
     
</section>



<section class="template-section mov-hide" id="mc-des">
   <div class="center fcentered container col-type">
       <p>Con este tratamiento lograremos  erradicar celulitis,  mejorar el flujo sanguíneo, reducir la flacidez,  atenuar las estrías  y rejuvenecer el rostro.</p>
       
   </div>
    
</section>


<section id="listar-servicios" class="plantilla-seccion">
   <h2 class="center uptown">¿Qué modelamiento corporal te interesa?</h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" dis_posts_total="50" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="16"][/vc_column][/vc_row]');
    ?>
    
</section>

<section class="template-section payschedule pork">
    <div class="container">
        <div class="flex">
            <div class="col fcentered center">
               <h2 class="uptown">¡Resultados desde la primera Sesión!</h2>
            </div>
            
            
            <div class="col fcentered center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/money.png" alt="Costo">
                
                <p class="smallest">desde</p>
                <p><b>$1800.00</b></p>
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

