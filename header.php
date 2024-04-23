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
		$googleAnalytics = get_theme_mod('google_analytics_code');

		// Get the custom field value (we're using the wpalchemy class)
		$link = get_site_url();

		if (!empty($link)) {
			// Begins with https
			if (preg_match('/^https/', $link)) {
				// Set the $url_prefix variable to `https://`
				$url_prefix = 'https://';
			} else {
				// Use http
				$url_prefix = 'http://';
			}
		}

			// Get rid of the `http://` or `https://`
			$link = str_replace(array('http://', 'https://'), '', $link);
		?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalytics ?>"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '<?php echo $googleAnalytics ?>', {'cookie_domain': '<?php echo $link ?>'});
		</script>
	<?php } 
	
	//Google Tag Manager
		if ( !empty(get_theme_mod('google_tag_manager_code')) ){
			$googleTagManager = get_theme_mod('google_tag_manager_code');
	
			// Get the custom field value (we're using the wpalchemy class)
			$link = get_site_url();
	
			if (!empty($link)) {
				// Begins with https
				if (preg_match('/^https/', $link)) {
					// Set the $url_prefix variable to `https://`
					$url_prefix = 'https://';
				} else {
					// Use http
					$url_prefix = 'http://';
				}
			}
	
				// Get rid of the `http://` or `https://`
				$link = str_replace(array('http://', 'https://'), '', $link);
			?>
	
			<!-- Google Tag Manager -->
			<script>
				(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','<?php echo $googleTagManager ?>');</script>
		<?php } 
		?>

</head>

<body 



<?php 

$this_category = get_category($cat);
//If category is parent, list it
if ($this_category->category_parent == 0) {
	$this_category->category_parent = $cat;
} else { // If category is not parent, list parent category
	$parent_category = get_category($this_category->category_parent);
	//get the parent category id
	$ParentCatId = $parent_category->cat_ID;
	}
	$childcategories = array();
	$catx = $ParentCatId;
	$cats = get_categories('parent='.$catx);
	foreach($cats as $cat) {
		$childcategories[] = $cat->term_id; } ;
	//if it is a child category, add a class with the parent category id
	if( is_category( $childcategories ) ) {
		$class = 'parent-category-'.$ParentCatId;
	}

body_class($class); 


?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $googleTagManager ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php
		//Looks at the current site. If the current site is the CLAS Home website it will display the clas.php header template. If the website is anything else, it will display the deparment.php template - Efren Vasquez
		$blog_id = get_current_blog_id();

		//These are the site IDs for the CLAS Portal and CLAS main website.
		$clasID = array(1,2);
		$blankID = array(217);

		if( in_array($blog_id, $clasID) ){
			get_template_part('template-parts/header/clas');}
		else if ( in_array($blog_id, $blankID) ){
			get_template_part('template-parts/header/blank');}
		else {
			get_template_part('template-parts/header/department');
		}

		//These are the site IDs for the CLAS Portal and CLAS main website.


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
