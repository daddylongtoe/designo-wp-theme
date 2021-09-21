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

  // Location Post Type
	register_post_type(
		'location',
		array(
			'show_in_rest'      => true,
			'supports'          => array( 'title',  ),
			'rewrite'           => 'false',
      'public'            => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
			'labels'            => array(
				'name'          => 'Locations',
				'add_new_item'  => 'Add New Location',
				'edit_item'     => 'Edit Location',
				'all_items'     => 'All Locations',
				'singular_name' => 'Location',
			),
			'menu_icon'         => 'dashicons-location-alt',
		)
	);

}

add_action( 'init', 'designo_post_types' );