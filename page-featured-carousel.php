<?php
/*
 * Template Name: Featured Carousel
 * Template Post Type: page
 */

get_header(); ?>




			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content-featured-carousel', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>





<?php get_footer();
