<?php
/**
 * The template file for archives.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<?php get_template_part( 'inc/issuem/issuem', 'header' ); ?>

<div id="main" class="container main-content">

<div class="row">
  <div class="col-md-12 issuem-archive">
    <?php
		while ( have_posts() ) : the_post(); ?>
      <div class="issuem-archive-container">
			  <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="issuem-archive-text">
          <?php the_post_thumbnail('medium'); ?>
          <?php the_excerpt(); ?>
        </div>
      </div>
      <?php
		endwhile; // End of the loop.

		// Previous/next page navigation.
		the_posts_pagination();
	?>
  </div>
</div>
</div>

<?php get_footer(); ?>
