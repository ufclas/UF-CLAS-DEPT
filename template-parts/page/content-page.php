<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( !is_front_page() ){ ?>
		<header class="entry-header">
	           <div class="wrap">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	           </div><!-- .wrap -->
		</header><!-- .entry-header -->
	 <?php } ?>
	<div class="entry-content">
           <div class="wrap">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
		<?php the_tags('',','); ?>
           </div><!-- .wrap -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
