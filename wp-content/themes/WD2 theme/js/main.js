$(function(){
	var mySwiper = new Swiper('.swiper-container', {
		effect: 'slide',
	    speed: 400,
	    navigation: {
    		nextEl: '.swiper-button-next',
    		prevEl: '.swiper-button-prev',
    	},
    	initialSlide: 1
	});
});