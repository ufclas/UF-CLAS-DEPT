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

		<!-- grid-123-b shrinks from a 3 column grid to a 2 column grid (in ipad) and finally to 1 column -->
		<div class="clas-home-bottom-section">
			<?php dynamic_sidebar('clas-numbers'); ?>
		</div>

</article><!-- #post-## -->
