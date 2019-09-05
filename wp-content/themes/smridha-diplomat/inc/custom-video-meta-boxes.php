<?php
//call back function of video meta box output
function video_callback($post){
  wp_nonce_field( 'save_video_meta_data', 'video_meta_box_nonce');

  $videoValue = get_post_meta( $post->ID, '_meta_video_key', true );

  echo '<label for="meta-video-field">Video URL: </label><br>
  <input type="text" name="meta-video-field" value="'.esc_attr( $videoValue ).'" size="100">';
}

//function for video meta box save to database
function save_video_meta_data($post_id){
  if (!isset($_POST['video_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['video_meta_box_nonce'], 'save_video_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-video-field'])) {
    return;
  }

  $start_data = sanitize_text_field($_POST['meta-video-field']);

  update_post_meta( $post_id, '_meta_video_key', $start_data );
}
//video custom meta box end
