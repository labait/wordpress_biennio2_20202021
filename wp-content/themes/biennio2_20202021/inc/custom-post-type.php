<?php

// Register Custom Post Type
function custom_post_type() {

	$product_labels = array(
		'name'                  => _x( 'Product', 'Post Type General Name','incode'),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name','incode'),
		'menu_name'             => __( 'Product','incode'),
		'name_admin_bar'        => __( 'Product','incode'),
		'archives'              => __( 'Products Archives','incode'),
		'attributes'            => __( 'Products Attributes','incode'),
		'parent_item_colon'     => __( 'Parent Product:','incode'),
		'all_items'             => __( 'All Products','incode'),
		'add_new_item'          => __( 'Add New Product','incode'),
		'add_new'               => __( 'Add New','incode'),
		'new_item'              => __( 'New Product','incode'),
		'edit_item'             => __( 'Edit Product','incode'),
		'update_item'           => __( 'Update Product','incode'),
		'view_item'             => __( 'View Product','incode'),
		'view_items'            => __( 'View Product','incode'),
		'search_items'          => __( 'Search Product','incode'),
		'not_found'             => __( 'Not found','incode'),
		'not_found_in_trash'    => __( 'Not found in Trash','incode'),
		'featured_image'        => __( 'Featured Image','incode'),
		'set_featured_image'    => __( 'Set featured image','incode'),
		'remove_featured_image' => __( 'Remove featured image','incode'),
		'use_featured_image'    => __( 'Use as featured image','incode'),
		'insert_into_item'      => __( 'Insert into Product','incode'),
		'uploaded_to_this_item' => __( 'Uploaded to this Product','incode'),
		'items_list'            => __( 'Products list','incode'),
		'items_list_navigation' => __( 'Products list navigation','incode'),
		'filter_items_list'     => __( 'Filter Products list','incode'),
	);
	$product_args = array(
		'label'                 => __( 'Product','incode'),
		'labels'                => $product_labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'product_category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-archive',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('product', $product_args);

}
add_action( 'init', 'custom_post_type', 0 );