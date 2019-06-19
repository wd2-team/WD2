	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script type="text/javascript">
        // スマートフォンで全画面表示
		$(document).ready(function(){
		var hSize = $(window).height();
		  $('#wrapperred').height(hSize); // アドレスバーを除いたサイズを付与
		  $('#wrapperwhite').height(hSize);
		  $('.mainredchild').height('calc(' + hSize + ' - 65px)');
		  $('.mainwhitechild').height('calc(' + hSize + ' - 65px - 72px)');
		});
		$(window).resize(function(){ // ページをリサイズした時の処理
		var hSize = $(window).height();
		  $('#wrapperred').height(hSize); // アドレスバーを除いたサイズを付与
		  $('#wrapperwhite').height(hSize);
		  $('.mainredchild').height('calc(' + hSize +' - 65px)');
		  $('.mainwhitechild').height('calc(' + hSize +' - 65px - 72px)');
		});
    </script>
</body>
</html>
