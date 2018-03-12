<?php


/*
	============================
	FRONT-END ENQUEUE FUNCTIONS
	============================
*/


function blog_load_scripts() {
	wp_enqueue_style('fonts_Google', 'https://fonts.googleapis.com/css?family=Lora|Open+Sans|Roboto+Slab');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, '3.3.1', true);
	wp_register_script('js_functions', get_template_directory_uri(). '/assets/js/js-functions.js', false, '1.0.0', true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('js_functions');
}
add_action('wp_enqueue_scripts', 'blog_load_scripts');


