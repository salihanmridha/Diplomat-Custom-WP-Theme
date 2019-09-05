<?php
  /**
   *
   */
  class Mindlab_Who_We_Are_Class extends WP_Widget{
    //initialize constructor from parent class to this sub class to activate widget on widget page
    public function __construct(){
      $widget_ops = array(
        'classname' => 'mindlab-who-we-are-widget-class',
        'description' => 'Widget for Who We Are Sidebar that contain  title and slider image options',
      );
      parent::__construct('who-we-are', 'Who We Are', $widget_ops);
    }

    //overriding existing widget method
    public function widget($useSidebarOps, $ops){
       echo $useSidebarOps['before_widget'];
    ?>

      <div class="col-lg-6">
        <?php echo $useSidebarOps['before_title']; ?>

        <?php
          $getWhoWeAreTitle = esc_attr( $ops['who_we_are_title'] );
          echo $setWhoWeAreTitle = (empty($getWhoWeAreTitle) ? $setWhoWeAreTitle = "Who We Are" : $setWhoWeAreTitle = $getWhoWeAreTitle);
        ?>

        <?php echo $useSidebarOps['after_title']; ?>

        <p class="no-pad">
          <?php
            $getWhoWeAreDesc = esc_attr( $ops['who_we_are_desc'] );
            echo $setWhoWeAreDesc = (empty($getWhoWeAreDesc) ? $setWhoWeAreDesc = "Who We Are Description will be here, please edit it from widget section." : $setWhoWeAreDesc = $getWhoWeAreDesc);
          ?>
        </p>
        <h2 class="classic">
          <?php
            $getWhoWeAreSign = esc_attr( $ops['who_we_are_sign'] );
            echo $setWhoWeAreSign = (empty($getWhoWeAreSign) ? $setWhoWeAreSign = "The Company Team" : $setWhoWeAreSign = $getWhoWeAreSign);
          ?>
        </h2>
      </div>

      <div data-wow-duration="2s" data-wow-delay=".2s" class="col-lg-5 col-lg-offset-1 wow zoomIn">
        <div id="carousel-light2" class="carousel slide carousel-fade">
          <ol class="carousel-indicators">
            <li data-target="#carousel-light2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-light2" data-slide-to="1"></li>
            <li data-target="#carousel-light2" data-slide-to="2"></li>
          </ol>
          <div role="listbox" class="carousel-inner">
            <?php
              $getWhoWeAreFirstImg = esc_attr( $ops['who_we_are_first_image'] );
              $setWhoWeAreFirstImg = (empty($getWhoWeAreFirstImg) ? $setWhoWeAreFirstImg = get_template_directory_uri()."/img/misc/6.png" : $setWhoWeAreFirstImg = $getWhoWeAreFirstImg);

              $getWhoWeAreSecondImg = esc_attr( $ops['who_we_are_second_image'] );
              $setWhoWeAreSecondImg = (empty($getWhoWeAreSecondImg) ? $setWhoWeAreSecondImg = get_template_directory_uri()."/img/misc/5.png" : $setWhoWeAreSecondImg = $getWhoWeAreSecondImg);

              $getWhoWeAreThirdImg = esc_attr( $ops['who_we_are_third_image'] );
              $setWhoWeAreThirdImg = (empty($getWhoWeAreThirdImg) ? $setWhoWeAreThirdImg = get_template_directory_uri()."/img/misc/4.png" : $setWhoWeAreThirdImg = $getWhoWeAreThirdImg);
            ?>
            <div class="item active"><img src="<?php echo $setWhoWeAreFirstImg; ?>" alt="who we are slider image" class="img-responsive center-block"></div>
            <div class="item"><img src="<?php echo $setWhoWeAreSecondImg; ?>" alt="who we are slider image" class="img-responsive center-block"></div>
            <div class="item"><img src="<?php echo $setWhoWeAreThirdImg; ?>" alt="who we are slider image" class="img-responsive center-block"></div>
          </div>
        </div>
      </div>
      <?php echo $useSidebarOps['after_widget']; ?>
      <?php
    }

    //method for design form in backend custom widget
    public function form($frm_instance){
      //designing form template page
      require get_template_directory() . '/inc/template/mindlab-who-we-are-widget.php';
    }
  }
?>


