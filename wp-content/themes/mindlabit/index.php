<?php get_header(); ?>
<!-- who we are section start-->
<?php
  if (is_active_sidebar( 'who-we-are' )):
?>
<section id="about" class="section-small">
      <?php dynamic_sidebar( 'who-we-are' ); ?>
</section>
<?php endif; ?>



<!-- who we are section end-->

<!-- About Section-->
<?php
  if (is_active_sidebar( 'we-have-magic' )):
?>
<section id="about2" class="bg-gray">
      <?php dynamic_sidebar( 'we-have-magic' ); ?>
</section>
<?php endif; ?>


<?php get_template_part( 'template/home-service' ); ?>
<?php get_template_part( 'template/home-subscribe' ); ?>


<section id="news">
  <div class="container">
    <h3 class="pull-left">Latest news</h3>
    <div class="pull-right">
      <h5><a href="news3.html">SEE ALL</a></h5>
    </div>
    <div class="clearfix"></div>
    <div class="row grid-pad">
    <?php
      if (have_posts()):
        while (have_posts()): the_post();
          get_template_part( 'template/content', get_post_format() );
        endwhile;
      endif;
    ?>
    </div>
    </div>
</section>


<?php get_template_part( 'template/home-portfolio' ); ?>
<?php get_template_part( 'template/home-team' ); ?>
<?php get_template_part( 'template/home-testimonial' ); ?>
<?php get_template_part( 'template/home-contact' ); ?>
<?php get_footer(); ?>
