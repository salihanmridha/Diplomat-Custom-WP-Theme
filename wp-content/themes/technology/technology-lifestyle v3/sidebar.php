<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

?>
	
<aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
   <!--  <div class="sidebar-news sidebar-advertisement">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">
    </div> -->
    
    <div id="recent-news" class="sidebar-news">
        <h3>সাম্প্রতিক খবর</h3>
        <ul>
            <?php
                $args = array(
                    'orderby' => 'rand',
                    'order' => 'DESC',
                    'posts_per_page' => 10
                );
                
                $loop = new WP_Query( $args );
                
                while($loop->have_posts()) : $loop->the_post(); 
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
    
   <!--  <div class="sidebar-news sidebar-advertisement">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ad-2.jpg" alt="advertise">
    </div> -->
    
    <div id="more-news" class="sidebar-news">
        <h3>সর্বাধিক পঠিত খবর</h3>
        <ul>
            <?php
                $args = array(
                    'orderby' => 'rand',
                    'order' => 'DESC',
                    'posts_per_page' => 10
                );
                
                $loop = new WP_Query( $args );
                
                while($loop->have_posts()) : $loop->the_post(); 
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
    
    <!-- <div class="sidebar-news sidebar-advertisement">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">
    </div> -->
    
    <div id="photo-gallery" class="sidebar-news">
        <h3>গ্যালারী</h3>
        <?php dynamic_sidebar( 'photo-gallery-sidebar' ); ?>
    </div>
    </aside>
