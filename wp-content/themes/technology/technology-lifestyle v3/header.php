 
<?php
/**

 * The Header template for our theme

 *
 * Displays all of the <head> section and everything up till <div id="main">

 * 

 * @package WordPress

 * @subpackage Twenty_Thirteen 

 * @since Twenty Thirteen 1.0 

 */ 

?><!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" 

xmlns:og="http://ogp.me/ns#" 

xmlns:fb="http://www.facebook.com/2008/fbml"> 

<head> 
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9518689112563830",
          enable_page_level_ads: true
     });
</script>
	

	<meta name="author" content="technology-lifestyle" /> 

<meta http-equiv="Content-Type" content="text/html; " /> 

<meta charset="UTF-8"> 

<meta name="robots" content="all" />  

<meta property="fb:pages" content="1807149702890822" />

<!-- meta description start -->  

 <?php  

 //if single post then add excerpt as meta description   



 if (is_single()) {  

  ?>  

  

<meta name="Description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  

 <meta property="og:image" content="<?php $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); echo $post_thumbnail[0]; ?>" />  

 <?php  

 //if homepage use standard meta description  

 } else if(is_home() || is_page())  {  

 ?>  

 <?php  

 //if category page, use category description as meta description  

} else if(is_category()) {  

  ?>  

<?php } ?>  

 <!-- meta description end --> 

	<meta name="viewport" content="width=device-width">

  


	<title><?php wp_title( '|', true, 'right' ); ?></title> 

 	<link rel="profile" href="http://gmpg.org/xfn/11"> 

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 

    

	<!--[if lt IE 9]> 

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script> 

	<![endif]-->



   

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'"> 

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slider/jquery.bxslider.css"> 

  

	<?php wp_head(); ?> 

<!-- analytics start --> 

 <script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({article:'auto'});
  !function (e, f, u, i) {
    if (!document.getElementById(i)){
      e.async = 1;
      e.src = u;
      e.id = i;
      f.parentNode.insertBefore(e, f);
    }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/dailyamadershomoy-technologylifestyle/loader.js',
  'tb_loader_script');
  if(window.performance && typeof window.performance.mark == 'function')
    {window.performance.mark('tbl_ic');}
</script>

<!-- analytics end --> 
	
	
	
		
	
	
	
	

</head> 

<style type="text/css"> 

  <!-- /* $WEFT*/
  @font-face {
	font-family: Shree552;
	src: local("Shree552"), url("/fonts/Shree552.ttf") format("truetype");
 } 
--> 
</style> 



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89459114-1', 'auto');
  ga('send', 'pageview');

</script>





<body> 

	



<!-- </br></br> -->



    <header> 

    	<div class="container"> 

    
</br></br>


        	<div id="header-top"> 

            	<div class="row" style="top:-15px;position:relative;"> 

                     <p class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left"> 

                    	<?php echo do_shortcode('[bangla_day]'); ?><?php echo ', '; ?>  

						<?php echo do_shortcode('[english_date]'); ?><?php echo ' '; ?>  

						 
<a href="http://technology-lifestyle.com/home/">English Version</a>
                    </p>  

     

                    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left" style="position:relative;top:-11px;"> 

                    	<!-- search start --> 


<!-- search end -->



				



                    </p>  

                    <p id="top-social-icons" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right">



                        <a href="#"><span class="fa fa-facebook-official"></span></a>



                        <a href="#"><span class="fa fa-twitter-square"></span></a>



                       <a href="#"><span class="fa fa-google-plus-square"></span></a>



                        <a href="#"><span class="fa fa-linkedin-square"></span></a>



                        <a href="#"><span class="fa fa-pinterest-square"></span></a>



                    </p>



                </div>



            </div> 





            

          <div id="logo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "> 



<!-- <div id ="header">--> 

<div style="width:100%; height:auto;float:left;margin-top:10px;margin-bottom:1px;"> 

            	<a href="<?php bloginfo( 'home' ); ?>"> 

                	<img width="170" alt="ctgbdnews" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"> 

                </a> 

            </div> 

             

            <nav class="main-menu"> 

            	<div id="pull"> 

                    <p class="pull-left">প্রচ্ছদ</p> 

                    <p id="pull-button" class="pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/nav-icon.png" alt="pull-button"></p>                       	 

                </div> 

                <?php 

					$defaults = array( 

						'theme_location'  => 'primary' 

					); 

					 

					wp_nav_menu( $defaults );   

				?> 

            	<!--<ul id="main-menu"> 

                	<li><a href="#">মূল পাতা</a></li> 

                	<li><a href="#">জাতীয়</a></li> 

                	<li><a href="#">রাজনীতি</a></li> 

                	<li><a href="#">অর্থনীতি</a></li> 

                	<li><a href="#">আন্তর্জাতিক</a></li> 

                	<li><a href="#">প্রবাস</a></li> 

                	<li><a href="#">সারাদেশ</a></li> 

                	<li><a href="#">খেলাধুলা</a></li> 

                	<li><a href="#">শিক্ষাঙ্গন</a></li> 

                	<li><a href="#">শিল্প সাহিত্য</a></li> 

                	<li><a href="#">আইন আদালত</a></li> 

                	<li><a href="#">প্রবাস</a></li> 

                	<li><a href="#">সারাদেশ</a></li> 

                	<li><a href="#">খেলাধুলা</a></li> 

                	<li><a href="#">জাতীয়</a></li> 

                	<li><a href="#">অর্থনীতি</a></li> 

                	<li><a href="#">আন্তর্জাতিক</a></li> 

                </ul>--> 

            </nav> 

             

        </div> 

<!-- share this start -->
 
<!-- share this end --> 

    </header>