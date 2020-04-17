<?php
/*===========================================
*
*
* Slider function for large slider on home page
*
*
*============================================*/

function homeChooseHeaderMedia(){
  global $wpdb;
  /*
   * If a regular post or page, and not the front page, show the featured image.
   * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
   */

   // $key_sliderHome = false;

   // this part isn't necessary. It checks to see if the site is the root or subsite -- the UF installation uses all sub-sites
   if (get_current_blog_id() == 1) {
     $id_page = "wp_posts";
   } else {
     $id_page = "wp_" . get_current_blog_id() . "_posts";
   }


   // looping to find if there's a slideshow named "home-slider",  sets value to "$key_sliderHome"
    foreach ($wpdb->get_results("SELECT * FROM {$id_page}") as $k => $v) {
      foreach ($v as $key => $value) {
        if ($key == "post_type") {
          if ($value == "slideshow") {
            foreach ($v as $key => $value) {
              if ($key == "post_name" && $value == "home-slider") {
                $key_sliderHome = true;
              }
            }
          }
        }
      }
    }

  ob_start();
  do_action('slideshow_deploy','home-slider');
  $slideshow = ob_get_contents();
  ob_end_clean();

  // read the contents of the slideshow output to see if there's an error, either: "no slide", or "no slideshow"
  $string_key = htmlspecialchars($slideshow);
  $exist_image   = has_post_thumbnail();
  $error_noSlide = false;
  $error_noShow  = false;
  $key_noShow    = "No slideshows available";
  $key_slideShow = "slideshow_container";
  $key_noSlide   = "No slides were found";

  $position_key_noShow   = strpos($string_key, $key_noShow);
  $position_key_noSlide  = strpos($string_key, $key_noSlide);
  $position_keySlideShow = strpos($string_key, $key_slideShow);

    if ($position_key_noSlide > 0) {
      $error_noSlide = true;
    } else if ($position_key_noShow > 0) {
      $error_noShow  = true;
    }

    // print an H2 if there's no featured image and there's no slide, no slideshow or the home-slider doesn't exist
    if (!$exist_image && (($error_noSlide || $error_noShow) || !$key_sliderHome)) {
      echo "<div class='wrap'><h2>" . get_the_title() . "</h2></div>";
    // print an image if there is an image and there's no slider / slideshow or the home-slider doesn't exist
    } else if ($exist_image && (($error_noSlide || $error_noShow) || !$key_sliderHome)) {
       // HERO IMAGE
       echo '<div class="home-hero-container"><div class="single-featured-image-header">';
         the_post_thumbnail( 'full' );
         $caption = get_the_post_thumbnail_caption();
         $photo_credit = get_post_meta( get_post_thumbnail_id(), 'photo_credit_txt', true );
         if ( !empty($caption) ){
           if ( !empty($photo) ){
             echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption.' <span class="photo-credit"> '. $photo_credit .'</span>'.'</figcaption></div></div>';
           }
           else {
             echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption .'</figcaption></div></div>';
           }
         }
         echo '</div><!-- .single-featured-image-header -->';
         the_title( '<h2 class="entry-title home-hero-title">', '</h2>' );
       echo '</div><!-- .home-hero-container -->';
       // let the home-slider slide show print if there are no errors.
       // the plugin's code says something about defaulting to a random slideshow if the name doesn't apc_exists
       // so, simply "else" is ok because of the first two statements saying if there's no slideshow named home-slider, do an h2 or a featured image
    } else {
      // SLIDESHOW
     echo '<div class="home-hero-container">';
       do_action("slideshow_deploy","home-slider");
     echo "</div>";
    }


    if ((!$exist_image && ($error_noSlide || $error_noShow))) {
      $noMedia = "noMedia";
    }
  }


/*===========================
*
*
* Register widget areas
*
*
*=============================*/
function blank_widgets_init(){
    register_sidebar( array(
      'name'          => ('CLAS Featured Stories'),
      'id'            => 'clas-featured-stories',
      'description'   => 'Here are the featured stories that show up on the CLAS home page',
      'before_widget' => '<div class="clas-featured-stories">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('CLAS Numbers'),
    'id'            => 'clas-numbers',
    'description'   => 'Here are the numbers that show up on the bottom of the CLAS home page',
    'before_widget' => '<div class="clas-by-numbers">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'blank_widgets_init');

/*===========================
*
*
* Add tag support to pages
*
*
*=============================*/
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');
?>
