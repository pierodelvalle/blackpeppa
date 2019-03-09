$(document).ready(function() {
	window.onload = function() {
		$('.loader').fadeOut(200);
	};
	/*
	window.onload = function() {
		$('.loader').fadeOut(200, function() {$('.loader').remove();});
		
	};
	*/
	$('.gallery-list a').mouseenter(function() {
		$(this).addClass('hover');
	}).mouseleave(function() {
		$(this).removeClass('hover');
	});
	$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top - 75
	      }, 1000);
	      return false;
	    }
	  }
	});
})
