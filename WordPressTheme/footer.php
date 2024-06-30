<?php 
  $top=esc_url(home_url('/'));
  $campaign=esc_url(home_url('/campaign/'));
  $about_us=esc_url(home_url('/about-us/'));
  $tos=esc_url(home_url('/terms-of-service/'));
  $voice=esc_url(home_url('/voice/'));
  $information=esc_url(home_url('/information/'));
  $privacypolicy=esc_url(home_url('/privacypolicy/'));
  $home=esc_url(home_url('/blog/'));
  $faq=esc_url(home_url('/faq/'));
  $price=esc_url(home_url('/price/'));
  $contact=esc_url(home_url('/contact/'));
  $sitemap=esc_url(home_url('/sitemap/'));
  $license=esc_url(home_url('/campaign_category/license/'));
  $fandiving=esc_url(home_url('/campaign_category/fandiving/'));
  $experienced_diving=esc_url(home_url('campaign_category/experienced-diving/'));
  ?> 
  <?php if(!is_page('contact') && !is_404()): ?>
  <section class="contact layout-contact">
    <div class="contact__inner inner">
      <div class="contact__maininner">
        <div class="contact__subinner"> 
          <div class="contact__img3"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sakana.png" alt="魚群"></div>
          <div class="contact__leftwrap">
            <div class="contact__img1">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact1.jpg" alt="ロゴ">
            </div>
            <div class="contact__wrap">
              <div class="contact__textes">
                <address>
                  <p>沖縄県那覇市1-1</p>
                  <p>TEL:0120-000-0000</p>
                </address>
                  <p>営業時間:8:30-19:00</p>
                  <p>定休日:毎週火曜日</p>
              </div>
              <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3579.099456050583!2d127.69041027805335!3d26.225957777063236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5rKW57iE55yM6YKj6KaH5biCMS0x!5e0!3m2!1sja!2sjp!4v1706389591803!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="cotact__rightwrap">
          <p class="contact__tittle">Contact</p>
          <h2 class="contact__text1">お問い合わせ</h2>
          <p class="contact__text2">ご予約・お問い合わせはコチラ</p>
          <div class="contact__btn">
            <a href="<?php echo $contact; ?>" class="btn">          
              <span class="btn__arrow">Contact us</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>
  <footer class="footer <?php if (is_404()) { echo 'layout-footer--footer'; } else { echo 'layout-footer'; } ?>">
    <div class="footer__inner inner">
      <div class="footer__head">
        <a href="<?php echo $top; ?>" class="footer__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.png" alt="ロゴ">
        </a>
        <div class="footer__snses snses">
          <a href="https://www.facebook.com/" target="_blank" class="snses__facebooklogo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.jpg" alt="facebookロゴ">        
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="snses__instagramlogo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/a.jpg" alt="instagramロゴ">
          </a>
        </div>
      </div>
      <nav class="footer__nav footer-nav">
        <div class="footer-nav__inner">
          <ul class="footer-nav__items">
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $license; ?>">ライセンス取得</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $experienced_diving; ?>">貸切体験ダイビング</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $experienced_diving; ?>">ナイトダイビング</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $about_us; ?>">私たちについて</a>
            </li>      
          </ul>
          <ul class="footer-nav__items">
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab1">ライセンス講習</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab3">体験ダイビング</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab2">ファンダイビング</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $home; ?>">ブログ</a>
            </li>
          </ul>
        </div> 
        <div class="footer-nav__inner">
          <ul class="footer-nav__items">
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $price; ?>">ライセンス講習</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $price; ?>">体験ダイビング</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $price; ?>">ファンダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__items">
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー
              <br class="footer-nav__br">
              ポリシー
              </a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $tos; ?>">利用規約</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
            <li class="footer-nav__item footer-nav__item--reg">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
        </div>
      </nav>  
      <div class="footer__copyright">
        <small>Copyright© 2021 - 2023 CodeUps LLC.All Rights Reserved</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
