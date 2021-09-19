<?php

/**
 * Function comment
 */
function designo_post_types() {

	// Project Post Type
	register_post_type(
		'project',
		array(
			'show_in_rest'      => true,
			'supports'          => array( 'title', 'excerpt', 'thumbnail' ),
			'rewrite'           => array( 'slug' => 'projects' ),
			'has_archive'       => true,
			'show_in_nav_menus' => true,
			'public'            => true,
			'labels'            => array(
				'name'          => 'Projects',
				'add_new_item'  => 'Add New Project',
				'edit_item'     => 'Edit Project',
				'all_items'     => 'All Projects',
				'singular_name' => 'Project',
			),
			'menu_icon'         => 'dashicons-clipboard',
		)
	);

	// Service Post Type
	register_post_type(
		'service',
		array(
			'show_in_rest'      => true,
			'supports'          => array( 'title', 'excerpt', 'thumbnail' ),
			'rewrite'           => array( 'slug' => 'services' ),
			'show_in_nav_menus' => true,
			'public'            => true,
			'labels'            => array(
				'name'          => 'Services',
				'add_new_item'  => 'Add New Service',
				'edit_item'     => 'Edit Service',
				'all_items'     => 'All Services',
				'singular_name' => 'Service',
			),
			'menu_icon'         => 'dashicons-hammer',
		)
	);

}

add_action( 'init', 'designo_post_types' );