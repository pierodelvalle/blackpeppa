<?php get_header();?>
<main>
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Something went wrong.' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<div class="yellowsquare"></div>
<?php get_footer(); ?>