<?php


/* ===========================================
*
*
* Slider function for large slider on home page
*
*
* ============================================ */

function homeChooseHeaderMedia(){
  global $wpdb;
  /*
   * If a regular post or page, and not the front page, show the featured image.
   * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
   */


   // alex! This was commented out!!!!!
   $key_sliderHome = false;
   // alex! This was commented out!!!!!

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
             echo '<div class="featured-image-caption"><div class="wrap"><figcaption class="wp-caption-text">'. $caption.' <div class="photo-credit"> '. $photo_credit .'</div>'.'</figcaption></div></div>';
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


  register_sidebar( array(
    'name'          => ('Image Tiles'),
    'id'            => 'image-tiles',
    'description'   => 'Here are the image tiles that show up below the title when the page template "Image Tiles" is selected',
    'before_widget' => '<div class="image-tiles-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'blank_widgets_init');

/*===========================
*
*
* The Events Calendar Custom Functionality
*
*
*=============================*/

function ufclas_tribe_events_event_schedule_details( $event = null, $before = '', $after = '', $html = true ) {
  if ( is_null( $event ) ) {
    global $post;
    $event = $post;
  }

  if ( is_numeric( $event ) ) {
    $event = get_post( $event );
  }

  $inner                    = $html ? '<div class="tribe-event-date-start">' : '';
  $format                   = '';
  $date_without_year_format = tribe_get_date_format();
  $date_with_year_format    = tribe_get_date_format( true );

  $datetime_separator       = tribe_get_option( 'dateTimeSeparator', ' @ ' );
  $time_range_separator     = tribe_get_option( 'timeRangeSeparator', ' - ' );

  $settings = array(
    'show_end_time' => true,
    'time'          => false,
  );

  $settings = wp_parse_args( apply_filters( 'tribe_events_event_schedule_details_formatting', $settings ), $settings );
  if ( ! $settings['time'] ) {
    $settings['show_end_time'] = false;
  }

  /**
   * @var $show_end_time
   * @var $time
   */
  extract( $settings );

  $format = $date_with_year_format;

  /**
   * If a yearless date format should be preferred.
   *
   * By default, this will be true if the event starts and ends in the current year.
   *
   * @param bool    $use_yearless_format
   * @param WP_Post $event
   */
  $use_yearless_format = apply_filters( 'tribe_events_event_schedule_details_use_yearless_format',
    (
      tribe_get_start_date( $event, false, 'Y' ) === date_i18n( 'Y' )
      && tribe_get_end_date( $event, false, 'Y' ) === date_i18n( 'Y' )
    ),
    $event
  );

  if ( $use_yearless_format ) {
    $format = $date_without_year_format;
  }

  if ( tribe_event_is_multiday( $event ) ) { // multi-date event

    $format2ndday = apply_filters( 'tribe_format_second_date_in_range', $format, $event );

    if ( tribe_event_is_all_day( $event ) ) {
      $inner .= tribe_get_start_date( $event, true, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' );
      $inner .= ( $html ? '</div>' : '' );
      $inner .= $html ? '<span>to</span><div class="tribe-event-date-end">' : '';

      $end_date_full = tribe_get_end_date( $event, true, Tribe__Date_Utils::DBDATETIMEFORMAT );
      $end_date_full_timestamp = strtotime( $end_date_full );

      // if the end date is <= the beginning of the day, consider it the previous day
      if ( $end_date_full_timestamp <= strtotime( tribe_beginning_of_day( $end_date_full ) ) ) {
        $end_date = tribe_format_date( $end_date_full_timestamp - DAY_IN_SECONDS, false, $format2ndday );
      } else {
        $end_date = tribe_get_end_date( $event, false, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' );
      }

      $inner .= $end_date;
    } else {
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
      $inner .= ( $html ? '</div>' : '' )  . '<span class="hide-mobile">to</span>';
      $inner .= $html ? '<div class="tribe-event-date-end">' : '';
      $inner .= tribe_get_end_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_end_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
    }
  } elseif ( tribe_event_is_all_day( $event ) ) { // all day event
    $inner .= tribe_get_start_date( $event, true, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' );
  } else { // single day event
    if ( tribe_get_start_date( $event, false, 'g:i A' ) === tribe_get_end_date( $event, false, 'g:i A' ) ) { // Same start/end time
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
    } else { // defined start/end time
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
      $inner .= ( $html ? '</div>' : '' ) . ( $show_end_time ? '<span>to</span>' : '' );
      $inner .= $html ? '<div class="tribe-event-time">' : '';
      $inner .= ( $show_end_time ? tribe_get_end_date( $event, false, '<\s\p\a\n \c\l\a\s\s\=\"\w\e\e\k\">D</\s\p\a\n> <\s\p\a\n>m</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
    }
  }

  $inner .= $html ? '</div>' : '';

  /**
   * Provides an opportunity to modify the *inner* schedule details HTML (ie before it is
   * wrapped).
   *
   * @param string $inner_html  the output HTML
   * @param int    $event_id    post ID of the event we are interested in
   */
  $inner = apply_filters( 'tribe_events_event_schedule_details_inner', $inner, $event->ID );

  // Wrap the schedule text
  $schedule = $before . $inner . $after;

  /**
   * Provides an opportunity to modify the schedule details HTML for a specific event after
   * it has been wrapped in the before and after markup.
   *
   * @param string $schedule  the output HTML
   * @param int    $event_id  post ID of the event we are interested in
   * @param string $before    part of the HTML wrapper that was prepended
   * @param string $after     part of the HTML wrapper that was appended
   */
  return apply_filters( 'ufclas_tribe_events_event_schedule_details', $schedule, $event->ID, $before, $after );
}

// Add Shortcode
function eventCategories() {

  $args = array(
   'child_of'                 => 0,
   'parent'                   => '',
   'orderby'                  => 'name',
   'order'                    => 'ASC',
   'hide_empty'               => 1,
   'hierarchical'             => 1,
   'taxonomy'                 => 'tribe_events_cat',
   'pad_counts'               => false );

   $categories = get_categories($args);?>
       <h3>Event Categories</h3>
       <ul>

       <?php
   foreach ($categories as $category) {
     $url = get_term_link($category);?>

      <li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
     <?php
   }
   echo '</ul>';
}
add_shortcode( 'event-categories', 'eventCategories' );


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

/*===========================
*
*
* Featured Event for The Events Calendar
*
*
*=============================*/

function uf_clas_featured_events(){
  global $post;

  // Grab the 5 next "party" events (by tag)
  $events = tribe_get_events( [
     'eventDisplay'   => 'custom',
     'start_date'     => 'now',
     'posts_per_page' => 3,
     'featured'       => true,
  ] );
  ?>

  <?php
    if(!empty($events)){
  ?>

  <h2 class='entry-title'>Featured Events</h2>
  <div class='featured-events-container'>

<?php
  // Loop through the events, displaying the title and content for each
  foreach ( $events as $event ) {
    echo '<div class="featured-event post-'. get_the_ID() .'">';
      echo "<div class='type-tribe_events'>";

      //Grab the featured image square-crop size
      $featuredImage = tribe_event_featured_image($event, 'square-crop');

      //If event doesn't have image, display the UF CLAS image
      if(!empty($featuredImage)){
        echo tribe_event_featured_image( $event, 'square-crop' );
      }else{ ?>
        <a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link($event)); ?>" title="<?php the_title_attribute($event) ?>" rel="bookmark"><img src='<?php echo get_stylesheet_directory_uri()."/assets/images/uf-clas.png"?>' alt='UF CLAS Logo'/></a>
        <?php
      }

      //Link to single event
       echo '<h3 class="tribe-events-list-event-title"><a href="'. tribe_get_event_link($event). '">' . $event->post_title . '</a></h3>';?>
       <div class="tribe-updated published time-details tribe-event-schedule-details">
         <?php echo tribe_events_event_schedule_details($event); ?>
       </div><?php
       echo "</div></div>";
  } ?>
  </div>

<?php
}
}

/*====================================================================
 *
 *
 * Create shortcode to display a list of attachments by filetype
 *
 *
 ====================================================================*/
function ufl_display_attached_items_list($atts, $content = null) {
	extract(shortcode_atts(array(
		'filetype' => 'pdf',
		'showdesc' => 'false',
		'order' => 'asc',
		'orderby' => 'name',
		'showasdates' => 'false',
		'dateformat' => 'F j, Y',
		'exclude' => '',
		'outputtype' => 'list',
		'limit' => '-1'
	), $atts));
	global $post;
	// List of mime types
	$mime_types = array(
		"pdf"=>"application/pdf","zip"=>"application/zip","docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document","doc"=>"application/msword","xls"=>"application/vnd.ms-excel","xlsx"=>"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","ppt"=>"application/vnd.ms-powerpoint","pptx"=>"application/vnd.openxmlformats-officedocument.presentationml.presentation","gif"=>"image/gif","png"=>"image/png","jpeg"=>"image/jpg","jpg"=>"image/jpg","mp3"=>"audio/mpeg","wav"=>"audio/x-wav","mpeg"=>"video/mpeg","mpg"=>"video/mpeg","mpe"=>"video/mpeg","mov"=>"video/quicktime","avi"=>"video/x-msvideo"
	);
	$args = array( 'orderby' => $orderby, 'order' => $order, 'post_type' => 'attachment', 'numberposts' => $limit, 'post_status' => null, 'post_parent' => $post->ID, 'exclude' => $exclude );
	if ( $filetype != "all" ) {
		$short_mime_types = explode(",", $filetype);
		foreach ($short_mime_types as $key => $short) {
			$types[] = $mime_types[$short];
		}
		$mimes = array( 'post_mime_type' => $types );
		$args = array_merge( $args, $mimes );
	}
	$attachments = get_posts($args);
	if ( $attachments ) {
		if ( $outputtype == 'list' ) {
			// Build UL to return if items were found.
			$out = '<ul class="attachment-list attachment-list-'.$filetype.'">';
			foreach ( $attachments as $attachment ) {
				// If the last 8 characters in the attachment title are a timestamp (e.g. filename-20120927),
				if ( $showasdates == 'true' && is_numeric( substr( $attachment->post_title, -8 ) ) ) {
					// Use the date as the link text instead of the title
					$link_text = date( $dateformat, strtotime( substr( $attachment->post_title, -8 ) ) );
				}
				else {
					// Use the default link text, which is the attachment title
					$link_text = false;
				}
				$out .= '<li>' . wp_get_attachment_link( $attachment->ID , false, false, false, $link_text ) . ' <span>(' . strtoupper( array_search( get_post_mime_type( $attachment->ID ), $mime_types ) ) . ')</span>';
				if ($showdesc == 'true') { $out .= '<br><p>'.$attachment->post_content.'</p>'; }
				$out .= '</li>';
			}
			$out .= '</ul>';
		} elseif ( $outputtype == 'single' && $limit == '1' ) {
			foreach ( $attachments as $attachment ) {
				$out = wp_get_attachment_link( $attachment->ID , false, false, false, $link_text ) . ' <span>(' . strtoupper( array_search( get_post_mime_type( $attachment->ID ), $mime_types ) ) . ')</span>';
			}
		}
	} else {
		// Return blank string if there is nothing attached.
		$out = '';
	}
	return $out;
}
add_shortcode('attachment-list', 'ufl_display_attached_items_list');

/**
* Add Landing Page Hero Full Shortcode
*
* Example [ufl-landing-page-hero][/ufl-landing-page-hero]
* @param  array $atts Shortcode attributes
* @param  string [$content = ''] Content between shortcode tags
* @return string Shortcode output
*/

// IssueM newsletter
if ( class_exists( 'IssueM' ) ) {
	require get_stylesheet_directory() . '/inc/issuem/issuem.php';
}


/*======================================================
*
*
* CLAS Hero Image after header
*
*
*========================================================*/

function clasHeroImage(){

$classes = get_body_class();

 echo '<main class="single-featured-image-header" aria-label="Featured Image">';
                // If this is a magazine article
                if ( is_page_template( 'single-magazine-article.php' ) ) {
          echo '<div class="wrap">';
          the_title( '<h2 class="entry-title">', '</h2>' );

          // Fall back to post meta and prevent fatal error if ACF isn't active
          $var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);
          $var_byline = get_post_meta( get_the_ID(), 'byline', true);

         if ( function_exists('get_field') ){
           $var_sub_head = get_field('sub_head');
           $var_byline = get_field('byline');
         }

         if ( !empty( $var_sub_head ) ){
           echo '<h2 class="eee">' . esc_html( $var_sub_head ) . '</h2>';
         }
          if ( !empty( $var_byline ) ){
           echo '<span class="author">By ' . esc_html( $var_byline ) . '</span>';
         }

                    echo '</div><!-- .wrap -->';
                }

       the_post_thumbnail( 'twentyseventeen-featured-image' );
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


                if ( is_page_template( 'single-featured-story.php' )  ) {
                    echo '<div class="textOverImage">';
          echo '<div class="wrap">';
          the_title( '<h1 class="featured-story-header">', '</h1>' );

          // Fall back to post meta and prevent fatal error if ACF isn't active
          $var_sub_head = get_post_meta( get_the_ID(), 'sub_head', true);

         if ( function_exists('get_field') ){
           $var_sub_head = get_field('sub_head');
         }

         if ( !empty( $var_sub_head ) ){
           echo '<h2 class="dddd">' . esc_html( $var_sub_head ) . '</h2>';
         }
           echo '</div><!-- .wrap -->';
           echo '</div><!-- .textOverImage -->';
                }
 echo '</main><!-- .single-featured-image-header -->';
}

/* ====================================

  Allows website administrators to use iframes, inputs and scripts.

======================================== */
function clasUnfilteredHtmlCapabilityToAdmins( $caps, $cap, $user_id ) {

 if ( 'unfiltered_html' === $cap && user_can( $user_id, 'administrator' ) ) {

 $caps = array( 'unfiltered_html' );

 }

 return $caps;
}
add_filter( 'map_meta_cap', 'clasUnfilteredHtmlCapabilityToAdmins', 1, 3 );

/*====================================

  Breadcrumbs

========================================*/
function ufclas_get_breadcrumb() {
  echo "<style type='text/css'> .entry-header .wrap {padding-top: 0;}</style>";

  $delimiter = '<em class="fad fa-angle-double-right" aria-hidden="true"></em>';
  $name = 'Home'; //text for the 'Home' link
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<nav aria-label="Breadcrumb" class="wrap" id="crumbs">';

    global $post;
    $home = get_bloginfo('url');
    echo '<a href="' . $home . '">' . $name . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $currentBefore . 'Archive by category &#39;';
      single_cat_title();
      echo '&#39;' . $currentAfter;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('d') . $currentAfter;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('F') . $currentAfter;

    } elseif ( is_year() ) {
      echo $currentBefore . get_the_time('Y') . $currentAfter;

    } elseif ( is_single() && !is_attachment() ) {
      $cat = get_the_category(); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo $currentBefore;
      the_title();
      echo $currentAfter;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $currentBefore;
      the_title();
      echo $currentAfter;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;

    } elseif ( is_search() ) {
      echo $currentBefore . 'Search results for &#39;' . get_search_query() . '&#39;' . $currentAfter;

    } elseif ( is_tag() ) {
      echo $currentBefore . 'Posts tagged &#39;';
      single_tag_title();
      echo '&#39;' . $currentAfter;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $currentBefore . 'Articles posted by ' . $userdata->display_name . $currentAfter;

    } elseif ( is_404() ) {
      echo $currentBefore . 'Error 404' . $currentAfter;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</nav>';

  }
}

/**
* Event List Widget: Add the month and day before the title
*/
function ufclas_events_widget_title(){
 global $post;

 // Change format of the start date for styling as an icon
 $tribe_post_month = tribe_get_start_date( $post, false, 'M' );
 $tribe_post_day = tribe_get_start_date( $post, false, 'd' );
 ?>

   <div class="event-date">
     <span class="event-month"><?php echo $tribe_post_month; ?></span>
       <span class="event-day"><?php echo $tribe_post_day; ?></span>
   </div>

   <?php
}
add_action( 'tribe_events_list_widget_before_the_event_title', 'ufclas_events_widget_title' );

/* =====================================================
*
* Adds title to iframes
*
===================================================== */
function ufclas_replace_iframe_title($text){


    $replace = array(
        // 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
        '<iframe ' => '<iframe title="'. get_the_title() . ' Media Content"',
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}

add_filter('the_content', 'ufclas_replace_iframe_title');
add_filter('the_excerpt', 'ufclas_replace_iframe_title');
?>
