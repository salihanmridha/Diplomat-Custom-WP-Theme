<aside id="sidebar" class="medium-4 large-4 columns">

  <?php if (is_active_sidebar( 'smridha-right-sidebar' )):  ?>
    <?php dynamic_sidebar( 'smridha-right-sidebar' ); ?>
  <?php endif; ?>

  <?php
    // $args = array(
    // 'hide_empty' => false,
    // 'parent' => 0,
    // 'orderby' => 'slug',
    // );
    // $cats = get_terms( 'category', $args );
    // //print_r($cats);
    // $news_cats = get_terms( 'news-category', $args );
    //
    // $event_categorys = get_terms( 'event-category', $args );
    // $book_categorys = get_terms( 'book-category', $args );
    // $video_cats = get_terms( 'video-cat', $args );
    // if ( ! is_wp_error( $cats && $news_cats && $event_category && $book_category && $video_cat )):
  ?>

  <!-- <div id="categories-2" class="widget widget_categories">
    <h3 class="widget-title">Categories</h3>
    <ul> -->
      <?php
          //$counting = 0;
          // foreach ( $cats as $cat ) {
          //  $catLink = get_category_link( $cat->term_id );
          //  if ($cat->name != 'Uncategorized') {
          //    echo "<li class='cat-item'><a href='$catLink'>" . $cat->name . "</a></li>";
          //
          //    $subCats = get_terms('category', array('parent' => $cat->term_id, 'orderby' => 'slug', 'hide_empty' => false));
          //
          //    foreach ( $subCats as $subCat ) {
          //     $subCatLink = get_category_link( $subCat->term_id );
          //     echo "<li style='padding-left: 20px;' class='cat-item'><a href='$subCatLink'>" . $subCat->name . "</a></li>";
          //     // $counting++;
          //     // if ($counting == 5) break;
          //    }
          //  }
          //
          //
          //  // $counting++;
          //  // if ($counting == 5) break;
          // }


          //$counting = 0;
          // foreach ( $news_cats as $news_cat ) {
          //  $newsCatLink = get_term_link( $news_cat->slug, 'news-category' );
          //  echo "<li class='cat-item'><a href='$newsCatLink'>" . $news_cat->name . "</a></li>";
          //
          //  $subNewsCats = get_terms('news-category', array('parent' => $news_cat->term_id, 'orderby' => 'slug', 'hide_empty' => false));
          //
          //  foreach ( $subNewsCats as $subNewsCat ) {
          //   $subNewsCatLink = get_term_link( $subNewsCat->slug, 'news-category' );
          //   echo "<li style='padding-left: 20px;' class='cat-item'><a href='$subNewsCatLink'>" . $subNewsCat->name . "</a></li>";
          //   // $counting++;
          //   // if ($counting == 5) break;
          //  }
          //  // $counting++;
          //  // if ($counting == 5) break;
          // }
          //
          // foreach ( $event_categorys as $event_category ) {
          //  $eventCatLink = get_term_link( $event_category->slug, 'event-category' );
          //  echo "<li class='cat-item'><a href='$eventCatLink'>" . $event_category->name . "</a></li>";
          //  // $counting++;
          //  // if ($counting == 5) break;
          //
          //  $subEventCats = get_terms('event-category', array('parent' => $event_category->term_id, 'orderby' => 'slug', 'hide_empty' => false));
          //
          //  foreach ( $subEventCats as $subEventCat ) {
          //   $subEventCatLink = get_term_link( $subEventCat->slug, 'event-category' );
          //   echo "<li style='padding-left: 20px;' class='cat-item'><a href='$subEventCatLink'>" . $subEventCat->name . "</a></li>";
          //   // $counting++;
          //   // if ($counting == 5) break;
          //  }
          // }

          // foreach ( $book_categorys as $book_category ) {
          //  $bookCatLink = get_term_link( $book_category->slug, 'book-category' );
          //  echo "<li class='cat-item'><a href='$bookCatLink'>" . $book_category->name . "</a></li>";
          //  // $counting++;
          //  // if ($counting == 5) break;
          //
          //  $subBookCats = get_terms('book-category', array('parent' => $book_category->term_id, 'orderby' => 'slug', 'hide_empty' => false));
          //
          //  foreach ( $subBookCats as $subBookCat ) {
          //   $subBookCatLink = get_term_link( $subBookCat->slug, 'book-category' );
          //   echo "<li style='padding-left: 20px;' class='cat-item'><a href='$subBookCatLink'>" . $subBookCat->name . "</a></li>";
          //   // $counting++;
          //   // if ($counting == 5) break;
          //  }
          // }


          // foreach ( $video_cats as $video_cat ) {
          //  $videoCatLink = get_term_link( $video_cat->slug, 'video-cat' );
          //  echo "<li class='cat-item'><a href='$videoCatLink'>" . $video_cat->name . "</a></li>";
          //  // $counting++;
          //  // if ($counting == 5) break;
          //
          //  $subVideoCats = get_terms('video-cat', array('parent' => $video_cat->term_id, 'orderby' => 'slug', 'hide_empty' => false));
          //
          //  foreach ( $subVideoCats as $subVideoCat ) {
          //   $subVideoCatLink = get_term_link( $subVideoCat->slug, 'video-cat' );
          //   echo "<li style='padding-left: 20px;' class='cat-item'><a href='$subVideoCatLink'>" . $subVideoCat->name . "</a></li>";
          //   // $counting++;
          //   // if ($counting == 5) break;
          //  }
          // }

      ?>
    <!-- </ul>
  </div> -->
  <?php //endif; ?>

  <div id="categories-2" class="widget widget_categories">
    <h3 class="widget-title">Categories</h3>
    <?php wp_nav_menu( array(
        'theme_location' => 'vertical-menu',
        'container' => false,
        'menu_class' => 'sidebar-menu'
    ) ); ?>

  </div>


  <div class="menu-primary-menu-container">

  </div>


  <div class="widget widget_upcoming_events">
    <h3 class="widget-title">Featured Events</h3>
    <ul>
      <?php
        $arr = array(
          'post_type' => 'events',
          'posts_per_page' => 1,
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
      <li class="has-thumb">

        <div class="event-container">
          <span class="event-date"><?php echo $date;  ?><b><?php echo $monthName; ?></b></span>

          <div class="event-media">
            <div class="item-overlay">
              <?php if (has_post_thumbnail( )): ?>
                <a href="<?php the_permalink(); ?>" class="image-post item-overlay">
      						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
      					</a>
              <?php endif; ?>
            </div>

            <div class="event-content with-excerpt">
              <h4 class="event-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h4>

              <div class="event-text">
                Arcu anim, ducimus, adipisicing tempore cursus, fringilla nam arcu facilis class
              </div>

            </div>
          </div>
        </div>

      </li>
    <?php endwhile; endif; ?>
    </ul>

  </div>
  <!--/ .widget_upcoming_events-->

  <div class="widget widget_video">

    <div class="image-post">
      <iframe width="360" height="150" src="https://www.youtube.com/embed/aO2YB5jkef4?wmode=transparent&amp;rel=0&amp;controls=0&amp;showinfo=0"></iframe>
    </div>
    <h4 class="widget-title">Video Title</h4>
  </div>

  <!-- <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
    <h3 class="widget-title">Subscribe & Follow</h3>

    <div class="arqam-widget-counter arq-outer-frame arq-col2">
      <ul>
        <li class="arq-facebook">
          <a target="_blank" href="#">
            <i class="arqicon-facebook"></i>
            <span>5,411</span>
            <small>Fans</small>
          </a>
        </li>
        <li class="arq-youtube">
          <a target="_blank" href="https://youtube.com/user/UCTwc3BdgZVzryqX9XwGSgcA">
            <i class="arqicon-youtube"></i>
            <span>12</span>
            <small>Subscribers</small>
          </a>
        </li>
        <li class="arq-envato">
          <a target="_blank" href="#">
            <i class="arqicon-twitter"></i>
            <span>376</span>
            <small>Followers</small>
          </a>
        </li>
        <li class="arq-linkedin">
          <a target="_blank" href="#">
            <i class="arqicon-rss"></i>
            <span>1,279</span>
            <small>Subscribers</small>
          </a>
        </li>
      </ul>
    </div>
  </div> -->

  <div class="widget widget_recent_posts">
    <div class="tabs-holder">

      <ul class="tabs-nav">
        <li><h3>Popular</h3></li>
        <li><h3>Latest</h3></li>
        <li><h3>Comments</h3></li>
      </ul>
      <!--/ .tabs-nav-->

      <div class="tabs-container">

        <div class="tab-content">
          <!--/ .recent-post-->
          <?php
            $arr = array(
              'post_type' => array('news', 'post'),
              'posts_per_page' => 3,
              'orderby' => 'comment_count',
              'meta_query' => array(array('key' => '_thumbnail_id')),
            );

            $popularPost = new WP_Query($arr);
            if ($popularPost->have_posts()):
              while ($popularPost->have_posts()):
                $popularPost->the_post();
          ?>
          <div class="recent-post">

            <div class="post-media">
              <a href="<?php the_permalink(); ?>" class="item-overlay">
                <img style="80px !important;" alt="<?php the_title(); ?>" src="<?php echo the_post_thumbnail_url(); ?>"/>
              </a>
            </div>

            <div class="post-holder">
              <h4 class="post-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h4>

              <div class="entry-meta">
                <span class="posted-on"><a href="#"><?= get_the_date(  ); ?></a></span>
                <span class="comments-link"><a href="<?php the_permalink(); ?>"><?php echo wp_count_comments( $post->ID )->total_comments; ?></a></span>
              </div>
            </div>
            <!--/ .post-holder-->

          </div>
        <?php endwhile; endif; ?>
          <!--/ .recent-post-->

        </div>
        <!--/ .tab-content-->

        <div class="tab-content">

          <?php
            $arr = array(
              'post_type' => array('news', 'post'),
              'posts_per_page' => 3,
              'meta_query' => array(array('key' => '_thumbnail_id')),
            );

            $latestPost = new WP_Query($arr);
            if ($latestPost->have_posts()):
              while ($latestPost->have_posts()):
                $latestPost->the_post();
          ?>
          <div class="recent-post">
            <div class="post-media">
              <a href="<?php the_permalink(); ?>" class="item-overlay">
                <img style="height: 80px !important;" alt="<?php the_title(); ?>" src="<?php echo the_post_thumbnail_url(); ?>"/>
              </a>
            </div>
            <!--/ .entry-media-->

            <div class="post-holder">
              <h4 class="post-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h4>

              <div class="entry-meta">
                <span class="posted-on"><a href="#"><?php echo get_the_date(  ); ?></a></span>
                <span class="comments-link"><a href="#"><?php echo wp_count_comments( $post->ID )->total_comments; ?></a></span>
              </div>
            </div>
            <!--/ .post-holder-->
          </div>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>

          <!--/ .recent-post-->

        </div>
        <!--/ .tab-content-->

        <div class="tab-content">
          <?php
            $args = array(
              'status' => 'approve',
              'number' => '3',
            );
            $comments = get_comments($args);
            foreach($comments as $comment) :
              //echo($comment->comment_author . '<br />' . $comment->comment_content . get_the_title( $comment->comment_post_ID ));

        ?>
          <div class="recent-comment">
            <div class="author-image">
              <img src='https://1.gravatar.com/avatar/f7b924620556687f7c795aab0c319b60?s=45&amp;d=&amp;r=G'
                 class='avatar avatar-45 photo' height='45' width='45' alt=''/>
            </div>
            <div class="author-data">
              <h4 class="author-name"><?= $comment->comment_author; ?></h4>
              <h4 class="author-title">
                <a href="<?php echo get_permalink( $comment->comment_post_ID ); ?>"><?= get_the_title( $comment->comment_post_ID); ?></a>
              </h4>

              <p>
                <?= $comment->comment_content ?>
              </p>
            </div>

          </div>
          <?php endforeach; ?>

        </div>
        <!--/ .tab-content-->

      </div>
      <!--/ .tabs-container-->

    </div>
    <!--/ .tabs-holder-->

  </div>
  <!--/ .widget-container-->


</aside>
<!--/ #sidebar-->
