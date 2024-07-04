<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-aboutus.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">about us</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <section class="about-page about-page-layout">
    <div class="about-page__inner inner common-fish">
      <div class="about-page__imges">
        <div class="about-page__img-left">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us1.jpg" alt="シーサ" style="opacity: 1;">
        </div>
        <div class="about-page__img-right">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us2.jpg" alt="黄色の魚" style="opacity: 1;">
        </div>   
        <div class="about-page__container">
          <p class="about-page__head">Dive into<br>the Ocean</p>         
          <h2 class="about-page__text"><?php the_content(); ?>
          </h2>                                 
        </div>
      </div>
      <div class="about-page__img2">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sakana.png" alt="サンゴ">
      </div>
    </div>
  </section>
  <?php $imges = SCF::get('img');?>
  <?php if(get_field('img')): ?>
  <section class="gallery layout-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__tittle section-header">
        <p class="section-header__engtittle">gallery</p>
        <h2 class="section-header__jatittle">フォト</h2>
      </div>
      <div class="gallery__container">
        <div class="gallery__items">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>       
          <?php foreach ($imges as $img): ?>
            <?php $img_url=wp_get_attachment_url($img); ?>
            <?php if($img): ?>
              <div class="gallery__item"><img class="js-modal-open" src="<?php echo $img_url ?>" alt=""></div>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endwhile; ?>
        <?php endif; ?>  
        </div>
      </div>
    </div>
    <div class="gallery__modal">
      <div class="gallery__img"><img src="<?php echo $img_url ?>" alt=""></div>
    </div>
  </section>
  <?php endif; ?>
<?php get_footer(); ?>