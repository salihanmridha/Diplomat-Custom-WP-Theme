<?php
//call back function of events start meta box output
function event_start_callback($post){
  wp_nonce_field( 'save_start_meta_data', 'event_start_meta_box_nonce');

  $startValue = get_post_meta( $post->ID, '_meta_start_key', true );

  echo '<label for="meta-start-field">Event Start: </label><br>
  <input type="date" id="datepicker" name="meta-start-field" value="'.esc_attr( $startValue ).'" size="100">';
}

//function for events start meta box save to database
function save_start_meta_data($post_id){
  if (!isset($_POST['event_start_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_start_meta_box_nonce'], 'save_start_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-start-field'])) {
    return;
  }

  $start_data = sanitize_text_field($_POST['meta-start-field']);

  update_post_meta( $post_id, '_meta_start_key', $start_data );
}
//events custom meta box start end


//call back function of events end meta box output
function event_end_callback($post){
  wp_nonce_field( 'save_end_meta_data', 'event_end_meta_box_nonce');

  $endValue = get_post_meta( $post->ID, '_meta_end_key', true );

  echo '<label for="meta-end-field">Event End: </label><br>
  <input name="meta-end-field" type="date" id="datepicker" value="'.esc_attr( $endValue ).'" size="100">';
}

//function for events end meta box save to database
function save_end_meta_data($post_id){
  if (!isset($_POST['event_end_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_end_meta_box_nonce'], 'save_end_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-end-field'])) {
    return;
  }

  $end_data = sanitize_text_field($_POST['meta-end-field']);

  update_post_meta( $post_id, '_meta_end_key', $end_data );
}
//events custom meta box end event end


//call back function of events phone meta box output
function event_phone_callback($post){
  wp_nonce_field( 'save_phone_meta_data', 'event_phone_meta_box_nonce');

  $phoneValue = get_post_meta( $post->ID, '_meta_phone_key', true );

  echo '<label for="meta-phone-field">Phone: </label><br>
  <input type="text" name="meta-phone-field" id="meta-phone-field" value="'.esc_attr( $phoneValue ).'" size="100">';
}

//function for events phone meta box save to database
function save_phone_meta_data($post_id){
  if (!isset($_POST['event_phone_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_phone_meta_box_nonce'], 'save_phone_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-phone-field'])) {
    return;
  }

  $phone_data = sanitize_text_field($_POST['meta-phone-field']);

  update_post_meta( $post_id, '_meta_phone_key', $phone_data );
}
//events custom meta box end phone end




//call back function of events address meta box output
function event_address_callback($post){
  wp_nonce_field( 'save_address_meta_data', 'event_address_meta_box_nonce');

  $addressValue = get_post_meta( $post->ID, '_meta_address_key', true );

  echo '<label for="meta-address-field">Address: </label><br>
  <input type="text" name="meta-address-field" id="meta-address-field" value="'.esc_attr( $addressValue ).'" size="100">';
}

//function for events address meta box save to database
function save_address_meta_data($post_id){
  if (!isset($_POST['event_address_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_address_meta_box_nonce'], 'save_address_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-address-field'])) {
    return;
  }

  $address_data = sanitize_text_field($_POST['meta-address-field']);

  update_post_meta( $post_id, '_meta_address_key', $address_data );
}
//events custom meta box address event end



//call back function of events person meta box output
function event_person_callback($post){
  wp_nonce_field( 'save_person_meta_data', 'event_person_meta_box_nonce');

  $personValue = get_post_meta( $post->ID, '_meta_person_key', true );

  echo '<label for="meta-person-field">Person: </label><br>
  <input type="text" name="meta-person-field" id="meta-person-field" value="'.esc_attr( $personValue ).'" size="100">';
}

//function for events person meta box save to database
function save_person_meta_data($post_id){
  if (!isset($_POST['event_person_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_person_meta_box_nonce'], 'save_person_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-person-field'])) {
    return;
  }

  $person_data = sanitize_text_field($_POST['meta-person-field']);

  update_post_meta( $post_id, '_meta_person_key', $person_data );
}
//events custom meta box person event end


//call back function of events website meta box output
function event_website_callback($post){
  wp_nonce_field( 'save_website_meta_data', 'event_website_meta_box_nonce');

  $websiteValue = get_post_meta( $post->ID, '_meta_website_key', true );

  echo '<label for="meta-website-field">Website: </label><br>
  <input type="text" name="meta-website-field" id="meta-website-field" value="'.esc_attr( $websiteValue ).'" size="100">';
}

//function for events website meta box save to database
function save_website_meta_data($post_id){
  if (!isset($_POST['event_website_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_website_meta_box_nonce'], 'save_website_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-website-field'])) {
    return;
  }

  $website_data = sanitize_text_field($_POST['meta-website-field']);

  update_post_meta( $post_id, '_meta_website_key', $website_data );
}
//events custom meta box website event end


//call back function of events map meta box output
function event_map_callback($post){
  wp_nonce_field( 'save_map_meta_data', 'event_map_meta_box_nonce');

  $mapValue = get_post_meta( $post->ID, '_meta_map_key', true );

  echo '<label for="meta-map-field">map: </label><br>
  <input type="text" name="meta-map-field" id="meta-map-field" value="'.esc_attr( $mapValue ).'" size="100">';
}

//function for events map meta box save to database
function save_map_meta_data($post_id){
  if (!isset($_POST['event_map_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce( $_POST['event_map_meta_box_nonce'], 'save_map_meta_data' )) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can( 'edit_post', $post_id )) {
    return;
  }

  if (!isset($_POST['meta-map-field'])) {
    return;
  }

  $map_data = sanitize_text_field($_POST['meta-map-field']);

  update_post_meta( $post_id, '_meta_map_key', $map_data );
}
//events custom meta box map event end
