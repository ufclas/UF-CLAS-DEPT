<?php /**
 * Theme shortcodes
 *
 *	[ufl-landing-page-double-image][/ufl-landing-page-double-image]
 *	[ufl-landing-page-hero][/ufl-landing-page-hero]
 *	[ufl-content-image-left][/ufl-content-image-left]
 *	[ufl-content-image-right][/ufl-content-image-right]
 *	[ufl-breaker-cards][/ufl-breaker-cards]
 *	[ufl-icon]
 *	[ufl-image-right-quote][/ufl-image-right-quote]
 *
 * @package UFCLAS_emily
 */

 /**
 * Add Double Image with Content
 *
 * Example [ufl-landing-page-double-image][/ufl-landing-page-double-image]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_landing_double_image($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'headline' => '',
			'image1' => get_stylesheet_directory_uri() . '/img/_temp-landing-a-1.jpg',
			'image2' => get_stylesheet_directory_uri() . '/img/_temp-landing-a-2.jpg',
		), $atts )
	);

	// Support either image ID or image url
	$image1 = ( is_numeric( $image1 ) )? wp_get_attachment_image_src( $image1, 'large' ) : array($image1);
	$image2 = ( is_numeric( $image2 ) )? wp_get_attachment_image_src( $image2, 'large' ) : array($image2);
	$headline = (!empty( $headline ))? $headline : '';

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
	<div class="landing-page-hero">
  	<div class="container">
  	<div class="row">
        <div class="col-sm-7 col-sm-pull-1">
          <div class="img-hero" style="background-image:url('<?php echo esc_url( $image1[0] ); ?>');"></div>
        </div>
        <div class="col-sm-5 col-sm-offset-5 hero-content">
            <h2><?php echo esc_html( $headline ); ?></h2>
			<?php echo wpautop( wp_kses_post( $content ) ); ?>
        </div>
        <div class="col-sm-7 secondary">
          <div class="img-hero" style="background-image:url('<?php echo esc_url( $image2[0] ); ?>');"></div>
        </div>
  		</div>
  	</div>
  	</div>

    <?php
	return ob_get_clean();
}
add_shortcode('ufl-landing-page-double-image', 'ufclas_emily_landing_double_image');

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
    <section class="landing-page-hero-full" id="hero-image" aria-label="top">
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
    </section>
    <?php
  return ob_get_clean();
 }
 add_shortcode('ufl-landing-page-hero', 'ufclas_emily_landing_hero');


/**
 * Add Breaker Shortcode
 *
 * Example [ufl-breaker][/ufl-breaker]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_breaker($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'headline' => '',
			'image' => get_stylesheet_directory_uri() . '/img/bg-breaker.jpg',
			'hide_button' => 1,
			'button_text' => '',
			'button_link' => '#',
		), $atts )
	);

	// Support either image ID or image url
	$image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
    <div class="breaker" style="background-image:url('<?php echo esc_url( $image[0] ); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo esc_html( $headline ); ?></h2>
                    <?php echo wpautop( wp_kses_post( $content ) ); ?>

                    <?php if ( !$hide_button || !empty( $button_text ) ){ ?>
                    <a href="<?php echo esc_url( $button_link ); ?>" class="btn btn-white"><?php echo esc_html( $button_text ); ?> <span class="arw-right icon-svg"><svg><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/spritemap.svg#arw-right"></use></svg></span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	return ob_get_clean();
}
add_shortcode('ufl-breaker', 'ufclas_emily_breaker');

/**
 * Add Content with Left Image and Caption
 *
 * Example [ufl-content-image-left][/ufl-content-image-left]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_content_image_left($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'headline' => '',
			'image' => get_stylesheet_directory_uri() . '/img/_temp-landing-a-1.jpg',
			'caption' => '',
		), $atts )
	);

	// Support either image ID or image url
	$image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
    <div class="gal-list-wrap content-image-left">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-md-6">
	  			<div class="gal-with-caption">
		  			<div class="gal-img temp-img" style="background-image:url('<?php echo esc_url( $image[0] ); ?>');">
		  				<img src="<?php echo esc_url( $image[0] ); ?>" alt="" class="visuallyhidden">
	  				</div>
	  				<div class="caption"><?php echo esc_html( $caption ); ?></div>
	  			</div>
	  		</div>
	  		<div class="col-md-6 gal-img-content">
	  			<h2><?php echo esc_html( $headline ); ?></h2>
                <?php echo wpautop( wp_kses_post( $content ) ); ?>
	  		</div>
	  	</div>
	  </div>
	</div>
    <?php
	return ob_get_clean();
}
add_shortcode('ufl-content-image-left', 'ufclas_emily_content_image_left');

/**
 * Add Content with Right Image
 *
 * Example [ufl-content-image-right][/ufl-content-image-right]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_content_image_right($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'headline' => '',
			'image' => get_stylesheet_directory_uri() . '/img/_temp-landing-a-1.jpg',
			'label' => '',
		), $atts )
	);

	// Support either image ID or image url
    $image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
    <div class="content-box-module">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 content-box-copy">
                    <?php if (!empty( $headline )){ ?>
                    	<h2><?php echo esc_html( $headline ); ?></h2>
					<?php } ?>
					<?php echo wpautop( wp_kses_post( $content ) ); ?>
					<?php if (!empty( $label )){ ?>
                    	<span class="category-tag orange"><?php echo esc_html( $label ); ?></span>
					<?php } ?>
				</div>
				<div class="col-sm-5 content-box-img" style="background-image:url('<?php echo esc_url( $image[0] ); ?>')">
					<img src="<?php echo esc_url( $image[0] ); ?>" alt="" class="visuallyhidden">
				</div>
			</div>
		</div>
	</div>
    <?php
	return ob_get_clean();
}
add_shortcode('ufl-content-image-right', 'ufclas_emily_content_image_right');


/**
 * Add Breaker with Cards
 *
 * Example [ufl-breaker-cards][/ufl-breaker-cards]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_breaker_cards($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'image' => get_stylesheet_directory_uri() . '/img/bg-breaker.jpg',
			'category' => 1,
			'hide_excerpt' => 0,
			'show_links' => 0,
		), $atts )
	);

	// Support either image ID or image url
	$image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);
	$card_posts = get_posts( array(
		'posts_per_page' => 3,
		'category' => $category,
	) );

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
    <div class="img-callout-wrapper" style="background-image:url('<?php echo esc_url( $image[0] ); ?>');">
		<div class="container">
			<div class="row">
            <?php
				global $post;
				foreach($card_posts as $post):
					setup_postdata( $post ); // Access all post data
					?>
					<div class="col-sm-12 col-md-4 img-callout-wrap">
						<div class="img-callout">
							<?php
								$link = ( $show_links )? esc_url( get_permalink() ) : false;
								$link_before = ( $link )? '<a href="' . $link . '">' : '';
								$link_after = ( $link )? '</a>' : '';

								// Display thumbnail and link, if selected
								if ( has_post_thumbnail() ){
									$thumbnail = get_the_post_thumbnail($post->ID, 'medium-cropped', array( 'class' => 'img-full' ));
									echo $link_before . $thumbnail . $link_after;
								}

								// Display title and link, if selected
								the_title( '<h2>' . $link_before, $link_after . '</h2>' );

								// Display excerpt, if selected
								if ( !$hide_excerpt ){
									the_excerpt();
								}
							?>
						</div>
					</div>
            <?php
				endforeach;
				wp_reset_postdata();
			?>
			</div>
		</div>
	</div>
    <?php
	return ob_get_clean();
}
add_shortcode('ufl-breaker-cards', 'ufclas_emily_breaker_cards');

 /**
 * Add Icon Shortcode
 *
 * Example [ufl-icon]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_icon($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'name' => 'file',
			'icon_class' => ''
		), $atts )
	);

	$classes = array( 'img-icon glyphicon glyphicon-' . esc_attr( $name ) );

	if ( !empty( $icon_class ) ){
		$classes[] = esc_attr( $icon_class );
	}

	return '<div class="img-icon-wrap"><span class="' . join(' ', $classes) . '"></span></div>';
}
add_shortcode('ufl-icon', 'ufclas_emily_icon');

/**
 * Add Left Image with Right Quote and Caption
 *
 * Example [ufl-image-right-quote][/ufl-image-right-quote]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string Shortcode output
 */
