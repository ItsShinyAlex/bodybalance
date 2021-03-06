<section id="contacto">
    <div class="container">
        <div class="flex">
            <div class="col c-col">
                <h2>
                  ¡Contáctanos
                   <br>
                    <span class="uptown saqua">
                        Hoy mismo!
                    </span>
                </h2>
                
                <div id="cform">
                     <!--Ajuste de formulario segun la página Web -->
                     <?php 
                        if(is_page_template('landing-ads/consulta.php')){
                            echo do_shortcode('[caldera_form id="CF5c4696b8b6d43"]');
                        }
                        else if(is_page_template('landing-ads/depilacion.php')){
                            echo do_shortcode('[caldera_form id="CF5c469b661f564"]');
                        }
                         else if(is_page_template('landing-ads/consulta-online.php')){
                           echo do_shortcode('[caldera_form id="CF5c469ca24fe7d"]'); 
                        }
                    
                      else if(is_page_template('landing-ads/ondasdechoque.php')){
                           echo do_shortcode('[caldera_form id="CF5c46ba6bc93e3"]'); 
                        }
                    
                        
                     ?>
                </div>
                
                
                <div id="responsable" class="" >
                    <p>Responsable sanitario: </p> <p> Dra. Berenice Antonia Ramírez Solís</p>
                    <p>Cédula: 10570872</p>
                    <p>IPN</p>
                </div>
                
            </div>
            
            
            
            <div class="col" id="mapa">

                <div class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.png" alt="WhatsApp">
                    </div>
                    <div class="col txt ">
                        <p class="white phone">
                            <a class="white" href="https://wa.me/525519587101">5519587101</a><br>
                        </p>
                    </div>
                </div>
               
                <div class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="teléfono">
                    </div>
                    <div class="col txt">
                        <p class="white phone">
                            <a class="white" href="tel:5513282907">01 (55) 1328 2907</a>
                        </p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="horario">
                    </div>
                    <div class="col txt fcentered">
                        <p >Lunes a Viernes de 9 a.m. 8 p.m. 
                        Sábado de 8 a.m. a  5 p.m.</p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ubicacion.png" alt="ubicación">
                    </div>
                    <div class="col txt fcentered">
                                         
                        <p>
                            Torre Médica Tuxpan Núm. 8, Col Roma Sur, Ciudad de México (CDMX), Piso 2 C.P 06760 Estamos a 40 metros del Metro Chilpancingo
                        </p>
                    </div>
                </div>
                
                <div class="flex mar-bot" id="followus">
                    <div class="col txt fcentered" id="siguenos">
                       <a href="https://www.facebook.com/bodybalance.cdmx/" target="_blank"><p><b>SÍGUENOS</b></p></a>
                        
                    </div>
                    <div class="col icon fcentered">
                       <a href="https://www.facebook.com/bodybalance.cdmx/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/face.png" alt="Facebook"></a>
                       
                    </div>
                    <div class="col icon fcentered " id="youtube">
                       <a href="https://www.youtube.com/channel/UCnfO3P1oyAz3mT7ZQdSugUg" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube-symbol.svg" alt="YouTube"></a>
                       
                    </div>
                    <div class="col icon fcentered">
                       <a href="https://www.instagram.com/bodybalance.mx/?hl=es-la" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram-logo.png" alt="Instagram"></a>
                       
                    </div>
                </div>
                
                <div class="mar-bot pad-left">
                    <a href="https://goo.gl/maps/GapxsnfqX7y" class="btn-saqua" target="_blank">¿Cómo llegar?</a>    
                </div>           
            </div>
            
            
            
        </div>
        
                       
    </div>
    


</section>

    <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5zroulJQaFiw4Kp6m95x6tNrEkQAKDO0";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

</section>


<?php wp_footer() ?>