<?php get_header(); ?>
	<!-- - - - - - - - MAIN  - - - - - - - -->
	<main id="content" class="row sbr">
		<div class="section padding-off columns medium-12 large-12 background-color-off">
			<div class="tmm_row">
				<div class="relative">
						<?php get_template_part( 'template-part/slider' ); ?>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-part/feature-box' ); ?>

		<section id="main" class="medium-8 large-8 columns">

			<?php get_template_part( 'template-part/feature-news' ); ?>

			<?php get_template_part( 'template-part/latest-articles' ); ?>

			<?php get_template_part( 'template-part/world-headline' ); ?>

		</section>

		<?php get_sidebar(  ); ?>

	</main>
	<!--/ #content -->

	<!-- Dialog Login/Register Widnows -->

	<div id="accountDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="https://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="https://html.webtemplatemasters.com/">
					<fieldset class="login">

						<p><input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off"/></p>

						<p>
							<button class="button middle" type="submit">Register</button>
							&nbsp;
							<a href="#" class="button middle dialog-login-button">Log In</a>
						</p>

					</fieldset>
				</form>
				<i class="action-close" data-dialog-close>Close</i>
			</div>
		</div>
	</div>

	<div id="loginDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="https://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="https://html.webtemplatemasters.com/" method="post" class="account">
					<fieldset>

						<p><input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off"/></p>

						<p>
							<input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever">

							<label for="rememberme">Remember Me</label>

							<button class="button middle right" type="submit">Log In</button>

							<a href="#" class="reset-pass">Reset password</a>
						</p>

					</fieldset>
				</form>

				<i class="action-close" data-dialog-close>Close</i>
			</div>

		</div>
	</div>

	<!-- End Dialog Login/Register Widnows -->

	<!-- - - - - - - - END MAIN - - - - - - - -->


	<!-- - - - - - - - FOOTER - - - - - - - -->

	<footer id="footer">
		<?php get_template_part( 'template-part/footer-widget' ); ?>
		<!--/ .footer-top-->
		<?php get_footer(); ?>
