<?php



/**



 * The template for displaying all single posts



 *



 * @package WordPress



 * @subpackage Twenty_Thirteen



 * @since Twenty Thirteen 1.0



 */







get_header(); ?>

<section id="main">



    <div class="container">

        <div class="row">



                	<article id="page" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 post" >

                 




		<?php /* The loop */ ?>



        <?php while ( have_posts() ) : the_post(); ?>



<!-- Ad Unit [9046] techbd468 -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mystyle -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9518689112563830"
     data-ad-slot="2033344274"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- switch ad end-->



        	<h1 class="entry-title"><?php the_title(); ?></h1>

<!-- add start -->



<?php edit_post_link('edit', '<p>', '</p>'); ?>

<div id="date"><strong>technology-lifestyle </strong> <div > <?php the_date(); ?> </div> </div>

      

<div style="min-width:100%;text-align:center;">

				<?php



					$news_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );



						



					if(!empty($news_image_url))



					{



						echo '<img id="featured-image" src="'.$news_image_url.'" alt="news-image" />';



					}



				?> 


</div>

  <div id="news-container">
<div style="width:auto;height:auto;padding :10px; text-align:center;"> 
	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- hometop -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9518689112563830"
     data-ad-slot="6291740077"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	
</div>
            <?php the_content(); ?>



 </div>  


            <?php //get_template_part( 'content', get_post_format() ); ?>



            <?php //twentythirteen_post_nav(); ?>



            <?php //comments_template(); ?>





        <?php endwhile; ?>



</br></br></br>



<!-- test start -->


<!-- test end -->
<!-- mgid start -->


<div id="news-container">
<div style="width:auto;height:auto;padding :10px; text-align:center;">

<div id="taboola-below-article-thumbnails"></div>
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({
    mode: 'thumbnails-a',
    container: 'taboola-below-article-thumbnails',
    placement: 'Below Article Thumbnails',
    target_type: 'mix'
  });
</script>

</div>



<!-- mgid end -->




<!-- related start -->

<!-- lifestyle start -->
<!-- lifestyle start -->
<div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">আরও পড়তে পারেন </a></header> 
<!-- related 1 to 6 start -->

<div class="row"> 

  <!-- related 1 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px;height:auto;padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 





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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image"> </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

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

        </a> </li>

      <?php endwhile; ?>

    </ul>

  </div>

  <!-- related 1 end --> 

  <!-- related 2 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 1, 

'offset'           => 1,



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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image" > </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

        <?php 



												$title = get_the_title(); 



												if(strlen($title) > 150) 



												{ 



													echo substr($title, 0, 99) . '...'; 



												} 



												else 



												{ 



													echo $title; 



												} 



                                            ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>

  </div>

  <!-- related 2 end --> 

  <!-- related 3 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 1, 

'offset'           => 2,



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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image"> </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

        <?php 



												$title = get_the_title(); 



												if(strlen($title) > 150) 



												{ 



													echo substr($title, 0, 99) . '...'; 



												} 



												else 



												{ 



													echo $title; 



												} 



                                            ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>

  </div>

  <!-- related 3 end --> 
</div>
<div class="row"> 
  <!-- related 4 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



			
											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 1,

'offset'           => 3, 



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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image" > </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

        <?php 



												$title = get_the_title(); 



												if(strlen($title) > 150) 



												{ 



													echo substr($title, 0, 99) . '...'; 



												} 



												else 



												{ 



													echo $title; 



												} 



                                            ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>

  </div>

  <!-- related 4 end --> 

  <!-- related 5 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 1, 

'offset'           => 4,



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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image" > </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

        <?php 



												$title = get_the_title(); 



												if(strlen($title) > 150) 



												{ 



													echo substr($title, 0, 99) . '...'; 



												} 



												else 



												{ 



													echo $title; 



												} 



                                            ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>

  </div>

  <!-- related 5 end --> 

  <!--  related 6 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



	 



											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 1, 

'offset'           => 5,



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

      <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="big-category-box-image"> <a id="box_a" href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image" "> </a> </div>

        <a id="box_a" href="<?php the_permalink(); ?>">

        <?php 



												$title = get_the_title(); 



												if(strlen($title) > 150) 



												{ 



													echo substr($title, 0, 99) . '...'; 



												} 



												else 



												{ 



													echo $title; 



												} 



                                            ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>
  </div>
  <!-- related 6 end --> 
</div>

<!-- related 6 end -->
</div>
<!-- related end -->

<!-- related end -->
   



 <!-- comments start -->


                                

<!-- comments end -->



	</article>















    		<aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">



       <!--  <div class="sidebar-news sidebar-advertisement">



            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">



        </div> -->



        



        <div id="recent-news" class="sidebar-news">
<div style="height: 1000px; margin-bottom: 10px; overflow: hidden;">
<div id="taboola-right-rail-thumbnails"></div>
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({
    mode: 'thumbnails-rr',
    container: 'taboola-right-rail-thumbnails',
    placement: 'Right Rail Thumbnails',
    target_type: 'mix'
  });
</script>
</div>



            <h3>সাম্প্রতিক খবর</h3>







  <!-- test right start -->



      <div id="recent-news" class="sidebar-news"style="height:855px;overflow-y:scroll;background: #F3F3F3;border-left:1px solid #908D8D;">



        <ul>



          <?php 



								$args = array( 

								 'orderby' => 'date',

                       							 'order' => 'DESC',

                       							 'posts_per_page' => 60



								); 

							



								$loop = new WP_Query( $args ); 



								 



								while($loop->have_posts()) : $loop->the_post();  



							



										$image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  



										if(empty($image_url)) 







										{ 







											$image_url = get_template_directory_uri() . '/images/news-image-4.jpg'; 







										} 







									?>



          <div style="margin-bottom:3px; border-bottom:1px solid #E1E1E1;line-height:14px; min-height:52px;padding:3px;"> <a href="<?php the_permalink(); ?>"> <img src="<?php echo $image_url; ?>" alt="news-image" style="width:25%;float:left;padding-right:7px;height:50px;">



            <?php the_title(); ?>



            </a> <br/>



          </div>



          <?php endwhile; ?>



        </ul>



      </div>



      <!-- test kolkata right end --> 











         <!--   <ul style="height:550px;overflow-y:scroll;background: #F3F3F3;">



                <?php



                    $args = array(



                        'orderby' => 'date',



                        'order' => 'DESC',



                        'posts_per_page' => 50



                    );



                    



                    $loop = new WP_Query( $args );



                    



                    while($loop->have_posts()) : $loop->the_post(); 



                ?>



                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>



                <?php endwhile; ?>



            </ul>-->



        </div>

  



     <!--   <div class="sidebar-news sidebar-advertisement">



            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-2.jpg" alt="advertise">



        </div> -->



        



       



        



      <!--   <div class="sidebar-news sidebar-advertisement">



            <img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg" alt="advertise">



        </div> -->



    </aside>



        



        </div>



    </div>



</section>











<?php get_footer(); ?>