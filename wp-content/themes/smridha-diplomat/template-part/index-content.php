<div class="large-12 columns">
  <div class="page-title">
    <h1>

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

			<div id="post-area">
        <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
        ?>
				<article class="post full-width slideUp2x">
          <?php if (has_post_thumbnail(  )): ?>
            <a href="<?php the_permalink(); ?>" class="image-post item-overlay ">
  						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
  					</a>
          <?php endif; ?>

					<header class="entry-header">
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
					</header>

					<div class="entry-content">
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>

					<footer class="entry-footer">

						<div class="left">
							<span class="cat-links"><a href="#" rel="category tag"><?php the_category( ', ', '', $post->ID ) ?></a></span>
						</div>

						<div class="right">
							<span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>

							<span class="byline"><a href="#"><?php the_author(  ); ?></a></span>
							<span class="comments-link"><a href="#"><?php echo wp_count_comments( $post->ID )->total_comments; ?></a></span>
						</div>

					</footer>

				</article>
        <?php endwhile; endif; ?>

			</div>
			<!--/ #post-area-->

			<div class="pagenavbar">
				<div class="pagenavi">
					<span class="page-numbers current">1</span>
					<a href="#" class="page-numbers">2</a>
				</div>
			</div>

		</div>
