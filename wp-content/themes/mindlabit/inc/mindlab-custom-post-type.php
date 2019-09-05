<?php
  //functions for portfolio post type
  function mindlab_portfolio_post_type(){
    $labels = array(
      'name'                => 'Portfolio',
      'singular_name'       => 'Portfolio',
      'add_new'             => 'Add Portfolio Item',
      'all_items'           => 'All Portfolios',
      'add_new_item'        => 'Add Portfolio',
      'edit_item'           => 'Edit Portfolio',
      'new_item'            => 'New Portfolio',
      'view_item'           => 'View Portfolio',
      'search_item'         => 'Search Portfolio',
      'not_found'           => 'Portfolio Not Found',
      'not_found_trash'     => 'Portfolio Not Found in Trash'
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
      'taxonomies' => array('portfolio-category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'portfolio', $args );
  }
  //wordpress hook for active custom portfolio post type
  add_action('init', 'mindlab_portfolio_post_type');





  //functions for Team post type
  function mindlab_team_post_type(){
    $labels = array(
      'name'                => 'Teams',
      'singular_name'       => 'team',
      'add_new'             => 'Add Team Member',
      'all_items'           => 'All Team Members',
      'add_new_item'        => 'Add Team Member',
      'edit_item'           => 'Edit Team Member',
      'new_item'            => 'New Team Member',
      'view_item'           => 'View Team Member',
      'search_item'         => 'Search Team',
      'not_found'           => 'Team Member Not Found',
      'not_found_trash'     => 'Team Member Not Found in Trash'
    );

    $args = array(
      'labels'    => $labels,
      'public'    => true,
      'has_archive'  => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'page',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'thumbnail',
      ),
      'taxonomies' => array('category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-groups',
      'exclude_from_search' => true,
    );
    register_post_type( 'team', $args );
  }
  //wordpress hook for active custom portfolio post type
  add_action('init', 'mindlab_team_post_type');

  //change team post type's enter title placeholder text
  function mindlab_team_post_type_title_placeholer($title){
    $screen = get_current_screen();

    if ('team' == $screen->post_type ) {
      $title = "Enter Team Member Name Here";
    }
    return $title;
  }
  add_filter( 'enter_title_here', 'mindlab_team_post_type_title_placeholer' );

  //team post type custom meta box start

  function mindlab_team_post_type_add_meta_boxes(){
    add_meta_box( 'designation', 'Designation', 'mindlab_team_designation_callback', 'team' );
    add_meta_box( 'team_twitter', 'Twitter Address', 'mindlab_team_twitter_callback', 'team' );
    add_meta_box( 'team_fb', 'Facebook Address', 'mindlab_team_fb_callback', 'team' );
    add_meta_box( 'team_gplus', 'Google+ Address', 'mindlab_team_gplus_callback', 'team' );
  }

  //active meta box for team post type
  add_action( 'add_meta_boxes', 'mindlab_team_post_type_add_meta_boxes' );

  //save hook for each custom meta box in team post type
  add_action( 'save_post', 'mindlab_save_designation_meta_data');
  add_action( 'save_post', 'mindlab_save_twitter_meta_data');
  add_action( 'save_post', 'mindlab_save_fb_meta_data');
  add_action( 'save_post', 'mindlab_save_gplus_meta_data');
  //team post type custom meta box end


  //functions for testimonial post type
  function mindlab_testimonial_post_type(){
    $labels = array(
      'name'                => 'Testimonials',
      'singular_name'       => 'Testimonial',
      'add_new'             => 'Add Testimonial Item',
      'all_items'           => 'All Testimonials',
      'add_new_item'        => 'Add Testimonial',
      'edit_item'           => 'Edit Testimonial',
      'new_item'            => 'New Testimonial',
      'view_item'           => 'View Testimonial',
      'search_item'         => 'Search Testimonial',
      'not_found'           => 'Testimonial Not Found',
      'not_found_trash'     => 'Testimonial Not Found in Trash'
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
      'taxonomies' => array('category'),
      'menu_position' => 22,
      'menu_icon' => 'dashicons-images-alt',
      'exclude_from_search' => true,
    );

    register_post_type( 'testimonial', $args );
  }
  //wordpress hook for active custom testimonial post type
  add_action('init', 'mindlab_testimonial_post_type');

?>
