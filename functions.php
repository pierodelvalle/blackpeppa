<?php 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function token_scripts() {
	wp_enqueue_style('style.css', get_stylesheet_uri());
	wp_enqueue_style('fancybox-style', get_template_directory_uri().'/node_modules/fancybox/dist/jquery.fancybox.min.css');
	wp_enqueue_style('slick-style', get_template_directory_uri().'/node_modules/slick/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri().'/node_modules/slick/slick-theme.css');
	wp_enqueue_style('columns', get_template_directory_uri().'/css/columns.css');
	wp_enqueue_script('jquery-script', get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js', array(), '1.0.0', false);
	wp_enqueue_script('fancybox-script', get_template_directory_uri().'/node_modules/fancybox/dist/jquery.fancybox.min.js', array(), '1.0.0', true);
	wp_enqueue_script('slick-script', get_template_directory_uri().'/node_modules/slick/slick.min.js', array(), '1.0.0', true);
	wp_enqueue_script('scrollify', get_template_directory_uri().'/node_modules/jquery-scrollify/jquery.scrollify.js', array(), '1.0.0', true);
	wp_enqueue_script('form-submit', get_template_directory_uri().'/js/form.js', array(), '1.0.0', true);
	wp_enqueue_script('typewriter', get_template_directory_uri().'/js/typewriter.js', array(), '1.0.0', true);
	wp_enqueue_script('fancybox_ready', get_template_directory_uri().'/js/fancybox_ready.js', array(), '1.0.0', true);
	wp_enqueue_script('slick_ready', get_template_directory_uri().'/js/slick_ready.js', array(), '1.0.0', true);
	wp_enqueue_script('scrollify_ready', get_template_directory_uri().'/js/scrollify_ready.js', array(), '1.0.0', true);
	wp_enqueue_script('page-scripts', get_template_directory_uri().'/js/page-scripts.js', array(), '1.0.0', true);
}

add_action( "wp_enqueue_scripts", "token_scripts");

function register_my_menu() {
	register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_menu');
?>