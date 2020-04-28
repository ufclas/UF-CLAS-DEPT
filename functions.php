<?php
/**
*      THEME: UF CLAS 2020 Department Theme
*      AUTHOR: Yash Singh
*      EMAIL: yash5@ufl.edu
*      DATE: September 2017
*/


/**
 * Load theme CSS and JavaScript
 *
 * @since 1.0
 */
function ufclas_emily_theme_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
   // Enqueue CSS
   wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), $theme_version );
   wp_enqueue_style('child-style-inline', get_stylesheet_directory_uri() . '/assets/css/inline.min.css', array('child-style'), $theme_version );

	 //Only load CSS for graduation page
	 if ( is_page_template( 'page-recognition.php' ) ) {
		 wp_enqueue_style('graduation-ceremony', get_stylesheet_directory_uri() . '/assets/css/graduation.css', array('child-style'), $theme_version );
		}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_template_directory_uri() . '/assets/css/ie9.css', array( 'child-style' ) );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_template_directory_uri() . '/assets/css/ie8.css', array( 'child-style' ) );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/js/html5.js', array() );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );


	// Enqueue JAVASCRIPT
	wp_enqueue_script( 'child-scripts', get_theme_file_uri( '/assets/js/script.min.js' ), array('jquery'), $theme_version, true );
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/bootstrap/js/bootstrap.min.js' ), array('jquery'), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Add translated text that can be used in JS
	$twentyseventeen_l10n = array(
		'quote' => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		$twentyseventeen_l10n['expand']   = __( 'Expand child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['collapse'] = __( 'Collapse child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['icon']     = twentyseventeen_get_svg(
			array(
				'icon'     => 'angle-down',
				'fallback' => true,
			)
		);
	}
	wp_localize_script( 'child-scripts', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );
}
add_action( 'wp_enqueue_scripts', 'ufclas_emily_theme_enqueue_styles' );

/**
 * Setup theme
 *
 * @since 1.0
 */
function ufclas_emily_X_theme_setup() {

	$args = array(
		'flex-width'    => true,
		'width'         => 980,
		'flex-height'    => true,
		'height'        => 200,
		'default-image' => get_template_directory_uri() . '/assets/images/header.jpg',
	);
	add_theme_support( 'custom-header', $args );


   // Disable Twenty Seventeen changes to the image size attribute
   remove_filter( 'wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr' );
   remove_filter( 'wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr' );

   // Make sure featured images are enabled
   add_theme_support( 'post-thumbnails' );


    // This will remove support for post thumbnails on ALL Post Types
    remove_theme_support( 'post-thumbnails' );
    // Add this line in to re-enable support for just Posts
    add_theme_support( 'post-thumbnails', array( 'post' ) );
        // Default Content Width
	$GLOBALS['content_width'] = 1440;
        $content_width = 1440;

        // Custom Image Sizes
        add_image_size( 'portrait', 414, 9999, false );
        add_image_size( 'portrait-crop', 414, 532, true ); // Crop
        add_image_size( 'square-crop', 768, 768, true ); // Crop
        add_image_size( 'thumbnail', 736, 9999, true );
        add_image_size( 'thumbnail-crop', 736, 535, true ); // Crop
        add_image_size( 'page-wide', 768, 9999, false );
        add_image_size( 'page-wide', 768, 9999, false );
        add_image_size( 'featured-image-mobile-crop', 768, 460.8, true); // Crop -- IMPORTANT
        add_image_size( 'breakout', 940, 9999, false );
        add_image_size( 'jumbo-breakout', 1440, 9999, false );
        add_image_size( 'featured-image-crop', 1440, 864, true); // Crop
        add_image_size( 'full-screen', 2000, 9999, true); // Crop
        add_image_size( 'full-screen-crop', 2000, 800, true); // Crop
        update_option( 'portrait', 414 );
        update_option( 'portrait-crop', 414 );
        update_option( 'square-crop-hd', 960, 750, true  );
        update_option( 'square-crop', 768 );
        update_option( 'thumbnail', 736 );
        update_option( 'thumbnail-crop', 736 );
		update_option( 'page-wide', 768 );
		update_option( 'breakout', 940 );
		update_option( 'jumbo-breakout', 1440 );
		update_option( 'featured-image-crop', 1440 );
		update_option( 'full-screen', 2000 );
		update_option( 'full-screen-crop', 2000 );
		update_option( 'image_default_align', 'center' );


        // Register Menu
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'ufclas-emily' )
	) );

        // Register Menu
	register_nav_menus( array(
		'quicklinks'    => __( 'Quick Links', 'ufclas-emily' )
	) );

        // Register Menu
	register_nav_menus( array(
		'FooterCol1'    => __( 'Footer Column 1', 'ufclas-emily' )
	) );

        // Register Menu
	register_nav_menus( array(
		'FooterCol2'    => __( 'Footer Column 2', 'ufclas-emily' )
	) );

        // Register Menu
	register_nav_menus( array(
		'FooterCol3'    => __( 'Footer Column 3', 'ufclas-emily' )
	) );


        // Set the Featured Image
        if ( has_post_thumbnail() ) {
           the_post_thumbnail( 'full-screen-crop' );
        }

	// Allow partial refreshes of widgets in sidebars
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'ufclas_emily_X_theme_setup' );