function ufclas_emily_image_right_quote($atts, $content = NULL ) {

	extract( shortcode_atts(
		array(
			'image' => get_stylesheet_directory_uri() . '/img/ImgResponsive_Placeholder.png',
		), $atts )
	);

	// Support either image ID or image url
	$image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);
	$image_alt = ( is_numeric( $image ) )? get_post($image)->post_excerpt : '';

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
    <div class="container image-right-quote">
    <div class="row">
    <div class="col-md-6">
    	<img class="center-block img-responsive pic" src="<?php echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
    </div>
 	<div class="col-md-6">
    	<div class="quote">
        	<h3><?php echo esc_html( $content ); ?></h3>
        </div>
	</div>
    </div>
    </div>
    <?php
	return ob_get_clean();
}
add_shortcode('ufl-image-right-quote', 'ufclas_emily_image_right_quote');

/*========================================
*
* The Events Calendar Plugin
*
*==========================================*/
function eventsCalendarShortcode($atts){
     // Enqueue CSS
     wp_enqueue_style('events-calendar-shortcode', get_stylesheet_directory_uri() . '/tribe-events/shortcode.css', array() );

     extract( shortcode_atts( array(
        'category'   => "featured", //default class will be featured
        'image'      => "no", //No featured image will show up on default
        'eventtotal' => "10", //Total of events to show per page
        'excerpt'    => "no", //displays the excerpt
        'order'      => "ASC"
      ), $atts ) );

    $args = array(
      'post_status'       =>   'publish',
      'post_type'         =>    array('tribe_events'),
      'posts_per_page'    =>    $eventtotal,
      //order by startdate from newest to oldest
      'meta_key'          =>    '_EventStartDate',
      'orderby'           =>    '_EventStartDate',
      'order'             =>    $order,
      //required in 3.x
      'eventDisplay'      =>     'custom',
      //query events by category
      'tax_query' => array(
          array(
              'taxonomy' => 'tribe_events_cat',
              'field'    => 'slug',
              'terms'    => "$category",
              'operator' => 'IN'
          ),
        )
      );

    $get_posts = new WP_Query($args);

    if($get_posts->have_posts()) {
      while($get_posts->have_posts()) {
        $get_posts->the_post();

          $output .= '<div class="the-events-calendar-shortcode-container">';

            //If user wants featured image displayed
            if($image == 'yes'){
              $output .= '<div class="home-page-event-image">';

              $featuredImage = tribe_event_featured_image( null, 'square-crop' );
                if (empty($featuredImage)){
                      $output .= '<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><img src="https://sites.clas.ufl.edu/las-main/files/2019/12/screenshot-414x414.png" width="414" alt="UF CLAS Logo"/></a>';
                }else {
                  $output .= get_the_post_thumbnail( null, 'square-crop' );
                }
                $output .= '</div>'; //closes featured image div
              }

            $output .=  '<div class="home-page-event-information">';
            $output .=  '<h4><a href="' . get_the_permalink(). '">' . get_the_title() .'</a></h4><br />';
               if (tribe_get_start_date() !== tribe_get_end_date() ) {
                $output .= "<p class='event-date'>" . tribe_get_start_date(null, false, 'M j, Y - g:i a'). "-" . tribe_get_end_date() . "</p>"; ?>
              <?php } else {
                $output .= "<p>" . tribe_get_start_date() . "</p>"; ?>
              <?php }
              if($excerpt == 'yes'){
                $output .= '<p>'. get_the_excerpt() .'</p>';
              }
            $output .= '</div>'; // closes event information div

          $output .= '</div>'; //closes event div

        }
        wp_reset_postdata();
        return $output;
      }
}

