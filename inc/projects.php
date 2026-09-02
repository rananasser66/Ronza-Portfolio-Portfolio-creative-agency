<?php

/**
 * Projects functionality.
 *
 * @package Ronza
 */

/**
 * Register Project custom post type.
 */
function ronza_register_project_post_type() {

	$labels = array(
		'name'               => esc_html__( 'Projects', 'ronza' ),
		'singular_name'      => esc_html__( 'Project', 'ronza' ),
		'add_new'            => esc_html__( 'Add New', 'ronza' ),
		'add_new_item'       => esc_html__( 'Add New Project', 'ronza' ),
		'edit_item'          => esc_html__( 'Edit Project', 'ronza' ),
		'new_item'           => esc_html__( 'New Project', 'ronza' ),
		'view_item'          => esc_html__( 'View Project', 'ronza' ),
		'search_items'       => esc_html__( 'Search Projects', 'ronza' ),
		'not_found'          => esc_html__( 'No projects found.', 'ronza' ),
		'menu_name'          => esc_html__( 'Projects', 'ronza' ),
	);

	$args = array(
		'labels'       => $labels,
		'public'       => true,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-portfolio',
		'supports'     => array(
			'title',
			'editor',
			'thumbnail',
		),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug' => 'projects',
		),
		'show_in_rest' => true,
	);

	register_post_type( 'ronza_project', $args );
}

add_action( 'init', 'ronza_register_project_post_type' );

add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
function create_subjects_hierarchical_taxonomy() {  
  $projectTypes = array(
    'name' => _x( 'Project Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search project type' ),
    'all_items' => __( 'All Project types' ),
    'parent_item' => __( 'Parent Project Type' ),
    'parent_item_colon' => __( 'Parent Project Type:' ),
    'edit_item' => __( 'Edit Project Type' ), 
    'update_item' => __( 'Update Project Type' ),
    'add_new_item' => __( 'Add New Project Type' ),
    'new_item_name' => __( 'New Project Type Name' ),
    'menu_name' => __( 'Project Type' ),
  );    
  register_taxonomy('project_type',array('ronza_project'), array(
    'hierarchical' => true,
    'labels' => $projectTypes,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project_type' ),
    'rewrite' => false,
  ));
}