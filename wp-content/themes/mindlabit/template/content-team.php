<?php
/*
--single team content--
*/


?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="col-md-3 col-sm-6">
    <p>
      <?php if (has_post_thumbnail( )): ?>
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive center-block img-size-team']); ?>
      <?php endif; ?>

      <?php if (!has_post_thumbnail( )): ?>
      <img src="<?php echo get_template_directory_uri() ?>/img/team/avatar1.jpg" alt="" class="img-responsive center-block">
      <?php endif; ?>
    </p>
    <?php the_title( "<h2 class='classic'>", "</h2>" ); ?>
    <?php
      $getMetaTwitter = get_post_meta($post->ID, '_team_meta_twitter_key', true);
      $setMetaTwitter = (empty($getMetaTwitter) ? $setMetaTwitter = "#" : $setMetaTwitter = $getMetaTwitter);

      $getMetaFb = get_post_meta($post->ID, '_team_fb_meta_data_key', true);
      $setMetaFb = (empty($getMetaFb) ? $setMetaFb = "#" : $setMetaFb = $getMetaFb);

      $getMetaGplus = get_post_meta($post->ID, '_team_gplus_meta_data_key', true);
      $setMetaGplus = (empty($getMetaGplus) ? $setMetaGplus = "#" : $setMetaGplus = $getMetaGplus);
    ?>
    <ul class="list-inline">
      <li><a href="<?= $setMetaTwitter ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
      <li><a href="<?= $setMetaFb ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
      <li><a href="<?= $setMetaGplus ?>"><i class="fa fa-google-plus fa-lg"></i></a></li>
    </ul>
    <?php

      $getMetaDesignation = get_post_meta($post->ID, '_team_meta_designation_key', true);
      $setMetaDesignation = (empty($getMetaDesignation) ? $setMetaDesignation = "Set Member Designation Here" : $setMetaDesignation = $getMetaDesignation);
    ?>
    <h6><?= $setMetaDesignation ?></h6>
  </div>
</article>
