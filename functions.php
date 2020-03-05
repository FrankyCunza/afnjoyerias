<?php 
    function esilos_y_js(){
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
    }
    add_action('wp_enqueue_scripts', 'esilos_y_js');
?>