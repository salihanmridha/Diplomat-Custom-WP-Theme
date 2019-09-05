<?php
//call back function of team designation meta box output
function mindlab_team_designation_callback($post){
  wp_nonce_field( 'mindlab_save_designation_meta_data', 'mindlab_team_designation_meta_box_nonce');

  $designationValue = get_post_meta( $post->ID, '_team_meta_designation_key', true );

  echo '<label for="mindlab-meta-designation-field">Member Designation: </label>
  <input type="text" name="mindlab-meta-designation-field" id="mindlab-meta-designation-field" value="'.esc_attr( $designationValue ).'" size="100">';
}

//function for team designation meta box save to database
function mindlab_save_designation_meta_data($post_id){
  if (!isset($_POST['mindlab_team_designation_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['mindlab_team_designation_meta_box_nonce'], 'mindlab_save_designation_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['mindlab-meta-designation-field'])) {
    return;
  }

  $designation_data = sanitize_text_field($_POST['mindlab-meta-designation-field']);

  update_post_meta( $post_id, '_team_meta_designation_key', $designation_data );
}
//team custom meta box designation done


//call back function of team twitter meta box output
function mindlab_team_twitter_callback($post){
  wp_nonce_field( 'mindlab_save_twitter_meta_data', 'mindlab_team_twitter_meta_box_nonce');

  $twitterValue = get_post_meta( $post->ID, '_team_meta_twitter_key', true );

  echo '<label for="mindlab-meta-twitter-field">Member Twitter: </label><br>
  <input type="text" name="mindlab-meta-twitter-field" id="mindlab-meta-twitter-field" value="'.esc_attr( $twitterValue ).'" size="100">';
}

//function of team twitter meta box save into database
function mindlab_save_twitter_meta_data($post_id){
  if (!isset($_POST['mindlab_team_twitter_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['mindlab_team_twitter_meta_box_nonce'], 'mindlab_save_twitter_meta_data' )) {
    return;
  }

  if (defined(DOING_AUTOSAVE) AND DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['mindlab-meta-twitter-field'])) {
    return;
  }

  $twitter_data = sanitize_text_field( $_POST['mindlab-meta-twitter-field'] );
  update_post_meta( $post_id, '_team_meta_twitter_key', $twitter_data);
}
//all functions ended for team twitter meta box


//call back function of team facebook meta box output
function mindlab_team_fb_callback($post){
  wp_nonce_field( 'mindlab_save_fb_meta_data', 'mindlab_team_fb_meta_box_nonce' );

  $fbValue = get_post_meta( $post->ID, '_team_fb_meta_data_key', true );

  echo '<label for="mindlab-meta-fb-field">Member Facebook: </label>
  <input type="text" name="mindlab-meta-fb-field" id="mindlab-meta-fb-field" value="'.esc_attr( $fbValue ).'" size="100">';
}

//function of team facebook meta box save into database
function mindlab_save_fb_meta_data($post_id){
  if (!isset($_POST['mindlab_team_fb_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['mindlab_team_fb_meta_box_nonce'], 'mindlab_save_fb_meta_data' )) {
    return;
  }

  if (defined(DOING_AUTOSAVE) AND DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id)) {
    return;
  }

  if (!isset($_POST['mindlab-meta-fb-field'])) {
    return;
  }

  $fbData = sanitize_text_field( $_POST['mindlab-meta-fb-field'] );
  update_post_meta( $post_id, '_team_fb_meta_data_key', $fbData );
}
//all functions ended for team facebook meta box






//call back function of team gplus meta box output
function mindlab_team_gplus_callback($post){
  wp_nonce_field( 'mindlab_save_gplus_meta_data', 'mindlab_team_gplus_meta_box_nonce' );

  $gplusValue = get_post_meta( $post->ID, '_team_gplus_meta_data_key', true );

  echo '<label for="mindlab-meta-gplus-field">Member Google+: </label>
  <input type="text" name="mindlab-meta-gplus-field" id="mindlab-meta-gplus-field" value="'.esc_attr( $gplusValue ).'" size="100">';
}

//function of team facebook meta box save into database
function mindlab_save_gplus_meta_data($post_id){
  if (!isset($_POST['mindlab_team_gplus_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['mindlab_team_gplus_meta_box_nonce'], 'mindlab_save_gplus_meta_data' )) {
    return;
  }

  if (defined(DOING_AUTOSAVE) AND DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id)) {
    return;
  }

  if (!isset($_POST['mindlab-meta-gplus-field'])) {
    return;
  }

  $gplusData = sanitize_text_field( $_POST['mindlab-meta-gplus-field'] );
  update_post_meta( $post_id, '_team_gplus_meta_data_key', $gplusData );
}
//all functions ended for team facebook meta box
