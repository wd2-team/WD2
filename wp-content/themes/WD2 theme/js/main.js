$(function(){

	var mySwiperred = new Swiper('#swiperred', {
		effect: 'slide',
	  speed: 600,
	  navigation: {
    	nextEl: '.swiper-button-next',
  	  prevEl: '.swiper-button-prev',
  	},
    initialSlide: 1,
		noSwiping: true,
		noSwipingClass: 'no_swipe',
	});

  var mySwiperwhite = new Swiper('#swiperwhite', {
    effect: 'slide',
    speed: 600,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    initialSlide: 3,
    noSwiping: true,
    noSwipingClass: 'no_swipe',
    hashNavigation: {
      watchState: true,
      replaceState: true,
    },
  });

  // 「.modal-open」をクリック
  $('.modal-open').click(function(){
    // オーバーレイ用の要素を追加
    $('body').append('<div class="modal-overlay"></div>');
    // オーバーレイをフェードイン
    $('.modal-overlay').slideDown('normal');

    // モーダルコンテンツのIDを取得
    var modal = '#' + $(this).attr('data-target');
    // モーダルコンテンツの表示位置を設定
    modalResize();
    // モーダルコンテンツフェードイン
    $(modal).fadeIn('slow');

    // 「.modal-overlay」あるいは「.modal-close」をクリック
    $('.modal-overlay, .modal-close').off().click(function(){
      // モーダルコンテンツとオーバーレイをフェードアウト
      $(modal).fadeOut('normal');
      $('.modal-overlay').slideUp('slow',function(){
        // オーバーレイを削除
        $('.modal-overlay').remove();
      });
    });

    // リサイズしたら表示位置を再取得
    $(window).on('resize', function(){
      modalResize();
    });

    // モーダルコンテンツの表示位置を設定する関数
    function modalResize(){
      // ウィンドウの横幅、高さを取得
      var w = $(window).width();
      var h = $(window).height();

      // モーダルコンテンツの表示位置を取得
      var x = (w - $(modal).outerWidth(true)) / 2;
      var y = (h - $(modal).outerHeight(true)) / 2;

      // モーダルコンテンツの表示位置を設定
      $(modal).css({'left': x + 'px','top': y + 'px'});
    }
  });

  var heightSize = $(window).height();
  var widthSize = $(window).width();

  //  レスポンシブ
  function toplogoResize(){
    var w = $(window).width();
    var h = $(window).height();
    // var toplogoSize = (w - 320) / 3.3 + 85 ;
    var toplogoSize = $('#toplogo').width();
    $('#toplogo').css("margin-top", h / 2 - 21 - 32 - 12 - toplogoSize / 2);
  }

  toplogoResize();
  $(window).on('resize', function(){
    toplogoResize();
  });

});
