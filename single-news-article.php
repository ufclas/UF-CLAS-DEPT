<?php
/*
 * Template Name: News Article
 * Template Post Type: post, page, product
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
         if (  is_page_template( 'single-news-article.php' ) ) {
              echo ' <div class="wrap noTopBottomMargin"><p class="date">'.get_the_date( 'F j, Y' ).' &mdash; '.get_the_author_meta("nickname").'</p></div>';
          }
				get_template_part( 'template-parts/post/content-news-article', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	


<?php get_footer();
