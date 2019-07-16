<?php
/*
 * Template Name: Members Only
 * Template Post Type: page, post
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

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
