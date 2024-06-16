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
  <section class="two-colums layout-two-colums-detail">
    <div class="two-colums__fish--detail common-fish"></div>
    <div class="two-colums__inner--single inner">
      <div class="two-colums__left">       
        <div class="two-colums__blog-card singleblog-card">
        <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
          <div class="singleblog-card__date"><?php the_date(); ?></div>
          <h2 class="singleblog-card__tittle"><?php the_title(); ?></h2>
          <div class="singleblog-card__imgbig">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="no image">
            <?php endif;?> 
          </div> 
          <div class="singleblog-card__content">
            <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile; ?>
          <?php endif; ?>  
        <div class="two-colums__pagenation pagenation pagenation--detail">
        <?php
        $prev_post = get_adjacent_post( true, '', true );
        if ( !empty($prev_post) ) : ?>
            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="pagenation__before"></a>
        <?php endif; ?>
        <?php
        $next_post = get_adjacent_post( true, '', false );
        if ( !empty($next_post) ) : ?>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="pagenation__after"></a>
        <?php endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>  
  </section>
<?php get_footer(); ?>