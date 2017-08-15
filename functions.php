<?php 
// The boldest scripts and styles ever
	function get_bold_jquery() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true);
	}
	function get_bold_scripts() {
		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), true);
		wp_enqueue_script('angular', get_template_directory_uri() . '/js/angular.min', array('jquery'), true);
		wp_register_script('tether',  'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4.0', true);
		wp_enqueue_script('tether');
		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', false, '4.0.0-alpha.6', true);
		wp_enqueue_script('bootstrap-js');
	}
	function get_bold_styles() {
		// Styles
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style('sass', get_template_directory_uri() . '/css/sass.css' );
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css' );
		wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Work+Sans:900');
		
	}
	add_action('wp_enqueue_scripts', 'get_bold_jquery');
	add_action('wp_enqueue_scripts', 'get_bold_scripts');
	add_action('wp_enqueue_scripts', 'get_bold_styles');

// ACF Options Page
	if( function_exists('acf_add_options_page') ) {
	    acf_add_options_page();
	    acf_add_options_sub_page('Sidebar');
	    acf_add_options_sub_page('Header');
	    acf_add_options_sub_page('Footer');

	    acf_add_options_page(array(
	          'page_title'      => 'Theme Options',
	          'menu_title'      => 'Theme Options',
	          'menu-slug'       => 'theme-options',
	          'capability'      => 'edit_posts',
	          'parent-slug'     => '',
	          'position'        => false,
	          'icon_url'        => false,
	          'redirect'        => false
	    ));
	    acf_add_options_sub_page(array(
	          'page_title'      => 'Sidebar',
	          'menu_title'      => 'Sidebar',
	          'menu-slug'       => 'theme-options-sidebar',
	          'capability'      => 'edit_posts',
	          'parent-slug'     => 'theme-options',
	          'position'        => false,
	          'icon_url'        => false,
	    ));
	    acf_add_options_sub_page(array(
	          'page_title'      => 'Header',
	          'menu_title'      => 'Header',
	          'menu-slug'       => 'theme-options-header',
	          'capability'      => 'edit_posts',
	          'parent-slug'     => 'theme-options',
	          'position'        => false,
	          'icon_url'        => false,
	    ));
	    acf_add_options_sub_page(array(
	          'page_title'      => 'Footer',
	          'menu_title'      => 'Footer',
	          'menu-slug'       => 'theme-options-footer',
	          'capability'      => 'edit_posts',
	          'parent-slug'     => 'theme-options',
	          'position'        => false,
	          'icon_url'        => false,
	    ));
	}
?>