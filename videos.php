<?php 
/*
Template Name: Videos Template
*/
get_header();?>

<main class="main">
	<div class="container">
		<div class="gallery-list">
		<?php $query = new WP_Query('post_type=video'); ?>
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<a style="background-image: url( <?php the_field('video_miniatura') ?> );" class="fancybox" href="https://www.youtube.com/embed/<?php the_field('video_url') ?>" data-caption="<?php the_title(); ?><br>Cliente: <?php the_field("video_cliente") ?>"><li><p><?php the_field('video_cliente') ?></p></li></a>
		<?php endwhile; else: ?>
		<p><?php _e("Nothing here!"); ?></p>
		<?php endif ?>
		</div>
	</div>
</main>
<div class="yellowsquare"></div>
<?php get_footer(); ?>