<!-- LayerSlider -->
<div id="layerslider_1_1" class="ls-wp-container"
   style="width:1140px;height:500px;max-width:1140px;margin:0 auto;margin-bottom: 0px;">


   <?php
     $arr = array(
       'post_type' => 'slider',
       'posts_per_page' => -1,
       'meta_query' => array(array('key' => '_thumbnail_id')),
     );
     $slider = new WP_Query($arr);
     if ($slider->have_posts()):
       while ($slider->have_posts()): $slider->the_post();
   ?>
  <div class="ls-slide" data-ls="transition2d:11;">
    <?php if (has_post_thumbnail( )): ?>
    <img src="<?= the_post_thumbnail_url(); ?>" class="ls-bg" alt="<?php the_title(  ); ?>"/>
  <?php endif; ?>

    <h2 class="ls-l" style="top:210px;left:50%;font-size:48px;white-space: nowrap;"
      data-ls="offsetxin:0;durationin:600;delayin:500;easingin:easeInOutSine;scalexin:0.5;scaleyin:0.5;offsetxout:0;durationout:600;easingout:easeInOutExpo;scalexout:0;scaleyout:0;">
      <?php the_title(  ); ?></h2>

    <div class="ls-l" style="top:175px;left:50%;width:752px;height:1px;white-space: nowrap;"
       data-ls="offsetxin:0;durationin:700;delayin:800;easingin:linear;scalexin:0;offsetxout:0;durationout:600;scalexout:0;">
      <hr>
    </div>
    <div class="ls-l" style="top:267px;left:50%;width:752px;height:1px;white-space: nowrap;"
       data-ls="ut:0;durationout:600;scalexout:0;">
      <hr>
    </div>
    <div class="ls-l"
       style="top:310px;left:0px;width: 80%; left: 50%; @include transform(translateX(-50%));white-space: nowrap;"
       data-ls="offsetxin:0;offsetyin:20;durationin:500;delayin:1400;easingin:linear;scalexin:0.7;scaleyin:0.7;offsetxout:0;durationout:600;easingout:easeInOutExpo;scalexout:0;scaleyout:0;">
      <p class="text-center">
        <?php the_content(  ); ?>
      </p>
    </div>
  </div>
  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>
</div>

<!-- End LayerSlider -->
