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
 * @package UFCLAS-DEPT
 */
get_header(); ?>

<div id="main" class="container main-content wrap">
<div class="row">
  <div class="col-sm-12">

    <?php
      //Breadcrumbs
      // if (get_theme_mod('ufclas_breadcrumbs') ){
      //   ufclas_get_breadcrumb();
      //  }
    ?>

    <header class="entry-header">
      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    </header>
    <!-- .entry-header -->
  </div>
</div>
<div class="row entry-content">
  <div class="col-sm-12">
		<ul class="">
		<?php
		while ( have_posts() ) : the_post(); ?>
            <?php the_title(sprintf( '<li><a href="%s">', get_the_permalink() ), '</a></li>'); ?>
		<?php
		endwhile; // End of the loop.
		?>
    	</ul>
  </div>
</div>
</div>

<?php get_footer(); ?>
