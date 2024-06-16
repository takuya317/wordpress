<?php get_header(); ?>
  <section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">blog</h1>
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
  <section class="two-colums layout-two-colums">
    <div class="two-colums__fish common-fish common-fish--blog"></div>
    <div class="two-colums__inner inner">
      <div class="two-colums__left">       
        <div class="two-colums__cards blog-cards blog-cards--2co">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <a href="<?php echo get_permalink(); ?>" class="blog-cards__item--2co blog-card">
            <div class="blog-card__img">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="no image">
            <?php endif;?> 
            </div>
            <div class="blog-card__date"><?php the_time('Y年m月d日'); ?></div>
            <h2 class="blog-card__tittle"><?php the_title(); ?></h2>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </a>
        <?php endwhile; ?>
        <?php endif; ?>   
        </div>
        <div class="two-colums__pagenation pagenation">
          <div class="pagenation__number">
          <?php wp_pagenavi(); ?>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>  
  </section>
<?php get_footer(); ?>