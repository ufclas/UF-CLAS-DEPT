<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UF_CLAS_EMILY_Theme
 * @since 1.0
 * @version 1.2
 */

?>

<?php
	// Chooses between Slider, Hero Image, or H2
	homeChooseHeaderMedia();
?>

<article id="page-<?php the_ID(); ?>" class="clas-featured-section">

<div id="clas-featured-container">
	<?php dynamic_sidebar('clas-featured-stories'); ?>
</div>

</article><!-- #post-## -->
