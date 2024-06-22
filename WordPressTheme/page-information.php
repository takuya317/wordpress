<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">information</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  </div>
  <section class="information-page layout-information-page">
    <div class="information-page__inner inner ">
      <div class="information-page__fish common-fish"></div>
      <ul class="information-page__items">
        <li class="information-page__item js-information-page__item is-active" data-number="item01">
            <div class="information-page__container">
              <div class="information-page__asirai1"></div>
              <span>ライセンス<br class="information-page__br">
                  講習</span>
            </div>   
        </li>
        <li class="information-page__item js-information-page__item" data-number="item02">
          <div class="information-page__container">
            <div class="information-page__asirai2"></div>
            <span>ファン<br class="information-page__br">
                ダイビング</span>
          </div>   
        </li>
        <li class="information-page__item js-information-page__item" data-number="item03">
          <div class="information-page__container">
            <div class="information-page__asirai3"></div>
            <span>体験<br class="information-page__br">
                ダイビング</span>
          </div>   
        </li>
      </ul>
      <div class="information-page__cards">
        <div class="information-page__card js-information-page__card" id="item01">
            <div class="information-page__wrap">
                <h2 class="information-page__tittle">ライセンス講習</h2>
                <p class="information-page__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
            </div>
            <div class="information-page__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving.jpg" alt="ダイビング中">
            </div>
        </div>
        <div class="information-page__card js-information-page__card is-active" id="item02">
            <div class="information-page__wrap">
                <h2 class="information-page__tittle">ファンダイビング</h2>
                <p class="information-page__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information-page__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" alt="魚群">
            </div>
        </div>
        <div class="information-page__card js-information-page__card is-active" id="item03">
            <div class="information-page__wrap">
                <h2 class="information-page__tittle">体験ダイビング</h2>
                <p class="information-page__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information-page__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving2.jpg" alt="魚２ひき">
            </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>