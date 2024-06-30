<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/privacy-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">terms of Service</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <section class="terms-of-service layout-terms-of-service">
    <div class="terms-of-service__inner inner common-fish">
        <h2 class="terms-of-service__head"><?php the_title(); ?></h2>
        <?php the_content(); ?>
  </section>
  <?php get_footer(); ?>
