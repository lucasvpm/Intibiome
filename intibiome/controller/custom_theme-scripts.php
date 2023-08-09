<?php

function atosautosocorro_enqueue_scripts() {
	
	wp_enqueue_style(
		'style', 
		get_template_directory_uri().
		'/assets/css/style.css',
			array(), 
			null, false 
	);

		wp_enqueue_style(
			'animate', 
			get_template_directory_uri().
			'/assets/css/animate.min.css',
				array(), 
				null, false 
		);
		wp_enqueue_style(
			'bootstrap-grid', 
			get_template_directory_uri().
			'/assets/css/bootstrap-grid.css',
				array(), 
				null, false 
		);
		wp_enqueue_style(
			'slick', 
			get_template_directory_uri().
			'/assets/slick/slick.css',
				array(), 
				null, false 
		);
		wp_enqueue_style(
			'slick-theme', 
			get_template_directory_uri().
			'/assets/slick/slick-theme.css',
				array(), 
				null, false 
		);
		wp_enqueue_script('jquery');

		wp_enqueue_script(
			'wow', 
			get_template_directory_uri() . 
			'/assets/js/wow.min.js',  
				array(), 
				null, true
		);
		wp_enqueue_script(
			'slick-script', 
			get_template_directory_uri() . 
			'/assets/slick/slick.min.js',  
				array(), 
				null, true
		);
		wp_enqueue_script(
			'main-script', 
			get_template_directory_uri() . 
			'/assets/js/main.js',  
				array(), 
				null, true
		);
	
		
}
add_action('wp_enqueue_scripts', 'atosautosocorro_enqueue_scripts', 1000);
 