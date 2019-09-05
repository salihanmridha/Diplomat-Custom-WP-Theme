<?php
//supporting theme's title
add_theme_support( 'title-tag' );

//Active new nav menus for the theme
function mindlab_register_nav_menus(){
  register_nav_menu( 'primary', 'Theme header menu' );
}
add_action( 'init', 'mindlab_register_nav_menus' );

//enable feature image
add_theme_support( 'post-thumbnails' );

//auto excerpt
function mindlab_custom_excerpt_length( $length ) {
  global $post;
  if ($post->post_type == 'portfolio') {
    return '4';
  } else {
    return '17';
  }

}
add_filter( 'excerpt_length', 'mindlab_custom_excerpt_length' );

//remove [...] from excerpt
function mindlab_custom_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'mindlab_custom_excerpt_more');
//mindlab theme sidebars
function mindlab_register_sidebars(){
  //registering right sidebar
  register_sidebar(
    array(
        'name'          => esc_html__( 'Right Sidebar', 'mindlabtheme' ),
        'id'            => 'right-sidebar',
        'description'   => 'Right sidebar for display widgets',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    //registering what we are sidebar
    register_sidebar(
      array(
          'name'          => esc_html__( 'Who we are', 'mindlabtheme' ),
          'id'            => 'who-we-are',
          'description'   => 'Who we are sidebar for display custom widget \'who we are \' - the position is under slider in front page',
          'before_widget' => '<div class="container"><div class="row">',
          'after_widget'  => '</div></div>',
          'before_title'  => '<h3>',
          'after_title'   => '</h3>',
      ));

      //registering we have magic sidebar
      register_sidebar(
        array(
            'name'          => esc_html__( 'We Have Magic', 'mindlabtheme' ),
            'id'            => 'we-have-magic',
            'description'   => 'We have Magic sidebar for display custom widget \'We have magic \' - the position is under who we are sidebar in front page',
            'before_widget' => '<div class="container wow fadeIn"><div class="row">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        //registering awesome sidebar
        register_sidebar(
          array(
              'name'          => esc_html__( 'Awesome', 'mindlabtheme' ),
              'id'            => 'mindlab_awesome',
              'description'   => 'Awesome sidebar for display custom widget \'Awesome \' - the position is under services in front page',
              'before_widget' => '<div class="container"><div class="row">',
              'after_widget'  => '</div></div>',
              'before_title'  => '<h3>',
              'after_title'   => '</h3>',
          ));

        //registering why choose us sidebar
        register_sidebar(
          array(
              'name'          => esc_html__( 'Why Choose Us', 'mindlabtheme' ),
              'id'            => 'mindlab-why-choose-us',
              'description'   => 'Why choose us sidebar will use for why choose us widget.',
              'before_widget' => '<div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn"><div class="row">',
              'after_widget'  => '</div></div>',
              'before_title'  => '<h4>',
              'after_title'   => '</h4>',
          ));

        //registering counter sidebar widget
        register_sidebar(
          array(
              'name'          => esc_html__( 'Counter Widget', 'mindlabtheme' ),
              'id'            => 'mindlab-counter-widget',
              'description'   => 'Counter Widget before testiomonial.',
              'before_widget' => '<div class="col-sm-3">',
              'after_widget'  => '</div>',
              'before_title'  => '<h5 class="no-pad">',
              'after_title'   => '</h5>',
          ));

        //registering first footer sidebar widget
        register_sidebar(
          array(
              'name'          => esc_html__( 'First Footer Sidebar', 'mindlabtheme' ),
              'id'            => 'mindlab-first-footer-sidebar',
              'description'   => 'First footer sidebar for the theme',
              'before_widget' => '<div class="col-sm-4">',
              'after_widget'  => '</div>',
              'before_title'  => '<h5>',
              'after_title'   => '</h5>',
          ));

    //registering custom widgets
    register_widget( 'Mindlab_Who_We_Are_Class' );
    register_widget( 'Mindlab_We_Have_Magic_Class' );
    register_widget( 'Mindlab_Awesome_Class' );
    register_widget( 'Mindlab_Why_Choose_Us_Class' );
    register_widget( 'Mindlab_Counter_Widget_Class' );
}
//Activating hook for activate new sidebars for the theme
add_action( 'widgets_init', 'mindlab_register_sidebars' );
