<?php
  function news_custom_taxonomies(){
    //custom taxonomy for feature news post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'News Categories',
      'singular_name' => 'News Category',
      'search_items' => 'Search News Category',
      'all_items' => 'All News Category',
      'parent_item' => 'Parent News Category',
      'parent_item_colon' => 'Parent News Category:',
      'edit_item' => 'Edit News Category',
      'update_item' => 'Update News Category',
      'add_new_item' => 'Add New News Category',
      'new_item_name' => 'New News Category Name',
      'menu_name' => 'News Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'news-category')
    );

    register_taxonomy( 'news-category', array('news'), $args );

    $parent_term = term_exists( 'world', 'news-category' ); // array is returned if taxonomy is given
    if (!$parent_term) {
      $parent_term_id = $parent_term['term_id']; // get numeric term id
      wp_insert_term(
        'World', // the term
        'news-category', // the taxonomy
        array(
          'description'=> 'Default Category for News Post Type',
          'slug' => 'world',
          'parent'=> $parent_term_id
        )
      );
    }



  }

  add_action( 'init',  'news_custom_taxonomies');




  function album_custom_taxonomies(){
    //custom taxonomy for album post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'Album Categories',
      'singular_name' => 'Album Category',
      'search_items' => 'Search Album Category',
      'all_items' => 'All Album Category',
      'parent_item' => 'Parent Album Category',
      'parent_item_colon' => 'Parent Album Category:',
      'edit_item' => 'Edit Album Category',
      'update_item' => 'Update Album Category',
      'add_new_item' => 'Add New Album Category',
      'new_item_name' => 'New Album Category Name',
      'menu_name' => 'Album Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'album-category')
    );

    register_taxonomy( 'album-category', array('album'), $args );




  }

  add_action( 'init',  'album_custom_taxonomies');

  function event_custom_taxonomies(){
    //custom taxonomy for event post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'Events Categories',
      'singular_name' => 'Event Category',
      'search_items' => 'Search Event Category',
      'all_items' => 'All Event Category',
      'parent_item' => 'Parent Event Category',
      'parent_item_colon' => 'Parent Event Category:',
      'edit_item' => 'Edit Event Category',
      'update_item' => 'Update Event Category',
      'add_new_item' => 'Add New Event Category',
      'new_item_name' => 'New Event Category Name',
      'menu_name' => 'Event Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'event-category')
    );

    register_taxonomy( 'event-category', array('events'), $args );
  }
  add_action( 'init',  'event_custom_taxonomies');

  //custom taxonomy (Book) for library post type

  function book_custom_taxonomies(){
    //custom taxonomy for library post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'Book Categories',
      'singular_name' => 'Book Category',
      'search_items' => 'Search Book Category',
      'all_items' => 'All Book Category',
      'parent_item' => 'Parent Book Category',
      'parent_item_colon' => 'Parent Book Category:',
      'edit_item' => 'Edit Book Category',
      'update_item' => 'Update Book Category',
      'add_new_item' => 'Add New Book Category',
      'new_item_name' => 'New Book Category Name',
      'menu_name' => 'Book Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'book-category')
    );

    register_taxonomy( 'book-category', array('library'), $args );
  }
  add_action( 'init',  'book_custom_taxonomies');




  //custom taxonomy (Member Role) for library post type

  function member_role_custom_taxonomies(){
    //custom taxonomy for library post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'Member Role',
      'singular_name' => 'Member Role',
      'search_items' => 'Search Member Role',
      'all_items' => 'All Member Role',
      'parent_item' => 'Parent Member Role',
      'parent_item_colon' => 'Parent Member Role:',
      'edit_item' => 'Edit Member Role',
      'update_item' => 'Update Member Role',
      'add_new_item' => 'Add New Member Role',
      'new_item_name' => 'New Member Role Name',
      'menu_name' => 'Member Role',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'member-role')
    );

    register_taxonomy( 'member-role', array('members'), $args );
  }
  add_action( 'init',  'member_role_custom_taxonomies');


  //custom taxonomy (video-cat) for video post type

  function video_custom_taxonomies(){
    //custom taxonomy for library post type

    //add new taxonomy hierarchical
    $labels = array(
      'name' => 'Video Categories',
      'singular_name' => 'Video Category',
      'search_items' => 'Search Video Category',
      'all_items' => 'All Video Category',
      'parent_item' => 'Parent Video Category',
      'parent_item_colon' => 'Parent Video Category:',
      'edit_item' => 'Edit Video Category',
      'update_item' => 'Update Video Category',
      'add_new_item' => 'Add New Video Category',
      'new_item_name' => 'New Video Category Name',
      'menu_name' => 'Video Category',
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'video-cat')
    );

    register_taxonomy( 'video-cat', array('videos'), $args );
  }
  add_action( 'init',  'video_custom_taxonomies');
?>
