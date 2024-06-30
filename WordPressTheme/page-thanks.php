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
        <p class="page-contact__thanks">お問い合わせ内容を送信完了しました。</p>
        <p class="page-contact__thanks">このたびは、お問い合わせ頂き<br class="page-contact__br">誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="page-contact__br">3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="page-contact__br">自動返信の確認メールをお送りしております。</p>
    </div>
  </div>
<?php get_footer(); ?>