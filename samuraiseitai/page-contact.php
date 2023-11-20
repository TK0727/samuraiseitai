<?php get_header();?>
        
  
    <div class="l-top-img">

        <div class="l-top-side"><h1>Contact</h1>
          <p>ご予約・お問合せ</p><img src="<?php echo get_template_directory_uri(); ?>/images/_x31_7.svg">
        </div>
        <div class="l-top-center"><img src="<?php echo get_template_directory_uri(); ?>/images/_x31_3-1.png" class="l-center-img">
        </div>
        <div class="l-reserve-visual"><img src="<?php echo get_template_directory_uri(); ?>/images/Reserve.png">
        </div>

    </div>
    <div class="l-form">
      <div class="l-form-title">
      <h2>お電話でのご予約・お問い合せ</h2>
      <p>〒101-0022　東京都千代田区神田練堀町300番地<br>
         住友不動産秋葉原駅前ビル 5F</p>
         <h3>tel:03-1234-5678</h3>
      </div>
    <div class="l-form-content">
      <h2>ご予約・お問い合わせフォーム</h2>
      <p>※２営業日以内にご返信いたします。</p>
    </div>
  </div>


  <div class="l-wpforms">
  <?php echo do_shortcode('[wpforms id="89"]'); ?>
  </div>

    
<?php get_footer(); ?>
