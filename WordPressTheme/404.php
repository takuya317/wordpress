<?php get_header(); ?>
<?php 
  $top=esc_url(home_url('/'));
  $campaign=esc_url(home_url('/campaign/'));
  $about_us=esc_url(home_url('/about-us/'));
  $tos=esc_url(home_url('/terms-of-service/'));
  $voice=esc_url(home_url('/voice/'));
  $information=esc_url(home_url('/information/'));
  $privacypolicy=esc_url(home_url('/privacypolicy/'));
  $home=esc_url(home_url('/blog/'));
  $faq=esc_url(home_url('/faq/'));
  $price=esc_url(home_url('/price/'));
  $contact=esc_url(home_url('/contact/'));
  $sitemap=esc_url(home_url('/sitemap/'));
  $license=esc_url(home_url('/campaign_category/license/'));
  $fandiving=esc_url(home_url('/campaign_category/fandiving/'));
  $experienced_diving=esc_url(home_url('campaign_category/experienced-diving/'));
  ?> 
<section class="error-mv">
  <div class="error-mv__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/kuzira-404pc.png" alt=""></div>
  <div class="breadcrumb breadcrumb--error">
    <div class="breadcrumb__inner breadcrumb__inner--error inner">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  </div> 
  <div class="error-mv__inner">
    <h1 class="error-mv__tittle">404</h1>
    <p class="error-mv__text">申し訳ありません。<br>
      お探しのページが見つかりません。</p>
    <div class="error-mv__btn">
      <a href="<?php echo $top; ?>" class="common-btn">          
        <span class="common-btn__arrow">Page TOP</span>
      </a>
    </div>       
  </div>
</section>
<?php get_footer(); ?>
