<?php
/*
 * Template Name: Right Sidebar
 * Template Post Type: post, page, product
 */

get_header(); ?>


	<?php
		/*
		 * Uses the Featured Image as a hero image
		 */
		clasHeroImage();
	?>

<div class="wrap">
	<div id="primary" class="content-area">

		<?php
			//Breadcrumbs
			if (get_theme_mod('ufclas_breadcrumbs') ){
				ufclas_get_breadcrumb();
			 }
		?>

		<main id="main" class="site-main" aria-label="Main content">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content-right-sidebar', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
