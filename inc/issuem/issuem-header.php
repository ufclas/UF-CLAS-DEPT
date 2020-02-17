<?php
/**
 * Newsletter header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UFCLAS_emily
 */

	$newsletter_data = ufclas_emily_newsletter_data();
	$issue_data = ufclas_emily_issuem_issue_data();

	$shortcode = sprintf( '[ufl-landing-page-hero headline="%s" subtitle="%s" image="%s" image_height="%s"]%s[/ufl-landing-page-hero]',
		$newsletter_data['title'],
		$newsletter_data['subtitle'],
		$newsletter_data['cover'],
		$newsletter_data['image_height'],
		''
	);
	echo do_shortcode( $shortcode );

	// Newsletter menu
	if ( has_nav_menu( 'newsletter-menu' ) ): ?>
			<header id="issuem-header" aria-label="issuem-header">
				<button type="button" class="navbar-toggle issuem-mobile-menu" data-toggle="collapse" data-target="#newsletter-menu-navbar" onclick="document.getElementById('newsletter-menu-navbar').classList.toggle('show');" >
					<span class="sr-only">Toggle navigation</span>
					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Menu
				</button>

	  		<nav class="navbar navbar-inverse subnav subnav-dark" aria-label="issuem-navigation">
	    		<div class="container">
	      		<?php
	      		wp_nav_menu( array(
	      			'theme_location' => 'newsletter-menu',
	      			'depth' => 2,
	      			'container' => 'div',
	      			'container_class' => 'collapse navbar-collapse',
	      			'container_id' => 'newsletter-menu-navbar',
	      			'menu_class' => 'nav navbar-nav',
	      		));
	      		?>
	    		</div>
	    	</nav>
			</header>
<?php
endif;
?>
