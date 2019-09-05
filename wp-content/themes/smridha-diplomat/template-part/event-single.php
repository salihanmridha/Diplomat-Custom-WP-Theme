<div id="main" class="medium-8 large-8 columns">
  <?php

  //$singleNews = new WP_Query($arr);
    if (have_posts()):
      while (have_posts()):
        the_post();
        $getStart = get_post_meta($post->ID, '_meta_start_key', true);
        $getEnd = get_post_meta($post->ID, '_meta_end_key', true);
        $getPhone = get_post_meta($post->ID, '_meta_phone_key', true);
        $getAddress = get_post_meta($post->ID, '_meta_address_key', true);

        $getPerson = get_post_meta($post->ID, '_meta_person_key', true);
        $getWebsite = get_post_meta($post->ID, '_meta_website_key', true);

        $getMap = get_post_meta($post->ID, '_meta_map_key', true);

        if (!empty($getStart)) {
          $monthNum = substr($getStart, -5, 2);
          $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
          $date = substr($getStart, -2);
        }
  ?>
			<div class="event">

				<span class="event-date"><?php echo $date;  ?><b><?php echo $monthName; ?></b></span>
        <?php if (has_post_thumbnail()): ?>
				<a href="<?php echo the_post_thumbnail_url(); ?>" class="image-post single-image-link item-overlay">
					<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				</a>
        <?php endif; ?>

				<h3 class="event-title"><?php the_title(  ); ?></h3>

				<p><?php the_content(); ?></p>

				<div class="event-details boxed">
					<dl>
						<dt class="event-title">Details</dt>
						<dt>Start</dt>
						<dd><?php
            if (!empty($getStart)) {
              echo $getStart;
            }
            ?></dd>

						<dt>End</dt>
						<dd><?php
            if (!empty($getEnd)) {
              echo $getEnd;
            }
            ?></dd>

						<dt>Event Category</dt>
						<dd>
							<?php echo get_the_term_list( $post->ID, 'event-category', $before = '', $sep = ', ', $after = '' ); ?>
						</dd>
					</dl>

					<dl>
						<dt class="event-title">Organizer</dt>

						<dt>Contact Person</dt>
						<dd><?php
            if (!empty($getPerson)) {
              echo $getPerson;
            }
            ?></dd>

						<dt>Phone</dt>
						<dd><?php
            if (!empty($getPhone)) {
              echo $getPhone;
            }
            ?></dd>

						<dt>Website</dt>
						<dd>
							<a target="_blank" href="<?php
              if (!empty($getWebsite)) {
                echo $getWebsite;
              }
              ?>"><?php
              if (!empty($getWebsite)) {
                echo $getWebsite;
              }
              ?></a>
						</dd>
					</dl>

				</div>
				<!--/ .event-details-->

				<div class="row collapse event-address">

					<div class="large-6 columns">
						<div style="padding-bottom: 42px !important;" class="event-details boxed">
							<dl>
								<dt class="event-title">Venue</dt>

								<dt>Phone</dt>
								<dd><?php
                if (!empty($getPhone)) {
                  echo $getPhone;
                }
                ?></dd>

								<dt>Address</dt>
								<dd><?php
                if (!empty($getAddress)) {
                  echo $getAddress;
                }
                ?></dd>

								<dt>Website</dt>
								<dd><a target="_blank" href="<?php
                if (!empty($getWebsite)) {
                  echo $getWebsite;
                }
                ?>"><?php
                if (!empty($getWebsite)) {
                  echo $getWebsite;
                }
                ?></a></dd>
							</dl>
						</div>
					</div>

					<div class="large-6 columns">
						<div class="event-map">
							<div id="map_address" class="google_map">

                <?php
                if ( ! function_exists( 'is_plugin_active' ) )
                require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
                 if (!empty($getMap) or is_plugin_active( 'plugin-directory/mappress.php' )): ?>
                  <?php echo do_shortcode( "[mappress mapid='$getMap']" ); ?>
                <?php else: ?>
                  <p style="padding: 25px;">
                    If you didn't install and activate mappress plugin then please install and activate plugin then add map id to this post
                  </p>
                <?php endif; ?>
							</div>
						</div>

					</div>

				</div>
				<!--/ .row-->

			</div>
			<!--/ .event-->
      <?php endwhile; endif; ?>

      <div class="single-nav clearfix">
        <?php
        $previous = get_previous_post();
        $next = get_next_post();


        if ( get_next_post() ):
        ?>

				<a title="Next post" href="<?php echo get_the_permalink($next); ?>" class="next">
					Next article<b><?php echo get_the_title($next) ?></b>
				</a>
      <?php
        endif;

        if ( get_previous_post() ):
      ?>
      <a title="Previous post" href="<?php echo get_the_permalink($previous); ?>" class="prev">
        Previous article<b><?php echo get_the_title($previous) ?></b>
      </a>
      <?php endif; ?>


			</div>

			<div class="clear"></div>

		</div>
