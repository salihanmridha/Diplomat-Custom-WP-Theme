<h1>MindLab Theme Options</h1>
<h3>Mindlab Theme General Options</h3>

<?php
//all call back functions for Logo Upload start
function mindlab_logo_upload_section(){
  //Logo Uplaod section's function, it can be empty
}

function mindlab_logo_upload_field(){
  $logo_upload =  esc_attr(get_option( 'mindlab_logo_upload' ));
  echo '<input onclick="logofunction()" class="button button-secondary" id="upload-logo-button" type="button" value="Upload Your Logo"> <input id="logo_id" type="hidden" name="mindlab_logo_upload" value="'.$logo_upload.'" /> <p id="prview-logo" class="description" style=""> Logo URI: '. $logo_upload.'</p> <p class="description">Upload Your Logo Here - We Recommend You upload logo in 450x65px dimension</p>';
}

//all call back functions for Logo Upload end



//all call back functions for body image slider start
function mindlab_body_img_slider_section(){
  //body image slider Uplaod section's function, it can be empty
}

//body slider title callback function
function mindlab_body_slider_title_field(){
  $body_slider_title = esc_attr( get_option( 'mindlab_body_slider_title' ) );
  echo '<input type="text" name="mindlab_body_slider_title" value="'.$body_slider_title.'" />';
}

//body slider sub-title callback function
function mindlab_body_slider_subtitle_field(){
  $body_slider_subtitle = esc_attr( get_option( 'mindlab_body_slider_subtitle' ) );
  echo '<input type="text" name="mindlab_body_slider_subtitle" value="'.$body_slider_subtitle.'" />';
}

//first body slider image callback function
function mindlab_first_body_img_field(){
  $first_body_img_slider = esc_attr( get_option( 'mindlab_body_first_img_slider' ) );
  echo '<input onclick="firstbodysliderfunction()" class="button button-secondary" id="upload-first-body-slider-img" type="button" value="Upload Your First Body Slider Image"> <input id="body_slider_first_img_id" type="hidden" name="mindlab_body_first_img_slider" value="'.$first_body_img_slider.'" /> <p id="prview-first-body-slider-img" class="description" style=""> Image URI: '. $first_body_img_slider.'</p> <p class="description">Upload Your First Image Here - We Recommend You upload IMage in 1600x1080px dimension</p>';
}
//second body slider image callback function
function mindlab_second_body_img_field(){
  $second_body_img_slider = esc_attr( get_option( 'mindlab_body_second_img_slider' ) );
  echo '<input onclick="secondbodysliderfunction()" class="button button-secondary" id="upload-second-body-slider-img" type="button" value="Upload Your second Body Slider Image"> <input id="body_slider_second_img_id" type="hidden" name="mindlab_body_second_img_slider" value="'.$second_body_img_slider.'" /> <p id="prview-second-body-slider-img" class="description" style=""> Image URI: '. $second_body_img_slider.'</p> <p class="description">Upload Your second Image Here - We Recommend You upload IMage in 1600x1080px dimension</p>';
}
//third body slider image callback function
function mindlab_third_body_img_field(){
  $third_body_img_slider = esc_attr( get_option( 'mindlab_body_third_img_slider' ) );
  echo '<input onclick="thirdbodysliderfunction()" class="button button-thirdary" id="upload-third-body-slider-img" type="button" value="Upload Your third Body Slider Image"> <input id="body_slider_third_img_id" type="hidden" name="mindlab_body_third_img_slider" value="'.$third_body_img_slider.'" /> <p id="prview-third-body-slider-img" class="description" style=""> Image URI: '. $third_body_img_slider.'</p> <p class="description">Upload Your third Image Here - We Recommend You upload IMage in 1600x1080px dimension</p>';
}

//all call back functions for body image slider end






//all call back functions for front page quote start
function mindlab_front_page_quote_section(){
  //front page quote section's function, it can be empty
}

//front page quote name field's callback function
function mindlab_front_page_quote_name_field(){
  $quote_name = esc_attr( get_option( 'mindlab_front_page_quote_name' ) );
  echo '<input type="text" name="mindlab_front_page_quote_name" value="'.$quote_name.'" />';
}

//front page quote description field's callback function
function mindlab_front_page_quote_desc_field(){
  $quote_desc = esc_attr( get_option( 'mindlab_front_page_quote_desc' ));
  echo '<textarea name="mindlab_front_page_quote_desc" rows="8" cols="80">'.$quote_desc.'</textarea>';
}

//all call back functions for front page quote end


//all call back functions for front page video start
function mindlab_front_page_video_section(){
  //front page video section's function, it can be empty
}

//front page video title field's callback function
function mindlab_front_page_video_title_field(){
  $video_title = esc_attr( get_option( 'mindlab_front_page_video_title' ) );
  echo '<input type="text" name="mindlab_front_page_video_title" value="'.$video_title.'" />';
}

//front page video URI field's callback function
function mindlab_front_page_video_uri_field(){
  $video_uri = esc_attr( get_option( 'mindlab_front_page_video_uri' ) );
  echo '<input type="text" name="mindlab_front_page_video_uri" value="'.$video_uri.'" />';
}

//front page video description field's callback function
function mindlab_front_page_video_desc_field(){
  $video_desc = esc_attr( get_option( 'mindlab_front_page_video_desc' ));
  echo '<textarea name="mindlab_front_page_video_desc" rows="8" cols="80">'.$video_desc.'</textarea>';
}





//all call back functions for footer section start
function mindlab_footer_section(){
  //footer section's function, it can be empty
}

//footer copyright field's callback function
function mindlab_footer_copyright_field(){
  $footer_copyright = esc_attr( get_option( 'mindlab_footer_copyright' ));
  echo '<textarea name="mindlab_footer_copyright" rows="8" cols="80">'.$footer_copyright.'</textarea>';
}

//footer twitter field's callback function
function mindlab_footer_twitter_field(){
  $footer_twitter = esc_attr( get_option( 'mindlab_footer_twitter_link' ) );
  echo '<input type="text" name="mindlab_footer_twitter_link" value="'.$footer_twitter.'" />';
}

//footer facebook field's callback function
function mindlab_footer_facebook_field(){
  $footer_facebook = esc_attr( get_option( 'mindlab_footer_facebook_link' ) );
  echo '<input type="text" name="mindlab_footer_facebook_link" value="'.$footer_facebook.'" />';
}

//footer google plus field's callback function
function mindlab_footer_gplus_field(){
  $footer_gplus = esc_attr( get_option( 'mindlab_footer_gplus_link' ) );
  echo '<input type="text" name="mindlab_footer_gplus_link" value="'.$footer_gplus.'" />';
}

//footer linkedin field's callback function
function mindlab_footer_linkedin_field(){
  $footer_linkedin = esc_attr( get_option( 'mindlab_footer_linkedin_link' ) );
  echo '<input type="text" name="mindlab_footer_linkedin_link" value="'.$footer_linkedin.'" />';
}

//all call back functions for footer section end
?>

<?php settings_errors(  ); ?>
<form action="options.php" method="post">

  <?php do_settings_sections( 'mindlab_admin' ); ?>
  <?php settings_fields( 'mindlab-general-group' ); ?>
  <?php submit_button(); ?>
</form>
