<?php
  function mindlab_custom_taxonomies(){
    //custom taxonomy for portfolio post type
    //add new taxonomy hierarchical

    $labels = array(
      'name' => 'Portfolio Categories',
      'singular_name' => 'Portfolio Category',
      'search_items' => 'Search Portfolio Category',
      'all_items' => 'All Portfolio Category',
      'parent_item' => 'Parent Portfolio Category',
      'parent_item_colon' => 'Parent Portfolio Category:',
      'edit_item' => 'Edit Portfolio Category',
      'update_item' => 'Update Portfolio Category',
      'add_new_item' => 'Add New Portfolio Category',
      'new_item_name' => 'New Portfolio Category Name',
      'menu_name' => 'Portfolio Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'portfolio-category')
    );

    register_taxonomy( 'portfolio-category', array('portfolio'), $args );
  }

  add_action( 'init',  'mindlab_custom_taxonomies');
?>
