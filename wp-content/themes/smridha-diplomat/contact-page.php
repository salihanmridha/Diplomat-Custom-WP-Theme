<?php
/*
  Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<!-- - - - - - - - MAIN  - - - - - - - -->
<main id="content" class="row">
	<?php


		if (have_posts()):
			while (have_posts()):
				the_post();
	?>
			<section id="main" class="large-12 columns">
				<div class="page-title">
					<h1>Contact Us</h1>
					<div class="breadcrumbs">
						<a href="home.html" title="">Home</a> Contact
					</div><!--/ .breadcrumbs-->
				</div>

				<div class="section margin-top-off">
					<div class="contact-map">
						<div id="map_address" class="google_map"><?php the_content(); ?></div>
					</div>
				</div>

        <div class="section margin-top-30">

					<div class="row">

						<div class="medium-8 large-8 columns">
							<h2>Send us Mail</h2>
							<form method="POST" action="#" id="contact-form-id" class="contact-form" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
								<p class="tmmFormStyling form-input-text">
									<input id="your-name" required="" type="text" name="your_name" value="" placeholder="Your Name *">
								</p>
								<p class="tmmFormStyling form-input-email">
									<input id="your-email" required="" type="email" name="your_email" value="" placeholder="Your Email *">
								</p>
								<p class="tmmFormStyling form-input-text">
									<input id="subject" required="" type="text" name="subject" value="" placeholder="Subject *">
								</p>
								<p class="tmmFormStyling form-textarea">
									<textarea id="contact-message" required="" name="contact_message" placeholder="Your Message *"></textarea>
								</p>

                <p class="tmmFormStyling form-captcha">
                    <button id="contact-submit" name="contact_submit" class="button middle default-blue" type="submit">
                        Submit
                    </button>
                </p>

                <div style="margin-top: 20px;" id="msg_deliver"></div>

							</form>

						</div>

						<div class="columns  medium-4 large-4">
							<h4>Some Information</h4>
							<p>
								Earum erat, expedita consequatur, accusantium dui, aptent placerat, corporis! Qui nullam ab natoque. Pede dicta praesentium dolorem. Per doloribus consequatur exercitation officiis porttitor itaque mollitia cubilia ultricies.
							</p>
							<div class="clear"></div>
							<div class="divider-2"></div>
							<div class="our_contacts">
								<ul>
									<li>34789 Magic City Avenue, Los Angeles, CA, 94048, United States</li>
									<li>Call: +1 800 123 456 789 </li>
									<li>E-mail: <a href="mailto:yousite@yoursite.com">yousite@yoursite.com</a></li>
								</ul>
							</div>
							<div class="our_timetable">
								ThemeMakers Support team is available from Monday to Friday 9 a.m. – 6 p.m. (GMT +1)
								<dl>
									<dt>Saturday:</dt>
									<dd>Closed</dd>
									<dt>Sunday:</dt>
									<dd>Closed</dd>
								</dl>

							</div><!--/ .our_timetable-->
						</div>

					</div><!--/ .row-->

				</div><!--/ .section-->

			</section><!--/ #main-->
			<?php endwhile; endif; ?>

		</main><!--/ #content-->
<!--/ #content -->
<?php get_template_part( 'template-part/login-reg' ); ?>
<!-- - - - - - - - END MAIN - - - - - - - -->
<!-- - - - - - - - FOOTER - - - - - - - -->
<footer id="footer">
<?php get_template_part( 'template-part/footer-widget' ); ?>
<!--/ .footer-top-->
<?php get_footer(); ?>
