<?php 

function load_css(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Acme&display=swap', array(), false, 'all');
	wp_enqueue_style('google-fonts');

	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), 1.1, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'boostrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), 1.1, true);
	wp_enqueue_script('bootstrapjs');
	

	
}

add_action('wp_enqueue_scripts', 'load_css');

?>