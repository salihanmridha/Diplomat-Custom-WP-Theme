<!-- Portfolio-->
<section id="portfolio" class="bg-gray no-pad-btm">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h3>Portfolio</h3>
        <ul class="portfolio-sorting list-inline text-center">
          <li><a href="#" data-group="all" class="active">All</a></li>
          <?php
            $portfolio_cats = get_terms( 'portfolio-category' );
            if ( ! empty( $portfolio_cats ) && ! is_wp_error( $portfolio_cats ) ){

            foreach ( $portfolio_cats as $portfolio_cat ) {
             echo "<li><a href='#' data-group='$portfolio_cat->name'>" . $portfolio_cat->name . "</a></li>";
            }
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div id="grid" class="row portfolio-items">
      <?php
        $arr = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 8,
          'meta_query' => array(array('key' => '_thumbnail_id')),
        );

        $portfolio = new WP_Query($arr);
        if ($portfolio->have_posts()):
          while($portfolio->have_posts()): $portfolio->the_post();

          $portfolio_categories = "";
          $portfolio_cats = get_the_terms( $post->ID, 'portfolio-category' );
          if ( ! empty( $portfolio_cats ) && ! is_wp_error( $portfolio_cats ) ){

          foreach ( $portfolio_cats as $portfolio_cat ) {
           $portfolio_categories .= "&quot;".$portfolio_cat->name."&quot;, ";
          }

          }
      ?>
      <div data-groups="[<?php echo $portfolio_categories . "&quot;all&quot;"; ?>]" class="col-md-3 col-sm-6 no-pad">
        <div class="portfolio-item">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail( )): ?>
              <img src="<?= the_post_thumbnail_url(); ?>" alt="">
            <?php endif; ?>
            <div class="portfolio-overlay">
              <div class="caption">
                <h5>Form Image Creative</h5>
                <?php the_title( '<h5>', '</h5>' ) ?>
                <span><?php the_excerpt(); ?></span>
              </div>
            </div>
          </a></div>
      </div>
  <?php
    endwhile;
  endif;
  ?>

    </div>
  </div>
</section>

<!-- News Block-->


<div class="section-small action bg-gray text-center"><a href="portfolio-masonry-4.html" class="btn btn-dark-border">View All Portfolio</a></div>
