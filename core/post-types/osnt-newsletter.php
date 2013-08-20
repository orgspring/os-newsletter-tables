<?php
/* custom post type for the OS Newsletter Table plugin */

add_action( 'init', 'register_cpt_osnt_newsletter' );

function register_cpt_osnt_newsletter() {

    $labels = array( 
        'name' => _x( 'Newsletters', 'osnt_newsletter' ),
        'singular_name' => _x( 'newsletter', 'osnt_newsletter' ),
        'add_new' => _x( 'Add New', 'osnt_newsletter' ),
        'add_new_item' => _x( 'Add New newsletter', 'osnt_newsletter' ),
        'edit_item' => _x( 'Edit newsletter', 'osnt_newsletter' ),
        'new_item' => _x( 'New newsletter', 'osnt_newsletter' ),
        'view_item' => _x( 'View newsletter', 'osnt_newsletter' ),
        'search_items' => _x( 'Search Newsletters', 'osnt_newsletter' ),
        'not_found' => _x( 'No newsletters found', 'osnt_newsletter' ),
        'not_found_in_trash' => _x( 'No newsletters found in Trash', 'osnt_newsletter' ),
        'parent_item_colon' => _x( 'Parent newsletter:', 'osnt_newsletter' ),
        'menu_name' => _x( 'Newsletters', 'osnt_newsletter' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'A custom post type for newsletters.',
        'supports' => array( 'title' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
		'menu_icon' => plugins_url('os-newsletter-tables/core/images/newspapers.png'),
		'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'osnt_newsletter', $args );
}
