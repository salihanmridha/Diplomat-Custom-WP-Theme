<div class="large-12 columns">
  <div class="page-title">
    <h1 style="text-align:center;">

      <?php
        if (is_post_type_archive(  )) {
          post_type_archive_title();
        } elseif (is_home()) {
          echo "Latest Articles";
        } else {
          echo "Category: "; single_cat_title(  );
        }
      ?>
    </h1>

    <div class="breadcrumbs">
      <a href="#" title="">Home</a> News
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
							<div class="post border post-alternate-1 slideUp">
								<div class="entry-media">
                  <?php if (has_post_thumbnail(  )): ?>
                    <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
                      <img style="height: 210px !important;" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                    </a>
                  <?php endif; ?>

									<header class="entry-header">
										<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</header>
								</div>

								<div class="entry-content">
									<p>
										<?php echo smridha_excerpt(40); ?>
									</p>
								</div>

								<footer class="entry-footer">

									<div class="left">
										<span class="cat-links"><a href="" rel="category tag"><?php the_category( ', ', '', $post->ID ) ?></a></span>
									</div>

									<div class="right">
										<span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>

										<span class="comments-link"><a href="#"><?php echo wp_count_comments( $post->ID )->total_comments; ?></a></span>

									</div>

								</footer>
							</div>
						</article>

          <?php endwhile; endif; ?>

					</div>
				</div>
			</div>
			<!--/ .section-->

		</div>
		<!--/ #main-->
<!--/ #main-->
