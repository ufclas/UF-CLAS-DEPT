<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

	$id = twentyseventeen_unique_id();
	$unique_id = esc_attr( 'search-form-' . $id );
?>

<form role="search" aria-label="<?php echo _x( 'Search Form ' . $id, 'label', 'twentyseventeen' ); ?>" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
	</label>
	<input type="search" maxlength="900" id="<?php echo $unique_id; ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search <?php echo bloginfo('name'); ?>" required />
	<input type="hidden" name="pageID" value="<?php echo get_current_blog_id(); ?>">
	<button type="submit" class="search-submit"><?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span></button>
</form>
