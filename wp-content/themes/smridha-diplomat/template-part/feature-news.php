<div class="section padding-off columns medium-12 large-12 background-color-off">

  <div class="row">

    <div class="relative">
      <h2 class="section-title">Featured News</h2>

      <div class="row post-list two-cols">

        <?php
          $arr = array(
            'post_type' => 'news',
            'posts_per_page' => 6,
            'meta_query' => array(array('key' => '_thumbnail_id')),
          );
          $news = new WP_Query($arr);
          if ($news->have_posts()):
            while ($news->have_posts()): $news->the_post();
            $newsCommentCount = wp_count_comments( $post->ID );

        ?>

        <article class="medium-6 large-6 columns">

          <div class="post border post-alternate-1 slideUp">

            <div class="entry-media">
              <?php if (has_post_thumbnail( )): ?>
              <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
                <img style="height: 275px !important;" src="<?= the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
              </a>
            

              <header class="entry-header">
                <h3 class="entry-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
              </header>

            </div>

            <div class="entry-content">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>

            <footer class="entry-footer">

              <div class="left">
                <span class="cat-links">
                  <a href="" rel="category tag"><?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?></a>
                </span>

              </div>

              <div class="right">
                <span class="posted-on"><a href="#"><?php echo get_the_date(  ); ?></a></span>
                <span class="comments-link"><a href="#"><?php echo $newsCommentCount->total_comments; ?></a></span>
              </div>

            </footer>

          </div>
          <!--/ .post-extra-->

        </article>
        <?php
          endif;
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </div>
      <!--/ .post-area-->

      <div class="row post-list two-cols">

        <?php
          $arr = array(
            'post_type' => 'news',
            'posts_per_page' => 4,
            'orderby' => 'rand',
            'meta_query' => array(array('key' => '_thumbnail_id')),
          );
          $smallNews = new WP_Query($arr);
          if ($smallNews->have_posts()):
            while ($smallNews->have_posts()): $smallNews->the_post();
            $smallNewsCommentCount = wp_count_comments( $post->ID );
        ?>

        <article class="medium-6 large-6 columns">

          <div class="post border post-alternate-2 slideUp">

            <div class="entry-media">

              <?php if (has_post_thumbnail( )): ?>
                <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
                  <img style="width: 105px !important;" src="<?= the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                </a>
              <?php endif; ?>

            </div>

            <div class="entry-content">

              <header class="entry-header">
              <span class="cat-links">
                <a href="" rel="category tag">
                  <?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?>
                </a>
              </span>
                <h4 class="entry-title"><a href="<?php the_permalink(); ?>">
                  <?php the_title(  ); ?>
                </a></h4>
              </header>

              <footer class="entry-footer">
                <span class="posted-on"><a href="#"><?= get_the_date(  ); ?></a></span>
                <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo $smallNewsCommentCount->total_comments; ?></a></span>
              </footer>

            </div>
          </div>
          <!--/ .post-extra-->

        </article>

        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>

      </div>
      <!--/ .post-area-->

    </div>

  </div>

</div>
<!--/ .section -->
