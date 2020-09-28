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

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<header class="entry-header">
			<?php
				if ( is_front_page() && is_home() ) {
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				} else {
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				}

				// Show date or edit link
				if ( 'post' === get_post_type()  ) {
					$show_date = get_theme_mod('archive_date');

					if ( $show_date ) {
						echo '<div class="entry-meta"><p>';
						twentyseventeen_posted_on();
						echo '</p></div><!-- .entry-meta -->';
					}
				}
			?>
	</header><!-- .entry-header -->

	<div class="entry-content">
   <div class="row">
		 <?php
			 // Show featured image on archive pages
			 $show_featured = get_theme_mod('archive_featured');

			 //Adds correct class depending if a featured image has been selected
			 if(has_post_thumbnail()){
				 $thumbColumn = 'col-sm-4';
				 $excerptColumn = 'col-sm-8';
			 }else {
			 	 $thumbColumn = 'col-sm-12';
				 $excerptColumn = 'col-sm-12';
			 }
		 ?>

		 <div class="entry-thumbnail <?php echo "$thumbColumn"; ?>">
		 	<?php
		 		if ( has_post_thumbnail() && $show_featured ) : ?>
		 			<div class="post-thumbnail">
		 				<a href="<?php the_permalink(); ?>">
		 					<?php the_post_thumbnail( 'square-crop' ); ?>
		 				</a>
		 			</div><!-- .post-thumbnail -->
			 		<?php endif; ?>
			</div>

			<div class="entry-excerpt <?php echo "$excerptColumn"; ?>">
				<?php
					the_excerpt();
				?>
			</div>
   </div><!-- .wrap -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
