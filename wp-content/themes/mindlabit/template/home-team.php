<!-- Team Section-->
<section id="team" class="bg-white text-center">
  <div class="container">
    <h3>MEET OUR LEADERS</h3>
    <div class="row">
      <?php
        $arr_team = array(
          'post_type' => 'team',
          'posts_per_page' => 4,

        );
        $team = new WP_Query($arr_team);
        if ($team->have_posts()):
          while ($team->have_posts()): $team->the_post();
            get_template_part( 'template/content-team', get_post_format() );
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- Quotes-->
<?php
  $getQuoteName = esc_attr(get_option('mindlab_front_page_quote_name'));
  $getQuoteDesc = esc_attr(get_option('mindlab_front_page_quote_desc'));

  $quoteName = "Salihan Mridha";
  $quoteDesc = "Hard work is the key of success. Don't give up until you alive. You don't know what is your chance and when it will come. Success is not come with luck. Its your determination and hard work. And don't expect much than your ability.";


  $setQuoteName = (empty($getQuoteName) ? $setQuoteName = $quoteName : $setQuoteName = $getQuoteName);
  $setQuoteDesc = (empty($getQuoteDesc) ? $setQuoteDesc = $quoteDesc : $setQuoteDesc = $getQuoteDesc);
?>
<section class="quote section-small bg-img3 text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <p><i class="icon fa fa-quote-left fa-lg"></i></p>
        <p><?= $setQuoteDesc ?></p>
        <h2 class="no-pad classic"><?= $setQuoteName ?></h2>
      </div>
    </div>
  </div>
</section>
