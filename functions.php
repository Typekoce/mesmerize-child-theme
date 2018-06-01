<?php

function menu(){
	
	add_theme_page(
		'Mesmerize Child', 
		'Mesmerize Child', 
		'edit_theme_options', 
		'eclipse_recruitment_theme', 
		'my_plugin_function'
	);
	
}

add_action('admin_menu','menu');

function my_theme_enqueue_styles() {

	$parent_style = 'mesmerize-style';
	
	wp_enqueue_style($parent_style, 
		get_template_directory_uri() . '/style.css'
	);
	
	wp_enqueue_style('child-style', 
		get_stylesheet_directory_uri() . '/style.css', 
		array($parent_style), 
		wp_get_theme() -> get('Version')
	);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>