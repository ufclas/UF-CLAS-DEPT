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
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					//twentyseventeen_posted_on();
				} else {
					//echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->



	<div class="entry-content">  
		<?php

        //Pulls in the Author's first and last name along with the publish date
        $authorFirstName = get_the_author_meta('first_name');
        $authorLastName  = get_the_author_meta('last_name');
        $publishDate     = get_the_date();

        //Displays author's first name and last name and the publish date

        //Checks to see if author needs to hidden
		$shownauthor = get_field('article-author');
		$showndate = get_field('article-date');
		$showsharingicons = get_field('article-share');
		
		$author = "By <span class='author-name'>$authorFirstName $authorLastName</span>";
		$date   = "<span class='publish-date'>$publishDate</span>";
		
		if (is_array($shownauthor) && in_array('show-author', $shownauthor) !== false) {
			echo "<p class='byline-author'> $author </p>";
		}
		if (is_array($showndate) && in_array('show-date', $showndate) !== false) {
			echo "<p class='byline-date'> $date </p>";
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

		if (in_array('show-sharing-icons', $showsharingicons) !== false) {
            $postUrl = get_permalink();
			?>
				<section class="post-sharing-icons">
						<h3 class="post-sharing-icons-name">SHARE</h3>
						<p>Share this content on these platforms.</p>
						<div class="share-icons-button">
							<!-- Facebook Link -->
							<p><a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><em class="fab fa-square-facebook"></em></a></p>
		
							<!-- Twitter Link -->
							<p><a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo get_the_title(); ?>&via=<?php the_author_meta('twitter'); ?>" title="Share on Twitter"><em class="fab fa-twitter"></em></a></p>
		
							<!-- LinkedIn -->
							<p><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $postUrl; ?>&title=<?php echo get_the_title(); ?>"><em class="fab fa-linkedin"></em></a></p>
						</div>
				</section>
			<?php
		}
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
