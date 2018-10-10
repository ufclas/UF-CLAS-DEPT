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
      text-transform: capitalize;   
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
      text-transform: capitalize;    
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
      text-transform: capitalize;     
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
      text-transform: capitalize;      
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
      text-transform: capitalize;     
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
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol1");
             if (isset ($menu_obj->name)) 
             echo "<h2>".esc_html($menu_obj->name)."</h2>";
                wp_nav_menu( array(
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
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol2"); 
             if (isset ($menu_obj->name))
             echo "<h2>".esc_html($menu_obj->name)."</h2>";
                wp_nav_menu( array(
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
	   <?php 
             $menu_obj = wpse45700_get_menu_by_location("FooterCol3"); 
             if (isset ($menu_obj->name))
                echo "<h2>".esc_html($menu_obj->name)."</h2>";
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







<?php wp_footer(); ?>
</body>
</html>
