<?php
/**
 * Advanced Custom Fields Registration
 *
 * @since 0.2.5
 */

 function ufclas_emily_metabox_styles_scripts( $hook ) {
	if ( 'post.php' != $hook ) {
        return;
    }
	wp_enqueue_style('metaboxes', get_template_directory_uri() . '/inc/advanced-custom-fields/metaboxes.css', array(), null);
}
add_action( 'admin_enqueue_scripts', 'ufclas_emily_metabox_styles_scripts' );


/* Registers Meta Boxes for Page Visibility Options */
if(function_exists('register_field_group')){
    register_field_group(array (
    	'id' => 'acf_page-visibility-options',
    	'title' => 'Page Visibility Options',
    	'fields' => array (
    		array (
    			'key' => 'field_57a8f8512479b',
    			'label' => 'Visitor Authentication Level',
    			'name' => 'custom_meta_visitor_auth_level',
    			'type' => 'select',
    			'instructions' => 'Choose authentication level for visitors of this page. GatorLink Users only works if Shibboleth is configured properly.',
    			'choices' => array (
    				'Public' => 'Public',
    				'WordPress Users' => 'WordPress Users',
    				'GatorLink Users' => 'GatorLink Users',
    				'UFAD Group' => 'UFAD Group',
    			),
    			'default_value' => 'Public',
    			'allow_null' => 0,
    			'multiple' => 0,
    		),
    		array (
    			'key' => 'field_57a8f8732479c',
    			'label' => 'UFAD Groups',
    			'name' => 'custom_meta_visitor_auth_groups',
    			'type' => 'text',
    			'instructions' => 'Enter the name(s) of the UFAD Groups allowed to access this page separated by commas.',
    			'conditional_logic' => array (
    				'status' => 1,
    				'rules' => array (
    					array (
    						'field' => 'field_57a8f8512479b',
    						'operator' => '==',
    						'value' => 'UFAD Group',
    					),
    				),
    				'allorany' => 'all',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'formatting' => 'none',
    			'maxlength' => '',
    		),
    	),
    	'location' => array (
    		array (
    			array (
    				'param' => 'post_type',
    				'operator' => '==',
    				'value' => 'page',
    				'order_no' => 0,
    				'group_no' => 0,
    			),
    			array (
    				'param' => 'page_template',
    				'operator' => '==',
    				'value' => 'page-members-only.php',
    				'order_no' => 1,
    				'group_no' => 0,
    			),
    		),
    	),
    	'options' => array (
    		'position' => 'normal',
    		'layout' => 'default',
    		'hide_on_screen' => array (
    			0 => 'custom_fields',
    		),
    	),
    	'menu_order' => 0,
    ));
}



/*=================================
*
*
*   Custom Body Class Meta Box Creation
*
*
====================================*/

if(function_exists('acf_add_local_field_group')){
  register_field_group(array(
      'key' => 'body_class',
      'title' => 'Custom Body Class',
      'fields' => array (
        array (
          'key' => 'field_1',
          'label' => 'Custom Body Class',
          'name' => 'body_class',
          'type' => 'text',
        )
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post'
          ),
        ),
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page'
          ),
        ),
      ),

      ));

  /* Allows to add a custom body class using Advanced Custom Fields*/
  add_filter( 'body_class','ufclas_emily_custom_body_class' );

  function ufclas_emily_custom_body_class($classes){
  	$bodyClass = get_field('body_class');
  	$classes[] = $bodyClass;
    return $classes;
  }
}
