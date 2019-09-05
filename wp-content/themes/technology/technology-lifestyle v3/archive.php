<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


	<section id="main">
		<div class="container">
			<div class="row">
            
                <article class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                
                	<header class="header-border blue">
                            <a href="<?php the_permalink(); ?>"><?php
								if ( is_day() ) :
									printf( __( 'দৈনিক আর্কাইভ: %s', 'twentythirteen' ), get_the_date() );
								elseif ( is_month() ) :
									printf( __( 'মাসিক আর্কাইভ: %s', 'twentythirteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
								elseif ( is_year() ) :
									printf( __( 'বাৎসরিক আর্কাইভ: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
								else :
									_e( 'Archives', 'twentythirteen' );
								endif;
							?>
                            </a>
                        </header>
                
                	<ul class="common-news-content row">


					<?php if ( have_posts() ) : ?>
                    
        
                    <?php /* The loop */ ?>
                    <?php 
						while ( have_posts() ) : the_post();
						
						$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
										
						if(empty($image_url))
						{
							$image_url = get_template_directory_uri() . '/images/news-image-4.jpg';
						} 
					?>
                    
                    	<li class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            
                        	 	<img alt="news-image" src="<?php echo $image_url; ?>">
                                            
                                <a class="news-title" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                
                                <div class="news-content">
                                	<p>
                                    <?php
                                        $content = get_the_content();
                                        if(strlen($content) > 350)
                                        {
                                            echo strip_tags(substr($content, 0, 349), '<p>') . ' ...';
                                        }
                                        else
                                        {
                                            echo $content;
                                        }
                                    ?>
                                    </p>
                                </div>
                            </li>
                        
                    <?php endwhile; ?>
                    </ul>
        
                    <?php twentythirteen_paging_nav(); ?>
        
               
                <?php endif; ?>
				</article>
			
            	<?php get_sidebar(); ?>
    
			</div>
		</div>
	</section>


<?php get_footer(); ?>
