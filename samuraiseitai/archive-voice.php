<?php get_header();?>
        
  
    <div class="l-top-img">

        <div class="l-top-side"><h1>Voice</h1>
          <p>お客様の声</p><img src="<?php echo get_template_directory_uri(); ?>/images/_x31_7.svg">
        </div>
        <div class="l-top-center">

        </div>

        <div class="l-voice-visual"><img src="<?php echo get_template_directory_uri(); ?>/images/Voice1.png">
        </div>

    </div>



    <section class="voice">
 <div class="l-all-voice">
    <!-- 表示件数設定 -->
    <?php
    $wp_query = new WP_Query();
    $my_posts = array(
        'post_type' => 'voice',
        'posts_per_page' => '5',
        'paged' => $paged,
    );

    $wp_query->query($my_posts);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $obj = get_post_type_object($post->post_type); 
            
            //投稿タイプ情報を取得
    ?>
            <!-- ループさせるコンテンツ  -->

            <div class="l-voice-flex">
               <div class="l-voice-thum">
                  <?php the_post_thumbnail(); ?>
               </div>

               <div class="l-voice-content">
                  <h2><?php the_title(); ?></h2>
                  <?php the_content(); ?>
               </div>
            </div>

    <?php endwhile;
    endif;
    ?>

    <div class="l-voice-pn">

    <?php the_posts_pagination(
      array(
        'end_size'  => '3', // ページ番号リストの両端に表示するページ数
        'mid_size'  => '2', // 現在ページの左右に表示するページ番号の数
        'prev_next' => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'type'      => 'list' // 戻り値の指定 (plain/list)
      )
     ); ?>
     <?php wp_reset_postdata(); ?>
   </div>
    

 </section>
 <?php get_footer(); ?>
