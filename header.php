<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="<?php echo get_the_title();?>" />
	<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'square-crop'); ?>" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="400" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
</head>

<body <?php body_class(); ?>>

	<?php
		//Looks at the current site. If the current site is the CLAS Home website it will display the clas.php header template. If the website is anything else, it will display the deparment.php template - Efren Vasquez
		$blog_id = get_current_blog_id();

		//These are the site IDs for the CLAS website. 222 = Test server, 232 = Production server.
		$clasID = array(232, 247);

		//232 is the ID for the CLAS Home Page - Efren Vasquez
		if( in_array($blog_id, $clasID) ){
			get_template_part('template-parts/header/clas');
		}else {
			get_template_part('template-parts/header/department');
		}
	?>

<div id="page" class="site">
	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 * Checks to see if a specific template is selected since those templates rely on a specific header style
	 */
	 $classes = get_body_class();

	 if ( is_singular() && has_post_thumbnail() && (!is_page_template( array('page-image-header.php', 'single-no-feature-image.php', 'page-clas-home.php', 'page-interior-title-image.php'))) && (!is_singular('clas_team_members')) && (!is_page('CLAS IT Connections')) && (!is_singular('article')) ) :
 		echo '<div class="single-featured-image-header">';
                   // If this is a magazine article
                   if ( is_page_template( 'single-magazine-article.php' ) ) {
					   echo '<div class="wrap fi">';
					   the_title( '<h1 class="entry-title">', '</h1>' );

					   // Fall back to post meta and prevent fatal error if ACF isn't active
					   $var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);
					   $var_byline = get_post_meta( get_the_ID(), 'byline', true);

						if ( function_exists('get_field') ){
							$var_sub_head = get_field('sub_head');
							$var_byline = get_field('byline');
						}

						if ( !empty( $var_sub_head ) ){
							echo '<h2 class="eee">' . esc_html( $var_sub_head ) . '</h2>';
						}
					   if ( !empty( $var_byline ) ){
							echo '<span class="author">By ' . esc_html( $var_byline ) . '</span>';
						}

                       echo '</div><!-- .wrap -->';
                   }

					the_post_thumbnail( 'twentyseventeen-featured-image' );
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


                   if ( is_page_template( 'single-featured-story.php' )  ) {
                       echo '<div class="textOverImage">';
					   echo '<div class="wrap">';
					   the_title( '<h1 class="featured-story-header">', '</h1>' );

					   // Fall back to post meta and prevent fatal error if ACF isn't active
					   $var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);

						if ( function_exists('get_field') ){
							$var_sub_head = get_field('sub_head');
						}

						if ( !empty( $var_sub_head ) ){
							echo '<h2 class="dddd">' . esc_html( $var_sub_head ) . '</h2>';
						}
					   	echo '</div><!-- .wrap -->';
					   	echo '</div><!-- .textOverImage -->';
                   }
		echo '</div><!-- .single-featured-image-header -->';

    	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
