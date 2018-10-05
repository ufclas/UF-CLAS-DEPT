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
<?php wp_footer(); ?>

<style>

.hashtag {
   text-align: center;
   }

.hashtag span {
   position: relative;
   display: block;
   margin: 0 auto;
   text-transform: capitalize;
   color: #fff;
   font-size: 1.5rem;
   font-family: Gentona_Bold;
   padding-top:1rem;
   padding-bottom:1rem;
}




.footer-main p, .footer-uf p {
      color: #ffffff !important;
}

.footer-main a, .footer-uf a {
      color: #9ad2e1 !important;
}

/*__________________SOCIAL MEDIA ICONS__________________*/

.social{
   position: relative;
   display: block;
   padding: 0px;
   margin: 0px;
   text-align:center;
   padding-top: 1rem;
   padding-bottom: 1rem;
}
.social svg {
   height: 40px;
   width: 40px;
}
.social-nav {
   position: relative;
   display:block;
   padding: 0px;
   margin: 0px;
}
.social-nav ul{
   position: relative;
   display:block;
   padding: 0px;
   margin: 0px;
   list-style: none !important;
}
.social-nav li{
   position: relative;
   display: inline-block;
   margin: 0 auto;
   height: auto;
   width: auto;
   list-style: none !important;
   list-style-type: none !important;
   padding: .4rem;
}
/*__________________END__________________*/




/*-----------------------------------------HD DESKTOP FOOTER----------------------------------------*/
@media only screen and (min-width:2001px){

/*__________________STRUCTURE__________________*/
   .footer-main{
      position: relative;
      overflow: visible;
      float: left; 
      display: block;
      width: 100%;    
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book; 
   }
   .footer-main-wrap{
      position: relative;
      overflow: visible;
      display: block;
      max-width: 2000px;
      margin: 0 auto;
      padding: 0px;
      padding-left: 5.2rem;
      padding-right: 5.2rem;
      padding-top: 2rem;
      padding-bottom: 2rem;
   }
   .footer-main-col-1{ 
      width: 25%;     
      float: left;
      display: inline-block; 
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }
   .footer-main-col-2{   
      width: 50%;  
      float: left;
      display: inline-block; 
      vertical-align: top; 
      margin: 0px;
      padding: 0px;
   }
   .footer-main-col-3{ 
      width: 25%;    
      float: left;
      display: inline-block; 
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }

  /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;      
   }
      .footer-main-sub-col-1{
         width: 30%; 
         display: inline-block;
         vertical-align: top;        
         padding: 1rem;
         padding-left: 0px;
      }
      .footer-main-sub-col-2{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
         padding-right: 0px;
      }
/*__________________END__________________*/

/*__________________FOOTER SUB-MENU__________________*/

   .footer-menu h2 .icon-caret {
      display: none; 
   } 
    .footer-menu.open ul li a:hover, .footer-menu.open ul li a:active  {
      color: #9ad2e1;
   }
/*__________________END__________________*/

/*__________________ICONS__________________*/
   .icon-college-logo-stacked{          
      width: 23rem;
      height: 5.1875rem;
      padding: 0px;
      margin:0px;
   }
   .icon-uflogo-go-greater{  
      display: block;        
      width: 10.91125rem;
      height: 10.91125rem;
      margin: 0 auto;
   }
   .icon-journeys-begin{
      width: 20.833125rem;
      height: 4.125rem;
      margin: 0px;
      padding: 0px;
      fill: #ffffff;
   }
/*__________________END__________________*/

/*__________________TYPOGRAPHY__________________*/

   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #ffffff;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .list-unstyled  {
      text-transform: uppercase; 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .list-unstyled  li {
      padding-top:.2rem;
      padding-bottom:.2rem;
   }

   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px;
    }

  .footer-menu.open h2 .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg); 
    }
   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }  
   .footer-clas-address{
      padding-top: 1rem;
      padding-bottom: 3rem;
   }
/*__________________END__________________*/

}


/*-----------------------------------------LAPTOP/DESKTOP FOOTER----------------------------------------*/
@media only screen and (min-width:1025px) and (max-width :  2000px) {

/*__________________STRUCTURE__________________*/
   .footer-main{
      position: relative;
      overflow: visible;
      float: left; 
      display: block;
      width: 100%;    
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book; 
      padding: 2rem; 
   }
   .footer-main-wrap{
      position: relative;
      overflow: visible;
      display: block;
      max-width: 2000px;
      margin: 0 auto;
      padding: 0px;
   }
   .footer-main-col-1{ 
      width: 25%;     
      float: left;
      display: inline-block; 
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }
   .footer-main-col-2{   
      width: 50%;  
      float: left;
      display: inline-block; 
      vertical-align: top; 
      margin: 0px;
      padding: 0px;
      padding-left:2rem;
   }
   .footer-main-col-3{ 
      width: 25%;    
      float: left;
      display: inline-block; 
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }

  /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;      
   }
      .footer-main-sub-col-1{
         width: 30%; 
         display: inline-block;
         vertical-align: top;        
         padding: 1rem;
         padding-left: 0px;
      }
      .footer-main-sub-col-2{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
         padding-right: 0px;
      }
