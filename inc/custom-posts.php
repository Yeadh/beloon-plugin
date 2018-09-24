<?php

if ( ! function_exists('nextgreen_custom_post_type') ) {
	

/**
 * Register a custom post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function nextgreen_custom_post_type() {
    //Sliders
    register_post_type(
        'slider', array(
        'labels'                 => array(
            'name'               => _x( 'Sliders', 'post type general name', 'nextgreen' ),
            'singular_name'      => _x( 'Slider', 'post type singular name', 'nextgreen' ),
            'menu_name'          => _x( 'Sliders', 'admin menu', 'nextgreen' ),
            'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'nextgreen' ),
            'add_new'            => _x( 'Add New', 'slider', 'nextgreen' ),
            'add_new_item'       => __( 'Add New Slider', 'nextgreen' ),
            'new_item'           => __( 'New Slider', 'nextgreen' ),
            'edit_item'          => __( 'Edit Slider', 'nextgreen' ),
            'view_item'          => __( 'View Slider', 'nextgreen' ),
            'all_items'          => __( 'All Sliders', 'nextgreen' ),
            'search_items'       => __( 'Search Sliders', 'nextgreen' ),
            'parent_item_colon'  => __( 'Parent Sliders:', 'nextgreen' ),
            'not_found'          => __( 'No Sliders found.', 'nextgreen' ),
            'not_found_in_trash' => __( 'No Sliders found in Trash.', 'nextgreen' )
        ),

        'description'        => __( 'Description.', 'nextgreen' ),
        'menu_icon'          => 'dashicons-format-gallery',
        'public'             => true,
        'show_in_menu'       => true,
        'has_archive'        => false,
        'hierarchical'       => false,
        'rewrite'            => array( 'slug' => 'slider' ),
        'supports'           => array( 'title', 'excerpt', 'thumbnail' )
    ));

    //portfolio
    register_post_type(
        'portfolio', array(
        'labels'                 => array(
            'name'               => _x( 'Portfolio', 'post type general name', 'nextgreen' ),
            'singular_name'      => _x( 'Portfolio', 'post type singular name', 'nextgreen' ),
            'menu_name'          => _x( 'Portfolio', 'admin menu', 'nextgreen' ),
            'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'nextgreen' ),
            'add_new'            => _x( 'Add New', 'Portfolio', 'nextgreen' ),
            'add_new_item'       => __( 'Add New Portfolio', 'nextgreen' ),
            'new_item'           => __( 'New Portfolio', 'nextgreen' ),
            'edit_item'          => __( 'Edit Portfolio', 'nextgreen' ),
            'view_item'          => __( 'View Portfolio', 'nextgreen' ),
            'all_items'          => __( 'All Portfolio', 'nextgreen' ),
            'search_items'       => __( 'Search Portfolio', 'nextgreen' ),
            'parent_item_colon'  => __( 'Parent Portfolio:', 'nextgreen' ),
            'not_found'          => __( 'No Portfolio found.', 'nextgreen' ),
            'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'nextgreen' )
        ),

        'description'        => __( 'Description.', 'nextgreen' ),
        'menu_icon'          => 'dashicons-layout',
        'public'             => true,
        'show_in_menu'       => true,
        'has_archive'        => false,
        'hierarchical'       => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'supports'           => array( 'title', 'thumbnail' )
    ));

    // portfolio taxonomy
    register_taxonomy(
        'portfolio_category',
        'portfolio',
        array(
            'labels' => array(
                'name' => __( 'portfolio Category', 'nextgreen' ),
                'add_new_item'      => __( 'Add New Category', 'nextgreen' ),
            ),
            'hierarchical' => true,
            'show_admin_column'     => true
    ));
}

add_action( 'init', 'nextgreen_custom_post_type' );

}