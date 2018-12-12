<?php
    /* Template Name: Cavitacion */ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section centered-banner" id="cavitacion">
    
    <div class="container ">
       
       
       <div class="toright">
           <h2 class="right saqua uptown">Cavitación</h2>
       </div>
        
           <div class="toright">
               <div class="toright">
                    <div class="w-box">
                    <p>La cavitación ultrasónica es un proceso hidromecánico producido por ondas de baja  frecuencia y alta intensidad de energía. 
                    <br><br>
                    Crea cavidades (microburbujas) entre el tejido graso colapsando el adipocito al paso de los días.  
                    </p>
                    </div>
                </div>
           </div>
            
        
        
        <div class="fcentered">
             <div class="desktop-hide relative-top">
                <a href="#info" class="btn-brown">¡ME INTERESA!</a>
            </div>
        </div>
        
    </div>
     
</section>

<section class="template-section aqua-back" id="info">
    
    <div class="container center">
        <p>Esta técnica no invasiva reafirma los músculos, rompe las estructuras de depósitos localizados de grasa. y te ofrece excelentes  resultados en pocas sesiones. </p>
        
    </div>
     
</section>

<section class="template-section llist" id="cuantas-sesiones">
    <div class="container">
             
        <div class="flex ">
           
           <div class="col col-txt">
                <h2 class="saqua">¿En cuántas sesiones?
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/a-line.png" alt="-----">
                <p>Las sesiones son semanales y toman <b>20 minutos por zona</b>. </p>
                
                <p>Se observan resultados a partir de la primera sesión, sin embargo, para ver resultados significativos son necesarias <b>al menos 8 sesiones.</b> </p>
            </div>
           
            <div class="col" id="">
               
               <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cavita/sesiones.jpg" alt="Cavitación electrónica en abdomen">
               </div>
               
            </div>      
           
        </div>
    </div>
</section>

<section class="template-section" id="secundarios">
    <div class="container center">

            <div class="fcentered">
                <h2 class="saqua">Efectos Secundarios
                </h2>
            </div>
                
                  <p><b>En la zona tratada en algunos casos se observa:  </b><br>
                 Enrojecimiento, edema, piel frágil, hematoma, dolor.</p>
        

    </div>
</section>


<section class="template-section r-list" id="contra">
    <div class="container">
        <div class="flex ">
            <div class="col" id="">
               
               <div class="fcentered">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radio/cicatriz.jpg" alt="mujer con cicatriz">
               </div>
               
                
            </div>
           
            <div class="col col-txt">
                <h2 class="saqua">Contraindicaciones de
                este tratamiento:
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radio/b-line.png" alt="-----">
                <ul class="bluedots">
                    <li>
                        <p>Periodo menstrual, embarazo y </p>
                    </li>
                    <li>
                        <p>lactancia</p>
                    </li>
                    <li>
                        <p>Fiebre.    </p>
                    </li>
                    <li>
                        <p>Enfermedades hepáticas, hipertensión 
                           arterial grave. hiperlipidemia o diabetes
                           mellitus. </p>
                    </li>
                    <li>
                        <p>Problemas circulatorios y linfáticos.</p>
                    </li>
                     <li>
                        <p>Marcapasos e ingertos metálicos.</p>
                    </li>
                     <li>
                        <p>Heridas o inflamación en zona a tartar. 
                            </p>
                    </li>
            
                </ul>
            </div>
            
            
           
        </div>
    </div>
</section>

<section id="listar-servicios" class="plantilla-seccion">
   <h2 class="center uptown">Costos y Paquetes de Cavitación</h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="17"][/vc_column][/vc_row]');
    ?>
    
</section>




<section class="template-section pad-top-section dark-back" id="howtopay">
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