/*__________________END__________________*/

/*__________________FOOTER SUB-MENU__________________*/

   .footer-menu h2 .icon-caret {
      display: none; 
   } 
    .footer-menu.open ul li a:hover, .footer-menu.open ul li a:active  {
      color: #9ad2e1;
   }
   .footer-menu.open ul li a {
      line-height: 1.2 !important; border: 1px solid red;
   }

/*__________________END__________________*/

/*__________________ICONS__________________*/
   .icon-college-logo-stacked{          
      width: 23rem;
      height: 5.1875rem;
      padding: 0px;
      margin:0px;
   }
   .icon-uflogo-go-greater{  
      display: block;        
      width: 10.91125rem;
      height: 10.91125rem;
      margin: 0 auto;
   }
   .icon-journeys-begin{
      width: 20.833125rem;
      height: 4.125rem;
      margin: 0px;
      padding: 0px;
      fill: #ffffff;
   }
/*__________________END__________________*/

/*__________________TYPOGRAPHY__________________*/

   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #ffffff;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .list-unstyled  {
      text-transform: uppercase; 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .list-unstyled  li {
      padding-top:.2rem;
      padding-bottom:.2rem;
   }
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px;
    }

  .footer-menu.open h2 .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg); 
    }
   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }  
   .footer-main a {
      line-height: 1.2 !important;
   }

   .footer-clas-address{
      padding-top: 1rem;
      padding-bottom: 3rem;
   }
/*__________________END__________________*/
}
/*-----------------------------------------TABLET FOOTER----------------------------------------*/
@media only screen and (min-width:768px) and (max-width :  1024px) {
 
/*__________________STRUCTURE__________________*/
   .footer-main{
      position: relative;
      overflow: visible;
      float: left; 
      display: block;
      width: 100%;    
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book; 
      padding: 2rem; 
   }
   .footer-main-wrap{
      position: relative;
      overflow: visible;
      display: block;
      max-width: 2000px;
      margin: 0 auto;
      padding: 0px;
   }
   .footer-main-col-1{ 
      width: 50%;     
      float: left;
      display: inline-block; 
      vertical-align: middle;
      margin: 0px;
      padding: 0px;
      text-align: center;
   }
   .footer-main-col-2{   
      width: 50%;  
      float: left;
      display: inline-block; 
      vertical-align: top; 
      margin: 0px;
      padding: 0px;
      padding-left:2rem;
      display: none !important;
   }
   .footer-main-col-3{ 
      width: 50%;    
      float: left;
      display: inline-block; 
      vertical-align: middle;
      margin: 0px;
      padding: 0px;
      text-align: center;

   }

  /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;      
   }
      .footer-main-sub-col-1{
         width: 30%; 
         display: inline-block;
         vertical-align: top;        
         padding: 1rem;
         padding-left: 0px;
      }
      .footer-main-sub-col-2{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
         padding-right: 0px;
      }
/*__________________END__________________*/

/*__________________FOOTER SUB-MENU__________________*/

   .footer-menu h2 .icon-caret {
      display: none; 
   } 
    .footer-menu.open ul li a:hover, .footer-menu.open ul li a:active  {
      color: #9ad2e1;
   }
/*__________________END__________________*/

/*__________________ICONS__________________*/
   .icon-college-logo-stacked{ 
      display: block;         
      width: 15.25rem;
      height: 5.1875rem;
      padding: 0px;
      margin:0 auto;
   }
   .icon-uflogo-go-greater{  
      display: block;        
      width: 8.18375rem;
      height: 8.18375rem;
      margin: 0 auto;
   }
   .icon-journeys-begin{
      display: block;   
      width: 15.25rem;
      height: 4.125rem;
      margin:0 auto;
      padding: 0px;
      fill: #ffffff;
   }
/*__________________END__________________*/

/*__________________TYPOGRAPHY__________________*/

   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #ffffff;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .list-unstyled  {
      text-transform: uppercase; 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .list-unstyled  li {
      padding-top:.2rem;
      padding-bottom:.2rem;
   }
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px;
    }

  .footer-menu.open h2 .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg); 
    }
   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }  
   .footer-clas-address{
      padding-top: 1rem;
      padding-bottom: 3rem;
   }
/*__________________END__________________*/

}


