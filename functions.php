<?php
function mychildtheme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' ); 


/*function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Crete+Round|Raleway', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );*/

?>