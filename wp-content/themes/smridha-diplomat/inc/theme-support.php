<?php
//supporting theme's title
add_theme_support( 'title-tag' );

//Active new nav menus for the theme
function smridha_register_nav_menus(){
  register_nav_menu( 'primary', 'Theme header menu' );
  register_nav_menu( 'vertical-menu', 'Theme vertical sidebar menu' );
}
add_action( 'init', 'smridha_register_nav_menus' );

//enable feature image
add_theme_support( 'post-thumbnails' );

//auto excerpt
function custom_excerpt_length( $length ) {
  global $post;
  if ( is_post_type_archive( 'members' )) {
    return '30';
  }
  if ($post->post_type == 'news' && !is_post_type_archive(  )) {
    return '10';
  }elseif ($post->post_type == 'library' ) {
    return '14';
  } elseif (is_post_type_archive(  )) {
    return '45';
  } else {
    return '12';
  }


}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

//remove [...] from excerpt
function custom_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//my custom excerpt
function smridha_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt).'...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}




//register right sidebar
register_sidebar(
  array(
      'name'          => esc_html__( 'Right Sidebar', 'smridha' ),
      'id'            => 'smridha-right-sidebar',
      'description'   => 'Right Sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ));
