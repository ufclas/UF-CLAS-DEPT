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
	<meta property='twitter:title' content="<?php echo get_the_title();?>"/>
	<meta property='twitter:image' content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'square-crop'); ?>"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
	<script src="https://kit.fontawesome.com/79e986c029.js" crossorigin="anonymous"></script>

	<?php
	//Google Analytics
	if ( !empty(get_theme_mod('google_analytics_code')) ){
		$googleAnalytics = get_theme_mod('google_analytics_code'); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalytics ?>"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '<?php echo $googleAnalytics ?>', {'cookie_domain': 'get_site_url()'});
		</script>
	<?php } ?>

</head>

<body <?php body_class(); ?>>

	<?php
		//Looks at the current site. If the current site is the CLAS Home website it will display the clas.php header template. If the website is anything else, it will display the deparment.php template - Efren Vasquez
		$blog_id = get_current_blog_id();

		//These are the site IDs for the CLAS Portal and CLAS main website.
		$clasID = array(1,2);

		if( in_array($blog_id, $clasID) ){
			get_template_part('template-parts/header/clas');
		}else {
			get_template_part('template-parts/header/department');
		}

		//Displays the alert message if it's filled out in the backend
		if ( !empty(get_theme_mod('header_alert')) ){
			 echo '<div class="header-alert"><p>';
			 echo wp_kses_post( get_theme_mod('header_alert') );
			 echo '</p></div>';
		 }
	?>

<div id="page" class="site">

	<div class="site-content-contain">
		<div id="content" class="site-content">
