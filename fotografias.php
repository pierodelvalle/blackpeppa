<?php 
/*
Template Name: Fotografias Template
*/
get_header();?>

<main class="main">
	<div class="container">
		<div class="gallery-list">
		<?php $query = new WP_Query(array('posts_per_page' => -1, 'post_type' => 'fotografia')); ?>
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<?php $time = 1 ?>
			<a style="background-image: url( <?php the_field('fotografia_miniatura') ?> );
					  animation-delay: <?php $time; ?>s" 
			   class="fancybox animated slideInUp" 
			   href="<?php echo(types_render_field( 'fotografias_galeria', array( 'url' => 'true', 'index' => '0') )); ?>" 
			   data-fancybox="<?php the_title(); ?>"
			   data-caption="<?php the_title(); ?><br>Cliente: <?php the_field("fotografia_cliente") ?>">
			   <li><p><?php the_field('fotografia_cliente') ?></p></li>
			</a>
			<?php 
			$x = 1;
			while (true): ?>
			<?php if (types_render_field( 'fotografias_galeria', array('index' => $x)) == false){ break;} ?>
				<a style="display:none"
				   class="fancybox"
				   href="<?php echo(types_render_field( 'fotografias_galeria', array( 'url' => true, 'index' => $x) )) ?>"
				   data-fancybox="<?php the_title(); ?>"
				   data-caption="<?php the_title(); ?><br>Cliente: <?php the_field("fotografia_cliente") ?>"></a>
			<?php  $x++; $time++;?>
			<?php endwhile; ?>
		<?php endwhile; else: ?>
		<p><?php _e("Nothing here!"); ?></p>
		<?php endif ?>
		</div>
	</div>
</main>
<div class="yellowsquare"></div>
<?php get_footer(); ?>