<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<footer aria-label="Main Footer">
<div class="footer-main">
   <div class="footer-main-wrap">
   <div class="footer-main-col-1">
      <div class="uf">
         <a href="https://clas.ufl.edu" target="_blank">
            <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'clas-connected-footer', 'class' => 'icon-college-logo-stacked' ) ); ?>
			<span class="SVGaltText">College of Liberal Arts and Sciences Homepage</span>
         </a>
      </div>

<?php
  if ( !empty(get_theme_mod('dept_address')) ):
     echo '<p class="footer-clas-address">';
     echo wp_kses_post( get_theme_mod('dept_address') );
     echo '</p>';
  else :
?>
      <p class="footer-clas-address">Set department address here.</p>

<?php
endif;
?>

      <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'journeys-begin', 'class' => 'icon-journeys-begin' ) ); ?>

      </div><!-- .footer-main-col-1 -->

   <div class="footer-main-col-2">


   <div class="footer-main-sub-col">
      <div class="footer-main-sub-col-1">
        <div class="footer-main-FooterCol1 footer-menu">
	   <?php
			$menu_obj = ufclas_emily_get_menu_by_location("FooterCol1");
			if (isset ($menu_obj->name)):
				?>
				<h2><?php echo esc_html($menu_obj->name); ?>
				<button><span class="icon-svg icon-caret"><?php echo twentyseventeen_get_svg( array( 'icon_id' => 'caret', 'class' => 'icon-caret-right' ) ); ?></span></button>
				</h2>
				<?php
			endif;

			wp_nav_menu( array(
				'theme_location' => 'FooterCol1',
				'menu_id'        => 'FooterCol1',
				'menu_class'        => 'list-unstyled footer-list>',
				'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
				'depth' => 1,
			) );
		?>
        </div>
      </div>

			<div class="footer-bottom-col-2">
				<h2 class="footer-col-2-connected">Stay Connected</h2>
				<p class="footer-connect-alumni">Connect with 55,000+ Liberal Arts and Sciences Alumni!</p>
			</div>

      <div class="footer-main-sub-col-2">
        <div class="footer-main-FooterCol1 footer-menu">
	   <?php
             $menu_obj = ufclas_emily_get_menu_by_location("FooterCol2");
			if (isset ($menu_obj->name)):
				?>
				<h2><?php echo esc_html($menu_obj->name); ?> <button><span class="icon-svg icon-caret">
				<?php echo twentyseventeen_get_svg( array( 'icon_id' => 'caret', 'class' => 'icon-caret-right' ) ); ?></span></button>
				</h2>

				<?php
			endif;

			wp_nav_menu( array(
				'theme_location' => 'FooterCol2',
				'menu_id'        => 'FooterCol2',
				'menu_class'        => 'list-unstyled footer-list>',
				'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
				'depth' => 1,
	   		) ); ?>
        </div>
      </div>

      <div class="footer-main-sub-col-3">
        <div class="footer-main-FooterCol1 footer-menu">
	   <?php
             $menu_obj = ufclas_emily_get_menu_by_location("FooterCol3");
			if (isset ($menu_obj->name)):
				?>
				<h2><?php echo esc_html($menu_obj->name); ?> <button><span class="icon-svg icon-caret">
				<?php echo twentyseventeen_get_svg( array( 'icon_id' => 'caret', 'class' => 'icon-caret-right' ) ); ?></span></button>
				</h2>
				<?php
			endif;
			wp_nav_menu( array(
			'theme_location' => 'FooterCol3',
			'menu_id'        => 'FooterCol3',
			'menu_class'        => 'list-unstyled footer-list>',
			'fallback_cb' => 'ufclas_emily_primary_menu_fallback',
			'depth' => 1,
			) ); ?>
        </div>
      </div>

   </div>

