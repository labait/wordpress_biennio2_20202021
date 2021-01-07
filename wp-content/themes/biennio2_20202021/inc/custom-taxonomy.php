<?php

// Register Custom Taxonomy
function custom_taxonomy() {

  $product_category_labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name','incode'),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name','incode'),
    'menu_name'                  => __( 'Categories','incode'),
    'all_items'                  => __( 'All Categories','incode'),
    'parent_item'                => __( 'Parent Category','incode'),
    'parent_item_colon'          => __( 'Parent Category:','incode'),
    'new_item_name'              => __( 'New Category Name','incode'),
    'add_new_item'               => __( 'Add New Category','incode'),
    'edit_item'                  => __( 'Edit Category','incode'),
    'update_item'                => __( 'Update Category','incode'),
    'view_item'                  => __( 'View Category','incode'),
    'separate_items_with_commas' => __( 'Separate Categories with commas','incode'),
    'add_or_remove_items'        => __( 'Add or remove Categories','incode'),
    'choose_from_most_used'      => __( 'Choose from the most used','incode'),
    'popular_items'              => __( 'Popular Categories','incode'),
    'search_items'               => __( 'Search Categories','incode'),
    'not_found'                  => __( 'Not Found','incode'),
    'no_terms'                   => __( 'No Categories','incode'),
    'items_list'                 => __( 'Categories list','incode'),
    'items_list_navigation'      => __( 'Categories list navigation','incode'),
  );
  $product_category_args = array(
    'labels'                     => $product_category_labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );
  register_taxonomy( 'product_category', array('product'), $product_category_args );

}
add_action( 'init', 'custom_taxonomy', 0 );