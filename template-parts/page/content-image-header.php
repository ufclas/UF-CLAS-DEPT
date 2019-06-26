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


	ob_start();
	do_action('slideshow_deploy','home-slider');
	$slideshow = ob_get_contents();
	ob_end_clean();

	$string_key = htmlspecialchars($slideshow);
	$exist_image   = has_post_thumbnail();
	$error_noSlide = false;
	$error_noShow  = false;
	$key_noShow    = "No slideshows available";
	$key_slideShow = "slideshow_container";
	$key_noSlide   = "No slides were found";

	$position_key_noShow   = strpos($string_key, $key_noShow);
	$position_key_noSlide  = strpos($string_key, $key_noSlide);
	$position_keySlideShow = strpos($string_key, $key_slideShow);

		if ($position_key_noSlide > 0) {
			$error_noSlide = true;
		} else if ($position_key_noShow > 0) {
			$error_noShow  = true;
		}

		/*
		if (!$exist_image && ($error_noSlide || $error_noShow)) {
		echo "h2";
		} else if ($exist_image && ($error_noSlide || $error_noShow)) {
		echo "img";
		} else {
		echo "slideshow";
		}

	 image   show   slide  =>  echo "slide"
 	!image   show   slide  =>  echo "slide"

	 image  !show  !slide  =>  echo "image"
	 image   show  !slide  =>  echo "image"

	!image   show  !slide  =>  echo "h2";
	!image  !show  !slide  =>  echo "h2";

*/

		if (!$exist_image && ($error_noSlide || $error_noShow)) {
			echo "<div class='wrap'><h2>" . get_the_title() . "</h2></div>";
		} else if ($exist_image && ($error_noSlide || $error_noShow)) {
			 // HERO IMAGE
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
				 the_title( '<h2 class="entry-title home-hero-title">', '</h2>' );
			 echo '</div><!-- .home-hero-container -->';
		} else {
			// SLIDESHOW
		 echo '<div class="home-hero-container">';
			 do_action("slideshow_deploy","test");
		 echo "</div>";
		}

		if (!$exist_image && ($error_noSlide || $error_noShow)) {
			$noMedia = "noMedia";
		}
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
