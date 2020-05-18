<?php
  	/*
      Plugin Name: Joyerias AFN Post Types & Taxonomies
      Plugin URI:
      Description: Adds Custom Post Types to site.
      Version: 1.0
      Author: Frank Cunza
      license: HDJW
      License URI: ww.google.com
      */
    add_action('init', 'Inicio', 0);
	add_action('init', 'earrings_post_types', 0);
	add_action('init', 'rings_post_types', 0);
	add_action('init', 'necklaces_post_types', 0);
    add_action('init', 'aretes_taxonomy');

    function Inicio(){
        register_post_type( 'Inicio', 
            array(
                'labels' => array(
                    'name' => __('Inicio'),
                    'singular_name' => __('Inicio')
                    ),
                'public' => true,
                'has_archive' => true
            )
        );
    }



function earrings_post_types() {
	//labels
	$labels = array(
		'name'					=> _x( 'Aretes', 'Post Type General Name', 'gourmet-artist' ),
		'singular-name' 		=> _x( 'Aretes', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name' 			=> __( 'Aretes', 'gourmet-artist' ),
		'parent_item_colon' 	=> __( 'Parent Arete', 'gourmet-artist' ),
		'all_items'				=> __( 'Todos los Aretes', 'gourmet-artist' ),
		'view_item' 			=> __( 'View type', 'gourmet-artist' ),
		'add_new_item'			=> __( 'Agregar nuevo tipo', 'gourmet-artist' ),
		'add_new' 				=> __( 'Agregar nuevo Arete', 'gourmet-artist' ),
		'edit_item'				=> __( 'Edit Recipe', 'gourmet-artist' ),
		'update_item'			=> __( 'Update type', 'gourmet-artist' ),
		'search_items'			=> __( 'Search type', 'gourmet-artist' ),
		'not_found'				=> __( 'Not Recipes Found', 'gourmet-artist' ),
		'not_found_in_trash' => __( 'Not Found in Trash', 'gourmet-artist' ),
	);
	
	//Another Customizations
	$args = array(
		'label'  		=> __( 'Aretes', 'gourmet-artist'),
		'description' 	=> __( 'Aretes for gourmet Artistry', 'gourmet-artist'),
		'labels'			=> $labels,
		'supports' 		=> array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'hierarchical' => false,
		'pubic'			=> true,
		'show_ui'		=> true,
		'show_in_menus'=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'  	=> true,
		'show_position'			=> 5,
		'menu_icon'					=> 'dashicons-admin-page',
		'can_export'				=> true,
		'has_archive'				=> true,
		'exclude_from_search'	=> false,
		'capability_type'				=> 'page',
		//insertar codigo para single-{$posttype}
        	'publicly_queryable'    => true,

	);


	// register the post type
	register_post_type( 'earrings', $args);
}



function rings_post_types() {
	//labels
	$labels = array(
		'name'					=> _x( 'Anillos', 'Post Type General Name', 'gourmet-artist' ),
		'singular-name' 		=> _x( 'Anillos', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name' 			=> __( 'Anillos', 'gourmet-artist' ),
		'parent_item_colon' 	=> __( 'Parent Arete', 'gourmet-artist' ),
		'all_items'				=> __( 'Todos los Anillos', 'gourmet-artist' ),
		'view_item' 			=> __( 'View type', 'gourmet-artist' ),
		'add_new_item'			=> __( 'Agregar nuevo tipo', 'gourmet-artist' ),
		'add_new' 				=> __( 'Agregar nuevo Anillo', 'gourmet-artist' ),
		'edit_item'				=> __( 'Editar Anillo', 'gourmet-artist' ),
		'update_item'			=> __( 'Update type', 'gourmet-artist' ),
		'search_items'			=> __( 'Search type', 'gourmet-artist' ),
		'not_found'				=> __( 'Not Recipes Found', 'gourmet-artist' ),
		'not_found_in_trash' => __( 'Not Found in Trash', 'gourmet-artist' ),
	);
	
	//Another Customizations
	$args = array(
		'label'  		=> __( 'Anillos', 'gourmet-artist'),
		'description' 	=> __( 'Anillos for gourmet Artistry', 'gourmet-artist'),
		'labels'			=> $labels,
		'supports' 		=> array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'hierarchical' => false,
		'pubic'			=> true,
		'show_ui'		=> true,
		'show_in_menus'=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'  	=> true,
		'show_position'			=> 5,
		'menu_icon'					=> 'dashicons-admin-page',
		'can_export'				=> true,
		'has_archive'				=> true,
		'exclude_from_search'	=> false,
		'capability_type'				=> 'page',
		//insertar codigo para single-{$posttype}
        	'publicly_queryable'    => true,
	);


	// register the post type
	register_post_type( 'rings', $args);
}





//taxonomia avanzada

function aretes_taxonomy(){
	$labels = array(
		'name'					=> _x( 'Categorias de aretes', 'Post Type General Name' ),
		'singular-name' 		=> _x( 'Categorias de aretes', 'Post Type Singular Name' ),
		'menu_name' 			=> __( 'Categorias de aretes', 'gourmet-artist' ),
		'parent_item_colon' 	=> __( 'Parent Meal Type Dos' ),
		'all_items'				=> __( 'All Meal Type Dos' ),
		'update_item'			=> __( 'Update Meal Type' ),
		//'view_item' 			=> __( 'View Meal Type Dos', 'gourmet-artist' ),
		'add_new_item'			=> __( 'Add New Meal Type Dos' ),
		//'add_new' 				=> __( 'Add New Meal Type Dos', 'gourmet-artist' ),
		//'edit_item'				=> __( 'Edit Meal Type Dos', 'gourmet-artist' ),
		'update_item'			=> __( 'Update Meal Type Dos' ),
		'search_items'			=> __( 'Search Meal Type Dos' ),
		'new_item_name'		=> __( 'New Meal Type' ),
		'edit_item'				=> __( 'Edit Meal Type' ),
		//'not_found'				=> __( 'Not Meal Type Dos Found', 'gourmet-artist' ),
		//'not_found_in_trash' => __( 'Not Found in Trash', 'gourmet-artist' ),
	);

	$args = array(
		'hierarchical' 		=> true, 
		'labels'					=> $labels,
		'show_ui'				=> true, //add the default UI to this taxonomy
		'show_admin_column'	=> true, //add the taxonomies to the wordpress admin
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => 'meal'),
	);
	register_taxonomy( 'tipos-de-aretes', 'earrings', $args );
}







function necklaces_post_types() {
	//labels
	$labels = array(
		'name'					=> _x( 'Collares', 'Post Type General Name', 'gourmet-artist' ),
		'singular-name' 		=> _x( 'Collares', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name' 			=> __( 'Collares', 'gourmet-artist' ),
		'parent_item_colon' 	=> __( 'Parent Collar', 'gourmet-artist' ),
		'all_items'				=> __( 'Todos los Collares', 'gourmet-artist' ),
		'view_item' 			=> __( 'View type', 'gourmet-artist' ),
		'add_new_item'			=> __( 'Agregar nuevo tipo', 'gourmet-artist' ),
		'add_new' 				=> __( 'Agregar nuevo collar', 'gourmet-artist' ),
		'edit_item'				=> __( 'Editar collar', 'gourmet-artist' ),
		'update_item'			=> __( 'Update type', 'gourmet-artist' ),
		'search_items'			=> __( 'Search type', 'gourmet-artist' ),
		'not_found'				=> __( 'Not Recipes Found', 'gourmet-artist' ),
		'not_found_in_trash' => __( 'Not Found in Trash', 'gourmet-artist' ),
	);
	
	//Another Customizations
	$args = array(
		'label'  		=> __( 'Collares', 'gourmet-artist'),
		'description' 	=> __( 'Collares for gourmet Artistry', 'gourmet-artist'),
		'labels'			=> $labels,
		'supports' 		=> array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'hierarchical' => false,
		'pubic'			=> true,
		'show_ui'		=> true,
		'show_in_menus'=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'  	=> true,
		'show_position'			=> 5,
		'menu_icon'					=> 'dashicons-admin-page',
		'can_export'				=> true,
		'has_archive'				=> true,
		'exclude_from_search'	=> false,
		'capability_type'				=> 'page',
		//insertar codigo para single-{$posttype}
        	'publicly_queryable'    => true,
	);


	// register the post type
	register_post_type( 'necklaces', $args);
}