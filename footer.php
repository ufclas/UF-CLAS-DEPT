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
         <a href="http://www.ufl.edu" target="_blank"> 
            <?php echo twentyseventeen_get_svg( array( 'icon_id' => 'college-logo-stacked', 'class' => 'icon-college-logo-stacked' ) ); ?>
			<span class="SVGaltText">College of Liberal Arts and Sciences Homepage</span>
         </a>
      </div> 

 <?php 
   $s = get_theme_mods();
   if ( !empty($s['dept_address']) ): 
      echo '<p class="footer-clas-address">';  
      echo esc_html( $s['dept_address'] );
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
    if ( !empty($s['fb']) ): 
		echo '<li><a href="' . esc_url($s['fb']) . '" class=" icon-svg icon-social-media icon-facebook" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'facebook' )) . '<span class="SVGaltText">Share this page on Facebook</span></a></li>';
	endif;
	
	if ( !empty($s['twitter']) ): 
		echo '<li><a href="' . esc_url( $s['twitter'] ) . '" class=" icon-svg icon-social-media icon-twitter" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'twitter' )) . '<span class="SVGaltText">Share this page on Twitter</span></a></li>';
	endif;
	
	if ( !empty($s['instagram']) ): 
		echo '<li><a href="' . esc_url( $s['instagram'] ) . '" class=" icon-svg icon-social-media icon-instagram" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'instagram' )) . '<span class="SVGaltText">Share this page on Instagram</span></a></li>';
	endif;
	
	if ( !empty($s['youtube']) ): 
		echo '<li><a href="' . esc_url( $s['youtube'] ) . '" class=" icon-svg icon-social-media icon-youtube" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'youtube' )) . '<span class="SVGaltText">Share this page on YouTube</span></a></li>';
	endif;
	
	if ( !empty($s['rss']) ): 
		echo '<li><a href="' . esc_url( $s['rss'] ) . '" class=" icon-svg icon-social-media icon-rss" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'rss' )) . '<span class="SVGaltText">RSS Feed</span></a></li>';
	endif;

	if ( !empty($s['email']) ): 
		echo '<li><a href="' . esc_url( $s['email'] ) . '" class=" icon-svg icon-social-media icon-email" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'icon-footer-email' )) . '<span class="SVGaltText">Contact <abbr title="College of Liberal Arts and Sciences">CLAS</abbr></span></a></li>';
	endif;
	
	if ( !empty($s['linkedin']) ): 
		echo '<li><a href="' . esc_url( $s['linkedin'] ) . '" class=" icon-svg icon-social-media icon-linkedin" target="_blank">' . twentyseventeen_get_svg( array( 'icon_id' => 'icon-footer-linkedin' )) . '<span class="SVGaltText"><abbr title="College of Liberal Arts and Sciences">CLAS</abbr> LinkedIn Profile</span></a></li>';
	endif;

	?>

            </ul>
         </div>

   <p class="contact-webmaster">If you encounter any issues with this website please contact us at <a href="mailto:webmaster@clas.ufl.edu" title="Contact the Webmaster">webmaster@clas.ufl.edu</a></p>

          </div>
      
   </div><!-- .footer-main-col-3 -->


</div>
</div><!-- .footer-main -->

<div class="footer-uf">
   <div class="footer-uf-wrap">
   <div class="footer-uf-col-1 bottom-links"> 
      <p>
      &#169; 2018 University of Florida  |  <a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a>  | <a href="mailto:webmaster@clas.ufl.edu"> Website Feedback</a> |  <a href ="http://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement"> UF Privacy Policy </a> 
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
