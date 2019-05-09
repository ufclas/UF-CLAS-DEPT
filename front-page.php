<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 *
 * This front-page template looks at the template file that is selected in the template dropdown of the dahsboard page editor.
 * Changing this to the WordPress loop would cause issues with home pages that have already been created with any of the single page templates.
 * -by Efren Vasquez
 */

include( get_page_template());
