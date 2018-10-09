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
        
       <!-- <div class="relaL">
            <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>-->
        
        
    </div>
     
</section>

<section id="queson" class="template-section">
     <div class="container">
    <div class="grid">
        <div class="col">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/modelamiento/que_son.png" alt="-----">
        </div>
         <div class="col">
            <h2>¿Qué son las
<span class="ondas">ONDAS</span> 
<span class="choque">DE CHOQUE?</span></h2>
       <p>Son ondas acústicas de gran energía que penetran en la profundidad de los tejidos, actúan directamente aumentando la permeabilidad de las células para permitir la extracción de la grasa de la celulitis sin romper o dañar los tejidos a diferencia de otras tecnologías, las ondas de choque activan la circulación, los factores de crecimiento, las células madre y la producción de colágeno y elastina.</p>
       <p><strong>¡No es doloroso y prestigiosos dermatólogos europeos y americanos comprobaron su eficacia!</strong></p>
        </div>
    </div>
    </div>
</section>

<section id="utilizar" class="template-section">
     <div class="container">
    <div class="grid">
        <div class="col">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/modelamiento/utilizar.png" alt="-----">
        </div>
         <div class="col">
            <h2>¿Y en que zonas puede utilizarse?</h2>
       <p>Cellactor SC1 está indicado para tratar <strong>zonas con depósitos de grasa</strong> en:</p>
       <ul>
           <li>cara</li>
           <li>brazos</li>
           <li>abdomen</li>
           <li>espalda alta y baja</li>
           <li>flancos</li>
           <li>glúteos</li>
           <li>muslos anteriores y posteriores</li>
           <li>pantorrillas</li>
       </ul>
        </div>
    </div>
    </div>
</section>

<section class="template-section" id="mejores">
    <div class="container">
    <h2>Para mejores resultados en todas las zonas</h2>
    <p>Se recomiendan como mínimo 7 sesiones siendo estas distribuidas 1 sesión por semana y después del tratamiento utilizar de protector solar FPS 50 para proteger la piel. </p>
    </div>
</section>

<!--
<section class="template-section mov-hide" id="mc-des">
   <div class="center fcentered container col-type">
       <p>Con este tratamiento lograremos  erradicar celulitis,  mejorar el flujo sanguíneo, reducir la flacidez,  atenuar las estrías  y rejuvenecer el rostro.</p>
       
   </div>
    
</section>-->


<section id="listar-servicios" class="plantilla-seccion">
   <h2 >Beneficios <br>
<span>y contradiciones por zonas</span></h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" dis_posts_total="50" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="16"][/vc_column][/vc_row]');
    ?>
    
</section>
<!--
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

</section>-->




<section class="template-section blue-howtopay" id="howtopay">
    <div class="container">
        <div class="flex ">
            <div class="col" id="pills">
                <div class="fcentered"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/modelamiento/tarjeta.png" alt="Tarjeta de crédito"></div>
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
            <pre>
            
            <div class="video-responsive" style=""><iframe   src="https://www.youtube.com/embed/gmjcwEabYLA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
            
            </pre>
           
        
    </div>
</section>






<?php 
    include("shiny-footer.php");
    get_footer();
?>

