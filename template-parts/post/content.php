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
		
		<div class="wrap">
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
		
		// Show date or edit link
		if ( 'post' === get_post_type()  ) {
			echo '<div class="entry-meta"><p>';
			twentyseventeen_edit_link();
			echo '</p></div><!-- .entry-meta -->';
		}
		?>
           </div><!-- .wrap -->
	</header><!-- .entry-header -->
	
	<div class="entry-content">
           <div class="wrap">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		// Show paginated page links
		wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
		) );
		?>
           </div><!-- .wrap -->
	</div><!-- .entry-content -->

	<?php twentyseventeen_entry_footer(); ?>

</article><!-- #post-## -->
