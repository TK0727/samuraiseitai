<!DOCTYPE html>
<html lang="ja">
 <html>
  <head>
    
    <meta charset="UTF-8">
    <title>SAMURAI整体院</title>
    <meta name="description" content=“秋葉原にある心と体を癒す整体院です。”>
    <link href="<?php echo get_template_directory_uri(); ?>/destyle.css" rel=“stylesheet”>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Merriweather+Sans:wght@600&family=Noto+Sans+JP:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Merriweather+Sans:wght@600&family=Noto+Sans+JP:wght@300;600&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Merriweather+Sans:wght@600&family=Noto+Sans+JP:wght@300;600&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
 </head>
 <body>

 <header class="header">
    <div class="l-header">
      <h1 class="l-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"><a href="index.html"></a>
      </h1> 
      <!-- ハンバーガー -->
      <div class="l-humberger">
        <input id="drawer_input" class="l-drawer_hidden" type="checkbox">
        <label for="drawer_input" class="l-drawer_open"><span></span></label>
        <?php
      if (is_front_page()) {
        $title_class = 'l-nav';
      } else {
        $title_class = 'l-nav-green';
      }
      ?>
      <div class="l-main-nav">
        <div class=<?php echo $title_class; ?>>
          <ul>
            <li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
            <li><a href="<?php echo home_url(); ?>/about">当院について</a></li>
            <li><a href="<?php echo home_url(); ?>/course">コース・料金</a></li>
            <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/voice">お客様の声</a></li>        
          </ul>
          <button class="l-reserve-button"><a href="<?php echo home_url(); ?>/contact">ご予約・お問い合せ</a>
          </button>
        </div>
      </div>
      </div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
      </div>
</header>