/**
 * Custom primary menu fallback
 *
 * @since 1.0
 */
function ufclas_emily_primary_menu_fallback() {

	$blog_title = get_bloginfo();
  ?>
  <div class="menu-quicklinks-container"><ul class="menu"><li><a href="/<?php echo $blog_title ?>/wp-admin/customize.php?return=%2F<?php echo $blog_title ?>%2Fwp-admin%2F">Set Menu Here</a></li></ul></div>
	<?php
}

/**
 * Get Menu object at a location
 *
 * @param string $location
 * @return WP_Term
 * @since 1.0
 */
function ufclas_emily_get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

/**
 * Get Menu object at a location
 *
 * @param string $location
 * @return WP_Term
 * @since 1.0
 */
function ufclas_emily_custom_sizes( $sizes ) {

   unset( $sizes['thumbnail']);
   unset( $sizes['medium']);
   unset( $sizes['Medium']);
   unset( $sizes['medium-Large'] );
   unset( $sizes['Medium-large'] );
   unset( $sizes['large']);
   unset( $sizes['twentyseventeen-featured-image'] );
   unset( $sizes['twentyseventeen-thumbnail-avatar'] );

    return array_merge( $sizes, array(
        'portrait' => __( 'Portrait', 'ufclas-emily' ),
        'portrait-crop' => __( 'Portrait Crop', 'ufclas-emily' ),
        'square-crop-hd' => __( 'Square Crop HD', 'ufclas-emily' ),
        'square-crop' => __( 'Square Crop', 'ufclas-emily' ),
        'thumbnail' => __( 'Thumbnail', 'ufclas-emily' ),
        'thumbnail-crop' => __( 'Thumbnail Crop', 'ufclas-emily' ),
        'page-wide' => __( 'Page Wide', 'ufclas-emily' ),
        'breakout' => __( 'Breakout', 'ufclas-emily' ),
        'jumbo-breakout' => __( 'Jumbo Breakout', 'ufclas-emily' ),
        'featured-image-crop' => __( 'Featured Image Crop', 'ufclas-emily' ),
        'full-screen' => __( 'Full Screen', 'ufclas-emily' ),
        'full-screen-crop' => __('Full Screen Crop', 'ufclas-emily')
    ) );
}
add_filter( 'image_size_names_choose', 'ufclas_emily_custom_sizes' );

/**
 * Defines custom sizes tag for theme x
 *
 * @param array $sizes
 * @param string $size
 * @return array
 * @since 1.0
 */
function ufclas_emily_content_image_sizes( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 100vw';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'ufclas_emily_content_image_sizes', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 * @since 1.0
 */
function ufclas_emily_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'ufclas_emily_header_image_tag', 10, 3 );

/**
 * Defines the custom SIZES TAG for the FEATURED IMAGE.
 *
 * @since 1.0
 */
function ufclas_emily_post_thumbnail_sizes( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 768px, 768px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'ufclas_emily_post_thumbnail_sizes', 10, 3 );

/**
 * Defines the content width
 *
 * @since 1.0
 */
function ufclas_emily_content_width( $content_width ) {
    if ( twentyseventeen_is_frontpage() ) {
        $content_width = 864;
    }
    return $content_width;
}
add_filter( 'twentyseventeen_content_width', 'ufclas_emily_content_width' );

/**
 * Defines the content width
 *
 * @since 1.0
 */
function ufclas_emily_prefix_setup() {
    // Set the default content width.
	$GLOBALS['content_width'] = 1600;
}
add_action( 'after_setup_theme', 'ufclas_emily_prefix_setup', 11 );

/**
 * Add span to menu items with icon class so we can hide the text and show icons instead
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_get_nav_menu_items
 * @since 1.0
 */
