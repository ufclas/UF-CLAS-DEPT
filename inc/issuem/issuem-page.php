<?php
/**
 * Template Name: Newsletter Page
 *
 * @package UFCLAS_EMILY
 *
 */
get_header(); ?>

<?php get_template_part( 'inc/issuem/issuem', 'header' ); ?>

<div id="" class="">
    <div class="">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>

		          <?php get_template_part( 'inc/issuem/content', 'archive' ); ?>

        	<?php endwhile; // End of the loop. ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>
