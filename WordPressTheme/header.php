<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta name="format-detection" content="telephone=no"/>
  <meta name="robots" content="noindex"/>
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="CodeUps WPサイトです"/>
  <meta name="keywords" content="CodeUps"/>
  <!-- font -->
   <!-- ogp -->
  <meta property="og:title" content="Google" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.google.co.jp/" />
  <meta property="og:image" content="https://www.google.co.jp/assets/images/branding/googlelogo/2x/googlelogo_light_color_92x30dp.png" />
  <meta property="og:site_name" content="Google" />
  <meta property="og:description" content="日本の Google 検索ページです。Google についての情報はさまざまな言語で提供されています。" />
  <?php wp_head(); ?>
</head>
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
  $license=esc_url(home_url('/campaign_category/license/'));
  $fandiving=esc_url(home_url('/campaign_category/fandiving/'));
  $experienced_diving=esc_url(home_url('campaign_category/experienced-diving/'));
  ?> 
<body>
  <div class="page-top js-page-top"></div>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $top; ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-CodeUps.png" alt="ヘッダーのロゴ">
        </a>
      </h1>
      <!-- pc用のナビゲーション -->
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>" class="">Campaign
            <span>キャンペーン</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about_us; ?>" class="">About us
            <span>私たちについて</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>" class="">Information
            <span>ダイビング情報</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $home; ?>" class="">Blog
            <span>ブログ</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>" class="">Voice
            <span>お客様の声</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>" class="">Price
            <span>料金一覧</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>" class="">FAQ
            <span>よくある質問</span></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>" class="">Contact
            <span>お問合せ</span></a>
          </li>
        </ul>
      </nav>
      <!-- pc用のナビゲーション -->
      <!-- sp用のドロワー -->
      <div class="header__drawer humburger js-humburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
        <!-- sp用のドロワー -->
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__wrapper">
          <div class="sp-nav__inner">
            <ul class="sp-nav__items"> 
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $campaign; ?>">キャンペーン</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $license; ?>">ライセンス取得</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $experienced_diving; ?>">貸切体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $experienced_diving; ?>">ナイトダイビング</a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $about_us; ?>">私たちについて</a>
              </li>      
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $information; ?>">ダイビング情報</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $information; ?>?active-tab=tab1">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $information; ?>?active-tab=tab3">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $information; ?>?active-tab=tab2">ファンダイビング</a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $home; ?>">ブログ</a>
              </li>
            </ul>
          </div> 
          <div class="sp-nav__inner">
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $price; ?>">料金一覧</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $price; ?>">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $price; ?>">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo $price; ?>">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー
                <br class="sp-nav__br">ポリシー
                </a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $tos; ?>">利用規約</a>
              </li>
              <li class="sp-nav__item sp-nav__item--reg">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>