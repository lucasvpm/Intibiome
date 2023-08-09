<?php
/**
 * Theme functions and definitions
 *
 * @package Intibiome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'intibiome_setup' ) ) :
	function intibiome_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'intibiome' ),
				'menu-2' => __( 'Secondary', 'intibiome' ),
				'menu-3' => __( 'Mobile', 'intibiome' ),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'intibiome_setup' );


require get_template_directory() . '/controller/custom_theme-scripts.php';
require get_template_directory() . '/controller/custom_post-type.php';
require get_template_directory() . '/controller/custom_taxonomy.php';


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Intibiome',
		'menu_title'	=> 'Intibiome',
		'menu_slug' 	=> 'theme-geral',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-smiley',
		'redirect'		=> false
	));
}