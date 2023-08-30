<?php
/**
 * Plugin Name: Display Product Taxoes
 * Description: The Display Product Taxoes plugin enhances your WooCommerce-powered online store by seamlessly integrating product taxonomy data into both the shop page and individual product pages.
 * Plugin URI: https://bestwpdeveloper.com/display-product-taxoes/
 * Version: 1.0
 * Author: Best WP Developer
 * Author URI: https://bestwpdeveloper.com/
 * Text Domain: display-product-taxoes
 */
if ( ! defined( 'ABSPATH' ) ) exit;
final class FinalSHPTShop{
	const VERSION = '1.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		// Load translation
		add_action( 'dyptt_init', array( $this, 'dyptt_loaded_textdomain' ) );
		// dyptt_init Plugin
		add_action( 'plugins_loaded', array( $this, 'dyptt_init' ) );
	}

	public function dyptt_loaded_textdomain() {
		load_plugin_textdomain( 'display-product-taxoes', false, basename(dirname(__FILE__)).'/languages' );
	}

	public function dyptt_init() {
		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'dyptt_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'include.php' );
	}

	public function dyptt_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'display-product-taxoes' ),
			'<strong>' . esc_html__( 'Display Product Taxoes', 'display-product-taxoes' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'display-product-taxoes' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'display-product-taxoes') . '</p></div>', $message );
	}
}

new FinalSHPTShop();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );