
    <!-- Why Section-->

<section>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h3>Why Choose Us?</h3>
      </div>
    </div>


    <?php
      if (is_active_sidebar( 'mindlab-why-choose-us' )): dynamic_sidebar( 'mindlab-why-choose-us' );
      endif;
    ?>



  </div>
</section>
<!-- Facts section-->
<section class="facts section-small bg-img">
  <div class="overlay"></div>
  <div class="container text-center">
    <div class="row">
    <?php
      if (is_active_sidebar( 'mindlab-counter-widget' )): dynamic_sidebar( 'mindlab-counter-widget' );
      endif;
    ?>
    </div>
  </div>
</section>
<!-- Testimonials Section-->
<section id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h3 class="text-center">Testimonials</h3>
        <div id="carousel-testimonials" data-ride="carousel" class="carousel slide carousel-fade">
          <!-- Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-testimonials" data-slide-to="1"></li>
            <li data-target="#carousel-testimonials" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides-->
          <div role="listbox" class="carousel-inner">
            <?php
              $count = 0;
              $arr_team = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
                'meta_query' => array(array('key' => '_thumbnail_id')),
              );
              $testimonial = new WP_Query($arr_team);
              if ($testimonial->have_posts()):
                while ($testimonial->have_posts()): $testimonial->the_post(); $count++;
                  ?>
                  <div class='item <?php if( $count == 1 ) echo 'active' ?>'>
                  <?php if (has_post_thumbnail( )): ?>
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'center-block']); ?>
                  <?php endif; ?>

                  <?php if (!has_post_thumbnail( )): ?>
                  <img src="<?php echo get_template_directory_uri() ?>/img/testimonials/1.jpg" alt="" class="center-block">
                  <?php endif; ?>

                  <div class="carousel-caption">
                    <?php the_title( "<h2 class='classic'>", "</h2>" ); ?>
                    <h5 class="no-pad">
                      Thank you very much, the template is great! Very concise and simple.
                    </h5>
                  </div>
                </div>
                  <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Action video-->
<section class="section-small bg-img2 text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <?php
        $getVideoTitle = esc_attr( get_option('mindlab_front_page_video_title') );
        $setVideoTitle = (empty($getVideoTitle) ? $setVideoTitle = 'WATCH VIDEO' : $setVideoTitle = $getVideoTitle);

        $getVideoUri = esc_attr( get_option('mindlab_front_page_video_uri') );
        $setVideoUri = (empty($getVideoUri) ? $setVideoUri = 'https://smridha.com' : $setVideoUri = $getVideoUri);

        $getVideoDesc = esc_attr( get_option('mindlab_front_page_video_desc') );
        $setVideoDesc = (empty($getVideoDesc) ? $setVideoDesc = 'A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can.' : $setVideoDesc = $getVideoDesc);
      ?>
      <div class="col-sm-8 col-sm-offset-2"><a href="<?= $setVideoUri; ?>" class="swipebox-video"><i class="icon icon-big ion-ios-videocam-outline"></i></a>
        <h2><?= $setVideoTitle; ?></h2>
        <p><?= $setVideoDesc; ?></p>
      </div>
    </div>
  </div>
</section>
