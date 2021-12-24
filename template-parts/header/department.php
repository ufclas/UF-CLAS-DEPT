<header class="X-header header-clas" aria-label="Website Header">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to main content', 'twentyseventeen' ); ?></a>

       <div class="uf"> <!-- UF Logo -->
          <a href="https://ufl.edu" target="_blank">
					 <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'uflogo', 'class' => 'icon-uflogo' ) ); ?>
					 <span class="SVGaltText">University of Florida Homepage</span>
          </a>
       </div>

		   <div class="college"><!-- College of Liberal Arts logo -->
				<h1 class="strikeheader"><a class="strikeheader" href="<?php echo get_site_url(); ?>"><span class="access-focus"><?php echo  get_bloginfo( 'name' ) ?></span></a></h1>
				 <div class="strikeRight">
	 				<a href="https://clas.ufl.edu" target="_blank">
	 						<span class="college-logo-desktop">
	 							<?php echo twentyseventeen_get_svg( array( 'icon_id' => 'clas-connected' ) ); ?>
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
				<div class="menuBox">
					<button><?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-fivelines', 'class' => 'icon-menu', 'id' => 'icon-menu' ) ); ?></button>
				</div>
		   </div>

   <div class="department">
		<div class="container_header_department"><!-- Website title -->

		 <div class="X-menu"> <!-- Main Navigation -->
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
				 <div class="donation mobile">
					 <?php
						 if ( !empty(get_theme_mod('make_gift')) ){
								$donationURL = wp_kses_post( get_theme_mod('make_gift') );
								echo "<a href='$donationURL' target='_blank'>Make a Gift<span class='gift-icon'><em class='fas fa-gift'></em></a>";
							}
					 ?>
				 </div>
		 </div>
   </div>
	 	<div class="donation desktop">
			<?php
			  if ( !empty(get_theme_mod('make_gift')) ){
					 $donationURL = wp_kses_post( get_theme_mod('make_gift') );
			     echo "<a href='$donationURL' target='_blank'>Make a Gift<span class='gift-icon'><em class='fas fa-gift'></em></a>";
				 }
			?>
		</div>

		<nav class="X-quickLinks" aria-label="Quick Links"><!--Quicklinks menu -->
		  <a href="#" class="menu-title">Quick Links</a>
			<?php wp_nav_menu( array(
				'theme_location' => 'quicklinks',
				'menu_id'        => 'quicklinks',
		                'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
		                'depth' => 1,

			) ); ?>
  	</nav>

	<div class="X-searchTrigger"> <!-- Search section -->
	   <button>
		   <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-search-thin-open', 'class' => 'icon-search-thin-open', 'id' => 'icon-search-thin-trigger', 'title' => 'Open/Close Search' ) ); ?>
	   </button>
	</div>
   <div class="X-search-form-container"><?php get_search_form(); ?></div>
 </div>

</header><!-- uf-branding -->
