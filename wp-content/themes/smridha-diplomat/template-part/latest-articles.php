<div class="section margin-bottom-20 columns medium-12 large-12 background-color-off">

  <div class="tmm_row row">

    <div class="relative">
      <h2 class="section-title">Latest Articles</h2>
      <?php
        $arr = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'meta_query' => array(array('key' => '_thumbnail_id')),
        );
        $posts = new WP_Query($arr);
        if ($posts->have_posts()):
          while ($posts->have_posts()): $posts->the_post();
          $postsComment = wp_count_comments( $post->ID );
          if ($posts->current_post == 0):
      ?>
      <div class="row post-list full-width">

        <article class="medium-12 large-12 columns">

          <div class="post post-alternate-3 slideUp">

            <div class="entry-media">

              <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
                <?php if (has_post_thumbnail( )): ?>
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                <?php endif; ?>
              </a>

              <div class="entry-content">

                <header class="entry-header">
                  <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                </header>

                <footer class="entry-footer">
                  <span class="posted-on"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
                  <span class="byline"><a href="#"><?php the_author(); ?></a></span>
                  <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo $postsComment->total_comments; ?></a></span>
                </footer>

              </div>

            </div>

          </div>
          <!--/ .post-->

        </article>

      </div>
    <?php else:  ?>

      <div class="row post-list two-cols">

        <article class="medium-6 large-6 columns">

          <div class="post post-alternate-3 slideUp">

            <div class="entry-media">

              <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
                <?php if (has_post_thumbnail( )): ?>
                <img style="height: 275px !important;" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                <?php endif; ?>
              </a>

              <div class="entry-content">

                <header class="entry-header">
                  <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>"> <?php the_title(  ); ?> </a>
                  </h3>
                </header>

                <footer class="entry-footer">
                  <span class="posted-on"><a href="#"><?= get_the_date() ?></a></span>
                  <span class="byline"><a href="#"><?php the_author(); ?></a></span>
                  <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo $postsComment->total_comments; ?></a></span>
                </footer>

              </div>

            </div>
          </div>
          <!--/ .post-extra-->

        </article>

       

      </div>
	  
	   <?php
          endif;
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
      <!--/ .post-area-->

    </div>

  </div>

</div>
<!--/ .section -->
