<div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">

  <div class="tmm_row row">

    <div class="relative">
      <h2 class="section-title">World Headlines</h2>

      <div class="row post-list two-cols">
        <?php
          $arr = array(
            'post_type' => 'news',
            'posts_per_page' => 2,
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category',
                    'field' => 'slug',
                    'terms' => array( 'World' )
                ),
            ),
            'meta_query' => array(array('key' => '_thumbnail_id')),
          );
          $twocol = new WP_Query($arr);
          if ($twocol->have_posts()):
            while ($twocol->have_posts()): $twocol->the_post();
            $twocolComment = wp_count_comments( $post->ID );
        ?>
        <article class="medium-6 large-6 columns">

          <div class="post border post-classic slideUp" data-os-animation="slideUpRun"
             data-os-animation-delay="0s">

            <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
              <img style="height: 225px !important;" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
            </a>

            <header class="entry-header">
              <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
            </header>

            <div class="entry-content">
              <p><?php the_excerpt(); ?></p>
            </div>

            <footer class="entry-footer">

              <div class="left">
                <span class="cat-links"><a href="" rel="category tag"><?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
              </div>

              <div class="right">
                <span class="posted-on"><a href="#"><?php echo get_the_date(  ); ?></a></span>
                <span class="comments-link"><a href="#"><?php echo $twocolComment->total_comments; ?></a></span>
              </div>

            </footer>
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

      <div class="row post-list full-width">

        <?php
          $arrs = array(
            'post_type' => 'news',
            'posts_per_page' => 1,
            'meta_query' => array(
               array(
                 'key' => '_thumbnail_id',
                 'value' => '?',
                 'compare' => 'NOT EXISTS'
               )
            ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category',
                    'field' => 'slug',
                    'terms' => array( 'World' )
                ),
            ),
          );
          $noimg = new WP_Query($arrs);
          if ($noimg->have_posts()):
            while ($noimg->have_posts()): $noimg->the_post();
            //$noimg = wp_count_comments( $post->ID );
            if (!has_post_thumbnail()):
        ?>

        <article class="medium-12 large-12 columns">

          <div class="post border post-classic elementFade">

            <header class="entry-header">
              <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </header>

            <div class="entry-content">
              <p><?php the_excerpt(); ?> </p>
            </div>

            <footer class="entry-footer">

              <div class="left">
                <span class="cat-links"><a href="" rel="category tag"><?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
              </div>

              <div class="right">
                <span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>
                <span class="byline"><a href="#"><?php  the_author(); ?></a></span>
                <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo $noimg->total_comments; ?></a></span>
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

    </div>

  </div>

</div>
<!--/ .section -->

<div class="section padding-off background-color-off">

  <div class="row">
    <?php
      $arr = array(
        'post_type' => 'news',
        'posts_per_page' => 1,
        'orderby' => 'comment_count',
        'meta_query' => array(array('key' => '_thumbnail_id')),
        'tax_query' => array(
            array(
                'taxonomy' => 'news-category',
                'field' => 'slug',
                'terms' => array( 'World' )
            ),
        ),
      );
      $mostComment = new WP_Query($arr);
      if ($mostComment->have_posts()):
        while ($mostComment->have_posts()): $mostComment->the_post();
        //$randImg = wp_count_comments( $post->ID );
    ?>

    <div class="columns  medium-8 large-8">
      <div class="row post-list full-width">

        <article class="medium-12 large-12 columns">

          <div class="post border post-classic slideUp">

            <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
              <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
            </a>

            <header class="entry-header">
              <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </header>

            <div class="entry-content">
              <p><?php the_excerpt(); ?></p>
            </div>

            <footer class="entry-footer">

              <div class="left">
                <span class="cat-links"><a href="#" rel="category tag"><?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
              </div>

              <div class="right">
                <span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>
                <span class="byline"><a href="#"><?php the_author(); ?></a></span>
                <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo wp_count_comments( $post->ID )->total_comments; ?></a></span>
              </div>

            </footer>

          </div>
          <!--/ .post-classic-->

        </article>

      </div>
      <!--/ .post-area-->

    </div>
    <?php
      endwhile;
      endif;
      wp_reset_postdata();
    ?>

    <div class="medium-4 large-4 columns">
      <div class="row post-list full-width">
        <?php
          $arr = array(
            'post_type' => 'news',
            'posts_per_page' => 2,
            'orderby' => 'rand',
            'meta_query' => array(array('key' => '_thumbnail_id')),
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category',
                    'field' => 'slug',
                    'terms' => array( 'World' )
                ),
            ),
          );
          $randNews = new WP_Query($arr);
          if ($randNews->have_posts()):
            while ($randNews->have_posts()): $randNews->the_post();
            //$noimg = wp_count_comments( $post->ID );
        ?>
        <article class="medium-12 large-12 columns">

          <div class="post border post-alternate-4 slideUp">

            <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
              <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
            </a>

            <header class="entry-header">
              <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </header>
          </div>
          <!--/ .post-extra-->

        </article>
        <?php
           endwhile;
           endif;
           wp_reset_postdata();
        ?>
      </div>
      <!--/ .post-alternate-4-->

    </div>

  </div>
  <!--/ .row-->

</div>
<!--/ .section -->
