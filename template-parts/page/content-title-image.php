<?php
/**
 * Template part for displaying page content in page-interior-title-image.php
 *
 */

?>

<!-- Hero Image on top of the page-->
<?php
			// Checks to see if a featured image is selected. If it is, it will load the featured image and styling for header. If no featured image is selected only the title will show up with out the specific styling.
			
			if(has_post_thumbnail()){?>
				<div class="hero-container">
					<div class="single-featured-image-header">
						<?php the_post_thumbnail( 'full' ); ?>
					</div><!-- .single-featured-image-header -->
					<?php the_title( '<h2 class="entry-title interior-page">', '</h2>' ); ?>
				</div><!-- .home-hero-container -->
				<?php
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
				}else{?>
			     <div class="wrap">
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			     </div><!-- .wrap -->
	 		 	<?php } ?>

<article <?php post_class(); ?> >
	<div class="entry-content">
    <div class="wrap">
			<?php
				the_content();
			?>
    </div><!-- .wrap -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
