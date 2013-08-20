<?php

/**
 * OS NEWSLETTER TABLES
 *
 * @package   OS Newsletter Tables
 * @author    Craig Grella <info@orgspring.com>
 * @license   GPL-2.0+
 * @link      http://orgspring.com/newsletter-tables-plugin/
 * @copyright 2013 Craig Grella
 */


class OS_NEWSLETTER_TABLES {

	/**
	 * Plugin version, used for cache-busting of style and script file references.
	 *
	 * @since   0.1.0
	 *
	 * @var     string
	 */
	private $version;

	/**
	 * Unique identifier for the plugin. This value is also used as the text domain
	 * when internationalizing strings of text.
	 *
	 * @since    0.1.0
	 *
	 * @var      string
	 */
	private $plugin_slug;

	/**
	 * A reference to an instance of this class.
	 *
	 * @since    0.2.0
	 *
	 * @var      OS_NEWSLETTER_TABLES
	 */
	private static $instance;

	/**
	 * An implementation of the Singleton Pattern for instantiating the plugin
	 *
	 * @since     0.2.0
	 * @version   0.2.0
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;

	}

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions. Sets ability to use custom template page for archive view on post category - with single-[cat slug].
	 *
	 * @since     0.1.0
	 * @version   0.2.0
	 */
	private function __construct() {

		$this->version = '0.2.0';
		$this->plugin_slug = 'os-newsletter-tables';
		
		// Bring in Advanced Custom Fields Plugin
/* 		define( 'ACF_LITE' , true ); */
		include_once('core/post-types/osnt-newsletter.php' );
		include_once('includes/advanced-custom-fields/acf.php' );
		include_once('os-newsletter-tables-acf.php' );
		include_once('shortcode-newsletter.php' );
		

		// Bring in the admin stylesheets
		add_action( 'wp_enqueue_scripts', array( $this, 'register_admin_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_admin_scripts' ) );
		}

	
	/**
	 * Registers style sheet for styling the table shortcode and enqueues script for sorting tables
	 *
	 * @version    0.2.0
	 * @since      0.2.0
	 */
	public function register_admin_styles() {
		wp_enqueue_style( 'os-newsletter-tables', plugins_url( 'os-newsletter-tables/core/css/admin.css' ) );
		
	}
	
	public function register_admin_scripts() {
		wp_register_script(
	        'sorttable',
	        plugins_url( 'os-newsletter-tables/includes/sorttable.js' ),
	        false,
	        '1.0',
	        true
		);
		
		wp_enqueue_script( 'sorttable' );
		
		}
}