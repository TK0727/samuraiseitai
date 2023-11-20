<?php get_header(); ?>
        
<section class="l-eyecatch">
        <div class="l-main-message">
            <h1>根本的な症状改善を<br>サポートします</h1>
            <div class="l-marimo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/_x31_7.svg" class="l-marimo1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/_x32_1.svg" class="l-marimo2">
        </div>
        

            <div class="l-center-visual">
            </div>

           <div class="carousel">
            <div class="l-carousel">
                <div>
                    <img class="l-carousel1" img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup1.png">
                </div>
                <div>
                    <img class="l-carousel2" img src="<?php echo get_template_directory_uri(); ?>/images/TOP_CarouselGroup2.png">
                </div>
                <div>
                    <img class="l-carousel3" img src="<?php echo get_template_directory_uri(); ?>/images/TOP_CarouselGroup3.png">
                </div>
                <div>
                    <img class="l-carousel4" img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup4.png">
                </div>
            </div>
            
        </div>
</section> 
        
        
     
 

    <div class="l-news">
      <div class="l-wrapper">
        <h2  class="news">News</h2>
        <a>お知らせ</a>
      </div>
        
        <?php
            // 取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // カテゴリー名
                   'category_name' => 'news',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 1,
               );
               // データの取得
               $posts = get_posts($args);
               ?>
               <!-- ループ処理 -->
               <?php foreach($posts as $post): ?>
                <!-- 投稿データをセット -->
               <? setup_postdata($post); ?>
    <div class="l-post-top">
      <div class="l-dc">
        <div class="l-post-date">
                <!-- 投稿の日付を表示 -->
               <?php echo get_the_date('Y年n月j日'); ?>
        </div>

        <div class="l-post-cate">
            <?php
               $cat = get_the_category();
               $cat = $cat[0]
            ?>

               <p><?php echo $cat->cat_name; ?></p>  
        </div>
     </div>
        <div class="l-post-title">
               <!-- 投稿のタイトルを表示 -->
               <a href=" <?php the_permalink(); ?>">
               <?php the_title(); ?>
               </a>
        </div>
               
    </div>
               <?php endforeach; ?>
               <!-- 使用した投稿データをリセット -->
               <?php wp_reset_postdata(); ?>
             
        <div class="l-newspage"><a href="<?php echo home_url(); ?>/news"> → お知らせ一覧へ</a>
        </div>
    </div>

    <section class="l-concept">
        
        
        <div class="l-concept-txt">
            <div class="l-back-txt"><span>Concept</span>
            </div>
            <h3 class="l-concept-title">Concept<p><br>特徴</p>
            </h3>
            <div class="l-concept-message-title">
                <h2>日々変化する
                <br>カラダと心を癒す
                <br>パーソナル
                <br>トレーナーとして
                </h2>
            </div>
            <div class="l-concept-message">
                <p>
                    当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
                    <br>
                    <br>
                    また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
                    <br>
                    <br>
                    ご不安な点や疑問点などお気軽にご相談くださいませ。
                
                <a href="<?php echo home_url(); ?>/about" > → 当院について</a>
            </p>
            </div>
        </div> 
        <div class="l-concept-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/SP-Concept-Imagegroup.png" width="400px">
            <div class="l-back-img"><img src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Light.png" width="400px">
            </div>
        </div>
            
    </section> 
    <section class="l-course">
        <div class="l-wave">
            <img class="l-wave-back" img src="<?php echo get_template_directory_uri(); ?>/images/Vector.svg">

        </div>
        
        

        <div class="l-course-title">
            <h2>　コース・料金　</h2>
            <p>当院では保険診療、自費診療ともにご対応しております</p>
        </div>

        <div class="l-wrapper-course">
          <div class="l-course-img"><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance1.png" >
            <div class="l-course-txt">
            <h3>保険診療</h3>
            <ul>
                <li>骨折・打撲・捻挫・脱臼</li>
                <li>スポーツ診療</li>
                <li>交通事故</li>
            </ul>
            </div>
            <div class="l-back-txt-course"><span>Course</span>
            </div>
        </div>

        <div class="l-course-img"><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-self1.png" width="350px">
            <div class="l-course-txt">
            <h3>自費診療</h3>
            <ul>
                <li>腰痛・肩こり</li>
                <li>冷え性・だるさ</li>
                <li>骨盤・背骨矯正</li>
            </ul>
            </div>
            <div class="l-back-img2"><img src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" width="400px">
            </div>
        </div>
        
    </div>
    <div class="l-course-link">
        <a href="<?php echo home_url(); ?>/course">→ コース・料金詳細へ</a>         
    </div>

    </section>
    
    <section class="l-voice">
        <div class="l-semicircle">
             <div class="l-voice-main-img">
                
            </div>


            <div class="l-voice-title">
                <h2>　お客様の声　</h2>
                <p>痛みの改善に加えて自分で予防もできるようになりました</p>
            </div>

            <div class="l-voice-img">
                <div class="l-voice-img-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user1.png">
                    <h3>S・K様　30代女性</h3>
                    <p>1ヶ月で腰の痛みが軽減しました。自分で自宅でもできるケアを教えていただき、お任せしてよかったです。</p>
                </div>
                   
                <div class="l-voice-img-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user2.png">
                    <h3>T・M様　40代男性</h3>
                    <p>マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えて頂き、
                            普段の練習メニューも工夫できています。</p>
                </div>
                <div class="l-voice-img-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user3.png">
                    <h3>S・T様　60代女性</h3>
                    <p>転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
                </div>

            </div>
            <div class="l-voice-link">
            <a href="<?php echo home_url(); ?>/voice" >　→ お客様の声一覧へ</a>         
            </div>
            
        </div>
    </section>
    <?php get_footer(); ?>

    
    

    
    
   
