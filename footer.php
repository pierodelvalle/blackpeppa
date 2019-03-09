<?php wp_footer(); ?>
<script>
	$('#mc-embedded-subscribe-form').submit(function(event) {
		var submit = $("#mc-embedded-subscribe");
		submit.addClass("is-sent");
		submit.val('¡Listo! Su mensaje ha sido enviado.');
		submit.attr('disabled', true);   
	})
</script>
</body>
</html>