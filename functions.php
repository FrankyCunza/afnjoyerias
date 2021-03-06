<?php 


function part( $name, $suffix = ''){
    get_template_part('parts/' . $name, $suffix);
}


function wp_jquery_manager_plugin_front_end_scripts() {
    $wp_admin = is_admin();
    $wp_customizer = is_customize_preview();

    // jQuery
    if ( $wp_admin || $wp_customizer ) {
        // echo 'We are in the WP Admin or in the WP Customizer';
        return;
    }
    else {
        // Deregister WP core jQuery, see https://github.com/Remzi1993/wp-jquery-manager/issues/2 and https://github.com/WordPress/WordPress/blob/91da29d9afaa664eb84e1261ebb916b18a362aa9/wp-includes/script-loader.php#L226
        wp_deregister_script( 'jquery' ); // the jquery handle is just an alias to load jquery-core with jquery-migrate
        // Deregister WP jQuery
        wp_deregister_script( 'jquery-core' );
        // Deregister WP jQuery Migrate
        wp_deregister_script( 'jquery-migrate' );

        // Register jQuery in the head
        wp_register_script( 'jquery-core', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js', array(), null, false );

        wp_register_script( 'jquery', false, array( 'jquery-core' ), null, false );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_jquery_manager_plugin_front_end_scripts' );


function esilos_y_js(){
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
	wp_register_script('owlcarousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0.0',true);
	wp_register_script('scripts',get_template_directory_uri().'/scripts.js', array('jquery'),'1.0.0',true);

	wp_enqueue_script('owlcarousel');
	wp_enqueue_script('scripts');


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

	
/**
 * Sets the extension and mime type for .webp files.
 *
 * @param array  $wp_check_filetype_and_ext File data array containing 'ext', 'type', and
 *                                          'proper_filename' keys.
 * @param string $file                      Full path to the file.
 * @param string $filename                  The name of the file (may differ from $file due to
 *                                          $file being in a tmp directory).
 * @param array  $mimes                     Key is the file extension with value as the mime type.
 */
add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_webp', 10, 4 );
function wpse_file_and_ext_webp( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }

    return $types;
}

/**
 * Adds webp filetype to allowed mimes
 * 
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes
 * 
 * @param array $mimes Mime types keyed by the file extension regex corresponding to
 *                     those types. 'swf' and 'exe' removed from full list. 'htm|html' also
 *                     removed depending on '$user' capabilities.
 *
 * @return array
 */
add_filter( 'upload_mimes', 'wpse_mime_types_webp' );
function wpse_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}