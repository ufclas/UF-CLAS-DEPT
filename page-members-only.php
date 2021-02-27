<?php
/*
 * Template Name: Members Only
 * Template Post Type: page, post
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
				if ( ufl_check_authorized_user( get_the_ID() ) ) : // check if logged in/valid shib user required
		            while ( have_posts() ) : the_post();
		                get_template_part( 'template-parts/page/content-page' );
		            endwhile; // End of the loop.
				else:
					get_template_part('template-parts/page/content-page-restricted');
				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer();
