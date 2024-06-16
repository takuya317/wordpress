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
  <?php get_header(); ?>
  <section class="mv">
    <div class="mv__inner">
      <div class="mv__swiper js-mv-swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture class="mv__img">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/kamee-pc.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mvv.jpg" alt="亀が泳いでいる">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mv__img">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/kame-pc.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2.jpg" alt="亀が水面付近で泳いでいる">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mv__img">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sima-pc.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3.jpg" alt="海上に船が一隻">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mv__img">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/beach.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4.jpg" alt="砂浜">
            </picture>
          </div>
        </div>
      </div>  
      <div class="mv__header">
        <h2 class="mv__tittle">diving</h2>
        <p class="mv__subtittle">into the ocean</p>
      </div>
    </div>
  </section>
  <section class="campaign layout-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__arrows">
        <div class="campaign__leftarrow js-campaign__leftarrow">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hidari.jpg" alt="左矢印">
        </div>
        <div class="campaign__rightarrow js-campaign__rightarrow">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/migi.jpg" alt="右矢印">
        </div>
      </div>
      <div class="campaign__header section-header">
        <p class="section-header__engtittle">campaign</p>
        <h2 class="section-header__jatittle">キャンペーン</h2>  
      </div>
      <div class="campaign__swiper swiper js-campaign-swiper">
        <div class="swiper-wrapper">
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="魚群">
            </div>
            <div class="campaign-card__inner">
              <p class="campaign-card__topic">ライセンス講習</p>
              <p class="campaign-card__tittle">ライセンス取得</p>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__wrap">
                <span class="campaign-card__falseprice">¥56,000</span>
                <span class="campaign-card__trueprice">¥46,000</span>
              </div>
            </div>
          </div>
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="複数の船">
            </div>
            <div class="campaign-card__inner">
              <p class="campaign-card__topic">体験ダイビング</p>
              <p class="campaign-card__tittle">貸切体験ダイビング</p>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__wrap">
                <span class="campaign-card__falseprice">¥24,000</span>
                <span class="campaign-card__trueprice">¥18,000</span>
              </div>
            </div>
          </div>
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲ">
            </div>
            <div class="campaign-card__inner">
              <p class="campaign-card__topic">体験ダイビング</p>
              <p class="campaign-card__tittle">ナイトダイビング</p>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__wrap">
                <span class="campaign-card__falseprice">¥10,000</span>
                <span class="campaign-card__trueprice">¥8,000</span>
              </div>
            </div>
          </div>
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign5.jpg" alt="ダイビング">
            </div>
            <div class="campaign-card__inner">
              <p class="campaign-card__topic">ファンダイビング</p>
              <p class="campaign-card__tittle">貸切ファンダイビング</p>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__wrap">
                <span class="campaign-card__falseprice">¥20,000</span>
                <span class="campaign-card__trueprice">¥16,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campain__btn">
        <a href="<?php echo $campaign; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="about about-layout">
    <div class="about__inner inner">
      <div class="about__header section-header">
        <p class="section-header__engtittle">about us</p>
        <h2 class="section-header__jatittle">私たちについて</h2>
      </div>
      <div class="about__imges">
        <div class="about__img-left">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us1.jpg" alt="シーサ" style="opacity: 1;">
        </div>
        <div class="about__img-right">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us2.jpg" alt="黄色の魚" style="opacity: 1;">
        </div>   
        <div class="about__container">
          <p class="about__head">Dive into<br>the Ocean</p>
          <div class="about__wrapper">  
            <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span>が入ります。</span>
            </p>              
            <div class="about__btn">
              <a href="<?php echo $about_us; ?>" class="btn">          
                <span class="btn__arrow">view more</span>
              </a>
            </div>             
          </div>
        </div>
      </div>
      <div class="about__img2">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sango.png" alt="サンゴ">
      </div>
    </div>
  </section>
  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__header section-header">
        <p class="section-header__engtittle">information</p>
        <h2 class="section-header__jatittle">ダイビング情報</h2>
      </div>
      <div class="information__wrap">
        <div class="information__img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg"  alt="海底に魚群">
        </div>
        <div class="information__subinner">
          <p class="information__text1">ライセンス講習</p>
          <p class="information__text2">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a href="<?php echo $information; ?>" class="btn">          
              <span class="btn__arrow">view more</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog layout-blog">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__engtittle section-header__engtittle--white">blog</p>
        <h2 class="section-header__jatittle section-header__jatittle--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <a href="<?php echo $single; ?>" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="珊瑚礁">
          </div>
          <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
          <p class="blog-card__tittle">ライセンス取得</p>
          <p class="blog-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </a>
        <a href="<?php echo $single; ?>" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="亀が水中で泳ぐ">
          </div>
          <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
          <p class="blog-card__tittle">ウミガメと泳ぐ</p>
          <p class="blog-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </a>
        <a href="<?php echo $single; ?>" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpg" alt="カクレクマノミ">
          </div>
          <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
          <p class="blog-card__tittle">カクレクマノミ</p>
          <p class="blog-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </a>
      </div>
      <div class="blog__btn">
        <a href="<?php echo $home; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__header section-header">
        <p class="section-header__engtittle">voice</p>
        <h2 class="section-header__jatittle">お客様の声</h2>
      </div>
      <div class="voice__cards cards">
        <div class="cards__item voice-card">
          <div class="voice-card__wrapper">
            <div class="voice-card__inner">
              <div class="voice-card__textes">
                <p class="voice-card__text1">20代(女性)</p>
                <p class="voice-card__text2">ライセンス講習</p>
              </div>
              <p class="voice-card__text3">ここにタイトルが入ります。ここにタイトル</p>
            </div>
            <div class="voice-card__img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpg" alt="20代(女性)">
            </div>
          </div>
          <p class="voice-card__text4">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
        <div class="cards__item voice-card">
          <div class="voice-card__wrapper">
            <div class="voice-card__inner">
              <div class="voice-card__textes">
                <p class="voice-card__text1">20代(男性)</p>
                <p class="voice-card__text2">ファンダイビング</p>
              </div>
              <p class="voice-card__text3">ここにタイトルが入ります。ここにタイトル</p>
            </div>
            <div class="voice-card__img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="20代(男性)">
            </div>
          </div>
          <p class="voice-card__text4">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
      <div class="voice__btn">
        <a href="<?php echo $voice; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="price layout-price">
    <div class="price__inner inner">
      <div class="price__header section-header">
        <p class="section-header__engtittle">price</p>
        <h2 class="section-header__jatittle">料金一覧</h2>
      </div>
      <div class="price__subinner">
        <picture class="price__img js-colorbox">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sango2.jpg" media="(min-width: 768px)">
          <img  src="./assets/images/common/price1.jpg" alt="ウミガメ" style="opacity: 1;">
        </picture>
        <div class="price__container">
          <div  class="price__textes">
            <h3 class="price__topic">ライセンス講習</h3>
            <dl class="prce__dl">
              <div class="price__wrap">
                <dt class="price__text">オープンウォーターダイバーコース</dt>
                <dd class="price__value">¥50,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">アドバンスドオープンウォーターコース</dt>
                <dd class="price__value">¥60,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">レスキュー＋EFRコース</dt>
                <dd class="price__value">¥70,000</dd>
              </div>
            </dl>
          </div>
          <div  class="price__textes">
            <h3 class="price__topic">体験ダイビング</h3>
            <dl class="prce__dl">
              <div class="price__wrap">
                <dt class="price__text">ビーチ体験ダイビング(半日)</dt>
                <dd class="price__value">¥7,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">ビーチ体験ダイビング(1日)</dt>
                <dd class="price__value">¥14,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">ボート体験ダイビング(半日)</dt>
                <dd class="price__value">¥10,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">ボート体験ダイビング(1日)</dt>
                <dd class="price__value">¥18,000</dd>
              </div>
            </dl>
          </div>
          <div  class="price__textes">
            <h3 class="price__topic">ファンダイビング</h3>
            <dl class="prce__dl">
              <div class="price__wrap">
                <dt class="price__text">ビーチダイビング(2ダイブ)</dt>
                <dd class="price__value">¥14,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">ボートダイビング(2ダイブ)</dt>
                <dd class="price__value">¥18,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">スペシャルダイビング(2ダイブ)</dt>
                <dd class="price__value">¥24,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">ナイトダイビング(1ダイブ)</dt>
                <dd class="price__value">¥10,000</dd>
              </div>
            </dl>
          </div>
          <div  class="price__textes">
            <h3 class="price__topic">スペシャルダイビング</h3>
            <dl class="prce__dl">
              <div class="price__wrap">
                <dt class="price__text">貸切ダイビング(2ダイブ)</dt>
                <dd class="price__value">¥24,000</dd>
              </div>
              <div class="price__wrap">
                <dt class="price__text">1日ダイビング(3ダイブ)</dt>
                <dd class="price__value">¥32,000</dd>
              </div>
            </dl>        
          </div>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
