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

			<span id="gallery-close" class="gallery-back">&larr;</span>
			<ul id="tp-grid" class="tp-grid">

        <?php
          $arr = array(
            'post_type' => 'album',
            'posts_per_page' => -1,
            'meta_query' => array(array('key' => '_thumbnail_id')),
          );

          $album = new WP_Query($arr);
          if ($album->have_posts()):
            while($album->have_posts()): $album->the_post();

            $album_categories = "";
            $album_cats = get_the_terms( $post->ID, 'album-category' );
            if ( ! empty( $album_cats ) && ! is_wp_error( $album_cats ) ):

            foreach ( $album_cats as $album_cat ):
        ?>

        <li data-pile="<?php echo $album_cat->name; ?>">
					<a href="<?php echo the_post_thumbnail_url(); ?>"
					   data-group="1" class="item-overlay gallery popup-link-1">
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
					</a>
				</li>

        <?php
            endforeach;
            endif;
          endwhile;
        endif;
        wp_reset_postdata();
        ?>

			</ul>

			<input type="hidden" class="tp_groups" value="5">
			<!--/ .tp-grid-->

			<div class="clear"></div>

		</div>
		<!--/ #main-->
