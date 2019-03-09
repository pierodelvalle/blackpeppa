$(document).ready(function(){

	$('.slick-items').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  autoplay: true,
	  responsive: [
	      {
	        breakpoint: 769,
	        settings: {
	          arrows: false,
	          centerMode: true,
	          centerPadding: '40px',
	          slidesToShow: 2
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          arrows: false,
	          centerMode: true,
	          centerPadding: '40px',
	          slidesToShow: 1
	        }
	      }
	    ]
	});

	$('.slick-logos').slick({
	  centerMode: true,
	  variableWidth: true,
	  infinite: false,
	});

	$('.slick-gallery').slick({
		slidesToShow: 4,
		infinite: true,
		responsive: [
	      {
	        breakpoint: 769,
	        settings: {
	          arrows: false,
	          centerMode: true,
	          centerPadding: '40px',
	          slidesToShow: 2
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          arrows: false,
	          centerMode: true,
	          centerPadding: '40px',
	          slidesToShow: 1
	        }
	      }
	    ]
	})

});
