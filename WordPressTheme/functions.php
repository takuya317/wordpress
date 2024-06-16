
<?php  
function add_custom_scripts() {
  // Google Fontsの追加
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@300;400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;700&display=swap', false );
  // swiperのCSSの追加
  wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false );
  // テーマのCSSの追加
  wp_enqueue_style( 'theme-styles', get_theme_file_uri('/assets/css/style.css'), false );
  // jQueryの追加
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );
  // swiperのJSの追加
  wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), true );
  // inviewの追加
  wp_enqueue_script( 'inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), true );
  // テーマのJSの追加
  wp_enqueue_script( 'theme-scripts', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

    function change_set_campaign($query) {
        if ( is_admin() || ! $query->is_main_query() ){
            return;
        }
        if ( $query->is_post_type_archive('campaign')) {
            $query->set( 'posts_per_page', '4' );
            return;
        }
    }
    add_action( 'pre_get_posts', 'change_set_campaign' );

    function custom_taxonomy_archive_display( $query ) {
      if ( !is_admin() && $query->is_tax('campaign_category') && $query->is_main_query() ) {
          $query->set( 'posts_per_page', 4 );
      }
  }
  add_action( 'pre_get_posts', 'custom_taxonomy_archive_display' );
  
    function change_set_voice($query) {
        if ( is_admin() || ! $query->is_main_query() ){
            return;
        }
        if ( $query->is_post_type_archive('voice')) {
            $query->set( 'posts_per_page', '6' );
            return;
        }
    }
    add_action( 'pre_get_posts', 'change_set_voice' );

    function custom_taxonomy_archive_display1( $query ) {
      if ( !is_admin() && $query->is_tax('voice_category') && $query->is_main_query() ) {
          $query->set( 'posts_per_page', 6 );
      }
  }
  add_action( 'pre_get_posts', 'custom_taxonomy_archive_display1' );

	add_theme_support('post-thumbnails');

  add_action( 'init', 'create_post_types' );

function create_post_types() {
  register_post_type( 'voice',
    array(
      'label' => 'voice',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail') //デフォルトだと'title', 'editor'になる
    )
  );

  register_post_type( 'campaign',
    array(
      'label' => 'campaign',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 10,
      'supports' => array('title', 'editor', 'thumbnail') 
    )
  );

  register_post_type( 'post',
  array(
    
    'public' => true,
    'label' => 'ブログ',
    'menu_position' => 10,
    'supports' => array('title', 'editor', 'thumbnail') 
  )
);

}

// Contact Form 7の自動挿入p,brタグを無効化
function wpcf_autop_delete() {
  return false;
} 

add_filter('wpcf7_autop_or_not', 'wpcf_autop_delete');

//関数の作成
function test_selectlist( $tag, $unused ){
  //Contact Form 7のタグの名前が'test-tag'かどうか
  if( $tag['name'] != 'test-tag' ){
      return $tag;
  }
  // 投稿タイトルを取得
  $test_posts = get_posts( array(
      'posts_per_page' => -1,
      'post_type' => 'campaign',
  ));

  // 投稿が取得できない場合はタグをそのまま返す
  if( !$test_posts ){
      return $tag;
  }

  // セレクトボックスに投稿タイトルを追加
  foreach( $test_posts as $test_post ){
      $tag['raw_values'][] = $test_post->post_title;
      $tag['values'][] = $test_post->post_title;
      $tag['labels'][] = $test_post->post_title;
  }

  return $tag;
}

//add_filter()で項目を上書きするニュアンス
add_filter( 'wpcf7_form_tag', 'test_selectlist', 10, 2 );

