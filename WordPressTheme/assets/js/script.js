"use strict";

// ドロワー部分
jQuery(function ($) {
  $(".js-humburger").click(function () {
    if ($(".js-humburger").hasClass('is-active')) {
      $('.js-humburger').removeClass("is-active");
      $(".js-sp-nav").fadeOut();
      $(".header").removeClass("is-active");
      $("html,body").css("overflow", "");
    } else {
      $('.js-humburger').addClass("is-active");
      $(".js-sp-nav").fadeIn();
      $(".header").addClass("is-active");
      $("html,body").css("overflow", "hidden");
    }
    $(window).on('resize', function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $('.js-humburger').removeClass("is-active");
        $(".js-sp-nav").fadeOut();
        $(".header").removeClass("is-active");
        $("html,body").css("overflow", "");
      }
    });
  });
});
jQuery(function ($) {
  // mv部分のスワイパー
  var mv_swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    }
  });
});
jQuery(function ($) {
  // campaign部分のスワイパー,
  $(function () {
    var swiper = new Swiper('.js-campaign-swiper', {
      loop: true,
      loopAdditionalSlides: 4,
      loopedSlides: 8,
      speed: 5000,
      spaceBetween: 24,
      width: 280,
      autoplay: {
        delay: 1500,
        // 4s
        disableOnInteraction: false
        // 自動再生がオフにならないように   
      },

      grabCursor: true,
      navigation: {
        nextEl: '.js-campaign__rightarrow img',
        prevEl: '.js-campaign__leftarrow img'
      },
      breakpoints: {
        768: {
          spaceBetween: 40,
          width: 333
        }
      }
    });
  });
});
// animation 

jQuery(function ($) {
  //要素の取得とスピードの設定
  var box = $(".js-colorbox"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            left: "auto",
            right: "auto"
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });
});
jQuery(function ($) {
  // Topへ戻るボタン
  $(function () {
    var pageTop = $('.js-page-top'); //HTMLのオブジェクト情報を入れる
    pageTop.hide(); // 最初はボタンを非表示にする,display:none;に対応
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        // 100pxスクロールしたら表示
        pageTop.fadeIn(); // 100px以上スクロールしたらボタンをフェードイン
      } else {
        pageTop.fadeOut(); // 100px以下になったらボタンをフェードアウト、display:none;に対応
      }
    });

    pageTop.click(function () {
      $('body,html').animate({
        //色々なブラウザに対応するため。両方に適用
        scrollTop: 0 // 上から0pxの位置に戻る
      }, 500,
      // 500ミリ秒かけて戻る
      'swing');
      return false;
    });
  });
});
// informationページのタブ
jQuery(function ($) {
  $('.js-information-page__item').on('click', function () {
    $('.js-information-page__item').removeClass('is-active');
    $('.js-information-page__card').addClass('is-active');
    $(this).addClass('is-active');
    // ここのthisは実際にクリックした.js-information-page__itemを意味する
    var number = $(this).data("number");
    $('#' + number).removeClass('is-active');
  });
});

// informationページのタブ パラメータ
jQuery(function ($) {
  var activeTab = new URLSearchParams(window.location.search).get('active-tab');
  if (activeTab == 'tab2') {
    $('[data-number="item01"]').removeClass('is-active');
    $('[data-number="item02"]').addClass('is-active');
    $('#item01').addClass('is-active');
    $('#item02').removeClass('is-active');
  } else if (activeTab == 'tab3') {
    $('[data-number="item01"]').removeClass('is-active');
    $('[data-number="item03"]').addClass('is-active');
    $('#item01').addClass('is-active');
    $('#item03').removeClass('is-active');
  }
});

// モーダルのページ
jQuery(function ($) {
  $(".js-modal-open").on("click", function (e) {
    e.preventDefault();
    var imagePath = $(this).attr('src');
    $('.gallery__img img').attr('src', imagePath);
    $('.gallery__modal').addClass('is-open');
    $("html,body").css("overflow", "hidden");
  });
  $(".gallery__modal").on("click", function () {
    $(this).removeClass('is-open');
    $("html,body").css("overflow", "auto");
  });
});

// アコーディング
jQuery(function ($) {
  $('.js-faq-list-question').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-close');
  });
});

// toggle triangle
jQuery(function ($) {
  $('.js-sidebar__year').on('click', function () {
    $(this).toggleClass('is-active');
    $(this).find('.archive-block__content').slideToggle();
  });
});
jQuery(function ($) {
  // contact ページ
  $('.js-page-form').submit(function (event) {
    var hasEmptyFields = false; // 空のフィールドがあるかどうかを示すフラグ

    // 必須フィールドを持つフォーム内のすべての入力フィールドをチェック
    $(this).find('[required]').each(function () {
      // 入力フィールドが空の場合
      if ($(this).val() === '') {
        hasEmptyFields = true; // 空のフィールドが見つかったことを示すフラグを立てる
        // $(this).addClass('empty-field'); 
        // requiredなのに入力されていないフィールドにクラスを付与する
        return false; // ループから抜ける
      }
    });

    // 空のフィールドがあるかどうかに応じてクラスを追加または削除する
    if (hasEmptyFields) {
      $('.page-contact__error').addClass('is-active');
    } else {
      $('.page-contact__error').removeClass('is-active');
    }
  });
});