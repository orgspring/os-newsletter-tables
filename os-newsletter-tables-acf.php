<?php
/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */ 

// Add-ons 
// include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_os-newsletter-tables',
		'title' => 'OS Newsletter Tables',
		'fields' => array (
			array (
				'key' => 'field_52127acc5dd9c',
				'label' => 'Date Published',
				'name' => 'osnt_date',
				'type' => 'date_picker',
				'instructions' => 'Enter the date the newsletter was published.',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_52127ad75dd9d',
				'label' => 'Issue',
				'name' => 'osnt_issue',
				'type' => 'text',
				'instructions' => 'Enter the issue here. This can be a month name or issue number.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52127ae85dd9f',
				'label' => 'Contents',
				'name' => 'osnt_contents',
				'type' => 'wysiwyg',
				'instructions' => 'Describe the contents of the newsletter issue in paragraph summary form. Keep it short and sweet - no more than a few sentences.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_52127af05dda0',
				'label' => 'Newsletter File',
				'name' => 'osnt_download',
				'type' => 'file',
				'instructions' => 'Upload an electronic version of the newsletter file. PDF File is recommended.',
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_52127dd95dda1',
				'label' => 'Image Thumbnail',
				'name' => 'osnt_thumb',
				'type' => 'image',
				'instructions' => 'Upload a screenshot of the newsletter front page.',
				'save_format' => 'url',
				'preview_size' => 'small-thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'osnt_newsletter',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'featured_image',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
