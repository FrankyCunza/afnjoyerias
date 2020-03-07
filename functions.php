<?php 
    function esilos_y_js(){
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
    }
	add_action('wp_enqueue_scripts', 'esilos_y_js');
	

	//Ocultar barra de herramientas para los usuarios 
	add_action('after_setup_theme', 'remove_admin_bar');

	function remove_admin_bar() {

		if (!current_user_can('administrator') && !is_admin()) {

			show_admin_bar(false);

		}

	}



?>