function ufclas_emily_hrt_span_to_nav_menu( $item_output, $item, $depth, $args ) {
   if ( isset( $item->classes ) && !empty( $item->classes ) ) {
      if ($depth == 0) {
         $item_output = '<a href="'. $item->url .'" title="'. apply_filters( 'the_title', $item->title, $item->ID ) .'"> <span>'. apply_filters( 'the_title', $item->title, $item->ID ) .'</span></a>';
      }
      else {
         $item_output = '<a href="'. $item->url .'" title="'. apply_filters( 'the_title', $item->title, $item->ID ) .'"> '. apply_filters( 'the_title', $item->title, $item->ID ) .'</a>';
      }
   }
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'ufclas_emily_hrt_span_to_nav_menu', 10, 4 );

/**
 * Add span to menu items with icon class so we can hide the text and show icons instead
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_get_nav_menu_items
 * @since 1.0
 */
function ufclas_emily_nav_menu_attr_add( $atts, $item, $args ) {

    if ( ! empty( $item->attr_title ) ) {
		/**
		 * Add title attribute for a element
		 */
        $atts['attr_title'] = esc_attr( $item->attr_title );
	$atts['class'] = 'tooltip';
       return $atts;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'ufclas_emily_nav_menu_attr_add', 10, 3 );

/**
 * Add post formats to post type page
 *
 * @since 1.0
 */
function ufclas_emily_add_page_post_formats(){
    add_post_type_support( 'page', 'post-formats' );
    register_taxonomy_for_object_type( 'post_format', 'page' );
}
add_action('init', 'ufclas_emily_add_page_post_formats', 11);

/**
 * Add theme support for post formats
 *
 * @since 1.0
 */
function ufclas_emily_post_formats(){
     add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
}
add_action( 'after_setup_theme', 'ufclas_emily_post_formats', 11 );


class ALPHA_Menu extends Walker_Nav_Menu {
	/**
	 * What the class handles.
	 *
	 * @since 3.0.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var array
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}

} // Walker_Nav_Menu


/**
 * Close comments on the front-end
 *
 * @since 1.0
 */
function ufclas_emily_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'ufclas_emily_disable_comments_status', 20, 2);
add_filter('pings_open', 'ufclas_emily_disable_comments_status', 20, 2);

/**
 * Hide existing comments
 *
 * @since 1.0
 */
function ufclas_emily_disable_comments_hide_existing($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'ufclas_emily_disable_comments_hide_existing', 10, 2);

/**
 * Remove comments page in menu
 *
 * @since 1.0
 */
function ufclas_emily_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'ufclas_emily_disable_comments_admin_menu');

/**
 * Redirect any user trying to access comments page
 *
 * @since 1.0
 */
function ufclas_emily_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'ufclas_emily_disable_comments_admin_menu_redirect');


/**
 * Remove comments metabox from dashboard
 *
 * @since 1.0
 */
function ufclas_emily_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'ufclas_emily_disable_comments_dashboard');


/* IF the post has a featured image then add this class to the body tag */
add_filter( 'body_class','ufclas_emily_set_one_column_class' );
function ufclas_emily_set_one_column_class( $classes ) {
     global $post;
     $ID=get_the_ID();
   if ( has_post_thumbnail($ID) )
      return array_merge( $classes, array( 'has-featured-image' ) );
   return $classes;
}


function ufclas_emily_page_layout() {
       update_option( 'page_layout', 'one-column' );
}
add_action( 'template_redirect', 'ufclas_emily_page_layout', 0 );


/* ADD PHOTO CREDITS TO MEDIA LIBRARY */
add_filter("attachment_fields_to_edit", "ufclas_emily_add_photo_credit", 10, 2);
function ufclas_emily_add_photo_credit($form_fields, $post) {
	$form_fields["photo_credit_txt"] = array(
		"label" => __("Photo Credit"),
		"input" => "text",
		"value" => get_post_meta($post->ID, "photo_credit_txt", true),
                "helps" => __("Add photo credits here"),
	);
 	return $form_fields;
}

add_filter("attachment_fields_to_save", "ufclas_emily_save_photo_credit", 10 , 2);
function ufclas_emily_save_photo_credit($post, $attachment) {
	if (isset($attachment['photo_credit_txt']))
		update_post_meta($post['ID'], 'photo_credit_txt', $attachment['photo_credit_txt']  );
	return $post;
}




// SHORTCODE [CLOSE]
function ufclas_emily_close_func( $atts ){
	return "</div>";
}
add_shortcode( 'close', 'ufclas_emily_close_func' );


// SHORTCODE [REOPEN]
function ufclas_emily_reopen_func( $atts ){
	return '<div class="wrap">';
}
add_shortcode( 'reopen', 'ufclas_emily_reopen_func' );


