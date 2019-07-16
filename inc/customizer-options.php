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
