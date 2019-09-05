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
			<div id="events_listing">
        <?php
          $arr = array(
            'post_type' => 'events',
            'posts_per_page' => 10,
          );
          $events = new WP_Query($arr);
          if ($events->have_posts()):
            while ($events->have_posts()): $events->the_post();
            $getStart = get_post_meta($post->ID, '_meta_start_key', true);
            $getEnd = get_post_meta($post->ID, '_meta_end_key', true);
            $getPhone = get_post_meta($post->ID, '_meta_phone_key', true);
            $getAddress = get_post_meta($post->ID, '_meta_address_key', true);

            if (!empty($getStart)) {
              $monthNum = substr($getStart, -5, 2);
	 					 	$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
							$date = substr($getStart, -2);
            }
        ?>
				<article class="event">

					<span class="event-date">
            <?php echo $date;  ?>
          <b><?php echo $monthName; ?></b></span>
          <?php if (has_post_thumbnail( )): ?>
            <a href="<?php the_permalink(); ?>" class="image-post item-overlay">
  						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
  					</a>
          <?php endif; ?>


					<div class="event-content clearfix">

						<h3 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p>
							<?php the_excerpt(); ?>
						</p>

					</div>

					<div class="event-details">
						<dl>
							<dt>Start</dt>
							<dd>
                <?php
                if (!empty($getStart)) {
                  echo $getStart;
                }
                ?>
              </dd>

							<dt>End</dt>
              <dd>
                <?php
                if (!empty($getEnd)) {
                  echo $getEnd;
                }
                ?>
              </dd>

						</dl>

						<dl>
							<dt>Phone</dt>
              <dd>
                <?php
                if (!empty($getPhone)) {
                  echo $getPhone;
                }
                ?>
              </dd>

							<dt>Address</dt>
              <dd>
                <?php
                if (!empty($getAddress)) {
                  echo $getAddress;
                }
                ?>
              </dd>
						</dl>

					</div>
					<!--/ .event-details-->

				</article>
        <?php
        endwhile;
        endif;
        wp_reset_postdata(); ?>
			</div>
			<!--/ #events_listing-->

		</div>
		<!--/ #main-->
