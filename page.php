<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	/*
	 * Uses the Featured Image as a hero image
	 */

	 clasHeroImage();
	?>


	<div id="primary" class="content-area">

		<?php
			//Breadcrumbs
			if (get_theme_mod('ufclas_breadcrumbs') ){
				ufclas_get_breadcrumb();
			 }
		?>

		<main id="main" class="site-main" aria-label="Main content">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();
