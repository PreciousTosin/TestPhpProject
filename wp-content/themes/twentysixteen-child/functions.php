<?php

/*function twentysixteen_child_scripts(){
	wp_enqueue_script('test-js', get_stylesheet_directory_uri() . '/js/test.js');
}

add_action('wp_enqueue_scripts', 'twentysixteen_child_scripts');*/

function wpb_adding_scripts() {
	wp_register_script('my_amazing_script', plugins_url('js/test.js', __FILE__), array('jquery'),'1.1', true);
	wp_enqueue_script('my_amazing_script');
}
	 
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  