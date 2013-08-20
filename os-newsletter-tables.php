<?php

/**
 * OrgSpring Newsletter Tables
 *
 * A plugin that generates an organized table for displaying a list of newsletters featuring
 * title, date, description, link, and thumbnail image. Columns are also sortable.
 *
 * @package   OS Newsletter Tables
 * @author    Craig Grella <info@orgspring.com>
 * @license   GPL-2.0+
 * @link      http://orgspring.com/newsletter-tables-plugin/
 * @copyright 2013 Craig Grella
 *
 * @wordpress-plugin
 * Plugin Name: OS Newsletter Tables
 * Plugin URI:  http://orgspring.com/newsletter-tables-plugin/
 * Description: A plugin that generates an organized table for displaying a list of newsletters featuring title, date, description, link, and thumbnail image. Columns are also sortable.
 * Version:     0.1.0
 * Author:      Craig Grella
 * Author URI:  http://orgspring.com/
 * Text Domain: os-newsletter-tables
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-os-newsletter-tables.php' );
OS_NEWSLETTER_TABLES::get_instance();