<?php
    /* Template Name: Who we are */
echo "<section id ='shiny-template'>";
    get_header();
?>




<section class="template-section" id="office">

    <div class="container center">
        <h2 class="saqua uptown">Body Balance</h2>

        <div class="fcentered">
            <div class="w-box">
            <p>Somos un centro integral de nutrición y metabolismo. Ofrecemos consulta con enfoque médico-nutricional, venta de suplementos y tratamientos complementarios cómo modelado corporal, faciales y depilación laser diodo. </p>
            </div>
        </div>

        <div class="fcentered">
             <div class="desktop-hide relative-top">
                <a href="#contacto" class="btn-brown">¡ME INTERESA!</a>
            </div>
        </div>

    </div>

</section>

<section class="template-section" id="atendido">
    <div class="container">
        <div class="flex">
            <div class="col fcentered">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/green-healthy.jpg" alt="Dieta verde, ejercicio y programa">
            </div>
            <div class="col fcentered mov-hid">
                <p>Atendido por médicos especializados en nutrición, nuestro centro es un espacio para perder peso y medidas, sin pasar hambre y sin poner en riesgo tu salud.  </p>
            </div>
        </div>
    </div>
</section>

<section class="template-section" id="queremos">
    <div class="container">
        <div class="flex">
            <div class="col col-txt">
                <h2 class="">¡Queremos que lo logres!
                </h2>
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consulta/a-line.png" alt="-----">
                <p class="">
                    Por eso te ayudamos con menús fáciles de cocinar, rápidos y deliciosos, fármacos (si los requieres) y asesoría de ejercicio físico, según tu edad, necesidades y limitaciones.
                </p>
                <p class=""><b>Además de la más alta tecnología en tratamientos de modelado corporal, faciales y depilación definitiva. </b></p>

            </div>
            <div class="col" id="team">
                <div class="relative-top">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/apple-smile.jpg" alt="Chica con manzana, agua y ropa deportiva">
                </div>
            </div>

            <div class="col col-txt fcentered des-hid">
                <p>Atendido por médicos especializados en nutrición, nuestro centro es un espacio para perder peso y medidas, sin pasar hambre y sin poner en riesgo tu salud.  </p>
            </div>


        </div>
    </div>
</section>

<section class="template-section" id="mision">
    <div class="container">
        <div class="flex">

            <div id="girl-mision" class="col title fcentered">

            </div>

            <div class="col col-txt fcentered">
                <div class="">
                    <h2 class="uptown">Misión</h2>
                    <p>Brindar a los pacientes consultas de nutrición clínica integral  para enseñarlos a comer de forma adecuada y lograr sus metas con seguridad sin riesgos en la salud. Ofreciendo al mismo tiempo tecnología de punta en tratamientos complementarios cómo modelado corporal, faciales y depilación definitiva.</p>
                </div>



            </div>
        </div>
    </div>
</section>



<section class="template-section" id="vision">
    <div class="container">
        <div class="flex">


            <div class="col col-txt fcentered">
            <div class="">

                   <h2 class="uptown">Visión</h2>
                    <p>
                    Ser el primer lugar en México especializado en el tratamiento clínico integral, la instalación de hábitos alimenticios y auto cuidado para que nuestros pacientes puedan conseguir resultados efectivos y duraderos, causando un verdadero impacto en la salud.
                    </p>

            </div>

            </div>

            <div id="boy-vision" class="col title fcentered">

            </div>


        </div>
    </div>
</section>

<section class="template-section" id="valores">
    <div class="container">
        <div class="left">
            <h2 class="uptown">Valores</h2>
            <ul>
                <li>
                    <p>Honestidad</p>
                </li>

                <li>
                    <p>Ética</p>
                </li>

                <li>
                    <p>Profesionalismo</p>
                </li>

                <li>
                    <p>Amor</p>
                </li>

                <li>
                    <p>Respeto</p>
                </li>
            </ul>
        </div>
    </div>
</section>



<?php
    include("shiny-footer.php");
    get_footer();
?>
