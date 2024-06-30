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
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">Site MAP</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <div class="sitemap layout-sitemap">
    <div class="sitemap__inner inner common-fish common-fish--sitemap">
      <p><?php the_content(); ?><br><br><br></p>
      <nav class="sitemap__nav sitemap-nav">
        <div class="sitemap-nav__inner">
          <ul class="sitemap-nav__items">
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $license; ?>">ライセンス取得</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $experienced_diving; ?>">貸切体験ダイビング</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $experienced_diving; ?>">ナイトダイビング</a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $about_us; ?>">私たちについて</a>
            </li>      
          </ul>
          <ul class="sitemap-nav__items">
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab1">ライセンス講習</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab3">体験ダイビング</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $information; ?>?active-tab=tab2">ファンダイビング</a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $home; ?>">ブログ</a>
            </li>
          </ul>
        </div> 
        <div class="sitemap-nav__inner">
          <ul class="sitemap-nav__items">
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $price; ?>">ライセンス講習</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $price; ?>">体験ダイビング</a>
            </li>
            <li class="sitemap-nav__item">
              <a href="<?php echo $price; ?>">ファンダイビング</a>
            </li>
          </ul>
          <ul class="sitemap-nav__items">
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー
              <br class="sitemap-nav__br">
              ポリシー
              </a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $tos; ?>">利用規約</a>
            </li>
            <li class="sitemap-nav__item sitemap-nav__item--reg">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>  
    </div>
  </div>
<?php get_footer(); ?>