</div><!-- .footer-main-col-2 -->


   <div class="footer-main-col-3">
          <div class="uf-campaign">
             <a href="http://www.ufl.edu" target="_blank">
				 <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'uflogo-go-greater', 'class' => 'icon-uflogo-go-greater' ) ); ?>
				 <span class="SVGaltText">University of Florida Homepage</span>
             </a>
         <div class="hashtag">
            <span> #UFLibArtSci</span>
         </div>
        <div class="social">
            <ul class="social-nav">
 <?php
   // Get all the social media links. These are set on the CLAS DEPT Theme Settings page
    if ( !empty(get_theme_mod('fb')) ):
		echo '<li><a href="' . esc_url(get_theme_mod('fb')) . '" class=" icon-svg icon-social-media icon-facebook" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'facebook' )) . '<span class="SVGaltText">Share this page on Facebook</span></a></li>';
	endif;

	if ( !empty(get_theme_mod('twitter')) ):
		echo '<li><a href="' . esc_url( get_theme_mod('twitter') ) . '" class=" icon-svg icon-social-media icon-twitter" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'twitter' )) . '<span class="SVGaltText">Share this page on Twitter</span></a></li>';
	endif;

	if ( !empty(get_theme_mod('instagram')) ):
		echo '<li><a href="' . esc_url( get_theme_mod('instagram') ) . '" class=" icon-svg icon-social-media icon-instagram" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'instagram' )) . '<span class="SVGaltText">Share this page on Instagram</span></a></li>';
	endif;

	if ( !empty(get_theme_mod('youtube')) ):
		echo '<li><a href="' . esc_url( get_theme_mod('youtube') ) . '" class=" icon-svg icon-social-media icon-youtube" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'youtube' )) . '<span class="SVGaltText">Share this page on YouTube</span></a></li>';
	endif;

	if ( !empty(get_theme_mod('rss')) ):
		echo '<li><a href="' . esc_url( get_theme_mod('rss') ) . '" class=" icon-svg icon-social-media icon-rss" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'rss' )) . '<span class="SVGaltText">RSS Feed</span></a></li>';
	endif;

	if ( !empty(get_theme_mod('email')) ):
		echo '<li><a href="mailto:' . esc_attr( get_theme_mod('email') ) . '" class=" icon-svg icon-social-media icon-email" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'icon-footer-email' )) . '<span class="SVGaltText">Contact <abbr title="College of Liberal Arts and Sciences">CLAS</abbr></span></a></li>';
	endif;

	if ( !empty(get_theme_mod('linkedin')) ):
		echo '<li><a href="' . esc_url( get_theme_mod('linkedin') ) . '" class=" icon-svg icon-social-media icon-linkedin" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'icon-footer-linkedin' )) . '<span class="SVGaltText"><abbr title="College of Liberal Arts and Sciences">CLAS</abbr> LinkedIn Profile</span></a></li>';
	endif;

	?>

            </ul>
         </div>

   <p class="contact-webmaster">If you have any website questions please contact <a href="https://mediaservices.clas.ufl.edu/" title="Visit Media Services">CLAS Communications Support</a></p>

          </div>

   </div><!-- .footer-main-col-3 -->


</div>
</div><!-- .footer-main -->

<div class="footer-uf">
   <div class="footer-uf-wrap">
   <div class="footer-uf-col-1 bottom-links">
      <p>
      &#169; <?php echo current_time('Y'); ?> University of Florida  |  <a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a>  | <a href="https://mediaservices.clas.ufl.edu/"> Website Feedback</a> |  <a href ="http://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement"> UF Privacy Policy </a>
      </p>

   </div>

   <div class="footer-uf-col-2">
      <div class="footer-uf-campaign-logo">
          <a href="http://www.ufl.edu" target="_blank">
             <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'footer-icon-uf', 'class' => 'footer-icon-uf' ) ); ?>
			 <span class="SVGaltText">University of Florida Homepage</span>
          </a>
      </div>
   </div>

</div>
</div><!-- .footer-uf -->
<?php ufclas_emily_footer_bottom(); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
