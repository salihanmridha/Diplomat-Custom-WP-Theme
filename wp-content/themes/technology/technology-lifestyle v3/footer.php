<?php







/**







 * The template for displaying the footer







 *







 * Contains footer content and the closing of the #main and #page div elements.







 *







 * @package WordPress







 * @subpackage Twenty_Thirteen







 * @since Twenty Thirteen 1.0







 */







?>







		







    <footer>







    	<div class="container">



<!-- test footer start -->



            <div style=" float :left; background: #DDD none repeat scroll 0% 0%;width:100%;border-bottom: 3px solid #CE4D52;margin-bottom: 10px;border-radius: 3px;">
<div style="  padding:5 px;background-color:#333;"><a href="http://technology-lifestyle.com/bangla/privacy-policy/" target="_blank" style="color: #FFFFFF">Privacy Policy</a>
</div>

<div style=" float :left; ">



              <a class="pull-left" href="<?php bloginfo( 'home' ); ?>">







                    <img width="220" alt="CTG BD" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">







                </a>



</div>



<div style=" float :right; text-align:center;font-family:tahoma;color:#4C4A4A;">



         <p> <b>tecchnology-lifestyle.com</b></p>



  <!-- <p>  </p>



   <p> 



</p>



   <p>  </p>-->



</div>







</div>



<!-- test footer start -->







      







        </div>







    </footer>















	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>







    <script>







		jQuery(document).ready(function(){







			jQuery("#pull-button").click(function(){







				jQuery("#menu-main-menu").slideToggle("slow");







			});







		}); 







	</script>







	<script>







		jQuery(document).ready(function(e) {







            jQuery('#most-read-part .tabs li a').click(function(e) {







				var id = jQuery(this).attr('data-filter');







				jQuery('#most-read-part .tabs li a').removeClass('active');







				jQuery(this).addClass('active');







				jQuery('#most-read-part .tab-content ul').removeClass('active');







				jQuery(id).addClass('active');







            });







        });







    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/slider/jquery.bxslider.min.js"></script>



    <script>



		jQuery(document).ready(function(){





			jQuery('.bxslider').bxSlider({







				auto: true







			});







		});



	</script>
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({flush: true});
</script>

</body>



</html>