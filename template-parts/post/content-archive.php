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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
	
	<?php 
		// Show featured image on archive pages
		$show_featured = get_theme_mod('archive_featured');

		if ( has_post_thumbnail() && $show_featured ) : ?>
			<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
		
		<div class="wrap">
		<?php
		if ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
           </div><!-- .wrap -->
	</header><!-- .entry-header -->
	
	<div class="entry-content">
           <div class="wrap">
		<?php
		$show_excerpt = ( 'excerpt' == get_theme_mod('archive_content') );
		if ( !$show_excerpt ){
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
		}
		else {
			the_excerpt();
		}
		
		?>
           </div><!-- .wrap -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