<?php
  /**
   *
   */
  class Mindlab_We_Have_Magic_Class extends WP_Widget{
    public function __construct(){
      $widget_ops = array(
        'classname' => 'mindlab-we-have-magic-widget-class',
        'description' => 'Widget for We have magic Sidebar that contain  title, description, button link and chart features',
      );
      parent::__construct('we-have-magic', 'We Have Magic', $widget_ops);
    }

    public function widget($useSidebarOps, $ops){
      echo $useSidebarOps['before_widget'];
    ?>

    <div class="col-lg-6">
      <?php echo $useSidebarOps['before_title']; ?>
        <?php
          $getWeHaveMagicTitle = esc_attr( $ops['we_have_magic_title'] );
          echo $setWeHaveMagicTitle = (empty($getWeHaveMagicTitle) ? $setWeHaveMagicTitle = "We Have Magic" : $setWeHaveMagicTitle = $getWeHaveMagicTitle);
        ?>
      <?php echo $useSidebarOps['after_title']; ?>

      <p>
        <?php
          $getWeHaveMagicDesc = esc_attr( $ops['we_have_magic_desc'] );
          echo $setWeHaveMagicDesc = (empty($getWeHaveMagicDesc) ? $setWeHaveMagicDesc = "Here will be your widget description" : $setWeHaveMagicDesc = $getWeHaveMagicDesc);
        ?>
      </p>
      <?php
        $getWeHaveMagicButton = esc_attr( $ops['we_have_magic_button'] );
        $setWeHaveMagicButton = (empty($getWeHaveMagicButton) ? $setWeHaveMagicButton = "#" : $setWeHaveMagicButton = $getWeHaveMagicButton);

        $getWeHaveMagicButtonTxt = esc_attr( $ops['we_have_magic_button_txt'] );
        $setWeHaveMagicButtonTxt = (empty($getWeHaveMagicButtonTxt) ? $setWeHaveMagicButtonTxt = "Check it out" : $setWeHaveMagicButtonTxt = $getWeHaveMagicButtonTxt);
      ?>
      <a href="<?= $setWeHaveMagicButton ?>" class="btn btn-dark"><?= $setWeHaveMagicButtonTxt ?></a>
    </div>
    <div class="col-lg-5 col-lg-offset-1 text-center">
    <?php
      $getWeHaveMagicPie1Lbl = esc_attr( $ops['we_have_magic_pie_chart_1_lbl'] );
      $setWeHaveMagicPie1Lbl = (empty($getWeHaveMagicPie1Lbl) ? $setWeHaveMagicPie1Lbl = "Design" : $setWeHaveMagicPie1Lbl = $getWeHaveMagicPie1Lbl);

      $getWeHaveMagicPie1 = esc_attr( $ops['we_have_magic_pie_chart_1'] );
      $setWeHaveMagicPie1 = (empty($getWeHaveMagicPie1) ? $setWeHaveMagicPie1 = "0.93" : $setWeHaveMagicPie1 = $getWeHaveMagicPie1);

      $getWeHaveMagicPie2Lbl = esc_attr( $ops['we_have_magic_pie_chart_2_lbl'] );
      $setWeHaveMagicPie2Lbl = (empty($getWeHaveMagicPie2Lbl) ? $setWeHaveMagicPie2Lbl = "Programming" : $setWeHaveMagicPie2Lbl = $getWeHaveMagicPie2Lbl);

      $getWeHaveMagicPie2 = esc_attr( $ops['we_have_magic_pie_chart_2'] );
      $setWeHaveMagicPie2 = (empty($getWeHaveMagicPie2) ? $setWeHaveMagicPie2 = "0.82" : $setWeHaveMagicPie2 = $getWeHaveMagicPie2);

      $getWeHaveMagicPie3Lbl = esc_attr( $ops['we_have_magic_pie_chart_3_lbl'] );
      $setWeHaveMagicPie3Lbl = (empty($getWeHaveMagicPie3Lbl) ? $setWeHaveMagicPie3Lbl = "Photography" : $setWeHaveMagicPie3Lbl = $getWeHaveMagicPie3Lbl);

      $getWeHaveMagicPie3 = esc_attr( $ops['we_have_magic_pie_chart_3'] );
      $setWeHaveMagicPie3 = (empty($getWeHaveMagicPie3) ? $setWeHaveMagicPie3 = "0.68" : $setWeHaveMagicPie3 = $getWeHaveMagicPie3);
    ?>
      <h3>&nbsp;</h3>
      <div data-thickness="4" data-value="<?= $setWeHaveMagicPie1 ?>" class="circle"><span></span>
        <div class="agenda"><?= $setWeHaveMagicPie1Lbl ?></div>
      </div>
      <div data-thickness="10" data-value="<?= $setWeHaveMagicPie2 ?>" class="circle"><span></span>
        <div class="agenda"><?= $setWeHaveMagicPie2Lbl ?></div>
      </div>
      <div data-thickness="18" data-value="<?= $setWeHaveMagicPie3 ?>" class="circle"><span></span>
        <div class="agenda"><?= $setWeHaveMagicPie3Lbl ?></div>
      </div>
    </div>

    <?php echo $useSidebarOps['after_widget']; ?>
    <?php
    }

    //method for design form in backend custom widget
    public function form($frm_instance){
      //designing form template page
      require get_template_directory() . '/inc/template/mindlab-we-have-magic-widget.php';
    }
  }

