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

<article id="page-<?php the_ID(); ?>" <?php post_class("$noMedia"); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>

	<div class="entry-content">

  	<div class="wrap">


		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>

           </div><!-- .wrap -->
	</div><!-- .entry-content -->

	<?php
		if ( is_single() ) {
			twentyseventeen_entry_footer();
		}
	?>


</article><!-- #post-## -->
