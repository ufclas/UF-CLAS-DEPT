<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UFCLAS-DEPT
 */
get_header(); ?>

<div id="main" class="container main-content">
<div class="row">
  <div class="col-sm-12">

    <?php
      //Breadcrumbs
      // if (get_theme_mod('ufclas_breadcrumbs') ){
      //   ufclas_get_breadcrumb();
      //  }
    ?>
    <!-- .entry-header -->
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?php
		while ( have_posts() ) : the_post();
			get_template_part( '/template-parts/page/content-page' );
		endwhile; // End of the loop.
	?>
  </div>
</div>
</div>

<?php get_footer(); ?>
