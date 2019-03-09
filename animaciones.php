<?php 
/*
Template Name: Animaciones Template
*/
get_header('animaciones');?>

<main class="main">
	<h1>Animaciones 2D</h1>
	<div class="section is-yellow has-bg-image">
		<div class="container">
			<div class="columns">
				<div class="column is-flex is-aligned-vertical">
					<div class="content is-size-4-desktop">
						<p><strong>¿Tienes un nuevo producto o estas renovando tu servicio?</strong> ¿Quieres dar a conocer a tus clientes cómo utilizar tu producto o servicios y las ventajas del mismo?</p>
						<p>Las animaciones 2D no solo son atractivas, sino que también tienen un <strong>gran alcance orgánico (sin costo)</strong> y un alto engagement (reacciones de las personas que lo ven). Ya te habrás dado cuenta que todos lo están haciendo, sin mencionar a tu competencia.</p>
					</div>
				</div>
				<div class="column">
					<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="https://blackpeppa.us18.list-manage.com/subscribe/post?u=634ddf03d13c95be721a361e2&amp;id=842600e207" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
								<div class="indicates-required is-hidden"><span class="asterisk">*</span> indicates required</div>
								<div class="mc-field-group">
									<label class="is-hidden" for="mce-EMAIL">Email  <span class="asterisk">*</span></label>
									<input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL">
								</div>
								<div class="mc-field-group">
									<label class="is-hidden" for="mce-FNAME">Nombres </label>
									<input type="text" value="" name="FNAME" placeholder="Nombres" class="" id="mce-FNAME">
								</div>
								<div class="mc-field-group">
									<label class="is-hidden" for="mce-LNAME">Apellidos </label>
									<input type="text" value="" name="LNAME" placeholder="Apellidos" c
									lass="" id="mce-LNAME">
								</div>
								<div class="mc-field-group size1of2">
									<label class="is-hidden" for="mce-PHONE">Teléfono </label>
									<input type="text" name="PHONE" placeholder="Teléfono" class="" value="" id="mce-PHONE">
								</div>
								<div class="mc-field-group">
									<label class="is-hidden" for="mce-BUSINESS">Empresa </label>
									<input type="text" value="" name="BUSINESS" placeholder="Empresa" class="" id="mce-BUSINESS">
								</div>
								<div class="mc-field-group">
									<label class="is-hidden" for="mce-MESSAGE">Mensaje </label>
									<textarea type="text" value="" name="MESSAGE" placeholder="Mensaje" class="" id="mce-MESSAGE"></textarea>
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_634ddf03d13c95be721a361e2_842600e207" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="columns">
				<div class="column">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/9kvEENinC0E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="column">
					<div class="content">
						<p>Y si te preguntas: <strong>¿Qué tipos de animaciones me pueden servir?</strong> Ahí entramos nosotros, tras una reunión contigo sabremos cuales serían las ideas más idóneas para tu negocio o alguna campaña que tengas en mente, estos son algunos ejemplos:</p>
						<ul>
							<li class="ul-list"><strong>Videos explicativos: </strong> Das a conocer tus productos o servicios de forma sencilla y dinámica utilizando gráficos atractivos y locución en off.</li>
							<li class="ul-list"><strong>Videos tutoriales: </strong> Explicar un procedimiento o mostrar cómo funciona un producto o servicio a tus clientes o colaboradores utilizando imágenes facilita su comprensión y genera mucha atención y recordación. Ya lo sabías, ahora solo falta que nos llames.</li>
							<li class="ul-list"><strong>Videos de Storytelling: </strong> Cuenta historias para transmitir tus mensajes. Las historias ayudan a generar curiosidad en los usuarios y fidelizar aún más a tus clientes.</li>
						</ul>
						<p>Este es un formato que sin duda alguna logrará que tus objetivos de comunicación sean efectivos.</p>
					</div>
				</div>
			</div>
		</div>
	<div class="section">
		<div class="container">
			<div class="gallery-list is-carousel slick-gallery">
			<?php $query = new WP_Query('post_type=animacion'); ?>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<a style="background-image: url( <?php the_field('animacion_miniatura') ?> );" class="fancybox" href="https://www.youtube.com/embed/<?php the_field('animacion_url') ?>" data-caption="<?php the_title(); ?><br>Cliente: <?php the_field("animacion_cliente") ?>"><li><p><?php the_field('animacion_cliente') ?></p></li></a>
			<?php endwhile; else: ?>
			<p><?php _e("Nothing here!"); ?></p>
			<?php endif ?>
			</div>
			<?php include('templates/social_media_dark.php') ?>
		</div>
	</div>
</main>
<div class="yellowsquare"></div>
<script>
	$("#mc-embedded-subscribe").click(gtag_report_conversion());
</script>
<?php get_footer(); ?>