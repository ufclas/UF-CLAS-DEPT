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

  <nav class="X-quickLinks" aria-label="Quick Links">
	  <a href="#" class="menu-title" aria-hidden="true">Quick Links</a>
	<?php wp_nav_menu( array(
		'theme_location' => 'quicklinks',
		'menu_id'        => 'quicklinks',
                'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
                'depth' => 1,

	) ); ?>
   </nav>

	<div class="X-searchTrigger">
	   <button>
		   <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-search-thin-open', 'class' => 'icon-search-thin-open', 'id' => 'icon-search-thin-trigger', 'title' => 'Open/Close Search' ) ); ?>
	   </button>
	</div>
   <div class="X-search-form-container"><?php get_search_form(); ?></div>
   <div class="menuBox">
	   <button><?php echo twentyseventeen_get_svg( array( 'icon_id' => 'icon-fivelines', 'class' => 'icon-menu', 'id' => 'icon-menu' ) ); ?></button>
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
