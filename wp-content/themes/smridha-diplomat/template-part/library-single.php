<div class="large-12 columns">
  <div class="page-title">
    <h1>

      <?php
        if (is_single(  )) {
          echo "Library";
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
					<img style="" src="<?php echo the_post_thumbnail_url(); ?>" alt="Congue iure curabitur incididunt consequat">
				</a>
        <?php endif; ?>

				<header class="entry-header">
					<h2 class="entry-title"><?php the_title(  ); ?></h2>

					<div class="entry-meta">
						<span class="posted-on"><a href="#"><?php echo get_the_date(); ?></a></span>
						<span class="byline"><a href="#"><?php the_author(); ?></a></span>
            <?php $cat = get_the_term_list( $post->ID, 'book-category', $before = '', $sep = ', ', $after = '' ); ?>
            <?php if ($cat != null): ?>
              <span class="byline"><a href="#"><?php echo get_the_term_list( $post->ID, 'book-category', $before = '', $sep = ', ', $after = '' ); ?></a></span>
            <?php endif; ?>

					</div>
				</header>

				<div class="entry-content">



					<p><?php the_content(); ?></p>

				</div>

				<footer class="entry-footer">
					<div class="left">
						<span class="cat-links">
							<a href="#" rel="category tag"><?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?></a>
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




			<div class="section section-content">

				<!-- - - - - - - - POST COMMENTS - - - - - - - -->

				<section id="comments" class="respond-comments">
					<h2 class="comments-title">5 Comments</h2>

					<ol class="comments-list">

						<li class="comment">

							<article>

								<div class="avatar">
									<img alt=""
										 src="https://1.gravatar.com/avatar/f7b924620556687f7c795aab0c319b60?s=70&amp;d=&amp;r=G"
										 class="avatar avatar-70 photo" height="70" width="70"></div>
								<!--/ .gravatar-->

								<div class="comment-body">

									<div class="comment-meta">
										<div class="comment-author">
											<h6>Alex TM</h6>
										</div>
										<div class="comment-date">April 1, 2015 at 20:27</div>
										<a class="comment-reply-link" href="#" aria-label="Reply to Alex TM">Reply</a>
									</div>
									<!--/ .comment-meta -->

									<p>
										Dolorum nascetur quibusdam bibendum nesciunt torquent vehicula, nostra? Nisl?
										Excepteur repellat provident, laboriosam! Nullam vel.
									</p>

								</div>
								<!--/ .comment-body -->

							</article>

							<ul class="children">

								<li class="comment">

									<article>

										<div class="avatar">
											<img alt=""
												 src="https://1.gravatar.com/avatar/f7b924620556687f7c795aab0c319b60?s=70&amp;d=&amp;r=G"
												 class="avatar avatar-70 photo" height="70" width="70">
										</div>
										<!--/ .gravatar-->

										<div class="comment-body">

											<div class="comment-meta">
												<div class="comment-author">
													<h6>Alex TM</h6>
												</div>
												<div class="comment-date">April 1, 2015 at 20:28</div>
												<a class="comment-reply-link" href="#" aria-label="Reply to Alex TM">Reply</a>
											</div>
											<!--/ .comment-meta -->

											<p>
												Corporis quasi dicta voluptates, rerum vero eos quaerat, quo aliqua
												voluptates suspendisse quod tempus! Interdum.
											</p>

										</div>
										<!--/ .comment-body -->

									</article>

									<ul class="children">

										<li class="comment">

											<article>

												<div class="avatar">
													<img alt=""
														 src="https://1.gravatar.com/avatar/f7b924620556687f7c795aab0c319b60?s=70&amp;d=&amp;r=G"
														 class="avatar avatar-70 photo" height="70" width="70">
												</div>
												<!--/ .gravatar-->

												<div class="comment-body">

													<div class="comment-meta">
														<div class="comment-author">
															<h6>Alex TM</h6>
														</div>
														<div class="comment-date">April 1, 2015 at 20:28</div>
														<a class="comment-reply-link" href="#"
														   aria-label="Reply to Alex TM">Reply</a>
													</div>
													<!--/ .comment-meta -->

													<p>
														Egestas molestias erat impedit blanditiis quam, proident rutrum
														iste? Illum? Aenean proin. Nostrum pretium, commodi.
													</p>

												</div>
												<!--/ .comment-body -->

											</article>

										</li>
									</ul>
									<!-- .children -->
								</li>
							</ul>
							<!-- .children -->
						</li>
						<!-- #comment-## -->
					</ol>

				</section>
				<!--/ #comments-->

				<!-- - - - - - - - END POST COMMENTS - - - - - - - -->


				<!-- - - - - - - - COMMENT FORM - - - - - - - -->

				<div id="respond" class="comment-respond">
					<h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>

					<form action="#" method="post" id="commentform" class="comment-form">
						<div class="row">
							<div class="large-7 columns">
								<p class="comment-form-author">
									<input id="author" name="author" type="text" value="" size="30" required=""
										   placeholder="Your Name *">
								</p>

								<p class="comment-form-email">
									<input id="email" name="email" type="email" value="" size="30" required=""
										   placeholder="Your Email *">
								</p>

								<p class="comment-form-url">
									<input id="url" name="url" type="url" value="" size="30" placeholder="Website">
								</p>
							</div>
						</div>
						<p class="comment-form-comment">
							<textarea cols="30" rows="10" required="" id="comment" name="comment"
									  placeholder="Your Message *"></textarea>
						</p>

						<p class="form-submit">
							<input name="submit" type="submit" id="submit" class="submit" value="Submit">
						</p>
					</form>
				</div>
				<!-- #respond -->

				<!-- - - - - - - - END COMMENT FORM - - - - - - - -->

			</div>

		</div>
