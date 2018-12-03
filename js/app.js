$(document).ready(function () {
	$(".navbar-nav li a").click(function(event) {
	$(".navbar-collapse").collapse('hide');
	});
});

$(document).ready(function () {
	var trigger = $('.hamburger'),
		overlay = $('.overlay'),
		isClosed = false;

	trigger.click(function () {
		hamburger_cross();
	});

	function hamburger_cross() {

		if (isClosed == true) {
			overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
		} else {
			overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
		}
	}

	$('[data-toggle="offcanvas"]').click(function () {
		$('#wrapper').toggleClass('toggled');
	});
});

$(document).ready(function(){
	var scroll_start = 0;
	var startchange  = $('#nav-change');
	var offset       = startchange.offset();
		if ( startchange.length ){
			$(document).scroll(function() {
			scroll_start = $(this).scrollTop();
		if ( scroll_start > offset.top ) {
			$(".navbar-default").css('transition', '1s');
			$(".navbar-default").css('background-color', 'rgba(16, 48, 43, 0.62)');
			$('.nav-info p a').css('transition', '1s');
			$('.nav-info p a').css('font-size', '13px');
			$('.nav-info').css('transition', '1s');
			$('.nav-info').css('height', '15px');
			$(".site-name h1").css('transition', '1s');
			$('.site-name h1').css('font-size', '30px');
			$(".site-name p").css('transition', '1s');
			$('.site-name p').css('font-size', '11px');
		} else {
			$('.navbar-default').css('background-color', 'transparent');
			$(".navbar-default").css('border-color', 'transparent');
			$('.nav-info').css('height', '30px');
			$('.nav-info p a').css('font-size', '17px');
			$('.site-name h1').css('font-size', '50px');
			$('.site-name p').css('font-size', '14px');

			}
		});
	}
});


$(function(){
	$(".image-gallery").hide();
	$("#igButton").on("click", function(){
		$(".image-gallery, #imageGallery").toggle();
	});
});


