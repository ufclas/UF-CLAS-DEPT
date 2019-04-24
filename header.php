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

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
</head>

<body <?php body_class(); ?>>

<header class="X-header">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to main content', 'twentyseventeen' ); ?></a>

       <div class="uf">
          <a href="http://www.ufl.edu" target="_blank"> 
			 <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'uflogo', 'class' => 'icon-uflogo' ) ); ?>
			 <span class="SVGaltText">University of Florida Homepage</span>
          </a>
       </div>
   <div class="college">
        <a href="http://www.clas.ufl.edu" target="_blank">
			<span class="college-logo-desktop">
              	<?php echo twentyseventeen_get_svg( array( 'icon_id' => 'college-logo' ) ); ?>
				<span class="SVGaltText">College of Liberal Arts and Sciences</span>
           </span>    
           <span class="college-logo-mobile">
              <span>Liberal Arts and Sciences</span>    
           </span>  
           <span class="college-logo-tablet">
              <span>College of Liberal Arts and Sciences</span>    
           </span> 
        </a>
   </div>

   <div class="department">         
      <div class="strikeRight">
		  <span>
			  <?php if ( is_front_page() || is_home() ): ?>
			  <h1 class="strikeheader"><?php echo get_bloginfo( 'name' ) ?></h1>
		  	  <?php else: ?>
		  		<a class="strikeheader" href="<?php echo get_site_url(); ?>"><span class="access-focus"><?php echo  get_bloginfo( 'name' ) ?></span></a>
		  		<?php endif; ?>
		  </span>
	   </div>  
   </div>

  <nav class="X-quickLinks" aria-label="Quick Links" tabindex="999"> <span>Quick Links</span> 
	<?php wp_nav_menu( array(
		'theme_location' => 'quicklinks',
		'menu_id'        => 'quicklinks',
                'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
                'depth' => 1,

	) ); ?>
   </nav>

	<div class="X-searchTrigger" tabindex="1000">
	   <span>
		   <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-search-thin-open', 'class' => 'icon-search-thin-open', 'id' => 'icon-search-thin-trigger', 'role' => 'button', 'title' => 'Open/Close Search' ) ); ?>
	   </span>
	</div>
   <div class="X-search-form-container"><?php get_search_form(); ?></div>
   <div class="menuBox" tabindex="1001">
	   <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-fivelines', 'class' => 'icon-menu', 'id' => 'icon-menu' ) ); ?>
   </div>
   <div class="X-menu">
   <div class="mobileSearch"><?php get_search_form(); ?></div>
         <?php if ( has_nav_menu( 'top' ) ) : ?>
<nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
        'walker'          => new ALPHA_Menu,
		'depth' => 3,
	) ); ?>

</nav><!-- #site-navigation -->


         <?php endif; ?> 
    
   </div>


</header><!-- uf-branding -->



<div id="page" class="site">
	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( is_singular() && has_post_thumbnail() ) :
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
