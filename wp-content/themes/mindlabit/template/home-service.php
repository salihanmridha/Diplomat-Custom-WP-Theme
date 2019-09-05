<!-- Services Section-->
<section id="services" class="bg-img4 text-center">
  <div class="overlay"></div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h3>Our Services</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Doneceleifend, sem sed dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elits</p>
      </div>
    </div>
    <div class="row">
      <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getFirstIcon = esc_attr( get_option( 'first_icon' ) );
          $setFirstIcon = (empty($getFirstIcon) ? $setFirstIcon = "ion-ios-analytics-outline" : $setFirstIcon = $getFirstIcon);

          $getFirstTitle = esc_attr( get_option( 'first_service_title' ) );
          $setFirstTitle = (empty($getFirstTitle) ? $setFirstTitle = "Give Your Title Here" : $setFirstTitle = $getFirstTitle);

          $getFirstDesc = esc_attr( get_option( 'first_service_desc' ) );
          $setFirstDesc = (empty($getFirstDesc) ? $setFirstDesc = "Give Your Description Here" : $setFirstDesc = $getFirstDesc);
        ?>
        <h4><i class="icon icon-big <?php echo $setFirstIcon; ?>"></i> <?php echo $getFirstTitle; ?></h4>
        <p><?php echo $setFirstDesc; ?></p>
      </div>

      <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getsecondIcon = esc_attr( get_option( 'second_icon' ) );
          $setsecondIcon = (empty($getsecondIcon) ? $setsecondIcon = "ion-ios-analytics-outline" : $setsecondIcon = $getsecondIcon);

          $getsecondTitle = esc_attr( get_option( 'second_service_title' ) );
          $setsecondTitle = (empty($getsecondTitle) ? $setsecondTitle = "Give Your Title Here" : $setsecondTitle = $getsecondTitle);

          $getsecondDesc = esc_attr( get_option( 'second_service_desc' ) );
          $setsecondDesc = (empty($getsecondDesc) ? $setsecondDesc = "Give Your Description Here" : $setsecondDesc = $getsecondDesc);
        ?>
        <h4><i class="icon icon-big <?php echo $setsecondIcon; ?>"></i> <?php echo $setsecondTitle; ?></h4>
        <p><?php echo $setsecondDesc; ?></p>
      </div>

      <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getthirdIcon = esc_attr( get_option( 'third_icon' ) );
          $setthirdIcon = (empty($getthirdIcon) ? $setthirdIcon = "ion-ios-analytics-outline" : $setthirdIcon = $getthirdIcon);

          $getthirdTitle = esc_attr( get_option( 'third_service_title' ) );
          $setthirdTitle = (empty($getthirdTitle) ? $setthirdTitle = "Give Your Title Here" : $setthirdTitle = $getthirdTitle);

          $getthirdDesc = esc_attr( get_option( 'third_service_desc' ) );
          $setthirdDesc = (empty($getthirdDesc) ? $setthirdDesc = "Give Your Description Here" : $setthirdDesc = $getthirdDesc);
        ?>
        <h4><i class="icon icon-big <?php echo $setthirdIcon; ?>"></i> <?php echo $setthirdTitle; ?></h4>
        <p><?php echo $setthirdDesc; ?></p>
      </div>

      <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getfourthIcon = esc_attr( get_option( 'fourth_icon' ) );
          $setfourthIcon = (empty($getfourthIcon) ? $setfourthIcon = "ion-ios-analytics-outline" : $setfourthIcon = $getfourthIcon);

          $getfourthTitle = esc_attr( get_option( 'fourth_service_title' ) );
          $setfourthTitle = (empty($getfourthTitle) ? $setfourthTitle = "Give Your Title Here" : $setfourthTitle = $getfourthTitle);

          $getfourthDesc = esc_attr( get_option( 'fourth_service_desc' ) );
          $setfourthDesc = (empty($getfourthDesc) ? $setfourthDesc = "Give Your Description Here" : $setfourthDesc = $getfourthDesc);
        ?>
        <h4><i class="icon icon-big <?php echo $setfourthIcon; ?>"></i> <?php echo $setfourthTitle; ?></h4>
        <p><?php echo $setfourthDesc; ?></p>
      </div>

      <div data-wow-delay="1s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getfifthIcon = esc_attr( get_option( 'fifth_icon' ) );
          $setfifthIcon = (empty($getfifthIcon) ? $setfifthIcon = "ion-ios-analytics-outline" : $setfifthIcon = $getfifthIcon);

          $getfifthTitle = esc_attr( get_option( 'fifth_service_title' ) );
          $setfifthTitle = (empty($getfifthTitle) ? $setfifthTitle = "Give Your Title Here" : $setfifthTitle = $getfifthTitle);

          $getfifthDesc = esc_attr( get_option( 'fifth_service_desc' ) );
          $setfifthDesc = (empty($getfifthDesc) ? $setfifthDesc = "Give Your Description Here" : $setfifthDesc = $getfifthDesc);
        ?>

        <h4><i class="icon icon-big <?php echo $setfifthIcon; ?>"></i> <?php echo $setfifthTitle; ?></h4>
        <p><?php echo $setfifthDesc; ?></p>
      </div>

      <div data-wow-delay="1.2s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getsixthIcon = esc_attr( get_option( 'sixth_icon' ) );
          $setsixthIcon = (empty($getsixthIcon) ? $setsixthIcon = "ion-ios-analytics-outline" : $setsixthIcon = $getsixthIcon);

          $getsixthTitle = esc_attr( get_option( 'sixth_service_title' ) );
          $setsixthTitle = (empty($getsixthTitle) ? $setsixthTitle = "Give Your Title Here" : $setsixthTitle = $getsixthTitle);

          $getsixthDesc = esc_attr( get_option( 'sixth_service_desc' ) );
          $setsixthDesc = (empty($getsixthDesc) ? $setsixthDesc = "Give Your Description Here" : $setsixthDesc = $getsixthDesc);
        ?>

        <h4><i class="icon icon-big <?php echo $setsixthIcon; ?>"></i> <?php echo $setsixthTitle; ?></h4>
        <p><?php echo $setsixthDesc; ?></p>
      </div>

      <div data-wow-delay="1.4s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $getseventhIcon = esc_attr( get_option( 'seventh_icon' ) );
          $setseventhIcon = (empty($getseventhIcon) ? $setseventhIcon = "ion-ios-analytics-outline" : $setseventhIcon = $getseventhIcon);

          $getseventhTitle = esc_attr( get_option( 'seventh_service_title' ) );
          $setseventhTitle = (empty($getseventhTitle) ? $setseventhTitle = "Give Your Title Here" : $setseventhTitle = $getseventhTitle);

          $getseventhDesc = esc_attr( get_option( 'seventh_service_desc' ) );
          $setseventhDesc = (empty($getseventhDesc) ? $setseventhDesc = "Give Your Description Here" : $setseventhDesc = $getseventhDesc);
        ?>

        <h4><i class="icon icon-big <?php echo $setseventhIcon; ?>"></i> <?php echo $setseventhTitle; ?></h4>
        <p><?php echo $setseventhDesc; ?></p>
      </div>
      <div data-wow-delay="1.6s" class="col-lg-3 col-sm-6 wow fadeIn">
        <?php
          $geteighthIcon = esc_attr( get_option( 'eighth_icon' ) );
          $seteighthIcon = (empty($geteighthIcon) ? $seteighthIcon = "ion-ios-analytics-outline" : $seteighthIcon = $geteighthIcon);

          $geteighthTitle = esc_attr( get_option( 'eighth_service_title' ) );
          $seteighthTitle = (empty($geteighthTitle) ? $seteighthTitle = "Give Your Title Here" : $seteighthTitle = $geteighthTitle);

          $geteighthDesc = esc_attr( get_option( 'eighth_service_desc' ) );
          $seteighthDesc = (empty($geteighthDesc) ? $seteighthDesc = "Give Your Description Here" : $seteighthDesc = $geteighthDesc);
        ?>

        <h4><i class="icon icon-big <?php echo $seteighthIcon; ?>"></i> <?php echo $seteighthTitle; ?></h4>
        <p><?php echo $seteighthDesc; ?></p>
      </div>
    </div>
  </div>
</section>
