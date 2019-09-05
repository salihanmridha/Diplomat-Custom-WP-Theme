<?php
/*
--post content--
*/


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail( )): ?>
        <div style="">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive center-block img-size']); ?>
        </div>

      <?php endif; ?>
      <?php if (!has_post_thumbnail( )): ?>
        <img src="<?php echo get_template_directory_uri() ?>/img/3.jpg" alt="" class="img-responsive center-block">
      <?php endif; ?>

      <?php the_title( "<h5>", "</h5>" ); ?>
    </a>
    <p><?php the_excerpt(); ?></p><a href="<?php the_permalink(); ?>" class="btn btn-gray btn-xs"><?php _e('Read more'); ?></a>
  </div>
</article>