/*-----------------------------------------MOBILE LANDSCAPE FOOTER----------------------------------------*/
@media only screen and (min-width:481px) and (max-width :  767px) {
 
/*__________________STRUCTURE__________________*/
   .footer-main{
      position: relative;
      overflow: visible;
      float: left;
      display: block;
      width: 100%;   
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book; 
      padding: 2rem; 
   }
   .footer-main-wrap{
      position: relative;
      overflow: visible;
      display: block;
      max-width: 2000px;
      margin: 0 auto;
      padding: 0px;
   }
   .footer-main-col-1{ 
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }
   .footer-main-col-2{   
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top; 
      margin: 0px;
      padding: 0px;
      padding-bottom:2rem;
      padding-top:2rem;
   }
   .footer-main-col-3{ 
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }

  /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;      
   }
      .footer-main-sub-col-1{
         width: 100%; 
         display: block;
         vertical-align: top;        
         padding: 1rem;
      }
      .footer-main-sub-col-2{
         width: 100%; 
         display: block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 100%; 
         display: block;
         vertical-align: top;
         padding: 1rem;
 
      }
/*__________________END__________________*/

/*__________________FOOTER DROP DOWN MENU__________________*/

   .ufcol1{
      position:relative;
      padding-top:22rem;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol2{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol3{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol4{
      position:absolute;
      top:0px;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
  .footer-menu{
      cursor:pointer;
      margin:0px;
    }
      .footer-menu ul {
         display: none; 
      } 
   .footer-menu ul {
      display: none;
      margin: 0;
   }
    .footer-menu ul li {
      margin: 0;
      text-transform: uppercase;  
      padding-top: .2rem;
      padding-bottom: .2rem;
   }
   .footer-menu ul li:before {
      display: none; 
   }
   .footer-menu h2 {
      border-top: 1px solid #d4edec; 
      letter-spacing: 1px;
      padding-top: 1rem !important;
      position: relative;
      text-transform: uppercase;  
   }
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px;
    }
   .footer-menu.open ul li a:hover, .footer-menu.open ul li a:active  {
      color: #9ad2e1;
   }
   .footer-menu h2 .icon-caret {  
      color: #f37021;
   }
   .footer-menu h2 svg {
      height: .8rem;
      width: .8rem;
   }
   /* Javascript first adds the .open class then this CSS rotates the arrow*/
  .footer-menu.open h2 .icon-caret-right {
      color: #f37021;
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);  
    }

/*__________________ICONS__________________*/
   .icon-college-logo-stacked{ 
      display: block;         
      width: 15.25rem;
      height: 5.1875rem;
      padding: 0px;
      margin:0 auto;
   }
   .icon-uflogo-go-greater{  
      display: block;        
      width: 8.18375rem;
      height: 8.18375rem;
      margin: 0 auto;
   }
   .icon-journeys-begin{
      display: block;   
      width: 15.25rem;
      height: 4.125rem;
      margin:0 auto;
      padding: 0px;
      fill: #ffffff;
   }
/*__________________END__________________*/

/*__________________TYPOGRAPHY__________________*/

   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #ffffff;
      font-size:1rem;
      line-height: 1.2;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .list-unstyled  {
      text-transform: uppercase; 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .list-unstyled  li {
      padding-top:.2rem;
      padding-bottom:.2rem;
   }
   .footer-clas-address{
      padding-top: 1rem;
      padding-bottom: 3rem;
      text-align: center;
   }
   .contact-webmaster{
      text-align: center;
   }
/*__________________END__________________*/
}


/*-----------------------------------------MOBILE PORTRAIT FOOTER----------------------------------------*/
@media only screen and (min-width:0px) and (max-width :  481px) {
 
/*__________________STRUCTURE__________________*/
   .footer-main{
      position: relative;
      overflow: visible;
      float: left;
      display: block;
      width: 100%;   
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book; 
      padding: 2rem; 
   }
   .footer-main-wrap{
      position: relative;
      overflow: visible;
      display: block;
      max-width: 2000px;
      margin: 0 auto;
      padding: 0px;
   }
   .footer-main-col-1{ 
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }
   .footer-main-col-2{   
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top; 
      margin: 0px;
      padding: 0px;
      padding-bottom:2rem;
      padding-top:2rem;
   }
   .footer-main-col-3{ 
      width: 100%;       
      display: block;
      clear: both;
      vertical-align: top;
      margin: 0px;
      padding: 0px;
   }

  /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;      
   }
      .footer-main-sub-col-1{
         width: 100%; 
         display: block;
         vertical-align: top;        
         padding: 1rem;
      }
      .footer-main-sub-col-2{
         width: 100%; 
         display: block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 100%; 
         display: block;
         vertical-align: top;
         padding: 1rem;
 
      }
/*__________________END__________________*/

/*__________________FOOTER DROP DOWN MENU__________________*/

   .ufcol1{
      position:relative;
      padding-top:22rem;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol2{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol3{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol4{
      position:absolute;
      top:0px;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
  .footer-menu{
      cursor:pointer;
      margin:0px;
    }
      .footer-menu ul {
         display: none; 
      } 
   .footer-menu ul {
      display: none;
      margin: 0;
   }
    .footer-menu ul li {
      margin: 0;
      text-transform: uppercase;  
      padding-top: .2rem;
      padding-bottom: .2rem;
   }
   .footer-menu ul li:before {
      display: none; 
   }
   .footer-menu h2 {
      border-top: 1px solid #d4edec; 
      letter-spacing: 1px;
      padding-top: 1rem !important;
      position: relative;
      text-transform: uppercase;  
   }
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px;
    }
   .footer-menu.open ul li a:hover, .footer-menu.open ul li a:active  {
      color: #9ad2e1;
   }
   .footer-menu h2 .icon-caret {  
      color: #f37021;
   }
   .footer-menu h2 svg {
      height: .8rem;
      width: .8rem;
   }
   /* Javascript first adds the .open class then this CSS rotates the arrow*/
  .footer-menu.open h2 .icon-caret-right {
      color: #f37021;
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);  
    }

/*__________________ICONS__________________*/
   .icon-college-logo-stacked{ 
      display: block;         
      width: 15.25rem;
      height: 5.1875rem;
      padding: 0px;
      margin:0 auto;
   }
   .icon-uflogo-go-greater{  
      display: block;        
      width: 8.18375rem;
      height: 8.18375rem;
      margin: 0 auto;
   }
   .icon-journeys-begin{
      display: block;   
      width: 15.25rem;
      height: 4.125rem;
      margin:0 auto;
      padding: 0px;
      fill: #ffffff;
   }
/*__________________END__________________*/

/*__________________TYPOGRAPHY__________________*/

   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #ffffff;
      font-size:1rem;
      line-height: 1.2;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .list-unstyled  {
      text-transform: uppercase; 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .list-unstyled  li {
      padding-top:.2rem;
      padding-bottom:.2rem;
   }
   .footer-clas-address{
      padding-top: 1rem;
      padding-bottom: 3rem;
      text-align: center;
   }
   .contact-webmaster{
      text-align: center;
   }


/*__________________END__________________*/
}

</style>
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
      <div class="footer-main-sub-col-1 footer-menu"> 
        <div class="footer-main-FooterCol1"> 
	   <?php wp_nav_menu( array(
		'theme_location' => 'FooterCol1',
		'menu_id'        => 'FooterCol1',
                'menu_class'        => 'list-unstyled footer-list>',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,
	   ) ); ?>
        </div>
      </div>

      <div class="footer-main-sub-col-2 footer-menu"> 
        <div class="footer-main-FooterCol1">  
	   <?php wp_nav_menu( array(
		'theme_location' => 'FooterCol2',
		'menu_id'        => 'FooterCol2',
                'menu_class'        => 'list-unstyled footer-list>',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,
	   ) ); ?>
        </div>
      </div>

      <div class="footer-main-sub-col-3 footer-menu"> 
        <div class="footer-main-FooterCol1"> 
	   <?php wp_nav_menu( array(
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
             <li><a href="<?php  echo $s["email"]   ?>" alt="Contact CLAS" class=" icon-svg icon-social-media icon-email"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-footer-email"></use></svg><span class="visuallyhidden">editor@clas.ufl.edu</span></a></li>

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

   <p class="contact-webmaster">If you encounter any issues with this website please contact us at <a href="mailto:editor@clas.ufl.edu" title="Contact the Webmaster">editor@clas.ufl.edu</a></p>

          </div>
      
   </div>









</div>
</div>

<style>
   .footer-uf{
      position: relative;
      overflow: visible;
      display: block;
      width:100%;
      clear: both;
      bottom: 0px;
      padding:2rem;
      background-color: #004083;
      font-size:1rem;
      color: #ffffff;

   }

   .footer-uf-wrap{
      width: 100%;
      max-width: 1950px;
      margin: 0 auto;
      display: table;
   }

.footer-uf-col-1{
   position: relative;
   float: left;
   vertical-align: middle;
   width: 80%;
}
   .bottom-links,  .bottom-links p ,  .bottom-links p a {
      font-family: Gentona_Book;
      font-size: 0.875rem;

   }

.footer-uf-col-2{
   position: relative;
   float: left;
   width: 20%;
   vertical-align: middle;
}

   .footer-icon-uf{  
      width:auto;
      height:3rem;
      display: block;
      margin-left: auto;
      margin-right: auto;
   }
/* HD DEVICES*/
@media (min-width: 2050px)  {
   .footer-icon-uf{
      max-width:20.1875rem !important; 
      max-height:3.6875rem !important; 
   }
}

/* DESKTOP DEVICES*/
@media (min-width: 768px) and (max-width : 2050px)  {
   .footer-icon-uf{
      width:20.1875rem !important; 
      max-height:3.6875rem !important; 
   }
}


.footer-uf-campaign-logo {
   float: right;
   text-align: right;
   vertical-align: middle;
}


/* Mobile images */
@media only screen and (min-width:0px) and (max-width :  850px) {
 .footer-uf{
      position: relative;
      overflow: visible;
      display: block;
      width:100%;
      clear: both;
      bottom: 0px;
      padding:2rem;
      background-color: #004083;
      font-size:.9rem;
      color: #ffffff;
   }

   .footer-uf-wrap{
      max-width: 1950px;
      margin: 0 auto;
   }
.footer-uf-col-1{
   position: relative;
   display: block;
   width: 100%;
   max-width: 100%;
   padding: 0px;
   vertical-align: middle;
   text-align: center; 
}
.footer-uf-col-2{
   position: relative;
   display: block;
   width: 100%;
   max-width: 100%;
   padding: 0px;
   vertical-align: middle;
 
    
}

.footer-uf-campaign-logo {
   float: none;
   display: block;
   text-align: center;
   vertical-align: middle;
   padding-top: 1rem;
   padding-bottom: 1rem;
}





}



.contact-webmaster a {

    color: #f19d64;



}

</style>
<div class="footer-uf">
   <div class="footer-uf-wrap">
   <div class="footer-uf-col-1 bottom-links"> 
      <p>
      &#169; 2018 University of Florida  |  <a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a>  | <a href="mailto:editor@clas.ufl.edu" alt="Email use feedback related to this website"> Website Feedback</a> |  <a href ="http://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement" alt="Online/Internet Privacy Statement" /> UF Privacy Policy </a> 
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





<script>
/* Search Form */
   var searchBox = document.querySelector(".CLAS-searchTrigger");
   searchBox.onclick = function(e) { 
      e.preventDefault();
      e.stopPropagation(); 
      var searchIcon = document.getElementById('icon-search-thin-trigger'); 
      if (searchIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-search-close' ) {
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-close");  
         searchIcon.classList.toggle('icon-search-thin-close');
         searchIcon.classList.remove('icon-search-thin-open');
      }
      else {
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-thin-open");
         searchIcon.classList.remove('icon-search-thin-close');
         searchIcon.classList.toggle('icon-search-thin-open');


      }

      var searchContainer = document.querySelector(".CLAS-search-form-container");
      searchContainer.classList.toggle('show-search-form');
      var searchField = document.querySelector(".CLAS-search-form-container .search-form .search-field");
      earchField.focus();
      searchField.select();   
   };


/* Menu System */
      var el = document.getElementsByClassName('menuBox')[0];
      clickerFn = function(e) {     
 
      var nav = document.getElementsByClassName('navigation-top')[0];  
      var rowThree = document.getElementsByClassName('CLAS-menu')[0];  
      rowThree.classList.toggle('showMenu');    
      var menuIcon = document.getElementById('icon-menu');
      if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {
         //Global variable to keep track of how far the document has been scrolled
         var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
         // Figure out how far down the page has been scrolled by the user
         var doc = document.documentElement;
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         //document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         //document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  

/* Drop Down Menu System */
      var g = document.getElementsByClassName("menu-item-has-children");
      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
         g[k].getElementsByTagName("a")[0].onclick = function(e) {
           // e.preventDefault();
           // e.stopPropagation();   
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              this.parentNode.classList.toggle('open');     
               }
            }//end mq
      }
    



</script>



















<script>
/* Menu System */
      var el = document.getElementsByClassName('menuBox')[0];
      clickerFn = function(e) {     
 
      var nav = document.getElementsByClassName('navigation-top')[0];  
      var rowThree = document.getElementsByClassName('X-menu')[0];  
      rowThree.classList.toggle('showMenu');    
      var menuIcon = document.getElementById('icon-menu');
      if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {
         //Global variable to keep track of how far the document has been scrolled
         var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
         // Figure out how far down the page has been scrolled by the user
         var doc = document.documentElement;
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  

/* Drop Down Menu System */
      var g = document.getElementsByClassName("menu-item-has-children");
      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
         g[k].getElementsByTagName("a")[0].onclick = function(e) {
           // e.preventDefault();
           // e.stopPropagation();   
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              this.parentNode.classList.toggle('open');     
               }
            }//end mq
      }
    


      var g = document.getElementsByClassName("footer-menu");

      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
       g[k].onclick = function(e) {
          

            const mq = window.matchMedia( "(max-width: 900px)" ); 
         if (mq.matches) {
            
            this.classList.toggle('open'); 
 
            if(this.getElementsByTagName('ul')[0].style.display == 'block'){
              this.getElementsByTagName("svg")[0].classList.remove('icon-caret-right'); 
               e.preventDefault();
              // this.getElementsByTagName('ul')[0].style.display = 'none'; 
               e.stopPropagation(); 

             }  
             else{
            this.getElementsByTagName("svg")[0].classList.add('icon-caret-right'); 
               //this.getElementsByTagName('ul')[0].style.display = 'block';
               this.getElementsByTagName('ul')[0].classList.add('animate'); 
               this.getElementsByTagName('ul')[0].classList.add('open'); 
             }

    
       }

   }//end mq
}


/* Search Form */
   var searchBox = document.querySelector(".X-searchTrigger");
   searchBox.onclick = function(e) { 
      e.preventDefault();
      e.stopPropagation(); 
      var searchIcon = document.getElementById('icon-search-thin-trigger'); 
      if (searchIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-search-close' ) {
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-close");  
         searchIcon.classList.toggle('icon-search-thin-close');
         searchIcon.classList.remove('icon-search-thin-open');
      }
      else {
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-thin-open");
         searchIcon.classList.remove('icon-search-thin-close');
         searchIcon.classList.toggle('icon-search-thin-open');


      }

      var searchContainer = document.querySelector(".X-search-form-container");
      searchContainer.classList.toggle('show-search-form');
      var searchField = document.querySelector(".X-search-form-container .search-form .search-field");
      earchField.focus();
      searchField.select();   
   };





</script>


<script>
/* INDEX */

// PROTOTYPE: SlideShow 
   // METHOD: setSize
   // METHOD: setupSlides
   // METHOD: setupControls
   // METHOD: moveLeft
   // METHOD: moveRight
   // METHOD: changeImage
   // METHOD: addKeyControls

// PROTOTYPE: SlideShow extends SlideShow
   // METHOD: changeImage

// PROTOTYPE: Boxes 
   // METHOD: move

// PROTOTYPE: Boxes_Menu extends Boxes


/*------PROTOTYPE Slides------*/
// Implements a slideshow
function SlideShow(ID) {
   // CHECKS
   if(ID == null){
      console.error("Slides Module: Missing ID."); 
      return 0;
   }

   // Check if a string was passed
   if(typeof(ID) == "string"){
      this.ID = ID;
      this.mainDiv=document.getElementById(this.ID); 
      if(this.mainDiv == null){
         console.error("Slides Module: Could not find: " + this.ID); 
         return 0;
      }
    }
    else{
    // Check if an object was passed 
      this.mainDiv=ID;
      if(document.body.contains(ID)){
         console.error("Slides Module: Could not find Slide module in document."); 
         return 0;
      }
   }

   // Variables
   this.urlLength=0;               // Number of slide image URLs
   this.position = 0;              // Current slide position  
   this.previousSlide = 0;         // Previous slide position 
   this.slideShowStarted=false;    // Track if slideshow was started
   this.url = new Array();         // Store slide image URLs here 
   this.imageW = new Array();         // Store slide image width here 
   this.imageH = new Array();         // Store slide image height here 
   this.slideDesc = new Array();   // Store slide description here  
   this.magnifyObjs = new Array(); // Store slide image Magnification Objects here

   // Selectors
   this.slideDivs = this.mainDiv.getElementsByClassName('slide');
   this.slideDescDivs = this.mainDiv.getElementsByClassName('slideDesc'); 
   this.images = this.mainDiv.getElementsByTagName("img");

    this.left = this.mainDiv.getElementsByClassName('prev')[0];
    this.right = this.mainDiv.getElementsByClassName('next')[0];

   // STRUCTURE of Divs in document
   //  __SlideShow__
   // |     --slide       |
   // |       --slideDesc | 

    // Check if STRUCTURE is present in document
   //if(this.slideDivs.length==0 || this.slideDescDivs.length==0 || this.images.length==0){
   //   console.error("Slides Module: Detected missing structures in document. Refer to module for structure definition."); 
   //   return 0;
  // }


  

   // Set Defaults
   this.scrollLeft=0; 
   this.scrollTop=0; 

   // Trigger the dynamicResize() method whenever slides need to be re-sized
  // window.addEventListener("load", this.dynamicResize.bind(this), false);
   //window.addEventListener("orientationchange", this.dynamicResize.bind(this));
   //window.addEventListener("resize", this.dynamicResize.bind(this));





   // CSS for slideDiv is set in changeImage()  
   // Execute these once the prototype is created:

   var self=this; // 'this' is not preserved in callbacks, so send a copy to the callback functions

   this.moveSlides = setInterval(function(){ self.moveRight() }, 5000);

   this.left.onclick = function() {self.moveLeft();self.addKeyControls(self);  clearInterval(self.moveSlides);};
   this.right.onclick = function() {self.moveRight();self.addKeyControls(self);  clearInterval(self.moveSlides);};
   this.setupSlides();
  





   // All is well!
   console.log('Slides Module instantiated with ID:'+ID);
};


   // METHOD: onLoad()
   SlideShow.prototype.onLoad = function() {
      this.getImageDim.bind(this);
      this.dynamicResize.bind(this);      
   }

  // METHOD: setupControls()
   SlideShow.prototype.setupControls = function() {



      console.log("Setting up controls for " + this.ID); 
   };  



   // METHOD: moveLeft()
   SlideShow.prototype.moveLeft = function() { 
      if (this.position==0){  
         this.position=this.numSlides;
      }
      else{
         this.position--;
      }
     this.changeImage(this.position);

   };

   // METHOD: moveRight()
   SlideShow.prototype.moveRight = function() {
      if (this.position==this.numSlides){
         this.position=0;
      }
      else{      
         this.position++;
      }

      this.changeImage(this.position);
  
   
   };

   // METHOD: addKeyControls(self)
   SlideShow.prototype.addKeyControls = function(self) {
      document.onkeydown = function(e) {
         e = e || window.event;
         if (e.keyCode == '38') { // up arrow       
         }
         else if (e.keyCode == '40') { // down arrow
         }
         else if (e.keyCode == '37') { // left arrow      
            self.moveLeft(); 
         }
         else if (e.keyCode == '39') {       
            self.moveRight(); // right arrow
         }
      }
   };

   // METHOD: changeImage()
   SlideShow.prototype.changeImage = function() {    
     // Show Image         
         this.slideDivs[this.previousSlide].classList.add("fadeOut");
         this.slideDivs[this.previousSlide].style.display="none"; // default 
         this.previousSlide=this.position;
         this.slideDivs[this.position].classList.add("fadeIn");
         this.slideDivs[this.position].style.display="block";
   };



   // METHOD: setupSlides()
   SlideShow.prototype.setupSlides = function() {   
      // Get Image URLs
      for (var i = 0; i < this.images.length; i++){ 
         this.url[i]= this.images[i].src;  
         //this.magnifyObjs[i] = new Magnify(this.images[i]);  
      }  
      // Hide slide descriptions
      for (var i = 0; i < this.slideDivs.length; i++){ 
         this.slideDivs[i].style.display="none";
      } 
      this.numSlides=(this.slideDivs.length-1);
      this.changeImage(this.position); // Setup first slide 
      console.log("Set up slides for " + this.ID); 
   };

  // Module name is the class name of the div
function findModules(ModuleName){
   this.ModuleName=ModuleName;
   // Find Module in document (modules are designated by class name)
   var e = document.getElementsByClassName(ModuleName); // returns an array
   if(e.length==0){
      console.log("Could not find module: " + this.ModuleName + " in document."); 
      return false;
    }
   for (var i = 0; i < e.length; i++){ 
      // Now get the unique instances of each module,
      // that is, get the ID of the div
      ModuleID=e[i].getAttribute("id"); 
      if(ModuleID=='' || ModuleID==null)
         console.error("Missing/wrong ID for Module:" + this.ModuleName); 

      // If a module was found, set it up
      if (ModuleID!=''){
         switch(ModuleName) {
            case 'slides': 
              var a = new SlideShow(ModuleID); 
            break;
            case 'SlideShowCover': 
              var b = new SlideShowCover(ModuleID); 
            break;
            case 'MenuTopLeft': 
               var d = new MenuTopLeft(ModuleID); 
            break;
            case 'MenuTopRight': 
               var e = new MenuTopRight(ModuleID); 
            break;
            case 'Boxes_Menu': 
               var f = new Boxes_Menu(ModuleID); 
            break;
            case 'Drag': 
               var g = new Drag(ModuleID); 
            break;
            case 'Magnify': 
               var h = new Magnify(ModuleID); 
            break;
            default:
               console.log("Could not any matching module for:" + this.ModuleName); 
         }        
      }
      else
         console.log("Could not find ID for Module:" + this.ModuleName); 
   } 
}


// SCRIPTS STARTS HERE: Module name is the class name of the div. Find modules on the page.
findModules('slides');
//findModules('SlideShowCover');

</script>

<script>
      var e = document.getElementsByClassName("X-tile");
      var sublist;
      var self=this; 
      for (var k = 0; k < e.length; k++) {     
          const mq = window.matchMedia( "(max-width: 768px)" ); 
         if (mq.matches) {
           // ONCLICK: Set up click event: toggle sublist 
         e[k].getElementsByClassName("X-tile-img")[0].onclick = function(e) {     
            //this.parentNode.getElementsByClassName('X-tile-desc')[0].classList.toggle('X-tile-desc-show'); 

         }

         } 
      }

</script>


<script>


  

/*
function Menu() {  
   //
   this.toggleSubMenu();
}

   // METHOD: toggleSubMenu
   Menu.prototype.toggleSubMenu = function() {

      var e = document.getElementsByClassName("menu-item-has-children");
      var sublist;
      var self=this; 
      for (var k = 0; k < e.length; k++) {     
         // Hide sublists
      

         const mq = window.matchMedia( "(max-width: 1300px)" ); 
         if (mq.matches) {
           
    e[k].getElementsByTagName('ul')[0].style.display = 'none';    






         // ONCLICK: Set up click event: toggle sublist 
         e[k].getElementsByTagName("a")[0].onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();   
            //this.parentNode.getElementsByTagName('ul')[0].style.display = 'block'; 

            //this.getElementsByTagName("svg")[0].classList.add('icon-angle-down-toggle'); 
            //document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
            // Show Submenus
            if(this.parentNode.getElementsByTagName('ul')[0].style.display == 'none'){
           
               var n = this.parentNode.parentNode.firstChild;
               var skipMe = this.parentNode;
               // Hide all previous top-level drop down menus
               // If the grandparent is the main menu

               if (this.parentNode.parentNode.classList.contains('menu')){              
                  for ( ; n; n = n.nextSibling ) { 
                     if ( n.nodeType == 1 && n != skipMe){
                       var g= n.getElementsByTagName('ul'); 
                       if (g.length>0) {
                          g[0].style.display = 'none';
                          //n.getElementsByTagName("svg")[0].classList.remove('icon-angle-down-toggle');                        
                          // Hide any sub-menus that the user might have opened
                          var x = n.getElementsByClassName("sub-menu");
                          var i;
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = 'none';
                          } 
                          // Remove down arrows for any sub-menus that the user might have opened
                          var z = n.getElementsByTagName("svg");
                          var j;
                          for (j = 0; j < z.length; j++) {
                            // z[j].classList.remove('icon-angle-down-toggle'); 
                          } 
                       }
                    }
 
                  }
               } 


               this.parentNode.getElementsByTagName('ul')[0].style.opacity = '1';  
               this.parentNode.getElementsByTagName('ul')[0].style.visibility = 'visible';  
               this.parentNode.getElementsByTagName('ul')[0].style.display = 'block'; 
                   
             }
            // Hide Submenus
            else{          
            
               //this.getElementsByTagName("svg")[0].classList.remove('icon-angle-down-toggle');
                 //document.getElementsByTagName("body")[0].classList.remove('fixedPosition');  
               this.parentNode.getElementsByTagName('ul')[0].style.opacity = '0'; 
               this.parentNode.getElementsByTagName('ul')[0].style.visibility = 'none';
               this.parentNode.getElementsByTagName('ul')[0].style.display = 'none'; 

    
            }
         }


         } 



      }
   };

 var e = new Menu(); 

*/

</script>


<script>

/*
    $(".dropdown li").on('mouseenter mouseleave', function (e) {

        // Get the computed style of the body element
        var cStyle = document.body.currentStyle||window.getComputedStyle(document.body, "");

        // Check the overflow and overflowY properties for "auto" and "visible" values
        var hasVScroll = cStyle.overflow == "visible" 
                 || cStyle.overflowY == "visible"
                 || (hasVScroll && cStyle.overflow == "auto")
                 || (hasVScroll && cStyle.overflowY == "auto");
                 
        if (hasVScroll) {
            $(this).addClass('edge');
        } else {
            $(this).removeClass('edge');
        }
    });

*/


/* EDGE DETECTION */

      var g = document.getElementsByClassName("menu-item-has-children");

      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
       g[k].onmouseover = function(e) {
          var cStyle = document.body.currentStyle||window.getComputedStyle(document.body, "");     
        // Check the overflow and overflowY properties for "auto" and "visible" values
            var elm = this.getElementsByTagName("ul")[0];
            var l = elm.offsetWidth; 
            var w = this.offsetLeft;
                   
            var docW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
           
            var isEntirelyVisible = (l + w <= docW);
                 
        if (!isEntirelyVisible) { 
            elm.classList.add('X-menu-edge');

        } else {
            elm.classList.remove('X-menu-edge');
   
        }

    
       }
}



</script>


<script>






/*
var clickCount = 0;
   var searchBox = document.querySelector(".X-searchBox .search-form .search-submit");
      searchBox.onclick = function(e, clickCount) { 

    if (this.clickCount == 0){
        event.preventDefault(); 
        this.parentNode.classList.add('X-searchBox-open');
        this.clickCount++;
    }   
    else{
        return true;
    }
  

};

*/

/*
var w = window;
var d = document;
this.scrollStarted= true;


      w.addEventListener( 'scroll', function(scrollStarted) { 

        if ( w.innerHeight + w.scrollY === d.height ) {
            alert("You have hit the bottom!");
        }

        if ( w.scrollY > 50 && this.scrollStarted) { 
           this.scrollStarted = false; 
           var Xmenu = document.getElementsByClassName("X-menu-horizontal")[0]; 
          // Xmenu.style.border = '1px solid red';



           var g = document.getElementsByClassName("X-menu-horizontal")[0];   
           g.classList.add('hide-X-menu-horizontal');     
           g.classList.remove('show-X-menu-horizontal'); 
           var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
           XmenuBox.classList.remove('hide-menuBox'); 
 
        }

        if ( w.scrollY < 50 && !this.scrollStarted) {           
           var g = document.getElementsByClassName("X-menu-horizontal")[0];   
           g.classList.remove('hide-X-menu-horizontal');
           g.classList.add('show-X-menu-horizontal');      
           this.scrollStarted= true;  
           //Xmenu.style.border = '1px solid blue';
           var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.remove('show-menuBox');
           XmenuBox.classList.add('hide-menuBox'); 
 
        }


      });


*/
/* Detect User Scroll 
    (function( w, d ) {
      w.addEventListener( 'scroll', function() {
        if ( w.innerHeight + w.scrollY === d.height ) {
            alert("You have hit the bottom!");
        }
      });
    })( window, document );
*/
</script>

<script type="text/javascript">


   // var e = document.getElementById("vcv-editor");
   //   alert(e);


</script>



<?php wp_footer(); ?>
</body>
</html>
