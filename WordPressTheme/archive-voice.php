<?php get_header(); ?>
<?php 
$voice=esc_url(home_url('/voice/'));
$voice_license=esc_url(home_url('/voice_category/license/'));
$voice_fandiving=esc_url(home_url('/voice_category/fandiving/'));
$voice_experienced_diving=esc_url(home_url('/voice_category/experienced-diving/'));
?>
  <section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">voice</h1>
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
  <section class="voice-page layout-voice-page">
    <div class="common-fish"></div>
    <div class="voice-page__inner inner">  
      <ul class="voice-page__tab tab">
        <li class="tab__item  is-active" data-number="tab01"><a href="<?php echo $voice; ?>">ALL</a></li>
        <li class="tab__item" data-number="tab02"><a href="<?php echo $voice_license; ?>">ライセンス講習</a></li>
        <li class="tab__item" data-number="tab03"><a href="<?php echo $voice_fandiving; ?>">ファンダイビング</a></li>
        <li class="tab__item" data-number="tab04"><a href="<?php echo $voice_experienced_diving; ?>">体験ダイビング</a></li>
      </ul> 
      <div class="voice-page__cards cards">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="cards__item voice-card">
          <div class="voice-card__wrapper">
            <div class="voice-card__inner">
              <div class="voice-card__textes">
                <p class="voice-card__text1"><?php the_field('age'); ?></p>
                  <?php
                      $voice_terms = get_the_terms(get_the_ID(), 'voice_category');
                      if ($voice_terms) {
                          foreach ($voice_terms as $term) {
                              echo '<p class="voice-card__text2">' . $term->name . '</p>';
                              }
                        }
                  ?>
              </div>
              <h2 class="voice-card__text3">ここにタイトルが入ります。ここにタイトル</h2>
            </div>
            <div class="voice-card__img js-colorbox">
              <?php if(get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="no image">
              <?php endif;?> 
            </div>
          </div>
          <p class="voice-card__text4">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="voice-page__pagenation pagenation">
      <div class="pagenation__number">
      <?php wp_pagenavi(); ?>
      </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>