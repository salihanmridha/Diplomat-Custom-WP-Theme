<div class="large-12 columns">
  <div class="page-title">
    <h1>

      <?php
        if (is_single(  )) {
          echo "Page";
        }
      ?>
    </h1>

    <div class="breadcrumbs">
      <a href="<?php bloginfo('url'); ?>" title="">Home</a> <?php the_title(); ?>
    </div>
    <!--/ .breadcrumbs-->
  </div>
</div>

    <div id="main" class="medium-8 large-8 columns">
      <?php

      //$singleNews = new WP_Query($arr);
        if (have_posts()):
          while (have_posts()):
            the_post();
      ?>
			<div class="post full-width">
        <?php if (has_post_thumbnail()): ?>
				<a href="<?php echo the_post_thumbnail_url(); ?>" class="image-post item-overlay single-image-link">
					<img src="<?php echo the_post_thumbnail_url(); ?>" alt="Congue iure curabitur incididunt consequat">
				</a>
        <?php endif; ?>

				<header class="entry-header">
					<h2 class="entry-title"><?php the_title(  ); ?></h2>

					<div class="entry-meta">
						<span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>
						<span class="byline"><a href="#"><?php the_author(); ?></a></span>
					</div>
				</header>

				<div class="entry-content">



					<p><?php the_content(); ?></p>

				</div>

				<footer class="entry-footer">
					<div class="left">
						<span class="cat-links">
							<a href="#" rel="category tag"><?php the_category( ', ', '', $post->ID ) ?></a>
						</span>
					</div>

				</footer>

			</div>

    <?php endwhile; endif; ?>
			<!--/ .post-->

			<div class="social-shares">
				<ul class="social-icons">
					<li class="twitter">
						<a href="#" target="_blank" title="Twitter">Twitter</a>
					</li>
					<li class="facebook">
						<a href="#" target="_blank" title="Facebook">Facebook</a>
					</li>
					<li class="pinterest">
						<a href="#" target="_blank" title="Pinterest">Pinterest</a>
					</li>
					<li class="gplus">
						<a href="#" target="_blank" title="Google+">Google+</a>
					</li>
					<li class="rss">
						<a href="#" target="_blank" title="RSS">RSS</a>
					</li>
				</ul>
			</div>		

		</div>
