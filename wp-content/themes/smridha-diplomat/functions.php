<?php
//all style file and script files included
require get_template_directory() . '/inc/function-enqueue.php';
//Theme Supports
require get_template_directory() . '/inc/theme-support.php';
//custom post type
require get_template_directory() . '/inc/custom-post-type.php';
//custom taxonomies
require get_template_directory() . '/inc/custom-taxonomies.php';
//custom meta boxes for events
require get_template_directory() . '/inc/custom-events-meta-boxes.php';
//custom meta boxes for events
require get_template_directory() . '/inc/custom-video-meta-boxes.php';
//custom taxonomies
require get_template_directory() . '/ajax.php';

function mail_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','mail_set_content_type' );

add_filter( 'woocommerce_product_subcategories_hide_empty', 'hide_empty_categories', 10, 1 );
function hide_empty_categories ( $hide_empty ) {
    $hide_empty  =  FALSE;
    // You can add other logic here too
    return $hide_empty;
}
