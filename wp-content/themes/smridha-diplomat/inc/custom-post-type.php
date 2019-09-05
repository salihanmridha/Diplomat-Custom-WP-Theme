<?php
  //functions for slider post type
  function slider_post_type(){
    $labels = array(
      'name'                => 'Sliders',
      'singular_name'       => 'Slider',
      'add_new'             => 'Add Slider Item',
      'all_items'           => 'All Sliders',
      'add_new_item'        => 'Add Slider',
      'edit_item'           => 'Edit Slider',
      'new_item'            => 'New Slider',
      'view_item'           => 'View Slider',
      'search_item'         => 'Search Slider',
      'not_found'           => 'Slider Not Found',
      'not_found_trash'     => 'Slider Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'slider', $args );
  }
  //wordpress hook for active custom slider post type
  add_action('init', 'slider_post_type');


  //functions for news post type
  function news_post_type(){
    $labels = array(
      'name'                => 'News',
      'singular_name'       => 'News',
      'add_new'             => 'Add News',
      'all_items'           => 'All News',
      'add_new_item'        => 'Add News',
      'edit_item'           => 'Edit News',
      'new_item'            => 'New News',
      'view_item'           => 'View News',
      'search_item'         => 'Search News',
      'not_found'           => 'News Not Found',
      'not_found_trash'     => 'News Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'comments',
        'revisions',
      ),
      'taxonomies' => array('news-category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'news', $args );
  }
  //wordpress hook for active custom featured news post type
  add_action('init', 'news_post_type');


  //functions for album post type
  function album_post_type(){
    $labels = array(
      'name'                => 'Album',
      'singular_name'       => 'Album',
      'add_new'             => 'Add Album',
      'all_items'           => 'All Album',
      'add_new_item'        => 'Add Album',
      'edit_item'           => 'Edit Album',
      'new_item'            => 'New Album',
      'view_item'           => 'View Album',
      'search_item'         => 'Search Album',
      'not_found'           => 'Album Not Found',
      'not_found_trash'     => 'Album Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
      'taxonomies' => array('album-category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'album', $args );
  }
  //wordpress hook for active custom featured news post type
  add_action('init', 'album_post_type');

  //functions for album post type
  function event_post_type(){
    $labels = array(
      'name'                => 'Events',
      'singular_name'       => 'Event',
      'add_new'             => 'Add Event',
      'all_items'           => 'All Event',
      'add_new_item'        => 'Add Event',
      'edit_item'           => 'Edit Event',
      'new_item'            => 'New Event',
      'view_item'           => 'View Event',
      'search_item'         => 'Search Event',
      'not_found'           => 'Event Not Found',
      'not_found_trash'     => 'Event Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
      'taxonomies' => array('event-category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'events', $args );
  }
  //wordpress hook for active custom featured news post type
  add_action('init', 'event_post_type');


  //events post type custom meta box start
  function event_post_type_add_meta_boxes(){
    add_meta_box( 'map', 'Map ShortCode', 'event_map_callback', 'events' );
    add_meta_box( 'start', 'Start of Event', 'event_start_callback', 'events' );
    add_meta_box( 'end', 'End of Event', 'event_end_callback', 'events' );
    add_meta_box( 'phone', 'Phone', 'event_phone_callback', 'events' );
    add_meta_box( 'address', 'Address', 'event_address_callback', 'events' );
    add_meta_box( 'person', 'Contact Person', 'event_person_callback', 'events' );
    add_meta_box( 'website', 'Website', 'event_website_callback', 'events' );
  }

  //active meta box for team post type
  add_action( 'add_meta_boxes', 'event_post_type_add_meta_boxes' );

  //save hook for each custom meta box in team post type
  add_action( 'save_post', 'save_map_meta_data');
  add_action( 'save_post', 'save_start_meta_data');
  add_action( 'save_post', 'save_end_meta_data');
  add_action( 'save_post', 'save_phone_meta_data');
  add_action( 'save_post', 'save_address_meta_data');
  add_action( 'save_post', 'save_person_meta_data');
  add_action( 'save_post', 'save_website_meta_data');
  //events post type custom meta box end



  //library custom post type start

  //functions for library post type
  function library_post_type(){
    $labels = array(
      'name'                => 'Library',
      'singular_name'       => 'Library',
      'add_new'             => 'Add Book',
      'all_items'           => 'All Books',
      'add_new_item'        => 'Add Book',
      'edit_item'           => 'Edit Book',
      'new_item'            => 'New Book',
      'view_item'           => 'View Book',
      'search_item'         => 'Search Book',
      'not_found'           => 'Book Not Found',
      'not_found_trash'     => 'Book Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'comments',
        'revisions',
      ),
      'taxonomies' => array('book-category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'library', $args );
  }
  //wordpress hook for active custom  library post type
  add_action('init', 'library_post_type');


  //members custom post type start

  //functions for member post type
  function members_post_type(){
    $labels = array(
      'name'                => 'Members',
      'singular_name'       => 'Member',
      'add_new'             => 'Add Member',
      'all_items'           => 'All Member',
      'add_new_item'        => 'Add Member',
      'edit_item'           => 'Edit Member',
      'new_item'            => 'New Member',
      'view_item'           => 'View Member',
      'search_item'         => 'Search Member',
      'not_found'           => 'Member Not Found',
      'not_found_trash'     => 'Member Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'comments',
        'revisions',
      ),
      'taxonomies' => array('member-role'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'members', $args );
  }
  //wordpress hook for active custom featured news post type
  add_action('init', 'members_post_type');


  //video custom post type start

  //functions for video post type
  function video_post_type(){
    $labels = array(
      'name'                => 'Videos',
      'singular_name'       => 'Video',
      'add_new'             => 'Add Video',
      'all_items'           => 'All Videos',
      'add_new_item'        => 'Add Video',
      'edit_item'           => 'Edit Video',
      'new_item'            => 'New Video',
      'view_item'           => 'Watch Video',
      'search_item'         => 'Search Video',
      'not_found'           => 'Video Not Found',
      'not_found_trash'     => 'Video Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'comments',
      ),
      'taxonomies' => array('video-cat'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'videos', $args );
  }
  //wordpress hook for active custom featured news post type
  add_action('init', 'video_post_type');


  //video post type custom meta box start
  function video_post_type_add_meta_boxes(){
    add_meta_box( 'video', 'Video URL', 'video_callback', 'videos' );
  }

  //active meta box for team post type
  add_action( 'add_meta_boxes', 'video_post_type_add_meta_boxes' );

  //save hook for each custom meta box in team post type
  add_action( 'save_post', 'save_video_meta_data');
  //video post type custom meta box end

  ?>
