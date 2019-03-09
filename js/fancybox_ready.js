$(document).ready(function() {
	$(".fancybox").fancybox();
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$(".nav").slideToggle(500);
	});
});