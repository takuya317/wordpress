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
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <?php 
    $campaign_current_term =  get_queried_object();
    $campaign_terms = get_terms('campaign_category', array('hide_empty' => false));
  ?>
  <section class="campaign-page layout-campaign-page">
    <div class="common-fish"></div>
    <div class="campaign-page__inner inner">
      <ul class="campaign-page__tab tab">
        <li class="tab__item"><a href="<?php echo $campaign; ?>">ALL</a></li>
        <?php  foreach ($campaign_terms as $campaign_term) :?>
        <li class="tab__item<?php echo ($campaign_term->name == $campaign_current_term->name) ? ' is-active' : ''; ?>"><a href="<?php echo esc_url(get_term_link($campaign_term)); ?>"><?php echo $campaign_term->name ?></a></li>
        <?php endforeach; ?>
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
            <?php $terms = get_the_terms(get_the_ID(), 'campaign_category'); ?>
              <?php if ($terms):  ?>
              <?php foreach ($terms as $term):  ?>
                <p class="sub-campaign-card__topic"><?php  echo $term->name  ?></p>
              <?php endforeach; ?>
              <?php endif; ?>
                <?php 
                $campaign_time1=get_field('time1');
                $campaign_time1_stamp=strtotime($campaign_time1);
                $campaign_time1_month=date('Y',$campaign_time1_stamp);
                $campaign_time2=get_field('time2');
                $campaign_time2_stamp=strtotime($campaign_time2);
                $campaign_time2_month=date('Y',$campaign_time2_stamp);
                $campaign_time2_change=date('n/j',$campaign_time2_stamp);
                ?>
                <h2 class="sub-campaign-card__tittle"><?php the_title(); ?></h2>
                <p class="sub-campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="sub-campaign-card__wrap">
                    <?php if(get_field('price_1')): ?>
                    <span class="sub-campaign-card__falseprice"><?php the_field('price_1'); ?></span>
                    <?php endif; ?>
                    <?php if(get_field('price_2')): ?>
                    <span class="sub-campaign-card__trueprice"><?php the_field('price_2'); ?></span>
                    <?php endif; ?>
                </div>
                <p class="sub-campaign-card__sentence">
                <?php the_content(); ?>
                </p>
                <time datetime="<?php echo $campaign_time1 ?>" class="sub-campaign-card__date">
                <?php if($campaign_time2_stamp > $campaign_time1_stamp): ?>
                  <?php if($campaign_time1_month == $campaign_time2_month): ?>
                    <?php  echo $campaign_time1 ;?>-<?php  echo $campaign_time2_change ;?>
                  <?php else: ?>
                  <?php  echo $campaign_time1 ;?>-<?php  echo $campaign_time2 ;?>
                  <?php endif; ?>
                <?php endif; ?>
                </time>
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
