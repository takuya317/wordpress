<?php 
  $top=esc_url(home_url('/'));
  $campaign=esc_url(home_url('/campaign/'));
  $voice=esc_url(home_url('/voice/'));
  $date=esc_url(home_url('/voice/'));
  ?> 
<aside class="two-colums__right">
  <div class="two-colums__container">
    <h2 class="two-colums__head head">人気記事</h2>
      <div class="two-colums__items favorite-article-cards">
      <?php 
        $args_blog = array(
          'post_type' => 'post',
          'posts_per_page' => 3, 
        );
        $sub_query_blog = new WP_Query($args_blog);
      ?>
      <?php if($sub_query_blog-> have_posts()): ?>
      <?php while($sub_query_blog-> have_posts()):$sub_query_blog-> the_post(); ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="two-colums__item favorite-article-card">
          <div class="favorite-article-card__wrap">
            <figure class="favorite-article-card__img">
              <?php if(get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="no image">
              <?php endif;?> 
            </figure>
            <div class="favorite-article-card__textes">
              <div class="favorite-article-card__date"><?php the_time('Y.n/d'); ?></div>
              <p class="favorite-article-card__text"><?php the_title(); ?></p>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    <div class="two-colums__kutikomi">
      <?php 
        $args_voice1 = array(
          'post_type' => 'voice',
          'posts_per_page' => 1, 
        );
        $sub_query_voice1 = new WP_Query($args_voice1);
      ?>
      <?php if($sub_query_voice1-> have_posts()): ?>
      <?php while($sub_query_voice1-> have_posts()):$sub_query_voice1-> the_post(); ?>
      <h2 class="two-colums__head head">口コミ</h2>
      <figure class="two-colums__kutikomi-img kutikomi-card">
      <?php if(get_the_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
        <?php else: ?>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="no image">
        <?php endif;?> 
      </figure>
      <div class="kutikomi-card__age"><?php the_field('age'); ?></div>
      <p class="kutikomi-card__tittle"><?php the_title(); ?></p>
      <div class="kutikomi-card__btn">
        <a href="<?php echo $voice; ?>" class="btn">          
          <span class="btn__arrow">view more</span>
        </a>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <div class="two-colums__campaign">
      <h2 class="two-colums__head head">キャンペーン</h2>
      <div class="two-colums__campaign-cards two-colums-cards">
        <?php 
          $args_campaign1 = array(
            'post_type' => 'campaign',
            'posts_per_page' => 2, 
          );
          $sub_query_campaign1 = new WP_Query($args_campaign1);
        ?>
        <?php if($sub_query_campaign1-> have_posts()): ?>
        <?php while($sub_query_campaign1-> have_posts()):$sub_query_campaign1-> the_post(); ?>
        <div class="two-colums__card two-colums-card">
          <div class="two-colums-card__img">
          <?php if(get_the_post_thumbnail()): ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
          <?php else: ?>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="no image">
          <?php endif;?> 
          </div>  
          <div class="two-colums-card__inner">
            <div class="two-colums-card__tittle"><?php the_title(); ?></div>
            <p class="two-colums-card__text">
              全部コミコミ(お一人様)
            </p>
            <div class="two-colums-card__wrap">
              <span class="two-colums-card__falseprice"><?php the_field('price_1'); ?></span>
              <span class="two-colums-card__trueprice"><?php the_field('price_2'); ?></span>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="two-colums-card__btn">
        <a href="<?php echo $campaign; ?>" class="btn">          
          <span class="btn__arrow">View more</span>
        </a>
      </div>
    </div>
    <div class="two-colums__archive">
      <h2 class="two-colums__head head">アーカイブ</h2>
      <div class="two-colums__year js-two-colums__year archive-block">
        <a href="http://codeupswp.local/2023/">2023</a>
        <ul class="archive-block__content">
          <li class="archive-block__month"><a href="http://codeupswp.local/2023/03/">3月</a></li>
          <li class="archive-block__month"><a href="http://codeupswp.local/2023/02/">2月</a></li>
          <li class="archive-block__month"><a href="http://codeupswp.local/2023/01/">1月</a></li>
        </ul>
      </div>
      <div class="two-colums__year js-two-colums__year is-active archive-block">
        <a href="http://codeupswp.local/2022/">2022</a>
        <ul class="archive-block__content  is-active">
          <li class="archive-block__month"><a href="http://codeupswp.local/2022/03/">3月</a></li>
          <li class="archive-block__month"><a href="http://codeupswp.local/2022/02/">2月</a></li>
          <li class="archive-block__month"><a href="http://codeupswp.local/2022/01/">1月</a></li>
        </ul>
      </div>
    </div>
  </div>
</aside>