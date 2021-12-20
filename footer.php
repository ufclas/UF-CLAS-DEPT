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
