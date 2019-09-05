<?php get_header(); ?>
	<!-- - - - - - - - MAIN  - - - - - - - -->
	<main id="content" class="row sbr">

			<?php get_template_part( 'template-part/album-archive' ); ?>

	</main>
	<!--/ #content -->

	<?php get_template_part( 'template-part/login-reg' ); ?>

	<!-- - - - - - - - END MAIN - - - - - - - -->


	<!-- - - - - - - - FOOTER - - - - - - - -->

	<footer id="footer">
		<?php get_template_part( 'template-part/footer-widget' ); ?>
		<!--/ .footer-top-->
		<?php get_footer(); ?>
