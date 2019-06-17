<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */

		echo '<div class="home-hero-container"><div class="single-featured-image-header">';

					the_post_thumbnail( 'full' );
					$caption = get_the_post_thumbnail_caption();
					$photo_credit = get_post_meta( get_post_thumbnail_id(), 'photo_credit_txt', true );

					if ( !empty($caption) ){
						if ( !empty($photo) ){
							echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption.' <span class="photo-credit"> '. $photo_credit .'</span>'.'</figcaption></div></div>';
						}
						else {
							echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption .'</figcaption></div></div>';
						}
					}

					echo '</div><!-- .single-featured-image-header -->';

					echo 	the_title( '<h2 class="entry-title home-hero-title">', '</h2>' );
		echo '</div><!-- .home-hero-container -->';


?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
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