?>


<?php
  /**
   *
   */
  class Mindlab_Awesome_Class extends WP_Widget{
    //initialize constructor from parent class to this sub class to activate widget on widget page
    public function __construct(){
      $widget_ops = array(
        'classname' => 'mindlab-awesome-class',
        'description' => 'Widget for Awesome slider sidebar that contain title, description and slider image options',
      );
      parent::__construct('mindlab_awesome', 'Awesome Widget', $widget_ops);
    }

    //overriding existing widget method
    public function widget($useSidebarOps, $ops){
       echo $useSidebarOps['before_widget'];
    ?>

    <div class="col-lg-5">
      <?php echo $useSidebarOps['before_title']; ?>
      <?php
        $getAwesomeTitle = esc_attr( $ops['awesome_title'] );
        echo $setAwesomeTitle = (empty($getAwesomeTitle) ? $setAwesomeTitle = "Awesome Template" : $setAwesomeTitle = $getAwesomeTitle);
      ?>

      <?php echo $useSidebarOps['after_title']; ?>

      <p>
        <?php
          $getAwesomeDesc = esc_attr( $ops['awesome_desc'] );
          echo $setAwesomeDesc = (empty($getAwesomeDesc) ? $setAwesomeDesc = "Awesome Widget Description will be here, please edit it from widget section." : $setAwesomeDesc = $getAwesomeDesc);
        ?>
      </p>

      <?php
        $getAwesomeBtnTxt = esc_attr( $ops['awesome_btn_txt'] );
        $setAwesomeBtnTxt = (empty($getAwesomeBtnTxt) ? $setAwesomeBtnTxt = "Get it Now!" : $setAwesomeBtnTxt = $getAwesomeBtnTxt);

        $getAwesomeBtnUrl = esc_attr( $ops['awesome_btn_txt_url'] );
        $setAwesomeBtnUrl = (empty($getAwesomeBtnUrl) ? $setAwesomeBtnUrl = "#" : $setAwesomeBtnUrl = $getAwesomeBtnUrl);
      ?>

      <a href="<?= $setAwesomeBtnUrl ?>" class="btn btn-dark"><?= $setAwesomeBtnTxt ?></a>

    </div>

    <div class="col-lg-6 col-lg-offset-1">
      <div id="carousel-light" class="carousel slide carousel-fade">
        <ol class="carousel-indicators">
          <li data-target="#carousel-light" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-light" data-slide-to="1"></li>
          <li data-target="#carousel-light" data-slide-to="2"></li>
        </ol>
        <div role="listbox" class="carousel-inner">
          <?php
            $getAwesomeFirstImg = esc_attr( $ops['awesome_first_image'] );
            $setAwesomeFirstImg = (empty($getAwesomeFirstImg) ? $setAwesomeFirstImg = get_template_directory_uri()."/img/misc/1.png" : $setAwesomeFirstImg = $getAwesomeFirstImg);

            $getAwesomeSecondImg = esc_attr( $ops['awesome_second_image'] );
            $setAwesomeSecondImg = (empty($getAwesomeSecondImg) ? $setAwesomeSecondImg = get_template_directory_uri()."/img/misc/2.png" : $setAwesomeSecondImg = $getAwesomeSecondImg);

            $getAwesomeThirdImg = esc_attr( $ops['awesome_third_image'] );
            $setAwesomeThirdImg = (empty($getAwesomeThirdImg) ? $setAwesomeThirdImg = get_template_directory_uri()."/img/misc/3.png" : $setAwesomeThirdImg = $getAwesomeThirdImg);
          ?>


          <div class="item active"><img src="<?php echo $setAwesomeFirstImg; ?>" alt="" class="img-responsive center-block"></div>
          <div class="item"><img src="<?php echo $setAwesomeSecondImg; ?>" alt="" class="img-responsive center-block"></div>
          <div class="item"><img src="<?php echo $setAwesomeThirdImg; ?>" alt="" class="img-responsive center-block"></div>
        </div>
      </div>
    </div>

    <?php echo $useSidebarOps['after_widget']; ?>
      <?php
    }

    //method for design form in backend custom widget
    public function form($frm_instance){
      //designing form template page
      require get_template_directory() . '/inc/template/mindlab-awesome-widget.php';
    }
  }
