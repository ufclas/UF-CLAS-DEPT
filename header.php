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

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>


<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet"> 



<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
<style>


/*

   ---!!!--- MINIFY THEME ON PRODUCTION---!!!--- 

   0.   UNIVERSAL SETTINGS
   1.   FONTS
   2.   TYPOGRAPHY
   3.   BRANDING & MENU (>1024px)
   4.   BRANDING & MENU (between 768px and 1024px)
   5.   BRANDING & MENU (between 0px and 767px)
   6.   PAGE FORMATTING 
   7.   FORMS
   x.   DEPARTMENT FOOTER
   x.   UNIVERSITY OF FLORIDA FOOTER
 
*/

/* UNIVERSAL SETTINGS */
html, body{
   margin:0px;
   padding:0px;
   width:100%;
   height: 100%;
   font-family: "Surveyor Text A", "Surveyor Text B";
   font-style: normal;
   font-weight: 400;
   -webkit-font-smoothing: antialiased;
   -webkit-text-size-adjust: 100%;
 }

html{
   margin:0px;
   padding:0px;
   }
body{
   margin:0px;
   padding:0px;   
}
/*  The single most important setting  */
 * {
    box-sizing: border-box;
}

   .bg-texture{
    <?php echo "background: #faf8f1 url('".get_stylesheet_directory_uri()."/assets/images/bg-texture.png');"; ?>
   }

   .center{
      text-align:center;
   }

   :focus {outline:none;}
   ::-moz-focus-inner {border:0;}

/* FONTS  */
@font-face{
   font-family:'Glyphicons Halflings';
    <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>glyphicons-halflings-regular.woff') format('woff');
   font-weight: normal;
   font-style: normal;
}
@font-face {
    font-family: 'Gentona_Thin';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Thin.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_ThinItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_ThinItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_ExtraLight';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_ExtraLight.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_ExtraLightItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_ExtraLightItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_Light';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Light.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_LightItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_LightItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_Book';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Book.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_BookItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_BookItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_Medium';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Medium.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_MediumItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_MediumItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_SemiBold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_SemiBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_SemiBoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_SemiBoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_Bold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Bold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_BoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_BoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_ExtraBold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_ExtraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_ExtraBoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_ExtraBoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_Heavy';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_Heavy.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Gentona_HeavyItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>gentona/Gentona_HeavyItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}


@font-face {
    font-family: 'Quadon_Thin';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Thin.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_ThinItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_ThinItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Light';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Light.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_LightItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_LightItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Regular';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_RegularItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_RegularItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Medium';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Medium.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_MediumItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_MediumItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Bold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Bold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_BoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_BoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_ExtraBold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_ExtraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_ExtraBoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_ExtraBoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_UltraBold';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/quadon/Quadon_UltraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_UltraBoldItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_UltraBoldItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Black';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Black.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_BlackItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_BlackItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_Heavy';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_Heavy.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Quadon_HeavyItalic';
     <?php echo "src: url('".get_stylesheet_directory_uri().'/fonts/web-fonts/'; ?>quadon/Quadon_HeavyItalic.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

/* TYPOGRAPHY */

h1 {
   font-family: "Gentona_ExtraBold", Arial,sans-serif;
   font-weight: normal;
   font-size: 2.25rem;
   font-style: normal;
   line-height: 2.6875rem;
   letter-spacing: 1px;
   color: #004083;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}



/* Mobile */
@media only screen and (min-width:1700px) {

   h1 {
      font-family: "Gentona_ExtraBold", Arial,sans-serif;
      font-weight: normal;
      font-size: 3rem;
      font-style: normal;
      line-height: 1.2;
      letter-spacing: 1px;
      color: #004083;
      margin: 0px;
      padding: 0px;
      padding-top: 1rem;
      padding-bottom: 1rem;
      display: block;
      clear: both;
   }

}







h2 {
   font-family: "Quadon_Bold", Arial, sans-serif;
   font-weight: normal;
   font-size: 1.5rem;
   font-style: normal;
   line-height: 1.75rem;
   color: #414141;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
/* Mobile H2 */
@media only screen and (min-width:1700px) {


h2 {
   font-family: "Quadon_Bold", Arial, sans-serif;
   font-weight: normal;
   font-size: 2.1rem;
   font-style: normal;
   line-height: 1.2;
   color: #414141;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}

}

/* Magazine Article Sub-heading and byline */
.fi h2, .post-template-single-featured-story h2 {


    font-weight: normal;
    padding: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    margin: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    color: #00529b;
    font-family: "Quadon_Medium",Georgia,serif;
    letter-spacing: .5px;
    padding-top: .25rem;
    padding-bottom: .25rem;
    font-size: 1.25rem;
    line-height: 1.6rem;


}
.fi .author {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;

}
.author, .byline {
    font-family: 'Gentona_BookItalic', Arial, sans-serif;
    font-size: 1.1rem;
    line-height: 125%;
    color: #000000;
    clear: both;
    display: block;
}

.date {
    font-family: "Surveyor Text A", "Surveyor Text B";
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-style: italic;
}
/* OVERRIDE WRAP MARGINS */
.noTopBottomMargin{
   padding-top:0px !important;
   padding-bottom: 0px !important;
}
/* Delte this later on */
.inline-img-left p {
    font-family: 'Gentona_BookItalic', Arial, sans-serif;
    font-size: .9rem;
    line-height: 1rem;
    color: #000;
    text-align: left;
    height: auto;
}

#secondary h2 {
   font-family: "Quadon_Bold", Arial, sans-serif;
   font-weight: normal;
   font-size: 1.2rem;
   font-style: normal;
   line-height: 1.2;
   color: #666;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}

h2 a {
   color:#333333;
}
h2 a:hover,h2 a:active  {
   color:#c24700;
}
h3 {
   font-family: "Surveyor Text A", "Surveyor Text B";
   font-weight: 700;
   font-style: italic;
   font-size: 1.5rem;
   line-height: 1.8125rem;
   color: #00337A;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
h3.quote1 {
   font-family: "Quadon_ExtraBoldItalic", Arial, sans-serif;
   font-weight: normal;
   font-style: normal;
   font-size: 1.375rem;  
   line-height: 1.625rem;
   color: #DD661E;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
h3.quote2 {
   font-family:  "Gentona_BoldItalic", Arial, sans-serif;
   font-weight: normal;
   font-style: normal;
   font-size: 1.5rem;
   line-height: 1.8125rem;
   color: #666666;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
h4 {
   font-family: "Gentona_Book", Arial, sans-serif;
   font-weight: 500;
   font-size: 1.25rem;
   font-style: normal;
   line-height: 1.5rem;
   color: #585656;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
h5 {
   font-family: "Quadon_Book", Arial, sans-serif;
   font-weight: 500;
   font-size: 1rem;
   font-style: normal;
   line-height: 1.25rem;
   color: #A63F00;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}
h6 {
   font-family: "Gentona_Book", Arial, sans-serif;
   font-weight: 300;
   font-size: 0.875rem;
   font-style: normal;
   line-height: 1.0625rem;
   color: #414141;
   margin: 0px;
   padding: 0px;
   padding-top: 1rem;
   padding-bottom: 1rem;
   display: block;
   clear: both;
}




p {
   font-family: "Surveyor Text A", "Surveyor Text B";
   font-style: normal;
   font-weight: 400;
   line-height: 1.5;
   display:block;
   margin:0;
   padding-top:.5rem;
   padding-bottom:.5rem;
   /* Keyword values */
   overflow-wrap: normal;
   overflow-wrap: break-word;
}


/* HD Desktop p */
@media only screen and (min-width:2000px) {
   p {
      font-family: Gentona_Book;
      font-size: 1.125rem; 
      color: #4A4A4A;   
      font-style: normal;
      font-weight: 300;
      line-height: 1.5;
      letter-spacing: .5px;
      display:block;
      margin:0;
      padding-top:.5rem;
      padding-bottom:.5rem;
      /* Keyword values */
      overflow-wrap: normal;
      overflow-wrap: break-word;
   }
}
/* Laptop/ Desktop p */
@media only screen and (min-width:1024px) and (max-width : 2000px) {

   p {
      font-family: "Surveyor Text A", "Surveyor Text B";
      font-size: 1.125rem;
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      display:block;
      margin:0;
      padding-top:.5rem;
      padding-bottom:.5rem;
      /* Keyword values */
      overflow-wrap: normal;
      overflow-wrap: break-word;
   }
}

/* Laptop/ Desktop p */
@media only screen and (min-width:768px) and (max-width : 1023px) {

   p {
      font-family: "Surveyor Text A", "Surveyor Text B";
      font-size: 1.125rem;
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      display:block;
      margin:0;
      padding-top:.5rem;
      padding-bottom:.5rem;
      /* Keyword values */
      overflow-wrap: normal;
      overflow-wrap: break-word;
   }
}



body, button, input, select, textarea {
    font-size: 18px;
    font-size: 1.125rem;
}

p.smallCopy, .smallCopy{
   font-family: "Surveyor Text A", "Surveyor Text B";
   font-size: 1rem;
   line-height: 1.1875rem;
   font-style: normal;
   font-weight: 300;
   color: #000000;
   display: block;
   margin: 0;
   padding-top: .5rem;
   padding-bottom: .5rem;
}
p.largeCopy, .largeCopy{
   font-family: "Gentona_Book", Arial, sans-serif;
   font-size: 1.125rem;
   line-height: 1.5rem;
   font-style: normal;
   font-weight: 300;
   color: #4A4A4A;
   display:block;
   margin: 0;
   padding-top: .5rem;
   padding-bottom: .5rem;
}
p.largeCopy2, .largeCopy2{
   font-family: "Gentona_Book", Arial, sans-serif;
   font-size: 1.25rem;
   line-height: 1.5rem;
   font-style: normal;
   font-weight: 300;
   color: #4A4A4A;
   display:block;
   margin: 0;
   padding-top: .5rem;
   padding-bottom: .5rem;
}

blockquote, blockquote p {
    font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
    letter-spacing: 1px;
    padding-top: auto;
    font-size: 1.5rem;
    line-height: 140%;
    color: #bc581a;
    margin-bottom: 0px;
    margin-top: 0px;
}

   .fixedPosition {
       position: fixed;
    }
.orangetxt-capitalize {
    font-family: Gentona_Bold, Arial;
    color: #bc581a;
    text-transform: uppercase;
}

span.photo-credit::before {
    content: " ";
    display: inline;
   
}
.photo-credit {
    background-image: url('assets/images/icons/camera2.svg');
    background-repeat: no-repeat;
    padding-left: 1.2rem;
    background-size: 1rem 1rem;
    display: inline;
    line-height: 1.1rem;
    height: 1.1rem;
    color: #000000;
    background-position: 0% 50%;
    font-family: 'Gentona_Book', Arial, sans-serif;
    text-transform: uppercase;
    font-size: .7rem;
}


.entry-content a:focus, .entry-content a:hover, .entry-summary a:focus, .entry-summary a:hover, .comment-content a:focus, .comment-content a:hover, .widget a:focus, .widget a:hover, .site-footer .widget-area a:focus, .site-footer .widget-area a:hover, .posts-navigation a:focus, .posts-navigation a:hover, .comment-metadata a:focus, .comment-metadata a:hover, .comment-metadata a.comment-edit-link:focus, .comment-metadata a.comment-edit-link:hover, .comment-reply-link:focus, .comment-reply-link:hover, .widget_authors a:focus strong, .widget_authors a:hover strong, .entry-title a:focus, .entry-title a:hover, .entry-meta a:focus, .entry-meta a:hover, .page-links a:focus .page-number, .page-links a:hover .page-number, .entry-footer a:focus, .entry-footer a:hover, .entry-footer .cat-links a:focus, .entry-footer .cat-links a:hover, .entry-footer .tags-links a:focus, .entry-footer .tags-links a:hover, .post-navigation a:focus, .post-navigation a:hover, .pagination a:not(.prev):not(.next):focus, .pagination a:not(.prev):not(.next):hover, .comments-pagination a:not(.prev):not(.next):focus, .comments-pagination a:not(.prev):not(.next):hover, .logged-in-as a:focus, .logged-in-as a:hover, a:focus .nav-title, a:hover .nav-title, .edit-link a:focus, .edit-link a:hover, .site-info a:focus, .site-info a:hover, .widget .widget-title a:focus, .widget .widget-title a:hover, .widget ul li a:focus, .widget ul li a:hover {
    color: #00529b;
    -webkit-box-shadow: none;
    box-shadow: none;
}

a { text-decoration:none;  outline: 0; outline: none;   -webkit-tap-highlight-color: transparent; tap-highlight-color: transparent;}

.entry-content a:link {color: #00529b; }
.entry-content a:visited {color: #c24700; }
.entry-content a:hover {color: #c24700; }
.entry-content a:focus {color: #c24700; }
.entry-content a:active {color: #c24700; }
.entry-content ul{
   list-style-type: square;
   margin:0px;
   }

.entry-content li, .entry-content ol {
   font-family: "Surveyor Text A", "Surveyor Text B";
   font-size: 1.125rem;
   line-height: 1.5rem;
   font-style: normal;
   font-weight: 400;
   color: #000000;
   margin: 0;
   padding-top: .3rem;
   padding-bottom: .3rem;
}
.entry-content ul li {
    /* Text color */
    color: black;
    list-style-type: none;
}

.entry-content ul li:before {
    position: relative;
    /* Unicode bullet symbol */
      content: "\25BA";
    /* Bullet color */
    color:#9a9a9a;
    float: left;
    margin: 0 0 0 -1.5rem;
    width: 1em;
    font-size:.8rem;
    font-family:Quadon_Bold;
    font-weight:normal; 
}
/*

I would rather use these bullets
padding-right: 8px;
margin-left: 2px;
content: "•";
color: #f37021;
*/

/* IMAGES AND CAPTIONS */

/** IMAGES/Captions **/

img{
   max-width:100%;
   height:auto;
   margin-left: auto;
   margin-right: auto; 
   margin: 0 auto; 
}

svg {
   max-width: 100%;
   width: 40px;
   height: 40px;

}

   .home-featured-image{
      display:block;
      clear: both;
      margin: 0 auto;
      margin-bottom: 0px;

      margin: 0px;
      padding: 0px;
      display: block;
      clear:both;
      width: 100%;
      

   } 




.fullwidth{
   width:100%;
}
.size-auto, 
.size-full,
.size-large,
.size-medium,
.size-thumbnail {
	max-width: 100%;
	height: auto;
}

/* IMAGE Alignments */
.alignnone{
   margin:0 auto;
   display: block;
   }
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
	
	margin-top: 1rem;
}
.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}
.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

/* Mobile images */
@media only screen and (min-width:0px) and (max-width :  768px) {
   .alignleft , .alignright, .profile-picture{
      display: block !important;
      clear: both !important;
      float:none;
      margin-left: auto;
      margin-right: auto;
   }
}

/* Mobile images */
@media only screen and (min-width:0px) and (max-width :  481px) {
   img.alignleft,
   img.alignright,  .alignright , .alignleft {
      float: none;
      margin: 0 auto;
      display:block;
      text-align:center;  
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto; 
	padding-top: 1.25rem;
	padding-bottom: 1.25rem;
     width:100% !important;
   }
   .profile-picture{
      width:100%;    
      padding-bottom:1rem;
   }
   .media-picture{
      width:100%;    
      padding-bottom:1rem;
   }
}

@media only screen and (min-width:667px){
   .media-picture{
      width:50%;    
      padding:2rem;
      padding-left:0rem;
      padding-bottom:1rem;
      padding-top:0rem;
   }
}

/* CAPTIONS */
figure{
   display:block;
   position:relative;
   margin:0 auto;
   margin-top:1.5rem; 
   margin-bottom:1.5rem; 
}

figure img {
   max-width:100%;


   }

figcaption{
   margin:0 auto;
   display:block;
   width:100%;
   text-align:center;
   margin:0 auto;
}


@media only screen and (min-width:1024px) {

   .wrap + figure > figcaption{  
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding: 0px;
      padding-left:2rem;  
      padding-right:2rem;
   }
}
@media only screen and (min-width:768px) and (max-width : 1024px) {
   .wrap + figure > figcaption{  
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding: 0px;
      padding-left:2rem;  
      padding-right:2rem;
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {
   .wrap + figure > figcaption{  
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding: 0px;
      padding-left:2rem;  
      padding-right:2rem;
   }

}

@media only screen and (min-width:0px) and (max-width : 481px) {
   .wrap + figure > figcaption{  
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding: 0px;
      padding-left:1rem;  
      padding-right:1rem;
   }

}








.gallery-caption {
   text-indent: 0;
   padding:0;
   margin:0;
   font-family: 'Gentona_BookItalic', Arial, sans-serif;
   font-size: .8rem;
   line-height: 1.2rem;
   padding-top:.5rem;
   padding-bottom:.5rem;
   color: #000;
   text-align:left;
}
.wp-caption img[class*="wp-image-"] {
	margin-left: auto;
	margin-right: auto;
}
.wp-caption{
   max-width:100%;
}


.wp-caption-text {
      text-indent: 0;
      padding:0; 
      font-family: 'Gentona_BookItalic', Arial, sans-serif;
      font-size: .8rem;
      line-height: 1.2rem;
      padding-top:.3rem;
      padding-bottom:.3rem;
      color: #000;
      text-align:left;
}


/* CAPTIONS: DESKTOP DEVICES*/
@media (min-width: 1024px)  {
   .wp-caption-text{ 
      padding-top:.3rem;
      padding-bottom:.3rem;
      padding-left:0rem;
      padding-right:0rem;
   }
}

/* CAPTIONS: iPad */
@media only screen and (min-width: 768px) and (max-width : 1024px) {
   .wp-caption-text{ 
      padding-top:.2rem;
      padding-bottom:.2rem;
      padding-left:0rem;
      padding-right:0rem;
   }
}

/* CAPTIONS: iPhone - Landscape */
@media only screen and (min-width: 481px) and (max-width : 768px)  {
   .wp-caption-text{ 
      padding-top:.2rem;
      padding-bottom:.2rem;
      padding-left:0rem;
      padding-right:0rem;
   }

}

/* CAPTIONS: iPhone - Portrait */
@media only screen and (min-width: 0px) and (max-width : 481px)  {
   .wp-caption-text{ 
      padding-top:.2rem;
      padding-bottom:.2rem;
      padding-left:0rem;
      padding-right:0rem;
   }

}





.size-auto, 
.size-full,
.size-large,
.size-medium,
.size-thumbnail {
	max-width: 100%;
	height: auto;
}




/* SIDEBAR FORMATTING */
#secondary ul{
   list-style-type: square;
   margin:0px;
   }

#secondary li, #secondary ol {
   font-family: "Gentona_Medium";
   font-style: normal;
   font-weight: 500;
   font-size: 1.125rem;
   line-height: 1.3125rem;
   color: #00529B;
   margin: 0;
   padding-top: .3rem;
   padding-bottom: .3rem;
}
#secondary ul li {
    /* Text color */
    color: black;
    list-style-type: none;
}

#secondary ul li:before {
    position: relative;
    /* Unicode bullet symbol */
      content: "\02192";
    /* Bullet color */
        color: #F04E23;
    float: left;
    margin: 0 0 0 -1.3rem;
    width: 1em;
    font-size:1.1rem;
    font-family:Quadon_Bold;
    font-weight:normal; 
}







 #page a, #secondary a {
   color:#337ab7;
   text-decoration:none;
}
#page a:focus, #page a:hover, #secondary a:focus, #secondary a:hover {
    color: #23527c;
}
.page-title{
   z-index:100;
   margin:0px;
   padding:0px;
}
/* UNIVERSAL SETTINGS */
   button.search-submit{
      background-color: #00337A;
      cursor: pointer;
   }

   #secondary button.search-submit{
      background-color: #00337A;
      cursor: pointer;
   }


.sticky {
    top: 0;
    position: fixed;
}

/*-----------------------------------------HD DESKTOP UF BRANDING----------------------------------------*/
@media only screen and (min-width:2000px){
 /* Main div box  */
   .X-header {
      position: fixed;
      top:0px;
      width: 100%;

      height: 7.8125rem;
      display: block;
      padding:0px;
      margin:0 auto;
      clear: both;   
      z-index:2;
      transition: all .2s ease-in-out;
      overflow: visible;

   }
.X-header::before,
.X-header::after {
  background: black;
  
}
   .X-header-shrink{


   }
      /* UF Logo -- floated above two rows  */
      .X-header .uf{

         position:absolute;
         top:0px;
         left:0px;
         overflow:hidden;
         z-index:10;
      }
      /* UF Logo svg */
        .X-header .icon-uflogo{          
            width: 7.8125rem;
            height: 7.8125rem;
            z-index: 10;
         }

 /* Row One -- COLLEGE Name */
   .X-header .college {    
      width:100%;
      position:relative;
      height: 3.90625rem;/* fallback */ 
      padding-left: 9.4375rem;     
      display:table; 
      clear:both;
      background-color:rgba(0, 64, 131,1);
      text-align:left;
      z-index:2;

   }  
   .X-header .college a{
  
     display:table-cell;
     vertical-align:middle;

   }
      /* UF Logo svg */
        .X-header .icon-college-logo{          


         }
   .college-logo-desktop{
      display: block;
   }
   .college-logo-tablet{
      display: none;
   }
   .college-logo-mobile{
      display: none;
   }


     .college-logo-desktop{
        display:block; 

        z-index: 2;

     }
     .college-logo-desktop svg{
            width: 37.8125rem;
            height: 2.5rem;

     }


    /* SEARCH */
   .mobileSearch{
      display:none;
   }
    .X-searchTrigger{
      position:absolute;
      top:0px;
      right:0rem; 
      width: 3.9375rem;  
      height: 3.9375rem;  
      display:table;    
      text-align:center;
      padding:0px;
      margin:0px;
      cursor:pointer;
      background-color:#00337A;
      z-index:3;
    }
   .X-searchTrigger span{
      position:relative;
       max-width: 2.2rem;  
      max-height:2.2rem; 
      display:table-cell;
      vertical-align:middle;
   }


    .X-search-form-container{
      position:absolute;
      right:-4000px;
      transition: all 0.3s ease;
      text-align:center;
      height:100%;
      height:100vh;
      width:100%; 
    }
   .show-search-form{
      z-index:1000 !important;
      transition: all 0.3s ease;
      display:block;  
      top:7.8125rem; 
      left:0px;
      right:0px;
      text-align:center;
      margin:0 auto;
      border-top:rgb(0,32,65);
      height:100%;
      height:100vh;
      width:100%;
      overflow:visible;
      overflow-y: scroll  !important; 
      -webkit-overflow-scrolling: touch;
      right:0px !important;
      background-color:rgba(0, 64, 131,.7);
   }
    .X-search-form-container .search-form{
       position:relative;
        margin:0 auto;
        margin-top:15rem;
        width:50%;
        height:3rem;
    }
    .X-search-form-container .search-field{
        height: 3rem;
        border-top:0px;
        border-left:0px;
        border-right:0px;
        border-bottom:2px solid #000000;
        color:#fcfcfc !important;
        font-size:2rem;
        background-color:transparent;
        line-height:1;
    }
   .X-searchBox .search-form label{ 
      color:#fcfcfc !important;
      margin:0px;
      padding:0px;     
   }
    .X-searchBox input[type="search"]{
        color:#fcfcfc; 
   }
   .X-search-form-container .search-form .search-submit{
      top:0px;
      bottom:0px;
      right:0px;
      margin:0px;
      padding:0px;
      width: 3rem;
      height: 3rem;
      background-color:transparent;
      border: 0px;
   }
   .X-searchBox .search-form .search-submit{
      fill:#ffffff;
      color:#000000;
      position:absolute;
      padding:1rem;
      margin:0px;
      bottom:0px;
      top:0px;    
      background-color: #00337A;
      width:7.8125rem;
      height:7.8125rem;
      cursor: pointer;
      border: 0px;
   }
    .X-quickLinks{
      fill:#ffffff;
      color:#ffffff;
      position:absolute;
      padding:1rem;
      margin:0px;
      bottom:0px;
      top:0px;
      right:3.9375rem;
      background-color: #13599a;
      width:10.9375rem;
      height:3.9375rem;
      z-index:2;
      font-family:Quadon_Medium;
      font-size:1.25rem;
      text-align:left;
      display:table;
      overflow:visible;
      z-index:200;   
   }
   .X-quickLinks span{
      display:table-cell;
      vertical-align:middle;
      cursor:pointer;
      text-align: center;
   } 
   .X-quickLinks div ul {
      visibility:none;
      opacity:0;
      position:absolute;
      right:-1000px;
       padding:0px;    
       margin:0px;
       width:130%;
      background-color: #13599a;
   }




   .X-quickLinks div ul li{
      position:relative;
      display: block;
      margin:0;
      padding:0px;      
      vertical-align:middle;   
      text-align:left;    
      background-color: #13599a; 
   }
   .X-quickLinks div ul li a{
      display:block;
      width:100%;
      height:100%;
     color:#ffffff;
      padding: 1rem 1rem 1rem 1rem;
     font-size:.9rem;
     text-transform:uppercase;
     font-family:Gentona_Medium;     
   }
   .X-quickLinks div ul li a:hover{
      background-color:#eae5d7;
     color:#c24700;

     
   }
   .X-quickLinks:hover > div ul{
      display:block;
      right:0px;
      top:3.9375rem;
      visibility:visible;
      opacity:1;
      transition: all 0.3s ease 0s;
   }




  .X-quickLinks:hover > div ul li ul, .X-quickLinks div ul li ul {
      visibility:none;
      opacity:0;
      display:none !important;
   }



   .icon-search, #icon-search, svg.icon.icon-search {
      color:#ffffff;
      fill:#ffffff;
      height: 24px;
      top: -2px;
      width: 24px;
   }

  .icon-search :hover,  #icon-search :hover, svg.icon.icon-search :hover{
      color:#f45a1d;
      fill:#f45a1d;
   }

   .icon-search-thin-open{
      width: 1.5rem;
      height: 1.5rem;
   }
   .icon-search-thin-close{
      width: 2rem;
      height:2rem;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {
      width:100%;    
      height:3.875rem;
      top:3.9375rem;
      display:block; 
      clear:both;
      background-color:#ffffff;
      z-index:1;
      border-bottom:1px solid #efede6;   
   }
   .X-header .department  a {
      padding-left:9.4375rem;   
   }

   /*  Strike Bar   */
   .strikeRight {
    display: block;
    text-align: center;
    overflow: hidden;
    white-space: nowrap;
    height: 3.875rem;
   }
   .strikeRight {
      margin: 0px;  
      padding-right: 1rem;
      margin-right: 1rem;
   }
   .strikeRight > span {
       position: relative;
      display: inline-block;
   }
   .strikeRight {
      text-align: left;
      white-space: nowrap;
   }
   .strikeRight > span::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 800%;
      height: 2px;
      background: rgb(244, 90, 29);
   }
   .strikeheader {
     font-family: Quadon_Medium;
     font-size:1.625rem;
     color:rgba(0, 64, 131, 1) !important;
     display: table-cell;
     height:3.875rem;
     vertical-align: middle;
     letter-spacing:1px;
     word-wrap: break-word;
   }
   .strikeRight > span::after {
      left: 100%;
      margin-left: 1rem;
   }
   .strikeRight > span::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 800%;
      height: 2px;
      background: rgb(250, 70, 22);
   }
   .fixedPosition {
       position: fixed;
    }

    /* Row Three -- MENU */

   .fixedPosition {
      position: fixed;
   }

   /* MENU BOX */
   .menuBox{ 
      position:absolute;
      right:0px;

      top:0px;
      display:block;
      width: 7.8125rem;/* fallback */
      max-width:7.8125rem;;
      height: 7.8125rem;/* fallback */    
      max-height:7.8125rem;;
      float: right;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      background-color: #4c87b5;
      z-index:1000 !important;
      display:none;
   }
  .menuBox svg{ 
      position: relative;
      display: table-cell;
      vertical-align: middle;
   }
   .hide-menuBox{
      right:-200px;
      transition: all 1s ease 0s;  
   }
   .show-menuBox{
      right:0px;
      transition: all 1s ease 0s;  
   }
      .icon-menu{
         width:2rem; 
         height:2rem; 
         max-height:2rem;
         max-width:2rem;
         margin-bottom:.5rem;
         position:relative;
         fill:rgba(255,255,255,1);
      }
   .icon-menu-fivelines{
      max-width:2.5rem;
      max-height:2.5rem;
       text-align:center;
      fill: rgb(225,225,225);
      margin:0 auto;
      position: relative;
   }
   .icon-menu-fivelines :hover {

   }
   .icon-close {
      display:block;
      max-width:2.5rem;
      max-height:2.5rem;
      text-align:center;
      fill:#4c87b5;
      margin:0 auto;
      position: relative;
   }
   .contract-X-header{
      transition: all 1s ease 0s; 
   }

    .X-menu nav {
      display:block;
      clear:both;
      z-index:1;
      display:block;
      width:100%;
      height:3.90625rem;
       background-color: #F7F4EB; 
   }
     .X-menu nav > div {
       display:block;   
       padding:0px;    
       margin:0px;    
    }
    .X-menu nav > div > ul {  
      display: block; 
      padding:0px;    
      margin:0px;
      background-color: #F7F4EB; 
      list-style-type: none;
      text-align:center;
      margin:0 auto;
      text-align:justify;
      padding-left:2rem;
      padding-right:2rem;
      height:3.90625rem;       
   }
   .X-menu nav > div > ul:after {
      top:-50px;
      display:inline-block;
      width:100%;
      content:'';
      padding:0px;
      margin:0px;
   }
   .X-menu nav > div > ul > li{   
      display:inline-block;
      vertical-align:middle;  
      padding:0px;    
      margin:0px;
      text-align:center;
      word-break: break-word;
      background-color: #F7F4EB; 
      margin:0 auto; 
   }
    .X-menu nav > div > ul > li:hover, .X-menu nav > div > ul > li:active  {
  
   }
    .X-menu nav > div > ul > li > a{  
      display:inline-block;  
      vertical-align:middle;    
      color: #00529b;
      font-family: Gentona_Bold;
      font-size: 1rem; 
      letter-spacing: 2px;  
      text-transform: uppercase; 
      word-wrap: break-word; 
      text-align:center;
      height:3.8rem;
      line-height:1; 
   }
   .X-menu nav > div > ul > li > a:hover {
    color: #00529b !important;
   }

   /* UNDERLINE FIRST LEVEL MENUS */

    .X-menu nav > div > ul > li > a > span {
      display:inline-block;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }
    .main-menu-wrap li.hover span::after {
      -webkit-transition: width 0.2s ease-out;
      transition: width 0.2s ease-out;
      width: 100%;
   }
    .X-menu nav > div > ul > li:hover span::after, .X-menu nav > div > ul > li:active span::after{
      -webkit-transition: width 0.2s ease-out;
      transition: width 0.2s ease-out;
      width: 100%;
   }
    .X-menu nav > div > ul > li span::after{
      background: url('images/main-menu-hover.png') repeat-x left center;
      content: '';
      bottom: -10px;
      display: block;
      height: 5px;
      left: 0;
      position: absolute;
      -webkit-transform-origin: center center;
      transform-origin: center center;
      width: 0;
   }

   .js .menu-toggle, .js .dropdown-toggle,  .dropdown-toggle  {
    display: none;
}


   /* Sub Menus */  
    .X-menu nav > div > ul > li > ul {
     word-break: break-word;
     list-style-type:none;
     padding:0px;
     margin:0px;
     position: absolute;
      /* Hide Sub Menu */      
      list-style: none;    
      width: auto;
      background: #faf8f1;     
      opacity: 0;
      visibility: hidden;
      /* POSITION Sub Menu BELOW the header and top-level menu */ 
      top:11.5625rem; 
      max-height: 80%;
      max-height: 70vh;
      padding-bottom: 2rem;

   }

   /*
    .X-menu nav ul li:last-child ul, .X-menu nav ul li:last-child ul {   
      left:auto;
      right:0;
   }
   */

   /* SHOW Sub Menu */ 
    .X-menu nav ul li:hover ul, .X-menu nav ul li:active ul {  
      opacity:1;
      visibility: visible;
      transition: all 0.2s ease 0s;
      z-index:10;
      background: #faf8f1;
      min-width:16rem;
   }

    .X-menu-edge{
      left:auto;
      right:0 !important;
      margin-right:3rem;
   }
  /*
    .X-menu nav ul li:last-child:hover ul, .X-menu nav ul li:last-child:active ul {   
      left:auto;
      right:0;
   }
  */
    .X-menu nav > div > ul > li > ul > li{
      word-break: break-word;
      padding-left:1rem;            
   }
    .X-menu nav > div > ul > li > ul > li > a {
      word-break: break-word;
      color: #00529b;
      border-top: 1px solid #eae5d7;
      display: block;
      font-family: Quadon_Medium, "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 1rem;   
      text-align: left;
      text-transform: none;
      padding:1rem;
   }

    .X-menu nav > div > ul > li > ul > li > a:hover {
      color:#c24700;
   }
    .icon-angle-down{
      display: inline-block;
      height: 1rem;
      width: 1rem;     
      display: none;
   }
    .icon-angle-down-toggle {
      -webkit-transform: rotate(360deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(360deg); /* IE 9 */
      transform: rotate(360deg);   
      transition: all 0.33s ease 0s;  

   }


    .X-menu-wrap{
       max-width:1240px;
       margin:0 auto;
       display:block;
       clear:both;
   }
   /* Indent Sub Menus */  
    .X-menu nav > div > ul > li > ul > li > ul{

      list-style-type: square;
      list-style: square;
      padding-left:3rem;
      padding-top:0px;
      padding-bottom:0px;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li{
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }

    .X-menu nav > div > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;
     }

   /* Indent Sub-sub Menus */  

    .X-menu nav > div > ul > li > ul > li > ul  > li > ul {

      list-style-type: square;
      list-style: square;
      padding-left:3rem;
      padding-top:0px;
      padding-bottom:0px;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li{
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;

     }

   /* Indent Sub-sub-sub Menus */  
    .X-menu nav > div > ul > li > ul > li > ul  > li > ul  > li > ul {

      list-style-type: square;
      list-style: square;
      padding-left:3rem;
      padding-top:0px;
      padding-bottom:0px;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > ul > li {
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;

     }


}





/*-----------------------------------------LAPTOP/DESKTOP UF BRANDING----------------------------------------*/
@media only screen and (min-width:1025px) and (max-width : 2000px) {
   /* Main div box  */
   .X-header {
      position: fixed;
      top:0px;
      width: 100%;
      height:9.375rem;
      display: block;
      padding:0px;
      margin:0 auto;
      clear: both;   
      z-index:2;
      transition: all .2s ease-in-out;
      overflow: visible;

   }
.X-header::before,
.X-header::after {
  background: black;
  
}
   .X-header-shrink{


   }
      /* UF Logo -- floated above two rows  */
      .X-header .uf{
         width: 8.125rem;
         height: 8.125rem;
         position:absolute;
         top:0px;
         left:0px;
         overflow:hidden;
         z-index:10;
      }
      /* UF Logo svg */
        .X-header .icon-uflogo{          
            width: 8.125rem;
            height: 8.125rem; 
            z-index: 10;
         }



 /* Row One -- COLLEGE Name */
   .X-header .college {    
      width:100%;
      position:relative;
      height: 5rem;/* fallback */ 
      padding-left: 10.125rem;   
      display:table; 
      clear:both;
      background-color:rgba(0, 64, 131,1);
      text-align:left;
      z-index:2;

   }  
   .X-header .college a{
  
     display:table-cell;
     vertical-align:middle;

   }
      /* UF Logo svg */
        .X-header .icon-college-logo{          
            width: 33.275rem;
            height: 2.2rem;
            z-index: 2;
         }

   .college-logo-desktop{
      display: block;
   }
   .college-logo-tablet{
      display: none;
   }
   .college-logo-mobile{
      display: none;
   }

     .college-logo-desktop{
        display:block; 
            width: 33.275rem;
            height: 2.2rem;
        z-index: 2;
     }
     .college-logo-desktop svg{
        display:block; 
        display:block; 
            width: 33.275rem;
            height: 2.2rem;

     }


    /* SEARCH */
   .mobileSearch{
      display:none;
   }
    .X-searchTrigger{
      position:absolute;
      top:0px;
      right:0rem; 
      width: 3.125rem; 
      height:3.125rem; 
      display:table;    
      text-align:center;
      padding:0px;
      margin:0px;
      cursor:pointer;
      background-color:#00337A;
      z-index:3;
    }
   .X-searchTrigger span{
      position:relative;
       max-width: 2.2rem;  
      max-height:2.2rem; 
      display:table-cell;
      vertical-align:middle;
   }


    .X-search-form-container{
      position:absolute;
      right:-4000px;
      transition: all 0.3s ease;
      text-align:center;
      height:100%;
      height:100vh;
      width:100%; 
    }
   .show-search-form{
      z-index:1000 !important;
      transition: all 0.3s ease;
      display:block;  
      top: 5rem; 
      left:0px;
      right:0px;
      text-align:center;
      margin:0 auto;
      border-top:rgb(0,32,65);
      height:100%;
      height:100vh;
      width:100%;
      overflow:visible;
      overflow-y: scroll  !important; 
      -webkit-overflow-scrolling: touch;
      right:0px !important;
      background-color:rgba(0, 64, 131,.7);
   }
    .X-search-form-container .search-form{
       position:relative;
        margin:0 auto;
        margin-top:15rem;
        width:50%;
        height:3rem;
    }
    .X-search-form-container .search-field{
        height: 3rem;
        border-top:0px;
        border-left:0px;
        border-right:0px;
        border-bottom:2px solid #000000;
        color:#fcfcfc !important;
        font-size:2rem;
        background-color:transparent;
        line-height:1;
    }
   .X-searchBox .search-form label{ 
      color:#fcfcfc !important;
      margin:0px;
      padding:0px;     
   }
    .X-searchBox input[type="search"]{
        color:#fcfcfc; 
   }
   .X-search-form-container .search-form .search-submit{
      top:0px;
      bottom:0px;
      right:0px;
      margin:0px;
      padding:0px;
      width: 3rem;
      height: 3rem;
      background-color:transparent;
      border: 0px;
   }
   .X-searchBox .search-form .search-submit{
      fill:#ffffff;
      color:#000000;
      position:absolute;
      padding:1rem;
      margin:0px;
      bottom:0px;
      top:0px;    
      background-color: #00337A;
      width:6.25rem;
      height:6.25rem;
      cursor: pointer;
      border: 0px;
   }
    .X-quickLinks{
      fill:#ffffff;
      color:#ffffff;
      position:absolute;
      padding:0;
      margin:0px;
      bottom:0px;
      top:0px;
      right:3.125rem;
      background-color: #13599a;
      width:10.9375rem;
      height:3.125rem;
      z-index:2;
      font-family:Quadon_Medium;
      font-size:1.25rem;
      text-align:left;
      display:table;
      overflow:visible;
      z-index:200;   
   }
   .X-quickLinks span{
      display:table-cell;
      vertical-align:middle;
      cursor:pointer;
      text-align: center;
   } 
   .X-quickLinks div ul {
      visibility:none;
      opacity:0;
      position:absolute;
      right:-1000px;
       padding:0px;    
       margin:0px;
       width:130%;
      background-color: #13599a;
   }




   .X-quickLinks div ul li{
      position:relative;
      display: block;
      margin:0;
      padding:0px;      
      vertical-align:middle;   
      text-align:left;    
      background-color: #13599a; 
   }
   .X-quickLinks div ul li a{
      display:block;
      width:100%;
      height:100%;
     color:#ffffff;
      padding: 1rem 1rem 1rem 1rem;
     font-size:.9rem;
     text-transform:uppercase;
     font-family:Gentona_Medium;     
   }
   .X-quickLinks div ul li a:hover{
      background-color:#eae5d7;
     color:#c24700;

     
   }
   .X-quickLinks:hover > div ul{
      display:block;
      right:0px;
      top:3.125rem;
      visibility:visible;
      opacity:1;
      transition: all 0.3s ease 0s;
   }




  .X-quickLinks:hover > div ul li ul, .X-quickLinks div ul li ul {
      visibility:none;
      opacity:0;
      display:none !important;
   }



   .icon-search, #icon-search, svg.icon.icon-search {
      color:#ffffff;
      fill:#ffffff;
      height: 24px;
      top: -2px;
      width: 24px;
   }

  .icon-search :hover,  #icon-search :hover, svg.icon.icon-search :hover{
      color:#f45a1d;
      fill:#f45a1d;
   }

   .icon-search-thin-open{
      width: 1.5rem;
      height: 1.5rem;
   }
   .icon-search-thin-close{
      width: 2rem;
      height:2rem;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {
      width:100%;    
      height:3.125rem;
      top:3.125rem;
      display:block; 
      clear:both;
      background-color:#ffffff;
      z-index:1;
      border-bottom:1px solid #efede6;   
   }
   .X-header .department  a {
      padding-left: 10.125rem;     
   }

   /*  Strike Bar   */
   .strikeRight {
    display: block;
    text-align: center;
    overflow: hidden;
    white-space: nowrap;
    height: 3.125rem;
   }
   .strikeRight {
      margin: 0px;  
      padding-right: 1rem;
      margin-right: 1rem;
   }
   .strikeRight > span {
       position: relative;
      display: inline-block;
   }
   .strikeRight {
      text-align: left;
      white-space: nowrap;
   }
   .strikeRight > span::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 800%;
      height: 2px;
      background: rgb(244, 90, 29);
   }
   .strikeheader {
     font-family: Quadon_Medium;
     font-weight:500;
     font-size:1.8rem;
     color:rgba(0, 64, 131, 1) !important;
     display: table-cell;
     height:3.125rem;
     vertical-align: middle;
     letter-spacing:1px;
     word-wrap: break-word;
   }
   .strikeRight > span::after {
      left: 100%;
      margin-left: 1rem;
   }
   .strikeRight > span::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 800%;
      height: 2px;
      background: rgb(250, 70, 22);
   }
   .fixedPosition {
       position: fixed;
    }

    /* Row Three -- MENU */

   .fixedPosition {
      position: fixed;
   }

   /* MENU BOX */
   .menuBox{ 
      position:absolute;
      right:0px;

      top:0px;
      display:block;
      width: 6.25rem;/* fallback */
      max-width:6.25rem;;
      height: 6.25rem;/* fallback */    
      max-height:6.25rem;;
      float: right;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      background-color: #4c87b5;
      z-index:1000 !important;
      display:none;
   }
  .menuBox svg{ 
      position: relative;
      display: table-cell;
      vertical-align: middle;
   }
   .hide-menuBox{
      right:-200px;
      transition: all 1s ease 0s;  
   }
   .show-menuBox{
      right:0px;
      transition: all 1s ease 0s;  
   }
      .icon-menu{
         width:2rem; 
         height:2rem; 
         max-height:2rem;
         max-width:2rem;
         margin-bottom:.5rem;
         position:relative;
         fill:rgba(255,255,255,1);
      }
   .icon-menu-fivelines{
      max-width:2.5rem;
      max-height:2.5rem;
       text-align:center;
      fill: rgb(225,225,225);
      margin:0 auto;
      position: relative;
   }
   .icon-menu-fivelines :hover {

   }
   .icon-close {
      display:block;
      max-width:2.5rem;
      max-height:2.5rem;
      text-align:center;
      fill:#4c87b5;
      margin:0 auto;
      position: relative;
   }
   .contract-X-header{
      transition: all 1s ease 0s; 
   }

    .X-menu nav {
      display:block;
      clear:both;
      z-index:1;
      display:block;
      width:100%;
      height:3.125rem;
      background-color: #F7F4EB; 
   }
     .X-menu nav > div {
       display:block;   
       padding:0px;    
       margin:0px;    
    }
    .X-menu nav > div > ul {  
      display: block; 
      padding:0px;    
      margin:0px;
      background-color: #F7F4EB; 
      list-style-type: none;
      text-align:center;
      margin:0 auto;
      text-align:justify;
      padding-left:2rem;
      padding-right:2rem;
      height:3.125rem;       
   }
   .X-menu nav > div > ul:after {
      top:-50px;
      display:inline-block;
      width:100%;
      content:'';
      padding:0px;
      margin:0px;
   }
   .X-menu nav > div > ul > li{   
      display:inline-block;
      vertical-align:middle;  
      padding:0px;    
      margin:0px;
      text-align:center;
      word-break: break-word;
      background-color: #F7F4EB; 
      margin:0 auto; 
   }
    .X-menu nav > div > ul > li:hover, .X-menu nav > div > ul > li:active  {
  
   }
    .X-menu nav > div > ul > li > a{  
      display:inline-block;  
      vertical-align:middle;    
      color: #00529b;
      font-family: Gentona_Bold;
      font-size:1rem;
      letter-spacing: 2px;  
      text-transform: uppercase; 
      word-wrap: break-word; 
      text-align:center;
      height:3.125rem;
      line-height:1; 
   }
   .X-menu nav > div > ul > li > a:hover {
    color: #00529b !important;
   }

   /* UNDERLINE FIRST LEVEL MENUS */

    .X-menu nav > div > ul > li > a > span {
      display:inline-block;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }
    .main-menu-wrap li.hover span::after {
      -webkit-transition: width 0.2s ease-out;
      transition: width 0.2s ease-out;
      width: 100%;
   }
    .X-menu nav > div > ul > li:hover span::after, .X-menu nav > div > ul > li:active span::after{
      -webkit-transition: width 0.2s ease-out;
      transition: width 0.2s ease-out;
      width: 100%;
   }
    .X-menu nav > div > ul > li span::after{
      background: url('images/main-menu-hover.png') repeat-x left center;
      content: '';
      bottom: -10px;
      display: block;
      height: 5px;
      left: 0;
      position: absolute;
      -webkit-transform-origin: center center;
      transform-origin: center center;
      width: 0;
   }

   .js .menu-toggle, .js .dropdown-toggle,  .dropdown-toggle  {
    display: none;
}


   /* Sub Menus */  
    .X-menu nav > div > ul > li > ul {
     word-break: break-word;
     list-style-type:none;
     padding:0px;
     margin:0px;
     position: absolute;
      /* Hide Sub Menu */      
      list-style: none;    
      width: auto;
      background: #faf8f1;     
      opacity: 0;
      visibility: hidden;
      /* POSITION Sub Menu BELOW the header and top-level menu */ 
      top:11.25rem; 
      max-height: 80%;
      max-height: 70vh;
      padding-bottom: 2rem;

   }

   /*
    .X-menu nav ul li:last-child ul, .X-menu nav ul li:last-child ul {   
      left:auto;
      right:0;
   }
   */

   /* SHOW Sub Menu */ 
    .X-menu nav ul li:hover ul, .X-menu nav ul li:active ul {   
      opacity:1;
      visibility: visible;
      transition: all 0.2s ease 0s;
      z-index:10;
      background: #faf8f1;
      min-width:16rem;
   }

    .X-menu-edge{
      left:auto;
      right:0 !important;
      margin-right:3rem;
   }
  /*
    .X-menu nav ul li:last-child:hover ul, .X-menu nav ul li:last-child:active ul {   
      left:auto;
      right:0;
   }
  */
    .X-menu nav > div > ul > li > ul > li {
      word-break: break-word;
      padding-left:1rem;  
      padding-right:1rem;   
   }

    .X-menu nav > div > ul > li > ul > li > a{
      word-break: break-word;
      color: #00529b;
      border-top: 1px solid #eae5d7;
      display: block;
      font-family: Quadon_Medium, "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size:1rem;    
      text-align: left;
      text-transform: none;
      padding:1rem;
   }

    .X-menu nav > div > ul > li > ul > li > a:hover {
      color:#c24700;
   }
    .icon-angle-down{
      display: inline-block;
      height: 1rem;
      width: 1rem;     
      display: none;
   }
    .icon-angle-down-toggle {
      -webkit-transform: rotate(360deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(360deg); /* IE 9 */
      transform: rotate(360deg);   
      transition: all 0.33s ease 0s;  

   }


    .X-menu-wrap{
       max-width:1240px;
       margin:0 auto;
       display:block;
       clear:both;
   }
   /* Indent Sub Menus */  

    .X-menu nav > div > ul > li > ul > li > ul{
      list-style-type: square;
      list-style: square; 
      padding-top:0px;
      padding-bottom:1rem;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li{
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }

    .X-menu nav > div > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;
     }

   /* Indent Sub-sub Menus */  
    .X-menu nav > div > ul > li > ul > li > ul  > li > ul {

      list-style-type: square;
      list-style: square;
      padding-left:3rem;
      padding-top:0px;
      padding-bottom:0px;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li{
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;

     }

   /* Indent Sub-sub-sub Menus */  
    .X-menu nav > div > ul > li > ul > li > ul  > li > ul  > li > ul {

      list-style-type: square;
      list-style: square;
      padding-left:3rem;
      padding-top:0px;
      padding-bottom:0px;
      margin:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > ul > li {
      list-style-type: square;
      list-style: square;
      border:0px;
      font-size:1rem;
      margin:0px;
      padding:0px;
   }
    .X-menu nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > a {
      padding:0px;
      padding-top:.3rem;
      padding-bottom:.3rem;
      margin:0px;
      border:0px;

     }
}



/* ------------------BREAK POINTS FOR BRANDING & MENU - IPAD ------------------ */

@media only screen and (min-width:768px) and (max-width : 1024px) {


   /* Main div box  */
   .hideInMobile{
      display:none;
   }
   .X-header {
      position: fixed;
      top:0px;
      width: 100%;
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      display: table;
      clear: both;   
      z-index:2;
      transition: all .2s ease-in-out;
      overflow: visible;
      background-color:rgba(255,255,255); 
   }
      /* UF Logo -- floated above two rows  */
      .X-header .uf{
         width: 3.75rem;/* fallback */
         max-width:3.75rem;
         height: 3.75rem;/* fallback */
         max-height:3.75rem;
         position:absolute;
         top:0px;
         left:0px;
         z-index:10;
         transition: all .2s ease-in-out;
      }
      /* UF Logo svg */
        .X-header .icon-uflogo{          
         width: 3.75rem;
         max-width:3.75rem;
         height: 3.75rem;
         max-height:3.75rem;
         z-index: 10;
         }

   /* Row One -- COLLEGE Name */
   .college-logo-desktop{
      display: none;
   }
   .college-logo-tablet{
      display: block;
   }
   .college-logo-mobile{
      display: none;
   }

   .X-header .college {    
      width:100%;
      position:relative;
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      display:table; 
      clear:both;
      background-color:rgba(0, 64, 131, 1);
      text-align:center;
   }  
   .X-header .college a{
      font-family: Gentona_Medium;
      color:#ffffff;   
      text-decoration: none;
      font-weight:normal;
      font-size:1.2rem; /* fallback */
      line-height:1;
      padding:0px;
      padding-left:3.75rem;
      padding-right:3.75rem;
      margin:0px;      
      text-align:center;
      text-transform:uppercase;
      display:table-cell;
      vertical-align:middle;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {
      width:100%;   
      height:3.875rem;
      top:3.9375rem;
      display:block; 
      clear:both;
      background-color:#F7F4EB;
      z-index:1;
      border-bottom:1px solid #efede6;
      text-align:center;   
   }
   .X-header .department  a {
      display:table-cell;
      vertical-align:middle;
      padding-left:0rem;  
      width:100%; 
   }
      /* UF Logo svg */
        .X-header .icon-college-logo{          
           display:none;
         }
   /* SEARCH BAR */
   /* Disable desktop search box */
   .X-search-form-container{ 
      display:none;
   }
   .X-searchTrigger{
      display:none;
   }
   .mobileSearch{
      position:relative;
      display:table;
      vertical-align:middle;
      width:100%;
      height:3.75rem;
   }
   .X-search-form-container .search-form{
      position:relative;
      display:table-cell;
      vertical-align:middle;
      width:100%;
      height:3.75rem;
      text-align:center;   
   }
   .X-search-form-container  .search-field{
      position:relative;    
      display:table-cell;
      vertical-align:middle;
      width:70%;
      height:2rem;
      max-width:631px;
      margin:0 auto;
      border:1px solid #cccccc;
   }

   .icon-search, #icon-search, svg.icon.icon-search {
      color:#ffffff;
      fill:#ffffff;
      height: 24px;
      top: -2px;
      width: 24px;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {  
      width:100%;    
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      top: 3.75rem; /* fallback */
      display:block; 
      clear:both;
      background-color:#ffffff;
      z-index:1;
      /* Hide */
      transition: all 0.2s ease-out;
      position:absolute;
      background-color:#faf8f1;
   }
   .strikeheader {
     font-family: Quadon_Medium;
     color:rgba(0, 64, 131, 1) !important;
     display: block;
     vertical-align: middle;
     width:100%;
     height: 3.75rem;/* fallback */
     vertical-align: middle;
     color:rgba(0, 64, 131, 1) !important;
     letter-spacing:1px;
     word-wrap: break-word;
     text-align:center;
   }
   .strikeheader a {
      padding-right: 3.75rem; 
      padding-left: 3.75rem; border:1px solid red;
   }
   .strikeRight a{
      height: 3.75rem;/* fallback */  
   }
   /* QUICKLINKS */
    .X-quickLinks{
      fill:#ffffff;
      color:#ffffff;
      position:absolute;
      padding:1rem;
      margin:0px;
      bottom:0px;
      top:0px;
      right:6.25rem;
      background-color: #13599a;
      width:10.9375rem;
      height:6.25rem;
      z-index:2;
      font-family:Quadon_Medium;
      font-size:1.25rem;
      text-align:center;
      display:none;
   }
   .X-quickLinks span{
      display:table-cell;
      vertical-align:middle;
   }

 /* Row Three -- MENU */
   .X-header .X-menu{    
      display: block; 
      height: 3.75rem;/* fallback */
      overflow: visible;   
      top:6.875rem;/* fallback */ 
      width: 100%;
      height: 100vh;
      position:absolute;    
      visibility:none;
      display: block;   
      height: 2.5rem;
      overflow: visible; 
      display: block;  
      top:3.75rem;
      right:-4000px;
      width: 100%;
      height: 100vh;
      position:absolute; 
      background-color:#F7F4EB;  
      padding-bottom:20rem;   
     
        
   }
   .fixedPosition {
       position: fixed;
    }
    /* MENU BOX */
   .menuBox{ 
      position: absolute;
      display: block;
      right:0px;
      top:0px;
      background-color: #4c87b5;
      width: 3.75rem;
      height: 3.75rem ;
      line-height: 3.75rem;
      padding:0px;
      margin: 0px;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      z-index:1000 !important;
   }
     .menuBox svg{ 
        vertical-align: middle;
         margin-bottom:.3rem;
      }
      .icon-menu{
         width:2rem; 
         height:2rem; 
         fill:rgba(255,255,255,1);
      }
      .icon-close {
         width:2.5rem; 
         height:2.5rem; 
         fill:rgba(255,255,255,1);
      }
   .X-menu nav > div > ul{
      position:relative; display: block;margin:0;padding:0px; width:100%;padding-bottom: 10rem;    
   }
   .X-menu nav > div > ul > li{
      position:relative;
      display: block;
      margin:0;
      padding:0px;      
      vertical-align:middle;   
      text-align:center; 
      width:100%;
   }
   .X-menu nav > div > ul > li:hover, .X-menu nav > div > ul > li:active  {
      background: #faf8f1;
   }
   .X-menu nav > div > ul > li:nth-child(odd) {
      background-color:#FFFFF5;
   }
   .X-menu nav > div > ul > li:nth-child(even) {
      background-color: #F5F0DC;
   }
   .X-menu nav > div > ul > li > a{
      display:block;
      margin:0;     
      width:100%;     
      color: #00529b;
      font-family: Gentona_Bold;
      font-size:1.125rem;
      letter-spacing: 2px;  
      text-transform: uppercase;     
      vertical-align: middle;
      padding:1rem 1rem 1rem 1rem;
      text-align: left;
   }
   .X-menu nav > div > ul > li > a:hover {
    color: #00529b !important;
   }
   /* Dropdown Menu */
   .X-menu nav > div > ul > li > ul { 
      position: relative;
      margin: 0;
      padding: 0;
      /* Hide Sub Menu */ 
      display:none;
      opacity: 0;
      visibility: hidden; 
      list-style: none; 
      width: auto;
      background: none;
      padding: 0  0  0 1rem;
      margin:0px;     
      padding-bottom: 2rem;
   }

   .js .menu-toggle{
    display: none;
   }
   /* SHOW Sub Menu
   .X-menu nav ul li:hover ul, .X-menu nav ul li:active ul {   
      display: block;
      position: relative;
      opacity:1;
      visibility: visible;
      transition: all 0.8s ease 0s;
      z-index:10;
      background: #fffdf5;;
   }
  */ 
    li.menu-item-has-children > ul {
        display:none;
   }


   .X-menu nav > div > ul > li.open > ul {
      position: relative;
      display: block; 
      visibility: visible;
      transition: all 0.8s ease 0s;
      z-index:100;
      background: #fffdf5;;
      opacity:1;
   }

   .X-menu nav > div > ul > li .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
   } 


   .X-menu nav > div > ul > li > ul > li {
      word-break: break-word;
      margin:0px;padding:0px;      
   }
   .X-menu nav > div > ul > li > ul > li > a { 
      color: #00529b;
      border-top: 1px solid #eae5d7;
      display: block;
      font-family: Gentona_Medium, "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size:1.125rem;
      margin:0px;
      padding:.7rem .7rem .7rem .7rem;
      text-align: left;
      text-transform: none; 
   }
   .X-menu nav > div > ul > li > ul > li > a:hover{
      color:#c24700;
   }

 .icon-angle-down{
      width:1.5rem;
      height:1.5rem;
      -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(-90deg); /* IE 9 */
      transform: rotate(-90deg);   
      transition: all 0.33s ease 0s;  
      z-index:10;
 
   }

  li.open  .icon-angle-down{ 
      width:1.5rem;
      height:1.5rem;
      -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(0deg); /* IE 9 */
      transform: rotate(0deg);   
      transition: all 0.33s ease 0s;  
   }





   button.dropdown-toggle {
      position:absolute;
      background-color: transparent;
      display:table-cell;
      vertical-align:middle;
      float:right;
      right:0px;
      top:0px;  
      height:3.4375rem;  
      width:3.4375rem;   
      border:0px;    
      cursor: pointer;
    }

   button.dropdown-toggle ::-moz-focus-inner {
      border: 0;
   }

   .X-menu nav > div > ul > li > button.dropdown-toggle :active {
   -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
   -ms-transform: rotate(0deg); /* IE 9 */
   transform: rotate(0deg);   
    transition: all 0.33s ease 0s; 
 
   }
}

/* ------------------BREAK POINTS FOR BRANDING & MENU - Mobile ------------------ */

@media only screen and (min-width:0px) and (max-width : 767px) {

   /* Top-level menu */
   .navigation-top { 
      text-align:center;
      margin:0 auto;
      width:100%;
      padding:0px;
      transition: all 0.5s ease;     
   }
   /* Main div box  */
   .hideInMobile{
      display:none;
   }
   .X-header {
      position: fixed;
      top: 0px;
      width: 100%;
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      display: table;
      clear: both;   
      z-index:2;
      transition: all .2s ease-in-out;
      overflow: visible;
      background-color:rgba(255,255,255); 
   }
      /* UF Logo -- floated above two rows  */
      .X-header .uf{
         width: 3.75rem;/* fallback */
         max-width:3.75rem;
         height: 3.75rem;/* fallback */
         max-height:3.75rem;
         position:absolute;
         top:0px;
         left:0px;
         z-index:10;
         transition: all .2s ease-in-out;
      }
      /* UF Logo svg */
        .X-header .icon-uflogo{          
         width: 3.75rem;
         max-width:3.75rem;
         height: 3.75rem;
         max-height:3.75rem;
         z-index: 10;
         }

   /* Row One -- COLLEGE Name */
   .college-logo-desktop{
      display:none;
   }
   .college-logo-tablet{
      display:none;
      }
   .college-logo-mobile{
      display:block;
      }
   .X-header .college {    
      width:100%;
      position:relative;
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      display:table; 
      clear:both;
      background-color:rgba(0, 64, 131, 1);
      text-align:center;
   }  
   .X-header .college a{
      font-family: Gentona_Medium;
      color:#ffffff;   
      text-decoration: none;
      font-weight:normal;
      font-size:1.2rem; /* fallback */
      line-height:1;
      padding:0px;
      padding-left:3.75rem;
      padding-right:3.75rem;
      margin:0px;      
      text-align:center;
      text-transform:uppercase;
      display:table-cell;
      vertical-align:middle;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {
      width:100%;   
      height:3.875rem;
      top:3.9375rem;
      display:block; 
      clear:both;
      background-color:#F7F4EB;
      z-index:1;
      border-bottom:1px solid #efede6;
      text-align:center;   
   }
   .X-header .department  a {
      display:table-cell;
      vertical-align:middle;
      padding-left:0rem;  
      width:100%; 
      padding-left: .5rem;
      padding-right: .5rem;
   }
      /* UF Logo svg */
        .X-header .icon-college-logo{          
           display:none;
         }
   /* SEARCH BAR */
   /* Disable desktop search box */
   .X-search-form-container{ 
      display:none;
   }
   .X-searchTrigger{
      display:none;
   }
   .mobileSearch{
      position:relative;
      display:table;
      vertical-align:middle;
      width:100%;
      height:3.75rem;
   }
  .X-search-form-container .search-form{
      position:relative;
      display:table-cell;
      vertical-align:middle;
      width:100%;
      height:3.75rem;
      text-align:center;   
   }
    .X-search-form-container  .search-field{
      position:relative;    
      display:table-cell;
      vertical-align:middle;
      width:70%;
      margin-right:4.75rem;
      margin-left:1rem;
      height:2rem;
      max-width:631px;
   

      border:1px solid #cccccc;
   }

   .icon-search, #icon-search, svg.icon.icon-search {
      color:#ffffff;
      fill:#ffffff;
      height: 24px;
      top: -2px;
      width: 24px;
   }

   /* Row Two -- DEPARTMENT Name */
   .X-header .department {  
      width:100%;    
      height: 3.75rem;/* fallback */
      max-height:3.75rem;
      top: 3.75rem; /* fallback */
      display:block; 
      clear:both;
      background-color:#ffffff;
      z-index:1;
      /* Hide */
      transition: all 0.2s ease-out;
      position:absolute;
      background-color:#faf8f1;
   }
   .strikeheader {
     font-family: Quadon_Medium;
     color:rgba(0, 64, 131, 1) !important;
     display: block;
     vertical-align: middle;
     width:100%;
     height: 3.75rem;/* fallback */
     vertical-align: middle;
     color:rgba(0, 64, 131, 1) !important;
     letter-spacing:1px;
     word-wrap: break-word;
     text-align:center;
   }
   .strikeheader a {
      padding-right: 3.75rem; 
      padding-left: 3.75rem; border:1px solid red;
   }
   .strikeRight a{
      height: 3.75rem;/* fallback */  
   }
   /* QUICKLINKS */
    .X-quickLinks{
      fill:#ffffff;
      color:#ffffff;
      position:absolute;
      padding:1rem;
      margin:0px;
      bottom:0px;
      top:0px;
      right:6.25rem;
      background-color: #13599a;
      width:10.9375rem;
      height:6.25rem;
      z-index:2;
      font-family:Quadon_Medium;
      font-size:1.25rem;
      text-align:center;
      display:none;
   }
   .X-quickLinks span{
      display:table-cell;
      vertical-align:middle;
   }

   /* Row Three -- MENU */
   .X-header .X-menu{    
      display: block; 
      height: 3.75rem;/* fallback */
      overflow: visible;   
      top:6.875rem;/* fallback */ 
      width: 100%;
      height: 100vh;
      position:absolute;    
      visibility:none;
      display: block;   
      height: 2.5rem;
      overflow: visible; 
      display: block;  
      top:3.75rem;
      right:-4000px;
      width: 100%;
      height: 100vh;
      position:absolute; 
      background-color:#F7F4EB;   
      padding-bottom:20rem;   
     
    
   }
   .fixedPosition {
       position: fixed;
    }
    /* MENU BOX */
   .menuBox{ 
      position: absolute;
      display: block;
      right:0px;
      top:0px;
      background-color: #4c87b5;
      width: 3.75rem;
      height: 3.75rem ;
      line-height: 3.75rem;
      padding:0px;
      margin: 0px;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      z-index:1000 !important;
   }
     .menuBox svg{ 
        vertical-align: middle;
         margin-bottom:.3rem;
      }
      .icon-menu{
         width:2rem; 
         height:2rem; 
         fill:rgba(255,255,255,1);
      }
      .icon-close {
         width:2.5rem; 
         height:2.5rem; 
         fill:rgba(255,255,255,1);
      }
   .X-menu nav > div > ul{
      position:relative;
      display: block !important;
      margin:0;
      padding:0px  !important;
      width:100%;
      padding-bottom: 10rem;    
   }
   .X-menu nav > div > ul > li{
      position:relative;
      display: block;
      margin:0;
      padding:0px;      
      vertical-align:middle;   
      text-align:center; 
      width:100%;
   }
   .X-menu nav > div > ul > li:hover, .X-menu nav > div > ul > li:active  {
      background: #faf8f1;
   }
   .X-menu nav > div > ul > li:nth-child(odd) {
      background-color:#FFFFF5;
   }
   .X-menu nav > div > ul > li:nth-child(even) {
      background-color: #F5F0DC;
   }
   .X-menu nav > div > ul > li > a{
      display:block;
      margin:0;     
      width:100%;     
      color: #00529b;
      font-family: Gentona_Bold;
      font-size:1.125rem;
      letter-spacing: 2px;  
      text-transform: uppercase;     
      vertical-align: middle;
      padding:1rem 1rem 1rem 1rem !important;
      text-align: left;
   }
   .X-menu nav > div > ul > li > a:hover {
    color: #00529b !important;
   }
   /* Dropdown Menu */
   .X-menu nav > div > ul > li > ul { 
      position: relative;
      margin: 0;
      padding: 0;
      /* Hide Sub Menu */ 
      display:none;
      opacity: 0;
      visibility: hidden; 
      list-style: none; 
      width: auto;
      background: none;
      padding: 0  0  0 1rem;
      margin:0px;    
      padding-bottom: 2rem;
   }

   .js .menu-toggle {
    display: none;
   }
   /* SHOW Sub Menu
   .X-menu nav ul li:hover ul, .X-menu nav ul li:active ul {   
      display: block;
      position: relative;
      opacity:1;
      visibility: visible;
      transition: all 0.8s ease 0s;
      z-index:10;
      background: #fffdf5;;
   }
  */ 


   .X-menu nav > div > ul > li.open > ul {
      position: relative;
      display: block; 
      visibility: visible;
      transition: all 0.8s ease 0s;
      z-index:100;
      background: #fffdf5;;
      opacity:1;
   }

   .X-menu nav > div > ul > li .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
   } 


   .X-menu nav > div > ul > li > ul > li {
      word-break: break-word;
      margin:0px;padding:0px;      
   }
   .X-menu nav > div > ul > li > ul > li > a { 
      color: #00529b;
      border-top: 1px solid #eae5d7;
      display: block;
      font-family: Gentona_Medium, "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size:1.125rem;
      margin:0px;
      padding:.7rem .7rem .7rem .7rem;
      text-align: left;
      text-transform: none; 
   }
   .X-menu nav > div > ul > li > ul > li > a:hover{
      color:#c24700;
   }

 .icon-angle-down{
      width:1.5rem;
      height:1.5rem;
      -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(-90deg); /* IE 9 */
      transform: rotate(-90deg);   
      transition: all 0.33s ease 0s; 
      z-index: 10;
   }

  li.open  .icon-angle-down{ 
      width:1.5rem;
      height:1.5rem;
      -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
      -ms-transform: rotate(0deg); /* IE 9 */
      transform: rotate(0deg);   
      transition: all 0.33s ease 0s;  
   }

   button.dropdown-toggle {
      position:absolute;
      background-color: transparent;
      display:table-cell;
      vertical-align:middle;
      float:right;
      right:0px;
      top:0px;  
      height:3.4375rem;  
      width:3.4375rem;   
      border:0px;    
      cursor: pointer;
    } 
   :focus {outline:none;}
::-moz-focus-inner {border:0;}

   .X-menu nav > div > ul > li > button.dropdown-toggle :active {
   -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
   -ms-transform: rotate(0deg); /* IE 9 */
   transform: rotate(0deg);   
    transition: all 0.33s ease 0s; 
 
   }
}




@media only screen and (min-width: 1024px)  {

   .showMenu{ 
      z-index:1000 !important;
      transition: all 0.3s ease;
      display:block;  
      top:6.25rem; 
      text-align:center;
      margin:0 auto;
      border-top:rgb(0,32,65);
      height:100%;
      overflow:visible;
      overflow-y: scroll  !important; 
      -webkit-overflow-scrolling: touch;
      right:0px !important;
   }





}
/* iPhone */
@media only screen and (min-width: 0px) and (max-width : 1024px)  {

   
   .showMenu{ 
      z-index:1000 !important;
     transition: all 0.5s ease;
      display:block;  
      top:3.75rem; 
      text-align:center;
      margin:0 auto;
      border-top:rgb(0,32,65);
      height:100%;
      overflow:visible;
      overflow-y: scroll  !important; 
      -webkit-overflow-scrolling: touch;
      right:0px !important;
      outline: none;
   }
   .top-margin-shim{
      padding-top:7.5rem; 
   }




}




/* ALIGENMENTS */
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}

.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}

.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
/* Aligned blockquotes */

.entry-content blockquote.alignleft,
.entry-content blockquote.alignright {
	color: #666;
	font-size: 13px;
	font-size: 0.8125rem;
	width: 48%;
}
/* Aligned blockquotes */
img.alignleft,
img.alignright {
	float: none;
	margin: 0;
}
@media screen and (min-width: 30em) {
	.entry-content blockquote.alignleft,
	.entry-content blockquote.alignright {
		font-size: 14px;
		font-size: 0.875rem;
	}

	/* Fix image alignment */
	img.alignleft {
		float: left;
		margin-right: 1.5em;
	}

}
@media screen and (min-width: 48em) {
	.entry-content blockquote.alignleft,
	.entry-content blockquote.alignright {
		font-size: 13px;
		font-size: 0.8125rem;
	}



	/* without sidebar */

	:not(.has-sidebar) .entry-content blockquote.alignleft {
		margin-left: -17.5%;
		width: 48%;
	}

	:not(.has-sidebar) .entry-content blockquote.alignright {
		margin-right: -17.5%;
		width: 48%;
	}

	/* with sidebar */

	.has-sidebar .entry-content blockquote.alignleft {
		margin-left: 0;
		width: 34%;
	}

	.has-sidebar .entry-content blockquote.alignright {
		margin-right: 0;
		width: 34%;
	}

	.has-sidebar #primary .entry-content blockquote.alignright.below-entry-meta {
		margin-right: -72.5%;
		width: 62%;
	}

	/* blog and archive */

	.blog:not(.has-sidebar) .entry-content blockquote.alignleft,
	.twentyseventeen-front-page.page-two-column .entry-content blockquote.alignleft,
	.archive:not(.has-sidebar) .entry-content blockquote.alignleft,
	.page-two-column .entry-content blockquote.alignleft {
		margin-left: -72.5%;
		width: 62%;
	}

}

/* POST NAVIGATION  */


.nav-links{
   width:70%;
   position:relative;
   display: block;
   clear: both;
   padding:0px;margin:0px;
   margin:0 auto;
   padding-top:2rem;
   padding-bottom:2rem;
   text-align:center;
   overflow:hidden;

}

.nav-previous, .nav-next {
   position:relative;
   width:45%; 
   height:100%;
   display:inline-block;
   padding:0px;
   margin:0 auto;
   vertical-align:top;
   text-align:center;
 }

.nav-previous  a:hover , .nav-next a:hover {
   text-decoration:none;
}

.nav-previous .nav-title {
   display:block;
   margin:0 auto;
   text-align:center;
   font-family: Gentona_Book;
   font-size: .9rem;
padding-top: 1rem;
}
.nav-previous .nav-title  .nav-title-icon-wrapper{
   text-align:center;
}

.nav-subtitle {
   font-family:Gentona_Book;
   font-size:.9rem;
   text-transform:uppercase;
   padding:.5rem;
   letter-spacing:.05rem;
   color:rgb(75,75,75);
   text-decoration:none;
   display:block; 
   margin:0 auto;
   text-align:center;
}



.nav-next {
   margin:0 auto;
}
.nav-next .nav-title{
   position:relative;
   display:block;
   margin:0 auto;
   text-align:center;
   width:100%;    
   padding-top:4rem;
   font-family: Quadon_RegularItalic;
   font-size: .9rem;
  
}
.nav-next .nav-title .nav-title-icon-wrapper{
   position:absolute;
   top:2rem;
   display:block;
   margin:0 auto; 
   left:50%;
   margin:-1rem; 
   width:2rem;
   height:2rem;


}
.nav-next .nav-title .nav-title-icon-wrapper .icon-arrow-right, .icon-arrow-right,  .icon-arrow-left{
   width:2rem;
   height:2rem;
}


/* Navigation for Search */

.pagination {
   display: block; 
   clear: both;

}


.page-numbers{
   vertical-align:middle;
   display:inline-block; 
   font-size:1.2rem;
   font-family:Gentona_Book;
   height:3rem;
   line-height:3rem;
}

.page-numbers svg{
   vertical-align:middle;
}

a.page-numbers {
   padding-left:1rem;
   padding-right:1rem;
   color: #337ab7;
}


span.current {
   font-size:1.4rem;
   line-height:3rem;
   font-weight:bold;
   padding-top:0px;
   margin-top:0px;
   padding-left:1rem;
   padding-right:1rem;
}

span.current  :hover { 
   color:#23527c;
   background:#f45a1d;
}


a.page-numbers .icon-arrow-left , a.page-numbers:hover .icon-arrow-right{
   transition: width .1s linear .1s, height .1s linear .1s;
   -webkit-transition: width .1s linear .1s, height .1s linear .1s;
   -o-transition: width .1s linear .1s, height .1s linear .1s;
   -moz-transition: width .1s linear .1s, height .1s linear .1s;
   position: relative;
   width: 2rem;
   height: 2rem;
   max-width: 3rem;
   max-height: 3rem;
}



a.page-numbers:hover .icon-arrow-left, a.page-numbers:hover .icon-arrow-right {
   width:2.5rem;
   height: 2.5rem;
}

a.page-numbers  .icon-arrow-left:hover {
 
}   


/* FEATURED IMAGE */

   .single-featured-image-header {
      display:block;
      clear: both;
      margin: 0 auto;
      margin-bottom: 0px;
      max-width:1440px;
      margin: 0px;
      padding: 0px;
      display: block;
      clear:both;

   } 




    .panel-image  {
      display:block;
      clear: both;
      margin: 0 auto;
      margin-bottom: 0px;
      max-width:2000px;
      margin: 0px;
      padding: 0px;
      display: block;
      clear:both;

   } 

.panel-image {
    background-repeat: no-repeat;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

   .single-featured-image-header  img {
      display:block;
      clear:both;
      width:100%;
      margin: 0px;
      padding: 0px;
   } 
   .single-featured-image-header .featured-image-caption  {
      display:block;
      clear:both;
      margin: 0px;
      padding: 0px;
   }  
   .single-featured-image-header .featured-image-caption  .wrap {
      margin-top: 0px;
      margin-bottom: 0px;
      padding-top: 0px;
      padding-bottom: 0px;
   }  

/* BREAK POINTS FOR POST NAVIGATION */
@media only screen and (min-width:0px) and (max-width : 736px) {

   .nav-links{
      width:100%;
   }
}







/* Add margins to compensate for the FIXED branding header (X-header) */

@media only screen and (min-width:2000px) {

  .X-header {
      margin-top:0rem;
   }

   .single-featured-image-header, .panel-image{
      position: relative; 
      display: block; 
      margin: 0 auto;
      width:100%;
      max-width:1440px;
      margin: 0 auto;
      margin-top:10.15625rem;
   }

    .panel-image{
      position: relative; 
      display: block; 
      margin: 0 auto;
      width:100%;
      max-width:2000px;
      margin: 0 auto;
      margin-top:10.15625rem;
   }
  /* .post-template-single-featured-story */
  .post-template-single-featured-story .single-featured-image-header  {
        max-width:2000px;
  }

  /* .post-template-single-image-header */
  .post-template-single-image-header .single-featured-image-header  {
        max-width:2000px;

   }



  :not(.has-featured-image .home) .site-content-contain{
      margin-top:10.15625rem; 
   }

  :not(.panel-image) .site-content-contain{
      margin-top:10.15625rem; 
   }




  .has-featured-image .site-content-contain{
      margin-top:0rem !important;
   }
  .home .site-content-contain{
      margin-top:10.15625rem; 
   }


   /* If the post is a News Article & it has a Featured Image*/
   .post-template-single-news-article .single-featured-image-header +  .site-content-contain{
      margin-top:0rem;
   }

  /* If admin bar is present... */
  .admin-bar .X-header {
      margin-top:2rem;
   }
}















/* Add margins to compensate for the FIXED branding header (X-header) */

@media only screen and (min-width:1024px) and (max-width : 2000px) {

  .X-header {
      margin-top:0rem;
   }

   .single-featured-image-header, .panel-image{
      position: relative; 
      display: block; 
      margin: 0 auto;
      width:100%;
      max-width:1440px;
      margin: 0 auto;
      margin-top:9.375rem;
   }

    .panel-image{
      position: relative; 
      display: block; 
      margin: 0 auto;
      width:100%;
      max-width:2000px;
      margin: 0 auto;
      margin-top:9.375rem;
   }
  /* .post-template-single-featured-story */
  .post-template-single-featured-story .single-featured-image-header  {
        max-width:2000px;
  }

  /* .post-template-single-image-header */
  .post-template-single-image-header .single-featured-image-header  {
        max-width:2000px;

   }



  :not(.has-featured-image .home) .site-content-contain{
      margin-top:9.375rem; 
   }

  :not(.panel-image) .site-content-contain{
      margin-top:9.375rem; 
   }




  .has-featured-image .site-content-contain{
      margin-top:0rem !important;
   }
  .home .site-content-contain{
      margin-top:9.375rem; 
   }


   /* If the post is a News Article & it has a Featured Image*/
   .post-template-single-news-article .single-featured-image-header +  .site-content-contain{
      margin-top:0rem;
   }

  /* If admin bar is present... */
  .admin-bar .X-header {
      margin-top:2rem;
   }
}

@media only screen and (min-width:768px) and (max-width : 1024px) {



  .X-header {
      margin-top:0rem;
   }

   .single-featured-image-header, .panel-image{
      margin-top:7.5rem;
   }

  :not(.has-featured-image .home) .site-content-contain{
      margin-top:7.5rem; 
   }


  :not(.panel-image) .site-content-contain{
      margin-top:7.5rem; 
   }

  .has-featured-image .site-content-contain{
      margin-top:0rem !important;
   }

  .home .site-content-contain{
      margin-top:7.5rem;
   }

  /* If admin bar is present... */
  .admin-bar .X-header {
      margin-top:2rem;
   }

}
@media only screen and (min-width:0px) and (max-width : 768px) {

  .X-header {
      margin-top:0rem;
   }

   .single-featured-image-header,.panel-image{
      margin-top:7.5rem;
   }
  :not(.has-featured-image .home) .site-content-contain{
      margin-top:7.5rem;
   }

  :not(.panel-image) .site-content-contain{
      margin-top:7.5rem; 
   }
  .has-featured-image .site-content-contain{
      margin-top:0rem !important;
   }
  .home .site-content-contain{
      margin-top:7.5rem;
   }

  /* If admin bar is present... */
  .admin-bar .X-header {
      margin-top:2.875rem;
   }
  #wpadminbar {
      position: fixed;
      top:0px;
   }

}




/* ------------------DEFAULT LAYOUT FOR THE ENTIRE SITE ------------------ */
/* This will be overwritten by the templates */


/* Pages should have a minimum height in case they are blank. This prevents the footer from sticking to the header */
#primary: not(.home) {
   min-height: 50vh;

}

/* Disable all the padding that .wrap inserts for headers (h1) */
.entry-header .wrap {
   padding-bottom: 0px !important;
   margin-bottom: 0px !important;
}

 *:not(.post-template-single-featured-story) .entry-content > .wrap {
   padding-top: 0px !important;
   margin-top: 0px !important;
   }

@media only screen and (min-width:1024px) {
.post-template-single-featured-story .entry-content > .wrap {
   padding-top:2rem !important;

   }
}

@media only screen and (min-width:1024px) {
   .wrap{ 
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;  
   }
   
    #primary {
      position:relative;
      display: block;
      width: 100%; 
   }

   aside#secondary  {
       display:none;
      
   }
}
@media only screen and (min-width:768px) and (max-width : 1024px) {

   .wrap {       
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

    #primary  {
      display:block;
      clear:both;
      width: 100%;
     
   }

    #secondary  {
       display:none;
      
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {

   .wrap {       
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

    #primary    {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

    #secondary{
       display:none;
      
   }
}

@media only screen and (min-width:0px) and (max-width : 481px) {

   .wrap {       
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:1rem;
   }

    #primary  {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

    #secondary  {
       display:none;
      
   }
}


/* ------------------SINGLE COLUMN LAYOUTS: Home Page, Default Post, Default Page, Featured Story ------------------ */
@media only screen and (min-width:1024px) {

   .home .wrap, .post-template-default .wrap, .page-template-default .wrap, .post-template-single-magazine-article .wrap, .post-template-single-news-article .wrap, .post-template-single-featured-story .wrap{ 
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
  
      padding-bottom:0px !important;
 
   }

  .home > #page > .site-content-contain > .wrap{
      padding-bottom:0px !important;
   }

   .home:not(.error404) #primary, .post-template-default  #primary , .page-template-default #primary, .post-template-single-magazine-article #primary, .post-template-single-news-article #primary, .post-template-single-featured-story #primary {
      position:relative;
      display: block;
      width: 100%; 
   }

   .home #secondary, .post-template-default #secondary , .page-template-default #secondary, .post-template-single-magazine-article #secondary, .post-template-single-news-article #secondary, .post-template-single-featured-story  #secondary  {
       display:none;
      
   }
}

@media only screen and (min-width:768px) and (max-width : 1024px) {

   .home .wrap, .post-template-default .wrap, .page-template-default .wrap, .post-template-single-magazine-article  .wrap, .post-template-single-news-article .wrap, .post-template-single-featured-story .wrap {       
      position:relative;      
      max-width: 864px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

   .home:not(.error404) #primary, .post-template-default  #primary, .page-template-default #primary, .post-template-single-magazine-article  #primary, .post-template-single-news-article #primary, .post-template-single-featured-story #primary  {
      display:block;
      clear:both;
      width: 100%;
     
   }

   .home #secondary, .post-template-default #secondary, .page-template-default #secondary, .post-template-single-magazine-article #secondary, .post-template-single-news-article #secondary , .post-template-single-featured-story  #secondary  {
       display:none;
      
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {

   .home .wrap, .post-template-default .wrap, .page-template-default .wrap, .post-template-single-magazine-article .wrap, .post-template-single-news-article .wrap, .post-template-single-featured-story .wrap {       
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

   .home:not(.error404) #primary, .post-template-default  #primary, .page-template-default  #primary, .post-template-single-magazine-article  #primary, .post-template-single-news-article #primary, .post-template-single-featured-story #primary    {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .home #secondary, .post-template-default #secondary, .page-template-default  #secondary, .post-template-single-magazine-article   #secondary, .post-template-single-news-article #secondary , .post-template-single-featured-story  #secondary{
       display:none;
      
   }
}

@media only screen and (min-width:0px) and (max-width : 481px) {

   .home .wrap, .post-template-default .wrap, .page-template-default  .wrap, .post-template-single-magazine-article  .wrap, .post-template-single-news-article .wrap , .post-template-single-featured-story .wrap {       
      position:relative;      
      max-width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:1rem;
   }

   .home:not(.error404) #primary , .post-template-default  #primary, .page-template-default  #primary, .post-template-single-magazine-article  #primary, .post-template-single-news-article #primary, .post-template-single-featured-story #primary  {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .home #secondary, .post-template-default #secondary, .page-template-default #secondary, .post-template-single-magazine-article #secondary , .post-template-single-news-article #secondary, .post-template-single-featured-story  #secondary  {
       display:none;
      
   }
}

/* FULL WIDTH PAGE FOR Visual Composer - Remove Wraps*/

@media only screen and (min-width:1024px) {
   .page-template-single-full-width .wrap, .post-template-single-full-width .wrap{
      max-width:100% !important;
      padding:0px;
   }
   .page-template-single-full-width #primary, .post-template-single-full-width #primary{
      width:100% !important; 
      display:block;
      padding:0px;
   }
   .page-template-single-full-width #secondary, .post-template-single-full-width #secondary{
      width:100%;
      display: none;
   }
}
@media only screen and (min-width:768px) and (max-width : 1024px) {
   .page-template-single-full-width .wrap, .post-template-single-full-width .wrap {
      max-width:100% !important;
      padding:0px;
   }
   .page-template-single-full-width #primary, .post-template-single-full-width #primary{
      width:100% !important; 
      display:block;
      padding:0px;
   }
   .page-template-single-full-width #secondary, .post-template-single-full-width #secondary{
      width:100%;
      display: none;
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {
   .page-template-single-full-width .wrap, .post-template-single-full-width .wrap {
      max-width:100% !important;
      padding:0px;
   }
   .page-template-single-full-width #primary, .post-template-single-full-width #primary{
      width:100% !important; 
      display:block;
      padding:0px;
   }
   .page-template-single-full-width #secondary, .post-template-single-full-width #secondary{
      width:100%;
      display: none;
   }
}
@media only screen and (min-width:0px) and (max-width : 481px) {
   .page-template-single-full-width .wrap, .post-template-single-full-width .wrap {
      max-width:100% !important;
      padding:0px;
   }
   .page-template-single-full-width #primary, .post-template-single-full-width #primary{
      width:100% !important; 
      display:block;
      padding:0px;
   }
   .page-template-single-full-width #secondary, .post-template-single-full-width #secondary{
      width:100%;
      display: none;
   }
}

 
.read-more {
    font-family: Gentona_Bold;
    text-transform: uppercase;
    color: rgb(0,82,155);
    text-decoration: none;
    display: block;
    clear: both;
    font-size: 1.3rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-weight: bold;
}




/* post-template-single-featured-story  -- SIMPLIFY THIS AT A LATER DATE*/

@media only screen and (min-width:1400px) {

   .post-template-single-featured-story  .single-featured-image-header,
.page-template-single-featured-story  .single-featured-image-header {
      max-width: 2000px;
   }

   .post-template-single-featured-story  .single-featured-image-header .textOverImage .wrap, 
.page-template-single-featured-story  .single-featured-image-header .textOverImage .wrap {
      position: absolute;
      right: 0px;
      top: 40%;
      display: block;
      padding: 3rem; 
      margin: 0 auto;      
      max-width:40%;  
      background-color:rgba(0,0,0,.5);

   }  

   .textOverImage h1 {  
      font-family: 'Quadon_Medium',times,serif;
      font-size: 3rem;
      overflow-wrap: normal;
      line-height: 1.3;       
      color: #fff;
      border-bottom: 2px solid #f1e98c;
 
   }
   .textOverImage h2 {  

      font-family: 'Quadon_Medium',times,serif;
      overflow-wrap: normal;       
      color: #eee;

   }

}


@media only screen and (min-width:1200px) and (max-width : 1400px) {


   .post-template-single-featured-story  .single-featured-image-header {
      max-width: 2000px;
   }

   .post-template-single-featured-story  .single-featured-image-header .textOverImage .wrap, 
.page-template-single-featured-story  .single-featured-image-header .textOverImage .wrap {
      position: absolute;
      right: 0px;
      top: 20%;
      display: block;
      padding: 3rem; 
      margin: 0 auto;      
      max-width:50%;  
      background-color:rgba(0,0,0,.5);

   }  

   .textOverImage h1 {  
      font-family: 'Quadon_Medium',times,serif;
      font-size: 3rem;
      overflow-wrap: normal;
      line-height: 1.3;       
      color: #fff;
      border-bottom: 2px solid #f1e98c;
 
   }
   .textOverImage h2 {  

      font-family: 'Quadon_Medium',times,serif;
      overflow-wrap: normal;       
      color: #eee;

   }

}


@media only screen and (min-width:1024px) and (max-width : 1200px) {


   .post-template-single-featured-story  .single-featured-image-header,
.page-template-single-featured-story  .single-featured-image-header {
      max-width: 2000px;
   }

   .post-template-single-featured-story  .single-featured-image-header .textOverImage .wrap, 
.page-template-single-featured-story  .single-featured-image-header .textOverImage .wrap {
      position: absolute;
      right: 0px;
      top: 10%;
      display: block;
      padding: 3rem; 
      margin: 0 auto;      
      max-width:50%;  
      background-color:rgba(0,0,0,.5);

   }  

   .textOverImage h1 {  
      font-family: 'Quadon_Medium',times,serif;
      font-size: 2.2rem;
      overflow-wrap: normal;
      line-height: 1.3;       
      color: #fff;
      border-bottom: 2px solid #f1e98c;
 
   }
   .textOverImage h2 {  

      font-family: 'Quadon_Medium',times,serif;
      overflow-wrap: normal;       
      color: #eee;

   }

}

@media only screen and (min-width:768px) and (max-width : 1023px) {

   .post-template-single-featured-story  .single-featured-image-header .wrap,
.page-template-single-featured-story  .single-featured-image-header .wrap {
      padding-top:0px;
      padding-bottom:0px;
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {

   .post-template-single-featured-story  .single-featured-image-header .wrap,
.page-template-single-featured-story  .single-featured-image-header .wrap {
      padding-top:0px;
      padding-bottom:0px;
   }
}

@media only screen and (min-width:0px) and (max-width : 481px) {

   .post-template-single-featured-story  .single-featured-image-header .wrap,
.page-template-single-featured-story  .single-featured-image-header .wrap {
      padding-top:0px;
      padding-bottom:0px;
   }
}
/* ------------------RIGHT SIDEBAR POST & PAGES  ------------------ */

@media only screen and (min-width:1024px) {

   .post-template-single-right-sidebar .wrap, .page-template-single-right-sidebar .wrap{ 
      position:relative;      
      max-width: 1120px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding: 3rem;
 
   }

   .post-template-single-right-sidebar:not(.error404) #primary, .page-template-single-right-sidebar:not(.error404) #primary {
      position:relative;
      display: block;
      float: left;
      width: 67%;
   }

   .post-template-single-right-sidebar #secondary, .page-template-single-right-sidebar #secondary {
      position:relative;
      display: block;
      float: right;
      width: 30%;
      padding-top:1rem;
      
   }
}

@media only screen and (min-width:768px) and (max-width : 1024px) {

   .post-template-single-right-sidebar .wrap, .page-template-single-right-sidebar .wrap{   
      display: block;
      clear: both;    
      max-width: 100%;
      padding: 2rem;

   }

   .post-template-single-right-sidebar:not(.error404) #primary, .page-template-single-right-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-right-sidebar #secondary, .page-template-single-right-sidebar #secondary{
      padding-top:1rem;
      display: block;
      clear:both;
      width: 100%;
      padding-top: 2rem;  
      
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {
   .post-template-single-right-sidebar .wrap, .page-template-single-right-sidebar .wrap{       
      display: block;
      clear: both;
      max-width: 100%;
      padding: 2rem;
   }

   .post-template-single-right-sidebar:not(.error404) #primary, .page-template-single-right-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-right-sidebar #secondary, .page-template-single-right-sidebar #secondary{
      display:block;
      clear:both;
      width: 100%;
      padding-top: 2rem;      
   }
}

@media only screen and (min-width:0px) and (max-width : 481px) {
   .post-template-single-right-sidebar .wrap, .page-template-single-right-sidebar .wrap{   
      display:block;
      clear:both;    
      max-width: 100%;
      padding: 1rem;
   }

   .post-template-single-right-sidebar:not(.error404) #primary, .page-template-single-right-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-right-sidebar #secondary, .page-template-single-right-sidebar #secondary{
      display:block;
      clear:both;
      width: 100%;
      padding-top: 2rem;  
   }
}


/* ------------------LEFT SIDEBAR POST  ------------------ */

@media only screen and (min-width:1024px) {
   
   .post-template-single-left-sidebar .wrap, .page-template-single-left-sidebar .wrap{       
      position:relative;      
      max-width: 1120px;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:3rem; 
   }

   .post-template-single-left-sidebar:not(.error404) #primary, .page-template-single-left-sidebar:not(.error404) #primary {
      float: right;
      width: 67%;
      display: table-cell;
   }

   .post-template-single-left-sidebar #secondary, .page-template-single-left-sidebar #secondary{
      position:relative;
      display: block !important;
      float: left;
      width: 30%;
      padding-top:1rem;
      
    }

}

@media only screen and (min-width:768px) and (max-width : 1024px) {

   .post-template-single-left-sidebar .wrap, .page-template-single-left-sidebar .wrap{       
      position:relative;      
      width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

   .post-template-single-left-sidebar:not(.error404) #primary, .page-template-single-left-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-left-sidebar #secondary, .page-template-single-left-sidebar #secondary{
      display:block;
      clear:both;
      width: 100%;
      padding-top:2rem;
      
   }
}

@media only screen and (min-width:481px) and (max-width : 768px) {
   .post-template-single-left-sidebar .wrap, .page-template-single-left-sidebar .wrap{       
      position:relative;      
      width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:2rem;
   }

   .post-template-single-left-sidebar:not(.error404) #primary, .page-template-single-left-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-left-sidebar #secondary, .page-template-single-left-sidebar #secondary{
      display:block;
      clear:both;
      width: 100%;
      padding-top:2rem;
      
   }
}

@media only screen and (min-width:0px) and (max-width : 481px) {
   .post-template-single-left-sidebar .wrap, .page-template-single-left-sidebar .wrap{       
      position:relative;      
      width: 100%;
      display: block;
      margin: 0 auto;
      clear:both;
      padding:1rem;
   }

   .post-template-single-left-sidebar:not(.error404) #primary, .page-template-single-left-sidebar:not(.error404) #primary {
      display:block;
      clear:both;
      width: 100%;
      max-width: 832px;
   }

   .post-template-single-left-sidebar #secondary, .page-template-single-left-sidebar #secondary{
      display:block;
      clear:both;
      width: 100%;
      padding-top:1rem;
      
   }
}



/* WRAP CLASSES */
.breakout-hd, .hd-breakout, .max1920{
   max-width:1920px !important;
   position:relative !important;
   display:block !important;
}
.breakout-jumbo, .jumbo-breakout, .max1440{
   max-width:1440px !important;
   position:relative !important;
   display:block !important;
}
.breakout, .breakout-of-page, .max940{
   max-width:940px !important;
   position:relative !important;
   display:block !important;
}
.page-wide, .max768 {
   max-width:768px !important;
   position:relative !important;
   display:block !important;
}
.max2000{
   max-width:2000px !important;
   position:relative !important;
   display:block !important;

} 





/*--------------------------- PARENT GRID ---------------------------*/
.X-row {
   clear:both;
   display:block;
   width:100%;
   overflow:hidden; 
   margin:0 auto;
}
   .row > div:nth-child(odd) {
 
   }

   .row > div:nth-child(even) {
 
   }

   .X-col {
      float:left;
   }

   .pad1{
      padding:1rem;
   }


/* GRID: iPhone*/
@media only screen and (min-width:0px) and (max-width :736px) {
   .X-row {
      width:100%;
   }
   .X-col{
      width:100%;clear:both;display:block;
   }

   .p10, .p20, .p25, .p30, .p33, .p40, .p50, .p60, .p70, .p80, .p90, .p100 {
      width:100%;

   }
   .pad1{
      padding:0rem;
   }
}



/* GRID: iPad, Desktop*/
@media only screen and (min-width:736px)  {
   .X-row {
      width:100%; 
   }
   .X-col{
      float:left;
      clear: none;

   }
   .p10{width:10%;}
   .p20{width:20%;}
   .p25{width:25%;}
   .p30{width:30%;}
   .p33{width:33.333333333%;}
   .p40{width:40%;}
   .p50{width:50%;}
   .p60{width:60%;}
   .p70{width:70%;}
   .p80{width:80%;}
   .p90{width:90%;}
   .p100{width:90%;}

}


   /*--------------------------- PARENT GRID: grid-123 ---------------------------*/
   /* One column for mobile
      Two columns for tablets
      Three columns for desktop
   */

      /* grid-123 GRID: Desktop*/
      @media only screen and (min-width:736px) {
         .grid-123 .X-row {
            width:100%; 
         }
         .grid-123 .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123 .p20{ width:20%; }
         .grid-123 .p25{ width:25%; }
         .grid-123 .p30{ width:30%; }
         .grid-123 .p33{ width:33.333333333%; }
         .grid-123 .p40{ width:40%; }
         .grid-123 .p50{ width:50%; }
         .grid-123 .p60{ width:60%; }
         .grid-123 .p70{ width:70%; }
         .grid-123 .p80{ width:80%; }
         .grid-123 .p90{ width:90%; }
         .grid-123 .p100{ width:90%; }
      }
   /* grid-123 GRID: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
          .grid-123 .X-row {
            width:100%; 
         }
         .grid-123 .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:50%; }
         .grid-123 .p20{ width:50%; }
         .grid-123 .p25{ width:50%; }
         .grid-123 .p30{ width:50%; }
         .grid-123 .p33{ width:50%; }
         .grid-123 .p40{ width:50%; }
         .grid-123 .p50{ width:50%; }
         .grid-123 .p60{ width:50%; }
         .grid-123 .p70{ width:50%; }
         .grid-123 .p80{ width:50%; }
         .grid-123 .p90{ width:50%; }
         .grid-123 .p100{ width:50%; }
   }

   /* grid-123 GRID: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {
      .grid-123{
     
      }
      .grid-123 .X-row {
         width:100%; 
      }
      .grid-123 .X-col{
         width:100%;
         clear:both;
         display:block;
      }
   }


   /*--------------------------- CHILD GRID: .X-stories ---------------------------*/


  
  .X-stories .X-tile-img a {
      display: block;
      position: relative;
      margin:0px;
      padding: 0px;
      max-width: 100%;
      height: auto;
   }

      .X-stories .X-tile-img {
         display: block;
         position: relative; 
      }
      .X-stories .X-tile-img img {
         display: block;
         position: relative; 
      }

   /* X-tile: HD Desktop*/
   @media only screen and (min-width:2000px) {
      .X-stories .X-tile-txt a {
         display:block;
         width:100%;
         height:100%;
         font-size:2.5rem;        
         font-family:Quadon_Medium;
         color:#ffffff !important;
         text-align:left;
         vertical-align:middle;
         display:table-cell;  
         padding-top:1%;
         padding-bottom:1%;  
         padding-left:4%;       
      } 
      .X-stories{
         background-color:#fffff5;
         margin-top: 2rem;
         margin-bottom: 2rem;
      }
      .home .X-stories{
         background-color:#fffff5;
         margin-top: 0rem;
         margin-bottom: 0rem;
      }
      .X-stories .X-tile {
         position:relative;
      }
      .X-stories .X-tile-img {
         position:relative;  
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vh;
            min-height: 6.25rem;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
            color:#ffffff;
            vertical-align: middle;
         }
         .X-stories .X-tile-txt p{
            font-size:1.8rem;  
            font-family: "Surveyor Display A", "Surveyor Display B";
            font-style: normal;
            font-weight: 600;
            display: table-cell;
            color:#ffffff;
            vertical-align: middle;
            line-height: 1.1;
            padding-left: 1rem;
            padding-right: 1rem;
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:2.25rem;        
            font-family:Quadon_Medium;
            color:#ffffff;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;       
         }
         .X-stories .X-tile-desc {  
            padding-top:5%;
            padding-bottom: 5%;
            padding-left:10%;
            padding-right:10%;       
         }  
         .X-stories .X-tile-desc blockquote, .X-stories .X-tile-desc blockquote q{
            font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
            letter-spacing: 1px;
            padding-top: auto;
            font-size:1.2rem;  
            line-height: 140%;
            color: rgba(0, 64, 131,1);
            margin-bottom: 0px;
            margin-top: 0px;   
            padding: 0px;
            margin:0px;
         }
         .X-stories .X-tile-desc blockquote q {
            quotes: "“" "”" "‘" "’";
         }
         .X-stories .X-tile-desc blockquote q:before {
            content: open-quote;
            color: #ccc;

            font-family:Gentona_Book;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.1em;
            vertical-align: -0.4em;
         }
         .X-stories .X-tile-desc blockquote q:after {
            content: close-quote;
            color: #ccc;
            margin-left: 0.1em;
         }
       .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
            font-size: 1.125rem;    
            font-style: normal;
            font-weight: 300;
            line-height: 1.25;
         } 
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.5rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 


   }



   /* X-tile: Desktop/Laptop*/
   @media only screen and (min-width:1024px) and (max-width : 2000px)  {
      .X-stories{
         background-color:#fffff5;
         margin-top: 2rem;
         margin-bottom: 2rem;
      }
      .home .X-stories{
         background-color:#fffff5;
         margin-top: 0rem;
         margin-bottom: 0rem;
      }
      .X-stories .X-tile {
         position:relative;
      }
      .X-stories .X-tile-img {
         position:relative;  
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
            color:#ffffff;
            vertical-align: middle;
         }
         .X-stories .X-tile-txt p{
            display: table-cell;
            color:#ffffff;
            vertical-align: middle;
            font-size:1.4rem;   
            font-family: "Surveyor Display A", "Surveyor Display B";
            font-style: normal;
            font-weight: 600;
            line-height: 1.1;
            padding-left: 1rem;
            padding-right: 1rem;
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size: 1.8vw;       
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;    
            padding-right:8%;     
         }

          /* In case the grid just has two columns, adjust the <a> font size*/  
         .X-stories .p50 .X-tile-txt a {
            display:table-cell; 
            width:100%;
            height:100%;
            font-size:1.1vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle; 
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;    
            padding-right:8%;    
         }
         .X-stories .X-tile-desc {  
            padding-top:5%;
            padding-bottom: 5%;
            padding-left:10%;
            padding-right:10%;  
          
         }  
         .X-stories .X-tile-desc > p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
            font-size: 1rem;
         }   
         .X-stories .X-tile-desc blockquote, .X-stories .X-tile-desc blockquote q{
            font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
            letter-spacing: 1px;
            padding-top: auto;
            font-size: 1.4rem;
            line-height: 140%;
            color: rgba(0, 64, 131,1);
            margin-bottom: 0px;
            margin-top: 0px;   
            padding: 0px;
            margin:0px;
         }
         .X-stories .X-tile-desc blockquote q {
            quotes: "“" "”" "‘" "’";
         }
         .X-stories .X-tile-desc blockquote q:before {
            content: open-quote;
            color: #ccc;

            font-family:Gentona_Book;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.1em;
            vertical-align: -0.4em;
         }
         .X-stories .X-tile-desc blockquote q:after {
            content: close-quote;
            color: #ccc;
            margin-left: 0.1em;
         }
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }



   /* X-tile: Desktop*/
   @media only screen and (min-width:768px) and (max-width : 1023px)  {
      .X-stories{
         background-color:#fffff5;
         margin-top: 1rem;
         margin-bottom: 1rem;
      }
      .home .X-stories{
         background-color:#fffff5;
         margin-top: 0rem;
         margin-bottom: 0rem;
      }
      .X-stories .X-tile {
         position:relative;
      }
      .X-stories .X-tile-img {
         position:relative;  
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 8vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
            color:#ffffff;
            vertical-align: middle;
         }
         .X-stories .X-tile-txt p{
            display: table-cell;
            color:#ffffff;
            vertical-align: middle;
            font-size: 1.2rem; 
            font-family: "Surveyor Display A", "Surveyor Display B";
            font-style: normal;
            font-weight: 600;
            line-height: 1.1;
            padding-left: 1rem;
            padding-right: 1rem;
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:2vw;       
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;    
            padding-right:8%;     
         }

          /* In case the grid just has two columns, adjust the <a> font size*/  
         .X-stories .p50 .X-tile-txt a {
            display:table-cell; 
            width:100%;
            height:100%;
            font-size:1.3vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle; 
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;    
            padding-right:8%;    
         }


         .X-stories .X-tile-desc {  
            padding-top:5%;
            padding-bottom: 5%;
            padding-left:10%;
            padding-right:10%;     
         }  
         .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-stories .X-tile-desc blockquote, .X-stories .X-tile-desc blockquote q{
            font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
            letter-spacing: 1px;
            padding-top: auto;
            font-size: 1.5rem;
            line-height: 140%;
            color: rgba(0, 64, 131,1);
            margin-bottom: 0px;
            margin-top: 0px;   
            padding: 0px;
            margin:0px;
         }
         .X-stories .X-tile-desc blockquote q {
            quotes: "“" "”" "‘" "’";
         }
         .X-stories .X-tile-desc blockquote q:before {
            content: open-quote;
            color: #ccc;

            font-family:Gentona_Book;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.1em;
            vertical-align: -0.4em;
         }
         .X-stories .X-tile-desc blockquote q:after {
            content: close-quote;
            color: #ccc;
            margin-left: 0.1em;
         }
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }

   /* X-tile: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
      .X-stories{
         background-color:#fffff5;
         margin-top: 1rem;
         margin-bottom: 1rem;
      }
      .home .X-stories{
         background-color:#fffff5;
         margin-top: 0rem;
         margin-bottom: 0rem;
      }
      .X-stories .X-tile {
         position:relative;
      }
         .X-stories .X-tile-img {
            position:relative;   

         }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 10vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
            color:#ffffff;
            vertical-align: middle;
         }
         .X-stories .X-tile-txt p{
            display: table-cell;
            color:#ffffff;
            vertical-align: middle;
            font-size:2.5vw;  
            font-family: "Surveyor Display A", "Surveyor Display B";
            font-style: normal;
            font-weight: 600;
            line-height: 1.1;
            padding-left: 1rem;
            padding-right: 1rem;
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:3vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:6%; 
            padding-right:6%;
      
         }
        .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;  
            margin:0px;
            padding: 0rem;
            overflow-y:scroll !important;
         } 

     .X-stories .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            visibility: hidden;
            margin:0px;
            padding:0px;
           transition: all 1s ease 0s;
            padding-top:5%;
            padding-bottom: 5%;
            padding-left:5%;
            padding-right:5%;           
         }  

      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
     } 
         .X-stories .X-tile-desc blockquote, .X-stories .X-tile-desc blockquote q{
            font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
            letter-spacing: 1px;
            padding-top: auto;
            font-size: 1.3rem;
            line-height: 140%;
            color: rgba(0, 64, 131,1);
            margin-bottom: 0px;
            margin-top: 0px;   
            padding: 0px;
            margin:0px;
         }
         .X-stories .X-tile-desc blockquote q {
            quotes: "“" "”" "‘" "’";
         }
         .X-stories .X-tile-desc blockquote q:before {
            content: open-quote;
            color: #666666;

            font-family:Gentona_Book;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.1em;
            vertical-align: -0.4em;
         }
         .X-stories .X-tile-desc blockquote q:after {
            content: close-quote;
            color: #666666;
            margin-left: 0.1em;
         }
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            background-color: rgb(0,82,155);
            color:  rgb(255,255,255) !important;
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            font-weight: bold;
            padding:.5rem;     
            margin-top: .5rem;
            margin-bottom: .5rem;
            text-align: center;
         }   
   }

   /* X-tile: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 480px) {     
      .X-stories{
         position: relative;
         background-color:#fffff5;
         margin-top: 1rem;
         margin-bottom: 1rem;
      }
      .home .X-stories{
         background-color:#fffff5;
         margin-top: 0rem;
         margin-bottom: 0rem;
      }
      .X-tile{
         display:block;position: relative; 
      }
      .X-stories .X-tile-img {
         position:relative; 
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 20vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
            color:#ffffff;
            vertical-align: middle;
         }
         .X-stories .X-tile-txt p{
            display: table-cell;
            color:#ffffff;
            vertical-align: middle;
            font-size:4vw;    
            font-family: "Surveyor Display A", "Surveyor Display B";
            font-style: normal;
            font-weight: 600;
            line-height: 1.1;
            padding-left: .5rem;
            padding-right: .5rem;
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.625rem;   /*fallback*/ 
            font-size:6vw;       
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:center;
            vertical-align:middle;
            display:table-cell;  
            padding-top:.5rem;
            padding-bottom:.5rem;           
         }
         .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;     
            margin: 0px;           
            padding: 0rem;
            overflow-y:scroll !important;
         } 
     .X-stories .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            visibility: hidden;
            margin:0px;
            padding:0px;
            transition: all 1s ease 0s;
            padding-top:5%;
            padding-bottom: 5%;
            padding-left:5%;
            padding-right:5%;           
         }  
      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
      } 
         .X-stories .X-tile-desc blockquote, .X-stories .X-tile-desc blockquote q{
            font-family: 'Quadon_ExtraBoldItalic', Arial, sans-serif;
            letter-spacing: 1px;
            padding-top: auto;
            font-size: 1.2rem;
            line-height: 140%;
            color: rgba(0, 64, 131,1);
            padding: 0px;
            margin:0px; 
            margin-bottom: .5rem;
            margin-top: .5rem;   
         }
         .X-stories .X-tile-desc blockquote q {
            quotes: "“" "”" "‘" "’";
         }
         .X-stories .X-tile-desc blockquote q:before {
            content: open-quote;
            color: #666666;

            font-family:Gentona_Book;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.1em;
            vertical-align: -0.4em;
         }
         .X-stories .X-tile-desc blockquote q:after {
            content: close-quote;
            color: #666666;
            margin-left: 0.1em;
         }
     
      /*   Arrow for   .X-tile-desc               
        .X-stories .X-tile-desc:before {
            background: #4c87b5;
            content: '';
            height: 48px;
            left: -24px;
            margin: -24px 0 0 0;
            position: absolute;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            top: 50%;
            width: 48px;
      }

*/
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            background-color: rgb(0,82,155);
            color:  rgb(255,255,255) !important;
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            font-weight: bold;
            padding: .5rem;
            margin-top: .5rem;
            margin-bottom: .5rem;
            text-align: center;
         }
         .X-stories .X-tile-desc-toggle {             
            top:0px;
            display:block;
           
         } 
   }


   /*--------------------------- CHILD GRID: .X-blocks ---------------------------*/


   .X-blocks  .X-tile{
      border-bottom:3px solid #F7F4EB;

   }
  
        .X-departments .X-tile-txt a {
           font-size: 2.25rem;
        }

  .X-blocks .X-tile-img a {
      display: block;
      position: relative;
      margin:0px;
      padding: 0px;
      max-width: 100%;
      height: auto;
   }

      .X-blocks .X-tile-img {
         display: block;
         position: relative; 
      }
      .X-blocks .X-tile-img img {
         display: block;
         position: relative; 
      }

 

   /* X-tile: HD Desktop*/
   @media only screen and (min-width:2000px) {

      .X-blocks .X-tile-txt a {
         display:block;
         width:100%;
         height:100%;
         font-size:2.5rem;        
         font-family:Quadon_Medium;
         color:#ffffff !important;
         text-align:left;
         vertical-align:middle;
         display:table-cell;  
         padding-top:1%;
         padding-bottom:1%;  
         padding-left:4%;  
         display:none;      
      }
      .X-blocks .X-tile-desc p {   
         font-family:Gentona_Book;
         color:#4A4A4A;
         font-size:1.2rem;
      }  
      .X-blocks{
         background-color:#fffff5;
         margin-top: 2rem;
         margin-bottom: 2rem;
      }
      .X-blocks .X-tile {
         position:relative;
      }
      .X-blocks .X-tile-img {
         position:relative;  
      }
         .X-blocks .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vh;
            min-height: 6.25rem;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-blocks .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.4rem;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;   
            padding-right:8%;    
         }
        .X-big-font .X-tile-txt a {
           font-size: 2rem !important;
        }
         .X-blocks .X-tile-desc {  
            padding-top:5%;
            padding-left:10%;
            padding-right:10%;          
         }  
         .X-blocks .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-blocks .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }

   /* X-tile: Desktop/Laptop*/
   @media only screen and (min-width:1024px) and (max-width : 2000px)  {

      .X-blocks{
         background-color:#fffff5;
         margin-top: 2rem;
         margin-bottom: 2rem;
      }
      .X-blocks .X-tile {
         position:relative;
      }
      .X-blocks .X-tile-img {
         position:relative;  
      }
         .X-blocks .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-blocks .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.4rem;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;   
            padding-right:8%;    
         }
        .X-big-font .X-tile-txt a {
           font-size: 1.5rem !important;
        }
         .X-blocks .X-tile-desc {  
            padding-top:5%;
            padding-left:10%;
            padding-right:10%;         
         }  
         .X-blocks .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-blocks .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }

   /* X-tile: ipad*/
   @media only screen and (min-width:768px) and (max-width : 1024px)  {

      .X-blocks{
         background-color:#fffff5;
         margin-top: 2rem;
         margin-bottom: 2rem;
      }
      .X-blocks .X-tile {
         position:relative;
      }
      .X-blocks .X-tile-img {
         position:relative;  
      }
         .X-blocks .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 8vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-blocks .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.4rem;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;   
            padding-right:8%;    
         }
        .X-big-font .X-tile-txt a {
           font-size: 1.5rem !important;
        }
         .X-blocks .X-tile-desc {  
            padding-top:5%;
            padding-left:10%;
            padding-right:10%;         
         }  
         .X-blocks .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-blocks .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }

   /* X-tile: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
      .X-blocks{
         background-color:#fffff5;
         margin-top: 1rem;
         margin-bottom: 1rem;
      }
      .X-blocks .X-tile {
         position:relative;
      }
         .X-blocks .X-tile-img {
            position:relative;   

         }
         .X-blocks .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 10vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-blocks .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:2.5vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1rem;
            padding-bottom:1rem;  
            padding-left:1rem;
            padding-right:1rem;      
         }
        .X-blocks .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;     
            margin:0px;
            padding:1rem;;
            overflow-y:scroll !important;
         } 

     .X-blocks .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            color:#ffffff !important;
            visibility: hidden;
            margin:0px;
            padding:0px;
          transition: all 1s ease 0s;
           
         }  

      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
     } 
         .X-blocks .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-left:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         }   
   }

   /* X-tile: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {

     
      .X-blocks{
         position: relative;
         background-color:#fffff5;
         margin-top: 1rem;
         margin-bottom: 1rem;
      }
      .X-tile{
         display:block;position: relative; 

      }
      .X-blocks .X-tile-img {
         position:relative; 
      }
         .X-blocks .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 20vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-blocks .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.625rem;   /*fallback*/ 
            font-size:4vw;       
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:center;
            vertical-align:middle;
            display:table-cell;  
            padding-top:.5rem;
            padding-bottom:.5rem;  
            padding-left:.5rem;
            padding-right:.5rem;         
         }
         .X-blocks .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;     
            margin:0px;
            padding:1rem;;
            overflow-y:scroll !important;
         } 

     .X-blocks .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            color:#ffffff !important;
            visibility: hidden;
            margin:0px;
            padding:0px;
          transition: all 1s ease 0s;
           
         }  

      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
     } 

     
      /*   Arrow for   .X-tile-desc               
        .X-blocks .X-tile-desc:before {
            background: #4c87b5;
            content: '';
            height: 48px;
            left: -24px;
            margin: -24px 0 0 0;
            position: absolute;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            top: 50%;
            width: 48px;
      }

*/
         .X-blocks .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-left:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         }
         .X-blocks .X-tile-desc-toggle {             
            top:0px;
            display:block;
           
         } 
   }


/* ------------------GALLERIES  ------------------ */


.gallery-item {
	display: inline-block;
	text-align: left;
	vertical-align: top;
	margin: 0 0 1.5em;
	padding: 0 1em 0 0;
	width: 50%;
}

.gallery-columns-1 .gallery-item {
	width: 100%;
}

.gallery-columns-2 .gallery-item {
	max-width: 50%;
}

.gallery-item a,
.gallery-item a:hover,
.gallery-item a:focus,
.widget-area .gallery-item a,
.widget-area .gallery-item a:hover,
.widget-area .gallery-item a:focus {
	-webkit-box-shadow: none;
	box-shadow: none;
	background: none;
	display: inline-block;
	max-width: 100%;
}

.gallery-item a img {
	display: block;
	-webkit-transition: -webkit-filter 0.2s ease-in;
	transition: -webkit-filter 0.2s ease-in;
	transition: filter 0.2s ease-in;
	transition: filter 0.2s ease-in, -webkit-filter 0.2s ease-in;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.gallery-item a:hover img,
.gallery-item a:focus img {
	-webkit-filter: opacity(60%);
	filter: opacity(60%);
}

.gallery-caption {
	display: block;
	text-align: left;
	padding: 0 10px 0 0;
	margin-bottom: 0;
}


@media screen and (min-width: 30em) {

	/* Gallery Columns */

	.gallery-item {
		max-width: 25%;
	}

	.gallery-columns-1 .gallery-item {
		max-width: 100%;
	}

	.gallery-columns-2 .gallery-item {
		max-width: 50%;
	}

	.gallery-columns-3 .gallery-item {
		max-width: 33.33%;
	}

	.gallery-columns-4 .gallery-item {
		max-width: 25%;
	}
}

@media screen and (min-width: 48em) {

	/* Gallery Columns */

	.gallery-columns-5 .gallery-item {
		max-width: 20%;
	}

	.gallery-columns-6 .gallery-item {
		max-width: 16.66%;
	}

	.gallery-columns-7 .gallery-item {
		max-width: 14.28%;
	}

	.gallery-columns-8 .gallery-item {
		max-width: 12.5%;
	}

	.gallery-columns-9 .gallery-item {
		max-width: 11.11%;
	}

}











/** ACCESSIBILITY **/
.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px;
    word-wrap: normal !important;
}

/* Alt text for SVGs */
.SVGaltText{
   display:none;

}





/** DISABLE TWENTYSEVENTEEN ELEMENTS **/

.no-comments{
   display:none;
}

.skip-link, .screen-reader-text{

   display:none;
}
.entry-footer .cat-links .icon, .entry-footer .tags-links .icon, .cat-links {
   display:none;
}
.icon-folder-open{
   display:none;

}
/*---------- Forms-------------*/

label {
	color: #333;
	display: block;
	font-weight: 800;
	margin-bottom: 0.5em;
}

fieldset {
	margin-bottom: 1em;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: #666;
	background: #fff;
	background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
	border: 1px solid #ccc;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	display: block;
	padding: 0.7em;
	width: 100%;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	color: #222;
	border-color: #333;
}

select {
	border: 1px solid #bbb;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	height: 3em;
	max-width: 100%;
}

input[type="radio"],
input[type="checkbox"] {
	margin-right: 0.5em;
}

input[type="radio"] + label,
input[type="checkbox"] + label {
	font-weight: 400;
}

button  :not('.icon-angle-down'),
input[type="button"],
input[type="submit"] {
	background-color: #222;
	border: 0;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff;
	cursor: pointer;
	display: inline-block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: 800;
	line-height: 1;
	padding: 1em 2em;
	text-shadow: none;
	-webkit-transition: background 0.2s;
	transition: background 0.2s;
}

input + button,
input + input[type="button"],
input + input[type="submit"] {
	padding: 0.75em 2em;
}

button.secondary,
input[type="reset"],
input[type="button"].secondary,
input[type="reset"].secondary,
input[type="submit"].secondary {
	background-color: #ddd;
	color: #222;
}

button:hover,
button:focus :not('.icon-angle-down'),
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus {
	background: #767676;
}

button.secondary:hover,
button.secondary:focus,
input[type="reset"]:hover,
input[type="reset"]:focus,
input[type="button"].secondary:hover,
input[type="button"].secondary:focus,
input[type="reset"].secondary:hover,
input[type="reset"].secondary:focus,
input[type="submit"].secondary:hover,
input[type="submit"].secondary:focus {
	background: #bbb;
}

/* Placeholder text color -- selectors need to be separate to work. */
::-webkit-input-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}

:-moz-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}

::-moz-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
	opacity: 1;
	/* Since FF19 lowers the opacity of the placeholder by default */
}

.X-search-form-container ::-moz-placeholder  {
	color: #fff;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
	opacity: 1;
	/* Since FF19 lowers the opacity of the placeholder by default */

   }


:-ms-input-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}

/* Search */

.search-form {
	position: relative;
}

.search-form .search-submit {
	bottom: 3px;
	padding: 0em 1em;
	position: absolute;
	right: 3px;
	top: 3px; border:0px;
}


button.search-submit :focus, button.search-submit:hover{
    background-color: #bc581a;
    cursor: pointer;
}


.search-form .search-submit .icon {
	height: 24px;
	top: -2px;
	width: 24px;
}

@media only screen and (min-width:1024px) {
   #secondary .search-form {
      max-width:100%;
   }
}
@media only screen and (min-width:768px) and (max-width : 1024px) {
   #secondary .search-form {
      max-width:50%;
   }
}
@media only screen and (min-width:481px) and (max-width : 768px) {
   #secondary .search-form {
      max-width:50%;
   }
}
@media only screen and (min-width:0px) and (max-width : 481px) {
   #secondary .search-form {
      max-width:100%;
   }
}


   .slideImage{
      position:relative;
      width:100%;
      height:100%; 
      height: auto;
      left:0px;
      top:0px;
      margin:0px;
      padding:0px; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-repeat: no-repeat;
      background-position:  center center ;   
   }


   .slideImage-prop{
      display:block;
      clear:both;
       overflow: hidden;

  }



   .slideImage img {
      display:block;
      width: 100%;
      width: 100vw !important;
      height: auto;
      margin:0px;
      padding:0px;
   }




   
   .slideReadMore{
      color: rgb(0,82,155); !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }

   .yellow{
      color: #f1f096;
   }

   .black-text{
      color: #000000 !important;
   }

.black-bg {
    background-color: rgba(0,0,0,.5);
    display: inline-block;
}



   @media only screen and (min-width:2600px) {
   .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#4a4a6a;
      overflow: hidden;
   }
   .slideCaption{
      position: absolute;   
      bottom:40%;
      z-index:1;
      width: 100%;  
      color: #ffffff;
   }
   .slideCaption h1 {
      font-family: Gentona_Bold !important;
      font-size: 6rem;
      line-height: 1.2 !important;
   }
   .slideCaption .wrap {      
      max-width: 2000px !important;
   }
   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
       color: #fff;
   }
   .slideCaption p, .slideCaption {
      color: #fff;
   }
   .slide-caption-sub-head{
      padding: 1rem;
      background-color: rgba(0,0,0,.5);
      font-family: Quadon_Medium;
      font-size: 1.4rem;
      line-height: 2.6;
   }
   .highlight-caption{
      color: #ffffff;
   }
   .slideReadMore{
      color: #9AD2E1 !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }
   .slideCaption .wrap {
      padding-top:0px;
      padding-bottom: 0px;
   }
}



   @media only screen and (min-width:2000px) and (max-width :2600px) {
   .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#4a4a6a;
      overflow: hidden;
   }
   .slideCaption{
      position: absolute;   
      bottom:40%;
      z-index:1;
      width: 100%;  
      color: #ffffff;
   }
   .slideCaption h1 {
      font-family: Gentona_Bold !important;
      font-size: 4rem;
      line-height: 1.2 !important;
   }
   .slideCaption .wrap {      
      max-width: 2000px !important;
   }
   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
       color: #fff;
   }
   .slideCaption p, .slideCaption {
      color: #fff;
   }
   .slide-caption-sub-head{
      padding: 1rem;
      background-color: rgba(0,0,0,.5);
      font-family: Quadon_Medium;
      font-size: 1.4rem;
      line-height: 2.6;
   }
   .highlight-caption{
      color: #ffffff;
   }
   .slideReadMore{
      color: #9AD2E1 !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }
   .slideCaption .wrap {
      padding-top:0px;
      padding-bottom: 0px;
   }
}




   @media only screen and (min-width:1400px) and (max-width : 2000px) {
   .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#4a4a6a;
      overflow: hidden;
   }


   .slideCaption{
      position: absolute;   
      bottom:40%;
      z-index:1;
      width: 100%;  
      color: #ffffff;
   }

   .slideCaption .wrap {
      padding-top:0px;
      padding-bottom: 0px;
   }

   .slideCaption h1 {
      font-family: Gentona_Bold !important;
      font-size: 4rem;
      line-height: 1.2 !important;
   }

   .slideCaption .wrap {
      
      max-width: 1440px !important;
   }


   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
       color: #fff;
   }

   .slideCaption p, .slideCaption {
      color: #fff;
   }

   .slide-caption-sub-head{
      padding: 1rem;
      background-color: rgba(0,0,0,.5);
      font-family: Quadon_Medium;
      font-size: 1.4rem;
      line-height: 2.6;

   }

   .highlight-caption{
      color: #ffffff;
   }

   .slideReadMore{
      color: #9AD2E1 !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }



}

   @media only screen and (min-width:1024px) and (max-width : 1400px) {
 .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#4a4a6a;
      overflow: hidden;
   }


   .slideCaption{
      position: absolute;   
      bottom:40%;
      z-index:1;
      width: 100%;  
      color: #ffffff;
   }

   .slideCaption .wrap {
      padding-top:0px;
      padding-bottom: 0px;
   }

   .slideCaption h1 {
      font-family: Gentona_Bold !important;
      font-size:3rem;
      line-height: 1.1 !important;
   }

   .slideCaption .wrap {
      
      max-width: 1440px !important;
   }


   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
       color: #fff;
   }

   .slideCaption p, .slideCaption {
      color: #fff;
   }

   .slide-caption-sub-head{
      padding: 1rem;
      background-color: rgba(0,0,0,.5);
      font-family: Quadon_Medium;
      font-size: 1.4rem;
      line-height: 2.6;

   }

   .highlight-caption{
      color: #ffffff;
   }

   .slideReadMore{
      color: #9AD2E1 !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }


   }




   @media only screen and (min-width:768px) and (max-width : 1024px) {
   .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#4a4a6a;
      overflow: hidden;
   }


   .slideCaption{
      position: absolute;   
      bottom:0;
      z-index:1;
      width: 100%;  
      color: #ffffff;
   }
   .slideCaption .wrap {
      padding-top:0px;
      padding-bottom: 0px;
   }


   .slideCaption h1 {
      font-family: Gentona_Bold !important;
      font-size:2.5rem;
      line-height: 1.1 !important;
   }

   .slideCaption .wrap {
      
      max-width: 1440px !important;
   }


   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
       color: #fff;
   }

   .slideCaption p, .slideCaption {
      color: #fff;
   }

   .slide-caption-sub-head{
      padding: 1rem;
      background-color: rgba(0,0,0,.5);
      font-family: Quadon_Medium;
      font-size: 1.4rem;
      line-height: 2.6;

   }


   .highlight-caption{
      color: #ffffff;
   }

   .slideReadMore{
      color: #9AD2E1 !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }


}


   @media only screen and (min-width:0px) and (max-width : 767px) {


   .slides{
      display: block;
      clear: both;
      position: relative;
      width:100%;  
      margin: 0 auto;
      background-color:#fffff5;
      overflow: hidden;
   }
      .slideCaption{
         position: relative;
         z-index:1;
         width: 100%;
         bottom: 0px;
         background-color: #fffff5;
         color: #000000;
      }

   .slideCaption h1, .slideCaption h2, .slideCaption h3,  .slideCaption h4, .slideCaption h5 {
      font-family: 'Roboto', sans-serif;
      text-transform: uppercase;
      color:rgba(0, 64, 131, 1);
   }




.slideCaption h1 {
    margin-top: -3px;
    transition: color 0.6s ease 0s;
    color: rgb(18, 18, 18);
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem;
    line-height: 1.2;
    font-weight: 200;
    letter-spacing: 0.2px;
}



.slideCaption h1::after {
    content: "";
    display: block;
    position: relative;
    border: 1px solid rgb(226, 226, 226);
    bottom: -4px;
    left: 0px;
    height: 0px;
    width: 60px;
}




   .slideCaption p, .slideCaption {
      color:  #333333;
   }

   .highlight-caption{
      color:#07446b;
   }

   .slideCaption span{

   }

   .slideReadMore{
      color: rgb(0,82,155); !important;
      text-transform: uppercase;
      font-family: Gentona_Bold;
   }

   }


.controls {
   position:absolute;
   top:0px;
   display:block;
   height:100%;
   width:100%;
   margin: 0 auto;
   padding:0px;

}

.controls .inner {
    max-width: 90%;
    margin: 0 auto;
    height:90%;
}

.inner .prev {
    float: left;
    margin-top:20%;
    margin-left:1rem;
 
}

.inner .prev::after {
    left: 23px;
}

.inner .next {
    float: right;
    margin-top:20%;
  margin-right:1rem;
}

.next::after {
    right: 17px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}


.inner .btn::after {
    width: 26px;
    height: 26px;
    top: 15px;
}

.inner .btn {
     z-index:1;
     width: 57px;
    height: 57px;
    /* background: rgba(51,51,51,0.5); */
    cursor: pointer;
    position: relative;
    transition: all .2s ease-in-out;

}

.inner .btn:hover {
     /*  background-color:rgba(0, 64, 131,.5); */
    -webkit-transform: scale( 1.5 );
    -moz-transform: scale( 1.5  );
    -o-transform: scale( 1.5  );
    -ms-transform: scale( 1.5  );
    transform: scale( 1.5  );
 


  
}

.prev::after {
    left: 17px;
    -ms-transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    transform: rotate(225deg);
}

.btn::after {
    content: '';
    display: block;
    width: 19px;
    height: 19px;
    border-top: 2px solid #fff;
    border-right: 2px solid #fff;
    position: absolute;
    top: 12px;
}
.btn:hover::after{
    border-top: 2px solid #F37021;
    border-right: 2px solid #F37021;



}

.controls *::after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


.divider-content::after {
    content: "";
    width: 100%;
    height: 1px;
    background: #d8dad9;
    position: absolute;
    top: 25px;
    left: 0;
    z-index: 0;
}

.divider-content {
    width: 100%;
    margin-top: 0;
    margin-bottom: 0;
    position: relative;
}

.divider-content .divider-symbol {
    clear: both;
    margin: 0 auto;
    background-position: 78.7% 73.10195%;
    background-color: #fff;
    padding-left: 10px;
    padding-right: 10px;
    position: relative;
    z-index: 1;
}

.divider-symbol {
    width: 50px;
    height: 50px;
}





@-webkit-keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
@keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
.fadeOut {
  opacity:0;
  -moz-animation   : fadeout 2s linear;
  -webkit-animation: fadeout 2s linear;
  animation        : fadeout 2s linear;

}

@-webkit-keyframes fadein {
    0% {opacity:0;}
    100% {opacity:1;}
}
@keyframes fadein {
    0% {opacity:0;}
    100% {opacity:1;}
}
.fadeIn {
  opacity:1;
  -moz-animation   : fadein 2s linear;
  -webkit-animation: fadein 2s linear;
  animation        : fadein 2s linear;
}


.menu-scroll-down{
   display:none;

}







.cinema2
{
   animation-duration: 2s;
    animation-name: fadeAndScale;
    animation-timing-function: cubic-bezier(.71,.55,.62,1.57);
}

@keyframes fadeAndScale {
    from {
        opacity: 0;
        transform: scale(.1, .1);
    }
    to {
        opacity: 1;
        transform: scale(2, 2);
    }
}


.container{
	width: 100%;
	position: relative;
	overflow:hidden;
}

a {
  text-decoration:none;
}

h1.main,p.demos {
	-webkit-animation-delay: 18s;
	-moz-animation-delay: 18s;
	-ms-animation-delay: 18s;
	animation-delay: 18s;
}
.sp-container {
	position: fixed;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 0;

}
.sp-content {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0px;
	top: 0px;
	z-index: 2;
}
.sp-container h2 {
	position: absolute;
	top: 50%;
	line-height: 100px;
	height: 90px;
	margin-top: -50px;
	font-size: 90px;
	width: 100%;
	text-align: center;
	color: transparent;
	-webkit-animation: blurFadeInOut 3s ease-in backwards;
	-moz-animation: blurFadeInOut 3s ease-in backwards;
	-ms-animation: blurFadeInOut 3s ease-in backwards;
	animation: blurFadeInOut 3s ease-in backwards;
}
.sp-container h2.frame-1 {
	-webkit-animation-delay: 0s;
	-moz-animation-delay: 0s;
	-ms-animation-delay: 0s;
	animation-delay: 0s;
}
.sp-container h2.frame-2 {
	-webkit-animation-delay: 3s;
	-moz-animation-delay: 3s;
	-ms-animation-delay: 3s;
	animation-delay: 3s;
}
.sp-container h2.frame-3 {
	-webkit-animation-delay: 6s;
	-moz-animation-delay: 6s;
	-ms-animation-delay: 6s;
	animation-delay: 6s;
}
.sp-container h2.frame-4 {
	font-size: 200px;
	-webkit-animation-delay: 9s;
	-moz-animation-delay: 9s;
	-ms-animation-delay: 9s;
	animation-delay: 9s;
}
.sp-container h2.frame-5 {
	-webkit-animation: none;
	-moz-animation: none;
	-ms-animation: none;
	animation: none;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
}
.sp-container h2.frame-5 span {
	-webkit-animation: blurFadeIn 3s ease-in 12s backwards;
	-moz-animation: blurFadeIn 1s ease-in 12s backwards;
	-ms-animation: blurFadeIn 3s ease-in 12s backwards;
	animation: blurFadeIn 3s ease-in 12s backwards;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
}
.sp-container h2.frame-5 span:nth-child(2) {
	-webkit-animation-delay: 13s;
	-moz-animation-delay: 13s;
	-ms-animation-delay: 13s;
	animation-delay: 13s;
}
.sp-container h2.frame-5 span:nth-child(3) {
	-webkit-animation-delay: 14s;
	-moz-animation-delay: 14s;
	-ms-animation-delay: 14s;
	animation-delay: 14s;
}
.sp-globe {
	position: absolute;
	width: 282px;
	height: 273px;
	left: 50%;
	top: 50%;
	margin: -137px 0 0 -141px;
	background: transparent url() no-repeat top left;
	-webkit-animation: fadeInBack 3.6s linear 14s backwards;
	-moz-animation: fadeInBack 3.6s linear 14s backwards;
	-ms-animation: fadeInBack 3.6s linear 14s backwards;
	animation: fadeInBack 3.6s linear 14s backwards;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	filter: alpha(opacity=30);
	opacity: 0.3;
	-webkit-transform: scale(5);
	-moz-transform: scale(5);
	-o-transform: scale(5);
	-ms-transform: scale(5);
	transform: scale(5);
}
.sp-circle-link {
	position: absolute;
	left: 50%;
	bottom: 100px;
	margin-left: -50px;
	text-align: center;
	line-height: 100px;
	width: 100px;
	height: 100px;
	background: #fff;
	color: #F37021;
	font-size: 25px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-animation: fadeInRotate 1s linear 16s backwards;
	-moz-animation: fadeInRotate 1s linear 16s backwards;
	-ms-animation: fadeInRotate 1s linear 16s backwards;
	animation: fadeInRotate 1s linear 16s backwards;
	-webkit-transform: scale(1) rotate(0deg);
	-moz-transform: scale(1) rotate(0deg);
	-o-transform: scale(1) rotate(0deg);
	-ms-transform: scale(1) rotate(0deg);
	transform: scale(1) rotate(0deg);
}
.sp-circle-link:hover {
	background:  #F37021;
	color: #fff;
}
/**/
@-webkit-keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-webkit-transform: scale(0);
	}
}
@-webkit-keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	50%{
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		-webkit-transform: scale(1.1);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
}
@-webkit-keyframes fadeInBack{
	0%{
		opacity: 0;
		-webkit-transform: scale(0);
	}
	50%{
		opacity: 0.4;
		-webkit-transform: scale(2);
	}
	100%{
		opacity: 0.2;
		-webkit-transform: scale(5);
	}
}
@-webkit-keyframes fadeInRotate{
	0%{
		opacity: 0;
		-webkit-transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		-webkit-transform: scale(1) rotate(0deg);
	}
}
/**/
@-moz-keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-moz-transform: scale(0);
	}
}
@-moz-keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
}
@-moz-keyframes fadeInBack{
	0%{
		opacity: 0;
		-moz-transform: scale(0);
	}
	50%{
		opacity: 0.4;
		-moz-transform: scale(2);
	}
	100%{
		opacity: 0.2;
		-moz-transform: scale(5);
	}
}
@-moz-keyframes fadeInRotate{
	0%{
		opacity: 0;
		-moz-transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		-moz-transform: scale(1) rotate(0deg);
	}
}
/**/
@keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		transform: scale(0);
	}
}
@keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	50%{
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		transform: scale(1.1);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
}
@keyframes fadeInBack{
	0%{
		opacity: 0;
		transform: scale(0);
	}
	50%{
		opacity: 0.4;
		transform: scale(2);
	}
	100%{
		opacity: 0.2;
		transform: scale(5);
	}
}
@keyframes fadeInRotate{
	0%{
		opacity: 0;
		transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		transform: scale(1) rotate(0deg);
	}
}


.blue{
   color:rgba(0, 64, 131, .4) !important;

}

.one{
   color:rgba(0, 64, 131, 1) !important;
}

.two{
   color:rgba(3, 140, 45, 1) !important;
}

.three{
   color:rgba(244, 147, 8, 1) !important;

}


.wrap1440{

   max-width: 1440px;
   margin: 0 auto;
   }


/* HOME PAGE BLOCKS */



   @media only screen and (min-width:1024px)  {
   .blueBox{
      display:table;
      clear:both; 
      width:100% !important;
      background-color: #5789B7;
      width:100%;
      height: 2.1875rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.875rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 

   }  

 }


   @media only screen and (min-width:768px) and (max-width : 1024px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #5789B7;
      width:100%;
      height: 2.1875rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.7rem;
      margin-bottom:.5rem;
   }  

 }

   @media only screen and (min-width:481px) and (max-width : 768px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #5789B7;
      width:100%;
      height: 2.1875rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.5rem;
      margin-bottom:.5rem;
   }  

 }


   @media only screen and (min-width:0px) and (max-width : 481px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #5789B7;
      width:100%;
      height: 2.1875rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.5rem;
      margin-bottom:.5rem;
   }  

 }



.darkBlue{
   display:table;
   width:100% !important;
   background-color: #084B81;
   width:100%;
   height:5rem;
   text-align:center;
}

.darkBlue h2{
   display:block;
   vertical-align:middle;
   margin:0 auto; 
   color:#ffffff;
   font-family: Gentona_Medium;
   text-transform:uppercase;
   font-size:1.875rem;
   color:#ffffff;
   text-decoration:none;
   line-height:5rem;
   text-align:center;
}


/* GRID: X-bigNums */
   /* X-bigNums: Desktop*/
   @media only screen and (min-width:736px) {
      .X-bigNums{
         text-align:center;
      }


   }

   /* X-X-bigNums: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 736px) {

   }

   /* X-X-bigNums: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {

   }




   /*--------------------------- GRID: grid-123-b ---------------------------*/
   /* One column for mobile portrait
      Two columns for mobile landscape AND tablets
      Three columns for desktop
   */

      /* grid-123 GRID: Desktop*/
      @media only screen and (min-width:1024px) {
         .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123-b .p20{ width:20%; }
         .grid-123-b .p25{ width:25%; }
         .grid-123-b .p30{ width:30%; }
         .grid-123-b .p33{ width:33.333333333%; }
         .grid-123-b .p40{ width:40%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:60%; }
         .grid-123-b .p70{ width:70%; }
         .grid-123-b .p80{ width:80%; }
         .grid-123-b .p90{ width:90%; }
         .grid-123-b .p100{ width:100%; }
      }


   /* grid-123-b GRID: Mobile Landscape*/
   @media only screen and (min-width:736px) and (max-width : 1024px) {
          .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123-b .p20{ width:20%; }
         .grid-123-b .p25{ width:25%; }
         .grid-123-b .p30{ width:30%; }
         .grid-123-b .p33{ width:33.333333333%; }
         .grid-123-b .p40{ width:40%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:60%; }
         .grid-123-b .p70{ width:70%; }
         .grid-123-b .p80{ width:80%; }
         .grid-123-b .p90{ width:90%; }
         .grid-123-b .p100{ width:100%; }
   }



   /* grid-123-b GRID: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
          .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123-b .p10{ width:50%; }
         .grid-123-b .p20{ width:50%; }
         .grid-123-b .p25{ width:50%; }
         .grid-123-b .p30{ width:50%; }
         .grid-123-b .p33{ width:50%; }
         .grid-123-b .p40{ width:50%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:50%; }
         .grid-123-b .p70{ width:50%; }
         .grid-123-b .p80{ width:50%; }
         .grid-123-b .p90{ width:50%; }
         .grid-123-b .p100{ width:50%; }
   }

   /* grid-123-b GRID: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {
      .grid-123-b{
         background-color:#fffff5;
      }
      .grid-123-b .X-row {
         width:100%; 
      }
      .grid-123-b .X-col{
         width:100%;
         clear:both;
         display:block;
      }
   }



.table{
   display:block;;
   width:100%; 
}

.table-row{
   display:block;
   clear:both;
   width:100%; 
}

.table-cell{
   display:inline-block;
   float:left;
   text-align:center;
   height:24rem;
   vertical-align:middle;
   overflow:hidden;
   


}
   .color1{ background-color:#F37021; }
   .color2{ background-color:#084B81; }
   .color3{ background-color:#4F8FE1; }
   .color4{ background-color:#4C87B5; }
   .color5{ background-color:#00529B; }
   .color6{ background-color:#F37021; }



 
   .table-cell-1{        
      width:100%;
      background-color:#F37021;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);   
        
   }
   .table-cell-2{
      width:100%;
      background-color:#084B81;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-3{
      width:100%;
      background-color: #4F8FE1;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-4{
      width:100%;
      background-color:#4C87B5;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-5{
      width:100%;
      background-color:#00529B;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-6{

      width:100%;
      background-color:#F37021;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }


/* Typography */

   .table-cell-1-num{     
      line-height:1;
      font-family: "Surveyor Display A", "Surveyor Display B";
      font-style: normal;
      font-weight: 800;
      color:#084B81; 
      margin:0px;
      padding:0px; 
   }
   .table-cell-2-num{
     line-height:1; 
      font-family:Quadon_Heavy;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; 
   }
   .table-cell-3-num{
      line-height:1;  
      font-family:Gentona_Thin;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-4-num{
      line-height:1;
      font-family:Quadon_Bold;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-5-num{  
      line-height:1;   
      font-family:Gentona_Heavy; 
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-6-num{   
      line-height:1;
      font-family: "Surveyor Display A", "Surveyor Display B";
      font-style: italic;
      font-weight: 400;
      color:#084B81;
      margin:0px;
      padding:0px;  
   }

   .table-cell-1-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#084B81;
      margin:0px;
      padding:0px;  text-transform:uppercase; 
   }
   .table-cell-2-txt{
      line-height:1;  
      font-family:Gentona_ExtraBold;
      line-height:1;
      color:#ffffff; 
      text-transform:uppercase;
      margin:0px;
      padding:0px; 
      text-transform:uppercase;
   }
   .table-cell-3-txt{
      line-height:1;
      font-family:Quadon_MediumItalic;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; text-transform:uppercase; 
   }
   .table-cell-4-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; text-transform:uppercase;

   }
   .table-cell-5-txt{
      line-height:1;
      font-family:Quadon_BoldItalic;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  text-transform:uppercase; 
 
   }
   .table-cell-6-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#084B81;
      margin:0px;
      padding:0px;  text-transform:uppercase; 

   }



/* Font sizes for HD Desktop */
@media only screen and (min-width:1920px)  {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      /* EQUATION FOR DETERMINING BOX HEIGHT: .007991660875608 x + 8.65601111883251   where x is the screen width, 1920px in this case*/
      height:24rem;
   }
   .table-cell-1-num { font-size:21rem; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:20px; } 
   .table-cell-2-num{ font-size:16rem; line-height:.8 }
   .table-cell-3-num{ width:35% !important;display:table-cell; vertical-align:middle; font-size:29rem;line-height:.7; padding-left:4rem; }
   .table-cell-3-num span{ position:relative;top:-26px } 
   .table-cell-4-num{ font-size:10.5rem; }
   .table-cell-5-num{ font-size:16rem; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-30px }  
   .table-cell-6-num{ font-size:12.5rem;letter-spacing:-2px; }
   .table-cell-1-txt{ font-size:4rem; }
   .table-cell-1-txt span{ position:relative;top:14px;}  
   .table-cell-2-txt{ font-size:3.8rem; }
   .table-cell-3-txt{ width:65%; display:table-cell; vertical-align:middle; font-size:3.5rem; padding:2rem; padding-right:3rem; line-height:1.2;  }
   .table-cell-4-txt{ font-size:3.5rem; }
   .table-cell-5-txt{ font-size:2.65rem; }
   .table-cell-5-txt span{ position:relative;top:-4px }  
   .table-cell-6-txt{ font-size:3.5rem; }
}



/* Font sizes for Desktop */
/*  Proportionally decrease all fonts and padding by 33.33%. In other words, multiply numbers from the above breakpoint by 0.666666667 */
@media only screen and (min-width:768px) and (max-width:1920px)  {
   .table-cell{
      height:18.9rem; 
   height:20vw;
   }
   .table-cell-1-num { font-size:14vw; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:-.65vw; } 
   .table-cell-2-num{ font-size:13vw; line-height:.8 }
   .table-cell-3-num{ font-size:24vw;  padding-left:4vw; width:35% !important;display:table-cell; vertical-align:middle; ;line-height:.7; }
   .table-cell-3-num span{ position:relative;top:-1.3vw } 
   .table-cell-4-num{ font-size:9vw; }
   .table-cell-4-num span{ position:relative;top:-.5vw } 
   .table-cell-5-num{ font-size:12vw; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-2vw }  
   .table-cell-6-num{ font-size:9vw; letter-spacing:-2px; }
   .table-cell-6-num span{ position:relative;top:-1vw;}  

   .table-cell-1-txt{ font-size:3vw; }
   .table-cell-1-txt span{ position:relative;top:-.5vw}  
   .table-cell-2-txt{ font-size:3vw;  }
   .table-cell-3-txt{ font-size:2.7vw; padding-right:4vw; width:65%; display:table-cell; vertical-align:middle;line-height:1.2;  }
   .table-cell-3-txt span{ position:relative;}  
   .table-cell-4-txt{font-size:3vw;  }
   .table-cell-5-txt{ font-size:2vw;  }
   .table-cell-5-txt span{ position:relative;top:-.3vw }  
   .table-cell-6-txt{ font-size:3vw;}
   .table-cell-6-txt span{ position:relative; top:-.65vw;  }  
}


   /* grid-123 GRID: Mobile Landscape*/
@media only screen and (min-width:481px) and (max-width : 768px) {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      height:12.5rem;
      height:50vw;
   }
   .table-cell-1-num { font-size:8.05rem; font-size:20vw; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:-11.5px; } 
   .table-cell-2-num{ font-size:8rem; font-size:30vw; line-height:.8 }
   .table-cell-3-num{ font-size:11.116666666rem; font-size:55vw; line-height:.7; display:block; width:100%; }
   .table-cell-3-num span{ position:relative;top:-4vw; } 
   .table-cell-4-num{ font-size:4.025rem; font-size:14vw;  }
   .table-cell-4-num span{ position:relative;top:-1vw; } 
   .table-cell-5-num{ font-size:5.2rem; font-size:14vw; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-11.5px; top:-3vw}  
   .table-cell-6-num{ font-size:4.791666666rem; font-size:14vw; letter-spacing:-1px; }
   .table-cell-6-num span{ position:relative;top:-7px }  

   .table-cell-1-txt{ font-size:1.533333334rem; font-size:5vw; }
   .table-cell-1-txt span{ position:relative;top:-5.366666666px; }  
   .table-cell-2-txt{ font-size:2rem; font-size:10vw; }
   .table-cell-3-txt{  font-size:1.341666666rem; font-size:3.65vw;  line-height:1.2;  display:block; width:90%;margin:0 auto; }
   .table-cell-3-txt span{ position:relative; } 


   .table-cell-4-txt{ font-size:1.341666666rem; font-size:5.5vw; }

   .table-cell-5-txt{ font-size:1.015833334rem;font-size:5.5vw;line-height:1.2  }
   .table-cell-5-txt span{ position:relative;top:-1.5333525px }  
   .table-cell-6-txt{ font-size:1.3416475rem; }
   .table-cell-6-txt span{ position:relative;top:-1.5333525px }  

         


         }

   /* grid-123 GRID: Mobile Portrait*/
@media only screen and (min-width:0px) and (max-width:481px)  {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      height:12.5rem;
      height:50vw;
   }

   .table-cell-1-num{ font-size:6.6375rem; font-size:40vw; line-height:.7;  }
   .table-cell-1-num span{ position:relative;top:0px; } 
   .table-cell-2-num{ font-size:6.72875rem; font-size:40vw; line-height:.8;     }
   .table-cell-3-num{ width:40%; display:table-cell; vertical-align:middle; font-size:13rem;  font-size:55vw; line-height:.7;    }
   .table-cell-3-num span{ position:relative ;top:-15px; }  
   .table-cell-4-num{ font-size:5.625rem; font-size:22vw;  }
   .table-cell-4-num span{ position:relative;top:-6px } 
   .table-cell-5-num{ font-size:4.385625rem; font-size:26vw;    }
   .table-cell-5-num span{ position:relative; top:-11.5px }  
   .table-cell-6-num{ font-size:4rem; font-size:22vw;   }
   .table-cell-6-num span{ position:relative; top:-7px }  

   .table-cell-1-txt{ font-size:1.8rem; font-size:10vw;     }
   .table-cell-1-txt span{ position:relative; top:4px; } 
   .table-cell-2-txt{ font-size:10vw; }
   .table-cell-2-txt span{ position:relative; top:-3px; } 
   .table-cell-3-txt{ width:60%; display:table-cell; vertical-align:middle; font-size:1.7rem; text-align:center; line-height:1.1; font-size:8.1vw; margin-right:.5rem; margin-left:.5rem; }
   .table-cell-3-txt span{ position:relative;top:-2px; } 
   .table-cell-4-txt{ font-size:2rem;font-size:9vw;    }
   .table-cell-5-txt{ font-size:1.3rem; font-size:7vw;   }
   .table-cell-5-txt span{ position:relative;top:-1.5333525px }  
   .table-cell-6-txt{ font-size:1.8rem;  font-size:10vw; }
   .table-cell-6-txt span{ position:relative;top:-1.5333525px }  
}



/** DEPARTMENT FOOTER **/


/*--------------------------------------------------------------
13.6 Footer
--------------------------------------------------------------*/


@media screen and (min-width: 30em) {
	/* Site Footer */

	.site-footer {
		font-size: 16px;
		font-size: 1rem;
	}

}

@media screen and (min-width: 48em) {
	/* Footer */

	.site-footer {
		font-size: 14px;
		font-size: 0.875rem;
		line-height: 1.6;
		margin-top: 3em;
	}

	.site-footer .widget-column.footer-widget-1 {
		float: left;
		width: 36%;
	}

	.site-footer .widget-column.footer-widget-2 {
		float: right;
		width: 58%;
	}

}


.site-footer {
	border-top: 1px solid #eee;
}

.site-footer .wrap {
	padding-bottom: 1.5em;
	padding-top: 2em;
}

/*--------------------------------------------------------------
4.0 Clearings
--------------------------------------------------------------*/

.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.entry-footer:before,
.entry-footer:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after,
.nav-links:before,
.nav-links:after,
.pagination:before,
.pagination:after,
.comment-author:before,
.comment-author:after,
.widget-area:before,
.widget-area:after,
.widget:before,
.widget:after,
.comment-meta:before,
.comment-meta:after {
	content: "";
	display: table;
	table-layout: fixed;
}

.clear:after,
.entry-content:after,
.entry-footer:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after,
.nav-links:after,
.pagination:after,
.comment-author:after,
.widget-area:after,
.widget:after,
.comment-meta:after {
	clear: both;
}

.site-footer .widget-area ul li a,
.site-footer .widget-area ul li a {
	-webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
	box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
	text-decoration: none;
	-webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
	transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
	transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
	transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.site-footer .widget-area a:focus,
.site-footer .widget-area a:hover,
.entry-footer a:focus,
.entry-footer a:hover,
.entry-footer .cat-links a:focus,
.entry-footer .cat-links a:hover,
.entry-footer .tags-links a:focus,
.entry-footer .tags-links a:hover {
	color: #000;
	-webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
	box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}



/* Footer widgets */

.site-footer .widget-area {
	padding-bottom: 2em;
	padding-top: 2em;
}

/* Social nav */

.social-navigation {
	font-size: 16px;
	font-size: 1rem;
	margin-bottom: 1em;
}

.social-navigation ul {
	list-style: none;
	margin-bottom: 0;
	margin-left: 0;
}

.social-navigation li {
	display: inline;
}

.social-navigation a {
	background-color: #767676;
	-webkit-border-radius: 40px;
	border-radius: 40px;
	color: #fff;
	display: inline-block;
	height: 40px;
	margin: 0 1em 0.5em 0;
	text-align: center;
	width: 40px;
}

.social-navigation a:hover,
.social-navigation a:focus {
	background-color: #333;
}

.social-navigation .icon {
	height: 16px;
	top: 12px;
	width: 16px;
	vertical-align: top;
}

/* Site info */

.site-info {
	font-size: 14px;
	font-size: 0.875rem;
	margin-bottom: 1em;
}

.site-info a {
	color: #666;
}

.site-info .sep {
	margin: 0;
	display: block;
	visibility: hidden;
	height: 0;
	width: 100%;
}

.site-info span[role=separator] {
	padding: 0 0.2em 0 0.4em;
}

.site-info span[role=separator]::before {
	content: '\002f';
}


/* Social Menu fallbacks */

.no-svg .social-navigation a {
	background: transparent;
	color: #222;
	height: auto;
	width: auto;
}

/* Show screen reader text in some cases */

.no-svg .next.page-numbers .screen-reader-text,
.no-svg .prev.page-numbers .screen-reader-text,
.no-svg .social-navigation li a .screen-reader-text,
.no-svg .search-submit .screen-reader-text {
	clip: auto;
	font-size: 16px;
	font-size: 1rem;
	font-weight: 400;
	height: auto;
	position: relative !important; /* overrides previous !important styles */
	width: auto;
}















.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; 
}

.visuallyhidden.focusable:focus {
    border: 0;
    clip: none;
    height: auto;
    margin: -1px;
    overflow: visible;
    padding: 0;
    position: relative;
    width: auto;
}





/** ORANGE BUTTONS **/

.btn-orange, .btn-orange-large {
    border: 3px solid #f37021 !important;
    cursor: pointer;
    display: inline-block;
    font: 700 16px/1 "Gentona_Bold", "Georgia", serif;
    letter-spacing: 2px;
    padding: 15px 20px;
    text-transform: uppercase;
    border-radius: 0;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    margin:.2rem;
    max-width: 100%;
}
.btn-orange-large {
   font-size: 2rem;
   vertical-align: middle;
}

/* MOBILE & TABLET Portrait */
@media only screen and (min-width:0px) and (max-width :  1024px) {
   .btn-orange-large {
      font-size: 1.3rem;
      vertical-align: middle;
   }
}


a.btn-orange,  a.btn-orange-large {
    color: #f37021 !important;
    text-decoration: none;
}

a.btn-orange:hover, a.btn-orange-large:hover {
    color: #ffffff !important;
    text-decoration: none;
    background-color:  #f37021 !important;

}

/** BLUE BUTTON **/
.btn-blue, .btn-blue-large {
    border: 3px solid rgb(0, 64, 131) !important;
    cursor: pointer;
    display: inline-block;
    font: 700 16px/1 "Gentona_Bold", "Georgia", serif;
    letter-spacing: 2px;
    padding: 15px 20px;
    text-transform: uppercase;
    border-radius: 0;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;

    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    margin:.2rem;
    max-width: 100%;

}

.btn-blue-large {
   font-size: 2rem;
   vertical-align: middle;
}
/* MOBILE & TABLET Portrait */
@media only screen and (min-width:0px) and (max-width :  1024px) {
   .btn-blue-large {
      font-size: 1.3rem;
      vertical-align: middle;
   }
}

a.btn-blue, a.btn-blue-large {
    color: rgb(0, 64, 131)  !important;
    text-decoration: none;
}

a.btn-blue:hover, a.btn-blue-large:hover {
    color: #ffffff !important;
    text-decoration: none;
    background-color: rgb(0, 64, 131) !important;

}


/** BEIGE BUTTON **/
.btn-beige,.btn-beige-large {
    border: 3px solid  #c6ba97 !important;
    max-width: 100%;
    cursor: pointer;
    display: inline-block;
    font: 700 16px/1 "Gentona_Bold", "Georgia", serif;
    letter-spacing: 2px;
    padding: 15px 20px;
    text-transform: uppercase;
    border-radius: 0;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;

    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    color: #806103 !important;    
    margin:.2rem;
    max-width: 100%;

}

.btn-beige-large {
   font-size: 2rem;
   vertical-align: middle;
}
/* MOBILE & TABLET Portrait */
@media only screen and (min-width:0px) and (max-width :  1024px) {
   .btn-beige-large {
      font-size: 1.3rem;
      vertical-align: middle;
   }
}

a.btn-beige, a.btn-beige-large {
    color:  #c6ba97;  !important;
    text-decoration: none;
}

a.btn-beige:hover, a.btn-beige-large:hover {
    color: #ffffff !important;
    text-decoration: none;
    background-color:  #c6ba97; !important;

}



/** BLUE QUOTE **/


h2.quote-blue {
    font-family: 'gentona-light',Arial,sans-serif;
    font-weight: lighter;
    font-size: 34px;
    display: block;
    line-height: 1em;
    letter-spacing: -2px;
    margin: 0;
    box-decoration-break: clone;
    -webkit-box-decoration-break: clone;
    text-align: center;
    color: #2f639d;
    background-color: transparent;
}


/* Mobile Quote - Blue */
@media only screen and (min-width:1800px)  {
   .quote-blue {
      font-size: 3vw;
   }
}


/* Mobile Quote - Blue */
@media only screen and (min-width:1200px)  {
   .quote-blue {
      font-size: 4.5vw;
   }
}


/* Mobile Quote - Blue */
@media only screen and (min-width:1025px)  {
   .quote-blue {
      font-size: 5.26829vw;
   }
}

/* Mobile Quote - Blue */
@media only screen and (min-width:768px)  {
   .quote-blue {
      font-size: 6.25vw;

   }
}


/** RIGHT POINTING ARROW **/

h2.right-arrow  {
    font-family: 'Gentona_Light',Arial,sans-serif;
    font-weight: lighter;
    font-size: 34px;
    display: block;
    line-height: 1em;
    letter-spacing: -2px;
    margin: 0;
    box-decoration-break: clone;
    -webkit-box-decoration-break: clone;
    text-align: center;
    color: #2f639d;
    background-color: transparent;
}

h2 strong {
    font-family: 'Gentona_Bold',Arial,sans-serif;
    border-width: 4px;
    border-style: solid;
    border-color: #d66629;
    padding: 0 .25em;
    color: #d66629;
    font-size: 80%;
    text-transform: uppercase;
    letter-spacing: .125em;
    font-style: normal;
}

h2.right-arrow  strong::after {
    content: '';
    position: absolute;
    left: -.5em;
    bottom: .5em;
    border-top: 5px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 7px solid #d66629;
    width: 0;
    height: 0;
    transform: translate(-50%,50%);
}

h2.right-arrow  strong::before {
    content: '';
    position: absolute;
    width: 1.5em;
    height: 100%;
    border: 2px solid #d66629;
        border-top-color: rgb(214, 102, 41);
        border-right-color: rgb(214, 102, 41);
    left: -2em;
    bottom: .5em;
    border-top-color: transparent;
    border-right-color: transparent;
}

/** BLUE BULLET LIST **/
.blue-list {
    list-style-image: url("/assets/images/icons/blue-bullet.svg");
}


/* Mobile Quote - Blue */
@media only screen and (min-width:1800px)  {

   .blue-list {
    margin: 32px 0 51px;
    list-style-image: url("/assets/images/icons/blue-bullet.svg");
   }
}



/* RACHEL CODE */



</style>


</head>

<body <?php body_class(); ?> >

<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">


<symbol id="uflogo" class="icon-uflogo" viewBox="0 0 125 125">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Homepage">
            <g id="Group">
                <g id="Page-1">
                    <polygon id="Fill-1" fill="#F45A1D" points="0 125 125 125 125 0 0 0"></polygon>
                    <polygon id="Fill-2" fill="#FFFFFF" points="78.0423125 78.347375 78.0423125 65.88925 89.5210625 65.88925 89.5210625 57.676125 78.0423125 57.676125 78.0423125 46.039875 90.6454375 46.039875 90.6454375 50.554875 98.9585625 50.554875 98.9585625 37.89425 65.6723125 37.89425 65.6723125 46.039875 68.7898125 46.039875 68.7898125 78.347375 65.6841875 78.347375 65.6841875 86.55925 81.0460625 86.55925 81.0460625 78.347375"></polygon>
                    <path d="M61.34275,68.1666875 L61.34275,46.0379375 L64.419,46.0379375 L64.419,37.8935625 L49.02275,37.8935625 L49.02275,46.0379375 L52.02525,46.0379375 L52.02525,65.4154375 C52.02525,73.5385625 51.085875,77.4404375 45.253375,77.4404375 C39.42025,77.4404375 38.480875,73.5385625 38.480875,65.4154375 L38.480875,46.0379375 L41.460875,46.0379375 L41.460875,37.8935625 L26.0415,37.8935625 L26.0415,46.0379375 L29.097125,46.0379375 L29.097125,68.1666875 C29.097125,72.9991875 29.097125,76.9610625 31.3765,80.5173125 C33.924,84.5466875 38.549,87.1060625 45.253375,87.1060625 C57.119625,87.1060625 61.34275,80.9223125 61.34275,68.1666875" id="Fill-3" fill="#FFFFFF"></path>
                </g>
            </g>
        </g>
    </g>
   <image src="<?php get_stylesheet_directory_uri().'assets/images/uflogo.png' ?>" xlink:href="">
</symbol>



<symbol id="uflogo-go-greater" class="icon-uflogo-go-greater" viewBox="0 0 180 180">
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Homepage" transform="translate(-1604.000000, -2863.000000)" fill="#99D0DF">
            <g id="Group-16" transform="translate(0.000000, 2807.000000)">
                <g id="Group-2" transform="translate(1604.000000, 56.000000)">
                    <path d="M97.3355664,159.09621 L97.3355664,151.56642 L89.6622797,146.672434 L81.9902517,151.56642 L81.9902517,159.09621 L81.302979,159.014392 C79.3821399,158.782783 77.449972,158.466839 75.5606014,158.076629 C60.1334685,154.889497 46.0884336,146.385441 36.0122098,134.131594 C30.9948671,128.029217 27.0814406,121.186699 24.383958,113.792853 C21.5920699,106.140965 20.175986,98.0925734 20.175986,89.8692168 C20.175986,71.2662797 27.4036783,53.7760699 40.5285734,40.620965 C53.6522098,27.4671189 71.1021399,20.2218042 89.6622797,20.2218042 C108.223678,20.2218042 125.673608,27.4671189 138.797245,40.620965 C151.92214,53.7760699 159.149832,71.2662797 159.149832,89.8692168 C159.149832,98.1127133 157.727455,106.181245 154.920462,113.850755 C152.209133,121.260965 148.278084,128.11607 143.235566,134.226 C133.108993,146.497469 119.003538,154.98642 103.519762,158.126979 C101.708434,158.494531 99.8593427,158.792853 98.0228392,159.014392 L97.3355664,159.09621 Z M89.6622797,21.4528531 C71.4306713,21.4528531 54.2891329,28.5697762 41.3971049,41.492014 C28.5038182,54.4142517 21.4045175,71.5948112 21.4045175,89.8692168 C21.4045175,97.9465594 22.7954266,105.853972 25.536965,113.369916 C28.1878741,120.631594 32.0308112,127.354531 36.9613007,133.348657 C46.8587832,145.386 60.6545874,153.740266 75.8085734,156.870755 C77.4386434,157.208098 79.1014406,157.487538 80.7617203,157.705301 L80.7617203,150.890476 L89.6622797,145.213552 L98.5640979,150.890476 L98.5640979,157.705301 C100.141301,157.498867 101.72228,157.23579 103.275566,156.919846 C118.484937,153.83593 132.341161,145.496769 142.288993,133.440545 C147.24214,127.438867 151.103958,120.704601 153.767455,113.426559 C156.522839,105.894252 157.921301,97.967958 157.921301,89.8692168 C157.921301,71.5948112 150.822,54.4142517 137.928713,41.492014 C125.036685,28.5697762 107.895147,21.4528531 89.6622797,21.4528531 Z" id="Fill-1"></path>
                    <path d="M28.5301259,45.0443077 C28.5301259,46.2338182 27.5659301,47.1967552 26.3776783,47.1967552 C25.1881678,47.1967552 24.223972,46.2338182 24.223972,45.0443077 C24.223972,43.8547972 25.1881678,42.8906014 26.3776783,42.8906014 C27.5659301,42.8906014 28.5301259,43.8547972 28.5301259,45.0443077" id="Fill-3"></path>
                    <path d="M18.7188671,63.8098741 C18.7188671,64.9553287 17.7899161,65.883021 16.6457203,65.883021 C15.5002657,65.883021 14.5713147,64.9553287 14.5713147,63.8098741 C14.5713147,62.6644196 15.5002657,61.7367273 16.6457203,61.7367273 C17.7899161,61.7367273 18.7188671,62.6644196 18.7188671,63.8098741" id="Fill-5"></path>
                    <path d="M14.3501538,84.5139021 C14.3501538,85.6153007 13.4577063,86.5077483 12.3563077,86.5077483 C11.2561678,86.5077483 10.3624615,85.6153007 10.3624615,84.5139021 C10.3624615,83.4125035 11.2561678,82.5200559 12.3563077,82.5200559 C13.4577063,82.5200559 14.3501538,83.4125035 14.3501538,84.5139021" id="Fill-7"></path>
                    <path d="M15.682028,105.609524 C15.682028,106.666867 14.8248252,107.52407 13.7674825,107.52407 C12.7113986,107.52407 11.8541958,106.666867 11.8541958,105.609524 C11.8541958,104.552182 12.7113986,103.694979 13.7674825,103.694979 C14.8248252,103.694979 15.682028,104.552182 15.682028,105.609524" id="Fill-9"></path>
                    <path d="M22.6475245,125.541063 C22.6475245,126.55435 21.8268252,127.375049 20.8135385,127.375049 C19.8002517,127.375049 18.9782937,126.55435 18.9782937,125.541063 C18.9782937,124.527776 19.8002517,123.707077 20.8135385,123.707077 C21.8268252,123.707077 22.6475245,124.527776 22.6475245,125.541063" id="Fill-11"></path>
                    <path d="M34.7291748,142.905902 C34.7291748,143.875133 33.9437203,144.660587 32.9744895,144.660587 C32.0052587,144.660587 31.2198042,143.875133 31.2198042,142.905902 C31.2198042,141.936671 32.0052587,141.151217 32.9744895,141.151217 C33.9437203,141.151217 34.7291748,141.936671 34.7291748,142.905902" id="Fill-13"></path>
                    <path d="M50.9962657,156.210545 C50.9962657,157.13572 50.2460559,157.88593 49.3208811,157.88593 C48.396965,157.88593 47.6467552,157.13572 47.6467552,156.210545 C47.6467552,155.285371 48.396965,154.535161 49.3208811,154.535161 C50.2460559,154.535161 50.9962657,155.285371 50.9962657,156.210545" id="Fill-15"></path>
                    <path d="M70.2566434,164.657832 C70.2566434,165.538951 69.5429371,166.252657 68.6618182,166.252657 C67.7806993,166.252657 67.066993,165.538951 67.066993,164.657832 C67.066993,163.776713 67.7806993,163.063007 68.6618182,163.063007 C69.5429371,163.063007 70.2566434,163.776713 70.2566434,164.657832" id="Fill-17"></path>
                    <path d="M150.79393,45.0443077 C150.79393,46.2338182 151.758126,47.1967552 152.947636,47.1967552 C154.137147,47.1967552 155.100084,46.2338182 155.100084,45.0443077 C155.100084,43.8547972 154.137147,42.8906014 152.947636,42.8906014 C151.758126,42.8906014 150.79393,43.8547972 150.79393,45.0443077" id="Fill-19"></path>
                    <path d="M160.605692,63.8098741 C160.605692,64.9553287 161.533385,65.883021 162.678839,65.883021 C163.824294,65.883021 164.751986,64.9553287 164.751986,63.8098741 C164.751986,62.6644196 163.824294,61.7367273 162.678839,61.7367273 C161.533385,61.7367273 160.605692,62.6644196 160.605692,63.8098741" id="Fill-21"></path>
                    <path d="M164.973776,84.5139021 C164.973776,85.6153007 165.866224,86.5077483 166.967622,86.5077483 C168.069021,86.5077483 168.961469,85.6153007 168.961469,84.5139021 C168.961469,83.4125035 168.069021,82.5200559 166.967622,82.5200559 C165.866224,82.5200559 164.973776,83.4125035 164.973776,84.5139021" id="Fill-23"></path>
                    <path d="M163.641902,105.609524 C163.641902,106.666867 164.499105,107.52407 165.556448,107.52407 C166.612531,107.52407 167.470993,106.666867 167.470993,105.609524 C167.470993,104.552182 166.612531,103.694979 165.556448,103.694979 C164.499105,103.694979 163.641902,104.552182 163.641902,105.609524" id="Fill-25"></path>
                    <path d="M156.676406,125.541063 C156.676406,126.55435 157.497105,127.375049 158.51165,127.375049 C159.523678,127.375049 160.345636,126.55435 160.345636,125.541063 C160.345636,124.527776 159.523678,123.707077 158.51165,123.707077 C157.497105,123.707077 156.676406,124.527776 156.676406,125.541063" id="Fill-27"></path>
                    <path d="M144.594881,142.905902 C144.594881,143.875133 145.380336,144.660587 146.349566,144.660587 C147.318797,144.660587 148.104252,143.875133 148.104252,142.905902 C148.104252,141.936671 147.318797,141.151217 146.349566,141.151217 C145.380336,141.151217 144.594881,141.936671 144.594881,142.905902" id="Fill-29"></path>
                    <path d="M128.32779,156.210545 C128.32779,157.13572 129.078,157.88593 130.003175,157.88593 C130.927091,157.88593 131.677301,157.13572 131.677301,156.210545 C131.677301,155.285371 130.927091,154.535161 130.003175,154.535161 C129.078,154.535161 128.32779,155.285371 128.32779,156.210545" id="Fill-31"></path>
                    <path d="M109.068042,164.657832 C109.068042,165.538951 109.781748,166.252657 110.662867,166.252657 C111.543986,166.252657 112.257692,165.538951 112.257692,164.657832 C112.257692,163.776713 111.543986,163.063007 110.662867,163.063007 C109.781748,163.063007 109.068042,163.776713 109.068042,164.657832" id="Fill-33"></path>
                    <path d="M98.5635944,152.350112 L89.0487692,146.280462 L89.0487692,133.461441 L98.5635944,139.529832 L98.5635944,152.350112 Z M90.2773007,145.604517 L97.3350629,150.107035 L97.3350629,140.207035 L90.2773007,135.704517 L90.2773007,145.604517 Z" id="Fill-35"></path>
                    <path d="M80.7617203,152.350112 L80.7617203,139.529832 L90.2778042,133.461441 L90.2778042,146.280462 L80.7617203,152.350112 Z M81.9902517,140.207035 L81.9902517,150.107035 L89.048014,145.604517 L89.048014,135.704517 L81.9902517,140.207035 Z" id="Fill-37"></path>
                    <path d="M81.3757343,142.371692 C81.0358741,142.371692 80.7614685,142.096028 80.7614685,141.756168 L80.7614685,135.526657 C80.7614685,135.186797 81.0358741,134.911133 81.3757343,134.911133 C81.7155944,134.911133 81.99,135.186797 81.99,135.526657 L81.99,141.756168 C81.99,142.096028 81.7155944,142.371692 81.3757343,142.371692" id="Fill-39"></path>
                    <path d="M89.6626573,136.14193 C89.3227972,136.14193 89.0483916,135.866266 89.0483916,135.526406 L89.0483916,130.240951 C89.0483916,129.901091 89.3227972,129.625427 89.6626573,129.625427 C90.0025175,129.625427 90.2769231,129.901091 90.2769231,130.240951 L90.2769231,135.526406 C90.2769231,135.866266 90.0025175,136.14193 89.6626573,136.14193" id="Fill-41"></path>
                    <path d="M97.9495804,142.371692 C97.6097203,142.371692 97.3353147,142.096028 97.3353147,141.756168 L97.3353147,135.526657 C97.3353147,135.186797 97.6097203,134.911133 97.9495804,134.911133 C98.2894406,134.911133 98.5638462,135.186797 98.5638462,135.526657 L98.5638462,141.756168 C98.5638462,142.096028 98.2894406,142.371692 97.9495804,142.371692" id="Fill-43"></path>
                    <path d="M95.1873986,149.989972 C94.8475385,149.989972 94.5731329,149.714308 94.5731329,149.374448 L94.5731329,143.197804 C94.5731329,142.857944 94.8475385,142.583538 95.1873986,142.583538 C95.5272587,142.583538 95.8016643,142.857944 95.8016643,143.197804 L95.8016643,149.374448 C95.8016643,149.714308 95.5272587,149.989972 95.1873986,149.989972" id="Fill-45"></path>
                    <path d="M92.4247133,148.174364 C92.0861119,148.174364 91.8104476,147.898699 91.8104476,147.558839 L91.8104476,141.382196 C91.8104476,141.042336 92.0861119,140.766671 92.4247133,140.766671 C92.7645734,140.766671 93.038979,141.042336 93.038979,141.382196 L93.038979,147.558839 C93.038979,147.898699 92.7645734,148.174364 92.4247133,148.174364" id="Fill-47"></path>
                    <path d="M86.9004755,148.174364 C86.5606154,148.174364 86.2862098,147.898699 86.2862098,147.558839 L86.2862098,141.382196 C86.2862098,141.042336 86.5606154,140.766671 86.9004755,140.766671 C87.2403357,140.766671 87.5147413,141.042336 87.5147413,141.382196 L87.5147413,147.558839 C87.5147413,147.898699 87.2403357,148.174364 86.9004755,148.174364" id="Fill-49"></path>
                    <path d="M84.1384196,149.989972 C83.7985594,149.989972 83.5241538,149.714308 83.5241538,149.374448 L83.5241538,143.197804 C83.5241538,142.857944 83.7985594,142.583538 84.1384196,142.583538 C84.477021,142.583538 84.7526853,142.857944 84.7526853,143.197804 L84.7526853,149.374448 C84.7526853,149.714308 84.477021,149.989972 84.1384196,149.989972" id="Fill-51"></path>
                    <path d="M89.6626573,172.850098 C89.3227972,172.850098 89.0483916,172.574434 89.0483916,172.234573 L89.0483916,145.943245 C89.0483916,145.603385 89.3227972,145.32772 89.6626573,145.32772 C90.0025175,145.32772 90.2769231,145.603385 90.2769231,145.943245 L90.2769231,172.234573 C90.2769231,172.574434 90.0025175,172.850098 89.6626573,172.850098" id="Fill-53"></path>
                    <path d="M89.6626573,179.739441 C77.5586014,179.739441 65.8158042,177.362937 54.7615385,172.676643 C44.0848951,168.15021 34.4958042,161.671469 26.2611189,153.416643 C18.0276923,145.164336 11.5627972,135.552587 7.04643357,124.850769 C2.37020979,113.771329 0,102.002098 0,89.8703497 C0,77.7373427 2.37020979,65.9681119 7.04643357,54.8874126 C11.5627972,44.1868531 18.0276923,34.5751049 26.2611189,26.3227972 C34.4958042,18.0692308 44.0848951,11.5892308 54.7615385,7.0627972 C65.8158042,2.3765035 77.5586014,0 89.6626573,0 C101.766713,0 113.50951,2.3765035 124.563776,7.0627972 C135.24042,11.5892308 144.82951,18.0692308 153.064196,26.3227972 C161.297622,34.5751049 167.762517,44.1868531 172.278881,54.8874126 C176.955105,65.9681119 179.325315,77.7373427 179.325315,89.8703497 C179.325315,102.002098 176.955105,113.771329 172.278881,124.850769 C167.762517,135.552587 161.297622,145.164336 153.064196,153.416643 C144.82951,161.671469 135.24042,168.15021 124.563776,172.676643 C113.50951,177.362937 101.766713,179.739441 89.6626573,179.739441 M89.6626573,1.23230769 C77.7234965,1.23230769 66.1418182,3.57482517 55.2398601,8.19692308 C44.7104895,12.6616783 35.2523077,19.0523077 27.1296503,27.1938462 C19.0082517,35.3328671 12.6314685,44.8137063 8.17804196,55.3682517 C3.56727273,66.2953846 1.22853147,77.9034965 1.22853147,89.8703497 C1.22853147,101.835944 3.56727273,113.444056 8.17804196,124.371189 C12.6314685,134.925734 19.0082517,144.406573 27.1296503,152.546853 C35.2523077,160.687133 44.7104895,167.077762 55.2398601,171.542517 C66.1418182,176.164615 77.7234965,178.508392 89.6626573,178.508392 C101.601818,178.508392 113.183497,176.164615 124.085455,171.542517 C134.616084,167.077762 144.073007,160.687133 152.195664,152.546853 C160.317063,144.406573 166.693846,134.925734 171.147273,124.371189 C175.758042,113.444056 178.096783,101.835944 178.096783,89.8703497 C178.096783,77.9034965 175.758042,66.2953846 171.147273,55.3682517 C166.693846,44.8137063 160.317063,35.3328671 152.195664,27.1938462 C144.073007,19.0523077 134.616084,12.6616783 124.085455,8.19692308 C113.183497,3.57482517 101.601818,1.23230769 89.6626573,1.23230769" id="Fill-55"></path>
                    <path d="M97.9495804,176.969329 C97.7972727,176.969329 97.65,176.912685 97.5367133,176.809469 C97.4083217,176.692406 97.3353147,176.526252 97.3353147,176.353804 L97.3353147,158.402895 L98.5638462,158.402895 L98.5638462,175.674084 C119.520629,173.515343 138.893916,163.729888 153.184406,148.069888 C167.719091,132.141776 175.724685,111.471986 175.724685,89.8694685 C175.724685,78.2248531 173.448881,66.9276503 168.961469,56.2938042 C164.627622,46.0224755 158.422028,36.7971608 150.517133,28.8746434 C142.613497,20.9521259 133.40958,14.7326853 123.162168,10.3887692 C112.552238,5.89002797 101.281469,3.60918881 89.6632867,3.60918881 C78.0451049,3.60918881 66.7730769,5.89002797 56.1644056,10.3887692 C45.9157343,14.7326853 36.7118182,20.9521259 28.8081818,28.8746434 C20.9045455,36.7971608 14.698951,46.0224755 10.3638462,56.2938042 C5.87643357,66.9276503 3.60062937,78.2248531 3.60062937,89.8694685 C3.60062937,111.471986 11.6062238,132.141776 26.1409091,148.069888 C40.4313986,163.729888 59.8059441,173.515343 80.7614685,175.674084 L80.7614685,158.402895 L81.99,158.402895 L81.99,176.353804 C81.99,176.526252 81.916993,176.692406 81.7898601,176.809469 C81.6614685,176.925273 81.4902797,176.983175 81.3178322,176.966811 C59.7996503,174.921357 39.8838462,164.953385 25.2346154,148.900657 C10.4922378,132.744713 2.3720979,111.780378 2.3720979,89.8694685 C2.3720979,78.0586993 4.68062937,66.6003776 9.23223776,55.8142238 C13.629021,45.3956224 19.9227273,36.0393986 27.9396503,28.0035944 C35.9565734,19.969049 45.2913986,13.6602378 55.6848252,9.25464336 C66.4470629,4.69170629 77.878951,2.37813986 89.6632867,2.37813986 C101.446364,2.37813986 112.878252,4.69170629 123.64049,9.25464336 C134.033916,13.6602378 143.37,19.969049 151.386923,28.0035944 C159.402587,36.0393986 165.696294,45.3956224 170.093077,55.8142238 C174.644685,66.6003776 176.953217,78.0586993 176.953217,89.8694685 C176.953217,111.780378 168.833077,132.744713 154.090699,148.900657 C139.442727,164.953385 119.525664,174.921357 98.0074825,176.966811 C97.9886014,176.96807 97.9697203,176.969329 97.9495804,176.969329" id="Fill-57"></path>
                    <path d="M38.8642657,67.8127972 L43.143986,67.8165734 L43.1188112,98.9062238 C43.1137762,105.695874 43.11,111.258252 46.3009091,116.259231 C49.8669231,121.91979 56.3469231,125.523566 65.7434266,125.531119 L65.7824476,125.531119 C82.3877622,125.531119 88.3025874,116.847063 88.3176923,98.9427273 L88.3428671,67.8530769 L92.6540559,67.8568531 L92.6628671,56.4174126 L71.083007,56.3997902 L71.0741958,67.8392308 L75.2821678,67.8417483 L75.2595105,95.0658042 C75.2506993,106.468741 73.9315385,111.951818 65.7698601,111.951818 L65.756014,111.951818 C57.5804895,111.945524 56.2688811,106.45993 56.278951,95.0506993 L56.3016084,67.8266434 L60.4755944,67.8304196 L60.4856643,56.390979 L38.8730769,56.3733566 L38.8642657,67.8127972 Z M128.791259,74.2323776 L128.796294,67.8895804 L111.131119,67.8744755 L111.117273,84.2217483 L127.205245,84.2343357 L127.196434,95.7732168 L111.108462,95.7593706 L111.093357,113.260909 L115.306364,113.264685 L115.297552,124.802308 L93.763007,124.784685 L93.7718182,113.247063 L98.1258042,113.250839 L98.1623077,67.8644056 L93.7944755,67.8606294 L93.8032867,56.4186713 L140.456014,56.4564336 L140.442168,74.2411888 L128.791259,74.2323776 Z" id="Fill-59"></path>
                    <path d="M43.5593706,116.322923 L25.790979,116.322923 L26.5978322,117.441944 L44.2113986,117.441944 C43.9785315,117.070615 43.762028,116.698028 43.5593706,116.322923" id="Fill-61"></path>
                    <path d="M78.5883776,153.520364 C74.7769091,151.119944 70.3687972,147.947916 65.9757902,143.907357 C65.7341119,143.683301 65.4886573,143.451692 65.2444615,143.221343 L76.4422238,143.221343 C77.1571888,144.599664 77.8759301,145.884839 78.5883776,147.08442 L78.5883776,144.877846 C78.2875385,144.341622 77.9866993,143.790294 77.6858601,143.221343 L78.5883776,143.221343 L78.5883776,142.10358 L77.1068392,142.10358 C75.0500559,138.059245 73.0348112,133.235748 71.304042,127.572671 C70.939007,127.623021 70.5626434,127.662042 70.1862797,127.701063 C71.8805455,133.278545 73.8517343,138.060503 75.872014,142.10358 L64.0813846,142.10358 C59.3246014,137.431133 54.3487972,131.350154 50.3485175,123.762462 C49.631035,123.285399 48.9550909,122.766797 48.3093566,122.21421 C52.3134126,130.448895 57.4868392,137.040923 62.4991469,142.10358 L44.6451608,142.10358 L45.452014,143.221343 L63.6282378,143.221343 C64.172014,143.750014 64.7145315,144.266098 65.2494965,144.758266 C69.9131329,149.04428 74.6006853,152.369874 78.5883776,154.839524 L78.5883776,153.520364 Z" id="Fill-63"></path>
                    <path d="M158.506867,91.6612867 L158.506867,90.5422657 L137.971762,90.5422657 C137.971762,90.4893986 137.97428,90.4377902 137.97428,90.3849231 C137.97428,85.4934545 137.521133,80.9204476 136.729385,76.6382098 L135.588965,76.6382098 C136.393301,80.9141538 136.855259,85.4871608 136.855259,90.3849231 C136.855259,90.4377902 136.852741,90.4893986 136.852741,90.5422657 L129.601133,90.5422657 L129.599874,91.6612867 L136.836378,91.6612867 C136.685329,101.003664 134.897916,109.205622 132.160154,116.322545 L117.704769,116.322545 L117.70351,117.441566 L131.714559,117.441566 C127.418476,128.052755 121.049245,136.196811 115.036238,142.102825 L103.249385,142.102825 C105.330084,137.940168 107.356657,132.990797 109.084909,127.19807 L107.921832,127.196811 C106.165888,133.021007 104.106587,137.969119 102.005748,142.102825 L100.616098,142.102825 L100.616098,143.221846 L101.425469,143.221846 C101.156098,143.732895 100.886727,144.226322 100.616098,144.710937 L100.616098,146.943944 C101.302112,145.784643 101.993161,144.547301 102.680434,143.221846 L113.873161,143.221846 C113.628965,143.452196 113.38351,143.683804 113.141832,143.906601 C108.782811,147.916951 104.407427,151.071357 100.616098,153.465483 L100.616098,154.784643 C104.586168,152.321287 109.238476,149.013315 113.868126,144.758769 C114.403091,144.266601 114.945608,143.749259 115.489385,143.221846 L133.447846,143.221846 L135.062811,142.102825 L116.618476,142.102825 C122.566028,136.096112 128.746448,127.947021 132.920434,117.441566 L152.497636,117.441566 L153.305748,116.322545 L133.358476,116.322545 C136.053441,109.182965 137.805608,100.982266 137.95414,91.6612867 L158.506867,91.6612867 Z" id="Fill-65"></path>
                    <polygon id="Fill-67" points="40.7259441 90.5427692 20.8176923 90.5427692 20.8176923 91.6617902 40.7246853 91.6617902"></polygon>
                    <polygon id="Fill-69" points="153.336587 64.7624895 142.850014 64.7624895 142.848755 65.8815105 154.144699 65.8815105"></polygon>
                    <polygon id="Fill-71" points="36.4661119 64.7624895 25.7907273 64.7624895 24.9826154 65.8815105 36.4661119 65.8815105"></polygon>
                    <path d="M65.9727692,37.2245035 C74.1747273,29.802965 82.4484336,25.3835245 86.7407413,23.3745734 C84.1502517,26.0028252 79.9183636,31.0176503 75.8765455,38.9817063 L64.095986,38.9817063 C64.7266154,38.3737343 65.3534685,37.7846434 65.9727692,37.2245035 Z M89.003958,22.7502378 L89.003958,38.9817063 L77.123958,38.9817063 C81.9638182,29.6154126 87.0050769,24.5389091 89.003958,22.7502378 Z M90.122979,22.748979 C92.1218601,24.5338741 97.1694126,29.6066014 102.009273,38.9817063 L90.122979,38.9817063 L90.122979,22.748979 Z M113.113888,37.1968112 C113.744517,37.7657622 114.381441,38.3624056 115.02214,38.9817063 L103.245357,38.9817063 C99.2073147,31.0226853 94.9804615,26.0103776 92.389972,23.3796084 C96.6797622,25.3873007 104.925776,29.7954126 113.113888,37.1968112 Z M50.8162657,53.9821259 L52.1165455,53.9833846 C55.4308112,48.4612867 59.235986,43.8542937 62.9618601,40.1007273 L75.3201818,40.1007273 C73.3993427,44.0342937 71.543958,48.6475804 69.9516503,53.9984895 L71.0857762,53.9997483 L71.1134685,53.9997483 C72.7334685,48.6211469 74.6178042,44.0091189 76.5575245,40.1007273 L89.003958,40.1007273 L89.003958,54.0135944 L90.122979,54.0148531 L90.122979,40.1007273 L102.575706,40.1007273 C104.517944,44.0154126 106.403538,48.6362517 108.023538,54.029958 L109.177804,54.0312168 C107.584238,48.6664615 105.725077,44.0418462 103.802979,40.1007273 L116.156266,40.1007273 C119.897245,43.8681399 123.715007,48.4977902 127.036825,54.0450629 L128.337105,54.0463217 C125.110951,48.5418462 121.396406,43.9109371 117.718364,40.1007273 L137.053888,40.1007273 L136.245776,38.9817063 L116.616965,38.9817063 C115.69179,38.0615664 114.770392,37.1854825 113.864098,36.3673007 C103.114448,26.6498182 92.2238182,22.0088392 90.122979,21.1667413 L90.122979,20.8319161 L89.003958,20.8319161 L89.003958,21.162965 C86.9232587,21.9962517 76.0162657,26.635972 65.254028,36.3673007 C64.3477343,37.1854825 63.4275944,38.0615664 62.5011608,38.9817063 L42.8496923,38.9817063 L42.0415804,40.1007273 L61.3997622,40.1007273 C57.7355664,43.8970909 54.0348671,48.5053427 50.8162657,53.9821259 Z" id="Fill-73"></path>
                    <path d="M44.4358322,32.1108671 C43.7586294,33.9763217 43.0071608,35.0349231 41.941007,35.9814965 C39.8867413,37.8079301 37.4787692,37.7689091 35.5466014,35.5950629 C33.5854825,33.3872308 33.7012867,31.0661119 35.8638042,29.144014 C36.7121958,28.390028 38.0300979,27.5303077 39.4285594,27.046951 L40.3814266,29.2346434 C39.3152727,29.8514266 38.633035,30.2441538 37.8500979,30.9402378 C37.013035,31.6841538 37.0117762,32.5803776 37.8614266,33.537021 C38.6733147,34.4496084 39.6022657,34.5968811 40.3298182,33.9498881 C40.6998881,33.6213566 41.0196084,33.2802378 41.4538741,32.7175804 L41.0863217,32.3047133 L39.8036643,33.4451329 L38.4417063,31.911986 L41.6917762,29.0231748 L44.4358322,32.1108671 Z" id="Fill-75"></path>
                    <path d="M51.6403636,23.4035245 C50.9795245,22.3084196 50.1613427,22.1057622 49.3280559,22.6092587 C48.4935105,23.1127552 48.2908531,23.9296783 48.9516923,25.026042 C49.5835804,26.0707972 50.3942098,26.2608671 51.2274965,25.7586294 C52.0607832,25.2551329 52.270993,24.4495385 51.6403636,23.4035245 M54.2912727,21.8036643 C55.792951,24.2934545 55.1157483,26.6032448 52.6385455,28.0973706 C50.1626014,29.5927552 47.8037203,29.1144336 46.3007832,26.6259021 C44.7764476,24.0983497 45.4385455,21.7633846 47.9157483,20.2692587 C50.392951,18.7751329 52.7669371,19.2773706 54.2912727,21.8036643" id="Fill-77"></path>
                    <path d="M74.4046993,18.0242937 C72.976028,19.4038741 71.8343497,20.0231748 70.4598042,20.4058322 C67.8101538,21.1421958 65.6627413,20.0470909 64.8823217,17.2426154 C64.0905734,14.3966014 65.2171469,12.3612168 68.0065175,11.5858322 C69.1003636,11.2824755 70.6637203,11.0886294 72.1326713,11.2698881 L72.0269371,13.6552028 C70.7958881,13.7407972 70.0104336,13.7936643 69.0009231,14.0743636 C67.9209231,14.3739441 67.5256783,15.1795385 67.8693147,16.4131049 C68.1965874,17.590028 68.9669371,18.1312867 69.905958,17.8707273 C70.383021,17.7373007 70.8198042,17.5711469 71.457986,17.2577203 L71.3094545,16.7252727 L69.6554685,17.1847133 L69.1053986,15.2084895 L73.297007,14.0416364 L74.4046993,18.0242937 Z" id="Fill-79"></path>
                    <path d="M82.7008112,13.5142238 C83.3238881,13.4563217 83.6373147,13.0610769 83.5756364,12.409049 C83.5215105,11.830028 83.1149371,11.5468112 82.4478042,11.6097483 L81.5364755,11.6953427 L81.7164755,13.6073706 L82.7008112,13.5142238 Z M82.1847273,9.12121678 C84.7915804,8.87576224 86.3687832,9.9545035 86.573958,12.1270909 C86.6947972,13.416042 86.3549371,14.3097483 85.5002517,15.0045734 L87.3556364,17.3282098 L87.3757762,17.5447133 L84.160951,17.8480699 L82.7612308,15.8605175 L81.9354965,15.9385594 L82.1331189,18.0381399 L79.092,18.3251329 L78.259972,9.49128671 L82.1847273,9.12121678 Z" id="Fill-81"></path>
                    <polygon id="Fill-83" points="91.4671888 17.5701399 92.0764196 8.71237762 98.9881678 9.18818182 98.8157203 11.6993706 94.9098462 11.4312587 94.8532028 12.2444056 98.1498462 12.470979 97.9987972 14.6637063 94.7021538 14.4371329 94.6455105 15.2641259 98.6684476 15.541049 98.4947413 18.0534965"></polygon>
                    <path d="M109.010266,14.6045455 C108.982573,14.1778322 108.978797,13.8316783 108.99642,13.5207692 C108.86551,13.8027273 108.699357,14.1060839 108.474042,14.4711189 L107.552643,15.9941958 L109.104671,16.3831469 L109.010266,14.6045455 Z M105.53614,19.316014 L102.429566,18.5381119 L107.550126,10.6684615 L111.61586,11.6867832 L112.425231,21.0404895 L109.319916,20.2625874 L109.248168,18.984965 L106.199497,18.2221678 L105.53614,19.316014 Z" id="Fill-85"></path>
                    <polygon id="Fill-87" points="122.413217 18.5854406 119.991399 24.178028 117.188182 22.9646014 119.61 17.3707552 117.30021 16.3713147 118.404126 13.8211049 125.826923 17.0359301 124.721748 19.5848811"></polygon>
                    <polygon id="Fill-89" points="125.928252 27.1742098 130.72028 19.7111329 136.544476 23.4508531 135.185035 25.5667972 131.893427 23.4533706 131.454126 24.1393846 134.230909 25.9217622 133.045175 27.7695944 130.268392 25.9872168 129.82028 26.6833007 133.208811 28.8596643 131.850629 30.9768671"></polygon>
                    <path d="M141.261231,32.9558601 C141.726965,33.375021 142.229203,33.3372587 142.667245,32.8513846 C143.057455,32.4183776 142.990741,31.9274685 142.49228,31.4793566 L141.811301,30.8663497 L140.526126,32.2937622 L141.261231,32.9558601 Z M144.146266,29.6000559 C146.09228,31.3534825 146.366685,33.2441119 144.906545,34.8666294 C144.039273,35.8295664 143.150601,36.1845315 142.060531,36.0246713 L141.606126,38.9650909 L141.460112,39.1274685 L139.059692,36.9662098 L139.574517,34.5897063 L138.957734,34.0346014 L137.545427,35.602993 L135.275916,33.5575385 L141.214657,26.9617343 L144.146266,29.6000559 Z" id="Fill-91"></path>
                </g>
            </g>
        </g>
    </g>
</symbol>


<symbol id="college-logo" class="icon-college-logo"  viewBox="0 0 726 48">

    <defs>
        <polygon id="path-1" points="0.362734375 1.325 34.5326563 1.325 34.5326563 48.4037914 0.362734375 48.4037914"></polygon>
        <polygon id="path-3" points="1.1775 0.297733542 25.4 0.297733542 25.4 31.2498973 1.1775 31.2498973"></polygon>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Homepage" transform="translate(-151.000000, -39.000000)">
            <g id="Page-1-Copy" transform="translate(151.000000, 38.000000)">
                <path d="M11.16,3.7975 L21.54125,3.7975 C21.756875,3.7975 21.756875,5.094375 21.54125,5.094375 C15.7021875,5.094375 15.125625,5.16625 14.9084375,5.3834375 C14.619375,5.6709375 14.5475,7.6178125 14.4771875,17.494375 C14.4771875,23.4053125 14.40375,26.36 14.40375,37.39125 C14.40375,43.950625 14.4771875,45.3928125 14.6928125,45.6084375 C14.9803125,45.8959375 16.135,46.04125 21.0365625,46.04125 C27.306875,46.04125 29.2553125,45.6084375 30.6959375,44.2396875 C32.06625,42.869375 33.435,39.6975 35.6709375,30.469375 C35.8146875,30.181875 36.8240625,30.25375 36.8240625,30.469375 C36.7521875,35.3725 36.535,42.94125 36.2475,47.1225 C36.2475,47.4834375 36.1021875,47.700625 35.45375,47.700625 C29.90375,47.4834375 24.6396875,47.5553125 17.21625,47.5553125 C9.213125,47.5553125 4.600625,47.5553125 0.1303125,47.6271875 C-0.0853125,47.6271875 -0.0134375,46.2584375 0.2021875,46.2584375 C5.681875,46.185 6.4740625,46.185 6.69125,45.969375 C6.906875,45.75375 6.97875,44.744375 6.97875,40.2021875 C7.050625,31.5521875 7.1959375,22.4678125 7.1959375,14.46625 C7.1959375,7.835 7.1240625,5.6709375 6.835,5.3834375 C6.5459375,5.094375 5.6084375,5.0225 0.635,4.950625 C0.4178125,4.950625 0.49125,3.65375 0.706875,3.65375 C3.87875,3.725625 8.4928125,3.7975 11.16,3.7975" id="Fill-1" fill="#FFFFFF"></path>
                <path d="M48.7142187,10.8623437 C46.4798437,10.8623437 44.7485937,8.77171875 44.7485937,6.75296875 C44.7485937,5.52796875 45.1814062,4.59046875 45.9032812,3.86859375 C46.6954687,3.00453125 47.7767187,2.49828125 49.2907812,2.49828125 C51.3829687,2.49828125 53.1845312,4.22953125 53.1845312,6.32015625 C53.1845312,8.69828125 50.8767187,10.8623437 48.7142187,10.8623437 M39.9907812,47.5545312 C39.7751562,47.5545312 39.7032812,46.3295312 39.9907812,46.3295312 C44.0282812,46.2576562 45.1095312,46.2576562 45.3985937,45.9701562 C45.6860937,45.6810937 45.7579687,44.8873437 45.8314062,42.9404687 C45.9032812,40.4904687 45.9032812,38.8310937 45.9032812,36.5982812 C45.9032812,33.8592187 45.7579687,26.7935937 45.6157812,23.2623437 C45.6157812,21.9623437 45.4704687,21.2435937 45.1814062,20.9545312 C44.8939062,20.6654687 44.3173437,20.6654687 39.7751562,20.5951562 C39.5595312,20.5951562 39.5595312,19.3685937 39.7751562,19.3685937 C43.5235937,19.2951562 49.9407812,19.1529687 51.4532812,19.1529687 C51.9579687,19.1529687 52.1751562,19.2951562 52.1751562,19.8014062 C52.1017187,23.8389062 52.1751562,32.1998437 52.1751562,37.2467187 C52.1751562,44.0232812 52.4626562,45.6810937 52.7501562,45.9701562 C53.0392187,46.2576562 53.9048437,46.3295312 57.7970312,46.3295312 C58.1579687,46.3295312 58.1579687,47.6264062 57.7970312,47.6264062 C56.3564062,47.6264062 41.0735937,47.5545312 39.9907812,47.5545312" id="Fill-3" fill="#FFFFFF"></path>
                <g id="Group-7" transform="translate(56.250000, 0.238281)">
                    <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-6y"></g>
                    <path d="M13.4107813,25.9789062 C12.5451563,27.7804687 12.2576563,29.2945312 12.2576563,32.4664062 C12.2576563,40.1804687 12.4732813,42.1992187 12.9795313,43.1351562 C13.6264063,44.5054687 16.8701563,46.5226562 19.5373438,46.5226562 C22.0623438,46.5226562 23.9357813,45.2976562 25.3060938,42.6304687 C26.3873438,40.4679687 27.0357813,37.2960937 27.0357813,32.6835937 C27.0357813,27.8523437 26.3873438,24.5367187 25.4498438,22.6632813 C24.5123438,20.7882813 23.2873438,19.7789063 20.9795313,19.7789063 C17.6639063,19.7789063 14.9248438,23.0226563 13.4107813,25.9789062 M11.1029688,44.2898437 C10.7435938,44.2898437 9.66234375,45.2257812 6.70609375,48.2539062 C6.41859375,48.5414062 5.62640625,48.3992187 5.62640625,47.9648437 C5.76859375,44.2898437 5.91390625,36.8648437 5.91390625,27.6367187 C5.91390625,22.2304687 5.76859375,15.0929687 5.62640625,7.88515625 C5.55296875,4.42421875 5.48109375,3.34296875 5.26546875,3.12734375 C5.04828125,2.91015625 4.54515625,2.91015625 0.57953125,2.91015625 C0.29046875,2.91015625 0.29046875,1.68359375 0.57953125,1.68359375 C4.39984375,1.61171875 9.95140625,1.39609375 11.9685938,1.32421875 C12.4732813,1.32421875 12.5451563,1.61171875 12.5451563,2.04609375 C12.5451563,3.63046875 12.3295313,23.3835937 12.3295313,25.2570312 L12.4014063,25.3304687 C14.4201563,21.2929687 17.5920313,17.8320312 21.9889063,17.8320312 C25.3779688,17.8320312 28.3326563,19.4914062 30.6389063,21.7976562 C33.0904688,24.3195312 34.5326563,27.6367187 34.5326563,31.8164062 C34.5326563,36.7195312 32.2264063,40.8289062 29.3420313,43.7132812 C26.6029688,46.4523437 23.5029688,48.0382812 19.9717188,48.0382812 C14.9248438,48.0382812 11.7529688,44.2898437 11.1029688,44.2898437" id="Fill-5y" fill="#FFFFFF"></path>
                </g>
                <path d="M103.776406,22.6848437 C102.623281,24.9926562 102.190469,27.8739062 102.046719,31.4067187 L116.681094,31.3348437 C116.246719,22.9739062 114.085781,19.5129687 109.254531,19.5129687 C106.515469,19.5129687 104.568594,21.0254687 103.776406,22.6848437 M123.168594,39.5535937 C120.860781,45.8254687 115.599844,48.5645312 110.768594,48.5645312 C106.010781,48.5645312 101.685781,46.6176562 98.7310937,43.6629687 C96.1342187,41.0676562 94.5482812,37.8223437 94.5482812,33.2098437 C94.5482812,29.3895312 96.3514062,25.5692187 98.8029687,23.0442187 C101.757656,20.0895312 105.362344,18.0707812 109.759219,18.0707812 C114.085781,18.0707812 117.546719,19.9442187 119.852969,22.2520312 C121.871719,24.2707812 123.601406,27.8739062 123.673281,32.2004687 C123.673281,32.5598437 123.527969,32.7051562 123.242031,32.7770312 C111.562344,32.7051562 105.795156,32.8489062 102.046719,32.9942187 C102.046719,37.6067187 102.695156,40.4910937 103.632656,42.4379687 C105.073281,45.2473437 107.309219,46.7614062 111.490469,46.7614062 C116.104531,46.7614062 119.709219,44.1676562 121.798281,38.9770312 C122.087344,38.6879687 123.242031,39.1926562 123.168594,39.5535937" id="Fill-8" fill="#FFFFFF"></path>
                <path d="M130.11375,45.9696875 C130.329375,45.7525 130.474687,43.3025 130.546562,41.5009375 C130.546562,38.905625 130.546562,32.055625 130.474687,28.88375 C130.474687,23.4759375 130.11375,21.315 129.824687,21.0259375 C129.537187,20.7384375 128.960625,20.7384375 124.996562,20.6665625 C124.7075,20.6665625 124.7075,19.3696875 125.068437,19.3696875 C127.95125,19.3696875 134.223125,19.1525 135.809062,19.1525 C136.818437,19.1525 136.962187,19.29625 136.962187,20.2321875 C136.890312,22.036875 136.818437,25.711875 136.818437,28.3790625 L136.962187,28.3790625 C139.268437,22.9728125 141.865312,18.5040625 146.045,18.5040625 C149.795,18.5040625 152.173125,20.80875 152.173125,23.62125 C152.173125,26.5775 150.010625,28.3071875 147.991875,28.3071875 C145.90125,28.3071875 144.38875,27.00875 144.38875,24.9915625 C144.38875,22.54 146.334062,21.6025 146.334062,21.0259375 C146.334062,20.7384375 145.973125,20.449375 145.109062,20.449375 C142.874687,20.449375 140.566875,23.33375 138.837187,26.936875 C137.466875,29.6775 136.962187,31.6228125 136.962187,34.0025 L136.962187,40.561875 C137.035625,43.8790625 137.177812,45.60875 137.466875,45.89625 C137.612187,46.1134375 138.765312,46.1134375 143.018437,46.25875 C143.377812,46.25875 143.377812,47.6275 143.090312,47.6275 L124.635625,47.6275 C124.418437,47.6275 124.346562,46.3290625 124.635625,46.3290625 C129.321562,46.25875 129.898125,46.1853125 130.11375,45.9696875" id="Fill-10" fill="#FFFFFF"></path>
                <path d="M161.159375,40.6351562 C161.159375,44.1679687 162.3125,46.1132812 164.907812,46.1132812 C167.792187,46.1132812 171.179687,43.3023437 171.829687,41.8601562 C172.117187,41.3554687 172.189062,40.9242187 172.260937,38.6882812 C172.332812,36.5976562 172.332812,35.8039062 172.40625,32.4882812 C162.960937,33.2820312 161.159375,34.7960937 161.159375,40.6351562 M161.304687,21.8914062 C161.304687,22.6851562 164.115625,22.9007812 164.115625,25.7117187 C164.115625,27.7304687 162.528125,29.2445312 160.367187,29.2445312 C158.276562,29.2445312 156.61875,27.7304687 156.61875,25.5679687 C156.61875,24.1273437 157.195312,22.9007812 158.346875,21.8195312 C160.221875,20.0179687 163.178125,18.3585937 167.43125,18.3585937 C171.829687,18.3585937 174.639062,19.6570312 176.514062,21.6023437 C178.389062,23.4773437 179.0375,25.6398437 179.0375,29.0273437 C179.0375,32.6335937 178.821875,38.9054687 178.821875,43.8054687 C178.821875,45.5367187 179.325,46.1851562 180.551562,46.1851562 C182.1375,46.1851562 183.578125,44.5992187 184.3,40.9945312 C184.44375,40.7789062 185.38125,40.9242187 185.38125,41.2117187 C184.73125,45.2476562 182.496875,48.2773437 178.676562,48.2773437 C175.071875,48.2773437 172.765625,46.3304687 172.045312,43.4460937 C169.665625,46.1851562 166.6375,48.1320312 163.034375,48.2039062 C158.78125,48.2773437 154.382812,45.3195312 154.382812,40.9945312 C154.382812,39.1929687 155.032812,37.5351562 156.545312,36.0929687 C158.923437,33.6414062 163.178125,31.8398437 172.40625,31.1914062 C172.476562,30.2523437 172.40625,28.1632812 172.40625,26.1460937 C172.40625,23.4054687 172.045312,22.0367187 171.107812,21.0976562 C170.314062,20.3054687 168.801562,19.7289062 166.710937,19.7289062 C163.467187,19.7289062 161.304687,21.3867187 161.304687,21.8914062" id="Fill-12" fill="#FFFFFF"></path>
                <path d="M198.052031,1.77875 C198.628594,1.77875 198.772344,2.0678125 198.772344,2.644375 C198.700469,10.14125 198.628594,16.3396875 198.628594,24.1271875 C198.628594,31.335 198.556719,37.3178125 198.484844,43.0865625 C198.484844,44.888125 198.700469,45.6084375 199.061406,45.969375 C199.350469,46.185 199.637969,46.3303125 203.962969,46.4021875 C204.178594,46.4021875 204.252031,47.700625 203.962969,47.700625 C197.619219,47.4834375 193.581719,47.4834375 186.878594,47.4834375 C186.661406,47.4834375 186.733281,46.185 186.950469,46.185 C190.842656,46.185 191.419219,46.113125 191.636406,45.8959375 C191.852031,45.681875 191.852031,45.319375 191.852031,44.1678125 C191.923906,40.706875 192.069219,34.0021875 192.069219,29.4615625 C192.069219,19.585 192.069219,13.0959375 191.923906,5.3115625 C191.923906,4.0146875 191.923906,3.65375 191.708281,3.438125 C191.491094,3.2209375 191.058281,3.2209375 186.878594,3.00375 C186.589531,2.931875 186.589531,1.77875 186.950469,1.77875 C191.058281,1.850625 193.725469,1.850625 198.052031,1.77875" id="Fill-14" fill="#FFFFFF"></path>
                <path d="M243.24625,11.2940625 C240.0025,18.93625 236.75875,26.2175 234.235312,32.055 C238.632187,32.2721875 246.49,32.4175 250.815,32.4175 C248.797812,26.289375 245.482187,17.133125 243.391562,11.2940625 L243.24625,11.2940625 Z M225.800937,45.033125 C226.593125,44.239375 227.530625,42.7971875 228.685312,40.3471875 C234.668125,27.4425 240.650937,14.1065625 245.047812,2.6440625 C245.193125,2.49875 245.554062,2.355 246.418125,2.355 C247.643125,2.355 247.860312,2.49875 247.932187,2.7878125 C249.879062,8.626875 252.907187,17.639375 261.124375,40.13 C262.350937,43.5909375 262.9275,44.7440625 263.791562,45.608125 C264.44,46.258125 265.09,46.33 269.269687,46.545625 C269.486875,46.545625 269.486875,47.7721875 269.269687,47.7721875 C265.23375,47.7003125 262.2775,47.555 259.394687,47.555 C256.0775,47.555 254.132187,47.483125 249.879062,47.626875 C249.73375,47.626875 249.661875,46.401875 249.879062,46.401875 C253.338437,46.1846875 254.204062,46.0409375 254.563437,45.608125 C254.924375,45.3190625 254.997812,44.7440625 254.563437,43.158125 C253.916562,41.21125 252.54625,37.3175 251.319687,33.93 C250.094687,33.858125 246.2025,33.78625 240.507187,33.78625 C237.768125,33.78625 235.965,33.78625 233.94625,33.858125 C233.65875,33.858125 233.37125,33.858125 233.225937,34.2190625 C232.072812,36.7425 231.424375,38.4003125 230.343125,41.21125 C229.910312,42.4378125 229.62125,43.5909375 229.62125,44.31125 C229.62125,45.8971875 230.27125,46.1128125 235.100937,46.401875 C235.244687,46.401875 235.172812,47.626875 235.0275,47.626875 C231.136875,47.483125 224.863437,47.483125 220.322812,47.626875 C220.1775,47.626875 220.1775,46.47375 220.322812,46.47375 C224.07125,46.258125 224.791562,46.0409375 225.800937,45.033125 Z" id="Fill-16" fill="#FFFFFF"></path>
                <path d="M276.914062,45.9696875 C277.129687,45.7525 277.275,43.3025 277.346875,41.5009375 C277.346875,38.905625 277.346875,32.055625 277.275,28.88375 C277.275,23.4759375 276.914062,21.315 276.625,21.0259375 C276.3375,20.7384375 275.760937,20.7384375 271.795312,20.6665625 C271.507812,20.6665625 271.507812,19.3696875 271.86875,19.3696875 C274.751562,19.3696875 281.023437,19.1525 282.609375,19.1525 C283.61875,19.1525 283.7625,19.29625 283.7625,20.2321875 C283.690625,22.036875 283.61875,25.711875 283.61875,28.3790625 L283.7625,28.3790625 C286.06875,22.9728125 288.665625,18.5040625 292.845312,18.5040625 C296.595312,18.5040625 298.973437,20.80875 298.973437,23.62125 C298.973437,26.5775 296.810937,28.3071875 294.792187,28.3071875 C292.701562,28.3071875 291.1875,27.00875 291.1875,24.9915625 C291.1875,22.54 293.132812,21.6025 293.132812,21.0259375 C293.132812,20.7384375 292.773437,20.449375 291.909375,20.449375 C289.673437,20.449375 287.367187,23.33375 285.6375,26.936875 C284.267187,29.6775 283.7625,31.6228125 283.7625,34.0025 L283.7625,40.561875 C283.834375,43.8790625 283.978125,45.60875 284.267187,45.89625 C284.410937,46.1134375 285.564062,46.1134375 289.81875,46.25875 C290.178125,46.25875 290.178125,47.6275 289.889062,47.6275 L271.434375,47.6275 C271.21875,47.6275 271.146875,46.3290625 271.434375,46.3290625 C276.121875,46.25875 276.698437,46.1853125 276.914062,45.9696875" id="Fill-18" fill="#FFFFFF"></path>
                <path d="M314.95875,48.131875 C311.930625,48.131875 309.768125,47.194375 308.182187,45.6084375 C306.885312,44.3115625 306.235312,42.725625 306.235312,39.55375 C306.235312,34.8678125 306.307187,26.6490625 306.4525,20.95375 C306.019687,20.8834375 302.1275,20.8834375 301.33375,20.8834375 C300.972812,20.8834375 301.04625,19.513125 301.261875,19.513125 C305.586875,19.2959375 306.885312,18.935 307.894687,17.9271875 C309.335312,16.556875 311.282187,12.519375 312.0025,8.9865625 C312.074375,8.6271875 313.157187,8.6271875 313.229062,8.9865625 C313.011875,11.4396875 313.011875,16.988125 312.94,19.2959375 C315.824375,19.369375 320.582187,19.369375 321.73375,19.369375 C322.168125,19.369375 322.022812,20.8834375 321.663437,20.8834375 C315.968125,20.8834375 313.73375,20.95375 312.94,21.025625 C312.79625,23.6928125 312.6525,31.694375 312.6525,37.535 C312.6525,42.5084375 312.79625,43.3021875 313.229062,44.2396875 C313.73375,45.2475 314.95875,46.04125 316.544687,46.04125 C318.850937,46.04125 320.87125,43.663125 322.094687,38.9053125 C322.168125,38.61625 323.393125,38.831875 323.32125,39.1928125 C322.094687,45.1053125 319.14,48.131875 314.95875,48.131875" id="Fill-20" fill="#FFFFFF"></path>
                <path d="M348.486094,44.8160937 C346.250156,46.9785937 342.718906,48.0598437 339.547031,48.0598437 C333.779844,48.0598437 331.039219,46.0410937 330.247031,46.0410937 C329.886094,46.0410937 329.381406,46.8332812 328.732969,48.4926562 C328.589219,48.7801562 327.579844,48.7082812 327.579844,48.4207812 C327.436094,45.1051562 327.147031,40.9957812 326.859531,37.8223437 C326.859531,37.5348437 328.012656,37.3910937 328.084531,37.6801562 C328.950156,40.3473437 330.031406,42.7254687 331.400156,44.0942187 C333.129844,45.8254687 336.157969,46.6895312 339.331406,46.6895312 C341.998594,46.6895312 343.800156,46.1129687 344.881406,45.1051562 C345.529844,44.3832812 346.107969,43.1567187 346.107969,41.5723437 C346.107969,39.1192187 344.304844,37.8942187 337.961094,36.2379687 C333.129844,34.9395312 330.897031,34.0020312 329.454844,32.5598437 C328.301719,31.4067187 327.653281,29.8207812 327.653281,27.9473437 C327.653281,22.5395312 332.553281,18.5754687 338.248594,18.5754687 C342.647031,18.5754687 345.747031,20.8832812 346.467344,20.8832812 C346.828281,20.8832812 347.043906,20.3051562 348.053281,17.8535937 C348.125156,17.6379687 349.134531,17.7098437 349.206406,17.9270312 C348.990781,21.1707812 348.990781,24.2707812 349.062656,27.5864062 C349.062656,28.0910937 347.981406,28.0910937 347.764219,27.7301562 C346.828281,25.3520312 345.890781,23.6223437 344.807969,22.6129687 C343.295469,21.0254687 341.276719,19.9442187 338.032969,19.9442187 C335.942344,19.9442187 334.356406,20.5942187 333.348594,21.6035937 C332.626719,22.3239062 332.122031,23.4051562 332.122031,24.6301562 C332.122031,27.3707812 334.211094,28.4504687 340.482969,30.0379687 C345.457969,31.3348437 347.693906,32.3442187 349.134531,33.8582812 C350.432969,35.1551562 351.081406,36.7426562 351.081406,38.6879687 C351.081406,41.2832812 349.926719,43.3020312 348.486094,44.8160937" id="Fill-22" fill="#FFFFFF"></path>
                <path d="M376.846875,36.2025 C375.165625,39.6259375 374.684375,41.8478125 374.684375,43.4103125 C374.684375,45.5728125 376.126562,46.83375 378.048437,46.83375 C381.171875,46.83375 385.976562,42.449375 388.320312,37.7040625 C390.6625,33.0196875 392.04375,29.115 392.04375,28.0946875 C392.04375,26.6525 390.542187,24.79 388.320312,24.79 C383.514062,24.79 379.910937,30.0759375 376.846875,36.2025 M392.825,26.593125 C393.484375,25.2696875 394.265625,23.70875 394.50625,23.70875 C394.865625,23.70875 397.389062,24.1290625 397.510937,24.2509375 C397.629687,24.3696875 397.810937,25.2696875 397.748437,25.4509375 C397.029687,27.0728125 393.545312,35.4821875 391.5625,40.6478125 C391.021875,41.968125 390.6625,43.830625 390.6625,44.7321875 C390.6625,45.7525 391.2625,46.4728125 392.164062,46.4728125 C393.604687,46.4728125 395.346875,45.6321875 398.890625,41.1275 C399.0125,41.0071875 399.792187,41.549375 399.73125,41.668125 C396.36875,46.174375 394.085937,48.0946875 391.203125,48.0946875 C389.160937,48.0946875 386.9375,46.6540625 386.9375,44.3103125 C386.9375,43.29 387.11875,42.2696875 387.359375,41.186875 C384.595312,44.911875 380.690625,48.155625 377.6875,48.155625 C374.625,48.155625 371.140625,44.911875 371.140625,40.34625 C371.140625,37.2228125 372.342187,33.9790625 376.00625,30.255625 C379.970312,26.3509375 384.715625,23.70875 388.320312,23.70875 C390.421875,23.70875 392.103125,24.90875 392.825,26.593125" id="Fill-24" fill="#F45A1D"></path>
                <path d="M413.385469,24.4898437 C413.566719,24.4898437 413.685469,24.6101562 413.626094,24.7898437 C413.205781,26.0507812 411.104219,31.8789062 410.502656,33.3789062 C410.443281,33.5007812 410.622969,33.7398437 410.743281,33.6195312 C415.908906,26.8320312 418.730781,23.6492187 421.976094,23.6492187 C423.716719,23.6492187 424.979219,24.2507812 425.999531,25.2695312 C427.021406,26.2914062 427.441719,27.3726562 427.441719,28.6929687 C427.441719,30.7960937 426.719844,32.1789062 424.497969,36.8039062 C422.335469,41.3679687 421.615156,43.1101562 421.615156,44.3726562 C421.615156,45.4523437 422.396406,46.2335937 423.357344,46.2335937 C425.158906,46.2335937 427.321406,44.4914062 430.022969,41.4289062 C430.144844,41.3085937 430.985469,41.9695312 430.865156,42.0898437 C428.882344,44.4914062 425.099531,48.0351562 422.215156,48.0351562 C420.894844,48.0351562 419.993281,47.6148437 419.091719,46.7148437 C418.251094,45.8742187 417.830781,44.8523437 417.830781,43.4695312 C417.830781,42.2695312 418.430781,40.2257812 420.652656,35.6617187 C422.937031,30.9757812 423.537031,29.4742187 423.537031,28.0335937 C423.537031,26.5929687 422.576094,25.5695312 421.194844,25.5695312 C419.693281,25.5695312 418.671406,26.1710937 416.329219,28.5132812 C412.244844,32.5976562 408.699531,37.9445312 407.679219,40.4085937 C406.777656,42.6882812 405.576094,45.3335937 404.735469,47.4351562 C404.676094,47.6757812 400.952656,47.4960937 400.591719,47.4960937 C400.471406,47.4960937 400.471406,47.3742187 400.532344,47.1945312 C401.312031,45.4523437 405.516719,35.9632812 406.418281,33.8007812 C408.640156,28.2132812 409.060469,25.9914062 408.940156,25.8710937 C408.821406,25.7507812 403.415156,25.8117187 402.633906,25.7507812 C402.454219,25.7507812 402.572969,24.6695312 402.754219,24.6695312 C406.177656,24.6695312 413.085469,24.4898437 413.385469,24.4898437" id="Fill-26" fill="#F45A1D"></path>
                <path d="M439.148438,34.5804687 C437.828125,37.1632812 436.926562,39.9867187 436.926562,42.5695312 C436.926562,45.4523437 438.007812,47.1945312 440.710938,47.1945312 C442.632813,47.1945312 444.615625,46.4132812 447.25625,43.7710937 C449.420313,41.6085937 450.68125,39.8664062 452.24375,36.0226562 C453.625,32.7195312 454.826563,29.9554687 454.945313,29.3539062 C454.465625,26.7117187 452.723438,24.6695312 449.840625,24.6695312 C445.515625,24.6695312 441.671875,29.4742187 439.148438,34.5804687 M455.667188,27.6132812 C455.667188,27.6726562 455.785938,27.7320312 455.846875,27.6132812 C458.25,21.7257812 459.8125,17.8820312 462.032813,12.1757812 C462.334375,11.3351562 462.214063,10.9757812 462.09375,10.8539062 C461.914063,10.6742187 458.009375,10.5539062 455.426563,10.5539062 C455.246875,10.5539062 455.246875,9.47265625 455.4875,9.47265625 C458.790625,9.47265625 463.35625,9.59296875 467.31875,9.53359375 C467.5,9.53359375 467.679688,9.71328125 467.620313,9.89296875 C462.515625,21.9070312 459.871875,28.2742187 454.404688,40.8273437 C453.684375,42.5101562 453.44375,43.5304687 453.44375,44.6117187 C453.44375,45.5726562 453.984375,46.4132812 454.945313,46.4132812 C456.3875,46.4132812 457.76875,45.6320312 459.8125,43.5914062 C460.7125,42.6882812 461.253125,42.1492187 462.032813,41.1273437 C462.154688,41.0070312 462.935938,41.6085937 462.814063,41.7289062 C459.63125,45.7523437 456.807813,48.0945312 454.345313,48.0945312 C451.703125,48.0945312 449.660938,46.2929687 449.660938,44.1304687 C449.660938,43.4695312 449.660938,43.2304687 449.78125,42.4492187 C446.717188,46.2335937 443.714063,48.3367187 440.409375,48.3367187 C438.367188,48.3367187 436.265625,47.2539062 434.945312,45.9335937 C433.74375,44.7320312 432.721875,42.8710937 432.721875,40.4070312 C432.721875,36.5632812 434.703125,32.5976562 437.828125,29.4742187 C440.770313,26.5320312 445.275,23.5882812 450.201563,23.5882812 C452.84375,23.5882812 454.885938,25.4507812 455.667188,27.6132812" id="Fill-28" fill="#F45A1D"></path>
                <path d="M513.130781,3.14890625 C513.202656,2.93171875 514.212031,3.07546875 514.212031,3.29265625 C513.851094,7.83484375 513.707344,11.8707813 514.068281,17.4942188 C514.068281,17.7098438 513.058906,17.8535938 512.915156,17.5660938 C510.968281,12.5192187 509.310469,9.63484375 507.507344,7.83484375 C505.562031,5.88796875 503.038594,4.73484375 499.290156,4.73484375 C495.396406,4.73484375 493.090156,5.81609375 491.432344,7.47390625 C489.990156,8.91453125 489.126094,11.0051562 489.126094,13.2410937 C489.126094,17.9989062 492.297969,19.5129687 500.515156,21.6739063 C508.012031,23.6926563 511.616719,25.4957813 513.780781,27.6598438 C515.654219,29.5332813 516.590156,31.6957813 516.590156,35.1551563 C516.590156,42.7973438 509.813594,48.4207813 501.308906,48.4207813 C493.522969,48.4207813 489.629219,44.5989063 488.115156,44.5989063 C487.179219,44.5989063 486.024531,45.8957813 485.016719,47.8426563 C484.871406,48.1317188 483.935469,47.9879688 483.935469,47.7004688 C484.079219,42.6520313 484.079219,38.6160938 483.430781,31.9832813 C483.430781,31.6957813 484.366719,31.5520313 484.512031,31.8395313 C487.322969,38.2567188 489.052656,41.2114063 491.071406,43.2285938 C493.305781,45.4645313 496.910469,46.9067188 501.163594,46.9067188 C504.768281,46.9067188 507.435469,45.9692188 509.021406,44.3832813 C510.535469,42.8692188 511.255781,41.1379688 511.255781,38.6160938 C511.255781,34.0020313 508.372969,31.7660938 499.866719,29.6051563 C492.369844,27.6598438 488.908906,26.0723438 486.818281,23.9098438 C484.943281,22.0364063 484.079219,19.9442188 484.079219,16.5567187 C484.079219,9.56296875 490.422969,3.36609375 499.433906,3.36609375 C506.930781,3.36609375 510.174531,6.53640625 510.824531,6.53640625 C511.401094,6.53640625 512.338594,4.87859375 513.130781,3.14890625" id="Fill-30" fill="#FFFFFF"></path>
                <path d="M525.604844,43.8792187 C523.226719,41.5010937 521.425156,38.2557812 521.425156,33.7854687 C521.425156,29.9667187 523.009531,26.2167187 525.893906,23.2620312 C528.704844,20.4495312 532.381406,18.2870312 537.282969,18.2870312 C543.770469,18.2870312 548.817344,22.1792187 548.817344,26.1448437 C548.817344,28.9557812 546.872031,30.5417187 544.779844,30.5417187 C542.690781,30.5417187 541.103281,28.9557812 541.103281,27.1542187 C541.103281,26.0729687 541.392344,25.2807812 541.968906,24.6307812 C543.122031,23.4760937 544.709531,23.6214062 544.997031,23.3339062 C545.573594,22.7557812 542.690781,19.8010937 537.643906,19.8010937 C533.823594,19.8010937 531.732969,21.6745312 530.651719,23.8385937 C529.425156,26.2885937 528.993906,29.0276562 528.993906,32.9932812 C528.993906,37.8948437 529.353281,40.6354687 530.434531,42.6526562 C531.589219,44.9589062 533.462656,46.6901562 537.428281,46.6901562 C541.607969,46.6901562 545.645469,43.8057812 547.518906,38.1120312 C547.664219,37.5339062 549.034531,38.1823437 548.889219,38.6885937 C546.872031,44.6714062 542.401719,48.4198437 536.417344,48.4198437 C532.237656,48.4198437 528.417344,46.6901562 525.604844,43.8792187" id="Fill-32" fill="#FFFFFF"></path>
                <path d="M559.706562,10.8623437 C557.472187,10.8623437 555.740937,8.77171875 555.740937,6.75296875 C555.740937,5.52796875 556.17375,4.59046875 556.895625,3.86859375 C557.687812,3.00453125 558.769062,2.49828125 560.283125,2.49828125 C562.375312,2.49828125 564.176875,4.22953125 564.176875,6.32015625 C564.176875,8.69828125 561.869062,10.8623437 559.706562,10.8623437 M550.983125,47.5545312 C550.7675,47.5545312 550.695625,46.3295312 550.983125,46.3295312 C555.020625,46.2576562 556.101875,46.2576562 556.390937,45.9701562 C556.68,45.6810937 556.750312,44.8873437 556.82375,42.9404687 C556.895625,40.4904687 556.895625,38.8310937 556.895625,36.5982812 C556.895625,33.8592187 556.750312,26.7935937 556.606562,23.2623437 C556.606562,21.9623437 556.462812,21.2435937 556.17375,20.9545312 C555.88625,20.6654687 555.309687,20.6654687 550.7675,20.5951562 C550.551875,20.5951562 550.551875,19.3685937 550.7675,19.3685937 C554.515938,19.2951562 560.933125,19.1529687 562.445625,19.1529687 C562.950312,19.1529687 563.1675,19.2951562 563.1675,19.8014062 C563.094062,23.8389062 563.1675,32.1998437 563.1675,37.2467187 C563.1675,44.0232812 563.455,45.6810937 563.7425,45.9701562 C564.031562,46.2576562 564.897187,46.3295312 568.789375,46.3295312 C569.150312,46.3295312 569.150312,47.6264062 568.789375,47.6264062 C567.34875,47.6264062 552.064375,47.5545312 550.983125,47.5545312" id="Fill-34" fill="#FFFFFF"></path>
                <path d="M578.561875,22.6848437 C577.40875,24.9926562 576.975937,27.8739062 576.832187,31.4067187 L591.466562,31.3348437 C591.032187,22.9739062 588.87125,19.5129687 584.04,19.5129687 C581.300937,19.5129687 579.354062,21.0254687 578.561875,22.6848437 M597.954062,39.5535937 C595.647812,45.8254687 590.385312,48.5645312 585.554062,48.5645312 C580.79625,48.5645312 576.47125,46.6176562 573.516562,43.6629687 C570.919688,41.0676562 569.335313,37.8223437 569.335313,33.2098437 C569.335313,29.3895312 571.138438,25.5692187 573.588437,23.0442187 C576.543125,20.0895312 580.147812,18.0707812 584.54625,18.0707812 C588.87125,18.0707812 592.332187,19.9442187 594.638437,22.2520312 C596.657187,24.2707812 598.386875,27.8739062 598.45875,32.2004687 C598.45875,32.5598437 598.313437,32.7051562 598.0275,32.7770312 C586.347812,32.7051562 580.580625,32.8489062 576.832187,32.9942187 C576.832187,37.6067187 577.480625,40.4910937 578.418125,42.4379687 C579.860312,45.2473437 582.094687,46.7614062 586.275937,46.7614062 C590.89,46.7614062 594.494687,44.1676562 596.585312,38.9770312 C596.872812,38.6879687 598.0275,39.1926562 597.954062,39.5535937" id="Fill-36" fill="#FFFFFF"></path>
                <path d="M599.991406,46.4015625 C603.739844,46.3296875 604.460156,46.3296875 604.749219,46.1125 C605.036719,45.825 605.182031,44.74375 605.182031,40.41875 L605.182031,26.1453125 C605.182031,23.0453125 604.964844,21.3140625 604.605469,21.0265625 C604.388281,20.7375 603.667969,20.665625 599.919531,20.59375 C599.702344,20.59375 599.702344,19.36875 599.991406,19.36875 C603.235156,19.36875 608.497656,19.2953125 611.452344,19.2953125 C611.886719,19.2953125 611.958594,19.5125 611.958594,20.0171875 C611.886719,21.8203125 611.741406,25.3515625 611.671094,27.1546875 L611.886719,27.2265625 C614.410156,22.2515625 617.508594,18.14375 622.627344,18.14375 C628.250781,18.14375 631.494531,21.7484375 631.494531,28.5953125 C631.494531,31.334375 631.422656,34.7953125 631.422656,38.328125 C631.422656,44.45625 631.638281,45.753125 631.999219,46.1125 C632.214844,46.4015625 632.864844,46.4015625 636.324219,46.5453125 C636.541406,46.5453125 636.541406,47.7 636.252344,47.7 C630.485156,47.5546875 625.727344,47.6265625 621.257031,47.6265625 C620.897656,47.6265625 620.969531,46.4734375 621.185156,46.4734375 C623.349219,46.3296875 624.213281,46.2578125 624.502344,46.0421875 C624.789844,45.753125 624.789844,44.815625 624.789844,43.0859375 C624.789844,40.778125 624.717969,28.6671875 624.717969,27.1546875 C624.717969,23.3328125 623.564844,21.0984375 620.608594,21.0984375 C617.077344,21.0984375 614.121094,24.91875 612.607031,28.01875 C611.813281,29.5328125 611.597656,30.4703125 611.597656,32.99375 C611.597656,35.15625 611.671094,39.7703125 611.741406,42.3640625 C611.813281,44.8875 611.886719,45.753125 612.102344,45.9703125 C612.317969,46.184375 612.822656,46.3296875 616.427344,46.4734375 C616.642969,46.4734375 616.642969,47.7 616.283594,47.7 C611.671094,47.5546875 604.533594,47.5546875 600.063281,47.7 C599.702344,47.6265625 599.774219,46.4015625 599.991406,46.4015625" id="Fill-38" fill="#FFFFFF"></path>
                <path d="M641.10625,43.8792187 C638.728125,41.5010937 636.925,38.2557812 636.925,33.7854687 C636.925,29.9667187 638.510937,26.2167187 641.395312,23.2620312 C644.20625,20.4495312 647.882812,18.2870312 652.784375,18.2870312 C659.271875,18.2870312 664.31875,22.1792187 664.31875,26.1448437 C664.31875,28.9557812 662.373437,30.5417187 660.28125,30.5417187 C658.192187,30.5417187 656.604687,28.9557812 656.604687,27.1542187 C656.604687,26.0729687 656.89375,25.2807812 657.470312,24.6307812 C658.623437,23.4760937 660.210937,23.6214062 660.498437,23.3339062 C661.075,22.7557812 658.192187,19.8010937 653.145312,19.8010937 C649.325,19.8010937 647.234375,21.6745312 646.153125,23.8385937 C644.926562,26.2885937 644.495312,29.0276562 644.495312,32.9932812 C644.495312,37.8948437 644.854687,40.6354687 645.935937,42.6526562 C647.090625,44.9589062 648.964062,46.6901562 652.929687,46.6901562 C657.109375,46.6901562 661.146875,43.8057812 663.020312,38.1120312 C663.165625,37.5339062 664.535937,38.1823437 664.390625,38.6885937 C662.373437,44.6714062 657.903125,48.4198437 651.91875,48.4198437 C647.739062,48.4198437 643.91875,46.6901562 641.10625,43.8792187" id="Fill-40" fill="#FFFFFF"></path>
                <path d="M677.081875,22.6848437 C675.92875,24.9926562 675.495937,27.8739062 675.352187,31.4067187 L689.986562,31.3348437 C689.55375,22.9739062 687.39125,19.5129687 682.561562,19.5129687 C679.820937,19.5129687 677.874062,21.0254687 677.081875,22.6848437 M696.474062,39.5535937 C694.167812,45.8254687 688.905312,48.5645312 684.074062,48.5645312 C679.317812,48.5645312 674.99125,46.6176562 672.036562,43.6629687 C669.439687,41.0676562 667.855312,37.8223437 667.855312,33.2098437 C667.855312,29.3895312 669.658437,25.5692187 672.108437,23.0442187 C675.063125,20.0895312 678.667812,18.0707812 683.06625,18.0707812 C687.39125,18.0707812 690.850625,19.9442187 693.158437,22.2520312 C695.177187,24.2707812 696.906875,27.8739062 696.97875,32.2004687 C696.97875,32.5598437 696.835,32.7051562 696.5475,32.7770312 C684.867812,32.7051562 679.100625,32.8489062 675.352187,32.9942187 C675.352187,37.6067187 676.000625,40.4910937 676.938125,42.4379687 C678.380312,45.2473437 680.614687,46.7614062 684.795937,46.7614062 C689.41,46.7614062 693.014687,44.1676562 695.105312,38.9770312 C695.392812,38.6879687 696.5475,39.1926562 696.474062,39.5535937" id="Fill-42" fill="#FFFFFF"></path>
                <g id="Group-46" transform="translate(700.000000, 17.425781)">
                    <mask id="mask-4" fill="white">
                        <use xlink:href="#path-3"></use>
                    </mask>
                    <g id="Clip-45"></g>
                    <path d="M22.805625,27.3903125 C20.5696875,29.5528125 17.0384375,30.6340625 13.8665625,30.6340625 C8.099375,30.6340625 5.35875,28.6153125 4.5665625,28.6153125 C4.205625,28.6153125 3.7009375,29.4075 3.0525,31.066875 C2.90875,31.354375 1.899375,31.2825 1.899375,30.995 C1.7540625,27.679375 1.4665625,23.57 1.1775,20.3965625 C1.1775,20.1090625 2.330625,19.9653125 2.4040625,20.254375 C3.2696875,22.9215625 4.3509375,25.2996875 5.7196875,26.6684375 C7.449375,28.3996875 10.4775,29.26375 13.6509375,29.26375 C16.318125,29.26375 18.118125,28.6871875 19.2009375,27.679375 C19.849375,26.9575 20.4275,25.7309375 20.4275,24.1465625 C20.4275,21.6934375 18.624375,20.4684375 12.280625,18.8121875 C7.449375,17.51375 5.2165625,16.57625 3.774375,15.1340625 C2.6196875,13.9809375 1.9728125,12.395 1.9728125,10.5215625 C1.9728125,5.11375 6.8728125,1.1496875 12.568125,1.1496875 C16.965,1.1496875 20.0665625,3.4575 20.786875,3.4575 C21.14625,3.4575 21.3634375,2.879375 22.3728125,0.4278125 C22.4446875,0.2121875 23.4540625,0.2840625 23.5259375,0.50125 C23.3103125,3.745 23.3103125,6.845 23.3821875,10.160625 C23.3821875,10.6653125 22.3009375,10.6653125 22.08375,10.304375 C21.14625,7.92625 20.20875,6.1965625 19.1275,5.1871875 C17.615,3.5996875 15.59625,2.5184375 12.3525,2.5184375 C10.261875,2.5184375 8.6759375,3.1684375 7.6665625,4.1778125 C6.94625,4.898125 6.44,5.979375 6.44,7.204375 C6.44,9.945 8.530625,11.0246875 14.8025,12.6121875 C19.7775,13.9090625 22.011875,14.9184375 23.4540625,16.4325 C24.7525,17.729375 25.4009375,19.316875 25.4009375,21.2621875 C25.4009375,23.8575 24.24625,25.87625 22.805625,27.3903125" id="Fill-44" fill="#FFFFFF"></path>
                </g>
            </g>
        </g>
    </g>

</symbol>


<symbol id="college-logo-stacked" class="icon-college-logo-stacked"  viewBox="0 0 368 83">


    <defs>
        <polygon id="path-1" points="0.576990741 0.918909091 27.1246759 0.918909091 27.1246759 37.4848839 0.576990741 37.4848839"></polygon>
        <polygon id="path-3" points="0 83.0813455 366.666667 83.0813455 366.666667 1.27298182 0 1.27298182"></polygon>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Homepage" transform="translate(-82.000000, -2844.000000)">
            <g id="Group-16" transform="translate(0.000000, 2807.000000)">
                <g id="Group-5" transform="translate(82.666667, 36.000000)">
                    <path d="M101.175046,3.00872727 L109.24044,3.00872727 C109.408495,3.00872727 109.408495,4.01672727 109.24044,4.01672727 C104.704213,4.01672727 104.256065,4.07272727 104.088009,4.24072727 C103.863935,4.46472727 103.807917,5.97545455 103.751898,13.6461818 C103.751898,18.2381818 103.69588,20.5341818 103.69588,29.0996364 C103.69588,34.1943636 103.751898,35.3143636 103.919954,35.4823636 C104.145301,35.7050909 105.040324,35.8170909 108.84831,35.8170909 C113.721921,35.8170909 115.233148,35.4823636 116.353519,34.4183636 C117.419144,33.3556364 118.482222,30.8916364 120.218796,23.7249091 C120.32956,23.5009091 121.115093,23.5569091 121.115093,23.7249091 C121.059074,27.5316364 120.891019,33.4103636 120.666944,36.6570909 C120.666944,36.9383636 120.554907,37.1050909 120.050741,37.1050909 C115.737315,36.9383636 111.649236,36.9930909 105.880602,36.9930909 C99.6638194,36.9930909 96.0799074,36.9930909 92.6067593,37.0503636 C92.4387037,37.0503636 92.4947222,35.9850909 92.6627778,35.9850909 C96.918912,35.9303636 97.5351157,35.9303636 97.7031713,35.7623636 C97.8712269,35.5943636 97.9272454,34.8090909 97.9272454,31.2836364 C97.9832639,24.5649091 98.0953009,17.5101818 98.0953009,11.2941818 C98.0953009,6.14345455 98.0392824,4.46472727 97.8152083,4.24072727 C97.5911343,4.01672727 96.8628935,3.95945455 92.9988889,3.90472727 C92.8308333,3.90472727 92.8868519,2.89672727 93.0549074,2.89672727 C95.5184491,2.95272727 99.1036343,3.00872727 101.175046,3.00872727" id="Fill-1" fill="#FFFFFF"></path>
                    <path d="M130.502269,8.49609091 C128.766968,8.49609091 127.422523,6.87209091 127.422523,5.30409091 C127.422523,4.35209091 127.758634,3.62536364 128.317546,3.06409091 C128.935023,2.39209091 129.775301,2.00009091 130.950417,2.00009091 C132.574954,2.00009091 133.975417,3.34409091 133.975417,4.96809091 C133.975417,6.81609091 132.182824,8.49609091 130.502269,8.49609091 M123.725301,36.9937273 C123.557245,36.9937273 123.501227,36.043 123.725301,36.043 C126.862338,35.9857273 127.701343,35.9857273 127.92669,35.763 C128.150764,35.5377273 128.205509,34.923 128.262801,33.4097273 C128.317546,31.507 128.317546,30.219 128.317546,28.483 C128.317546,26.355 128.205509,20.8695455 128.094745,18.1255455 C128.094745,17.1175455 127.982708,16.5588182 127.758634,16.3335455 C127.533287,16.1095455 127.086412,16.1095455 123.557245,16.0535455 C123.390463,16.0535455 123.390463,15.1015455 123.557245,15.1015455 C126.470208,15.0455455 131.454583,14.9348182 132.630972,14.9348182 C133.023102,14.9348182 133.189884,15.0455455 133.189884,15.4375455 C133.135139,18.5735455 133.189884,25.0682727 133.189884,28.9882727 C133.189884,34.2497273 133.415231,35.5377273 133.639306,35.763 C133.86338,35.9857273 134.534329,36.043 137.559329,36.043 C137.839421,36.043 137.839421,37.051 137.559329,37.051 C136.440231,37.051 124.565579,36.9937273 123.725301,36.9937273" id="Fill-3" fill="#FFFFFF"></path>
                    <g id="Group-7" transform="translate(136.226852, 0.354073)">
                        <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <g id="Clip-6"></g>
                        <path d="M10.7137963,20.0676 C10.0415741,21.4676 9.8175,22.6423273 9.8175,25.1063273 C9.8175,31.0970545 9.9868287,32.6637818 10.3776852,33.3930545 C10.8818519,34.4557818 13.401412,36.0237818 15.4753704,36.0237818 C17.4347454,36.0237818 18.8912269,35.0717818 19.9555787,33.0010545 C20.7945833,31.3210545 21.29875,28.8570545 21.29875,25.2743273 C21.29875,21.5236 20.7945833,18.9476 20.0676157,17.4928727 C19.339375,16.0356 18.3870602,15.2516 16.5944676,15.2516 C14.0188889,15.2516 11.8901852,17.7716 10.7137963,20.0676 M8.9212037,34.2890545 C8.64238426,34.2890545 7.80210648,35.0157818 5.50534722,37.3677818 C5.28127315,37.5930545 4.66506944,37.4797818 4.66506944,37.1437818 C4.77710648,34.2890545 4.88914352,28.5223273 4.88914352,21.3556 C4.88914352,17.1556 4.77710648,11.6128727 4.66506944,6.01414545 C4.61032407,3.32614545 4.55303241,2.48614545 4.38497685,2.31814545 C4.2169213,2.15141818 3.82479167,2.15141818 0.745046296,2.15141818 C0.520972222,2.15141818 0.520972222,1.19814545 0.745046296,1.19814545 C3.71275463,1.14341818 8.02490741,0.975418182 9.59469907,0.918145455 C9.9868287,0.918145455 10.0415741,1.14341818 10.0415741,1.47941818 C10.0415741,2.71014545 9.87351852,18.0516 9.87351852,19.5076 L9.92953704,19.5636 C11.4980556,16.4276 13.9628704,13.7396 17.3787269,13.7396 C20.0115972,13.7396 22.3070833,15.0276 24.0996759,16.8183273 C26.0043056,18.7796 27.1246759,21.3556 27.1246759,24.6023273 C27.1246759,28.4103273 25.3320833,31.6010545 23.0913426,33.8397818 C20.963912,35.9677818 18.5551157,37.1997818 15.8102083,37.1997818 C11.8901852,37.1997818 9.42537037,34.2890545 8.9212037,34.2890545" id="Fill-5" fill="#FFFFFF" ></path>
                    </g>
                    <path d="M173.61081,17.6774182 C172.714514,19.4681455 172.379676,21.7094182 172.267639,24.4521455 L183.636852,24.3961455 C183.300741,17.9014182 181.620185,15.2134182 177.868218,15.2134182 C175.739514,15.2134182 174.227014,16.3894182 173.61081,17.6774182 M188.677245,30.7788727 C186.884653,35.6508727 182.796574,37.7776 179.044606,37.7776 C175.347384,37.7776 171.987546,36.2656 169.690787,33.9708727 C167.67412,31.9548727 166.441713,29.4348727 166.441713,25.8521455 C166.441713,22.8854182 167.842176,19.9174182 169.746806,17.9586909 C172.043565,15.6626909 174.843218,14.0946909 178.260347,14.0946909 C181.620185,14.0946909 184.309074,15.5506909 186.101667,17.3414182 C187.668912,18.9094182 189.013356,21.7094182 189.069375,25.0681455 C189.069375,25.3468727 188.957338,25.4601455 188.733264,25.5161455 C179.659537,25.4601455 175.179329,25.5721455 172.267639,25.6841455 C172.267639,29.2668727 172.771806,31.5068727 173.500046,33.0188727 C174.619144,35.2028727 176.355718,36.3776 179.603519,36.3776 C183.188704,36.3776 185.988356,34.3616 187.614167,30.3308727 C187.836968,30.1068727 188.733264,30.4988727 188.677245,30.7788727" id="Fill-8" fill="#FFFFFF"></path>
                    <path d="M194.239248,35.7628727 C194.407303,35.5936 194.51934,33.6896 194.574086,32.2908727 C194.574086,30.2748727 194.574086,24.9561455 194.51934,22.4921455 C194.51934,18.2934182 194.239248,16.6134182 194.015174,16.3894182 C193.789826,16.1666909 193.342951,16.1666909 190.261933,16.1106909 C190.037859,16.1106909 190.037859,15.1026909 190.317951,15.1026909 C192.558692,15.1026909 197.43103,14.9346909 198.663438,14.9346909 C199.447697,14.9346909 199.559734,15.0466909 199.559734,15.7734182 C199.503715,17.1734182 199.447697,20.0294182 199.447697,22.1014182 L199.559734,22.1014182 C201.351053,17.9014182 203.36772,14.4294182 206.616794,14.4294182 C209.528484,14.4294182 211.377095,16.2214182 211.377095,18.4054182 C211.377095,20.7014182 209.696539,22.0454182 208.128021,22.0454182 C206.503484,22.0454182 205.328368,21.0374182 205.328368,19.4681455 C205.328368,17.5654182 206.839595,16.8386909 206.839595,16.3894182 C206.839595,16.1666909 206.560775,15.9426909 205.888553,15.9426909 C204.151979,15.9426909 202.359387,18.1814182 201.016215,20.9814182 C199.951863,23.1094182 199.559734,24.6201455 199.559734,26.4681455 L199.559734,31.5628727 C199.615752,34.1388727 199.727789,35.4816 199.951863,35.7056 C200.0639,35.8748727 200.958924,35.8748727 204.264016,35.9856 C204.544109,35.9856 204.544109,37.0508727 204.320035,37.0508727 L189.98184,37.0508727 C189.813785,37.0508727 189.757766,36.0428727 189.98184,36.0428727 C193.623044,35.9856 194.069919,35.9308727 194.239248,35.7628727" id="Fill-10" fill="#FFFFFF"></path>
                    <path d="M218.53537,31.619 C218.53537,34.3617273 219.431667,35.875 221.448333,35.875 C223.687801,35.875 226.320671,33.6897273 226.824838,32.571 C227.048912,32.179 227.104931,31.843 227.159676,30.107 C227.216968,28.483 227.216968,27.8682727 227.272986,25.2922727 C219.935833,25.9082727 218.53537,27.0842727 218.53537,31.619 M218.647407,17.0615455 C218.647407,17.6775455 220.83213,17.8468182 220.83213,20.0295455 C220.83213,21.5975455 219.599722,22.7722727 217.919167,22.7722727 C216.29463,22.7722727 215.007477,21.5975455 215.007477,19.9175455 C215.007477,18.7975455 215.455625,17.8468182 216.351921,17.0068182 C217.80713,15.6055455 220.103889,14.3175455 223.408981,14.3175455 C226.824838,14.3175455 229.00956,15.3255455 230.464769,16.8388182 C231.92125,18.2935455 232.425417,19.9735455 232.425417,22.6042727 C232.425417,25.4042727 232.257361,30.275 232.257361,34.083 C232.257361,35.4257273 232.649491,35.931 233.600532,35.931 C234.83294,35.931 235.954583,34.6977273 236.513495,31.899 C236.625532,31.731 237.353773,31.843 237.353773,32.067 C236.849606,35.2017273 235.113032,37.5537273 232.145324,37.5537273 C229.344398,37.5537273 227.553079,36.043 226.992894,33.803 C225.144282,35.931 222.791505,37.4417273 219.991852,37.4977273 C216.686759,37.5537273 213.270903,35.2577273 213.270903,31.899 C213.270903,30.499 213.775069,29.211 214.951458,28.0922727 C216.798796,26.187 220.103889,24.7882727 227.272986,24.2842727 C227.329005,23.5562727 227.272986,21.9335455 227.272986,20.3642727 C227.272986,18.2375455 226.992894,17.1722727 226.264653,16.4455455 C225.648449,15.8308182 224.47206,15.3815455 222.847523,15.3815455 C220.327963,15.3815455 218.647407,16.6695455 218.647407,17.0615455" id="Fill-12" fill="#FFFFFF"></path>
                    <path d="M247.34213,1.44021818 C247.790278,1.44021818 247.901042,1.66421818 247.901042,2.11221818 C247.846296,7.93621818 247.790278,12.7509455 247.790278,18.7976727 C247.790278,24.3964 247.734259,29.0431273 247.676968,33.5218545 C247.676968,34.9231273 247.846296,35.4818545 248.126389,35.7631273 C248.34919,35.9311273 248.573264,36.0418545 251.933102,36.0978545 C252.102431,36.0978545 252.158449,37.1045818 251.933102,37.1045818 C247.004745,36.9391273 243.867708,36.9391273 238.660532,36.9391273 C238.491204,36.9391273 238.548495,35.9311273 238.716551,35.9311273 C241.741551,35.9311273 242.188426,35.8751273 242.356481,35.7058545 C242.524537,35.5378545 242.524537,35.2578545 242.524537,34.3618545 C242.580556,31.6751273 242.692593,26.4684 242.692593,22.9404 C242.692593,15.2696727 242.692593,10.2309455 242.580556,4.18421818 C242.580556,3.17621818 242.580556,2.89749091 242.4125,2.72949091 C242.245718,2.56021818 241.908333,2.56021818 238.660532,2.39221818 C238.436458,2.33621818 238.436458,1.44021818 238.716551,1.44021818 C241.908333,1.49749091 243.981019,1.49749091 247.34213,1.44021818" id="Fill-14" fill="#FFFFFF"></path>
                    <path d="M282.458229,8.83170909 C279.938669,14.7664364 277.417836,20.4211636 275.458461,24.9558909 C278.874317,25.1251636 284.979063,25.2358909 288.3389,25.2358909 C286.771655,20.4758909 284.194803,13.3664364 282.570266,8.83170909 L282.458229,8.83170909 Z M268.905567,35.0346182 C269.520498,34.4186182 270.248738,33.2986182 271.145035,31.3958909 C275.793299,21.3731636 280.442836,11.0144364 283.858692,2.11298182 C283.970729,2.00098182 284.250822,1.88898182 284.924317,1.88898182 C285.875359,1.88898182 286.042141,2.00098182 286.099433,2.22498182 C287.611933,6.75970909 289.964711,13.7584364 296.349549,31.2266182 C297.30059,33.9146182 297.748738,34.8093455 298.420961,35.4813455 C298.925127,35.9853455 299.429294,36.0426182 302.677095,36.2106182 C302.846424,36.2106182 302.846424,37.1626182 302.677095,37.1626182 C299.541331,37.1053455 297.244572,36.9933455 295.003831,36.9933455 C292.428252,36.9933455 290.917025,36.9386182 287.611933,37.0506182 C287.499896,37.0506182 287.443877,36.0986182 287.611933,36.0986182 C290.300822,35.9306182 290.971771,35.8173455 291.251863,35.4813455 C291.531956,35.2586182 291.587975,34.8093455 291.251863,33.5786182 C290.747697,32.0666182 289.683345,29.0438909 288.732303,26.4118909 C287.779988,26.3558909 284.754988,26.3011636 280.330799,26.3011636 C278.202095,26.3011636 276.801632,26.3011636 275.234387,26.3558909 C275.009039,26.3558909 274.786238,26.3558909 274.674201,26.6346182 C273.777905,28.5958909 273.273738,29.8838909 272.433461,32.0666182 C272.09735,33.0186182 271.874549,33.9146182 271.874549,34.4746182 C271.874549,35.7053455 272.377442,35.8746182 276.12941,36.0986182 C276.24272,36.0986182 276.186701,37.0506182 276.074664,37.0506182 C273.049664,36.9386182 268.177326,36.9386182 264.64816,37.0506182 C264.536123,37.0506182 264.536123,36.1546182 264.64816,36.1546182 C267.561123,35.9853455 268.120035,35.8173455 268.905567,35.0346182 Z" id="Fill-16" fill="#FFFFFF"></path>
                    <path d="M308.744155,35.7628727 C308.912211,35.5936 309.024248,33.6896 309.078993,32.2908727 C309.078993,30.2748727 309.078993,24.9561455 309.024248,22.4921455 C309.024248,18.2934182 308.744155,16.6134182 308.520081,16.3894182 C308.294734,16.1666909 307.847859,16.1666909 304.76684,16.1106909 C304.542766,16.1106909 304.542766,15.1026909 304.822859,15.1026909 C307.0636,15.1026909 311.935938,14.9346909 313.168345,14.9346909 C313.952604,14.9346909 314.064641,15.0466909 314.064641,15.7734182 C314.008623,17.1734182 313.952604,20.0294182 313.952604,22.1014182 L314.064641,22.1014182 C315.855961,17.9014182 317.872627,14.4294182 321.121701,14.4294182 C324.033391,14.4294182 325.882002,16.2214182 325.882002,18.4054182 C325.882002,20.7014182 324.201447,22.0454182 322.634201,22.0454182 C321.008391,22.0454182 319.833275,21.0374182 319.833275,19.4681455 C319.833275,17.5654182 321.344502,16.8386909 321.344502,16.3894182 C321.344502,16.1666909 321.065683,15.9426909 320.393461,15.9426909 C318.656887,15.9426909 316.864294,18.1814182 315.521123,20.9814182 C314.456771,23.1094182 314.064641,24.6201455 314.064641,26.4681455 L314.064641,31.5628727 C314.12066,34.1388727 314.232697,35.4816 314.456771,35.7056 C314.568808,35.8748727 315.463831,35.8748727 318.768924,35.9856 C319.049016,35.9856 319.049016,37.0508727 318.824942,37.0508727 L304.486748,37.0508727 C304.318692,37.0508727 304.262674,36.0428727 304.486748,36.0428727 C308.127951,35.9856 308.5761,35.9308727 308.744155,35.7628727" id="Fill-18" fill="#FFFFFF"></path>
                    <path d="M338.445046,37.4419818 C336.092269,37.4419818 334.412986,36.7139818 333.180579,35.4819818 C332.172245,34.4752545 331.668079,33.2419818 331.668079,30.7792545 C331.668079,27.1392545 331.724097,20.7565273 331.836134,16.3338 C331.500023,16.2778 328.475023,16.2778 327.860093,16.2778 C327.58,16.2778 327.636019,15.2138 327.804074,15.2138 C331.165185,15.0458 332.172245,14.7670727 332.956505,13.9818 C334.075602,12.9178 335.588102,9.78434545 336.148287,7.03907273 C336.204306,6.76034545 337.044583,6.76034545 337.100602,7.03907273 C336.933819,8.94307273 336.933819,13.2550727 336.876528,15.0458 C339.117269,15.1018 342.813218,15.1018 343.710787,15.1018 C344.045625,15.1018 343.933588,16.2778 343.653495,16.2778 C339.229306,16.2778 337.492731,16.3338 336.876528,16.3898 C336.764491,18.4605273 336.652454,24.6765273 336.652454,29.2112545 C336.652454,33.0739818 336.764491,33.6899818 337.100602,34.4179818 C337.492731,35.2019818 338.445046,35.8179818 339.677454,35.8179818 C341.468773,35.8179818 343.037292,33.9699818 343.989606,30.2752545 C344.045625,30.0512545 344.99794,30.2192545 344.941921,30.4992545 C343.989606,35.0899818 341.69412,37.4419818 338.445046,37.4419818" id="Fill-20" fill="#FFFFFF"></path>
                    <path d="M364.650891,34.8667455 C362.914317,36.5454727 360.170683,37.3854727 357.705868,37.3854727 C353.224387,37.3854727 351.096956,35.8174727 350.480752,35.8174727 C350.20066,35.8174727 349.80853,36.4334727 349.304363,37.7214727 C349.192326,37.9467455 348.40934,37.8894727 348.40934,37.6654727 C348.29603,35.0907455 348.073229,31.8987455 347.847882,29.4347455 C347.847882,29.2120182 348.744178,29.1000182 348.800197,29.3240182 C349.472419,31.3947455 350.312697,33.2427455 351.377049,34.3067455 C352.72022,35.6507455 355.074271,36.3227455 357.537812,36.3227455 C359.610498,36.3227455 361.009687,35.8747455 361.849965,35.0907455 C362.354132,34.5294727 362.80228,33.5787455 362.80228,32.3480182 C362.80228,30.4427455 361.401817,29.4907455 356.473461,28.2040182 C352.72022,27.1960182 350.984919,26.4680182 349.864549,25.3480182 C348.968252,24.4520182 348.464086,23.2212909 348.464086,21.7640182 C348.464086,17.5652909 352.273345,14.4852909 356.697535,14.4852909 C360.114664,14.4852909 362.522187,16.2785636 363.082373,16.2785636 C363.362465,16.2785636 363.530521,15.8305636 364.31478,13.9265636 C364.370799,13.7585636 365.155058,13.8145636 365.211076,13.9825636 C365.043021,16.5012909 365.043021,18.9092909 365.099039,21.4840182 C365.099039,21.8772909 364.257488,21.8772909 364.090706,21.5972909 C363.362465,19.7492909 362.635498,18.4052909 361.793947,17.6212909 C360.618831,16.3892909 359.050312,15.5505636 356.529479,15.5505636 C354.904942,15.5505636 353.672535,16.0545636 352.889549,16.8385636 C352.32809,17.3972909 351.937234,18.2385636 351.937234,19.1892909 C351.937234,21.3172909 353.561771,22.1572909 358.434109,23.3880182 C362.298113,24.3960182 364.034687,25.1812909 365.155058,26.3560182 C366.162118,27.3627455 366.666285,28.5960182 366.666285,30.1067455 C366.666285,32.1227455 365.769988,33.6894727 364.650891,34.8667455" id="Fill-22" fill="#FFFFFF"></path>
                    <path d="M96.7688079,73.7296 C95.5122106,76.2865091 95.1519097,77.9461455 95.1519097,79.1119636 C95.1519097,80.7283273 96.2302662,81.6688727 97.6663773,81.6688727 C100.000058,81.6688727 103.590336,78.3954182 105.340914,74.8508727 C107.09022,71.3508727 108.122743,68.4350545 108.122743,67.6726909 C108.122743,66.5959636 107.0011,65.2048727 105.340914,65.2048727 C101.750637,65.2048727 99.0579282,69.1528727 96.7688079,73.7296 M108.707118,66.5501455 C109.199826,65.5637818 109.784201,64.3966909 109.962442,64.3966909 C110.23235,64.3966909 112.117882,64.7110545 112.207002,64.8014182 C112.296123,64.8917818 112.43235,65.5637818 112.387789,65.6986909 C111.847975,66.9103273 109.244387,73.1912364 107.763715,77.0476 C107.360127,78.0365091 107.09022,79.4276 107.09022,80.0996 C107.09022,80.8619636 107.539641,81.4003273 108.213137,81.4003273 C109.29022,81.4003273 110.591377,80.7716 113.239525,77.4090545 C113.328646,77.3174182 113.913021,77.7221455 113.868461,77.8112364 C111.355266,81.1776 109.649248,82.6119636 107.493808,82.6119636 C105.968576,82.6119636 104.308391,81.5352364 104.308391,79.7865091 C104.308391,79.0228727 104.443345,78.2617818 104.621586,77.4536 C102.557813,80.2332364 99.6410301,82.6577818 97.3964699,82.6577818 C95.1073495,82.6577818 92.5050347,80.2332364 92.5050347,76.8261455 C92.5050347,74.4919636 93.4026042,72.0686909 96.1398727,69.2877818 C99.1024884,66.3719636 102.648206,64.3966909 105.340914,64.3966909 C106.910706,64.3966909 108.168576,65.2939636 108.707118,66.5501455" id="Fill-24" fill="#FF5A0E"></path>
                    <path d="M124.174468,64.9808727 C124.308148,64.9808727 124.398542,65.0699636 124.353981,65.2048727 C124.039514,66.1466909 122.469722,70.4981455 122.020301,71.6206909 C121.974468,71.7097818 122.109421,71.8892364 122.199815,71.7988727 C126.058727,66.7296 128.168333,64.3521455 130.592407,64.3521455 C131.893565,64.3521455 132.835694,64.8014182 133.599583,65.5637818 C134.360926,66.3274182 134.675394,67.1343273 134.675394,68.1206909 C134.675394,69.6912364 134.136852,70.7234182 132.476667,74.1776 C130.861042,77.5872364 130.3225,78.8892364 130.3225,79.8310545 C130.3225,80.6392364 130.905602,81.2221455 131.624931,81.2221455 C132.970648,81.2221455 134.586273,79.9201455 136.605486,77.6317818 C136.694606,77.5426909 137.324815,78.0365091 137.233148,78.1256 C135.752477,79.9201455 132.926088,82.5674182 130.771921,82.5674182 C129.783958,82.5674182 129.110463,82.2530545 128.438241,81.5797818 C127.809306,80.9523273 127.494838,80.1886909 127.494838,79.1577818 C127.494838,78.2617818 127.944259,76.7345091 129.604444,73.3248727 C131.310463,69.8261455 131.758611,68.7048727 131.758611,67.6268727 C131.758611,66.5501455 131.041829,65.7890545 130.009306,65.7890545 C128.886389,65.7890545 128.123773,66.2370545 126.373194,67.9857818 C123.321458,71.0377818 120.67331,75.0303273 119.910694,76.8706909 C119.238472,78.5748727 118.33963,80.5476 117.711968,82.1194182 C117.667407,82.2976 114.884306,82.1639636 114.614398,82.1639636 C114.525278,82.1639636 114.525278,82.0748727 114.569838,81.9386909 C115.154213,80.6392364 118.295069,73.5488727 118.968565,71.9337818 C120.62875,67.7630545 120.943218,66.1021455 120.852824,66.0130545 C120.763704,65.9226909 116.724005,65.9672364 116.140903,65.9226909 C116.005949,65.9226909 116.096343,65.1145091 116.231296,65.1145091 C118.789051,65.1145091 123.950394,64.9808727 124.174468,64.9808727" id="Fill-26" fill="#FF5A0E"></path>
                    <path d="M143.522118,72.5178364 C142.535428,74.4472909 141.861933,76.5562 141.861933,78.4843818 C141.861933,80.6391091 142.670382,81.9385636 144.689595,81.9385636 C146.125706,81.9385636 147.606377,81.3556545 149.58103,79.3816545 C151.196655,77.7665636 152.138785,76.4658364 153.306262,73.5945636 C154.338785,71.1267455 155.236354,69.0623818 155.325475,68.6156545 C154.966447,66.6403818 153.665289,65.1156545 151.511123,65.1156545 C148.279873,65.1156545 145.40765,68.7047455 143.522118,72.5178364 M155.864016,67.3136545 C155.864016,67.3582 155.95441,67.4027455 155.99897,67.3136545 C157.794109,62.9163818 158.960313,60.0451091 160.621771,55.7840182 C160.845845,55.1552909 160.755451,54.8854727 160.666331,54.7963818 C160.531377,54.6627455 157.614595,54.5723818 155.684502,54.5723818 C155.549549,54.5723818 155.549549,53.7654727 155.729063,53.7654727 C158.197697,53.7654727 161.608461,53.8545636 164.571076,53.8100182 C164.704757,53.8100182 164.840984,53.9436545 164.79515,54.0785636 C160.979525,63.0525636 159.006146,67.8074727 154.921887,77.1836545 C154.383345,78.4398364 154.203831,79.2022 154.203831,80.0103818 C154.203831,80.7282 154.607419,81.3556545 155.325475,81.3556545 C156.402558,81.3556545 157.435081,80.7714727 158.960313,79.2467455 C159.633808,78.5747455 160.038669,78.1700182 160.621771,77.4089273 C160.710891,77.3172909 161.293993,77.7665636 161.204873,77.8556545 C158.826632,80.8631091 156.717025,82.6131091 154.876053,82.6131091 C152.902674,82.6131091 151.376169,81.2665636 151.376169,79.6502 C151.376169,79.1576545 151.376169,78.9782 151.466563,78.3952909 C149.177442,81.2220182 146.932882,82.7912909 144.465521,82.7912909 C142.939016,82.7912909 141.369225,81.9831091 140.381262,80.9967455 C139.483692,80.0994727 138.721076,78.7083818 138.721076,76.8705636 C138.721076,73.9980182 140.201748,71.0376545 142.535428,68.7047455 C144.734155,66.5054727 148.100359,64.3074727 151.779757,64.3074727 C153.75441,64.3074727 155.280914,65.6998364 155.864016,67.3136545" id="Fill-28" fill="#FF5A0E"></path>
                    <path d="M200.331389,47.6673273 C200.387407,47.4993273 201.17294,47.6113273 201.17294,47.7806 C200.892847,51.3124182 200.78081,54.4522364 201.060903,58.8266 C201.060903,58.9933273 200.27537,59.1066 200.163333,58.8826 C198.648287,54.9575091 197.358588,52.7149636 195.955579,51.3124182 C194.441806,49.7978727 192.478611,48.9018727 189.561829,48.9018727 C186.534282,48.9018727 184.73787,49.7431455 183.448171,51.0324182 C182.326528,52.1536909 181.654306,53.7789636 181.654306,55.5175091 C181.654306,59.2186 184.121667,60.3958727 190.51669,62.0784182 C196.348981,63.6489636 199.153727,65.0489636 200.835556,66.7327818 C202.294583,68.1900545 203.024097,69.8726 203.024097,72.5644182 C203.024097,78.5067818 197.751991,82.8811455 191.132894,82.8811455 C185.075255,82.8811455 182.046435,79.9093273 180.868773,79.9093273 C180.139259,79.9093273 179.24169,80.9186 178.456157,82.4318727 C178.34412,82.6571455 177.614606,82.5451455 177.614606,82.3211455 C177.726644,78.3960545 177.726644,75.2562364 177.222477,70.0966 C177.222477,69.8726 177.950718,69.7593273 178.064028,69.9846 C180.251296,74.9749636 181.597014,77.2747818 183.168079,78.8440545 C184.905926,80.5826 187.710671,81.7026 191.020856,81.7026 C193.825602,81.7026 195.900833,80.9758727 197.134514,79.7413273 C198.313449,78.5627818 198.872361,77.2175091 198.872361,75.2562364 C198.872361,71.6658727 196.629074,69.9273273 190.01125,68.2460545 C184.177685,66.7327818 181.484977,65.4995091 179.857894,63.8156909 C178.400139,62.3584182 177.726644,60.7331455 177.726644,58.0960545 C177.726644,52.6589636 182.663912,47.8366 189.673866,47.8366 C195.507431,47.8366 198.03081,50.3018727 198.53625,50.3018727 C198.985671,50.3018727 199.715185,49.0138727 200.331389,47.6673273" id="Fill-30" fill="#FFFFFF"></path>
                    <path d="M210.204525,79.3486909 C208.353368,77.4994182 206.951632,74.9743273 206.951632,71.4985091 C206.951632,68.5266909 208.185313,65.6108727 210.4286,63.3110545 C212.617141,61.1257818 215.476632,59.4432364 219.290984,59.4432364 C224.340289,59.4432364 228.265405,62.4697818 228.265405,65.5548727 C228.265405,67.7414182 226.751632,68.9759636 225.124549,68.9759636 C223.497465,68.9759636 222.263785,67.7414182 222.263785,66.3388727 C222.263785,65.4988727 222.487859,64.8816 222.93728,64.3763273 C223.83485,63.4790545 225.06853,63.5923273 225.293877,63.3670545 C225.742025,62.9203273 223.497465,60.6205091 219.571076,60.6205091 C216.598275,60.6205091 214.972465,62.0790545 214.130914,63.7603273 C213.177326,65.6668727 212.841215,67.7974182 212.841215,70.8825091 C212.841215,74.6956 213.121308,76.8261455 213.962859,78.3954182 C214.860428,80.1899636 216.318183,81.5352364 219.403021,81.5352364 C222.655914,81.5352364 225.798044,79.2926909 227.255799,74.8636 C227.367836,74.4143273 228.434734,74.9196 228.321424,75.3103273 C226.751632,79.9646909 223.273391,82.8805091 218.617488,82.8805091 C215.365868,82.8805091 212.391794,81.5352364 210.204525,79.3486909" id="Fill-32" fill="#FFFFFF"></path>
                    <path d="M236.904606,53.6679818 C235.165486,53.6679818 233.819769,52.0414364 233.819769,50.4708909 C233.819769,49.5176182 234.15588,48.7896182 234.717338,48.2283455 C235.333542,47.5550727 236.176366,47.1630727 237.354028,47.1630727 C238.979838,47.1630727 240.382847,48.5083455 240.382847,50.1348909 C240.382847,51.9854364 238.587708,53.6679818 236.904606,53.6679818 M230.117454,82.2088909 C229.949398,82.2088909 229.89338,81.2556182 230.117454,81.2556182 C233.25831,81.1983455 234.099861,81.1983455 234.323935,80.9756182 C234.548009,80.7503455 234.604028,80.1330727 234.661319,78.6185273 C234.717338,76.7119818 234.717338,75.4239818 234.717338,73.6867091 C234.717338,71.5548909 234.604028,66.0592545 234.493264,63.3114364 C234.493264,62.3021636 234.381227,61.7421636 234.15588,61.5181636 C233.931806,61.2928909 233.483657,61.2928909 229.949398,61.2368909 C229.781343,61.2368909 229.781343,60.2836182 229.949398,60.2836182 C232.866181,60.2276182 237.858194,60.1156182 239.035856,60.1156182 C239.427986,60.1156182 239.596042,60.2276182 239.596042,60.6208909 C239.541296,63.7607091 239.596042,70.2643455 239.596042,74.1907091 C239.596042,79.4610727 239.821389,80.7503455 240.045463,80.9756182 C240.27081,81.1983455 240.943032,81.2556182 243.973125,81.2556182 C244.251944,81.2556182 244.251944,82.2648909 243.973125,82.2648909 C242.850208,82.2648909 230.959005,82.2088909 230.117454,82.2088909" id="Fill-34" fill="#FFFFFF"></path>
                    <path d="M251.750914,62.8629273 C250.853345,64.6574727 250.517234,66.9012909 250.405197,69.6478364 L261.792234,69.5918364 C261.45485,63.0882 259.773021,60.3963818 256.014688,60.3963818 C253.883438,60.3963818 252.368391,61.5723818 251.750914,62.8629273 M266.840266,75.9847455 C265.045127,80.8631091 260.950683,82.9923818 257.19235,82.9923818 C253.490035,82.9923818 250.125104,81.4803818 247.825799,79.1805636 C245.806586,77.1620182 244.571632,74.6382 244.571632,71.0503818 C244.571632,68.0785636 245.973368,65.1067455 247.880544,63.1442 C250.181123,60.8456545 252.985868,59.2751091 256.406817,59.2751091 C259.773021,59.2751091 262.465729,60.7323818 264.259595,62.5269273 C265.83066,64.0974727 267.176377,66.9012909 267.232396,70.2638364 C267.232396,70.5451091 267.120359,70.6571091 266.896285,70.7143818 C257.809826,70.6571091 253.321979,70.7691091 250.405197,70.8823818 C250.405197,74.4702 250.910637,76.7127455 251.64015,78.2260182 C252.760521,80.4138364 254.499641,81.5911091 257.752535,81.5911091 C261.342813,81.5911091 264.147558,79.5738364 265.774641,75.5354727 C265.998715,75.3102 266.896285,75.7047455 266.840266,75.9847455" id="Fill-36" fill="#FFFFFF"></path>
                    <path d="M268.590336,81.3112364 C271.505845,81.2552364 272.067303,81.2552364 272.29265,81.0872364 C272.515451,80.8619636 272.627488,80.0206909 272.627488,76.6568727 L272.627488,65.5548727 C272.627488,63.1443273 272.460706,61.7977818 272.17934,61.5725091 C272.011285,61.3497818 271.4511,61.2925091 268.534317,61.2377818 C268.364988,61.2377818 268.364988,60.2845091 268.590336,60.2845091 C271.113715,60.2845091 275.20816,60.2285091 277.507465,60.2285091 C277.84485,60.2285091 277.900868,60.3952364 277.900868,60.7885091 C277.84485,62.1910545 277.732813,64.9388727 277.676794,66.3388727 L277.84485,66.3961455 C279.808044,62.5270545 282.22066,59.3299636 286.201794,59.3299636 C290.577604,59.3299636 293.100984,62.1350545 293.100984,67.4614182 C293.100984,69.5919636 293.044965,72.2837818 293.044965,75.0303273 C293.044965,79.7979636 293.214294,80.8072364 293.494387,81.0872364 C293.662442,81.3112364 294.166609,81.3112364 296.859317,81.4232364 C297.028646,81.4232364 297.028646,82.3205091 296.804572,82.3205091 C292.316725,82.2085091 288.61441,82.2645091 285.137442,82.2645091 C284.856076,82.2645091 284.912095,81.3672364 285.08015,81.3672364 C286.763252,81.2552364 287.436748,81.1979636 287.660822,81.0299636 C287.884896,80.8072364 287.884896,80.0779636 287.884896,78.7326909 C287.884896,76.9368727 287.828877,67.5174182 287.828877,66.3388727 C287.828877,63.3670545 286.931308,61.6297818 284.632002,61.6297818 C281.883275,61.6297818 279.58397,64.6016 278.405035,67.0134182 C277.788831,68.1894182 277.620775,68.9199636 277.620775,70.8825091 C277.620775,72.5637818 277.676794,76.1516 277.732813,78.1714182 C277.788831,80.1326909 277.84485,80.8072364 278.012905,80.9752364 C278.182234,81.1432364 278.574363,81.2552364 281.379109,81.3672364 C281.547164,81.3672364 281.547164,82.3205091 281.267072,82.3205091 C277.676794,82.2085091 272.123322,82.2085091 268.645081,82.3205091 C268.364988,82.2645091 268.421007,81.3112364 268.590336,81.3112364" id="Fill-38" fill="#FFFFFF"></path>
                    <path d="M300.757824,79.3486909 C298.906667,77.4994182 297.504931,74.9743273 297.504931,71.4985091 C297.504931,68.5266909 298.739884,65.6108727 300.981898,63.3110545 C303.17044,61.1257818 306.031204,59.4432364 309.844282,59.4432364 C314.893588,59.4432364 318.819977,62.4697818 318.819977,65.5548727 C318.819977,67.7414182 317.304931,68.9759636 315.67912,68.9759636 C314.052037,68.9759636 312.817083,67.7414182 312.817083,66.3388727 C312.817083,65.4988727 313.042431,64.8816 313.490579,64.3763273 C314.389421,63.4790545 315.621829,63.5923273 315.847176,63.3670545 C316.296597,62.9203273 314.052037,60.6205091 310.124375,60.6205091 C307.151574,60.6205091 305.527037,62.0790545 304.684213,63.7603273 C303.730625,65.6668727 303.394514,67.7974182 303.394514,70.8825091 C303.394514,74.6956 303.674606,76.8261455 304.516157,78.3954182 C305.413727,80.1899636 306.872755,81.5352364 309.957593,81.5352364 C313.210486,81.5352364 316.351343,79.2926909 317.81037,74.8636 C317.921134,74.4143273 318.988032,74.9196 318.875995,75.3103273 C317.304931,79.9646909 313.827963,82.8805091 309.17206,82.8805091 C305.919167,82.8805091 302.945093,81.5352364 300.757824,79.3486909" id="Fill-40" fill="#FFFFFF"></path>
                    <path d="M328.910694,62.8629273 C328.013125,64.6574727 327.677014,66.9012909 327.564977,69.6478364 L338.952014,69.5918364 C338.61463,63.0882 336.931528,60.3963818 333.174468,60.3963818 C331.041944,60.3963818 329.526898,61.5723818 328.910694,62.8629273 M344.000046,75.9847455 C342.203634,80.8631091 338.110463,82.9923818 334.35213,82.9923818 C330.649815,82.9923818 327.284884,81.4803818 324.985579,79.1805636 C322.965093,77.1620182 321.730139,74.6382 321.730139,71.0503818 C321.730139,68.0785636 323.133148,65.1067455 325.040324,63.1442 C327.340903,60.8456545 330.144375,59.2751091 333.566597,59.2751091 C336.931528,59.2751091 339.624236,60.7323818 341.419375,62.5269273 C342.989167,64.0974727 344.336157,66.9012909 344.392176,70.2638364 C344.392176,70.5451091 344.280139,70.6571091 344.056065,70.7143818 C334.968333,70.6571091 330.481759,70.7691091 327.564977,70.8823818 C327.564977,74.4702 328.069144,76.7127455 328.799931,78.2260182 C329.920301,80.4138364 331.659421,81.5911091 334.912315,81.5911091 C338.502593,81.5911091 341.307338,79.5738364 342.934421,75.5354727 C343.158495,75.3102 344.056065,75.7047455 344.000046,75.9847455" id="Fill-42" fill="#FFFFFF"></path>
                    <path d="M364.648345,80.0783455 C362.909225,81.7596182 360.160498,82.5996182 357.691863,82.5996182 C353.205289,82.5996182 351.074039,81.0303455 350.456563,81.0303455 C350.17647,81.0303455 349.78434,81.6476182 349.2789,82.9368909 C349.166863,83.1621636 348.381331,83.1048909 348.381331,82.8808909 C348.269294,80.3023455 348.043947,77.1052545 347.819873,74.6387091 C347.819873,74.4147091 348.717442,74.3027091 348.774734,74.5267091 C349.446956,76.6025273 350.288507,78.4518 351.354132,79.5170727 C352.69985,80.8623455 355.056447,81.5356182 357.523808,81.5356182 C359.599039,81.5356182 361.002049,81.0876182 361.8436,80.3023455 C362.347766,79.7410727 362.795914,78.7878 362.795914,77.5545273 C362.795914,75.6479818 361.394178,74.6959818 356.458183,73.4054364 C352.69985,72.3961636 350.962002,71.6668909 349.839086,70.5456182 C348.942789,69.6483455 348.43735,68.4150727 348.43735,66.9552545 C348.43735,62.7514364 352.251701,59.6676182 356.682257,59.6676182 C360.104479,59.6676182 362.515822,61.4608909 363.07728,61.4608909 C363.357373,61.4608909 363.526701,61.0141636 364.310961,59.1063455 C364.366979,58.9396182 365.152512,58.9943455 365.20853,59.1610727 C365.040475,61.6861636 365.040475,64.0967091 365.096493,66.6765273 C365.096493,67.0685273 364.254942,67.0685273 364.086887,66.7885273 C363.357373,64.9379818 362.629132,63.5927091 361.786308,62.8074364 C360.608646,61.5728909 359.038854,60.7328909 356.514201,60.7328909 C354.887118,60.7328909 353.653437,61.2368909 352.869178,62.0221636 C352.30772,62.5834364 351.91559,63.4247091 351.91559,64.3767091 C351.91559,66.5085273 353.5414,67.3485273 358.421377,68.5830727 C362.291748,69.5923455 364.030868,70.3776182 365.152512,71.5548909 C366.162118,72.5641636 366.666285,73.7974364 366.666285,75.3107091 C366.666285,77.3305273 365.768715,78.8998 364.648345,80.0783455" id="Fill-44" fill="#FFFFFF"></path>
                    <mask id="mask-4" fill="white">
                        <use xlink:href="#path-3"></use>
                    </mask>
                    <g id="Clip-47"></g>
                    <polygon id="Fill-46" fill="#FF5A0E" points="0 83.0813455 81.8354167 83.0813455 81.8354167 1.27298182 0 1.27298182"></polygon>
                    <polygon id="Fill-48" fill="#FFFFFF" points="51.0933449 52.5481091 51.0933449 44.3962909 58.6087384 44.3962909 58.6087384 39.0202909 51.0933449 39.0202909 51.0933449 31.4042909 59.3433449 31.4042909 59.3433449 34.3595636 64.7860532 34.3595636 64.7860532 26.0728364 42.9948495 26.0728364 42.9948495 31.4042909 45.035706 31.4042909 45.035706 52.5481091 43.0024884 52.5481091 43.0024884 57.9228364 53.0590856 57.9228364 53.0590856 52.5481091"></polygon>
                    <path d="M40.1603125,45.8862727 L40.1603125,31.4026364 L42.1744329,31.4026364 L42.1744329,26.0737273 L32.094919,26.0737273 L32.094919,31.4026364 L34.0593866,31.4026364 L34.0593866,44.0853636 C34.0593866,49.4015455 33.4457292,51.9559091 29.6262847,51.9559091 C25.8081134,51.9559091 25.1931829,49.4015455 25.1931829,44.0853636 L25.1931829,31.4026364 L27.1436458,31.4026364 L27.1436458,26.0737273 L17.0488542,26.0737273 L17.0488542,31.4026364 L19.0489699,31.4026364 L19.0489699,45.8862727 C19.0489699,49.0477273 19.0489699,51.6402727 20.5410995,53.9693636 C22.2089236,56.6064545 25.2377431,58.2800909 29.6262847,58.2800909 C37.3950347,58.2800909 40.1603125,54.2340909 40.1603125,45.8862727" id="Fill-49" fill="#FFFFFF" ></path>
                </g>
            </g>
        </g>
    </g>


</symbol>



<symbol id="claslogo" class="icon-claslogo"  viewBox="0 0 907.2785 29.017353">
	<title>CLAS Logo Mobile Version</title>

           <path
     style="fill:#ffffff;stroke-width:1.33333337;fill-opacity:1"
     d="m 7.4269266,26.781291 c -10.1024202,-5.04673 -9.8409602,-20.2557207 0.43245,-25.1547607 6.0083304,-2.86518 14.9008804,-1.15031996 14.9008804,2.87352 0,2.20264 -0.7885,2.5551 -4.98364,2.22764 -7.58737,-0.59224 -10.3496904,1.4889904 -10.3496904,7.7978307 0,6.56489 3.9337404,9.13807 10.4807504,6.85578 3.12131,-1.0881 4.3646,-0.98921 5.55206,0.44159 2.1473,2.58734 0.66705,4.30727 -5.08099,5.90367 -6.23179,1.73075 -5.46203,1.79719 -10.9518204,-0.94527 z m 29.6834404,0.83423 c -7.46174,-2.13148 -10.67921,-12.79394 -6.3733,-21.1206507 3.93008,-7.59994 17.63413,-8.19162 22.68572,-0.97946 4.33114,6.1835607 1.1837,19.8396607 -4.98124,21.6125907 -5.76731,1.65858 -7.03995,1.71333 -11.33118,0.48752 z m 9.55465,-7.26073 c 4.4501,-4.4501 1.34172,-13.9047607 -4.57143,-13.9047607 -5.98855,0 -8.8524,8.7081507 -4.46001,13.5616807 2.70818,2.9925 6.24757,3.12696 9.03144,0.34308 z m 98.474083,7.83869 c -1.62496,-0.32101 -4.5392,-2.46699 -6.47608,-4.76884 -2.96032,-3.51815 -3.4172,-5.11135 -2.8666,-9.99625 1.17769,-10.4484307 8.79896,-15.2283307 19.63034,-12.3117407 4.1098,1.10666 5.35376,2.02404 4.77824,3.52382 -0.42794,1.11521 -0.77808,2.25031 -0.77808,2.5224504 0,0.27214 -2.93634,0.14703 -6.52521,-0.2780204 -6.01893,-0.71285 -6.70852,-0.49305 -8.88772,2.8328204 -4.20943,6.4244003 0.6902,14.0394003 7.87323,12.2365803 4.36884,-1.09651 4.66332,-3.50427 0.4286,-3.50427 -3.78926,0 -4.93498,-0.99516 -3.98771,-3.46369 0.48024,-1.25148 2.87449,-1.86965 7.24147,-1.86965 h 6.52401 v 6.033 c 0,5.03261 -0.49747,6.22046 -3,7.16347 -4.53545,1.70905 -10.65049,2.53304 -13.95449,1.88032 z m 70.66666,-0.0174 c -4.58568,-0.87884 -9.71217,-7.86105 -9.71217,-13.22786 0,-10.7158607 8.24264,-17.0517106 17.99586,-13.8328507 6.22116,2.05317 8.6708,5.92137 8.6708,13.6919807 0,5.04977 -0.70274,7.13334 -3.27273,9.70332 -1.8,1.8 -4.15092,3.27273 -5.22428,3.27273 -1.07335,0 -2.75063,0.21575 -3.72727,0.47945 -0.97665,0.2637 -3.10524,0.22465 -4.73021,-0.0868 z m 8.19259,-7.82125 c 4.45862,-4.45862 1.3397,-13.9047607 -4.59106,-13.9047607 -2.73221,0 -6.64704,4.7116707 -6.64704,8.0000007 0,3.28833 3.91483,8 6.64704,8 1.3727,0 3.43868,-0.94286 4.59106,-2.09524 z m 337.38288,7.50488 c -7.13529,-1.68464 -8.90096,-3.18374 -6.92792,-5.88204 1.41998,-1.94193 2.36651,-2.10562 5.43336,-0.9396 5.0755,1.9297 7.54024,1.77129 7.54024,-0.4846 0,-1.04313 -2.02745,-2.56571 -4.50544,-3.38352 -9.26313,-3.05712 -11.37832,-10.0595007 -4.5686,-15.1245107 3.03955,-2.26076996 4.47644,-2.48571996 9.33334,-1.46112996 4.44294,0.93724996 5.7407,1.81249996 5.7407,3.87171996 0,2.21526 -0.89288,2.6607004 -5.33333,2.6607004 -6.83145,0 -7.30507,2.18292 -0.94579,4.3592803 2.72019,0.93093 5.69579,2.69561 6.61246,3.9215 5.30865,7.09947 -2.36647,14.82615 -12.37902,12.4622 z m 145.48588,-0.52484 c -5.47843,-1.65296 -6.75215,-3.13299 -5.03073,-5.84559 0.79752,-1.25674 2.16681,-1.27941 6.01118,-0.0995 3.72708,1.14387 5.36055,1.14579 6.49871,0.008 1.13816,-1.13816 -0.0507,-2.19368 -4.72977,-4.19937 -9.39,-4.02503 -10.93055,-11.9452107 -3.07554,-15.8118207 5.76687,-2.83873 16.38181,0.0182 14.85461,3.99808 -0.6086,1.58598 -2.17876,1.8976004 -6.88733,1.36688 -7.6922,-0.86702 -7.33965,1.1835004 0.91867,5.3433207 5.33345,2.68653 6.0462,3.58145 6.41582,8.05584 0.38415,4.65013 0.0573,5.18337 -4.29052,7 -2.58848,1.08154 -4.87559,1.92032 -5.08247,1.86396 -0.2069,-0.0564 -2.72807,-0.81209 -5.60263,-1.6794 z m 30.45136,0.31545 c -6.4565,-1.82288 -9.07106,-5.65688 -9.07106,-13.30185 0,-5.4663203 0.6484,-7.3063807 3.62188,-10.2783507 3.01346,-3.01193 4.74167,-3.60357996 10.2878,-3.52199996 7.29306,0.10729 9.81662,1.59223996 8.50676,5.00567996 -0.67393,1.7562404 -1.92701,2.0441704 -6.03649,1.38703 -6.73144,-1.0764 -9.20045,0.9902404 -9.20045,7.7010807 0,6.47539 3.9785,9.00612 10.55448,6.71372 3.52352,-1.2283 4.28546,-1.07314 5.45421,1.11069 1.05931,1.97932 0.84087,2.80383 -0.99175,3.74332 -4.11708,2.11062 -8.895,2.63506 -13.12538,1.44068 z m 101.47368,0.0521 c -2.18246,-0.65065 -5.01911,-2.54861 -6.30368,-4.2177 -2.91666,-3.78968 -3.13966,-14.0447103 -0.39076,-17.9693107 3.02884,-4.32427 10.0234,-6.18644996 16.5927,-4.41752 4.73197,1.27419 5.26451,1.78652 4.10637,3.95051 -1.05866,1.97814 -2.37622,2.3462304 -6.44485,1.80051 -3.70108,-0.49642 -5.73273,-0.0674 -7.35292,1.5528204 -3.05866,3.0586703 -2.81521,9.1133303 0.4866,12.1014303 2.32714,2.10602 3.49198,2.26182 7.97137,1.0662 4.72147,-1.26023 5.32978,-1.13625 6.08398,1.24001 0.89582,2.8225 -1.2223,4.91885 -5.005,4.95357 -1.22336,0.0112 -3.02336,0.26839 -4,0.57145 -0.97665,0.30307 -3.56136,0.0187 -5.74381,-0.63197 z m 52.07497,-0.34018 c -5.6348,-1.72969 -6.75362,-3.15372 -4.84736,-6.16974 0.99178,-1.56917 1.86038,-1.63067 4.70776,-0.33333 1.9203,0.87496 4.6633,1.59085 6.0955,1.59085 4.7358,0 2.7038,-3.59955 -3.3337,-5.9053 -13.76328,-5.25624 -6.81391,-19.8054806 7.4227,-15.5401007 3.8665,1.15843 5.2247,2.22636 4.9056,3.85703 -0.3576,1.82784 -1.6657,2.16665 -6.9048,1.78845 -7.8825,-0.56901 -8.0081,1.9917104 -0.2297,4.6846507 8.3461,2.88951 10.8918,8.28129 6.4105,13.57737 -3.0589,3.61497 -7.7819,4.42837 -14.2265,2.45011 z M 61.054807,14.450021 60.987507,1.1166803 h 3.88637 3.88638 v 9.9233407 9.92334 l 5.66667,0.40999 c 4.71069,0.34083 5.73854,0.9161 6.09273,3.41 0.40907,2.88028 0.0305,3 -9.48574,3 h -9.9118 z m 25.03878,0 V 1.1166803 h 3.33334 c 3.25925,0 3.33333,0.22222 3.33333,10.0000007 v 10 h 6.000001 c 5.511112,0 6.000002,0.27161 6.000002,3.33334 0,3.23809 -0.26667,3.33333 -9.333333,3.33333 h -9.33334 z m 24.000003,0 V 1.1166803 h 10 c 9.11111,0 10,0.23704 10,2.66667 0,2.2716 -0.88889,2.66667 -6,2.66667 -5.11111,0 -6,0.39506 -6,2.6666604 0,2.2222303 0.88889,2.6666703 5.33333,2.6666703 4.44445,0 5.33334,0.44444 5.33334,2.66667 0,2.22222 -0.88889,2.66666 -5.33334,2.66666 -4.34048,0 -5.33333,0.469 -5.33333,2.51934 0,2.14274 0.94672,2.49153 6.33333,2.33333 5.61967,-0.16504 6.38135,0.15205 6.7594,2.814 0.41166,2.89847 0.0619,3 -10.33333,3 h -10.7594 z m 58.66667,0 V 1.1166803 h 10 c 9.1111,0 10,0.23704 10,2.66667 0,2.31111 -0.8889,2.66667 -6.66667,2.66667 -5.77777,0 -6.66667,0.35555 -6.66667,2.6666604 0,2.2222303 0.8889,2.6666703 5.33334,2.6666703 4.44444,0 5.33333,0.44444 5.33333,2.66667 0,2.22222 -0.88889,2.66666 -5.33333,2.66666 -4.30622,0 -5.33334,0.47651 -5.33334,2.47428 0,2.08267 1.0024,2.45198 6.33334,2.33334 5.6035,-0.12471 6.38242,0.20476 6.7594,2.85905 0.40965,2.88442 0.0372,3 -9.66667,3 h -10.09273 z m 70.66666,0 V 1.1166803 h 9.33333 c 8.44444,0 9.33334,0.25397 9.33334,2.66667 0,2.2716 -0.8889,2.66667 -6,2.66667 -5.51111,0 -6,0.2716 -6,3.3333304 0,3.0000003 0.53333,3.3333303 5.33333,3.3333303 4.44444,0 5.33333,0.44445 5.33333,2.66667 0,2.22222 -0.88889,2.66667 -5.33333,2.66667 -5.20635,0 -5.33333,0.1111 -5.33333,4.66666 0,4.08889 -0.4127,4.66667 -3.33334,4.66667 h -3.33333 z m 37.33333,0 V 1.1166803 h 3.33334 c 3.25697,0 3.33333,0.22734 3.33333,9.9233407 v 9.92334 l 5.66667,0.40999 c 4.71069,0.34083 5.73854,0.9161 6.09273,3.41 0.40737,2.86839 0.012,3 -9,3 h -9.42607 z m 24,0 V 1.1166803 h 3.33334 3.33333 v 13.3333407 13.33333 h -3.33333 -3.33334 z m 14.66667,0 V 1.1166803 h 8.46001 c 6.83561,0 8.935,0.52486 10.93377,2.73347 2.06646,2.28341 2.2325,3.3726404 1.00843,6.6155407 -1.15515,3.06035 -1.07057,4.20969 0.39957,5.4298 2.81419,2.33557 2.23887,7.47469 -1.09846,9.81225 -1.91804,1.34346 -5.91579,2.07561 -11.33334,2.07561 h -8.36998 z m 14.50416,6.79532 c 2.7698,-1.75437 0.51769,-4.12866 -3.91619,-4.12866 -3.03241,0 -3.9213,0.60449 -3.9213,2.66667 0,2.85944 4.35005,3.67089 7.83749,1.46199 z m -1.33334,-10.66667 c 1.01062,-0.6401103 1.4252,-1.8309303 0.92131,-2.6462503 -1.29761,-2.0995804 -7.42546,-1.8558204 -7.42546,0.29537 0,3.4686803 3.01746,4.5593103 6.50415,2.3508803 z m 14.82918,3.87135 V 1.1166803 h 10 c 9.1111,0 10,0.23704 10,2.66667 0,2.2716 -0.8889,2.66667 -6,2.66667 -5.11111,0 -6,0.39506 -6,2.6666604 0,2.2222303 0.88889,2.6666703 5.33333,2.6666703 4.44444,0 5.33333,0.44444 5.33333,2.66667 0,2.22222 -0.88889,2.66666 -5.33333,2.66666 -4.43432,0 -5.33333,0.44697 -5.33333,2.65156 0,2.31904 0.79424,2.61165 6.33333,2.33334 5.66688,-0.28474 6.37817,-0.002 6.7594,2.68177 0.41165,2.89847 0.0619,3 -10.33333,3 h -10.7594 z m 26.66666,0 V 1.1166803 h 8.66667 c 6.88889,0 9.21368,0.54701 11.33333,2.66667 3.23284,3.23283 3.50384,10.1982907 0.52486,13.4900307 -1.97658,2.18409 -1.91814,2.68079 0.75746,6.43832 l 2.89927,4.07165 h -3.66036 c -2.4794,0 -4.79833,-1.36311 -7.18749,-4.22494 -3.88414,-4.65257 -6.66707,-4.24755 -6.66707,0.9703 0,2.58273 -0.68816,3.25464 -3.33333,3.25464 h -3.33334 z m 15.78694,-3.17357 c 0.55056,-2.9029503 -1.83579,-4.7768607 -6.12027,-4.8060207 -2.46268,-0.0168 -3,0.7111504 -3,4.0640607 0,3.80305 0.29783,4.05569 4.32241,3.66667 2.97384,-0.28745 4.47075,-1.19995 4.79786,-2.92471 z m 16.06866,3.5069 c 4.88035,-12.8952707 4.9585,-13.0032607 9.70039,-13.4039807 l 4.78041,-0.40396996 4.8318,12.47018066 c 2.6575,6.8586 4.8318,12.89039 4.8318,13.40398 0,1.84797 -6.76788,0.88812 -7.51782,-1.06621 -0.52219,-1.36078 -2.65294,-2 -6.66667,-2 -4.01375,0 -6.14449,0.63922 -6.66667,2 -0.42864,1.11701 -2.41112,2 -4.49036,2 h -3.72288 z m 11.77584,-2.39868 c -1.47232,-4.7972203 -2.33764,-4.4426303 -4.22666,1.73201 -0.78014,2.54998 -0.42303,3 2.38057,3 3.16217,0 3.23841,-0.19541 1.84609,-4.73201 z m 17.7019,2.06535 V 1.1166803 h 3.33333 c 3.25925,0 3.33333,0.22222 3.33333,10.0000007 v 10 h 6 c 5.51111,0 6,0.27161 6,3.33334 0,3.23809 -0.26666,3.33333 -9.33333,3.33333 h -9.33333 z m 34.66666,12.90415 c 0,-0.23606 2.2888,-6.08606 5.08624,-13 4.96555,-12.2725607 5.19679,-12.5802807 9.74601,-12.9695007 l 4.65978,-0.39867996 4.44012,11.73201066 c 2.44206,6.45261 4.72054,12.48202 5.0633,13.39868 0.39996,1.06967 -0.6369,1.66667 -2.89465,1.66667 -1.9348,0 -3.86319,-0.9 -4.28529,-2 -0.53751,-1.40071 -2.72236,-2 -7.2915,-2 -4.91024,0 -6.52401,0.49472 -6.52401,2 0,1.33333 -1.33333,2 -4,2 -2.2,0 -4,-0.19313 -4,-0.42918 z m 17.31292,-12.57082 c -0.0235,-2.67486 -2.19043,-6.5669403 -3.13204,-5.6253203 -0.34693,0.34693 -1.0446,2.2795603 -1.55037,4.2947203 -0.78524,3.12861 -0.50886,3.66393 1.89161,3.66393 1.79624,0 2.80384,-0.84244 2.7908,-2.33333 z m 17.35375,-0.33333 V 1.1166803 h 8.43425 c 7.09225,0 8.89552,0.49101 11.33333,3.08594 3.55387,3.7829204 3.7391,9.4073807 0.41915,12.7273207 -2.40832,2.40833 -2.40917,2.57193 -0.0296,5.66667 3.2698,4.25263 3.12863,5.18674 -0.78388,5.18674 -2.11328,0 -4.35312,-1.43333 -6.25075,-4 -1.62653,-2.2 -3.74449,-4 -4.70658,-4 -1.05472,0 -1.74926,1.58817 -1.74926,4 0,3.37778 -0.51852,4 -3.33333,4 h -3.33333 z m 15.52434,-2.01698 c 1.08443,-2.8259603 -1.91676,-5.9830207 -5.6876,-5.9830207 -2.63342,0 -3.17008,0.6771504 -3.17008,4.0000007 0,3.56476 0.4398,4 4.04184,4 2.3779,0 4.3605,-0.83036 4.81584,-2.01698 z m 18.97431,13.68364 c -0.0924,-0.91666 -0.24241,-5.56666 -0.33333,-10.33333 l -0.16532,-8.6666707 -4.33334,-0.41781 c -3.25336,-0.31368 -4.33333,-1.06135 -4.33333,-3 0,-2.36275 1.01975,-2.58219 12,-2.58219 11.11111,0 12,0.19753 12,2.66667 0,2.07407 -0.88889,2.66667 -4,2.66667 h -4 V 17.116681 c 0,10.48889 -0.0556,10.66667 -3.33333,10.66667 -1.83334,0 -3.40895,-0.75 -3.50135,-1.66667 z m 61.42406,-11.33333 c 4.9677,-12.7885707 5.12596,-13.0065707 9.73175,-13.4039807 l 4.68193,-0.40396996 4.8318,12.47018066 c 2.6575,6.8586 4.8318,12.89039 4.8318,13.40398 0,1.96187 -6.59536,0.82442 -7.81056,-1.34702 -1.58493,-2.83211 -10.7917,-2.6041 -13.00309,0.32204 -0.81419,1.07732 -3.01777,1.95877 -4.89689,1.95877 h -3.41656 z m 13.41062,1.81975 c 0,-0.28248 -0.81615,-2.45464 -1.81367,-4.82703 l -1.81367,-4.3134403 -1.51966,4.3593303 c -1.95283,5.60188 -2.05804,5.29472 1.81366,5.29472 1.83334,0 3.33334,-0.23111 3.33334,-0.51358 z m 16,-2.15308 c 0,-13.1515407 0.0432,-13.3333407 3.17118,-13.3333407 2.28244,0 4.80476,2.12131 9,7.5691304 l 5.82882,7.5691303 0.39986,-7.5691303 c 0.37166,-7.0349304 0.63043,-7.5691304 3.66667,-7.5691304 3.24905,0 3.2668,0.0724 3.2668,13.3333407 0,13.28665 -0.012,13.33333 -3.29015,13.33333 -2.44212,0 -4.76181,-1.9529 -9,-7.57693 l -5.70985,-7.57692 -0.39987,7.57692 c -0.3717,7.04321 -0.62998,7.57693 -3.66666,7.57693 -3.24906,0 -3.2668,-0.0724 -3.2668,-13.33333 z m 33.33333,0 V 1.1166803 h 8.10256 c 7.17769,0 8.54744,0.44488 12,3.89744 3.05667,3.0566604 3.89744,5.0922207 3.89744,9.4359007 0,4.34368 -0.84077,6.37923 -3.89744,9.43589 -3.45256,3.45256 -4.82231,3.89744 -12,3.89744 h -8.10256 z m 15.65921,5.06288 c 2.75818,-2.28909 2.00859,-8.6774 -1.28922,-10.9872803 -6.02128,-4.2174704 -7.70332,-2.8923004 -7.70332,6.0689403 v 8.14454 l 3.65921,-0.9184 c 2.01256,-0.50512 4.41256,-1.54363 5.33333,-2.3078 z m 83.00745,-5.06288 V 1.1166803 h 3.33334 3.33333 v 13.3333407 13.33333 h -3.33333 -3.33334 z m 14.66667,0 V 1.1166803 h 10 c 9.11111,0 10,0.23704 10,2.66667 0,2.61752 -3.53172,3.4960804 -11,2.73639 -1.52543,-0.15516 -2.33333,0.6884504 -2.33333,2.4364704 0,2.1914803 1.02014,2.7477703 5.65516,3.0838103 4.12522,0.29908 5.7749,1.04126 6.09777,2.74333 0.37007,1.95095 -0.57271,2.33333 -5.75293,2.33333 -5.18572,0 -6.12104,0.38031 -5.7385,2.33334 0.32212,1.64451 1.82703,2.3837 5.09776,2.50394 7.68579,0.28257 7.97407,0.39691 7.97407,3.16272 0,2.42963 -0.88889,2.66667 -10,2.66667 h -10 z m 26.66667,0 c 0,-13.0372407 0.0683,-13.3333407 3.07708,-13.3333407 2.20213,0 4.66645,2.16505 8.66666,7.6141904 l 5.58959,7.6141903 V 8.7308707 c 0,-7.2329104 0.16692,-7.6141904 3.33333,-7.6141904 h 3.33334 V 14.450021 c 0,12.95728 -0.0847,13.33152 -3,13.26916 -2.04755,-0.0438 -4.79908,-2.45146 -8.66667,-7.58356 l -5.66667,-7.5194 v 7.58356 c 0,7.20025 -0.16848,7.58357 -3.33333,7.58357 h -3.33333 z m 59.99999,0 V 1.1166803 h 10 c 9.11111,0 10,0.23704 10,2.66667 0,2.2716 -0.88889,2.66667 -6,2.66667 -5.1111,0 -6,0.39506 -6,2.6666604 0,2.2222303 0.8889,2.6666703 5.33334,2.6666703 4.44444,0 5.33333,0.44444 5.33333,2.66667 0,2.22222 -0.88889,2.66666 -5.33333,2.66666 -4.50914,0 -5.33334,0.42766 -5.33334,2.76738 0,2.46789 0.68539,2.72468 6.33334,2.37297 5.66925,-0.35305 6.37801,-0.084 6.7594,2.56596 0.41002,2.84889 0.0209,2.96036 -10.33334,2.96036 h -10.7594 z"
     id="path4508"
     inkscape:connector-curvature="0" />
        </g>
    </g>
   <image src="/wp-content/themes/CLAS/assets/images/LibArtsAndSciences_Mobile.png" xlink:href="">
</symbol>



<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 18" id="search"><circle fill="none" stroke="#FFF" stroke-width="2.292" cx="7" cy="7" r="5.8"/><path fill="none" stroke="#FFF" stroke-width="2.292" d="M10.5 11.4l5.7 5.8"/></symbol>


      <symbol id="icon-fivelines" x="0px" y="0px" viewBox="0 0 98 78" style="enable-background:new 0 0 98 78;">
         <title>Five Lines Menu</title>
<g>
	<rect x="26" y="2" class="st0" width="70" height="6"/>
	<rect x="2" y="2" class="st0" width="10" height="6"/>
	<rect x="26" y="24" class="st0" width="70" height="6"/>
	<rect x="2" y="24" class="st0" width="10" height="6"/>
	<rect x="26" y="48" class="st0" width="70" height="6"/>
	<rect x="2" y="48" class="st0" width="10" height="6"/>
	<rect x="26" y="70" class="st0" width="70" height="6"/>
	<rect x="2" y="70" class="st0" width="10" height="6"/>
</g>
   <image src="/wp-content/themes/CLAS/assets/images/icons/icon-fivelines.png" xlink:href="">
      </symbol>



      <symbol id="icon-close"     viewBox="-2.7755576e-17 0 41.607503 41.599998" >
         <title>close</title>

 <path
     id="path6"
     d="m 35.513751,6.09 c -8.12,-8.12 -21.29,-8.12 -29.4200004,0 -8.13,8.12 -8.12,21.29 0,29.42 8.1200004,8.12 21.2900004,8.12 29.4200004,0 8.13,-8.12 8.12,-21.3 0,-29.42 z m -5.11,23.13 -1.18,1.18 -8.44,-8.42 -8.4,8.38 -1.18,-1.18 8.4,-8.38 -8.4,-8.38 1.18,-1.18 8.4,8.38 8.44,-8.42 1.18,1.18 -8.44,8.42 z"
     class="path1"
     style="fill:#4c87b5;fill-opacity:0.94117647" />
  <g
     id="layer1">
    <path
       id="path4512"
       d="m 11.203751,12.42 1.18,-1.18 8.4,8.38 8.439999,-8.42 1.180002,1.18 -8.440001,8.42 8.440001,8.420001 L 29.22375,30.4 l -8.439999,-8.42 -8.4,8.38 -1.18,-1.179999 8.4,-8.380001 z"
       style="fill:#ffffff;stroke:#ffffff;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none" />
  </g>
   <image src="/wp-content/themes/CLAS/assets/images/icons/icon-close.png" xlink:href="">
</symbol>

<symbol id="icon-angle-down" viewBox="0 0 21 32">
<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z" style="fill:#a4b0bc;;"></path>
</symbol>

      <symbol id="icon-search-close"     viewBox="-2.7755576e-17 0 41.607503 41.599998" >
         <title>close</title>

 <path
     id="path6"
     d="m 35.513751,6.09 c -8.12,-8.12 -21.29,-8.12 -29.4200004,0 -8.13,8.12 -8.12,21.29 0,29.42 8.1200004,8.12 21.2900004,8.12 29.4200004,0 8.13,-8.12 8.12,-21.3 0,-29.42 z m -5.11,23.13 -1.18,1.18 -8.44,-8.42 -8.4,8.38 -1.18,-1.18 8.4,-8.38 -8.4,-8.38 1.18,-1.18 8.4,8.38 8.44,-8.42 1.18,1.18 -8.44,8.42 z"
     class="path1"
     style="fill:#00337A;;fill-opacity:0.94117647" />
  <g
     id="layer1">
    <path
       id="path4512"
       d="m 11.203751,12.42 1.18,-1.18 8.4,8.38 8.439999,-8.42 1.180002,1.18 -8.440001,8.42 8.440001,8.420001 L 29.22375,30.4 l -8.439999,-8.42 -8.4,8.38 -1.18,-1.179999 8.4,-8.380001 z"
       style="fill:#ffffff;stroke:#ffffff;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none" />
  </g>
   <image src="/wp-content/themes/CLAS/assets/images/icons/icon-close.png" xlink:href="">
</symbol>

<symbol id="icon-angle-down" viewBox="0 0 21 32">
<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z" style="fill:#a4b0bc;;"></path>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="facebook" width="40px" height="40px" >

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 83</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path id="f" class="cls-2" d="M27.6,40V24.51h5.2l.78-6h-6V14.62c0-1.75.48-2.94,3-2.94h3.2V6.28A43.65,43.65,0,0,0,29.13,6c-4.61,0-7.76,2.81-7.76,8v4.45H16.15v6h5.22V40Z"/></g></g>

</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="instagram" width="40px" height="40px">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 87</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M20,9.07c3.56,0,4,0,5.39.08a7.16,7.16,0,0,1,2.47.46,4.31,4.31,0,0,1,2.53,2.53,7.16,7.16,0,0,1,.46,2.47c.07,1.41.08,1.83.08,5.39s0,4-.08,5.39a7.16,7.16,0,0,1-.46,2.47,4.31,4.31,0,0,1-2.53,2.53,7.16,7.16,0,0,1-2.47.46c-1.41.07-1.83.08-5.39.08s-4,0-5.39-.08a7.16,7.16,0,0,1-2.47-.46,4.31,4.31,0,0,1-2.53-2.53,7.16,7.16,0,0,1-.46-2.47C9.08,24,9.07,23.56,9.07,20s0-4,.08-5.39a7.16,7.16,0,0,1,.46-2.47,4.31,4.31,0,0,1,2.53-2.53,7.16,7.16,0,0,1,2.47-.46C16,9.08,16.44,9.07,20,9.07m0-2.4c-3.62,0-4.08,0-5.5.08a9.57,9.57,0,0,0-3.23.62,6.7,6.7,0,0,0-3.9,3.9,9.57,9.57,0,0,0-.62,3.23c-.07,1.42-.08,1.88-.08,5.5s0,4.08.08,5.5a9.57,9.57,0,0,0,.62,3.23,6.7,6.7,0,0,0,3.9,3.9,9.57,9.57,0,0,0,3.23.62c1.42.07,1.88.08,5.5.08s4.08,0,5.5-.08a9.57,9.57,0,0,0,3.23-.62,6.7,6.7,0,0,0,3.9-3.9,9.57,9.57,0,0,0,.62-3.23c.07-1.42.08-1.88.08-5.5s0-4.08-.08-5.5a9.57,9.57,0,0,0-.62-3.23,6.7,6.7,0,0,0-3.9-3.9,9.57,9.57,0,0,0-3.23-.62c-1.42-.07-1.88-.08-5.5-.08Z"/><path class="cls-2" d="M20,13.15A6.85,6.85,0,1,0,26.85,20,6.85,6.85,0,0,0,20,13.15Zm0,11.29A4.44,4.44,0,1,1,24.44,20,4.44,4.44,0,0,1,20,24.44Z"/><circle class="cls-2" cx="27.12" cy="12.88" r="1.6"/></g></g>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="twitter" width="40px" height="40px">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 85</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M33,11.94a10.84,10.84,0,0,1-3.06.84,5.37,5.37,0,0,0,2.34-2.95,10.69,10.69,0,0,1-3.39,1.29,5.33,5.33,0,0,0-9.22,3.65A5.34,5.34,0,0,0,19.8,16a15.12,15.12,0,0,1-11-5.57,5.35,5.35,0,0,0,1.65,7.12A5.24,5.24,0,0,1,8,16.87v.06a5.33,5.33,0,0,0,4.28,5.23,5,5,0,0,1-1.4.19,5.58,5.58,0,0,1-1-.09,5.35,5.35,0,0,0,5,3.7A10.89,10.89,0,0,1,7,28.17,15.16,15.16,0,0,0,30.35,15.39c0-.23,0-.46,0-.69A10.91,10.91,0,0,0,33,11.94Z"/></g></g>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="youtube" width="40" height="40">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 89</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><g id="_Group_" data-name="&lt;Group&gt;"><path id="_Path_" data-name="&lt;Path&gt;" class="cls-2" d="M33.84,13a3.64,3.64,0,0,0-2.55-2.57C29,9.82,20,9.82,20,9.82s-9,0-11.29.61A3.64,3.64,0,0,0,6.16,13a38.33,38.33,0,0,0-.6,7,38.33,38.33,0,0,0,.6,7,3.64,3.64,0,0,0,2.55,2.57c2.26.61,11.29.61,11.29.61s9,0,11.29-.61A3.64,3.64,0,0,0,33.84,27a38.33,38.33,0,0,0,.6-7A38.33,38.33,0,0,0,33.84,13Z"/><polygon id="_Path_2" data-name="&lt;Path&gt;" class="footer-icon-color" points="17.05 24.3 24.6 20 17.05 15.71 17.05 24.3"/></g></g></g>

</symbol>

<symbol id="icon-email" class="icon-email" viewBox="0 0 1528 1024">
	<title>email</title>
	<path d="M766.048 613.486h0.348c11.476 0 22.819-3.332 31.995-9.393l2.487-1.601c0.542-0.348 1.109-0.676 1.676-1.054l28.991-23.985 691.967-571.011c-1.432-1.974-3.874-3.327-6.471-3.327h-1505.388c-1.87 0-3.601 0.676-4.981 1.815l723.947 596.724c9.124 7.554 22.142 11.859 35.842 11.859zM3.108 83.805v846.445l518.64-418.95-518.64-427.475zM1006.916 514.12l518.093 416.319v-843.809l-518.093 427.5zM842.203 650.007c-20.653 16.945-47.666 26.285-76.035 26.285-28.476 0-55.465-9.286-76.065-26.151l-118.778-97.964-568.226 458.957v1.457c0 4.357 3.735 8.068 8.147 8.068h1505.736c4.327 0 8.037-3.705 8.037-8.095v-1.353l-567.728-456.167-115.043 94.955z"></path>
</symbol>



<symbol id="icon-footer-email" class="icon-footer-email" viewBox="0 0 40 40"  width="40" height="40">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 93</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M26.24,23c0,1.78.48,2.26,1.37,2.26,1.47,0,3.67-1.37,3.73-6.47,0-6.18-4.14-10.26-10.86-10.26-7,0-11.82,4.68-11.82,11.69,0,6.82,4.46,11.12,11.18,11.12a17.16,17.16,0,0,0,7.77-1.72l.61,1.28A17,17,0,0,1,19.84,33C12.13,33,7,27.87,7,20.22,7,12.29,12.67,7,20.48,7,28.09,7,33,11.78,33,18.79,33,25.54,29.18,27,26.82,27c-1.53,0-2.9-.35-3.44-2.16A6.74,6.74,0,0,1,18.21,27C15,27,13,25,13,20.13s2.07-6.88,5.48-6.88a7.33,7.33,0,0,1,4.65,1.68V13.5h3.12Zm-3.12-5.49a5.06,5.06,0,0,0-3.57-1.62c-2.1,0-3.5,1.08-3.5,4.24,0,3.41,1.24,4.43,3.25,4.43,1.56,0,2.61-.77,3.82-1.88Z"/></g></g>
</symbol>




<symbol id="icon-footer-linkedin" class="icon-footer-linkedin" viewBox="0 0 40 40" width="40px" height="40px">

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 88</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M6.16,15.2h5.93V34.29H6.16Zm3-9.49A3.44,3.44,0,1,1,5.69,9.15,3.45,3.45,0,0,1,9.13,5.71"/><path class="cls-2" d="M15.82,15.2H21.5v2.61h.08a6.25,6.25,0,0,1,5.62-3.08c6,0,7.11,3.95,7.11,9.09V34.29H28.38V25c0-2.22,0-5.07-3.08-5.07s-3.56,2.42-3.56,4.91v9.44H15.82Z"/></g></g>

</symbol>





<symbol id="rss" xmlns="http://www.w3.org/2000/svg" version="1.1"viewBox="0 0 40 40">

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><title>Asset 92</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect id="Blue" class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M29.06,34.44a23.44,23.44,0,0,0-6.88-16.62h0A23.44,23.44,0,0,0,5.56,10.94h0V5.56A28.87,28.87,0,0,1,34.44,34.44H29.06Zm-9.95,0H24.5A18.94,18.94,0,0,0,5.56,15.5v5.39h0a13.47,13.47,0,0,1,9.58,4h0a13.47,13.47,0,0,1,4,9.58Zm-9.7-7.71a3.86,3.86,0,1,0,3.86,3.86A3.85,3.85,0,0,0,9.41,26.73Z"/></g></g>

</symbol>


<symbol id="footer-icon-uf" class="footer-icon-uf"  viewBox="0 0 194.8 35.8">
	<title>UF Watermark Logo</title>
<path fill="#f45a1d" d="M56.1 1.2v33.9h1.5V1.2h-1.5"/><path fill="#ffffff" d="M169.1 10c.1.4.4.6.7.8.3.2.8.3 1.4.3.5 0 .9-.1 1.3-.2s.8-.4 1.2-.7c.4-.3.7-.5.9-.8.3-.3.5-.8.7-1.5.2-.6.3-1.3.3-1.9 0-.3 0-.6-.1-.9-.1-.3-.2-.5-.4-.7-.2-.2-.4-.4-.8-.5-.3-.1-.7-.2-1.2-.2s-1 .1-1.4.3c-.4.2-.9.4-1.2.7-.4.3-.6.5-.8.7-.2.3-.5.8-.7 1.4-.2.7-.3 1.3-.3 1.9.2.5.3.9.4 1.3zm1.8-3.5c.2-.8.5-1.4.7-1.7.3-.3.6-.4 1-.4s.7.1.9.4c.2.3.4.7.4 1.3 0 .7-.1 1.4-.3 2.2-.1.5-.3.9-.5 1.2-.2.3-.4.5-.6.7-.2.1-.4.2-.7.2-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3.1-.6.2-1.4.4-2.2zm6.8-1.7h1l-1.1 5.5c-.3 1.5-.5 2.5-.7 3-.1.2-.2.4-.3.5-.1.1-.2.1-.4.1-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.3-.5h-.2c-.1.3-.1.5-.2.7-.1.2-.2.5-.3.9.2.1.4.1.6.1.2 0 .5-.1.7-.2.5-.2.9-.6 1.4-1.2.5-.5.8-1.2 1.1-1.9.3-.7.6-1.8 1-3.4l.8-3.5h1.8c0-.2.1-.5.2-.8l-.1-.1c-.1.2-.3.2-.7.2h-1.2c.1-.6.3-1.3.4-1.9.1-.2.1-.4.2-.5l.3-.3c.1-.1.2-.1.4-.1s.3.1.5.2.4.3.6.7h.2c.1-.6.2-1.2.4-1.9-.1-.2-.3-.2-.5-.2-.3 0-.5 0-.7.1-.2.1-.5.3-1 .7-.5.4-1 .8-1.4 1.2-.3.3-.5.5-.6.8-.1.2-.2.4-.3.9 0 .2-.1.3-.1.4-.2.1-.5.2-.8.3-.3.1-.6.2-.7.2l-.1.4c.1-.2.3-.2.5-.2zM76.1 21.3h-1.3c0 .9-.1 1.5-.2 1.7-.1.2-.2.3-.3.3-.3.1-1.2.2-2.5.2-.5 0-1.3 0-2.6-.1v-2.1c0-2.6.1-4.4.2-5.4.3 0 .8 0 1.6-.1h1.4c.9 0 1.7.1 2.3.2.7.1 1.1.2 1.3.4.1 0 .1.1.1.1 0 .1.1.4.1.8.1.8.1 1.4.1 1.6h1.2c0-.7.1-1.4.1-2.3.1-.9.2-1.6.3-2.2l-.1-.2c-.9-.1-1.9-.2-2.9-.2l-7.3.1-5.4-.1v1.3c1 .1 1.6.1 1.8.2.2.1.4.1.4.2.1.1.1.1.1.2.1.3.1.9.2 1.7.1 2.7.1 4.1.1 4.2V28c0 .5 0 1.4-.1 2.6-.1 1.2-.1 2-.1 2.2-.1.4-.1.7-.2.8l-.2.2c-.2.1-.9.1-2 .1v1.2c1.9-.1 3.2-.1 4.1-.1l5.9.1V34c-1.4-.1-2.2-.2-2.4-.2-.2-.1-.3-.2-.4-.3-.1-.2-.2-.7-.2-1.7-.1-1-.1-2.6-.1-5v-1.7h1.2c1.6 0 2.8.1 3.5.2.3.1.5.2.5.3.1.3.2 1 .3 2.3h1.3c.2-2.7.2-4.9.2-6.6zm8.4 13.8c.7 0 1.8 0 3.5.1 2.2.1 3.4.1 3.6.1 1.3 0 2.2 0 2.9-.1.3 0 .6-.1.9-.2 0-.2.1-.8.1-1.7l.4-3.1v-.5h-1.2c-.2 1-.4 1.9-.6 2.6-.1.3-.2.5-.3.6-.2.1-.4.1-.8.2-1.1.2-2.5.3-4 .3-.5 0-1.5 0-2.8-.1v-2.6-4.3V22c0-1.7 0-3.1.1-4.2 0-1.1.1-1.7.1-1.9 0-.1.1-.2.2-.3.3-.1.9-.2 2.1-.3V14c-1.6.1-3.4.1-5.2.1-1.6 0-3.1 0-4.4-.1v1.3c1.3.1 2.1.2 2.3.3.1.1.2.2.2.3.1.3.2 1.4.2 3.3v5.9c0 2.2 0 4-.1 5.6 0 1.6-.1 2.5-.1 2.7 0 .1 0 .1-.1.2s-.2.2-.4.3c-.5.3-.8.5-1.1.6v.8c2-.2 3.5-.2 4.5-.2zm13-4.2c.9 1.6 2.2 2.8 3.8 3.6 1.6.8 3.6 1.2 5.8 1.2 2.1 0 4-.3 5.6-1 1.2-.5 2.3-1.2 3.2-2.2.9-.9 1.6-2 2.1-3.2.7-1.6 1-3.4 1-5.3 0-1.1-.1-2.1-.3-3.1-.2-.9-.6-1.8-1-2.6s-1.1-1.5-1.9-2.3c-.9-.7-1.8-1.3-2.9-1.7-1.5-.5-3.2-.8-5-.8-1.8 0-3.5.3-5.1.8-1.2.4-2.3 1.1-3.4 2.1-1 1-1.8 2.1-2.4 3.5-.6 1.4-.8 3-.8 4.8 0 2.6.4 4.6 1.3 6.2zm4-11.4c.5-1.4 1.2-2.4 2.3-3.1 1-.7 2.3-1 3.8-1 1.3 0 2.3.2 3.1.7.8.4 1.5 1.1 2 1.9.6.8 1 1.8 1.3 3 .3 1.2.5 2.5.5 3.9 0 2.1-.3 3.8-.9 5.3-.6 1.4-1.4 2.5-2.4 3.1-1 .6-2.1.9-3.4.9-1.4 0-2.6-.3-3.6-1-1-.6-1.8-1.7-2.5-3.3-.6-1.5-1-3.5-1-5.8.1-1.8.3-3.3.8-4.6zm19.8-3.9c.1.1.2.1.2.3.1.3.2 1 .2 2.3l.1 3.2V27l-.1 4.4c0 .8-.1 1.4-.2 1.8 0 .2-.1.4-.1.4-.1.1-.1.1-.3.2-.2.1-.9.1-2 .2v1.3c1.3-.1 2.8-.1 4.4-.1 1.8 0 3.5 0 5.2.1V34c-1 0-1.6 0-1.8-.1-.2 0-.3-.1-.4-.2-.1-.1-.2-.1-.2-.2-.1-.2-.1-.5-.2-1.1 0-.3-.1-1.5-.1-3.5v-4.8c0-1 0-2.9.1-5.7 0-1.3.1-2.1.1-2.5.5-.1 1-.1 1.4-.1 1.1 0 1.8.1 2.3.2.7.2 1.2.7 1.7 1.3.4.6.7 1.4.7 2.3 0 .9-.2 1.7-.6 2.5-.4.7-.9 1.3-1.6 1.5-.6.3-1.5.4-2.7.4l-.2.5c.3.2.6.6.9 1l2.4 3.6 3.2 5.3c.2.4.3.6.4.9.8 0 1.6-.1 2.4-.1.7 0 1.8 0 3.4.1V34c-.5 0-.8 0-1-.1-.2-.1-.3-.2-.5-.4s-.6-.8-1.4-1.8c-.1-.1-.4-.6-1-1.5l-2.3-3.5c-.1-.1-.1-.2-.2-.3-.1-.1-.2-.4-.6-.9-.3-.5-.6-.9-.9-1.4 1.6-.6 2.7-1.4 3.5-2.4.8-1 1.1-2.1 1.1-3.3 0-1-.3-1.9-.8-2.6-.6-.7-1.2-1.2-2-1.4-.8-.2-2-.3-3.6-.3-.8 0-1.9 0-3.1.1-.8 0-1.7.1-2.7.1h-2.9c-1.4 0-2.2-.1-2.4-.1v1.2c1.2 0 2 .1 2.2.2zm24.2-1.5c-1.6 0-3.1 0-4.4-.1v1.3c1.1 0 1.7.1 1.9.1.2 0 .3.1.4.2.1.1.1.2.1.3.1.3.1 1.1.2 2.4v10.2c0 1 0 2.2-.1 3.4-.1.8-.1 1.3-.1 1.4 0 .1-.1.2-.1.2-.1.1-.2.1-.4.2-.2 0-.8.1-1.8.1v1.3c1.3-.1 2.7-.1 4.4-.1 1.9 0 3.6 0 5.3.1v-1.3c-1 0-1.6-.1-1.8-.1-.2 0-.4-.1-.5-.2-.1-.1-.2-.2-.2-.3-.1-.3-.2-1-.2-2V22.3c0-.2 0-1.5.1-4v-1.5c0-.5.1-.8.2-1 0-.1.1-.2.2-.2.1-.1.2-.1.4-.2.2 0 .8-.1 1.8-.1V14c-1.8.1-3.6.1-5.4.1zm11.7 21l4.5.1c2 0 3.8-.2 5.2-.7 1.4-.5 2.8-1.2 4-2.2 1.2-1 2.2-2.3 2.9-3.8.7-1.5 1.1-3.2 1.1-5.2 0-1.5-.2-2.9-.7-4.2-.3-.8-.7-1.5-1.2-2.1-.5-.7-1.2-1.2-2-1.7s-1.7-.8-2.8-1c-1.1-.2-2.5-.3-4.3-.3-.8 0-1.8 0-3.1.1-1.8.1-3 .1-3.6.1l-5.5-.1v1.2c1.1.1 1.7.2 1.9.3s.3.1.4.2c.1.1.1.1.1.2.1.4.2 1.3.2 2.7.1 2.6.1 4.5.1 5.9V27c0 3-.1 5.2-.2 6.6-.3.2-.7.5-1 .7-.2.1-.3.2-.4.2v.7l4.4-.1zm1.3-7.7v-3.5c0-4 .1-6.7.2-8.1.9-.1 1.8-.2 2.6-.2 2.1 0 3.6.2 4.6.5 1 .4 1.9.9 2.5 1.8.7.8 1.1 1.7 1.4 2.8.3 1.1.4 2.2.4 3.3 0 1.3-.1 2.4-.4 3.5-.3 1.1-.7 2-1.2 2.8-.5.8-1.1 1.4-1.7 1.8-.6.4-1.2.7-2 .9-1 .3-2.2.4-3.6.4-.9 0-1.8-.1-2.7-.2-.1-.8-.1-2.8-.1-5.8zm17.2 7.7l3.5.1V34c-1.2 0-1.9-.1-2.2-.3-.2-.1-.2-.3-.2-.5 0-.3.3-1.2.8-2.6l.7-1.8h7.8l1.3 3.3c.2.6.3 1 .3 1.2 0 .2-.1.3-.2.4-.2.1-.8.2-2.1.2v1.2l5.3-.1 4.2.1V34c-.3 0-.5-.1-.7-.1-.5 0-.8-.1-.9-.1-.1 0-.2-.1-.3-.2-.1-.1-.2-.2-.3-.4l-.6-1.4-.9-2.1-6.8-15.8h-2.2l-1.3 3.4-3.9 9.8c-.7 1.8-1.3 3.1-1.5 3.7-.6 1.3-.9 2.1-1 2.3-.1.2-.2.4-.3.5-.1.1-.2.2-.4.2s-.6.1-1.5.2v1.2l3.4-.1zm6.3-15.9l3.2 7.8H178.9l3.1-7.8zM63.1 1.8l.2.2c0 .1.1.2.1.4V8c0 .2.1.5.2.8.1.3.3.5.6.7.3.2.6.4 1 .5.6.2 1.2.3 1.8.3.6 0 1-.1 1.5-.2.4-.1.8-.3 1.1-.5.3-.2.5-.5.7-.8.2-.3.3-.6.3-1 .1-.4.1-.8.1-1.2V5.1 3.3c0-.8.1-1.2.1-1.3 0-.1.1-.2.1-.2.1-.1.3-.1.7-.1v-.5h-3v.5c.5 0 .8.1.9.1.1 0 .1.1.1.2s.1.4.1 1v3.3c0 .9-.1 1.5-.2 1.8-.1.3-.4.6-.7.8-.3.2-.8.3-1.4.3-.5 0-.9-.1-1.3-.2-.3-.2-.6-.3-.7-.6-.2-.2-.3-.6-.3-1V3.8c0-.9 0-1.5.1-1.7 0-.1.1-.2.1-.2.1-.1.4-.1.9-.1v-.6h-4.1v.5l1 .1zm11.3 8.3H77.5v-.6h-.1c-.1 0-.3 0-.6-.1-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V3.2c2.5 3.1 4.4 5.4 5.8 6.9.4.1.7.1 1.1.2l.1-.1c-.1-.6-.1-2.3-.1-5.1V3.4c0-.8.1-1.2.1-1.5 0 0 0-.1.1-.1.1-.1.4-.1.9-.1v-.5h-3v.5c.6 0 .9.1 1 .1.1 0 .1.1.1.3.1.4.1 1.7.1 4v1.5c-.6-.6-1.3-1.4-2.2-2.5-1.2-1.5-2.3-2.8-3.2-3.9h-2.7v.5c.4 0 .7.1.8.1.1 0 .2.1.2.1s.1.1.1.2V7.9c0 .6-.1 1-.1 1.2 0 .1 0 .2-.1.2l-.1.1c-.1 0-.4 0-.9.1v.6zM89 1.2h-1.8v.6c.5 0 .7 0 .8.1.1 0 .1 0 .2.1 0 0 0 .1.1.1 0 .1.1.5.1 1V7.4c0 .4 0 .9-.1 1.4v.6s0 .1-.1.1c0 0-.1.1-.2.1h-.8v.6h4v-.7h-.8c-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V4.7 3v-.6c0-.2 0-.3.1-.4 0 0 0-.1.1-.1 0 0 .1-.1.2-.1h.8v-.6H89zm10.1 8.9c.3-.7.8-2 1.5-3.7l.9-2 .5-1.1c.4-.9.6-1.4.7-1.4.1-.1.3-.1.7-.1v-.6h-3v.6H101.3s.1 0 .1.1v.4c0 .2-.2.5-.3 1-.3.7-.4 1.1-.5 1.2L99.2 8l-1.6-4v-.1l-.3-.6c-.3-.7-.4-1.1-.4-1.2 0-.1 0-.1.1-.2 0 0 .1-.1.2-.1.2 0 .4-.1.8-.1v-.5H93.8v.6c.4 0 .7 0 .8.1.1 0 .2.2.4.6.2.3.6 1.3 1.3 3l.9 2.2c.3.8.7 1.6 1 2.5h.9v-.1zm9.2-.1h4.3l.1-.1c0-.5 0-1.2.1-2.1h-.5c-.1.6-.2.9-.2 1.2 0 .1-.1.1-.1.1-.1.1-.3.1-.7.1h-2.5V5.8h1c.5 0 .8 0 1.1.1.1 0 .2.1.3.2.1.1.1.4.1.9h.5V4.2h-.5c0 .4 0 .6-.1.8 0 .1-.1.1-.1.1h-2.3V3.8c0-.7 0-1.4.1-1.8h1.2c.4 0 .8 0 1.2.1.3 0 .5.1.5.1l.1.1c0 .1 0 .4.1.9h.5c0-.5.1-.9.1-.9l.1-.9v-.1H106.1v.5c.5 0 .8.1.9.1l.1.1c0 .1.1.4.1.9V7c0 .3 0 .9-.1 1.6 0 .4 0 .7-.1.9-.2.1-.4.2-.6.4v.3c1.1-.2 1.8-.2 1.9-.2zm8.4-8.2l.1.1c0 .1.1.4.1 1v3.7l-.1 1.9c0 .3 0 .6-.1.7 0 .1 0 .1-.1.2l-.1.1c-.1 0-.4.1-.9.1v.6h4v-.7h-.7c-.1 0-.1 0-.2-.1l-.1-.1c0-.1-.1-.2-.1-.5V7.3v-2-2.4-1c.2 0 .4-.1.6-.1.5 0 .8 0 1 .1.3.1.5.3.7.5.2.3.3.6.3 1s-.1.7-.3 1c-.2.3-.4.5-.7.6-.3.1-.6.2-1.1.2l-.1.2c.1.1.3.2.4.4.3.4.6.9 1 1.5l1.4 2.2c.1.1.1.3.2.4h2.4v-.4c-.2 0-.3 0-.4-.1-.1 0-.1-.1-.2-.2s-.3-.3-.6-.7c0 0-.2-.2-.4-.6l-1-1.5s0-.1-.1-.1l-.2-.4c-.1-.2-.3-.4-.4-.6.7-.2 1.1-.6 1.5-1 .3-.4.5-.9.5-1.4 0-.4-.1-.8-.3-1.1-.2-.3-.5-.5-.8-.6-.3-.1-.8-.1-1.5-.1H115.8v.5c.5.2.8.2.9.2zm16.4.7c0-.3.1-.5.1-.8l-.1-.2c-.3-.2-.7-.3-1.1-.3-.4-.1-.9-.1-1.3-.1s-.9 0-1.3.1-.8.3-1.1.5c-.3.2-.6.5-.8.9-.2.4-.3.8-.3 1.3 0 .3.1.7.2.9.1.3.3.5.5.8.2.2.5.4.9.5.2.1.7.2 1.5.3.5.1.9.2 1.1.4.2.1.4.3.5.5.1.2.1.4.1.7 0 .3-.1.6-.2.9s-.4.4-.7.6c-.3.1-.7.2-1.1.2-.5 0-.9-.1-1.3-.3-.4-.2-.7-.4-.8-.7-.1-.5-.1-.8-.1-1.1h-.5c0 1-.1 1.7-.2 2.2.5.2.9.4 1.3.5.4.1.9.1 1.4.1.7 0 1.3-.1 1.8-.3.3-.1.6-.3.9-.6.3-.3.5-.5.7-.8.2-.4.3-.9.3-1.4 0-.3 0-.6-.1-.8-.1-.2-.2-.5-.3-.6-.1-.2-.3-.3-.5-.4-.2-.1-.5-.2-.8-.3-.1 0-.4-.1-.9-.2-.4-.1-.8-.1-1-.2-.3-.1-.6-.2-.7-.3-.2-.1-.3-.2-.4-.4-.1-.2-.1-.4-.1-.7 0-.4.2-.7.5-1 .3-.3.8-.4 1.3-.4.4 0 .8.1 1.1.2.3.1.6.3.7.5 0 .2.1.5.1 1h.5c.1-.6.1-1 .2-1.2zm5.6-1.3h-1.8v.6c.5 0 .7 0 .8.1.1 0 .1 0 .2.1 0 0 0 .1.1.1 0 .1.1.5.1 1V7.4c0 .4 0 .9-.1 1.4v.6s0 .1-.1.1c0 0-.1.1-.2.1h-.8v.6h4v-.7h-.8c-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V4.7 3v-.6c0-.2 0-.3.1-.4 0 0 0-.1.1-.1 0 0 .1-.1.2-.1h.8v-.6h-2.2zm8.8 8.8c.6 0 1.3 0 2.1.1v-.5c-.5 0-.8-.1-.9-.1-.1-.1-.2-.1-.2-.2 0-.2-.1-.7-.1-1.6V3.8 2.1h.9c.5 0 .9 0 1.3.1h.2s.1.1.1.3c0 .3.1.6.1.9h.5V2c0-.2 0-.4.1-.7l-.1-.1h-8l-.1.1c0 .2 0 .4.1.6v1.5h.5c0-.4 0-.7.1-1 0-.1 0-.2.1-.2 0 0 .1 0 .2-.1h2.1v5.5c0 .9 0 1.5-.1 1.6 0 .1-.1.2-.2.3-.1.1-.4.1-.9.1v.5c.9-.1 1.6-.1 2.2-.1zm10.4-6.4c-.3-.6-.6-1.1-.9-1.6-.2-.3-.4-.5-.5-.6-.1-.1-.3-.2-.6-.4-.2.1-.5.1-.7.2l-1.3.3V2h.6c.1 0 .2.2.5.4.3.3.7.8 1 1.4.5.7.9 1.4 1.3 2.2.2.3.2.5.2.6V9c0 .2 0 .3-.1.4 0 0-.1.1-.2.1s-.4 0-.8.1v.6h4.1v-.7c-.5 0-.8 0-.8-.1-.1 0-.2-.1-.2-.1 0-.1-.1-.2-.1-.4V6.7v-.5c0-.1.1-.3.2-.5.1-.3.5-.9 1.1-1.8.6-.9 1.1-1.7 1.7-2.4v-.3h-1c-.1.1-.2.4-.4.8-.7 1.2-1.1 1.9-1.2 2.1l-.8 1.3c-.3-.2-.6-.8-1.1-1.8z"/><g fill="#ffffff"><path d="M36.2 29.4v-8.7h8V15h-8V6.9H45V10h5.8V1.2H27.6v5.7h2.2v22.5h-2.2v5.7h10.7v-5.7h-2.1M24.6 22.3V6.9h2.1V1.2H16v5.7h2.1v13.5c0 5.7-.7 8.4-4.7 8.4S8.7 26 8.7 20.4V6.9h2.1V1.2H0v5.7h2.1v15.4c0 3.4 0 6.1 1.6 8.6 1.8 2.8 5 4.6 9.7 4.6 8.2 0 11.2-4.3 11.2-13.2z"/></g><path fill="#ffffff" d="M169.1 10c.1.4.4.6.7.8.3.2.8.3 1.4.3.5 0 .9-.1 1.3-.2s.8-.4 1.2-.7c.4-.3.7-.5.9-.8.3-.3.5-.8.7-1.5.2-.6.3-1.3.3-1.9 0-.3 0-.6-.1-.9-.1-.3-.2-.5-.4-.7-.2-.2-.4-.4-.8-.5-.3-.1-.7-.2-1.2-.2s-1 .1-1.4.3c-.4.2-.9.4-1.2.7-.4.3-.6.5-.8.7-.2.3-.5.8-.7 1.4-.2.7-.3 1.3-.3 1.9.2.5.3.9.4 1.3zm1.8-3.5c.2-.8.5-1.4.7-1.7.3-.3.6-.4 1-.4s.7.1.9.4c.2.3.4.7.4 1.3 0 .7-.1 1.4-.3 2.2-.1.5-.3.9-.5 1.2-.2.3-.4.5-.6.7-.2.1-.4.2-.7.2-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3.1-.6.2-1.4.4-2.2zm6.8-1.7h1l-1.1 5.5c-.3 1.5-.5 2.5-.7 3-.1.2-.2.4-.3.5-.1.1-.2.1-.4.1-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.3-.5h-.2c-.1.3-.1.5-.2.7-.1.2-.2.5-.3.9.2.1.4.1.6.1.2 0 .5-.1.7-.2.5-.2.9-.6 1.4-1.2.5-.5.8-1.2 1.1-1.9.3-.7.6-1.8 1-3.4l.8-3.5h1.8c0-.2.1-.5.2-.8l-.1-.1c-.1.2-.3.2-.7.2h-1.2c.1-.6.3-1.3.4-1.9.1-.2.1-.4.2-.5l.3-.3c.1-.1.2-.1.4-.1s.3.1.5.2.4.3.6.7h.2c.1-.6.2-1.2.4-1.9-.1-.2-.3-.2-.5-.2-.3 0-.5 0-.7.1-.2.1-.5.3-1 .7-.5.4-1 .8-1.4 1.2-.3.3-.5.5-.6.8-.1.2-.2.4-.3.9 0 .2-.1.3-.1.4-.2.1-.5.2-.8.3-.3.1-.6.2-.7.2l-.1.4c.1-.2.3-.2.5-.2z"/></symbol>
   <image src="/wp-content/themes/CLAS/assets/images/logo/UFlogoFooter.png" xlink:href="">
</symbol>



<symbol id="icon-arrow-left" viewBox="0 0 75 75">
<style>.cls-1{fill:#bc581a;}</style><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,1,0,37.5,37.72,37.72,0,0,1,37.5,0Zm0,5.2A32.39,32.39,0,1,0,69.8,37.5,32.28,32.28,0,0,0,37.5,5.2Zm2.87,48.09L27.63,40.55H57.06V34.63H27.63L40.37,22.07l-4.13-4.31L17,37.5l19.2,20.1Z"/></g></g>
</symbol>


<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 53.5" id="caret" class="icon-caret"><path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" d="M5 5l21.9 21.7L5 48.5"/></symbol>



<symbol id="icon-arrow-left" viewBox="0 0 75 75">
<style>.cls-1{fill:#bc581a;}</style><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,1,0,37.5,37.72,37.72,0,0,1,37.5,0Zm0,5.2A32.39,32.39,0,1,0,69.8,37.5,32.28,32.28,0,0,0,37.5,5.2Zm2.87,48.09L27.63,40.55H57.06V34.63H27.63L40.37,22.07l-4.13-4.31L17,37.5l19.2,20.1Z"/></g></g>
</symbol>

<symbol id="header-line" class="icon-header-line" viewBox="0 0 9.3327619 5.4591612">
  <rect
     y="4.5054784"
     x="1.0463169"
     height="0.90736622"
     width="199.90736"
     id="rect3140"
     style="fill:#bc581a;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.09263377px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />


</symbol>

<symbol id="icon-arrow-right" viewBox="0 0 75 75">
<style>.cls-1{fill:#f45a1d;}</style>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M75,37.5A37.5,37.5,0,1,1,37.5,0,37.6,37.6,0,0,1,75,37.5Zm-69.8,0A32.3,32.3,0,1,0,37.5,5.2,32.31,32.31,0,0,0,5.2,37.5ZM38.76,57.6,58,37.5,38.76,17.76l-4.13,4.31L47.37,34.63H17.94v5.92H47.37L34.63,53.29Z"/></g></g>
</symbol>

<symbol id="icon-search" viewBox="0 0 30 32">
<path class="path1" d="M20.571 14.857q0-3.304-2.348-5.652t-5.652-2.348-5.652 2.348-2.348 5.652 2.348 5.652 5.652 2.348 5.652-2.348 2.348-5.652zM29.714 29.714q0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884 0.991-4.884 2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607z"></path>
</symbol>

<symbol id="icon-search-thin-open" viewBox="0 0 28 28">
  <g
     transform="translate(-1869.000000, -24.000000)"
     fill-rule="evenodd"
     fill="none"
     stroke-width="1"
     stroke="none"
     id="About">
    <g
       fill-rule="nonzero"
       fill="#FFFFFF"
       transform="translate(1868.000000, 23.000000)"
       id="Page-1_3_">
      <path
         id="Fill-1_2_"
         d="M11.5,20 C6.84009742,20 3.0625,16.2224026 3.0625,11.5625 C3.0625,6.90259742 6.84009742,3.125 11.5,3.125 C13.7492514,3.14517458 15.9018825,4.04210421 17.5,5.625 C19.8969754,8.04510193 20.6036971,11.6691004 19.291669,14.812501 C17.979641,17.9559015 14.9062267,20.0021042 11.5,20 Z M29,27.625 L19.5,18.125 C22.8835371,14.0250372 22.6134522,8.0291525 18.875,4.25 C14.8364177,0.211417912 8.28858233,0.211417981 4.25000015,4.25000015 C0.211417981,8.28858233 0.211417912,14.8364177 4.25,18.875 C6.15789175,20.8196847 8.77583644,21.9029722 11.5,21.875 C13.9161343,21.8709815 16.256612,21.0319423 18.125,19.5 L27.625,29 L29,27.625 Z" />
    </g>
  </g>
</symbol>

<symbol id="journeys-begin" class="icon-journeys-begin"  viewBox="0 0 334 66">


    <defs>
        <polygon id="path-1" points="0 65.5555556 333.333333 65.5555556 333.333333 0.813333333 0 0.813333333"></polygon>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Depaertments" transform="translate(-82.000000, -5847.000000)">
            <g id="Group-16" transform="translate(0.000000, 5560.000000)">
                <g id="Group-3" transform="translate(82.666667, 286.666667)">
                    <path d="M0,40.9501111 L333.333333,40.9501111 L333.333333,1.11122222 L0,1.11122222 L0,40.9501111 Z M2.29888889,38.6512222 L331.034444,38.6512222 L331.034444,3.409 L2.29888889,3.409 L2.29888889,38.6512222 Z" id="Fill-1" fill="#FF5A0E"></path>
                    <g id="Group-56" transform="translate(0.000000, 0.297889)">
                        <path d="M23.0181111,22.118 C23.0181111,25.8924444 21.6858889,27.5946667 18.5003333,27.5946667 C17.0403333,27.5946667 15.4447778,27.1146667 14.0292222,26.4157778 L14.8336667,23.8413333 C15.9036667,24.1702222 16.7136667,24.3668889 17.6714444,24.3668889 C18.8503333,24.3668889 19.4614444,23.7113333 19.4614444,22.118 L19.4614444,14.0902222 L23.0181111,14.0902222 L23.0181111,22.118 Z" id="Fill-2" fill="#FFFFFF"></path>
                        <path d="M39.2231111,20.7671111 C39.2231111,18.3004444 38.0653333,17.056 36.1008889,17.056 C34.1186667,17.056 32.9608889,18.3004444 32.9608889,20.7671111 C32.9608889,23.1671111 34.1186667,24.4093333 36.1008889,24.4093333 C38.0653333,24.4093333 39.2231111,23.1671111 39.2231111,20.7671111 M42.8231111,20.7671111 C42.8231111,25.1504444 40.2908889,27.5948889 36.1008889,27.5948889 C31.8931111,27.5948889 29.3608889,25.1504444 29.3608889,20.7671111 C29.3608889,16.3582222 31.8931111,13.8704444 36.1008889,13.8704444 C40.2908889,13.8704444 42.8231111,16.3582222 42.8231111,20.7671111" id="Fill-4" fill="#FFFFFF"></path>
                        <path d="M61.2098889,21.0486667 C61.2098889,25.4786667 59.2243333,27.5953333 55.1221111,27.5953333 C51.0432222,27.5953333 49.0565556,25.4786667 49.0565556,21.0486667 L49.0565556,14.0897778 L52.6143333,14.0897778 L52.6143333,21.0486667 C52.6143333,23.3175556 53.4632222,24.4086667 55.1221111,24.4086667 C56.8032222,24.4086667 57.6521111,23.3175556 57.6521111,21.0486667 L57.6521111,14.0897778 L61.2098889,14.0897778 L61.2098889,21.0486667 Z" id="Fill-6" fill="#FFFFFF"></path>
                        <path d="M73.4434444,20.9184444 C74.929,20.9184444 75.7578889,20.2417778 75.7578889,19.0628889 C75.7578889,17.8417778 74.929,17.144 73.4434444,17.144 L71.4367778,17.144 L71.4367778,20.9184444 L73.4434444,20.9184444 Z M79.7056667,27.3984444 L75.909,27.3984444 L73.249,23.6895556 L71.4367778,23.6895556 L71.4367778,27.3984444 L67.8812222,27.3984444 L67.8812222,14.0895556 L73.4001111,14.0895556 C77.1545556,14.0895556 79.2701111,15.8773333 79.2701111,19.0628889 C79.2701111,21.0062222 78.3756667,22.3806667 76.7378889,23.1006667 L79.7056667,27.114 L79.7056667,27.3984444 Z" id="Fill-8" fill="#FFFFFF"></path>
                        <polygon id="Fill-10" fill="#FFFFFF" points="94.6918889 27.3985556 89.0618889 19.8941111 89.0618889 27.3985556 85.5041111 27.3985556 85.5041111 14.0896667 88.7318889 14.0896667 94.363 21.683 94.363 14.0896667 97.9196667 14.0896667 97.9196667 27.3985556"></polygon>
                        <polygon id="Fill-12" fill="#FFFFFF" points="105.003222 27.3985556 105.003222 14.0896667 114.823222 14.0896667 114.823222 17.3185556 108.561 17.3185556 108.561 19.3252222 113.904333 19.3252222 113.904333 22.3807778 108.561 22.3807778 108.561 24.2341111 114.997667 24.2341111 114.997667 27.3985556"></polygon>
                        <path d="M128.715333,27.3985556 L125.179778,27.3985556 L125.179778,23.2085556 L120.186444,14.0896667 L123.916444,14.0896667 L126.140889,18.2796667 C126.446444,18.8452222 126.729778,19.413 126.949778,19.9574444 C127.167556,19.413 127.452,18.8452222 127.754222,18.2796667 L129.979778,14.0896667 L133.712,14.0896667 L128.715333,23.2085556 L128.715333,27.3985556 Z" id="Fill-14" fill="#FFFFFF"></path>
                        <path d="M147.843444,17.7326667 C145.793444,16.9682222 144.681222,16.7293333 143.523444,16.7293333 C142.759,16.7293333 142.127889,17.0348889 142.127889,17.6026667 C142.127889,18.2137778 142.629,18.4515556 145.485667,19.4126667 C148.193444,20.3293333 149.064556,21.3326667 149.064556,23.5593333 C149.064556,25.9804444 147.299,27.5948889 144.180111,27.5948889 C142.454556,27.5948889 139.727889,26.8971111 137.893444,25.7848889 L139.225667,23.0126667 C141.254556,24.1248889 142.693444,24.5626667 143.980111,24.5626667 C144.766778,24.5626667 145.204556,24.2337778 145.204556,23.6682222 C145.204556,23.1004444 144.856778,22.8826667 142.281222,22.1182222 C139.706778,21.3537778 138.485667,19.9148889 138.485667,17.8626667 C138.485667,15.596 140.120111,13.8704444 143.131222,13.8704444 C144.833444,13.8704444 146.534556,14.0904444 148.891222,15.1371111 L147.843444,17.7326667 Z" id="Fill-16" fill="#FFFFFF"></path>
                        <path d="M168.149444,24.452 L170.047222,24.452 C171.420556,24.452 172.206111,23.9742222 172.206111,23.1431111 C172.206111,22.3808889 171.507222,21.9431111 170.287222,21.9431111 L168.149444,21.9431111 L168.149444,24.452 Z M168.149444,19.1953333 L170.287222,19.1953333 C171.159444,19.1953333 171.661667,18.8242222 171.661667,18.1464444 C171.661667,17.4275556 171.006111,17.0342222 169.872778,17.0342222 L168.149444,17.0342222 L168.149444,19.1953333 Z M169.872778,14.0897778 C173.167222,14.0897778 175.020556,15.442 175.020556,17.8197778 C175.020556,19.0864444 174.256111,19.9575556 173.012778,20.3742222 C174.932778,20.852 175.893889,21.9886667 175.893889,23.602 C175.893889,26.0231111 173.753889,27.3986667 169.938333,27.3986667 L164.589444,27.3986667 L164.589444,14.0897778 L169.872778,14.0897778 Z" id="Fill-18" fill="#FFFFFF"></path>
                        <polygon id="Fill-20" fill="#FFFFFF" points="181.975889 27.3985556 181.975889 14.0896667 191.792556 14.0896667 191.792556 17.3185556 185.533667 17.3185556 185.533667 19.3252222 190.879222 19.3252222 190.879222 22.3807778 185.533667 22.3807778 185.533667 24.2341111 191.968111 24.2341111 191.968111 27.3985556"></polygon>
                        <path d="M210.684111,25.9358889 C208.305222,27.1147778 206.405222,27.5947778 204.225222,27.5947778 C200.233,27.5947778 197.699667,25.1503333 197.699667,20.767 C197.699667,16.6414444 200.341889,13.8703333 204.334111,13.8703333 C205.993,13.8703333 208.217444,14.2425556 210.091889,15.0703333 L209.197444,17.7114444 C207.519667,17.2525556 206.210778,16.9681111 204.660778,16.9681111 C202.631889,16.9681111 201.303,18.497 201.303,20.767 C201.303,23.167 202.457444,24.4525556 204.379667,24.4525556 C205.446333,24.4525556 206.428556,24.3881111 207.607444,23.9503333 L207.607444,22.6203333 L204.204111,22.6203333 L204.204111,19.827 L210.684111,19.827 L210.684111,25.9358889 Z" id="Fill-22" fill="#FFFFFF"></path>
                        <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <g id="Clip-25"></g>
                        <polygon id="Fill-24" fill="#FFFFFF" points="217.266667 27.3988889 220.823333 27.3988889 220.823333 14.09 217.266667 14.09"></polygon>
                        <polygon id="Fill-26" fill="#FFFFFF" points="237.118 27.3985556 231.488 19.8941111 231.488 27.3985556 227.932444 27.3985556 227.932444 14.0896667 231.161333 14.0896667 236.789111 21.683 236.789111 14.0896667 240.345778 14.0896667 240.345778 27.3985556"></polygon>
                        <polygon id="Fill-27" fill="#FFFFFF"  points="264.687444 27.3985556 264.687444 22.3152222 259.669667 22.3152222 259.669667 27.3985556 256.113 27.3985556 256.113 14.0896667 259.669667 14.0896667 259.669667 19.0863333 264.687444 19.0863333 264.687444 14.0896667 268.245222 14.0896667 268.245222 27.3985556"></polygon>
                        <polygon id="Fill-28" fill="#FFFFFF"  points="275.328222 27.3985556 275.328222 14.0896667 285.144889 14.0896667 285.144889 17.3185556 278.886 17.3185556 278.886 19.3252222 284.231556 19.3252222 284.231556 22.3807778 278.886 22.3807778 278.886 24.2341111 285.320444 24.2341111 285.320444 27.3985556"></polygon>
                        <path d="M297.251,20.9184444 C298.735444,20.9184444 299.563222,20.2417778 299.563222,19.0628889 C299.563222,17.8417778 298.735444,17.144 297.251,17.144 L295.244333,17.144 L295.244333,20.9184444 L297.251,20.9184444 Z M303.513222,27.3984444 L299.715444,27.3984444 L297.054333,23.6895556 L295.244333,23.6895556 L295.244333,27.3984444 L291.687667,27.3984444 L291.687667,14.0895556 L297.206556,14.0895556 C300.959889,14.0895556 303.075444,15.8773333 303.075444,19.0628889 C303.075444,21.0062222 302.181,22.3806667 300.545444,23.1006667 L303.513222,27.114 L303.513222,27.3984444 Z" id="Fill-29" fill="#FFFFFF" ></path>
                        <polygon id="Fill-30" fill="#FFFFFF" points="309.309333 27.3985556 309.309333 14.0896667 319.129333 14.0896667 319.129333 17.3185556 312.869333 17.3185556 312.869333 19.3252222 318.212667 19.3252222 318.212667 22.3807778 312.869333 22.3807778 312.869333 24.2341111 319.303778 24.2341111 319.303778 27.3985556"></polygon>
                        <path d="M45.791,63.418 C47.2398889,63.1168889 48.6354444,62.9057778 49.6776667,62.8357778 C51.391,62.7291111 51.9921111,63.4713333 52.1154444,64.638 L50.6665556,65.5557778 C50.331,64.3013333 49.9421111,64.0368889 48.8654444,64.0024444 C47.9454444,63.9657778 47.0098889,64.0535556 45.7376667,64.2135556 L45.791,63.418 Z M48.1576667,51.2457778 C46.4098889,51.2457778 45.261,52.3246667 45.031,54.0546667 L44.4665556,58.0124444 C44.2187778,59.8313333 45.0132222,60.6813333 46.7632222,60.6813333 L48.0165556,60.6813333 C49.7654444,60.6813333 50.8965556,59.7257778 51.161,57.9246667 L51.7265556,53.9502222 C51.9921111,52.1113333 51.1787778,51.2457778 49.4298889,51.2457778 L48.1576667,51.2457778 Z M49.7832222,49.6024444 C52.6632222,49.6024444 54.0054444,51.388 53.5987778,54.2324444 L53.1054444,57.8546667 C52.6987778,60.6624444 50.9143333,62.3402222 48.0521111,62.3402222 L46.4976667,62.3402222 C43.5832222,62.3402222 42.2043333,60.5735556 42.5932222,57.7646667 L43.0876667,54.1446667 C43.4943333,51.2824444 45.2787778,49.6024444 48.211,49.6024444 L49.7832222,49.6024444 Z" id="Fill-31" fill="#FFFFFF"></path>
                        <path d="M63.7114444,59.9213333 C63.6236667,60.538 63.8003333,60.8746667 64.507,60.8746667 L65.3014444,60.8746667 L65.1425556,62.0757778 C64.5236667,62.2535556 64.047,62.3057778 63.5703333,62.3057778 C62.8103333,62.3057778 61.9092222,62.0224444 61.8747778,60.7335556 L61.9092222,60.5035556 C60.6558889,61.2802222 59.1892222,62.1457778 57.7403333,62.1457778 L57.5281111,62.1457778 C55.8858889,62.1457778 55.3381111,61.5446667 55.6025556,59.638 L56.3803333,54.3913333 C56.1858889,54.3724444 55.8147778,54.3391111 55.037,54.2857778 L55.1792222,52.978 L58.3758889,52.978 L57.5814444,58.7902222 C57.3514444,60.3102222 57.4581111,60.5913333 58.5714444,60.5913333 L58.7825556,60.5913333 C59.7725556,60.5913333 60.8492222,60.0091111 61.9447778,59.2835556 L62.7047778,54.3913333 C62.5281111,54.3724444 62.1392222,54.3391111 61.3625556,54.2857778 L61.5036667,52.978 L64.7014444,52.978 L63.7114444,59.9213333 Z" id="Fill-32" fill="#FFFFFF" ></path>
                        <path d="M73.6278889,55.9451111 C73.8045556,54.6562222 73.0801111,54.0717778 71.7734444,54.0717778 L71.2434444,54.0717778 C69.8823333,54.0717778 68.929,54.814 68.7523333,56.1584444 L68.6101111,57.0951111 L73.469,57.0951111 L73.6278889,55.9451111 Z M71.949,52.7662222 C74.4756667,52.7662222 75.5534444,53.984 75.2178889,56.3862222 L74.9356667,58.4006667 L68.4345556,58.4006667 L68.3278889,59.0717778 C68.1512222,60.434 68.8401111,60.9984444 70.1301111,60.9984444 L70.8545556,60.9984444 C71.7378889,60.9984444 72.479,60.734 72.9034444,60.0262222 L73.0267778,59.7973333 L74.4756667,59.7973333 L74.3167778,61.0517778 C73.3978889,61.9517778 72.0201111,62.3406667 70.6956667,62.3406667 L70.0945556,62.3406667 C67.2856667,62.3406667 66.2612222,61.104 66.6501111,58.3828889 L66.9145556,56.4573333 C67.2678889,53.9673333 68.769,52.7662222 71.3667778,52.7662222 L71.949,52.7662222 Z" id="Fill-33" fill="#FFFFFF" ></path>
                        <path d="M77.0952222,55.115 C77.343,53.4727778 78.5796667,52.7661111 80.9118889,52.7661111 L81.2118889,52.7661111 C82.113,52.7661111 83.7552222,52.9605556 84.7985556,53.455 L84.533,55.5561111 L83.0485556,55.5561111 L83.1018889,54.3561111 C82.5018889,54.0916667 81.7418889,54.0205556 81.053,54.0205556 C79.6218889,54.0205556 78.8618889,54.4094444 78.7385556,55.2383333 L78.7385556,55.3627778 C78.5974444,56.2994444 79.1452222,56.2627778 81.5118889,56.7583333 C83.7385556,57.1816667 84.4441111,57.7305556 84.2496667,59.1427778 L84.1974444,59.6038889 C83.9141111,61.5805556 82.6963333,62.3405556 80.4341111,62.3405556 L79.7452222,62.3405556 C78.8263333,62.3405556 77.2541111,62.1827778 76.2652222,61.0683333 L76.513,59.3027778 L77.8907778,59.3027778 L77.8552222,60.4505556 C78.3318889,60.9983333 79.2863333,61.0327778 79.8341111,61.0327778 L80.4163333,61.0327778 C81.6174444,61.0327778 82.3252222,60.6105556 82.4652222,59.5672222 L82.5018889,59.3372222 C82.6252222,58.4538889 82.113,58.3494444 79.8507778,57.8883333 C77.4141111,57.4472222 76.8652222,56.8472222 77.0596667,55.4861111 L77.0952222,55.115 Z" id="Fill-34" fill="#FFFFFF" ></path>
                        <path d="M89.3961111,60.7855556 C90.0316667,60.7855556 90.4561111,60.7855556 91.0916667,60.7344444 L91.0038889,61.8111111 C90.2272222,62.1466667 89.2561111,62.34 88.3538889,62.34 L88.1605556,62.34 C86.7816667,62.34 86.1983333,61.5455556 86.4461111,59.8322222 L87.2227778,54.3555556 L86.0583333,54.3555556 L86.2338889,52.9777778 L87.1183333,52.9777778 C87.4527778,52.9777778 87.595,52.8366667 87.6294444,52.5366667 L87.9472222,50.4344444 C88.6905556,50.3277778 89.0083333,50.2922222 89.6083333,50.2755556 L89.2561111,52.9777778 L91.9405556,52.9777778 L91.7638889,54.3555556 L89.0605556,54.3555556 L88.3894444,59.0722222 C88.2127778,60.4866667 88.3183333,60.7855556 89.2372222,60.7855556 L89.3961111,60.7855556 Z" id="Fill-35" fill="#FFFFFF" ></path>
                        <path d="M96.9422222,50.593 C96.8722222,51.1407778 96.3766667,51.4752222 95.7944444,51.4752222 C95.1588889,51.4752222 94.7177778,51.0341111 94.8044444,50.3985556 C94.8766667,49.833 95.3888889,49.4985556 95.9533333,49.4985556 C96.59,49.4985556 97.0311111,49.9396667 96.9422222,50.593 Z M95.4766667,59.9218889 C95.3888889,60.5385556 95.5655556,60.8752222 96.2711111,60.8752222 L97.0133333,60.8752222 L96.8544444,62.023 C96.2177778,62.2874444 95.76,62.3063333 95.3,62.3063333 C94.2933333,62.3063333 93.3566667,61.793 93.6044444,60.203 L94.47,54.4096667 C94.0811111,54.373 93.6922222,54.3196667 93.3211111,54.2852222 L93.4633333,52.9774444 L96.4655556,52.9774444 L95.4766667,59.9218889 Z" id="Fill-36" fill="#FFFFFF""></path>
                        <path d="M102.723556,60.9624444 C104.101333,60.9624444 104.984667,60.2202222 105.179111,58.9146667 L105.550222,56.1224444 C105.744667,54.7968889 105.126889,54.1446667 103.748,54.1446667 L102.900222,54.1446667 C101.522444,54.1446667 100.674667,54.8846667 100.480222,56.2291111 L100.073556,59.0191111 C99.8968889,60.3268889 100.498,60.9624444 101.875778,60.9624444 L102.723556,60.9624444 Z M101.804667,62.3402222 C99.0491111,62.3402222 97.9713333,61.0324444 98.3435556,58.4002222 L98.5724444,56.6702222 C98.9602222,54.0013333 100.303556,52.7668889 103.076889,52.7668889 L103.924667,52.7668889 C106.645778,52.7668889 107.670222,54.0913333 107.299111,56.7746667 L107.070222,58.5068889 C106.681333,61.1391111 105.355778,62.3402222 102.653556,62.3402222 L101.804667,62.3402222 Z" id="Fill-37" fill="#FFFFFF" ></path>
                        <path d="M111.632,54.4796667 C112.922,53.5963333 114.317556,52.7663333 115.766444,52.7663333 L115.960889,52.7663333 C117.497556,52.7663333 118.133111,53.4896667 117.868667,55.2752222 L117.196444,59.9207778 C117.126444,60.5385556 117.285333,60.8752222 117.992,60.8752222 L118.752,60.8752222 L118.593111,62.0752222 C117.974222,62.253 117.497556,62.3063333 117.020889,62.3063333 C116.260889,62.3063333 115.129778,62.0052222 115.324222,60.4141111 L115.925333,56.1396667 C116.136444,54.5863333 116.013111,54.3196667 114.899778,54.3196667 L114.687556,54.3196667 C113.716444,54.3196667 112.656444,54.8852222 111.526444,55.6274444 L110.536444,62.1463333 L108.699778,62.1463333 L109.865333,54.4096667 C109.476444,54.373 109.087556,54.3196667 108.716444,54.2852222 L108.858667,52.9774444 L111.862,52.9774444 L111.632,54.4796667 Z" id="Fill-38" fill="#FFFFFF" ></path>
                        <path d="M125.772556,55.275 C127.044778,55.275 127.892556,56.1927778 127.892556,57.3938889 C127.892556,58.595 127.044778,59.5138889 125.772556,59.5138889 C124.500333,59.5138889 123.652556,58.595 123.652556,57.3938889 C123.652556,56.1927778 124.500333,55.275 125.772556,55.275" id="Fill-39" fill="#FF5A0E" ></path>
                        <path d="M142.312333,53.7543333 C142.542333,52.1643333 141.817889,51.3521111 140.192333,51.3521111 L136.889,51.3521111 L135.581222,60.5743333 L138.832333,60.5743333 C140.457889,60.5743333 141.482333,59.6743333 141.711222,58.1021111 L142.312333,53.7543333 Z M140.510111,49.7798889 C143.407889,49.7965556 144.591222,51.1587778 144.185667,54.021 L143.620111,58.0654444 C143.213444,60.8921111 141.711222,62.1465556 138.867889,62.1465556 L131.977889,62.1465556 L132.136778,60.7676667 C132.772333,60.6976667 133.284556,60.6621111 133.620111,60.6276667 L134.997889,51.2643333 C134.645667,51.2287778 134.185667,51.211 133.514556,51.141 L133.673444,49.7798889 L140.510111,49.7798889 Z" id="Fill-40" fill="#FFFFFF" ></path>
                        <path d="M149.385889,50.593 C149.314778,51.1407778 148.820333,51.4752222 148.237,51.4752222 C147.601444,51.4752222 147.160333,51.0341111 147.248111,50.3985556 C147.319222,49.833 147.831444,49.4985556 148.395889,49.4985556 C149.032556,49.4985556 149.473667,49.9396667 149.385889,50.593 Z M147.919222,59.9218889 C147.831444,60.5385556 148.008111,60.8752222 148.714778,60.8752222 L149.455889,60.8752222 L149.297,62.023 C148.661444,62.2874444 148.202556,62.3063333 147.742556,62.3063333 C146.735889,62.3063333 145.799222,61.793 146.047,60.203 L146.912556,54.4096667 C146.523667,54.373 146.134778,54.3196667 145.763667,54.2852222 L145.905889,52.9774444 L148.908111,52.9774444 L147.919222,59.9218889 Z" id="Fill-41" fill="#FFFFFF" ></path>
                        <path d="M151.437667,55.115 C151.685444,53.4727778 152.922111,52.7661111 155.254333,52.7661111 L155.554333,52.7661111 C156.455444,52.7661111 158.097667,52.9605556 159.141,53.455 L158.875444,55.5561111 L157.391,55.5561111 L157.444333,54.3561111 C156.844333,54.0916667 156.084333,54.0205556 155.395444,54.0205556 C153.964333,54.0205556 153.204333,54.4094444 153.081,55.2383333 L153.081,55.3627778 C152.939889,56.2994444 153.487667,56.2627778 155.854333,56.7583333 C158.081,57.1816667 158.786556,57.7305556 158.592111,59.1427778 L158.539889,59.6038889 C158.256556,61.5805556 157.038778,62.3405556 154.776556,62.3405556 L154.087667,62.3405556 C153.168778,62.3405556 151.596556,62.1827778 150.607667,61.0683333 L150.855444,59.3027778 L152.233222,59.3027778 L152.197667,60.4505556 C152.674333,60.9983333 153.628778,61.0327778 154.176556,61.0327778 L154.758778,61.0327778 C155.959889,61.0327778 156.667667,60.6105556 156.807667,59.5672222 L156.844333,59.3372222 C156.967667,58.4538889 156.455444,58.3494444 154.193222,57.8883333 C151.756556,57.4472222 151.207667,56.8472222 151.402111,55.4861111 L151.437667,55.115 Z" id="Fill-42" fill="#FFFFFF"></path>
                        <path d="M167.854778,61.033 C166.935889,61.8452222 165.593667,62.3407778 164.303667,62.3407778 L163.332556,62.3407778 C160.859222,62.3407778 159.922556,61.123 160.258111,58.7007778 L160.611444,56.2452222 C160.929222,53.9496667 162.449222,52.7663333 164.710333,52.7663333 L165.434778,52.7663333 C166.671444,52.7663333 167.642556,52.9952222 168.738111,53.4018889 L168.420333,55.9818889 L167.042556,55.9818889 L167.094778,54.4796667 C166.405889,54.2318889 165.911444,54.1618889 164.869222,54.1618889 C163.491444,54.1618889 162.643667,54.8507778 162.413667,56.4574444 L162.060333,58.8785556 C161.865889,60.4141111 162.519222,60.8918889 163.809222,60.8918889 L164.392556,60.8918889 C165.258111,60.8918889 166.017,60.5741111 166.441444,59.8685556 L166.547,59.6907778 L168.013667,59.6907778 L167.854778,61.033 Z" id="Fill-43" fill="#FFFFFF" ></path>
                        <path d="M174.077667,60.9624444 C175.455444,60.9624444 176.338778,60.2202222 176.533222,58.9146667 L176.904333,56.1224444 C177.098778,54.7968889 176.481,54.1446667 175.102111,54.1446667 L174.254333,54.1446667 C172.876556,54.1446667 172.028778,54.8846667 171.834333,56.2291111 L171.427667,59.0191111 C171.251,60.3268889 171.852111,60.9624444 173.229889,60.9624444 L174.077667,60.9624444 Z M173.158778,62.3402222 C170.403222,62.3402222 169.325444,61.0324444 169.696556,58.4002222 L169.926556,56.6702222 C170.314333,54.0013333 171.657667,52.7668889 174.431,52.7668889 L175.279889,52.7668889 C177.999889,52.7668889 179.024333,54.0913333 178.653222,56.7746667 L178.424333,58.5068889 C178.035444,61.1391111 176.709889,62.3402222 174.007667,62.3402222 L173.158778,62.3402222 Z" id="Fill-44" fill="#FFFFFF" ></path>
                        <path d="M190.442111,54.3023333 C189.929889,54.3556667 189.469889,54.3923333 189.046556,54.4256667 L184.806556,62.1467778 L182.881,62.1467778 L180.902111,54.3923333 C180.531,54.3723333 180.142111,54.3201111 179.701,54.2856667 L179.842111,52.9778889 L184.169889,52.9778889 L184.011,54.2856667 C183.552111,54.3023333 183.181,54.339 182.792111,54.3556667 L184.135444,60.5567778 L184.152111,60.5567778 L187.526556,54.3923333 C187.174333,54.3723333 186.784333,54.3201111 186.343222,54.2856667 L186.484333,52.9778889 L190.583222,52.9778889 L190.442111,54.3023333 Z" id="Fill-45" fill="#FFFFFF" ></path>
                        <path d="M197.514667,55.9451111 C197.691333,54.6562222 196.966889,54.0717778 195.660222,54.0717778 L195.130222,54.0717778 C193.769111,54.0717778 192.815778,54.814 192.639111,56.1584444 L192.496889,57.0951111 L197.355778,57.0951111 L197.514667,55.9451111 Z M195.836889,52.7662222 C198.362444,52.7662222 199.439111,53.984 199.104667,56.3862222 L198.822444,58.4006667 L192.321333,58.4006667 L192.214667,59.0717778 C192.038,60.434 192.725778,60.9984444 194.016889,60.9984444 L194.741333,60.9984444 C195.624667,60.9984444 196.365778,60.734 196.790222,60.0262222 L196.913556,59.7973333 L198.362444,59.7973333 L198.203556,61.0517778 C197.284667,61.9517778 195.906889,62.3406667 194.582444,62.3406667 L193.980222,62.3406667 C191.172444,62.3406667 190.148,61.104 190.536889,58.3828889 L190.801333,56.4573333 C191.154667,53.9673333 192.655778,52.7662222 195.253556,52.7662222 L195.836889,52.7662222 Z" id="Fill-46" fill="#FFFFFF"></path>
                        <path d="M203.595889,54.6565556 C204.657,53.5065556 205.504778,52.8898889 206.759222,52.8898889 L207.588111,52.8898889 L207.377,54.5865556 C206.882556,54.6032222 206.422556,54.6198889 206.052556,54.6565556 C205.115889,54.6732222 204.373667,54.9743333 203.455889,55.8921111 L202.519222,62.1465556 L200.680333,62.1465556 L201.848111,54.4087778 C201.459222,54.3732222 201.070333,54.3198889 200.699222,54.2854444 L200.841444,52.9776667 L203.843667,52.9776667 L203.595889,54.6565556 Z" id="Fill-47" fill="#FFFFFF" "></path>
                        <path d="M213.495,55.275 C214.767222,55.275 215.615,56.1927778 215.615,57.3938889 C215.615,58.595 214.767222,59.5138889 213.495,59.5138889 C212.222778,59.5138889 211.375,58.595 211.375,57.3938889 C211.375,56.1927778 212.222778,55.275 213.495,55.275" id="Fill-48" fill="#FF5A0E" ></path>
                        <path d="M229.841,60.6271111 C228.709889,61.7582222 227.103222,62.3404444 225.531,62.3404444 L224.329889,62.3404444 C221.466556,62.3404444 220.265444,60.9793333 220.654333,58.0826667 L221.219889,54.0382222 C221.625444,51.0882222 223.268778,49.6026667 226.148778,49.6026667 L226.891,49.6026667 C228.163222,49.6026667 229.576556,49.746 231.113222,50.2915556 L230.688778,53.4893333 L229.116556,53.4893333 L229.187667,51.4926667 C228.286556,51.1582222 227.315444,51.1748889 226.113222,51.1748889 C224.452111,51.1748889 223.393222,52.1815556 223.145444,54.0204444 L222.545444,58.3126667 C222.297667,59.9915556 223.038778,60.7337778 224.664333,60.7337778 L225.565444,60.7337778 C226.873222,60.7337778 227.808778,60.1671111 228.427667,59.0893333 L230.017667,59.1426667 L229.841,60.6271111 Z" id="Fill-49" fill="#FFFFFF" ></path>
                        <path d="M236.312444,60.9624444 C237.690222,60.9624444 238.573556,60.2202222 238.768,58.9146667 L239.139111,56.1224444 C239.333556,54.7968889 238.715778,54.1446667 237.336889,54.1446667 L236.489111,54.1446667 C235.111333,54.1446667 234.263556,54.8846667 234.069111,56.2291111 L233.662444,59.0191111 C233.485778,60.3268889 234.086889,60.9624444 235.464667,60.9624444 L236.312444,60.9624444 Z M235.393556,62.3402222 C232.638,62.3402222 231.560222,61.0324444 231.931333,58.4002222 L232.161333,56.6702222 C232.549111,54.0013333 233.892444,52.7668889 236.665778,52.7668889 L237.514667,52.7668889 C240.234667,52.7668889 241.259111,54.0913333 240.888,56.7746667 L240.659111,58.5068889 C240.270222,61.1391111 238.944667,62.3402222 236.242444,62.3402222 L235.393556,62.3402222 Z" id="Fill-50" fill="#FFFFFF" ></path>
                        <path d="M245.221333,54.4796667 C246.511333,53.5963333 247.906889,52.7663333 249.355778,52.7663333 L249.550222,52.7663333 C251.086889,52.7663333 251.722444,53.4896667 251.458,55.2752222 L250.785778,59.9207778 C250.715778,60.5385556 250.874667,60.8752222 251.581333,60.8752222 L252.341333,60.8752222 L252.182444,62.0752222 C251.563556,62.253 251.086889,62.3063333 250.610222,62.3063333 C249.850222,62.3063333 248.719111,62.0052222 248.913556,60.4141111 L249.514667,56.1396667 C249.725778,54.5863333 249.602444,54.3196667 248.489111,54.3196667 L248.276889,54.3196667 C247.305778,54.3196667 246.245778,54.8852222 245.115778,55.6274444 L244.125778,62.1463333 L242.289111,62.1463333 L243.454667,54.4096667 C243.065778,54.373 242.676889,54.3196667 242.305778,54.2852222 L242.448,52.9774444 L245.451333,52.9774444 L245.221333,54.4796667 Z" id="Fill-51" fill="#FFFFFF" ></path>
                        <path d="M256.763778,54.4796667 C258.053778,53.5963333 259.449333,52.7663333 260.898222,52.7663333 L261.092667,52.7663333 C262.629333,52.7663333 263.264889,53.4896667 263.000444,55.2752222 L262.328222,59.9207778 C262.258222,60.5385556 262.417111,60.8752222 263.123778,60.8752222 L263.883778,60.8752222 L263.724889,62.0752222 C263.106,62.253 262.629333,62.3063333 262.152667,62.3063333 C261.392667,62.3063333 260.261556,62.0052222 260.456,60.4141111 L261.057111,56.1396667 C261.268222,54.5863333 261.144889,54.3196667 260.031556,54.3196667 L259.819333,54.3196667 C258.848222,54.3196667 257.788222,54.8852222 256.658222,55.6274444 L255.668222,62.1463333 L253.831556,62.1463333 L254.997111,54.4096667 C254.608222,54.373 254.219333,54.3196667 253.848222,54.2852222 L253.990444,52.9774444 L256.993778,52.9774444 L256.763778,54.4796667 Z" id="Fill-52" fill="#FFFFFF" ></path>
                        <path d="M272.298222,55.9451111 C272.474889,54.6562222 271.750444,54.0717778 270.443778,54.0717778 L269.913778,54.0717778 C268.552667,54.0717778 267.599333,54.814 267.422667,56.1584444 L267.280444,57.0951111 L272.139333,57.0951111 L272.298222,55.9451111 Z M270.620444,52.7662222 C273.146,52.7662222 274.223778,53.984 273.888222,56.3862222 L273.606,58.4006667 L267.104889,58.4006667 L266.998222,59.0717778 C266.822667,60.434 267.510444,60.9984444 268.800444,60.9984444 L269.524889,60.9984444 C270.408222,60.9984444 271.149333,60.734 271.573778,60.0262222 L271.697111,59.7973333 L273.146,59.7973333 L272.987111,61.0517778 C272.068222,61.9517778 270.690444,62.3406667 269.366,62.3406667 L268.764889,62.3406667 C265.956,62.3406667 264.931556,61.104 265.320444,58.3828889 L265.584889,56.4573333 C265.938222,53.9673333 267.439333,52.7662222 270.037111,52.7662222 L270.620444,52.7662222 Z" id="Fill-53" fill="#FFFFFF" ></path>
                        <path d="M282.744111,61.033 C281.826333,61.8452222 280.483,62.3407778 279.194111,62.3407778 L278.221889,62.3407778 C275.748556,62.3407778 274.811889,61.123 275.148556,58.7007778 L275.500778,56.2452222 C275.818556,53.9496667 277.338556,52.7663333 279.599667,52.7663333 L280.324111,52.7663333 C281.560778,52.7663333 282.531889,52.9952222 283.627444,53.4018889 L283.309667,55.9818889 L281.931889,55.9818889 L281.985222,54.4796667 C281.296333,54.2318889 280.800778,54.1618889 279.758556,54.1618889 C278.380778,54.1618889 277.533,54.8507778 277.304111,56.4574444 L276.949667,58.8785556 C276.755222,60.4141111 277.409667,60.8918889 278.698556,60.8918889 L279.281889,60.8918889 C280.147444,60.8918889 280.906333,60.5741111 281.331889,59.8685556 L281.436333,59.6907778 L282.903,59.6907778 L282.744111,61.033 Z" id="Fill-54" fill="#FFFFFF" ></path>
                        <path d="M288.260667,60.7855556 C288.896222,60.7855556 289.321778,60.7855556 289.956222,60.7344444 L289.868444,61.8111111 C289.091778,62.1466667 288.120667,62.34 287.219556,62.34 L287.025111,62.34 C285.646222,62.34 285.062889,61.5455556 285.310667,59.8322222 L286.088444,54.3555556 L284.922889,54.3555556 L285.098444,52.9777778 L285.982889,52.9777778 C286.317333,52.9777778 286.459556,52.8366667 286.495111,52.5366667 L286.812889,50.4344444 C287.555111,50.3277778 287.872889,50.2922222 288.472889,50.2755556 L288.120667,52.9777778 L290.805111,52.9777778 L290.627333,54.3555556 L287.925111,54.3555556 L287.254,59.0722222 C287.077333,60.4866667 287.184,60.7855556 288.101778,60.7855556 L288.260667,60.7855556 Z" id="Fill-55" fill="#FFFFFF" ></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
   <image src="/wp-content/themes/CLAS/assets/images/journeys.png" xlink:href="">
</symbol>

<symbol id="gatorgood-svg" class="icon-gatorgood"  viewBox="0 0 309.13 104">
	<title>Gator Good</title>
<g><g><path class="gatorgood-1" d="M179.74,54.5H0V0H179.74ZM5,49.5H174.74V5H5Z"/><path class="gatorgood-1" d="M309.13,104H49.5V49.5H309.13ZM54.5,99H304.13V54.5H54.5Z"/><path class="gatorgood-2" d="M88.35,81h-2.5l-.56,3.38h-3L82.88,81H79.64l-.58,3.38h-3L76.65,81H75V78.08h2.18l.58-3.33h-2V71.87h2.48l.56-3.29h3l-.56,3.29h3.26L85,68.58h3l-.56,3.29h1.71v2.88H86.93l-.59,3.33h2ZM80,78.17h3.4L84,74.66h-3.4Z"/><path class="gatorgood-2" d="M95.17,76.51v0a8.09,8.09,0,0,1,8.26-8.15,8.65,8.65,0,0,1,6.19,2.16l-2.18,2.63a5.8,5.8,0,0,0-4.12-1.6,4.73,4.73,0,0,0-4.52,4.91v0a4.72,4.72,0,0,0,4.77,5,5.53,5.53,0,0,0,3.26-.95V78.26h-3.49v-3h6.84v6.84a10.22,10.22,0,0,1-6.73,2.5A7.88,7.88,0,0,1,95.17,76.51Z"/><path class="gatorgood-2" d="M123,68.47h3.2l6.75,15.87h-3.62l-1.44-3.53h-6.66l-1.44,3.53H116.2Zm3.65,9.27-2.09-5.11-2.09,5.11Z"/><path class="gatorgood-2" d="M141,71.78h-4.79v-3.2h13.05v3.2h-4.79V84.34H141Z"/><path class="gatorgood-2" d="M154.61,76.51v0a8.38,8.38,0,0,1,16.75,0v0a8.38,8.38,0,0,1-16.75,0Zm13.12,0v0a4.79,4.79,0,0,0-4.77-5,4.71,4.71,0,0,0-4.73,4.91v0a4.79,4.79,0,0,0,4.77,5A4.71,4.71,0,0,0,167.73,76.51Z"/><path class="gatorgood-2" d="M178.48,68.58h7.2a6.28,6.28,0,0,1,4.59,1.6,4.94,4.94,0,0,1,1.35,3.6v0a4.89,4.89,0,0,1-3.38,4.88l3.85,5.63H188l-3.38-5h-2.72v5h-3.47Zm7,7.65c1.69,0,2.66-.9,2.66-2.23v0c0-1.49-1-2.25-2.72-2.25h-3.44v4.52Z"/><path class="gatorgood-2" d="M198.1,76.51v0a8.09,8.09,0,0,1,8.26-8.15,8.65,8.65,0,0,1,6.19,2.16l-2.18,2.63a5.8,5.8,0,0,0-4.12-1.6,4.73,4.73,0,0,0-4.52,4.91v0a4.72,4.72,0,0,0,4.77,5,5.53,5.53,0,0,0,3.26-.95V78.26h-3.49v-3h6.84v6.84a10.22,10.22,0,0,1-6.73,2.5A7.88,7.88,0,0,1,198.1,76.51Z"/><path class="gatorgood-2" d="M219.79,76.51v0a8.38,8.38,0,0,1,16.75,0v0a8.38,8.38,0,0,1-16.75,0Zm13.12,0v0a4.79,4.79,0,0,0-4.77-5,4.71,4.71,0,0,0-4.73,4.91v0a4.79,4.79,0,0,0,4.77,5A4.71,4.71,0,0,0,232.92,76.51Z"/><path class="gatorgood-2" d="M243,76.51v0a8.38,8.38,0,0,1,16.75,0v0a8.38,8.38,0,0,1-16.75,0Zm13.12,0v0a4.79,4.79,0,0,0-4.77-5,4.71,4.71,0,0,0-4.73,4.91v0a4.79,4.79,0,0,0,4.77,5A4.71,4.71,0,0,0,256.09,76.51Z"/><path class="gatorgood-2" d="M266.84,68.58H273c5,0,8.37,3.4,8.37,7.83v0c0,4.43-3.42,7.88-8.37,7.88h-6.14Zm3.47,3.13v9.5H273a4.49,4.49,0,0,0,4.75-4.7v0A4.52,4.52,0,0,0,273,71.71Z"/><path class="gatorgood-2" d="M26.62,19h12v3.15H30.09v3.35H37.6v3.15H30.09v6.1H26.62Z"/><path class="gatorgood-2" d="M44.73,26.92v0a8.38,8.38,0,0,1,16.75,0v0a8.38,8.38,0,0,1-16.75,0Zm13.12,0v0a4.79,4.79,0,0,0-4.77-5,4.71,4.71,0,0,0-4.73,4.91v0a4.79,4.79,0,0,0,4.77,5A4.71,4.71,0,0,0,57.85,26.92Z"/><path class="gatorgood-2" d="M68.61,19h7.2a6.28,6.28,0,0,1,4.59,1.6,4.94,4.94,0,0,1,1.35,3.6v0a4.89,4.89,0,0,1-3.38,4.88l3.85,5.63H78.17l-3.38-5H72.07v5H68.61Zm7,7.65c1.69,0,2.66-.9,2.66-2.23v0c0-1.49-1-2.25-2.72-2.25H72.07v4.52Z"/><path class="gatorgood-2" d="M103.39,22.2H98.6V19h13.05v3.2h-4.79V34.76h-3.47Z"/><path class="gatorgood-2" d="M118.35,19h3.47v6.23h6.39V19h3.47V34.76h-3.47V28.43h-6.39v6.32h-3.47Z"/><path class="gatorgood-2" d="M139.5,19h11.88v3.08h-8.44v3.2h7.43v3.08h-7.43v3.31h8.55v3.08h-12Z"/></g></g>
   <image src="/wp-content/themes/CLAS/assets/images/logos/gatorgood.png" xlink:href="">
</symbol>

</svg>

<div class="X-header">
       <div class="uf"  role="SVG" tabindex="0" aria-label="University of Florida Homepage">
          <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida"> 
             <svg class="icon-uflogo" ><use xlink:href="#uflogo"></use></svg><span class="SVGaltText">University of Florida Homepage</span>
          </a>
       </div>
   <div class="college" tabindex="0" aria-label="College of Liberal Arts and Sciences, University of Florida Homepage">
        <a href="http://www.clas.ufl.edu" alt="College of Liberal Arts and Sciences" title="College of Liberal Arts and Sciences" target="_blank">

           <span class="college-logo-desktop">
              <svg  aria-role="img" alt="College Logo" ><use xlink:href="#college-logo"></use></svg>
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

   <div class="department" tabindex="0" aria-label="College of Liberal Arts and Sciences, University of Florida Homepage">         
             <div class="strikeRight"><span><a class="strikeheader" href="<?php echo get_site_url(); ?>"  alt="Department" title="Department"><?php echo  get_bloginfo( 'name' ) ?></a></span></div>  
   </div>





  <div class="X-quickLinks"> <span>Quick Links</span> 
	<?php wp_nav_menu( array(
		'theme_location' => 'quicklinks',
		'menu_id'        => 'quicklinks',
                'fallback_cb' => 'custom_primary_menu_fallback',
                'depth' => 1,

	) ); ?>
   </div>

   <div class="X-searchTrigger"><span><svg id="icon-search-thin-trigger" class="icon-search-thin-open" aria-role="img" alt="Search entire site"><use xlink:href="#icon-search-thin-open"></use></svg></span></div>
   <div class="X-search-form-container"><?php get_search_form(); ?></div>
   <div class="menuBox" >
      <svg id="icon-menu" class="icon-menu"><use xlink:href="#icon-fivelines"></use></svg>
   </div>
   <div class="X-menu"  tabindex="0" aria-label="Menu">
   <div class="mobileSearch"><?php get_search_form(); ?></div>
         <?php if ( has_nav_menu( 'top' ) ) : ?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
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
	) ); ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
	
	<?php endif; ?>
</nav><!-- #site-navigation -->


         <?php endif; ?> 
    
   </div>


</div><!-- uf-branding -->



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>




	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
                   // If this is a magazine article
                   if ( is_page_template( 'single-magazine-article.php' ) ) {

                         $POSTtitle=single_post_title('',FALSE);
                         echo '<div class="wrap fi">';
                         echo '<h1>'.$POSTtitle.'</h1>';

                      if( get_field('sub_head') ){   
                         $post_id = $post->ID; // current post ID
                         $var_sub_head=get_field('sub_head');
                         if ( !is_null($var_sub_head) )
                            echo '<h2 class="eee">'.$var_sub_head.'</h2>';
                       } 

                      if( get_field('byline') ){   
                         $post_id = $post->ID; // current post ID
                         $var_byline=get_field('byline');
                         echo '<span class="author">By '.$var_byline.'</span>';

                       }          
                       echo '</div>';                  
                   }

		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );

                $caption= get_post(get_post_thumbnail_id())->post_excerpt; 
		$photo_credit=  get_post_meta( get_post_thumbnail_id( get_queried_object_id(), 'photo_credit_txt', true ) );  
                if ($caption!=null){
                   if (isset ($photo_credit['photo_credit_txt'])) {           
                      echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption.' <span class="photo-credit"> '. $photo_credit['photo_credit_txt'][0].'</span>'.'</figcaption></div></div>';
                   }
                   else{
                      echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption.'</figcaption></div></div>';	
                   }
                }


                   if ( is_page_template( 'single-featured-story.php' )  ) {
                         $POSTtitle=single_post_title('',FALSE);
                         echo '<div class="textOverImage"><div class="wrap">';
                         echo '<h1 class="featured-story-header">'.$POSTtitle.'</h1>';
  
                         $post_id = $post->ID; // current post ID
                         // this will throw a MAJOR error if the advanced custom fields plugin is not installed, fix later.
                         $var_sub_head=get_field('sub_head');
                         if ( !is_null($var_sub_head) && $var_sub_head != '' )
                            echo '<h2  class="dddd">'.$var_sub_head.'</h2>';

                   }
	   echo '</div></div>';
		echo '</div><!-- .single-featured-image-header -->';

    	endif;




	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
