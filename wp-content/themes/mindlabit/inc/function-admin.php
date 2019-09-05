<?php
/*
@package mindlab

======================
Admin Page
======================

*/
require_once 'admin-menu-callback-function.php';
//custom theme option menu page creating function
function mindlab_add_admin_page(){
  //wp hook for create parent page of custome theme option

  //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = null )
  add_menu_page( 'Mind Lab Theme Option', 'MindLab', 'manage_options', 'mindlab_admin', 'mindlab_admin_create_page', 'dashicons-admin-generic', 110 ); //function refer to callback function page

  //add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '' )
  //wp hook for create sub pages (general) of custom theme option
  add_submenu_page( 'mindlab_admin', 'Mind Lab Theme Option', 'General Options', 'manage_options', 'mindlab_admin', 'mindlab_admin_create_page' ); //function refer to callback function page

  //wp hook for create sub pages (service) of custom theme option
  add_submenu_page( 'mindlab_admin', 'Mind Lab Our Service', 'Our Services', 'manage_options', 'mindlab_admin_our_services', 'mindlab_our_service_create_page' ); //function refer to callback function page

  //Activate custom theme options
  add_action( 'admin_init', 'mindlab_custom_options' );
}
//wp hook for activate custom option menu
add_action( 'admin_menu', 'mindlab_add_admin_page');

