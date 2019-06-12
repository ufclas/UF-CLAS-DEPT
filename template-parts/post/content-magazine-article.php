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

                   // If this is a magazine artile
                   if (  !has_post_thumbnail() ) {
					   echo '<div class="fi">';
					   the_title( '<h2 class="entry-title">', '</h2>' );

					   // Fall back to post meta and prevent fatal error if ACF isn't active
					   $var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);
					   $var_byline = get_post_meta( get_the_ID(), 'byline', true);

						if ( function_exists('get_field') ){
							$var_sub_head = get_field('sub_head');
							$var_byline = get_field('byline');
						}

						if ( !empty( $var_sub_head ) ){
							echo '<h2>' . esc_html( $var_sub_head ) . '</h2>';
						}
					   if ( !empty( $var_byline ) ){
							echo '<span class="author">By ' . esc_html( $var_byline ) . '</span>';
						}
					             
                       echo '</div>';                  
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
