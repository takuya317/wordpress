<?php   $single=esc_url(home_url('/single/')); 
        $information=esc_url(home_url('/information/'));
        $about_us=esc_url(home_url('/about-us/'));
        $campaign=esc_url(home_url('/campaign/'));
        $voice=esc_url(home_url('/voice/'));
        $top=esc_url(home_url('/'));
        $price=esc_url(home_url('/price/'));
?>
        <?php 
          $pc_img=SCF::get('pc_img');
          $pc_img_urls = array_map('wp_get_attachment_url', $pc_img);
          $sp_img=SCF::get('sp_img');
          $sp_img_urls = array_map('wp_get_attachment_url', $sp_img);
        ?>
<?php get_header(); ?>
  <section class="mv">
    <div class="mv__inner">
      <div class="mv__swiper js-mv-swiper swiper">
        <div class="swiper-wrapper">
          <?php 
          foreach ($pc_img_urls as $pc_img_url):
           $key = array_search($pc_img_url, $pc_img_urls); 
           if (!empty($pc_img_url) && !empty($sp_img_urls[$key])):
            ?>
            <div class="swiper-slide">
              <picture class="mv__img">
                <source srcset="<?php echo $pc_img_url; ?>" media="(min-width: 768px)">
                <img src="<?php echo $sp_img_urls[$key]; ?>" alt="MVの画像"> 
              </picture>
            </div>
            <?php elseif (!empty($pc_img_url) && empty($sp_img_urls[$key])): ?>
            <div class="swiper-slide">
              <picture class="mv__img">
                <img src="<?php echo $pc_img_url; ?>" alt="MVの画像"> 
              </picture>
            </div>
            <?php elseif (empty($pc_img_url) && !empty($sp_img_urls[$key])): ?>
            <div class="swiper-slide">
              <picture class="mv__img">
                <img src="<?php echo $sp_img_urls[$key]; ?>" alt="MVの画像"> 
              </picture>
            </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>  
      <div class="mv__header">
        <h2 class="mv__tittle">diving</h2>
        <p class="mv__subtittle">into the ocean</p>
      </div>
    </div>
  </section>
  <section class="campaign layout-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__arrows">
        <div class="campaign__leftarrow js-campaign__leftarrow">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hidari.jpg" alt="左矢印">
        </div>
        <div class="campaign__rightarrow js-campaign__rightarrow">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/migi.jpg" alt="右矢印">
        </div>
      </div>
      <div class="campaign__header section-header">
        <p class="section-header__engtittle">campaign</p>
        <h2 class="section-header__jatittle">キャンペーン</h2>  
      </div>
      <div class="campaign__swiper swiper js-campaign-swiper">
        <div class="swiper-wrapper">
        <?php 
        $args_campaign = array(
          'post_type' => 'campaign',
          'posts_per_page' => 4, 
        );
        $sub_query_campaign = new WP_Query($args_campaign);
        ?>
        <?php if($sub_query_campaign-> have_posts()): ?>
        <?php while($sub_query_campaign-> have_posts()):$sub_query_campaign-> the_post(); ?>
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__img">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="no image">
            <?php endif;?> 
            </div>
            <div class="campaign-card__inner">
            <?php
              $terms = get_the_terms(get_the_ID(), 'campaign_category');?>
              <?php if ($terms):  ?>
                <?php foreach ($terms as $term):  ?>
                   <p class="campaign-card__topic"><?php  echo $term->name  ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
              <p class="campaign-card__tittle"><?php the_title(); ?></p>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__wrap">
                <?php if(get_field('price_1')): ?>
                <span class="campaign-card__falseprice"><?php the_field('price_1'); ?></span>
                <?php endif; ?>
                <?php if(get_field('price_2')): ?>
                <span class="campaign-card__trueprice"><?php the_field('price_2'); ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="campain__btn">
        <a href="<?php echo $campaign; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <?php 
          $args_aboutus = array(
            'post_type' => 'page',
            'name' => 'about-us', 
          );
          $sub_query_aboutus = new WP_Query($args_aboutus);
  ?>

  <section class="about about-layout">
    <div class="about__inner inner">
      <div class="about__header section-header">
        <p class="section-header__engtittle">about us</p>
        <h2 class="section-header__jatittle">私たちについて</h2>
      </div>
      <div class="about__imges">
        <div class="about__img-left">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us1.jpg" alt="シーサ" style="opacity: 1;">
        </div>
        <div class="about__img-right">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us2.jpg" alt="黄色の魚" style="opacity: 1;">
        </div>   
        <div class="about__container">
          <p class="about__head">Dive into<br>the Ocean</p>
          <div class="about__wrapper"> 
            <?php if($sub_query_aboutus-> have_posts()): ?>
              <?php while($sub_query_aboutus-> have_posts()):$sub_query_aboutus-> the_post(); ?>
              <?php $sub_query_aboutus_content= get_the_content();?>
              <p class="about__text"><?php echo $sub_query_aboutus_content; ?></p>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <div class="about__btn">
              <a href="<?php echo $about_us; ?>" class="btn">          
                <span class="btn__arrow">view more</span>
              </a>
            </div>             
          </div>
        </div>
      </div>
      <div class="about__img2">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sango.png" alt="サンゴ">
      </div>
    </div>
  </section>
  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__header section-header">
        <p class="section-header__engtittle">information</p>
        <h2 class="section-header__jatittle">ダイビング情報</h2>
      </div>
      <div class="information__wrap">
        <div class="information__img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg"  alt="海底に魚群">
        </div>
        <div class="information__subinner">
          <p class="information__text1">ライセンス講習</p>
          <p class="information__text2">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a href="<?php echo $information; ?>" class="btn">          
              <span class="btn__arrow">view more</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog layout-blog">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__engtittle section-header__engtittle--white">blog</p>
        <h2 class="section-header__jatittle section-header__jatittle--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
      <?php 
        $args_blog = array(
          'post_type' => 'post',
          'posts_per_page' => 3, 
        );
        $sub_query_blog = new WP_Query($args_blog);
      ?>
      <?php if($sub_query_blog-> have_posts()): ?>
      <?php while($sub_query_blog-> have_posts()):$sub_query_blog-> the_post(); ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="no image">
            <?php endif;?> 
          </div>
          <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n/d'); ?></time>
          <p class="blog-card__tittle"><?php the_title(); ?></p>
          <p class="blog-card__text">
          <?php echo wp_trim_words( get_the_content(), 85, '...' ); ?>
          </p>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="blog__btn">
        <a href="<?php echo $top; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__header section-header">
        <p class="section-header__engtittle">voice</p>
        <h2 class="section-header__jatittle">お客様の声</h2>
      </div>
      <div class="voice__cards cards">
      <?php 
        $args_voice = array(
          'post_type' => 'voice',
          'posts_per_page' => 2, 
        );
        $sub_query_voice = new WP_Query($args_voice);
      ?>
      <?php if($sub_query_voice-> have_posts()): ?>
        <?php while($sub_query_voice-> have_posts()):$sub_query_voice-> the_post(); ?>
        <div class="cards__item voice-card">
          <div class="voice-card__wrapper">
            <div class="voice-card__inner">
              <div class="voice-card__textes">
                <?php if(get_field('age')): ?>
                <p class="voice-card__text1"><?php the_field('age'); ?></p>
                <?php endif; ?>
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
          <?php echo wp_trim_words( get_the_content(), 170, '…' ); ?>
          </p>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="voice__btn">
        <a href="<?php echo $voice; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="price layout-price">
    <div class="price__inner inner">
      <div class="price__header section-header">
        <p class="section-header__engtittle">price</p>
        <h2 class="section-header__jatittle">料金一覧</h2>
      </div>
      <div class="price__subinner">
        <picture class="price__img js-colorbox">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sango2.jpg" media="(min-width: 768px)">
          <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price1.jpg" alt="ウミガメ" style="opacity: 1;">
        </picture>
        <div class="price__container">
          <?php 
          $args_price = array(
            'post_type' => 'page',
            'name' => 'price', 
          );
          $sub_query_price = new WP_Query($args_price);
          ?>
            <?php if($sub_query_price-> have_posts()): ?>
            <?php while($sub_query_price-> have_posts()):$sub_query_price-> the_post(); ?>
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
                  <div  class="price__textes">
                    <h3 class="price__topic"><?php echo $title; ?></h3>
                  <?php  
                  $big_game=1;
                  break;
                  ?>
                  <?endif;?>
                <?php endforeach; ?>
                <?php if($big_game): ?>
                  <dl class="prce__dl">
                    <?php foreach ($price_divide as $index => $price):?>
                      <?php if(!empty($price) && !empty($content_divide[$index])): ?>
                        <div class="price__wrap">
                          <dt class="price__text"><?php echo $content_divide[$index]?></dt>
                          <dd class="price__value"><?php echo $price?></dd>
                        </div>
                      <?endif;?>
                    <?php endforeach; ?>
                  </dl>
                </div>
                <?endif;?>
              <?endif;?>
              <?php endforeach; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>  
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>