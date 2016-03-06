<?php 
/**
 * Custom post types
 *
 * @package pp
 */

// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                => _x( 'Project', 'pp' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'pp' ),
		'menu_name'           => __( 'Projects', 'pp' ),
	);
	$args = array(
		'label'               => __( 'Projects', 'pp' ),
		'description'         => __( 'Feature Projects', 'pp' ),
		'labels'              => $labels,
		'supports'            => array('title', 'thumbnail', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5.2,
		'show_in_nav_menus'   => true,
		'has_archive'         => false,		
		'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );

// Register Custom Post Type
function packages_post_type() {

	$labels = array(
		'name'                => _x( 'Package', 'pp' ),
		'singular_name'       => _x( 'Package', 'pp' ),
		'menu_name'           => __( 'Packages', 'pp' ),
	);
	$args = array(
		'label'               => __( 'Packages', 'pp' ),
		'labels'              => $labels,
		'supports'            => array('title', 'thumbnail', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5.5,
		'show_in_nav_menus'   => true,
		'has_archive'         => false,		
		'capability_type'     => 'page',
	);
	register_post_type( 'packages', $args );

}
add_action( 'init', 'packages_post_type', 0 );

// Register Custom Post Type
function tesimonials_post_type() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'pp' ),
		'singular_name'       => _x( 'Testimonial', 'pp' ),
		'menu_name'           => __( 'Testimonials', 'pp' ),
	);
	$args = array(
		'label'               => __( 'Testimonials', 'pp' ),
		'labels'              => $labels,
		'supports'            => array('title', 'thumbnail', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6.5,
		'show_in_nav_menus'   => true,
		'has_archive'         => false,		
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'tesimonials_post_type', 0 );