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
          if (have_posts()):
            while (have_posts()):
              the_post();
        ?>
				<article style="height: 450px;" class="medium-4 lerge-4 columns">
					<div class="post border post-alternate-1 elementFade">
						<div class="entry-media">
              <?php if (has_post_thumbnail(  )): ?>
                <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
      						<img style="width: 230px; height: 340px;" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
      					</a>
              <?php endif; ?>

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
								 <span class="cat-links">Author: <a href="#" rel="category tag"><?php the_author(); //echo get_the_term_list( $post->ID, 'book-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
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
