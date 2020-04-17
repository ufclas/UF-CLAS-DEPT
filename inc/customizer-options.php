<?php
/**
 * Theme Customization API
 *
 */

/**
 * Sanitize radio and select boxes using choices
 *
 * @return string Valid input or the default value for the setting
 * @since 1.9.4
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_sanitize_choices( $input, $setting ) {
	global $wp_customize;

	$control = $wp_customize->get_control( $setting->id );

	if ( array_key_exists( $input, $control->choices ) ){
		return $input;
	}
	else {
		return $setting->default;
	}
}

/**
 * Get category list for a customizer select
 * @since 0.2.5
 */
function ufclas_emily_customize_categories() {
	$args = array('fields' => 'id=>name');
	return get_categories( $args );
}

/**
 * Get range of values for customizer select
 * @since 0.2.5
 */
function ufclas_emily_customize_range( $min = 0, $max = 10 ) {
	$range = array();
	for ($i=$min; $i<=$max; $i++){
		$range[$i] = $i;
	}
	return $range;
}

/**
 * Add custom theme mods to the Customizer
 *
 * @since 1.9.2
 * @author priscillamc <priscilla@priscillachapman.com>
 */
function ufclas_emily_customize_register( $wp_customize ) {

	// Add a Theme Option panel for backwards compatibility
	$wp_customize->add_panel( 'ufclas_emily_theme_options', array(
		'title' => __('CLAS DEPT Theme Options', 'ufclas-emily'),
		'description' => __('Options for modifying the theme.', 'ufclas-emily'),
		'priority' => '129',
	));

	// General
	$wp_customize->add_section( 'theme_options_general', array(
		'title' => __('General', 'ufclas-emily'),
		'description' => __('', 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));

	$wp_customize->add_setting( 'dept_address', array( 'default' => '' ));

	$wp_customize->add_control( 'dept_address', array(
		'label' => __('Department Address', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'theme_options_general',
		'type' => 'textarea',
	));

	// Slider
	$wp_customize->add_section( 'theme_options_slider', array(
		'title' => __('Feature Slider', 'ufclas-emily'),
		'description' => __('', 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));

	$wp_customize->add_setting( 'homepage_layout', array( 'default' => '2c-bias', 'sanitize_callback' => 'sanitize_key' ));
	$wp_customize->add_setting( 'homepage_layout_color', array( 'default' => 'faf8f1', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_hex_color' ));
	$wp_customize->add_setting( 'featured_category', array( 'default' => 0, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'story_stacker', array( 'default' => 0, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'number_of_posts_to_show', array( 'default' => 3, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'featured_style', array( 'default' => 'slider-dark', 'sanitize_callback' => 'sanitize_key' ));
	$wp_customize->add_setting( 'featured_speed', array( 'default' => 7, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'featured_disable_link', array( 'default' => 0, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'story_stacker_disable_dates', array( 'default' => 0, 'sanitize_callback' => 'absint' ));

	// Homepage
	$wp_customize->add_section( 'theme_options_homepage', array(
		'title' => __('Slider', 'ufclas-emily'),
		'description' => __('The options below edit the homepage featured slider.', 'ufclas-emily'),
		'panel' => 'theme_options_slider',
	));

	$wp_customize->add_control( 'featured_category', array(
		'label' => __('Select a Category', 'ufclas-emily'),
		'description' => __('Choose a category for the featured post slider.', 'ufclas-emily'),
		'section' => 'theme_options_slider',
		'type' => 'select',
		'choices' => ufclas_emily_customize_categories(),
	));

	$wp_customize->add_control( 'number_of_posts_to_show', array(
		'label' => __('Number of Posts to Display in Slider', 'ufclas-emily'),
		'description' => __('Number of posts to display in your slider (Story Stacker is fixed at 3)', 'ufclas-emily'),
		'section' => 'theme_options_slider',
		'type' => 'select',
		'choices' => ufclas_emily_customize_range( 1, 15 ),
	));

	$wp_customize->add_control( 'featured_speed', array(
		'label' => __('Slider Speed', 'ufclas-emily'),
		'description' => __('Time in seconds to display each slide', 'ufclas-emily'),
		'section' => 'theme_options_slider',
		'type' => 'number',
	));

	$wp_customize->add_control( 'featured_disable_link', array(
		'label' => __('Disable Slider Links', 'ufclas-emily'),
		'description' => __('Disable links from being created on the homepage slider.', 'ufclas-emily'),
		'section' => 'theme_options_slider',
		'type' => 'checkbox',
	));


	$wp_customize->add_control( 'dept_address', array(
		'label' => __('Department Address', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'theme_options_general',
		'type' => 'textarea',
	));

	// Layout
	$wp_customize->add_section( 'theme_options_layout', array(
		'title' => __('Layout', 'ufclas-emily'),
		'description' => __('', 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));

	$wp_customize->add_setting( 'archive_content', array( 'default' => 'full', 'sanitize_callback' => 'ufclas_emily_sanitize_choices' ));
	$wp_customize->add_setting( 'archive_date', array( 'default' => 0, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'archive_featured', array( 'default' => 1, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'archive_widgets', array( 'default' => 0, 'sanitize_callback' => 'absint' ));

	$wp_customize->add_control( 'archive_content', array(
		'label'      => __('Post Archive Display', 'ufclas-emily'),
		'description'      => __('Choose how to display category, tag, and archive pages.', 'ufclas-emily'),
		'section'    => 'theme_options_layout',
		'type'       => 'radio',
			'choices'    => array(
			  'full' => __('Full Content', 'ufclas-emily'),
			  'excerpt' => __('Excerpt', 'ufclas-emily'),
			),
	) );

	$wp_customize->add_control( 'archive_featured', array(
		'label' => __('Show featured images in archives', 'ufclas-emily'),
		'section' => 'theme_options_layout',
		'type' => 'checkbox',
	));

	$wp_customize->add_control( 'archive_date', array(
		'label' => __('Show dates in archives', 'ufclas-emily'),
		'section' => 'theme_options_layout',
		'type' => 'checkbox',
	));

	$wp_customize->add_control( 'archive_widgets', array(
		'label' => __('Show widgets in archives', 'ufclas-emily'),
		'section' => 'theme_options_layout',
		'type' => 'checkbox',
	));

	// Social
	$wp_customize->add_section( 'ufclas_emily_theme_options_social', array(
		'title' => __('Social Media', 'ufclas-emily'),
		'description' => __("Enter your organization's social media URLs. Social media icons are displayed in the footer", 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));

	$wp_customize->add_setting( 'fb', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'twitter', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'instagram', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'youtube', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'rss', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'email', array( 'default' => '', 'sanitize_callback' => 'sanitize_email' ));
	$wp_customize->add_setting( 'linkedin', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ));

	$wp_customize->add_control( 'fb', array(
		'label' => __('Facebook URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'twitter', array(
		'label' => __('Twitter URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'instagram', array(
		'label' => __('Instagram URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'youtube', array(
		'label' => __('YouTube URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'rss', array(
		'label' => __('Blog or Feed URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'email', array(
		'label' => __('Email', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));
	$wp_customize->add_control( 'linkedin', array(
		'label' => __('LinkedIn URL', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'ufclas_emily_theme_options_social',
		'type' => 'text',
	));

	// Adds donation option to the customizer
	$wp_customize->add_section( 'theme_options_gift', array(
		'title' => __('Make a Gift', 'ufclas-emily'),
		'description' => __('', 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));

	$wp_customize->add_setting( 'make_gift', array( 'default' => '' ));

	$wp_customize->add_control( 'make_gift', array(
		'label' => __('Donation URL', 'ufclas-emily'),
		'description' => __("Enter your organization's donation URL. Donation icon is displayed in the header", 'ufclas-emily'),
		'section' => 'theme_options_gift',
		'type' => 'text',
	));

}
add_action('customize_register','ufclas_emily_customize_register');
