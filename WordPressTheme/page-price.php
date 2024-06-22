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
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  </div>
  <section class="page-price layout-page-price">
      <div class="page-price__inner inner common-fish">
        <div class="page-price__items plice-boxes">
  
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <?php 
              $prices=SCF::get('prices');
              $contents=SCF::get('contents');
                foreach($prices as $price_index => $price_order){
                  // nループ目におけるコンテンツの内容,連想配列=$price_order,$content_order
                  $content_order = $contents[$price_index];
                  echo '<div class="plice-boxes__item plice-box">';
                  echo '<div class="plice-box__green">
                        <div class="plice-box__wrap">
                          <h2 class="plice-box__topic">';
                  if($price_index==0){
                    echo 'ライセンス講習';}
                    elseif($price_index==1){
                    echo '体験ダイビング';
                    }
                    elseif($price_index==2){
                      echo 'ファンダイビング';
                      }
                      elseif($price_index==3){
                        echo 'スペシャルダイビング';
                        }
                  echo '</h2>
                          <div class="plice-box__img"><img src="';
                  echo    get_theme_file_uri();
                  echo    '/assets/images/common/kuzira1.png" alt=""></div>
                        </div>
                      </div>';
                  echo '<table class="plice-box__table">';
                  if(!empty($price_order['price1']) && !empty($content_order['content1'])){
                  echo '<tr>
                          <td class="plice-box__course">';
                  echo $content_order['content1'];
                         echo '</td>
                          <td class="plice-box__price plice-box__price--reg">';
                        echo  $price_order['price1'];
                          echo '</td>
                        </tr>';
                  }
                  if(!empty($price_order['price2']) && !empty($content_order['content2'])){
                    echo '<tr>
                           <td class="plice-box__course">';
                    echo $content_order['content2'];
                    echo '<td class="plice-box__price">';
                    echo  $price_order['price2'];
                    echo '</td>
                    </tr>
                    <tr>';
                  }
                  if(!empty($price_order['price3']) && !empty($content_order['content3'])){
                    echo '<tr>
                    <td class="plice-box__course">';
                    echo $content_order['content3'];
                    echo '</td>
                    <td class="plice-box__price">';
                    echo  $price_order['price3'];
                    echo '</td>
                    </tr>
                    <tr>';
                  }
                  if(!empty($price_order['price4']) && !empty($content_order['content4'])){
                    echo '<tr>
                    <td class="plice-box__course">';
                    echo $content_order['content4'];
                    echo '</td>
                    <td class="plice-box__price">';
                    echo  $price_order['price4'];
                    echo '</td>
                    </tr>
                    <tr>';
                  }
                  echo '</table>';
                  echo '</div>';
                }
            ?>
          <?php endwhile; ?>
          <?php endif; ?>  
        </div>
      </div>
  </section>
<?php get_footer(); ?>