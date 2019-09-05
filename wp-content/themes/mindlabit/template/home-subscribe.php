<!-- Slider-->
<?php
  if (is_active_sidebar( 'mindlab_awesome' )):
?>
<section id="action-slider">
  <?php dynamic_sidebar( 'mindlab_awesome' ); ?>      
</section>
<?php endif; ?>

<!-- Subscribe Section-->
<section id="subscribe" class="section-small bg-img5 text-center">
  <div class="overlay-white"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-offset-2">
        <h3>Subscribe</h3>
        <h5>Sign-Up For News Updates and Alerts</h5>
        <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
        <form id="mc-embedded-subscribe-form" action="https://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
          <div class="input-group input-group-lg">
            <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"><span class="input-group-btn">
              <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">Subscribe</button></span>
            <div id="mce-responses"></div>
            <div id="mce-error-response" style="display:none" class="response"></div>
            <div id="mce-success-response" style="display:none" class="response"></div>
          </div>
        </form>
        <!-- End MailChimp Signup Form--><img src="<?php echo get_template_directory_uri() ?>/img/misc/mailchimp.png" alt="">
      </div>
    </div>
  </div>
</section>