// ADMIN PAGES FOR CONFIGURING THEME OPTIONS
// Moved to the customizer and theme_mods


/* ROW COLUMNS */

// SHORTCODE [STARTROW]
function ufclas_emily_startrow_func( $atts ){
   // Check if row name was provided
   if(!empty($atts['class'])){

	return '<div class="X-row '.$atts['class'].'">';
   }
   else {
	return '<div class="X-row">';
   }

}
add_shortcode( 'STARTROW', 'ufclas_emily_startrow_func' );

// SHORTCODE [ENDROW]
function ufclas_emily_endrow_func( $atts ){
	return "</div>";
}
add_shortcode( 'ENDROW', 'ufclas_emily_endrow_func' );


// SHORTCODE [STARTCOL]
function ufclas_emily_startcol_func( $atts ){


   // Check if slideshow name was provided in the shortcode
   if(empty($atts['class'])){
      echo '[ Please provide a width class (p10, p20, p30...p90,p100) ]';
   }

	return '<div class="X-col '.$atts['class'].'">';
}
add_shortcode( 'STARTCOL', 'ufclas_emily_startcol_func' );

// SHORTCODE [ENDCOL]
function ufclas_emily_endcol_func( $atts ){
	return "</div>";
}
add_shortcode( 'ENDCOL', 'ufclas_emily_endcol_func' );


/**
 * Adds accessible SVGs by overriding parent theme files
 *
 * @param  string $path
 * @param  string $file
 * @return string Updated path
 * @since 1.9.0
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_override_path( $path, $file ) {

	// Use the child theme icon-functions.php
	if ( 'inc/icon-functions.php' == $file ){
		$path = get_stylesheet_directory() . '/' . $file;
	}
	if ( 'inc/template-tags.php' == $file ){
		$path = get_stylesheet_directory() . '/' . $file;
	}
	return $path;
}
add_filter( 'parent_theme_file_path', 'ufclas_emily_override_path', 10, 2 );

/**
 * Custom template hook inside footer aria landmark
 *
 * @since 1.9.0
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_footer_bottom() {

	do_action('ufclas_emily_footer_bottom');
}

/**
 * Remove parent theme files so we can use minified versions
 *
 * @since 1.9.0
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_dequeue_styles_scripts(){
	remove_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );
	remove_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );
}
add_action( 'init', 'ufclas_emily_dequeue_styles_scripts' );


/**
 * Remove jquery migrate
 *
 * @since 1.9.0
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_jquery_migrate( $scripts ) {
	 if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		 $script = $scripts->registered['jquery'];

		 if ( $script->deps ) { // Check whether the script has any dependencies
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		 }
	 }
 }
 add_action( 'wp_default_scripts', 'ufclas_emily_jquery_migrate' );

/**
 * Remove prefixes from category titles
 *
 * @param string $title
 * @return string
 * @since 1.9.4
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_archive_title( $title ){
	if ( is_category() ) {
        $title = single_cat_title( '', false );
    }

	return $title;
}
add_filter( 'get_the_archive_title', 'ufclas_emily_archive_title' );

/**
 * Adds read more link to excerpts
 *
 * @param string $title
 * @return string
 * @since 1.9.4
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_archive_excerpt( $excerpt ){
	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read more<span class="screen-reader-text"> "%s"</span>', 'ufclas-emily' ), get_the_title( get_the_ID() ) )
	);

	return $excerpt . $link;
}
add_filter( 'the_excerpt', 'ufclas_emily_archive_excerpt' );

/**
 * Allows archives to display sidebar
 *
 * @param array $classes
 * @return array
 * @since 1.9.4
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_body_class( $classes ){
	if ( is_archive() && get_theme_mod('archive_widgets') ){
		$classes[] = 'post-template-single-right-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'ufclas_emily_body_class' );

/**
 * Moves theme options to Appearance > Customizer
 */
require get_theme_file_path( '/inc/customizer-options.php' );

/**
 * Includes theme options for backwards compatibility, can be removed
 */
require get_theme_file_path( '/inc/settings-options.php' );

/**
 * Includes Shibboleth functions for members only page
 */
require get_theme_file_path( '/inc/shibboleth.php' );

/**
 * Includes ACF field needed for members only page
 */
require get_theme_file_path( '/inc/advanced-custom-fields/metaboxes.php' );


require get_theme_file_path('/inc/custom-functions.php');

/**
* Includes the shortcodes file
*/
require get_stylesheet_directory() . '/inc/shortcodes.php';
