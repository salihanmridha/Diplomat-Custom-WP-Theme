<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?> /img/favicon.png">
    <?php if (is_singular() && pings_open( get_queried_object() )): ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll">
            <?php
              $logo = get_template_directory_uri() . '/img/logo.png';
              $getLogo = esc_attr(get_option('mindlab_logo_upload'));
              $logoCondition = (!empty($getLogo) ? $logoCondition = $getLogo : $logoCondition = $logo);
            ?>
            <img src="<?php  echo $logoCondition; ?>" alt="Logo" class="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <?php wp_nav_menu( array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'nav navbar-nav navbar-left'
          ) ); ?>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <?php if (is_front_page()):  ?>
    <header class="intro">
      <!-- Intro Header-->
      <div class="intro-body">
        <?php
          $slider_Subtitle = esc_attr( get_option('mindlab_body_slider_subtitle') );
          if (empty($slider_Subtitle)) {
            echo "<h4>Here will be your slider Sub title</h4>";
          } else{
            echo "<h4>$slider_Subtitle</h4>";
          }
        ?>

        <?php
          $slider_title = esc_attr( get_option('mindlab_body_slider_title') );
          if (empty($slider_title)) {
            echo "<h1>slider title</h1>";
          } else{
            echo "<h1>$slider_title</h1>";
          }
        ?>

        <div data-wow-delay="1s" class="scroll-btn wow fadeInDown"><a href="#about" class="page-scroll"><span class="mouse"><span class="weel"><span></span></span></span></a></div>
      </div>
    </header>
  <?php endif; ?>
