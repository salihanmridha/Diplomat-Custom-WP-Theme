<?php
function smridha_load_scripts(){
  //css files
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '3.3.6', 'all' );
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'vendor', get_template_directory_uri() . '/css/vendor.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'layerslider', get_template_directory_uri() . '/js/vendor/layerslider/css/layerslider.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //js files
  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/jquery.modernizr.js', array(), null, false );
  wp_enqueue_script( 'twitterFetcher_min', get_template_directory_uri() . '/js/vendor/widgets/twitterFetcher_min.js', array(), null, true );
  wp_enqueue_script( 'owl_carousel', get_template_directory_uri() . '/js/vendor/owlcarousel/owl.carousel.min.js', array(), null, true );
  wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/vendor/plugins.js', array(), null, true );
  wp_enqueue_script( 'modals', get_template_directory_uri() . '/js/vendor/modals.js', array(), null, true );
  wp_enqueue_script( 'greensock', get_template_directory_uri() . '/js/vendor/layerslider/js/greensock.js', array(), null, true );
  wp_enqueue_script( 'layerslider_transitions', get_template_directory_uri() . '/js/vendor/layerslider/js/layerslider.transitions.js', array(), null, true );
  wp_enqueue_script( 'kreaturamedia', get_template_directory_uri() . '/js/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js', array(), null, true );
  wp_enqueue_script( 'config', get_template_directory_uri() . '/js/config.js', array(), null, true );
  wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array(), null, true );
  wp_enqueue_script( 'smridha_js', get_template_directory_uri() . '/js/smridha-js.js', array(), null, true );
  wp_enqueue_script( 'mediaelement', get_template_directory_uri() . '/js/vendor/mediaelement/mediaelement-and-player.min.js', array(), null, true );
  wp_enqueue_script( 'magnific_popup', get_template_directory_uri() . '/js/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), null, true );
  wp_enqueue_script( 'stapel', get_template_directory_uri() . '/js/vendor/jquery.stapel.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'smridha_load_scripts' );
