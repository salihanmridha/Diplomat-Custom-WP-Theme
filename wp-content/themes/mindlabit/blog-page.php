<?php
/*
  Template Name: Blog Page
*/
?>
<?php get_header(); ?>

    <header data-background="<?php echo get_template_directory_uri(); ?>/img/1.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1 class="no-pad">News</h1>
        <h4>Latest news</h4>
      </div>
    </header>
    <!-- News Block-->
    <section id="news" class="section-small">
      <div class="container">
        <div class="row grid-pad">
          <div class="col-md-8">
            <h3 class="pull-left">News</h3>
            <div class="pull-right">
              <h4>OUR LATEST NEWS</h4>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="<?php echo get_template_directory_uri(); ?>/img/8.jpg" alt="" class="img-responsive center-block">
                  <h5>O TEMPORA, O MORES. SEM SED DICTUM</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus</p><a href="" class="btn btn-gray btn-xs">Read more</a>
              </div>
              <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="<?php echo get_template_directory_uri(); ?>/img/7.jpg" alt="" class="img-responsive center-block">
                  <h5>O TEMPORA, O MORES. SEM SED DICTUM</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
              </div>
            </div>
          </div>

          <?php
          /*
          ==============
          Sidebar
          ==============
          */
          get_sidebar();
          ?>

        </div>
      </div>
    </section>
    <!-- Pagination-->
    <div class="section section-small bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <nav>
              <ul class="pagination">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&middot;&middot;&middot;</a><a href="#">38</a></li>
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Action Section-->
    <div class="section action section-small bg-gray2">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-md-10">
            <h3 class="no-pad">Share your passion with the world!</h3>
          </div>
          <div class="col-md-2 text-right"><a href="httpss://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark wow fadeInDown">Get Started</a></div>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
