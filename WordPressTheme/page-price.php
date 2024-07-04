<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">price</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
  <section class="page-price layout-page-price">
      <div class="page-price__inner inner common-fish">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <div class="page-price__items plice-boxes">
            <?php 
              $titles=SCF::get('title');
              $prices=SCF::get('prices');
              $contents=SCF::get('contents');
            ?>
            <?php foreach ($titles as $title):?>
              <?php  
              $key = array_search($title, $titles); 
              $price_divide = explode("、", $prices[$key]);
              $content_divide = explode("、", $contents[$key]);
              ?>
              <?php  if(!empty($title)):?>
                <?php $big_game=0; ?>
                <?php foreach ($price_divide as $index => $price):?>
                  <?php if(!empty($price) && !empty($content_divide[$index])): ?>
                    <div class="plice-boxes__item plice-box">
                    <div class="plice-box__green">
                      <div class="plice-box__wrap">
                        <h2 class="plice-box__topic"><?php echo $title?></h2>
                        <div class="plice-box__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/kuzira1.png" alt=""></div>
                      </div>
                    </div>
                  <?php  
                  $big_game=1;
                  break;
                  ?>
                  <?endif;?>
                <?php endforeach; ?>
                <?php if($big_game): ?>
                  <table class="plice-box__table">
                    <?php foreach ($price_divide as $index => $price):?>
                      <?php if(!empty($price) && !empty($content_divide[$index])): ?>
                        <tr>
                          <td class="plice-box__course"><?php echo $content_divide[$index]?></td>
                          <td class="plice-box__price plice-box__price--reg"><?php echo $price?></td>
                        </tr>
                      <?endif;?>
                    <?php endforeach; ?>
                  </table>
                  </div>
                <?endif;?>
              <?endif;?>
            <?php endforeach; ?>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>  
      </div>
  </section>
<?php get_footer(); ?>