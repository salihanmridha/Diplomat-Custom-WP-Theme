<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en-US"><![endif]-->
<!--[if !(IE)]><!-->
<html <?php language_attributes(); ?> class="not-ie no-js" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs
	  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="author" content="Salihan Mridha">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?> /images/favicon.ico" type="image/x-icon"/>
  <?php if (is_singular() && pings_open( get_queried_object() )): ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>

	<!-- Google Web Fonts
	================================================== -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700,500,400%7cCourgette%7cRoboto:400,500,700%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext'
		  rel='stylesheet' type='text/css'>
</head>
<body class="animated">
<!-- <div class="tmm_loader">

	<div class="logo">
		<span class="tmm_logo">
			<a title="Political HTML5 Theme" href="<?php echo esc_url( home_url( '/' ) ); ?>">Political Site</a>
		</span>
	</div>

	<div class="loader">
		<div id="spinningSquaresG">
			<div id="spinningSquaresG_1" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_2" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_3" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_4" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_5" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_6" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_7" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_8" class="spinningSquaresG"></div>
		</div>
	</div>
</div> -->

<!-- - - - - - - - WRAPPER - - - - - - - -->
<div id="wrapper">

	<!-- - - - - - - - MOBILE MENU - - - - - - - -->

	<nav id="mobile-advanced" class="mobile-advanced"></nav>

	<!-- - - - - - - - END MOBILE MENU - - - - - - - -->


	<!-- - - - - - - - HEADER - - - - - - - -->

	<header id="header" class="header type-3">

		<div class="header-top">

			<div class="row">

				<div class="large-12 columns">
					<ul class="social-icons">
						<li class="twitter">
							<a target="_blank" href="www.twitter.com">Twitter</a>
						</li>
						<li class="facebook">
							<a target="_blank" href="#">Facebook</a>
						</li>
						<li class="youtube">
							<a target="_blank" href="#">Youtube</a>
						</li>
						
					</ul>
					<!--/ .social-icons-->
				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-top-->

		<div class="header-middle">

			<div class="row">

				<div class="large-12 columns">
					<div class="header-middle-entry">

						<div class="logo">
							<span class="tmm_logo">
								<a title="Political HTML5 Theme" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
							</span>
						</div>

						<div class="account">

							<ul>
								<li data-login="loginDialog" class=""><a href="#"></a></li>
								<li data-account="accountDialog" class=""><a href="#"></a></li>
							</ul>

							<!-- - - - - - - - DONATE BUTTON - - - - - - - -->

							<a target="_blank" href="http://bangla.khnsecretariat.com/"
							   class="button small donate">বাংলা</a>

							<!-- - - - - - - - END DONATE BUTTON - - - - - - - -->

						</div>
					</div>

				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-middle-->

		<div class="header-bottom">

			<div class="row">

				<div class="large-12 columns">

					<nav id="navigation" class="navigation top-bar" data-topbar>

						<div class="menu-primary-menu-container">
							<?php wp_nav_menu( array(
		              'theme_location' => 'primary',
		              'container' => false,
		              'menu_class' => 'nav navbar-nav navbar-left'
		          ) ); ?>
						</div>

						<div class="search-form-nav">
							<form method="get" action="#">
								<fieldset>
									<input placeholder="Search" type="text" name="s" autocomplete="off" value=""
										   class="advanced_search"/>
									<button type="submit" class="submit-search">Search</button>
								</fieldset>
							</form>
						</div>
						<a target="_blank" href="#" class="button large donate">বাংলা</a>

					</nav>
					<!--/ .navigation-->

				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-bottom-->

	</header>
	<!--/ #header-->

	<!-- - - - - - - -  END HEADER  - - - - - - - -->
