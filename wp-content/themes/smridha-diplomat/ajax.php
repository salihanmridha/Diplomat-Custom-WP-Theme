<?php
  add_action( 'wp_ajax_send_contact_frm', 'send_contact_frm');
  add_action( 'wp_ajax_nopriv_send_contact_frm', 'send_contact_frm');


  function send_contact_frm(){
    $name = wp_strip_all_tags( $_POST["name"] );
    $email = wp_strip_all_tags( $_POST["email"] );
    $subj = wp_strip_all_tags( $_POST["subj"] );
    $msg = wp_strip_all_tags( $_POST["msg"] );

    $message  =  "Name: " . $name ."\n <br>";
    $message .= "Email: " . $email ."\n <br>";
    $message .= "Subject: " . $subj ."\n <br>";
    $message .= "Message: " . $msg ."\n <br>";

    //send email function
    $to = "salihanmridha@gmail.com";
    $subject = $name ." contacted from " . get_bloginfo( 'name' );
    $headers[] = "From: " . get_bloginfo( 'name' ) . '<' . get_bloginfo('admin_email') . '>';
    $headers[] = "Reply-To: " . $name . '<' . $email . '>';
    $headers[] = "Content-Type: text/html: charset=UTF-8";

    wp_mail( $to, $subject, $message, $headers);

    die();
  }
?>
