<?php get_header(); ?>
<?php 
$campaign=esc_url(home_url('/campaign/'));
$contact=esc_url(home_url('/contact/'));
$campaign_license=esc_url(home_url('/campaign_category/license/'));
$campaign_fandiving=esc_url(home_url('/campaign_category/fandiving/'));
$campaign_experienced_diving=esc_url(home_url('/campaign_category/experienced-diving/'));
?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">campaign</h1>
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
  <?php 
    $campaign_term =  get_queried_object();
  ?>
  <section class="campaign-page layout-campaign-page">
    <div class="campaign-page__inner inner">
      <ul class="campaign-page__tab tab common-fish">
        <li class="tab__item"><a href="<?php echo $campaign; ?>">ALL</a></li>
        <li class="tab__item<?php echo ($campaign_term->name == 'ライセンス講習') ? ' is-active' : ''; ?>"><a href="<?php echo $campaign_license; ?>">ライセンス講習</a></li>
        <li class="tab__item<?php echo ($campaign_term->name == 'ファンダイビング') ? ' is-active' : ''; ?>"><a href="<?php echo $campaign_fandiving; ?>">ファンダイビング</a></li>
        <li class="tab__item<?php echo ($campaign_term->name == '体験ダイビング') ? ' is-active' : ''; ?>"><a href="<?php echo $campaign_experienced_diving; ?>">体験ダイビング</a></li>
      </ul> 
      <div class="campaign-page__cards cards">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="cards__item sub-campaign-card">
            <div class="sub-campaign-card__img">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="no image">
            <?php endif; ?> 
            </div>
            <div class="sub-campaign-card__inner">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category');
                  // タームが取得できたか確認
                  if ($terms) {
                      // 各タームをループして表示
                      foreach ($terms as $term) {
                          echo '<p class="sub-campaign-card__topic">' . $term->name . '</p>';
                          }
                    }
                ?>
                <h2 class="sub-campaign-card__tittle"><?php the_title(); ?></h2>
                <p class="sub-campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="sub-campaign-card__wrap">
                    <span class="sub-campaign-card__falseprice"><?php the_field('price_1'); ?></span>
                    <span class="sub-campaign-card__trueprice"><?php the_field('price_2'); ?></span>
                </div>
                <p class="sub-campaign-card__sentence">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <p class="sub-campaign-card__date">2023/6/1-9/30</p>
                <p class="sub-campaign-card__reservation">ご予約・お問い合わせはコチラ</p>
                <div class="sub-campaign-card__btn">
                    <a href="<?php echo $contact; ?>" class="btn">          
                    <span class="btn__arrow">view more</span>
                    </a>
                </div>
            </div>
        </div>    
        <?php endwhile; ?>
        <?php endif; ?>
     </div>
      <div class="campaign-page__pagenation pagenation">
        <div class="pagenation__number">
        <?php wp_pagenavi(); ?>
        </div>
      </div>
  </section>
<?php get_footer(); ?>