?>

<?php
  class Mindlab_Why_Choose_Us_Class extends WP_Widget{
    //initialize constructor from parent class to this sub class to activate widget on widget page
    public function __construct(){
      $widget_ops = array(
        'classname' => 'mindlab-why-choose-us-widget-class',
        'description' => 'Widget for Why Choose us Sidebar that contain  icon, title and description options',
      );
      parent::__construct('mindlab-why-choose-us', 'Why Choose Us', $widget_ops);
    }

    public function widget($useSidebarOps, $ops){
      echo $useSidebarOps['before_widget'];
      echo $useSidebarOps['before_title'];

        $getWhyChooseUsIcon = esc_attr( $ops['why_choose_us_icon_field'] );
        $setWhyChooseUsIcon = (empty($getWhyChooseUsIcon) ? $setWhyChooseUsIcon = "ion-ios-infinite-outline" : $setWhyChooseUsIcon = $getWhyChooseUsIcon);

        //echo '<i class="icon-big ion-ios-infinite-outline"></i>';
        echo "<i class='icon-big ".$setWhyChooseUsIcon."'></i>";

        $getWhyChooseUsTitle = esc_attr( $ops['why_choose_us_title'] );
        echo $setWhyChooseUsTitle = (empty($getWhyChooseUsTitle) ? $setWhyChooseUsTitle = "Why Choose Us Title" : $setWhyChooseUsTitle = $getWhyChooseUsTitle);

      echo $useSidebarOps['after_title'];

        $getWhyChooseUsDesc = esc_attr( $ops['why_choose_us_desc'] );
        $setWhyChooseUsDesc = (empty($getWhyChooseUsDesc) ? $setWhyChooseUsDesc = "Why Choose Us Description." : $setWhyChooseUsDesc = $getWhyChooseUsDesc);

        echo "<p>$setWhyChooseUsDesc</p>";

      echo $useSidebarOps['after_widget'];
    }

    //method for design form in backend custom widget
    public function form($frm_instance){
      //designing form template page
      require get_template_directory() . '/inc/template/mindlab-why-choose-us-widget.php';
    }
  }
?>


<?php
  class Mindlab_Counter_Widget_Class extends WP_Widget{
    //initialize constructor from parent class to this sub class to activate widget on widget page
    public function __construct(){
      $widget_ops = array(
        'classname' => 'mindlab-counter-widget-class',
        'description' => 'Widget for Counting that contain  title with other options',
      );
      parent::__construct('mindlab-counter-widget', 'Counter Widget', $widget_ops);
    }

    public function widget($useSidebarOps, $ops){
      echo $useSidebarOps['before_widget'];

      echo $useSidebarOps['before_title'];

        $getCounterWidgetTitle = esc_attr( $ops['counter_widget_title'] );
        echo $setCounterWidgetTitle = (empty($getCounterWidgetTitle) ? $setCounterWidgetTitle = "Themes Released" : $setCounterWidgetTitle = $getCounterWidgetTitle);

      echo $useSidebarOps['after_title'];

      $getCounterWidgetTargetNumber = esc_attr( $ops['number_target'] );
      $setCounterWidgetTargetNumber = (empty($getCounterWidgetTargetNumber) ? $setCounterWidgetTargetNumber = "30" : $setCounterWidgetTargetNumber = $getCounterWidgetTargetNumber);

      $getCounterWidgetNumberDelay = esc_attr( $ops['number_delay'] );
      $setCounterWidgetNumberDelay = (empty($getCounterWidgetNumberDelay) ? $setCounterWidgetNumberDelay = "5" : $setCounterWidgetNumberDelay = $getCounterWidgetNumberDelay);

      $getCounterWidgetNumberIncrement = esc_attr( $ops['number_increment'] );
      $setCounterWidgetNumberIncrement = (empty($getCounterWidgetNumberIncrement) ? $setCounterWidgetNumberIncrement = "1" : $setCounterWidgetNumberIncrement = $getCounterWidgetNumberIncrement);

      echo '<span data-min="0" data-max="'.$setCounterWidgetTargetNumber.'" data-delay="'.$setCounterWidgetNumberDelay.'" data-increment="'.$setCounterWidgetNumberIncrement.'" class="numscroller">0</span>';

      echo $useSidebarOps['after_widget'];
    }

    //method for design form in backend custom widget
    public function form($frm_instance){
      //designing form template page
      require get_template_directory() . '/inc/template/mindlab-counter-widget.php';
    }
  }
?>
