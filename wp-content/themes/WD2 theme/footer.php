	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script type="text/javascript">
        // スマートフォンで全画面表示
		$(document).ready(function(){
		var hSize = $(window).innerHeight();
		  $('#wrapperred').innerHeight(hSize); // アドレスバーを除いたサイズを付与
		  $('#wrapperwhite').innerHeight(hSize);
		  $('.mainredchild').innerHeight('calc(' + hSize + ' - 65px)');
		  $('.mainwhitechild').innerHeight('calc(' + hSize + ' - 65px - 72px)');
		});
		$(window).resize(function(){ // ページをリサイズした時の処理
		var hSize = $(window).innerHeight();
		  $('#wrapperred').innerHeight(hSize); // アドレスバーを除いたサイズを付与
		  $('#wrapperwhite').innerHeight(hSize);
		  $('.mainredchild').innerHeight('calc(' + hSize +' - 65px)');
		  $('.mainwhitechild').innerHeight('calc(' + hSize +' - 65px - 72px)');
		});
    </script>
</body>
</html>
