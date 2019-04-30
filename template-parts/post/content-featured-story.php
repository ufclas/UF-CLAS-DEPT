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
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>


	<div class="entry-content">

           <div class="wrap">
<?php

		if ( !has_post_thumbnail() ) { 
			the_title( '<h1 class="entry-title">', '</h1>' );

			// Get custom field for subhead
			$var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);

			// Prevent fatal error if ACF isn't active
			if ( function_exists('get_field') ){
				$var_sub_head = get_field('sub_head');
			}

			if ( !empty( $var_sub_head ) ){
				echo '<h2>' . esc_html( $var_sub_head ) . '</h2>';
			}
		}

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
