<?php 
/**
 * Theme Customization API
 *
 */

/**
 * Add custom theme mods to the Customizer
 * 
 * @since 1.9.2
 * @author priscillamc
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
		'title' => __('General', 'ufclas-emily'),
		'description' => __('', 'ufclas-emily'),
		'panel' => 'ufclas_emily_theme_options',
	));
	
	$wp_customize->add_setting( 'dept_address', array( 'default' => '', 'sanitize_callback' => 'sanitize_textarea_field' ));
	$wp_customize->add_setting( 'title', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ));
	

	$wp_customize->add_control( 'dept_address', array(
		'label' => __('Department Address', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'theme_options_general',
		'type' => 'textarea',
	));
	
	$wp_customize->add_control( 'title', array(
		'label' => __('Footer Title', 'ufclas-emily'),
		'description' => __("", 'ufclas-emily'),
		'section' => 'theme_options_general',
		'type' => 'text',
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
		
}
add_action('customize_register','ufclas_emily_customize_register');