add_shortcode('events-calendar','eventsCalendarShortcode');

/*========================================
*
* Image tile with description/link
*
*==========================================*/
function imageBlock($atts){
	extract( shortcode_atts( array(
		 'headline'   => "", //Main headline for block
		 'image'      => "", //Background image
		 'content'    => "", //Extra content
		 'link'       => "", //link to page
		 'cta'				=> "" //text inside button
	 ), $atts ) );

	 $output  = '<div class="card-main-container">';
	 $output .= '<a href="'. $link .'"><div class="card-container" style="background-image:url('. $image .')">';
	 $output .= "<div class='text-content'>";
	 $output .= "<h3>$headline</h3>";
	 $output .= "<p>$content</p>";
	 $output .= "<span class='learn-more'>$cta</span>";
	 $output .= "</div></div></a></div>";

	 return $output;
}

add_shortcode('imageBlock','imageBlock');

/*========================================
*
* The Events Calendar Plugin
*
*==========================================*/
function eventsCalendarCarouselShortcode($atts){

			//Opens carousel container
  		$output = '<div id="events" class="carousel slide wow fadeIn events-carousel" data-ride="carousel" data-interval="false">';

         //Wrapper for slides
        $output .= '<div class="carousel-inner">';

				//Number of events to show per "slide"
        $i = 5;
        global $post;

				//Query only tribe events. Only query 10
        $args = array(
					'post_type'   => array('tribe_events'),
					'numberposts' => 10,
					'orderby' =>'meta_value',
					'meta_key' => '_EventStartDate',
					'order' => 'ASC',
					'start_date'   => 'now'

				);

        $myEvents = tribe_get_events($args);

        if($myEvents) :
					//Split an array into chunks
					$chunks = array_chunk($myEvents, $i);

	        foreach($chunks as $chunk):
		        // Sets as 'active' the first item
		        ($chunk === reset($chunks)) ? $active = "active" : $active = "";
		        $output .= '<div class="item '.$active.'">';

        	foreach($chunk as $post):setup_postdata($post);

		        $output .=   '<div class="col-sm-3 col-xs-6"> <div class="event-single-wrapper"> <div class="event-single">';

						//Opens event information div
		        $output .=  '<div class="event-info"><h3>';
		        $output .=  '<a href="' . get_the_permalink(). '">' . get_the_title($post->ID) .'</a>';
		        $output .=  '</h3>';

						//Displays event time and date
						if (tribe_get_start_date() !== tribe_get_end_date() ) {
						 $output .= "<p class='event-date'>" . tribe_get_start_date(null, false, 'M j, Y <\b\\r> g:i a') . "</p>"; ?>
					 <?php } else {
						 $output .= "<p>" . tribe_get_start_date() . "</p>"; ?>
					 <?php }

		        $output .=   '</div></div></div></div>';
        endforeach;

        $output .= '</div>';

      endforeach;

					$output .= "</div></div>";
					$output .= "<div class='event-navigation'>";
					$output .= '<a class="left team-carousel-control hidden-xs" href="#events" data-slide="prev"><</a>';
					$output .= '<a class="right team-carousel-control hidden-xs" href="#events" data-slide="next">></a>';
					$output .= "</div>";
					// Prints the HTML
					return $output;

    endif;

	   ?>



	</div>

	<?php
}

add_shortcode('events-calendar-slider','eventsCalendarCarouselShortcode');

/*========================================
*
* The Events Calendar Plugin
*
*==========================================*/
function ufclasPostSlider($atts){
	global $post;

	extract( shortcode_atts( array(
		 'category'   => "", //Main headline for block
	 ), $atts ) );

	//Query only tribe events. Only query 10
	$args = array(
		'numberposts' => 10,
		'orderby' 		=> 'date',
		'taxonomy'  	=> $category
	);

	$ufclasPosts = new WP_Query($args);

		$output = "<div class='featured-post-slider-container'>";

			if($ufclasPosts->have_posts()){
				while($ufclasPosts->have_posts()){
					$ufclasPosts->the_post();
					//Opens carousel container
					$output .= '<div class="individual-featured-post-slider-container">';
					//Wrapper for slides
				 $output .= get_the_post_thumbnail();
				 $output .= '<div class="post-title">';
				 $output .=  '<a href="' . get_the_permalink(). '">' . get_the_title() .'</a>';
				 $output .= '</div></div>';
				}

				$output .= '</div></div>';
				return $output;
			}


}

add_shortcode('ufclas-post-slider','ufclasPostSlider');
