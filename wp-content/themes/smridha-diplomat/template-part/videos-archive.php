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

<div id="main" class="medium-12 large-12 columns">

			<div class="section padding-off columns medium-12 large-12 background-color-off">

				<div class="tmm_row row">

					<div class="row post-list four-cols">

            <?php
              if (have_posts()):
                while (have_posts()):
                  the_post();
            ?>

						<article class="medium-3 large-3 columns">

							<div class="post border post-alternate-4 slideUp">

                <?php if (has_post_thumbnail(  )): ?>
                  <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
        						<img style="width: 265px; height: 205px;" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        					</a>
                <?php endif; ?>

								<header class="entry-header">

									<h4 class="entry-title" style="text-align: left;">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h4>

								</header>

                <footer class="entry-footer">

      						<div class="left">
      							<span class="">
                      <a href="#" rel="category tag">
                        <?php echo get_the_term_list( $post->ID, 'video-cat', $before = '', $sep = ', ', $after = '' ); ?>
                      </a>
                    </span> -
                    <span style="text-align: right;">
                      <?php echo get_the_date(); ?>
                    </span>
      						</div>

      						<div class="right">

      						</div>

      					</footer>
							</div>

						</article>

          <?php endwhile; endif; ?>

					</div>

				</div>
				<!--/ .row-->

			</div>
			<!--/ .section-->

		</div>
		<!--/ #main-->