//Mind Lab Theme Option's setting register, section add and section field generator function
function mindlab_custom_options(){
  /*custom mindlab general option start*/

  //===================================================================================

  /* Mind Lab general option's setting group registration start*/
  //register setting for logo upload
  register_setting( 'mindlab-general-group', 'mindlab_logo_upload' );

  //register setting for body slider title
  register_setting( 'mindlab-general-group', 'mindlab_body_slider_title' );
  //register setting for body slider sub-title
  register_setting( 'mindlab-general-group', 'mindlab_body_slider_subtitle' );
  //register setting for upload first body slider image
  register_setting( 'mindlab-general-group', 'mindlab_body_first_img_slider' );
  //register setting for upload second body slider image
  register_setting( 'mindlab-general-group', 'mindlab_body_second_img_slider' );
  //register setting for upload third body slider image
  register_setting( 'mindlab-general-group', 'mindlab_body_third_img_slider' );

  //register setting for front page quote name
  register_setting( 'mindlab-general-group', 'mindlab_front_page_quote_name' );
  //register setting for front page quote desc
  register_setting( 'mindlab-general-group', 'mindlab_front_page_quote_desc' );


  //register setting for front page Video Title
  register_setting( 'mindlab-general-group', 'mindlab_front_page_video_title' );
  //register setting for front page Video URI
  register_setting( 'mindlab-general-group', 'mindlab_front_page_video_uri' );
  //register setting for front page video desc
  register_setting( 'mindlab-general-group', 'mindlab_front_page_video_desc' );


  //register setting for footer copyright
  register_setting( 'mindlab-general-group', 'mindlab_footer_copyright' );

  //register setting for twitter footer social link
  register_setting( 'mindlab-general-group', 'mindlab_footer_twitter_link' );
  //register setting for facebook footer social link
  register_setting( 'mindlab-general-group', 'mindlab_footer_facebook_link' );
  //register setting for google plus footer social link
  register_setting( 'mindlab-general-group', 'mindlab_footer_gplus_link' );
  //register setting for linkedin footer social link
  register_setting( 'mindlab-general-group', 'mindlab_footer_linkedin_link' );


  /* Mind Lab general option's setting group registration end*/


  //======================================================================================

  //Upload Logo Section
  add_settings_section( 'mindlab-logo-upload-section', 'Upload Your Mindlab Theme Logo', 'mindlab_logo_upload_section', 'mindlab_admin' ); //function refer to mindlab-general-page.php

  //Upload Body Slider Image Section
  add_settings_section( 'mindlab-body-img-slider-section', 'Upload Images for Body Slider', 'mindlab_body_img_slider_section', 'mindlab_admin' ); //function refer to mindlab-general-page.php

  //front page quote section
  add_settings_section( 'mindlab-front-page-quote', 'Set Quote Name and description', 'mindlab_front_page_quote_section', 'mindlab_admin' ); //function refer to mindlab-general-page.php

  //front page video section
  add_settings_section( 'mindlab-front-page-video', 'Video Details', 'mindlab_front_page_video_section', 'mindlab_admin' ); //function refer to mindlab-general-page.php

  //footer section
  add_settings_section( 'mindlab-footer-section', 'Footer Section', 'mindlab_footer_section', 'mindlab_admin' ); //function refer to mindlab-general-page.php


  //=========================================================================================
  //all logo fields
  //Logo Upload Fields
  add_settings_field( 'mindlab-logo-upload', 'Upload Logo', 'mindlab_logo_upload_field', 'mindlab_admin', 'mindlab-logo-upload-section' ); //function refer to mindlab-general-page.php


  //All body slider things
  //body slider title
  add_settings_field( 'mindlab-body-slider-title', 'Slider Title', 'mindlab_body_slider_title_field', 'mindlab_admin', 'mindlab-body-img-slider-section' ); //function refer to mindlab-general-page.php

  //body slider sub-title
  add_settings_field( 'mindlab-body-slider-subtitle', 'Slider Sub-Title', 'mindlab_body_slider_subtitle_field', 'mindlab_admin', 'mindlab-body-img-slider-section' ); //function refer to mindlab-general-page.php

  //all body slideri images
  //first body slider image Upload Fields
  add_settings_field( 'mindlab-first-body-img-slider', 'Upload First Body Slider Image', 'mindlab_first_body_img_field', 'mindlab_admin', 'mindlab-body-img-slider-section' ); //function refer to mindlab-general-page.php

  //second body slider image Upload Fields
  add_settings_field( 'mindlab-second-body-img-slider', 'Upload second Body Slider Image', 'mindlab_second_body_img_field', 'mindlab_admin', 'mindlab-body-img-slider-section' ); //function refer to mindlab-general-page.php

  //third body slider image Upload Fields
  add_settings_field( 'mindlab-third-body-img-slider', 'Upload third Body Slider Image', 'mindlab_third_body_img_field', 'mindlab_admin', 'mindlab-body-img-slider-section' ); //function refer to mindlab-general-page.php


  //All fields for quote
  //front page quote name field
  add_settings_field( 'mindlab-front-page-quote-name', 'Name of Quote Provider', 'mindlab_front_page_quote_name_field', 'mindlab_admin', 'mindlab-front-page-quote' ); //function refer to mindlab-general-page.php

  //front page quote desc field
  add_settings_field( 'mindlab-front-page-quote-desc', 'Quote Description', 'mindlab_front_page_quote_desc_field', 'mindlab_admin', 'mindlab-front-page-quote' ); //function refer to mindlab-general-page.php


  //All fields for video
  //front page video title field
  add_settings_field( 'mindlab-front-page-video-title', 'Video Title', 'mindlab_front_page_video_title_field', 'mindlab_admin', 'mindlab-front-page-video' ); //function refer to mindlab-general-page.php

  add_settings_field( 'mindlab-front-page-video-uri', 'Video URI', 'mindlab_front_page_video_uri_field', 'mindlab_admin', 'mindlab-front-page-video' ); //function refer to mindlab-general-page.php

  //front page video desc field
  add_settings_field( 'mindlab-front-page-video-desc', 'Video Description', 'mindlab_front_page_video_desc_field', 'mindlab_admin', 'mindlab-front-page-video' ); //function refer to mindlab-general-page.php


  //All fields for footer copyright
  //footer copyright field
  add_settings_field( 'mindlab-footer-copyright', 'Copyright Details', 'mindlab_footer_copyright_field', 'mindlab_admin', 'mindlab-footer-section' ); //function refer to mindlab-general-page.php



  //All fields for footer social links
  //footer twitter field
  add_settings_field( 'mindlab-footer-twitter', 'Twitter Link', 'mindlab_footer_twitter_field', 'mindlab_admin', 'mindlab-footer-section' ); //function refer to mindlab-general-page.php

  //footer facebook field
  add_settings_field( 'mindlab-footer-facebook', 'Facebook Link', 'mindlab_footer_facebook_field', 'mindlab_admin', 'mindlab-footer-section' ); //function refer to mindlab-general-page.php

  //footer google plus field
  add_settings_field( 'mindlab-footer-gplus', 'Google+ Link', 'mindlab_footer_gplus_field', 'mindlab_admin', 'mindlab-footer-section' ); //function refer to mindlab-general-page.php

  //footer linkedin field
  add_settings_field( 'mindlab-footer-linkedin', 'Linkedin Link', 'mindlab_footer_linkedin_field', 'mindlab_admin', 'mindlab-footer-section' ); //function refer to mindlab-general-page.php

  /*custom mindlab general option end*/


  //=================================================================================


  /*custom mindlab our service option start*/
  /* Mind Lab our service option's setting group registration start*/
  //first service
  register_setting( 'mindlab-service-group', 'first_icon' );
  register_setting( 'mindlab-service-group', 'first_service_title' );
  register_setting( 'mindlab-service-group', 'first_service_desc' );

  //second service
  register_setting( 'mindlab-service-group', 'second_icon' );
  register_setting( 'mindlab-service-group', 'second_service_title' );
  register_setting( 'mindlab-service-group', 'second_service_desc' );

  //third service
  register_setting( 'mindlab-service-group', 'third_icon' );
  register_setting( 'mindlab-service-group', 'third_service_title' );
  register_setting( 'mindlab-service-group', 'third_service_desc' );

  //fourth service
  register_setting( 'mindlab-service-group', 'fourth_icon' );
  register_setting( 'mindlab-service-group', 'fourth_service_title' );
  register_setting( 'mindlab-service-group', 'fourth_service_desc' );

  //fifth service
  register_setting( 'mindlab-service-group', 'fifth_icon' );
  register_setting( 'mindlab-service-group', 'fifth_service_title' );
  register_setting( 'mindlab-service-group', 'fifth_service_desc' );

  //sixth service
  register_setting( 'mindlab-service-group', 'sixth_icon' );
  register_setting( 'mindlab-service-group', 'sixth_service_title' );
  register_setting( 'mindlab-service-group', 'sixth_service_desc' );

  //seventh service
  register_setting( 'mindlab-service-group', 'seventh_icon' );
  register_setting( 'mindlab-service-group', 'seventh_service_title' );
  register_setting( 'mindlab-service-group', 'seventh_service_desc' );

  //seventh service
  register_setting( 'mindlab-service-group', 'seventh_icon' );
  register_setting( 'mindlab-service-group', 'seventh_service_title' );
  register_setting( 'mindlab-service-group', 'seventh_service_desc' );

  //eighth service
  register_setting( 'mindlab-service-group', 'eighth_icon' );
  register_setting( 'mindlab-service-group', 'eighth_service_title' );
  register_setting( 'mindlab-service-group', 'eighth_service_desc' );

  /*our service's setting group registration end*/


  //========================================================================================

  // Adding sections in the theme option
  //our service first section
  add_settings_section( 'mindlab-first-service-section', 'First Service', 'mindlab_first_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service second section
  add_settings_section( 'mindlab-second-service-section', 'Second Service', 'mindlab_second_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service third section
  add_settings_section( 'mindlab-third-service-section', 'Third Service', 'mindlab_third_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service fourth section
  add_settings_section( 'mindlab-fourth-service-section', 'Fourth Service', 'mindlab_fourth_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service fifth section
  add_settings_section( 'mindlab-fifth-service-section', 'Fifth Service', 'mindlab_fifth_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service sixth section
  add_settings_section( 'mindlab-sixth-service-section', 'Sixth Service', 'mindlab_sixth_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service seventh section
  add_settings_section( 'mindlab-seventh-service-section', 'Seventh Service', 'mindlab_seventh_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php

  //our service eighth section
  add_settings_section( 'mindlab-eighth-service-section', 'Eighth Service', 'mindlab_eighth_service_section', 'mindlab_admin_our_services' ); //function refer to mindlab-our-services-page.php


  //==========================================================================================

  //first our service fields
  add_settings_field( 'first-icon-id', 'Icon ID', 'mindlab_first_service_icon', 'mindlab_admin_our_services', 'mindlab-first-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'first-service-title', 'Service Title', 'mindlab_first_service_title', 'mindlab_admin_our_services', 'mindlab-first-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'first-service-desc', 'Service Description', 'mindlab_first_service_desc', 'mindlab_admin_our_services', 'mindlab-first-service-section' ); //function refer to mindlab-our-services-page.php

  //second our service fields
  add_settings_field( 'second-icon-id', 'Icon ID', 'mindlab_second_service_icon', 'mindlab_admin_our_services', 'mindlab-second-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'second-service-title', 'Service Title', 'mindlab_second_service_title', 'mindlab_admin_our_services', 'mindlab-second-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'second-service-desc', 'Service Description', 'mindlab_second_service_desc', 'mindlab_admin_our_services', 'mindlab-second-service-section' ); //function refer to mindlab-our-services-page.php

  //third our service fields
  add_settings_field( 'third-icon-id', 'Icon ID', 'mindlab_third_service_icon', 'mindlab_admin_our_services', 'mindlab-third-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'third-service-title', 'Service Title', 'mindlab_third_service_title', 'mindlab_admin_our_services', 'mindlab-third-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'third-service-desc', 'Service Description', 'mindlab_third_service_desc', 'mindlab_admin_our_services', 'mindlab-third-service-section' ); //function refer to mindlab-our-services-page.php

  //fourth our service fields
  add_settings_field( 'fourth-icon-id', 'Icon ID', 'mindlab_fourth_service_icon', 'mindlab_admin_our_services', 'mindlab-fourth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'fourth-service-title', 'Service Title', 'mindlab_fourth_service_title', 'mindlab_admin_our_services', 'mindlab-fourth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'fourth-service-desc', 'Service Description', 'mindlab_fourth_service_desc', 'mindlab_admin_our_services', 'mindlab-fourth-service-section' ); //function refer to mindlab-our-services-page.php

  //fifth our service fields
  add_settings_field( 'fifth-icon-id', 'Icon ID', 'mindlab_fifth_service_icon', 'mindlab_admin_our_services', 'mindlab-fifth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'fifth-service-title', 'Service Title', 'mindlab_fifth_service_title', 'mindlab_admin_our_services', 'mindlab-fifth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'fifth-service-desc', 'Service Description', 'mindlab_fifth_service_desc', 'mindlab_admin_our_services', 'mindlab-fifth-service-section' ); //function refer to mindlab-our-services-page.php

  //sixth our service fields
  add_settings_field( 'sixth-icon-id', 'Icon ID', 'mindlab_sixth_service_icon', 'mindlab_admin_our_services', 'mindlab-sixth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'sixth-service-title', 'Service Title', 'mindlab_sixth_service_title', 'mindlab_admin_our_services', 'mindlab-sixth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'sixth-service-desc', 'Service Description', 'mindlab_sixth_service_desc', 'mindlab_admin_our_services', 'mindlab-sixth-service-section' ); //function refer to mindlab-our-services-page.php

  //seventh our service fields
  add_settings_field( 'seventh-icon-id', 'Icon ID', 'mindlab_seventh_service_icon', 'mindlab_admin_our_services', 'mindlab-seventh-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'seventh-service-title', 'Service Title', 'mindlab_seventh_service_title', 'mindlab_admin_our_services', 'mindlab-seventh-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'seventh-service-desc', 'Service Description', 'mindlab_seventh_service_desc', 'mindlab_admin_our_services', 'mindlab-seventh-service-section' ); //function refer to mindlab-our-services-page.php

  //eighth our service fields
  add_settings_field( 'eighth-icon-id', 'Icon ID', 'mindlab_eighth_service_icon', 'mindlab_admin_our_services', 'mindlab-eighth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'eighth-service-title', 'Service Title', 'mindlab_eighth_service_title', 'mindlab_admin_our_services', 'mindlab-eighth-service-section' ); //function refer to mindlab-our-services-page.php
  add_settings_field( 'eighth-service-desc', 'Service Description', 'mindlab_eighth_service_desc', 'mindlab_admin_our_services', 'mindlab-eighth-service-section' ); //function refer to mindlab-our-services-page.php

  /*custom our service option end*/

  //register_setting( $option_group, $option_name, $sanitize_callback = '' )
  //add_settings_section( $id, $title, $callback, $page )
  //add_settings_field( $id, $title, $callback, $page, $section = 'default', $args = array() )
}
