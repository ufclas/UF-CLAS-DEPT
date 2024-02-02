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
		the_title( '<h2 class="entry-title">', '</h2>' );

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

        //Pulls in the Author's first and last name along with the publish date
        $authorFirstName = get_the_author_meta('first_name');
        $authorLastName  = get_the_author_meta('last_name');
        $publishDate     = get_the_date();

        //Displays author's first name and last name and the publish date

        //Checks to see if author needs to hidden
        $shownauthor = get_field('article-author');
        $showndate = get_field('article-date');

        $author = "By <span class='author-name'>$authorFirstName $authorLastName</span>";
        $date   = "<span class='publish-date'>$publishDate</span>";

        if( in_array('show-author', $shownauthor) !== false ) {
            echo "<p class='byline-author'> $author </p>";
        }
		if( in_array('show-date', $showndate) !== false ) {
            echo "<p class='byline-date'> $date </p>";
        }
		

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
