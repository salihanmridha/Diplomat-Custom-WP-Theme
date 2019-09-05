<?php 
/** 
 * 
 * Template Name: Home 
 * 
 */ 
get_header();  
?>
<section id="main">
<div class="container">
<!-- test body start -->
<div class="row">

<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  > 

<!-- biggan slide khobor sobsomoy start -->
<div class="row"> 
  <!-- biggan start -->

  <div id="most-read-part" class="col-lg-3 col-md-4 col-sm-3 col-xs-12">

<!-- biggan start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	বিজ্ঞান প্রযুক্তি</a></header> 

<!-- biggan 1 start --> 
<ul id="box_a" >

      <?php 

										$args = array( 
											'category_name' => 'technology', 

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
  <!-- biggan 1 end --> 
<!-- biggan 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'technology', 



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
<!--biggan 2 end -->
 <!-- biggan 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'technology', 



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
<!--biggan 3 end -->    
       </div>
    <!-- biggan right end -->
</br>
</br>
<!-- health start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	স্বাস্থ্য</a></header> 

<!-- biggan 1 start --> 
<ul id="box_a" >

      <?php 

										$args = array( 
											'category_name' => 'health', 

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
  <!-- health 1 end --> 
<!-- health 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'health', 



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
<!--health 2 end -->
 <!-- health 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'health', 



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
<!--health 3 end -->    
       </div>
    <!-- health right end -->   
</br>
</br>
<!-- 	kitchen start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	রসুই ঘর</a></header> 

<!-- 	kitchen 1 start --> 
<ul id="box_a" >

      <?php 

										$args = array( 
											'category_name' => '	kitchen', 

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
  <!-- 	kitchen 1 end --> 
<!-- 	kitchen 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	kitchen', 



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
<!--	kitchen 2 end -->
 <!-- 	kitchen 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	kitchen', 



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
<!--	kitchen 3 end -->    
        </div>
    <!-- 	kitchen right end -->  




  </div>
  <!-- biggan sastho kitchen end --> 

  <!-- slide start -->

  <div id="slider" class="col-lg-6 col-md-8 col-sm-6 col-xs-12">

    <ul class="bxslider" style="max-height:336px;overflow:hidden;">

      <?php 										$args = array( 											'category_name' => 'sliderr', 											'orderby' => 'post_date', 



											'order' => 'DESC', 



											'posts_per_page' => 3 



										); 

										$loop = new WP_Query( $args );  

										while($loop->have_posts()) : $loop->the_post();   

										$slider_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  

										if(empty($slider_image_url)) 



										{ 



											$slider_image_url = get_template_directory_uri() . '/images/slider.jpg'; 



										} 



									?>

      <li> <img src="<?php echo $slider_image_url; ?>" alt="slider"> <a href="<?php the_permalink(); ?>">

        <?php the_title(); ?>

        </a> </li>

      <?php endwhile; ?>

    </ul>
<!-- lifestyle start -->
<!-- lifestyle start -->
<div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">লাইফ স্টাইল</a></header> 
<!-- lifestyle 1 to 6 start -->

<div class="row"> 

  <!-- lifestyle 1 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px;height:auto;padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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

  <!-- lifestyle 1 end --> 

  <!-- lifestyle 2 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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

  <!-- lifestyle 2 end --> 

  <!-- lifestyle 3 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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

  <!-- lifestyle 3 end --> 

  <!-- lifestyle 4 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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

  <!-- lifestyle 4 end --> 

  <!-- lifestyle 5 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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

  <!-- lifestyle 5 end --> 

  <!-- lifestyle 6 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'lifestyle', 



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
  <!-- lifestyle 6 end --> 
</div>

<!-- lifestyle 6 end -->
</div>
<!-- lifestyle end -->
 <!-- male start -->
<div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">পুরুষ</a></header> 
<!-- male 1 to 6 start -->

<div class="row"> 

  <!-- male 1 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px;height:auto;padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- male 1 end --> 

  <!-- male 2 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- male 2 end --> 

  <!-- male 3 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- male 3 end --> 

  <!-- male 4 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- male 4 end --> 

  <!-- male 5 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- male 5 end --> 

  <!-- male 6 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'male', 



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

  <!-- পুরুষ 6 end --> 

</div>

<!-- পুরুষ 6 end -->

</div>
<!-- male end -->
<!-- ladies নারী start -->
<div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">নারী</a></header> 
<!-- নারী le 1 to 6 start -->

<div class="row"> 

  <!-- ladies 1 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px;height:auto;padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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



												if(strlen($title) > 120) 



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

  <!-- ladies 1 end --> 

  <!-- ladies 2 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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

  <!-- ladies 2 end --> 

  <!-- ladies 3 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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

  <!-- ladies 3 end --> 

  <!-- ladies 4 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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

  <!-- ladies 4 end --> 

  <!-- ladies 5 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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

  <!-- ladies 5 end --> 

  <!-- ladies 6 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'ladies', 



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

  <!-- ladies 6 end --> 

</div>

<!-- ladies 6 end -->

</div>
<!-- female নারী ladies end -->
</br>
</br>
<!-- 	fashion  start -->
<div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">ফ্যাশন</a></header> 
<!-- 	fashion le 1 to 6 start -->

<div class="row"> 

  <!-- 	fashion1 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px;height:auto;padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 1 end --> 

  <!-- 	fashion 2 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 2 end --> 

  <!-- 	fashion 3 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 3 end --> 

  <!-- 	fashion 4 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 4 end --> 

  <!-- 	fashion 5 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 5 end --> 

  <!-- 	fashion 6 start -->

  <div class=" news-item col-lg-4 col-md-2 col-sm-2 col-xs-12" style="border: 0px solid #CCC; border-radius: 10px; padding: 1px;margin-bottom:10px;">

    <ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => '	fashion', 



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

  <!-- 	fashion 6 end --> 

</div>

<!-- 	fashion 6 end -->

</div>
<!-- 	fashion end -->





  </div>

  <!-- slider lifestyle purush female fashion end --> 
 
 <!-- খবর সবসময় khobor sobsomoy start -->

  <div id="most-read-part" class="col-lg-3 col-md-4 col-sm-3 col-xs-12">

<!-- খবর সবসময় start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	খবর সবসময়</a></header> 
<!-- biggan 1 start --> 
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'খবর সবসময়', 



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
  <!-- খবর সবসময় 1 end --> 
<!-- খবর সবসময় 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'খবর সবসময়', 



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
<!--খবর সবসময় 2 end -->
 <!-- খবর সবসময় 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'খবর সবসময়', 



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
<!--khobor sobsomoy 3 end -->    

      

    </div>
    <!-- khobor sobsomoyright end -->
   </br>
<!-- funny-stuff মজার খবর start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	মজার খবর</a></header> 
<!-- funny-stuff 1 start --> 
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'funny-stuff', 



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
  <!-- funny-stuff 1 end --> 
<!-- funny-stuff 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'funny-stuff', 



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
<!--funny-stuff 2 end -->
 <!-- funny-stuff 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'funny-stuff', 



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
<!--মজার খবর 3 end -->    
        </div>
    <!-- মজার খবর right end -->
   </br>
<!-- makeup রূপচর্চা start -->

  <div class="news-item col-lg-12 col-md-4 col-sm-6 col-xs-12"> <header class="header-border blue"><a href="#">	রূপচর্চা</a></header> 
<!-- funny-stuff 1 start --> 
<ul id="box_a">

      <?php 



										$args = array( 

											'category_name' => 'makeup', 
											'orderby' => 'post_date', 
											'order' => 'DESC', 
											'posts_per_page' => 1, 
'offset'           => 0,


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
  <!-- makeup 1 end --> 
<!-- makeup 2 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'makeup', 



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
<!--makeup 2 end -->
 <!-- makeup 3 start -->
<ul id="box_a">

      <?php 



										$args = array( 



											'category_name' => 'makeup', 



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
<!--makeup 3 end -->    

      

    </div>
    <!-- 	রূপচর্চা right end --> 
    <div style="float:left;width:100%;">

<?php get_calendar(); ?>

</div>



  </div>
  <!-- khobor sobsomoy  মজার খবর রূপচর্চা  end --> 


  <!-- biggan slide lifestyle khobor sobsomoy end --> 

  



</br>




















</br>
</br>




<!-- test body end --> 



</section>

<?php get_footer(); ?>