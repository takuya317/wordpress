<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contanct-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">contact</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <div class="page-contact layout-page-contact">
      <div class="page-contact__inner inner common-fish">
          <p class="page-contact__error">※必須項目が入力されていません。<br class="page-contact__br">入力してください。</p>
          <?php echo do_shortcode('[contact-form-7 id="c36629d" title="お問い合わせ"]'); ?>
      </div>
  </div>
<?php get_footer(); ?>