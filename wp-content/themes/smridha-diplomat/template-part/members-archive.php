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

			<div class="row">

        <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
        ?>
        <div class="medium-6 columns">

          <article class="team-entry slideRight">

            <div class="team-entry-image">
              <?php if (has_post_thumbnail(  )): ?>
      						<img style="height: 280px;" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
              <?php endif; ?>
            </div>
            <!--/ .team-entry-image-->

            <h4><?php the_title(); ?></h4>
            <span class="team-position">
              <?php echo get_the_term_list( $post->ID, 'news-category', $before = '', $sep = ', ', $after = '' ); ?>
            </span>

            <div class="team-entry-body">
              <p>
                <?php the_content(); ?> </p>
            </div>
            <!--/ .team-entry-body-->

            <ul class="social-icons">
              <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
              <li class="linkedin"><a href="#" target="_blank">Linkedin</a></li>
              <li class="instagram"><a href="#" target="_blank">Instagram</a></li>
            </ul>
            <!--/ .social-icons-->

          </article>
          <!--/ .team-entry-->

        </div>
      <?php endwhile; endif; ?>
			</div>

			<div class="clear"></div>

		</div>
