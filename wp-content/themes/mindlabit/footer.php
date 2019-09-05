<!-- Footer Section-->
<section class="section-small footer bg-gray">
  <div class="container">
    <div class="row">
      <?php
        if (is_active_sidebar( 'mindlab-first-footer-sidebar' )): dynamic_sidebar( 'mindlab-first-footer-sidebar' );
        endif;
      ?>


      <div class="col-sm-2 col-sm-offset-1 footer-menu">
        <h5>Company</h5>
        <h6 class="no-pad"><a href="services.html">Our Services</a></h6>
        <h6 class="no-pad"><a href="clients.html">Our Clients</a></h6>
        <h6 class="no-pad"><a href="contact.html">Contact Us</a></h6>
        <h6 class="no-pad"><a href="shop.html">Shop</a></h6>
      </div>
      <div class="col-sm-2 footer-menu">
        <h5>&nbsp;</h5>
        <h6 class="no-pad"><a href="about.html">About us</a></h6>
        <h6 class="no-pad"><a href="portfolio-masonry-4.html">Portfolio</a></h6>
        <h6 class="no-pad"><a href="team.html">Our Team</a></h6>
        <h6 class="no-pad"><a href="register.html">Register</a></h6>
      </div>
      <div class="col-sm-3 text-right">
        <h5>Total downloads</h5><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
      </div>
    </div>
  </div>
</section>


<section class="section-small footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php
          $copyright = htmlspecialchars_decode(esc_attr( get_option('mindlab_footer_copyright')));
          $setCopyright = (!empty($copyright) ? $setCopyright = $copyright : 'Give Your Copyright Text');
        ?>
        <h6>
          <?php echo $setCopyright; ?>
        </h6>
      </div>
      <div class="col-sm-3 col-sm-offset-1">

      </div>
      <div class="col-sm-3 col-sm-offset-1 text-right">
        <?php
          $getTwitter = esc_attr(get_option('mindlab_footer_twitter_link'));
          $getFacebook = esc_attr(get_option('mindlab_footer_facebook_link'));
          $getGplus = esc_attr(get_option('mindlab_footer_gplus_link'));
          $getLinkedin = esc_attr(get_option('mindlab_footer_linkedin_link'));

          $setTwitter = (empty($getTwitter) ? $setTwitter = '#' : $setTwitter = $getTwitter);
          $setFacebook = (empty($getFacebook) ? $setFacebook = '#' : $setFacebook = $getFacebook);
          $setGplus = (empty($getGplus) ? $setGplus = '#' : $setGplus = $getGplus);
          $setLinkedin = (empty($getLinkedin) ? $setLinkedin = '#' : $setLinkedin = $getLinkedin);
        ?>
        <ul class="list-inline">
          <li><a href="<?= $setTwitter; ?>"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
          <li><a href="<?= $setFacebook; ?>"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
          <li><a href="<?= $setGplus; ?>"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
          <li><a href="<?= $setLinkedin; ?>"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Background Slider-->
<?php if (is_front_page()): ?>
  <?php
    $firstSlider = get_template_directory_uri() . '/img/16.jpg';
    $secondSlider = get_template_directory_uri() . '/img/3.jpg';
    $thirdSlider = get_template_directory_uri() . '/img/7.jpg';

    $getFirstSlider = esc_attr( get_option('mindlab_body_first_img_slider') );
    $getSecondSlider = esc_attr( get_option('mindlab_body_second_img_slider') );
    $getThirdSlider = esc_attr( get_option('mindlab_body_third_img_slider') );

    $setFirstSlider = (empty($getFirstSlider) ? $setFirstSlider = $firstSlider : $setFirstSlider = $getFirstSlider);

    $setSecondSlider = (empty($getSecondSlider) ? $setSecondSlider = $secondSlider : $setSecondSlider = $getSecondSlider);

    $setThirdSlider = (empty($getThirdSlider) ? $setThirdSlider = $thirdSlider : $setThirdSlider = $getThirdSlider);
  ?>
<script type="text/javascript">
(function($){
    $(document).ready(function() {

        $('body').vegas({
            delay: 7000,
            timer: false,
            transitionDuration: 2000,
            slides: [
                {src: '<?= $setFirstSlider ?>'},
                {src: '<?= $setSecondSlider ?>'},
                {src: '<?= $setThirdSlider ?>'}
            ],
            transition: [ 'swirlRight', 'swirlLeft' ],
            animation: [ 'kenburns' ]
        });
    });
})(jQuery);
</script>
<?php endif; ?>
<!-- Custom Theme JavaScript-->

<!--[if lt IE 9]>
<script src="httpss://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="httpss://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_footer(); ?>
</body>

<!-- Mirrored from forbetterweb.com/html/universal/indexkenburns2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 13:32:45 GMT -->
</html>
