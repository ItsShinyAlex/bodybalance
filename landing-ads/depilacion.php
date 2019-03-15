<?php
    /* Template Name:  Depilación ADS*/     
echo "<section id ='shiny-template'>";
    get_header();

?>


<section class="template-section" id="t-depilaciones">
    
    <div class="container desktop-center">
        <h1 class="saqua uptown">Depilación con Láser Diodo</h1>
        
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

<section class="template-section" id="video">
    
    <div class="container ">
      
       <div class="fcentered">       
           
            <h2 class="saqua uptown">Descubre la depilación definitiva láser diodo <br> <span class="highl">que ofrece LightSheer</span> </h2>
           
       </div>
       
       <div class="fcentered">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/SNPATwrMtEY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
    </div>
     
</section>



<section id="listar-servicios" class="plantilla-seccion">
   <h2 class="center uptown">¿Qué zona te interesa depilarte? </h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" dis_posts_total="50" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="26"][/vc_column][/vc_row]');
    ?>
    
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

<?php echo do_shortcode( '[text_block id=981 description="faq_depilacion"]' ); ?>

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
    get_footer("landing");
?>

