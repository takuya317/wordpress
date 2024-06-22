<?php get_header(); ?>
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
<section class="error-mv">
  <div class="error-mv__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/kuzira-404pc.png" alt=""></div>
  <div class="breadcrumb breadcrumb--error">
    <div class="breadcrumb__inner breadcrumb__inner--error inner">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  </div> 
  <div class="error-mv__inner">
    <h1 class="error-mv__tittle">404</h1>
    <p class="error-mv__text">申し訳ありません。<br>
      お探しのページが見つかりません。</p>
    <div class="error-mv__btn">
      <a href="<?php echo $top; ?>" class="common-btn">          
        <span class="common-btn__arrow">Page TOP</span>
      </a>
    </div>       
  </div>
</section>
<footer class="footer footer--error">
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
