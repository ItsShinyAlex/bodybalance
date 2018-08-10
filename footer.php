<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the <div class="wf-container"> and all content after
 *
 * @package The7
 * @since 1.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//my code below - Shiny Alex
?>


<section id="contacto">
    <div class="container">
        <div class="flex">
            <div class="col">
                <h2>
                  ¡Contáctanos
                   <br>
                    <span class="uptown saqua">
                        Hoy mismo!
                    </span>
                </h2>
                
                <p class="pad-top">
                    Coméntanos que servicio te interesa y te pondremos en contacto con el profesional que necesitas:
                </p>
                
                <div class="flex">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" alt="email">
                    </div>
                    <div class="col txt fcentered">
                        
                         <a href="mailto:contacto@bodybalance.com?subject=Contacto%20Bodybalance"><p class="big">contacto@bodybalance.com</p></a>.
                    </div>
                </div>
                
                
            </div>
            
            
            
            <div class="col" id="mapa">
               
                <div class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="teléfono">
                    </div>
                    <div class="col txt">
                        <p></p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="horario">
                    </div>
                    <div class="col txt fcentered">
                        <p >Lunes a Viernes de 9 a.m. 6 p.m. 
                        Sábado de 8 a.m. a  3 p.m.</p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ubicacion.png" alt="ubicación">
                    </div>
                    <div class="col txt fcentered">
                        <p>Torre Médica Tuxpan Núm. 8, Col Roma Sur, CDMX, Piso 2 </p>
                    </div>
                </div>
                
                <div class="flex mar-bot">
                    <div class="col txt fcentered" id="siguenos">
                       <a href=""><p><b>SÍGUENOS</b></p></a>
                        
                    </div>
                    <div class="col icon fcentered">
                       <a href=""> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/face.png" alt="Facebook"></a>
                       
                    </div>
                </div>
                
                <div class="mar-bot pad-left">
                    <a href="https://goo.gl/maps/nM1zqkPgoXM2" class="btn-saqua">¿Cómo llegar?</a>    
                </div>
                
                
                <div class="fcentered">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120420.42766091891!2d-99.23777765175241!3d19.406426783795524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x85d1ff1534d5d0a3%3A0x3d22cb1270c1a80b!2sTORRE+MEDICA+TUXPAN%2C+06760%2C+Tuxpan+18%2C+Roma+Sur%2C+Ciudad+de+M%C3%A9xico%2C+CDMX!3m2!1d19.4064402!2d-99.16773719999999!5e0!3m2!1ses-419!2smx!4v1533687371342" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
            
            
        </div>
    </div>
</section>

<?php
if ( presscore_is_content_visible() ): ?>

			</div><!-- .wf-container -->
		</div><!-- .wf-wrap -->
	</div><!-- #main -->

	<?php
	if ( presscore_config()->get( 'template.footer.background.slideout_mode' ) ) {
		echo '</div>';
	}
	?>

<?php endif // presscore_is_content_visible ?>

	<?php do_action( 'presscore_after_main_container' ) ?>
	
	

	<a href="#" class="scroll-top"><span class="screen-reader-text"><?php esc_html_e( 'Go to Top', 'the7mk2' ) ?></span></a>

</div><!-- #page -->

<?php wp_footer(); 
    
?>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
   
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
 
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
 
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>