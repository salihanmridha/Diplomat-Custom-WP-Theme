<?php
/**
 * The template for displaying Category pages
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
                            <a href="<?php the_permalink(); ?>">
                                <?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?>
                            </a>
                        </header>
                
                	<ul class="common-news-content row">
                    	
                    
                    <?php if ( have_posts() ) : ?>
                        
                        <?php 
							$news_counter = 1;
							while ( have_posts() ) : the_post();
							$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
										
							if(empty($image_url))
							{
								$image_url = get_template_directory_uri() . '/images/news-image-4.jpg';
							}
							
							if($news_counter == 1) {
						?>
                        	<li class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            	<div class="row">
                            
                                    <div class="first-news-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img alt="news-image" src="<?php echo $image_url; ?>">
                                    </div>
                                    
                                    <div class="first-news-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="news-title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        
                                        <div class="news-content">
                                            <p>
                                            <?php
                                                $content = get_the_content();
                                                if(strlen($content) > 350)
                                                {
                                                    echo strip_tags(mb_substr($content, 0, 150,'utf-8'), '<p>') . ' ...';
                                                }
                                                else
                                                {
                                                    echo $content;
                                                }
                                            ?>
                                            </p>
                                        </div>
                                    </div> 
                                
                                </div>
                            
                            </li>
                        <?php
							}
							else
							{
						?>
                        	<li class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 350px; ">
                            
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
                                            echo strip_tags(mb_substr($content, 0, 149,'utf-8'), '<p>') . ' ...';
                                        }
                                        else
                                        {
                                            echo $content;
                                        }
                                    ?>
                                    </p>
                                </div>
                            </li>
						<?php
							}
						?>
                        
                        
                                                                                    
                       	<?php 
							$news_counter = 0; 
							endwhile; ?>
                        </ul>
                        
                        <?php the_posts_pagination(); ?>
            
                    
                    <?php endif; ?>
                </article>
                
                <?php get_sidebar(); ?>
                
			</div>
		</div>
	</section>


<?php get_footer(); ?>
