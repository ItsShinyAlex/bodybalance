<?php
    /* Template Name:  Ondas de Choque - ADS*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>

<section class="template-section" id="modelamiento">
    
    <div class="container">
        <h1 class="saqua uptown"><span class="mov-small">Modelamiento</span>  Corporal </h1>
            
        <div class="mov-hide">
            <div class="w-box">
                <p>Para este tratamiento utilizamos ondas de choque con Cellactor SC1® de Storz Medical™  tecnología suiza que permite la reducción de medidas en todo el cuerpo.</p>
            
            </div>
        </div>
        
      <div class="relaL">
            <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>
        
        
    </div>
     
</section>

<section class="template-section des-hid" id="t-modela-mov">
    
    <div class="container">
       <div class="center">
           
                 <p>Para este tratamiento utilizamos Ondas de Choque con el equipo Cellactor SC1® de Storz Medical™  tecnología suiza con resultados efectivos para reducción de medidas en todo el cuerpo.<br>
                 <b>Con este tratamiento trataremos la Celulitis,  mejorar el flujo sanguíneo local, reducir la flacidez,  atenuar las estrías  y rejuvenecer el rostro.</b>
                 </p>
                 
            
      
        </div>
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

<section class="template-section" id="video">
    
    <div class="container ">
      
       <div class="fcentered">
           
           
            <h2 class="saqua uptown">¿Cómo Funciona?</h2>
           
       </div>
       
       <div class="fcentered">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/gmjcwEabYLA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       
            
   
        
    </div>
     
</section>

<section id="utilizar" class="template-section">
     <div class="container">
     
     <h2 class="center" id="section-title" > <span class="uptown">Descubre el tratamiento</span><br>  para la celulitis, estrías, flacidez que llegó a la ciudad de México (CDMX)</h2>
     
     <p class="intro">Los resultados son una mejora significativa de la piel de naranja, la elasticidad, firmeza y textura de la piel, la reduce la circunferencia de muslos y cadera, a la vez que mejora el edema y la activa la circulación.</p>
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
               <p>Y es ideal para <b>tratar la celulitis,</b>  mejorar el flujo sanguíneo, reducir la flacidez,  atenuar las estrías  y rejuvenecer el rostro.</p>
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


<section id="listar-servicios" class="plantilla-seccion">
   <h2 >Costos del tratamiento <br>
<span>por zonas</span></h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" dis_posts_total="50" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="16"][/vc_column][/vc_row]');
    ?>
    
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
    get_footer('landing');
?>

