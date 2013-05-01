<?php
/**
 * custom-post-slides.php - Used to create the custom post type 'Slides'
 *
 * @package slideshow-creator
 * @version 1.0
 * @see register_post_type()
 */

/**
 * Contains all of the custom info of the custom content type - Slides
 */
function ssc_content_type_slides() {
	$labels = array(
		'name' => _x('Slides', 'post type general name', 'properwp'),
		'singular_name' => _x('Slide', 'post type singular name', 'properwp'),
		'add_new' => _x('Add Slide', 'test_content', 'properwp'),
		'add_new_item' => __('Add New Slide', 'properwp'),
		'edit_item' => __('Edit Slide', 'properwp'),
		'new_item' => __('New Slide', 'properwp'),
		'all_items' => __('All Slides', 'properwp'),
		'view_item' => __('View Slide', 'properwp'),
		'not_found' =>  __('No Slides found', 'properwp'),
		'not_found_in_trash' => __('No Slides found in Trash', 'properwp'),
		'parent_item_colon' => '',
		'menu_name' => 'Slides'
	);

	$args = array(
		'labels' => $labels,

		// Should this content type have a page of it's own?
		'public' => FALSE,

		'exclude_from_search' => TRUE,

		'show_ui' => TRUE,

		'show_in_menu' => TRUE,

		'has_archive' => FALSE,

		// custom post type description
		'description' => 'Individual slides for the Slideshow Creator',

		'capability_type' => 'post',

		// Allows a parent / child structure
		'hierarchical' => FALSE,

		// Should the permalink be changed?
		// Rebuild permalinks after changing/adding!
		// 'rewrite' => array(
		// 	'slug' => 'this/thing'
		// ),

		/*
		 5 - below Posts
		10 - below Media
		15 - below Links
		20 - below Pages
		25 - below comments
		60 - below first separator
		65 - below Plugins
		70 - below Users
		75 - below Tools
		80 - below Settings
		100 - below second separator
		 */
		'menu_position' => 20,

		// full web path
		'menu_icon' => plugins_url('images/slideshow-creator-icon.png', dirname(__FILE__)),

		// Array of wordpress elements to include on admin page
		// possible: title, editor, author, *thumbnail, excerpt, trackbacks, custom-fields,
		// comments, revisions, page-attributes, post-formats, FALSE
		// * - remember to add support for thumbnails for custom post type
		'supports' => array('title', 'editor', 'thumbnail'),

	);

	register_post_type('slides', $args);
}

add_action('init', 'ssc_content_type_slides');