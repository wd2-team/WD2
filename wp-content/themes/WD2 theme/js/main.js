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
});

$(function(){
    var mySwiperwhite = new Swiper('#swiperwhite', {
        effect: 'slide',
        speed: 600,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        initialSlide: 0,
        noSwiping: true,
        noSwipingClass: 'no_swipe',
        hashNavigation: {
            watchState: true,
            replaceState: true,
        },
    });
});

// position: stickyがブラウザで使えるかチェックするための関数
function detectSticky() {
  const div = document.createElement('div');
  div.style.position = 'sticky';
  return div.style.position.indexOf('sticky') !== -1;
}

// .stickyが指定されている要素に対してposition: stickyを適用させる関数
function callStickyState() {
  return new StickyState(document.querySelectorAll('.sticky'));
}

// もしブラウザでposition: stickyが使えなければ、callStickyState関数を呼び出す
if (!detectSticky()) {
  callStickyState();
}
$(function(){
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
});

 (function(d) {
   var config = {
     kitId: 'zxc7stq',
     scriptTimeout: 3000,
     async: true
   },
   h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
 })(document);
