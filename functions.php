<?php
require_once get_stylesheet_directory() . "/class.wp-auto-theme-update.php";


function theme_js() {
    wp_enqueue_script( 'scrollreveal', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

// -------------------------------------------------------
// Desactivar opciones del menu del dashboard de Wordpress
// -------------------------------------------------------

function remove_menus(){
  
  remove_menu_page( 'edit.php?post_type=cms_block' );          //HTML BLOCKS
  remove_menu_page( 'edit.php?post_type=woodmart_size_guide' );          //	 WOODMART SIZE GUIDE
  remove_menu_page( 'edit.php?post_type=portfolio' );
  remove_menu_page( 'woodmart_dashboard' );  // DUMMY CONTENT
  remove_menu_page( 'edit.php?post_type=woodmart_sidebar' );
}
add_action( 'admin_menu', 'remove_menus', '999' );