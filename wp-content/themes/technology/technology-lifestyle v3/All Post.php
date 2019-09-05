<?php 

/** 

 * 

 * Template Name: Home 

 * 

 */ 

  

get_header();  

global $template;
echo $template;
?> 
 
 <section id="main"> 

    	<div class="container"> 
        	<div class="row"> 
                <article class="col-lg-9 col-md-8 col-sm-8 col-xs-12">                    
                    <div id="headlines"> 
                    	<p>শিরোনাম</p> 
                        <marquee> 
                            <ul> 

                            	<?php 

									$args = array( 

										'orderby' => 'post_date', 

										'order' => 'DESC', 

										'posts_per_page' => 10 

									); 								
									$loop = new WP_Query( $args ); 							
									while($loop->have_posts()) : $loop->the_post();  

								?> 

                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

                                <?php endwhile; ?> 

                            </ul> 

                        </marquee> 

                    </div>
                   
                    <div class="row">                         <div id="slider" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">                         	<ul class="bxslider">                             	<?php 										$args = array( 											'category_name' => 'irani-film', 											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 5 

										); 
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$slider_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($slider_image_url)) 

										{ 

											$slider_image_url = get_template_directory_uri() . '/images/slider.jpg'; 

										} 

									?> 

                            	<li> 

                        			<img src="<?php echo $slider_image_url; ?>" alt="slider"> 

                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                </li> 

                                <?php endwhile; ?> 

                            </ul> 

                        </div> 

                         

                        <div id="most-read-part" class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> 
 
                        	<ul class="tabs pull-left"> 

                               <li><a data-filter="#tab-part-1" class="active">ইরানী চলচ্চিত্র </a></li> 
 
                               <!-- <li><a data-filter="#tab-part-2">সর্বাধিক পঠিত</a></li>--> 

                            </ul> 

                             

                            <div class="tab-content"> 

                            	<ul id="tab-part-1" class="active"> 

                                	<?php 

										$args = array( 

											'category_name' => 'irani-film', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 5 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();  

									?> 

                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

                                    <?php endwhile; ?> 

                                </ul> 

                               <!--  <ul id="tab-part-2"> 

                                	<?php 

										$args = array( 

											'orderby' => 'rand', 

											'order' => 'DESC', 

											'posts_per_page' => 6 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();  

									?> 

                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

                                    <?php endwhile; ?> 

                                </ul>--> 

                            </div> 

                        </div> 

                    </div> 

                     
                    <div id="most-read-news"> 
                         
                            <header class="header-border blue"><a href="#">সংবাদ বিচিত্রা</a></header> 

                            <div class="row"> 
<!-- sonbad bichitra 1 start -->
<div class=" news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-১', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 250) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 1 end -->
<!-- sonbad bichitra 2 start -->
<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-২', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 250) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 2 end -->
<!-- sonbad bichitra 3 start -->
<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-৩', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 200) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 3 end -->
<!-- sonbad bichitra 4 start -->
<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-৪', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 200) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 4 end -->
<!-- sonbad bichitra 5 start -->
<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-৫', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 200) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 5 end -->
<!-- sonbad bichitra 6 start -->
<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
              <ul> 

                                 

                                	<?php 

										$args = array( 

											'category_name' => 'সংবাদ-বিচিত্রা-৬', 

											'orderby' => 'post_date', 

											'order' => 'DESC', 

											'posts_per_page' => 1, 

										);  
										$loop = new WP_Query( $args );  
										while($loop->have_posts()) : $loop->the_post();   
										$image_url = ''; 

										$content = ''; 

										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-3.jpg'; 

										} 

									?> 

                                 

                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"> 

											<?php 

												$title = get_the_title(); 

												if(strlen($title) > 200) 

												{ 

													echo substr($title, 0, 99) . '...'; 

												} 

												else 

												{ 

													echo $title; 

												} 

                                            ?> 

                                        </a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 400) 

												{ 

													echo substr($content, 0, 399) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                        <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p> 

                                    </li> 

                                    <?php endwhile; ?> 

                                </ul>                   
</div>
<!-- songbad bichitra 6 end -->

                            </div> 

                     </div> 

                      

                    <div id="popular-news"> 
 
 <!-- onnanno start -->                             
<div class="news-item col-lg-12 col-md-12 col-sm-12 col-xs-12 big-category-2"> 

                            	<header class="header-border blue"><a href="#">ইরান – ঐতিহ্য</a></header> 

                               <!-- iran oitissho 1 start -->


<!-- iran oitishho 1 start-->
 <div class="row"> 
<ul>
                                    <?php 									 										// 'category_name' => 'অন্যান্য' 										// 'category_name' => 'খেলাধুলা' 

										$args = array( 

											'category_name' => 'ইরান-ঐতিহ্য-১', 

											'posts_per_page' => 1, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li>                                                                          	<div class="big-category-2-image"> 

                                        	<img src="<?php echo $image_url; ?>" alt="news-image">                                                                                  </div> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                                                                                  <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 470) 

												{ 

													echo substr($content, 0, 469) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div>  <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p>                                     </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 
<!-- iran oitissho 2 start -->
 <ul > 

                                    <?php 									 										// 'category_name' => 'অন্যান্য' 										// 'category_name' => 'খেলাধুলা' 

										$args = array( 

											'category_name' => 'ইরান-ঐতিহ্য-২', 

											'posts_per_page' => 1, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li>                                                                          	<div class="big-category-2-image"> 

                                        	<img src="<?php echo $image_url; ?>" alt="news-image">                                                                                  </div> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                                                                                  <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 470) 

												{ 

													echo substr($content, 0, 469) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div>  <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p>                                     </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 
<!-- iran oitissho 2 end -->
</div>
                            </div> 

                             <!-- iran otiisho end --> 
 
 
 
 
 
 <!-- nari shishu sastho start  --> 

<div class="row"> 

                         

                        	<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">নারী </a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'women', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">শিশু</a></header> 

                                <ul> 

                                	<?php 

										$args = array( 

											'category_name' => 'child', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">স্বাস্থ্য</a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'health', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> <!-- nari shishu sastho end --> 

<!--  sahitto start -->   
<div class="news-item col-lg-12 col-md-12 col-sm-12 col-xs-12 big-category"> 

                            	<header class="header-border blue"><a href="#"> সাহিত্য</a></header> 

                                <ul class="row"> 

                                    <?php 

										$args = array( 

											'category_name' => 'arts-culture', 

											'posts_per_page' => 3, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 350) 

												{ 

													echo substr($content, 0, 349) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

<!--   sahitto end --> 

<!-- iarani shilpo start -->

<!-- onnanno start -->                             
<div class="news-item col-lg-12 col-md-12 col-sm-12 col-xs-12 big-category-2"> 

                            	<header class="header-border blue"><a href="#">শিল্প</a></header> 

                               <!-- iarani shilpo 1 start -->


<!-- iarani shilpo 1 start-->
 <div class="row"> 
<ul>
                                    <?php 									 										// 'category_name' => 'অন্যান্য' 										// 'category_name' => 'খেলাধুলা' 

										$args = array( 

											'category_name' => 'শিল্প-১', 

											'posts_per_page' => 1, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li>                                                                          	<div class="big-category-2-image"> 

                                        	<img src="<?php echo $image_url; ?>" alt="news-image">                                                                                  </div> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                                                                                  <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 570) 

												{ 

													echo substr($content, 0, 569) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div>  <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p>                                     </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 
<!-- iarani shilpo 2 start -->
 <ul > 

                                    <?php 									 										// 'category_name' => 'অন্যান্য' 										// 'category_name' => 'খেলাধুলা' 

										$args = array( 

											'category_name' => 'শিল্প-২', 

											'posts_per_page' => 1, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li>                                                                          	<div class="big-category-2-image"> 

                                        	<img src="<?php echo $image_url; ?>" alt="news-image">                                                                                  </div> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                                                                                  <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 570) 

												{ 

													echo substr($content, 0, 569) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div>  <p><a class="read-more-link text-right" href="<?php the_permalink(); ?>">বিস্তারিত </a></p>                                     </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 
<!-- iarani shilpo 2 end -->
</div>
                            </div> 

                             <!-- iran otiisho end --> 




<!-- irani shilpo end -->


  
                    	<!--<div class="row">--> 

    <!-- shikkha somaj songkriti baktitto start -->                     

                        	<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">শিক্ষা</a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'education', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">সমাজ সংস্কৃতি</a></header> 

                                <ul> 

                                	<?php 

										$args = array( 

											'category_name' => 'সমাজ-সংস্কৃতি', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">ব্যক্তিত্ব</a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'ব্যক্তিত্ব', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             
<!-- biggan projukti start -->
                            <div class="news-item col-lg-12 col-md-12 col-sm-12 col-xs-12 big-category"> 

                            	<header class="header-border blue"><a href="#">বিজ্ঞান ও প্রযুক্তি</a></header> 

                                <ul class="row"> 

                                    <?php 

										$args = array( 

											'category_name' => 'বিজ্ঞান-ও-প্রযুক্তি', 

											'posts_per_page' => 3, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                        <div class="news-content"> 

                                        	<?php 

												$content = get_the_content(); 

												if(strlen($content) > 350) 

												{ 

													echo substr($content, 0, 349) . '...'; 

												} 

												else 

												{ 

													echo $content; 

												} 

											?> 

                                        </div> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

   <!-- biggan projukti start -->                          
<!-- quran telawat  hadis start -->
                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">কুরআন </a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'quran', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">বিখ্যাত ক্বারীদের তেলাওয়াত</a></header> 

                               <a href="http://bangla.irib.ir/home16/%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%86%E0%A6%A8-%E0%A6%A4%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%93%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%A4"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/quran-dwn.jpg" style="width:100%;  height:146px;" alt="telawat"> 

  </a>

                            </div> 
 
							<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">হাদিস </a></header> 

                                <ul class="row"> 

                                    <?php 

										$args = array( 

											'category_name' => 'hadith', 

											'posts_per_page' => 3, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div>                              

                                              

                      
 
 <!-- porjoton life style  khela--> 

<div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">পর্যটন</a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'পর্যটন', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">লাইফ স্টাইল</a></header> 

                                <ul> 

                                    <?php 

										$args = array( 

											'category_name' => 'লাইফ-স্টাইল', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                            <div class="news-item col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

                            	<header class="header-border blue"><a href="#">খেলাধুলা</a></header> 

                                <ul> 

                                    <?php 										$args = array( 
											'category_name' => 'খেলাধুলা', 

											'posts_per_page' => 4, 

											'order' => 'DESC' 

										);   
										$loop = new WP_Query( $args );  
										while( $loop->have_posts() ) : $loop->the_post();  
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 

                                    <?php 

										endwhile;  

									?> 

                                </ul> 

                            </div> 

                             

                        <!--</div>--> 

                     
 
 <!-- lifestyle end --> 
 
 
 
                </article> 

                 

                <aside class="col-lg-3 col-md-4 col-sm-4 col-xs-12"> 

                	<div class="sidebar-news sidebar-advertisement"> 

<a href="#">  <img src="http://poroms.com/news_site/wp-content/uploads/2015/10/iranculture.gif" alt="advertise"></a> 
<!-- vinno khobor start -->

<div id="recent-news" class="sidebar-news"> 

                    	<h3>ভিন্ন খবর</h3> 

                        <ul> 

                        	<?php 

								$args = array( 

									'category_name' => 'vinnokhobor', 

									'order' => 'DESC', 

									'posts_per_page' => 10 

								); 
								 
								$loop = new WP_Query( $args ); 
								 
								while($loop->have_posts()) : $loop->the_post();  
							
										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
										if(empty($image_url)) 

										{ 

											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 

										} 

									?> 

                                    <li> 

                                        <img src="<?php echo $image_url; ?>" alt="news-image" style="width:33%;float:left;padding-right:7px;"> 

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

                                    </li> 
                            <?php endwhile; ?> 
                        </ul> 

                    </div> 
<!-- vinno khobor end -->

<!-- muharrom start -->
<a href="http://poroms.com/news_site/category/mohorrom/"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/MOHORROM.jpg" alt="muharram">   </a> 
<!-- muharrom end -->




<!-- news letter start -->
<a href="#"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/kawserfront.jpg" alt="advertise"> &#2472;&#2495;&#2441;&#2460; &#2482;&#2503;&#2463;&#2494;&#2480; &#2474;&#2524;&#2468;&#2503; &#2453;&#2509;&#2482;&#2495;&#2453; &#2453;&#2480;&#2497;&#2472;   </a> 
<!-- newsletter end -->
<!-- songbad porjalochona start -->
<div id="recent-news" class="sidebar-news"> 
                    	<h3>সংবাদ পর্যালোচনা</h3> 
                        <ul > 
                        	<?php 
								$args = array( 
									'category_name' => 'খবর-সমূহ', 
									'order' => 'DESC', 
									'posts_per_page' => 5 
								); 
							 

								$loop = new WP_Query( $args ); 
								 
								while($loop->have_posts()) : $loop->the_post();  
							?> 
                        	<li style="list-style-type:square;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
                            <?php endwhile; ?> 
                        </ul> 
                    </div> 
<!-- songbad porjalochona end -->
<!-- iranin international school start -->
<a href="http://poroms.com/news_site/category/iran-international-school/"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/cbk.jpg" alt="international school">    </a> 
<!-- iranin international school end -->
<!-- sakkhatkar start--> 
                	<div id="recent-news" class="sidebar-news"> 

                    	<h3>সাক্ষাৎকার </h3> 
                       <ul> 

                        	<?php 
								$args = array( 
									'category_name' => 'interview', 
									'order' => 'DESC', 
									'posts_per_page' => 3 
								); 
								 
								$loop = new WP_Query( $args ); 
							 
								while($loop->have_posts()) : $loop->the_post();  
							?> 
                        	<li style="list-style-type:square;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
                            <?php endwhile; ?> 
                        </ul> 

                    </div> 

 <!-- sakkhatkar end -->   

<!-- sorbocco neta start -->

<div id="recent-news" class="sidebar-news"> 
                    	<h3>সর্বোচ্চ নেতা</h3> 
<a href="http://poroms.com/news_site/category/leader/"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/khomeni.jpg" alt="supreme leader">    </a> 
                    
                    </div> 
<!-- sorbocco neta end -->
<!-- iraner president start -->

<div id="recent-news" class="sidebar-news"> 
                    	<h3>ইরানের প্রেসিডেন্ট</h3> 
<a href="http://poroms.com/news_site/category/president/"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/Iranian-President-Hassan-008.jpg" alt="iranian president">    </a> 
                        

                    </div> 
<!-- iraner president end -->

<!-- farsi vasha shikkha start -->

<div id="recent-news" class="sidebar-news"> 
                    	<h3>ফার্সি ভাষা শিক্ষা</h3> 
                        <ul> 
                        	<?php 
								$args = array( 

									'category_name' => 'vasha-shikkha', 

									'order' => 'DESC', 

									'posts_per_page' => 3 

								); 
								 
								$loop = new WP_Query( $args ); 
							 
								while($loop->have_posts()) : $loop->the_post();  

							?> 

                        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

                            <?php endwhile; ?> 

                        </ul> 

                    </div> 
<!-- farsi vasha shikkha end -->

<a href="http://bangla.irib.ir/quran"><img src="http://poroms.com/news_site/wp-content/uploads/2015/10/quran-1.jpg" alt="advertise"> 

&#2453;&#2507;&#2480;&#2438;&#2472;&#2503;&#2480; &#2438;&#2482;&#2507;   </a> 

<!-- motamot start -->

<div id="recent-news" class="sidebar-news"> 
                    	<h3>মতামত</h3> 
                        <ul> 
                        	<?php 
								$args = array( 

									'category_name' => 'motamot', 

									'order' => 'DESC', 

									'posts_per_page' => 3 

								); 
								 
								$loop = new WP_Query( $args ); 
							 
								while($loop->have_posts()) : $loop->the_post();  

							?> 

                        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

                            <?php endwhile; ?> 

                        </ul> 

                    </div> 
<!-- motamot end -->

                     	<img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise"> 
                     </div> 
                    <!-- facebook like box start --> 

<div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=545233655562935";   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script> <div class="fb-page" data-href="https://www.facebook.com/kawserbd2015?skip_nax_wizard=true" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/kawserbd2015?skip_nax_wizard=true"><a href="https://www.facebook.com/kawserbd2015?skip_nax_wizard=true">Kawserbd</a></blockquote></div></div> 

<!-- facebook like box end --> 

                  

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

									'posts_per_page' => 5 

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

                     

                    <div id="photo-gallery" class="sidebar-news"> 

                    	<h3>গ্যালারী</h3> 

                    	<?php dynamic_sidebar( 'photo-gallery-sidebar' ); ?> 

                    </div> 

                </aside> 

            </div> 

        </div> 

    </section> 
 
 <?php get_footer(); ?>