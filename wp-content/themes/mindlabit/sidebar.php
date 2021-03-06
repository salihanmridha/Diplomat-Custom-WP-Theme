<?php
  if (!is_active_sidebar( 'right-sidebar' ) {
    return;
  }
?>

<div class="col-md-3 col-md-offset-1">
  <h4>search</h4>
  <form action="#" method="post" class="form-inline subscribe-form">
    <div class="input-group input-group-lg">
      <input type="search" name="search" placeholder="Search..." class="form-control"><span class="input-group-btn">
        <button type="submit" name="search" class="btn btn-dark"><i class="fa fa-search fa-lg"></i></button></span>
    </div>
  </form>
  <hr>
  <h4>categories</h4>
  <ul class="list-unstyled">
    <li><a href="#">Design</a></li>
    <li><a href="#">Frameworks</a></li>
    <li><a href="#">Lifestyle</a></li>
    <li><a href="#">Fashion</a></li>
    <li><a href="#">Web Development</a></li>
    <li><a href="#">Front End</a></li>
  </ul>
  <hr>
  <h4>Partners</h4>
  <div class="row no-pad">
    <div class="col-md-6 col-sm-3">
      <p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="" class="img-responsive"></a></p>
    </div>
    <div class="col-md-6 col-sm-3">
      <p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="" class="img-responsive"></a></p>
    </div>
    <div class="col-md-6 col-sm-3">
      <p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo5.png" alt="" class="img-responsive"></a></p>
    </div>
    <div class="col-md-6 col-sm-3">
      <p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo6.png" alt="" class="img-responsive"></a></p>
    </div>
  </div>
  <hr>
  <h4>subscribe</h4>
  <p>Sign up with your email address to receive news and updates.</p>
  <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
  <form id="mc-embedded-subscribe-form" action="" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
    <div class="input-group input-group-lg">
      <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"><span class="input-group-btn">
        <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">go</button></span>
      <div id="mce-responses"></div>
      <div id="mce-error-response" style="display:none" class="response"></div>
      <div id="mce-success-response" style="display:none" class="response"></div>
    </div>
  </form>
  <!-- End MailChimp Signup Form--><img src="<?php echo get_template_directory_uri(); ?>/img/misc/mailchimp.png" alt="">
</div>
