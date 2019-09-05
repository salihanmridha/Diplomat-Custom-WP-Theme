<?php
function mindlab_load_scripts(){
  //css files
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
  wp_enqueue_style( 'universal', get_template_directory_uri() . '/css/universal.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //js files
  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryEasing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryCountdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), null, true );
  wp_enqueue_script( 'device', get_template_directory_uri() . '/js/device.min.js', array(), null, true );
  wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryPlaceholder', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryShuffle', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryParallax', get_template_directory_uri() . '/js/jquery.parallax.min.js', array(), null, true );
  wp_enqueue_script( 'jqueryCircle', get_template_directory_uri() . '/js/jquery.circle-progress.min.js', array(), null, true );
  wp_enqueue_script( 'jquerySwipbox', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array(), null, true );
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), null, true );
  wp_enqueue_script( 'jquerySmartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js', array(), null, true );
  wp_enqueue_script( 'mapurl', 'httpss://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os', array(), null, true );
  wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js', array(), null, true );
  wp_enqueue_script( 'vegas', get_template_directory_uri() . '/js/vegas/vegas.min.js', array(), null, true );
  wp_enqueue_script( 'universalJs', get_template_directory_uri() . '/js/universal.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'mindlab_load_scripts' );

function mindlab_admin_load_scripts($hook){
  //echo $hook;

  //hook for activate wp media pre built functions
  wp_enqueue_media();
  //registering new script file for wp-admin panel
  wp_register_script( 'mindlab_admin_js', get_template_directory_uri() . '/js/mindlab.admin.js',  array('jquery'), '1.0.0', true );
  //enqueueing new registered script
  wp_enqueue_script( 'mindlab_admin_js' );

  //mindlab admin general page js script
  //condition checking for this is general page or not
  if ('toplevel_page_mindlab_admin' == $hook) {
    //register and enque any script for mindlab general/parent page
  }

  //mindlab admin our service page css style
  //condition checking for this is our service page or not
  if ('mindlab_page_mindlab_admin_our_services' == $hook) {
    //registering new style file for wp-admin panel
    wp_register_style( 'mindlab_admin_css', get_template_directory_uri() . '/css/mindlab.admin.css', array(), '1.0.0', 'all' );
    //enqueueing new registered style
    wp_enqueue_style( 'mindlab_admin_css' );
  }
}//mindlab_admin_load_scripts method ended

add_action( 'admin_enqueue_scripts', 'mindlab_admin_load_scripts' );
