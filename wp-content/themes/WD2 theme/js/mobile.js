$(function(){

  //  横向き制御
  $(window).on('load orientationchange resize', function(){
      if (Math.abs(window.orientation) === 90) {
          // 横向きになったときの処理
          $('.landscape').show();
      } else {
          // 縦向きになったときの処理
          $('.landscape').hide();
      }
  });
  $(window).on('orientationchange resize', function() {
      if (Math.abs(window.orientation) !== 90) {
          // ここに回転させた時の処理
          if (widthSize < heightSize) {
              window.location.reload();
          }
      }
  });

});