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



	add_action( 'init', function() {
		remove_post_type_support( 'post', 'editor' );
		remove_post_type_support( 'page', 'editor' );
	}, 99);




	//registrar menu y menu redes sociales
	if(!function_exists('registrar_menu')):
		function registrar_menu(){
			register_nav_menus(array(
				'main_menu'=>__('Menu Principal', 'modus'),
				'social_menu'=>__('Menu Redes Sociales', 'modus')
			));
		}

	endif;

	add_action('init','registrar_menu');

	require_once 'common.php';

	
