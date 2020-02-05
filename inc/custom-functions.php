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
      $inner .= ( $html ? '</div>' : '' ) . 'to';
      $inner .= $html ? '<div class="tribe-event-date-end">' : '';

      $end_date_full = tribe_get_end_date( $event, true, Tribe__Date_Utils::DBDATETIMEFORMAT );
      $end_date_full_timestamp = strtotime( $end_date_full );

      // if the end date is <= the beginning of the day, consider it the previous day
      if ( $end_date_full_timestamp <= strtotime( tribe_beginning_of_day( $end_date_full ) ) ) {
        $end_date = tribe_format_date( $end_date_full_timestamp - DAY_IN_SECONDS, false, $format2ndday );
      } else {
        $end_date = tribe_get_end_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' );
      }

      $inner .= $end_date;
    } else {
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
      $inner .= ( $html ? '</div>' : '' )  . 'to';
      $inner .= $html ? '<div class="tribe-event-date-end">' : '';
      $inner .= tribe_get_end_date( $event, false, $format2ndday ) . ( $time ? $datetime_separator . tribe_get_end_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
    }
  } elseif ( tribe_event_is_all_day( $event ) ) { // all day event
    $inner .= tribe_get_start_date( $event, true, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' );
  } else { // single day event
    if ( tribe_get_start_date( $event, false, 'g:i A' ) === tribe_get_end_date( $event, false, 'g:i A' ) ) { // Same start/end time
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
    } else { // defined start/end time
      $inner .= tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) . ( $time ? $datetime_separator . tribe_get_start_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
      $inner .= ( $html ? '</div>' : '' ) . ( $show_end_time ? 'to' : '' );
      $inner .= $html ? '<div class="tribe-event-time">' : '';
      $inner .= ( $show_end_time ? tribe_get_end_date( $event, false, '<\s\p\a\n>M</\s\p\a\n> <\s\p\a\n>d</\s\p\a\n>' ) : '' );
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
  echo "<h2 class='entry-title'>Featured Events</h2>";
  echo "<div class='featured-events-container'>";

  $events = array(
          'posts_per_page' => 3,
          'tax_query' => array(array(
                  'taxonomy' => 'tribe_events_cat',
                  'field' => 'slug',
                  'terms' => 'featured'))
  );

  $featuredEvents = new WP_Query($events);

  while ($featuredEvents->have_posts()){
    $featuredEvents->the_post();?>

		<div class="<?php tribe_events_event_classes() ?> featured-event post-<?php the_ID() ?>">
			<?php

			tribe_get_template_part( 'list/single', 'featured' );
			?>
		</div>
<?php }
  echo "</div>";
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
function ufclas_emily_landing_hero($atts, $content = NULL ) {

 extract( shortcode_atts(
   array(
     'headline' => '',
     'subtitle' => '',
     'hide_button' => 1,
     'button_text' => '',
     'button_link' => '#',
     'image' => ''
   ), $atts )
 );

 // Support either image ID or image url
 $image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);
 $image_style = '';
 $subtitle = (!empty( $subtitle ))? $subtitle : '';



 // Add background and gradient class if image exists
 if ( !empty($image[0]) ){
   $image_class ='';
   $image_class .= ' gradient-bg';
   $image_style =  'style="background-image:url(\'' . esc_url( $image[0] ) . '\');"';
 }

 // Shortcode callbacks must return content, so use output buffering
 ob_start();
 ?>
   <div class="landing-page-hero-full">
       <div class="hero-img<?php echo $image_class; ?>" <?php echo $image_style; ?>>
           <div class="hero-heading">
     <?php
       echo '<h2>' . esc_html( $headline ) . '</h2>';

       if ( !empty($subtitle) ){
         echo '<h3>' . esc_html( $subtitle ) . '</h3>';
       }
     ?>
           </div>
       </div>

       <?php if ( !empty( $content ) ): ?>
       <div class="hero-text">
           <div class="container">
               <div class="col-sm-10 col-sm-offset-1">
                   <?php echo wpautop( wp_kses_post( $content ) ); ?>

                   <?php if ( !empty($button_text) ){ ?>
                   <a href="<?php echo esc_url( $button_link ); ?>" class="btn"><?php echo esc_html( $button_text ); ?> <span class="arw-right icon-svg"><svg><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/spritemap.svg#arw-right"></use></svg></span></a>
                   <?php } ?>
               </div>
           </div>
       </div>
       <?php endif; ?>
   </div>
   <?php
 return ob_get_clean();
}
add_shortcode('ufl-landing-page-hero', 'ufclas_emily_landing_hero');

// IssueM newsletter
if ( class_exists( 'IssueM' ) ) {
	require get_stylesheet_directory() . '/inc/issuem/issuem.php';
}


/*========================================
*
* The Events Calendar Plugin
*
*==========================================*/
function eventsCalendarShortcode(){

    $args = array(
      'post_status'=>'publish',
      'post_type'=>array(TribeEvents::POSTTYPE),
      'posts_per_page'=>10,
      //order by startdate from newest to oldest
      'meta_key'=>'_EventStartDate',
      'orderby'=>'_EventStartDate',
      'order'=>'DESC',
      //required in 3.x
      'eventDisplay'=>'custom',
      );
    $get_posts = null;
    $get_posts = new WP_Query();

    $get_posts->query($args);
    if($get_posts->have_posts()) {
      while($get_posts->have_posts()) {
        $get_posts->the_post(); ?>
          <div class="the-events-calendar-shortcode-container">
          <?php foreach( $event_cats as $cat ) {
                  echo esc_html( $cat->name );
              } ?>

            <div class="home-page-event-image">
              <?php $featuredImage = tribe_event_featured_image( null, 'square-crop' );
              if (empty($featuredImage)){?>
                  <a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><img src='https://sites.clas.ufl.edu/las-main/files/2019/12/screenshot-768x768.png' alt='UF CLAS Logo'/></a>
                  <?php
              }else {
                echo get_the_post_thumbnail( null, 'square-crop' );
              } ?>
            </div>

            <div class="home-page-event-information">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><br />
              <?php if (tribe_get_start_date() !== tribe_get_end_date() ) { ?>
                <?php echo tribe_get_start_date(null, false, 'M j, Y - g:i a'); ?> - <?php echo tribe_get_end_date(); ?>
              <?php } else { ?>
                <?php echo tribe_get_start_date(); ?>
              <?php } ?>

              <p><?php echo get_the_excerpt(); ?></p>
            </div>

          </div>
          <?php
        }
      }
    wp_reset_query();
}

add_shortcode('events-calendar-home','eventsCalendarShortcode');
?>
