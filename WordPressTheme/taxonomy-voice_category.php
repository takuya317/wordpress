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
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <?php 
    $voice_current_term =  get_queried_object();
    $voice_terms = get_terms('voice_category', array('hide_empty' => false));
  ?>
 <section class="voice-page layout-voice-page">
    <div class="common-fish"></div>
    <div class="voice-page__inner inner">  
      <ul class="voice-page__tab tab">
        <li class="tab__item"><a href="<?php echo $voice; ?>">ALL</a></li>
        <?php  
        foreach ($voice_terms as $voice_term) :
        ?>
        <li class="tab__item<?php echo ($voice_term->name == $voice_current_term->name) ? ' is-active' : ''; ?>"><a href="<?php echo esc_url(get_term_link($voice_term)); ?>"><?php echo $voice_term->name ?></a></li>
        <?php endforeach; ?>
      </ul> 
      <div class="voice-page__cards cards">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="cards__item voice-card">
          <div class="voice-card__wrapper">
            <div class="voice-card__inner">
              <div class="voice-card__textes">
                <p class="voice-card__text1"><?php the_field('age'); ?></p>
                  <?php $voice_terms = get_the_terms(get_the_ID(), 'voice_category'); ?>
                  <?php if ($voice_terms):  ?>
                    <?php foreach ($voice_terms as $term):  ?>
                      <p class="voice-card__text2"><?php  echo $term->name  ?></p>
                    <?php endforeach; ?>
                  <?php endif; ?>    
              </div>
              <h2 class="voice-card__text3"><?php the_title(); ?></h2>
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
            <?php echo wp_trim_words( get_the_content(), 150, '...' ); ?>
          </p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
  <div class="voice-page__pagenation pagenation">
    <div class="pagenation__number">
    <?php wp_pagenavi(); ?>
    </div>
 </section>
<?php get_footer(); ?>