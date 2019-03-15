<?php
/* Template Name:  home*/
echo "<section id ='shiny-template'>";
get_header();
get_template_part('partials/home-sliders');
get_template_part('partials/home-content');
// ob_start();
// $content = ob_get_clean();
// apply_filters( 'the_content', $content );
include("shiny-footer.php");
get_footer();
