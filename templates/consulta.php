<?php
    /* Template Name:  Consulta Nutri*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section" id="tumeta">
    
    <div class="container center desktop-r-space">
        <h2 class="saqua uptown">¡Queremos que<br>
            <span class="big">logres tu meta!</span></h2>
            
        <div class="fcentered">
            <div class="w-box">
            <p>Te ofrecemos tu consulta médico nutricional
             personalizada, analizando composición corporal con tecnología InBody,
              estilo de vida y necesidades, 
              para obtener la mejor opción de tratamiento.
              <br>
                <br>
                 <b>Existen dos modalidades de Consulta:</b>
                 <br>
              <br>
              La consulta presencial (sólo en CDMX) y la consulta online disponible para toda la República Mexicana. Ambas tienen los mismos beneficios.  <b>¡Elige la que más te convenga!</b>
              </p>
              
              
              
            </div>
        </div>
        
        <div class="desktop-hide">
            <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
        </div>
        
    </div>
     
</section>

<section class="template-section" id="obtienes">
    <div class="container">
        <div class="flex ">
            <div class="col" id="pills">
                
            </div>
           
            <div class="col col-txt">
                <h2 class="saqua">¿Qué obtienes?
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/a-line.png" alt="-----">
                <ul>
                    <li>
                        <p>Atención médica profesional para perder peso sin riesgos para tu salud. </p>
                    </li>
                    <li>
                        <p>Creamos para ti un plan de alimentación totalmente personalizado con comidas fáciles de preparar y deliciosas. </p>
                    </li>
                    <li>
                        <p>Prescribimos los suplementos  si  los necesitas.  </p>
                    </li>
                    <li>
                        <p>Te orientamos en cuanto a la actividad física que puedes y necesitas realizar. </p>
                    </li>
                    <li>
                        <p>Realizamos educación nutrimental para ir establecer contigo hábitos alimenticios permanentes, que te ayuden a obtener resultados duraderos.</p>
                    </li>
                </ul>
            </div>
            
            
           
        </div>
    </div>
</section>

<section class="template-section" id="incluye">
    <div class="container">
        <div class="flex ">
           
           <div class="col col-txt">
                <h2 class="saqua">¿Qué incluye la consulta presencial y en línea?
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/a-line.png" alt="-----">
                <ul>
                    <li>
                        <p>Estudio de composición corporal InBody (% de grasa corporal, % de masa muscular, % grasa visceral, agua corporal, IMC, tasa metabólica basal, relación cintura cadera, etc.). </p>
                    </li>
                    <li>
                        <p>Plan de alimentación personalizado.
                         </p>
                    </li>
                    <li>
                        <p>Análisis de medidas antropométricas.
                        </p>
                    </li>
                    <li>
                        <p>Plicometria o toma de pliegues cutáneos. </p>
                    </li>
                    <li>
                        <p>Historial clínico médico-nutricio.</p>
                    </li>
                     <li>
                        <p>Análisis de tipo de cuerpo y de composición corporal.</p>
                    </li>
                     <li>
                        <p>Análisis de estilo de vida.
                        </p>
                    </li>
                     <li>
                        <p>Plan de alimentación personalizado de acuerdo a requerimientos y objetivos.</p>
                    </li>
                     <li>
                        <p>Recomendaciones generales de entrenamiento.</p>
                    </li>
                     <li>
                        <p>Catálogo de compras saludables.</p>
                    </li>
                     <li>
                        <p>Lista de súper.</p>
                    </li>
                    <li>
                        <p>Asesoría de suplementación (en caso de ser necesaria).</p>
                    </li>
                    <li>
                        <p>Seguimiento y asesoría continúa vía e-mail.</p>
                    </li>
                    <li>
                        <p>Toma de signos vitales.</p>
                    </li>
                </ul>
            </div>
           
            <div class="col" id="food">
                
            </div>
           
            
            
            
           
        </div>
    </div>
</section>




<!--
 <section class="template-section" id="clock">
  <div class="container">
       <div class="relative-top">
           <h2 class="uptown center">
              ¡Y te acompañaremos  hasta
                <br>
               <span class="big">
                   lograr la meta deseada!
               </span>
           </h2>
            <div class="flex">
                <div class="col">
                   <div class="fcentered">
                        <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/consulta/clock.png" alt="Reloj">
                   </div>
                   
                </div>
                
                <div class="col col-txt fcentered">
                    <ul>
                        <li>
                            <p><b> Primera Consulta: </b><br>(45 min aprox)</p>
                        </li>
                        <li>
                            <p> <b>Consecutivas:</b><br>(30 min) </p>
                        </li>
                    </ul>
                </div>
            </div>
       </div>
   
  </div>
</section>
-->
<section id="listar-servicios" class="plantilla-seccion">
   <h2 class="center uptown">¿Qué consulta médica nutricional o suplemento te interesa?</h2>
    <?php echo do_shortcode('[vc_row][vc_column][dt_products_carousel show_products="categories_products" order="asc" orderby="title" arrow_icon_size="25px" arrow_bg_width="36x" arrow_border_width="0px" arrows_bg_show="n" arrow_icon_color_hover="rgba(0,0,0,0.75)" arrow_bg_color_hover="#34afbc" r_arrow_icon_paddings="0px 0px 0px 0px" r_arrow_v_offset="0px" l_arrow_icon_paddings="0px 0px 0px 0px" l_arrow_v_offset="0px" category_ids="17"][/vc_column][/vc_row]');
    ?>
    
</section>

<section class="template-section" id="money">
  <div class="container">
      
       <div class="relative-top">
           
           <h2 id="clock-in" class="uptown center">
              ¡Y te acompañaremos  hasta
                <br>
               <span class="big">
                   lograr la meta deseada!
               </span>
           </h2>
            
            <div class="flex">
           
                <div class="col col-txt">
                   <div class="fcentered">
                       
                    <ul>
                        <li>
                            <p><b>Primera Consulta Médico Nutricional: </b><br>800 MXN</p>
                        </li>
                        <li>
                            <p><b>Consulta subsecuente:</b><br>750 MXN</p>
                        </li>
                        <li>
                            <p><b>Consulta Nutricional Embarazo: </b><br>1,000 MXN</p>
                        </li>
                        <li>
                            <p><b>Consulta Online </b><br>600 MXN</p>
                        </li>
                        <li>
                            <p><b>Asesoría Nutricional Pediátrica </b><br>650 MXN</p>
                        </li>
                        <p class="prepago">
                        ¡Consulta la promoción prepago!</p>
                        <div class="pad-top">
                            <a href="https://bodybalance.mx/tienda/consulta-nutricional/" class="btn-brown">¡ME INTERESA!</a>
                        </div>
                        
                    </ul>
                    
                    
                   </div>
                   
                   <div class="fcentered">
                       
                   </div>
                   
                   
                    
                   
                    
                </div>
                
                <div class="col">
                   <div class="fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/money.png" alt="Dinero en efectivo">
                   </div>
                   
                </div>
                
            </div>
       </div>
   
  </div>
</section>

<section class="template-section" id="howtopay">
    <div class="container">
        <div class="flex ">
            <div class="col" id="pills">
                <div class="fcentered"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/creditcard.png" alt="Tarjeta de crédito"></div>
            </div>
           
            <div class="col col-txt">
                <h2 class="">¿Cómo Pagar?
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/a-line.png" alt="-----">
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

