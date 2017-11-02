<?php 


	function pizzeria_setup(){
		add_theme_support('post-thumbnails');

		add_image_size('nosotros', 437, 291, true);

	}

	add_action('after_setup_theme', 'pizzeria_setup');
	
	function pizzeria_styles(){

		//Registar estilos
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '7.0.0');
		wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900', array(), '1.0.0');
		wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array('normalize'), '4.7.0');
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
	
		//llamar los estilos
		wp_enqueue_style('normalize');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('style');

		// registar js

		wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array(), '1.0.0', true);

		wp_enqueue_script('jquery');
		wp_enqueue_script('scripts');

	}

	add_action('wp_enqueue_scripts', 'pizzeria_styles');

	
	//Creacion de Menus
	function pizzeria_menus(){

		register_nav_menus(array(

			'header-menu' => __('Header Menu', 'pizzeria'),
			'social-menu' => __('Social Menu', 'pizzeria')

		));
	
	}

	add_action('init', 'pizzeria_menus');

	add_action( 'init', 'pizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'pizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'pizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'pizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'pizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'pizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'pizzeria' ),
		'new_item'           => __( 'New Pizzas', 'pizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'pizzeria' ),
		'view_item'          => __( 'View Pizzas', 'pizzeria' ),
		'all_items'          => __( 'All Pizzas', 'pizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'pizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'pizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'pizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'pizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'pizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}
