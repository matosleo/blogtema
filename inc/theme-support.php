<?php


/*Setting thumbnail to posts*/
add_theme_support( 'post-thumbnails' );




/* Activate Nav Menu Option */
function blog_register_nav_menu() {
	register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'blog_register_nav_menu');