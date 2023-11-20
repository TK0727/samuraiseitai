<?php
 /*
 Template Name: お知らせ投稿ページ
 Template Post Type: post
 */
 ?>

<?php get_header();?>

        
  
<div class="l-top-img">

        <div class="l-top-side"><h1>Information</h1>
          <p>お知らせ</p><img src="<?php echo get_template_directory_uri(); ?>/images/_x31_7.svg">
          </div>
          <div class="l-top-center">

          </div>

          <div class="l-info-visual"><img src="<?php echo get_template_directory_uri(); ?>/images/News.png"></div>
          <div class="l-info-visual-sp"><img src="<?php echo get_template_directory_uri(); ?>/images/SP-News.png"></div>
        

</div>

 
  <div class="l-info-flex">
     <section class="l-content">

          <div class="l-post-ttl">
            <h2><?php the_title(); ?></h2>
          </div>
      <div class="l-post-wrap">
            
          <div class="l-post-d">
            <p><?php echo get_the_date('Y年n月j日'); ?></p>
          </div>

          <div class="l-post-cat">
            <?php
               $cat = get_the_category();
               $cat = $cat[0]
            ?>
            <p><?php echo $cat->cat_name; ?></p>  
          </div>
      </div>
           

          <div class="l-post-content">
            <?php the_content(); ?>
          </div>

      <div class="l-single-pn">
          <?php previous_post_link('%link', '前の記事へ'); ?>
          <a href="<?php echo home_url(); ?>/news"> お知らせ一覧へ</a>
          <?php next_post_link('%link', '次の記事へ'); ?>
      <div>

     </section>

     <section class="l-category">
        <h2>カテゴリ</h2>
        <?php
             
            $categories = get_categories();
        ?>
          <ul> 
              <?php foreach($categories as $category) { ?>
             <li><a href="<?php echo $category_link = get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
<?php } ?>
</ul>

    </section>
  </div>
 
   <?php get_footer(); ?>