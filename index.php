<?php 
get_header('index');?>
	<main class="main">
		<div class="section scroll-area" id="inicio">
			<div class="section-wrapper is-centered">
				<div class="container text-center">
					<a id="reel_cta" class="fancybox" href="https://www.youtube.com/embed/2zZdFFMMVUM">Ver Reel</a>
					<p id="typewrite-wrapper">
						Creamos
						<a href="" class="typewrite" data-period="2000" data-type='[ "fotografías.", "experiencias.", "animaciones.", "videos." ]'>
						  <span class="wrap"></span>
						</a>
					</p>
					<div class="social-buttons-wrapper">
						<label class="menu-open-button social-buttons">
						  <span class="btn"><a href="https://www.instagram.com/blackpeppa.pe/"></a></span>
						  <span class="btn"><a target="_blank" href="https://www.facebook.com/BlackPeppaVisuales/"></a></span>
						  <span class="btn"><a target="_blank" href="https://www.youtube.com/channel/UC2kiiUtplkBLU2Cl0bOQ3mw"></a></span>
						</label>
					</div>
				</div>
			</div>
			</div>
			<div class="special-videoframe" class="no-phone">
			    <video class="main-video" loop autoplay muted nocontrols>
			        <source src="<?php echo get_template_directory_uri(); ?>/media/bp-video.mp4" type="video/mp4">
			        <source src="<?php echo get_template_directory_uri(); ?>/media/bp-video.webm" type="video/webm"> Your browser does not support HTML5
			    </video>
			</div>
		</div>
		<div class="section scroll-area nosotros-section" id="2">
			<div class="section-wrapper is-centered text-center">
				<div class="container black">
					<h1>Hacemos lo que más nos <span class="yellowunderline">gusta</span></h1>
					<p>Somos un equipo de profesionales que hacemos comunicación creativa y efectiva a partir de los insights de tus clientes. Nos encargamos de fortalecer y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, producciones fotográficas y marketing digital.</p>
				</div>
			</div>
			<div id="instagram-slider">
				<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/365bd6b42d66535ba4bc64ff20046e79.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
			</div>			
		</div>
		<div class="section scroll-area white clientes-section" id="3">
			<div class="section-wrapper is-centered">
				<div class="container">
					<h1>Nuestros mejores <span class="yellowunderline">críticos.</span></h1>
					<?php if(!is_paged()): ?>
					<?php 
						$args = array('post_type' => 'cliente', 'posts_per_page' => -1);
						$query = new WP_Query($args);
						$count = 1;
					 ?>
					<div class="slider slick-logos">
						<div class="clientes-grid">
						<?php while( $query->have_posts()): $query->the_post() ?>
							<img src="<?php the_field('cliente_imagen'); ?>" alt="<?php the_title(); ?>">
						<?php if($count%11==1 && $count>1 && $count!=23) {
								echo "</div><div class='clientes-grid'>";
							} 
							$count++;
						?>
						<?php endwhile; ?>
						</div>
					</div>
					<?php endif;?>
				</div>
			</div>
			<div class="yellowsquare"></div>
		</div>
		<div class="section scroll-area white testimonios-section" id="4">
			<div class="section-wrapper is-centered">
				<div class="container">
					<h1>Testimonios: Aquí es donde <span class="yellowunderline">rajan de </span>nosotros</h1>
					<ul class="clientes-wrapper slick-items">
						<?php 
						$query2 = new WP_Query(array('posts_per_page' => -1, 'post_type' => 'testimonio')); ?>
						<?php if ($query2->have_posts()) : while ($query2->have_posts()) : $query2->the_post(); ?>
						<li class="clientes-item">
							<div class="row">
								<img class="no-phone" src="<?php the_field('imagen_cliente') ?>" alt="<?php the_title(); ?>">
								<div>
									<h4 class="no-desktop"><?php the_field('empresa_cliente') ?></h4>
									<h2 class="item-title"><?php the_title(); ?></h2>
									<p class="item-subtitle"><?php the_field('cargo_cliente') ?></p>
								</div>
							</div>
							<div class="row text">
								<?php the_content(); ?>
							</div>
						</li>
						<?php endwhile; else: ?>
							<p>No hay testimonios que mostrar.</p>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="yellowsquare"></div>
		</div>
		<div class="section scroll-area white" id="5">
			<div class="section-wrapper is-centered is-responsive">
				<div class="container">
					<h1>Trabajemos juntos <span class="yellowunderline">¡Hablemos!</span></h1>
					<ul class="contact-wrapper">
						<li>
							<form id="formulario" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
								<input type="text" placeholder="Nombre" name="nombre" required>
								<input type="text" placeholder="Empresa" name="empresa">
								<input type="text" placeholder="Email" name="email" required>
								<input type="text" placeholder="Teléfono" name="telefono" required="">
								<textarea name="mensaje" placeholder="Mensaje..." id="" cols="30" rows="10"></textarea>
								<input type="submit" value="Enviar">
							</form>
							<p id="form-end"></p>
						</li>
						<li>
							<p>t. 554 7984</p>
							<p>rpc. 940 058 068</p>
							<p>rpm. 998 518 886</p>
							<p>ggvalenzuela@blackpeppa.pe</p>
						</li>
					</ul>
					<?php include('templates/social_media_dark.php') ?>
				</div>
			</div>
		</div>
	</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/typewriter.js"></script>
<script>
	var elements = document.getElementsByClassName('typewrite');
	console.log("Starting loop for text...")
	for (var i=0; i<elements.length; i++) {
	    var toRotate = elements[i].getAttribute('data-type');
	    var period = elements[i].getAttribute('data-period');
	    if (toRotate) {
	      new TxtType(elements[i], JSON.parse(toRotate), period);
	    }
	}
</script>
<?php get_footer(); ?>
