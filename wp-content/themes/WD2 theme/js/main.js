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
    // noSwipingClass: 'no_swipe',
    hashNavigation: {
      watchState: true,
      replaceState: true,
    },
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

  //  header 下スクロールで非表示 上スクロールで表示
  var startPos = 0,winScrollTop = 0;
  $('.mainwhitechild').on('scroll',function(){
      winScrollTop = $(this).scrollTop();
      if (winScrollTop >= startPos) {
          if(winScrollTop >= 300){
              $('.behavior').addClass('hide');
          }
      }
      if (winScrollTop < startPos - 10) {
          $('.behavior').removeClass('hide');
      }
      startPos = winScrollTop;
  });

  // index(white)swiper起動位置トップに戻る
  $('#wrapperwhite').find('#footerinner').find('a').on('click', function(){
    $('.mainwhitechild').animate({ scrollTop: 0 }, '1');
    $('.behavior').removeClass('hide');
  });

});
