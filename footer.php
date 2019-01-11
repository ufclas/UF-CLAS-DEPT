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


             <?php if ( has_nav_menu( 'social' ) ) : ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
             <?php 
             endif;
             ?>



	</div><!-- .site-content-contain -->
</div><!-- #page -->
<div class="footer-main">
   <div class="footer-main-wrap">
   <div class="footer-main-col-1"> 
      <div class="uf"  role="SVG" tabindex="0" aria-label="College of Liberal Arts and Sciences Homepage">
         <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="College of Liberal Arts and Sciences Homepage"> 
            <svg class="icon-college-logo-stacked" ><use xlink:href="#college-logo-stacked"></use></svg><span class="SVGaltText">College of Liberal Arts and Sciences Homepage</span>
         </a>
      </div> 

 <?php 
   $s = get_option('my_option_name');
   if ( !empty($s["dept_address"]) ): 
      echo '<p class="footer-clas-address">';  
      echo $s["dept_address"];
      echo '</p>'; 
   else :
?>
      <p class="footer-clas-address">Set department address here.</p>    

<?php 
endif;
?>

      <svg class="icon-journeys-begin"><use xlink:href="#journeys-begin"></use></svg>
    
      </div>

   <div class="footer-main-col-2"> 


   <div class="footer-main-sub-col">
      <div class="footer-main-sub-col-1"> 
        <div class="footer-main-FooterCol1 footer-menu"> 
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol1");
             if (isset ($menu_obj->name)) 
             echo "<h2>".esc_html($menu_obj->name).' <span class="icon-svg icon-caret"><svg class="icon-caret-right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span>'."</h2>";
                wp_nav_menu( array(
		'theme_location' => 'FooterCol1',
		'menu_id'        => 'FooterCol1',
                'menu_class'        => 'list-unstyled footer-list>',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,
	   ) ); ?>
        </div>
      </div>

      <div class="footer-main-sub-col-2"> 
        <div class="footer-main-FooterCol1 footer-menu">  
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol2"); 
             if (isset ($menu_obj->name))
             echo "<h2>".esc_html($menu_obj->name).' <span class="icon-svg icon-caret"><svg class="icon-caret-right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span>'."</h2>";
                wp_nav_menu( array(
		'theme_location' => 'FooterCol2',
		'menu_id'        => 'FooterCol2',
                'menu_class'        => 'list-unstyled footer-list>',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,
	   ) ); ?>
        </div>
      </div>

      <div class="footer-main-sub-col-3"> 
        <div class="footer-main-FooterCol1 footer-menu"> 
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol3"); 
             if (isset ($menu_obj->name))
                echo "<h2>".esc_html($menu_obj->name).' <span class="icon-svg icon-caret"><svg class="icon-caret-right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span>'."</h2>";
                wp_nav_menu( array(
		'theme_location' => 'FooterCol3',
		'menu_id'        => 'FooterCol3',
                'menu_class'        => 'list-unstyled footer-list>',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,
	   ) ); ?>
        </div>
      </div>

   </div>

</div>


   <div class="footer-main-col-3"> 
          <div class="uf-campaign">
             <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida" > 
              <svg class="icon-uflogo-go-greater" ><use xlink:href="#uflogo-go-greater"></use></svg><span class="SVGaltText">University of Florida Homepage</span>
             </a>
         <div class="hashtag">
            <span> #UFLibArtSci</span>
         </div>
        <div class="social">
            <ul class="social-nav">
 <?php 
   // Get all the social media links. These are set on the CLAS DEPT Theme Settings page
   $s = get_option('my_option_name');


   if ( !empty($s["fb"]) ): 
?>
               <li><a href="<?php  echo $s["fb"] ?>" alt="Share this page on Facebook" class=" icon-svg icon-social-media icon-facebook" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg><span class="visuallyhidden">Facebook</span><span class="SVGaltText">Share this page on Facebook</span></a></li>  

<?php
endif;
 
   if ( !empty($s["twitter"]) ): 
?>
               <li><a href="<?php  echo $s["twitter"] ?>" alt="Share this page on Twitter" class=" icon-svg icon-social-media icon-twitter" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg><span class="visuallyhidden">Twitter</span><span class="SVGaltText">Share this page on Twitter</span></a></li> 

<?php
endif;

   if ( !empty($s["instagram"]) ): 
?>
              <li><a href="<?php  echo $s["instagram"] ?>" alt="Share this page on Instagram" class=" icon-svg icon-social-media icon-instagram" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use></svg><span class="visuallyhidden">Instagram</span><span class="SVGaltText">Share this page on Instagram</span></a></li>

<?php
endif;

   if ( !empty($s["youtube"]) ): 
?>
             <li><a href="<?php  echo $s["youtube"]   ?>" class=" icon-svg icon-social-media icon-youtube"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg><span class="visuallyhidden">YouTube</span></a></li>

<?php
endif;


   if ( !empty($s["rss"]) ): 
?>
             <li><a href="<?php  echo $s["rss"]   ?>" alt="RSS feed" class=" icon-svg icon-social-media icon-rss"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rss"></use></svg><span class="visuallyhidden">RSS</span></a></li>

<?php
endif;
?>

<?php
   if ( !empty($s["email"]) ): 
?>
             <li><a href="<?php  echo $s["email"]   ?>" alt="Contact CLAS" class=" icon-svg icon-social-media icon-email"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-footer-email"></use></svg><span class="visuallyhidden">webmaster@clas.ufl.edu</span></a></li>

<?php
endif;
?>

<?php
   if ( !empty($s["linkedin"]) ): 
?>
             <li><a href="<?php  echo $s["linkedin"]   ?>" alt="CLAS Linkedin Profile" class=" icon-svg icon-social-media icon-linkedin"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-footer-linkedin"></use></svg><span class="visuallyhidden">CLAS Linked In Profile</span></a></li>

<?php
endif;
?>

            </ul>
         </div>

   <p class="contact-webmaster">If you encounter any issues with this website please contact us at <a href="mailto:webmaster@clas.ufl.edu" title="Contact the Webmaster">webmaster@clas.ufl.edu</a></p>

          </div>
      
   </div>


</div>
</div>

<div class="footer-uf">
   <div class="footer-uf-wrap">
   <div class="footer-uf-col-1 bottom-links"> 
      <p>
      &#169; 2018 University of Florida  |  <a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a>  | <a href="mailto:webmaster@clas.ufl.edu" alt="Email use feedback related to this website"> Website Feedback</a> |  <a href ="http://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement" alt="Online/Internet Privacy Statement" /> UF Privacy Policy </a> 
      </p>

   </div>

   <div class="footer-uf-col-2"> 
      <div class="footer-uf-campaign-logo"  role="SVG" tabindex="0" aria-label="University of Florida Homepage">
          <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida"> 
             <svg id="footer-icon-uf" class="footer-icon-uf"><use xlink:href="#footer-icon-uf"></use></svg><span class="SVGaltText">University of Florida Homepage</span>
          </a>
      </div>       
   </div>

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
