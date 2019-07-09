$(function(){

	//  ポートフォリオページのホバー時挙動
    $('.modal-open').each(function() {
	    let $this = $(this);
	    let target = $this.attr('data-target');

	    if(target === 'port1') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port2') {
	    	$this.attr('href', 'https://www.yahoo.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port3') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port4') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port5') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port6') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port7') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else if (target === 'port8') {
	    	$this.attr('href', 'https://www.google.co.jp/');
	    	$this.hover(
			    function() {
			        $this.parent().parent().css('background-image', 'url(http://localhost:8888/wp-content/themes/WD2%20theme/img/kabukiya.png)');
			        $this.find('p').hide();
			    },
			    function() {
			        $this.parent().parent().css('background-image', '');
			        $this.find('p').show();
			    }
			);
	    }
	    else {
	    	return false;
	    }
    });

});