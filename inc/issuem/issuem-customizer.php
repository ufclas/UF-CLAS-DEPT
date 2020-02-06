<?php
/**
 * Add Newsletter settings to the Theme Options in the Customizer
 *
 * @since 0.7.2
 */
function ufclas_emily_newsletter_customize_register( $wp_customize ) {

	// Newsletter Option
	$wp_customize->add_section( 'theme_options_newsletter', array(
		'title' => __('Newsletter', 'ufclas-ufl-emily'),
		'description' => __('', 'ufclas-ufl-emily'),
		'panel' => 'theme_options',
	));

	$wp_customize->add_setting( 'newsletter_header_enable', array( 'default' => 0, 'sanitize_callback' => 'absint' ));
	$wp_customize->add_setting( 'newsletter_cover_height', array( 'default' => 'half', 'sanitize_callback' => 'ufclas_emily_sanitize_choices' ));

	$wp_customize->add_control( 'newsletter_header_enable', array(
		'label' => __('Enable the header and submenu on newsletter pages', 'ufclas-ufl-emily'),
		'description' => '',
		'section' => 'theme_options_newsletter',
		'type' => 'checkbox',
	));

	$wp_customize->add_control( 'newsletter_cover_height', array(
		'label' => __('Cover Image Height', 'ufclas-ufl-emily'),
		'description' => __('If the page has a Featured Image, this sets the height of the hero image.', 'ufclas-ufl-emily'),
		'section' => 'theme_options_newsletter',
		'type' => 'select',
		'choices' => array(
			'large' => __('Large', 'ufclas-ufl-emily'),
			'medium' => __('Medium', 'ufclas-ufl-emily'),
			'half' => __('Small', 'ufclas-ufl-emily'),
		),
	));

}
add_action('customize_register','ufclas_emily_newsletter_customize_register');
