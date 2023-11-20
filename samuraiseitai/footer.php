<?php
      if (is_front_page()) {
        $footer_class = 'l-footer';
      } else {
        $footer_class = 'l-footer-2';
      }
      ?>


<footer class=<?php echo $footer_class; ?>>
        <div class="l-wave">
            <img class="l-wave-back2" img src="<?php echo get_template_directory_uri(); ?>/images/Vector.svg">
        </div>
        <div class="l-footer-title">
            <h2>　お気軽にご来院ください　</h2>
        </div>
        <div class="l-footer-content">
            <div class="l-footer-left">
                <h2>JR「秋葉原駅」より徒歩１分</h2>
                <p>〒101-0022<br>
                東京都千代田区神田練堀町300番地<br>
                住友不動産秋葉原ビル５F
                </p>

                <h3>03-1234-5678</h3>
                <div class="l-footer-table">
                
                    <table  width=500px  style="border-collapse: collapse">
                    <tr>
                        <th>営業時間</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th>
                    </tr>
                    <tr>
                        <td>09:00〜12:30</td><td>⚫︎</td><td>⚫︎</td><td>−</td><td>⚫︎</td><td>⚫︎</td><td>⚫︎</td><td>⚫︎</td>
                    </tr>
                    <tr class="l-tr">
                        <td>15:30〜20:00</td><td>⚫︎</td><td>⚫︎</td><td>−</td><td>⚫︎</td><td>⚫︎</td><td>⚫︎</td><td>⚫︎</td>
                    </tr>
                    </table>
                </div>
                <div class="l-footer-reserve">
                <a href="<?php echo home_url(); ?>/contact" >ご予約・お問合せはこちらから</a>
                </div>
            </div>

            <div class="l-footer-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.071126628946!2d139.77213514034153!3d35.69986727269541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188f98594decab%3A0xad30a07b8165e0e8!2z44CSMTAxLTAwMjIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw57e05aGA55S677yT77yQ77yQ!5e0!3m2!1sja!2sjp!4v1699129426562!5m2!1sja!2sjp" width="450px"  height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

            
      
            <div class="l-footer-nav">
                <div class="l-logo2"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"><a href="index.html"></a>
                </div>
                <ul class="l-footer-nav">
                  <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
                  <li><a href="<?php echo home_url(); ?>/about">当院について</a></li>
                  <li><a href="<?php echo home_url(); ?>/course">コース・料金</a></li>
                  <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
                  <li><a href="<?php echo home_url(); ?>/voice">お客様の声</a></li>
                  <li><a href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a></li>        
                </ul>
            </div>
        </div>
        <div class="l-reverse"><a href="#"></a></div>
        <div class="l-copy">
            <p>&copy;2023 SAMURAI整体院</p>
        </div>

    </footer>
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" ></script>
    <?php wp_footer(); ?>
  </body>
 </html>