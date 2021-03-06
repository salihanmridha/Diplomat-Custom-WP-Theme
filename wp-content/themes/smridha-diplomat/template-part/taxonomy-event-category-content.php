<div class="large-12 columns">
  <div class="page-title">
    <h1 style="text-align:center;">

      <?php
        if (is_post_type_archive(  )) {
          post_type_archive_title();
        } elseif (is_home()) {
          echo "Latest Articles";
        } else {
          echo ""; single_cat_title(  );
        }
      ?>
    </h1>

    <div class="breadcrumbs">
      <a href="<?php bloginfo('url'); ?>" title="">Home</a> <?php
        if (is_post_type_archive(  )) {
          post_type_archive_title();
        } elseif (is_home()) {
          echo "Latest Articles";
        } else {
          echo ""; single_cat_title(  );
        }
      ?>
    </div>
    <!--/ .breadcrumbs-->
  </div>
</div>

<div id="main" class="medium-8 large-8 columns">

  <div class="row post-list two-cols">
    <?php
      $args = array(
        'post_type' => 'events',
        'posts_per_page' => 12,
        'meta_query' => array(array('key' => '_thumbnail_id')),
        'tax_query' => array(
            array(
                'taxonomy' => 'event-category',
                'field' => 'slug',
                'terms' => get_query_var( 'term' )
            ),
        ),
      );
        $query = new WP_Query( $args );
        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            $getStart = get_post_meta($post->ID, '_meta_start_key', true);
            $getEnd = get_post_meta($post->ID, '_meta_end_key', true);

          if (!empty($getStart)) {
            $monthNum = substr($getStart, -5, 2);
 					 	$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
						$date = substr($getStart, -2);
          }
    ?>
    <article style="height: 400px;" class="medium-4 lerge-4 columns">
      <div class="post border post-alternate-1 elementFade">
        <div class="entry-media">
          <?php if (has_post_thumbnail(  )): ?>
            <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
              <img style="height: 200px;" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            </a>
          <?php endif; ?>

          <header class="entry-header">
            <h3 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </header>
        </div>

        <div class="entry-content">
            <table style="width: 100%;">
              <tr>
                <td>Start Date: </td>
                <td style="text-align: right !important; width: 100%;"><?php
                if (!empty($getStart)) {
                  echo $getStart;
                }
                ?></td>

              </tr>

              <tr>

                <td style="text-align: left !important; width: 50%;">End Date: </td>
                <td style="text-align: right !important; width: 50%;"><?php
                if (!empty($getEnd)) {
                  echo $getEnd;
                }
                ?></td>
              </tr>
            </table>

        </div>

        <footer class="entry-footer">

          <div class="left">
            <span class="cat-links"><a href="#" rel="category tag"><?php echo get_the_term_list( $post->ID, 'event-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
          </div>

          <div class="right">
            <span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>
          </div>

        </footer>
      </div>
    </article>
  <?php endwhile; endif; ?>

  </div>
  <!--/ #post-area-->

</div>
