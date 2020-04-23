<?php
/**
 * Template Name: Image Tiles
 * The template for displaying page template with image tiles under title
 */

get_header(); ?>

	<div class="wrap">
		<?php the_title('<h2 class="entry-title">','</h2>'); ?>

		<div class="image-tile-widget">
			<?php dynamic_sidebar('image-tiles') ?>
		</div><!-- .image-tile-widget -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content-image-tiles', get_post_format() );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	<?php get_sidebar(); ?>
	</div><!-- .wrap -->

<?php get_footer();
