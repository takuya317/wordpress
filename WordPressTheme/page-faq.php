<?php get_header(); ?>
<section class="common-mv">
    <picture class="common-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sp.jpg" alt="亀が泳いでいる">
    </picture>
    <div class="common-mv__header">
      <h1 class="common-mv__tittle">FAQ</h1>
    </div> 
  </section>
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <?php get_template_part( 'template-parts/bread' ); ?>
    </div>
  </div>
   <section class="faq layout-faq">
    <div class="faq__inner inner common-fish">
      <ul class="faq__items faq-lists">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <?php 
          $question=SCF::get('question');
          $answer=SCF::get('answer');
          ?>
          <?php foreach ($question as $faq):?>
            <?php $key = array_search($faq, $question); ?>
             <?php if(!empty($faq) && !empty($answer[$key])): ?>
              <li class="faq-lists__item faq-list">
                <h2 class="faq-list__question js-faq-list-question">
                  <?php echo $faq; ?>
                </h2>
                <p class="faq-list__answer">
                  <?php echo $answer[$key]; ?>
                </p>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>      
        <?php endwhile; ?>
        <?php endif; ?>  
      </ul>
    </div>
  </section>    
<?php get_footer(); ?>