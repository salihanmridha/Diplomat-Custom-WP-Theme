<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section id="main">
    <div class="container">
        <div class="row">
        
        	<article id="page" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 post">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h1 class="entry-title"><?php the_title(); ?></h1>
                
                <div id="news-featured-image">
                    <?php
                        $news_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                                            
                        if(!empty($news_image_url))
                        {
                            echo '<img src="'.$news_image_url.'" alt="news-image" />';
                        }
                    ?>
                    
                </div>
                <?php the_content(); ?>
                
			<?php endwhile; ?>

		</article>
    
    		<aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar-news sidebar-advertisement">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">
        </div>
        
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
        
        <div class="sidebar-news sidebar-advertisement">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-2.jpg" alt="advertise">
        </div>
        
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
        
        <div class="sidebar-news sidebar-advertisement">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">
        </div>
    </aside>
        
        </div>
    </div>
</section>

<?php get_footer(); ?>