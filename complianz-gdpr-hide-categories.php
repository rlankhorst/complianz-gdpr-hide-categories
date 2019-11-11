<?php
/**
 * Plugin Name: Complianz GDPR hide categories
 * Plugin URI: https://complianz.io/pricing
 * Description: Complianz hide categories will default show a settings link instead of the categories
 * Version: 1.0.0
 * Text Domain: complianz-gdpr-hide-categories
 * Domain Path: languages
 * Author: Complianz team
 * Author URI: https://complianz.io
 */


	define('cmplz_hidecats_version', '1');



function cmplz_hide_categories_enqueue_assets( $hook ) {
	$minified = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'cmplz-hide-cats', plugin_dir_url(__FILE__) . "hidecats$minified.js", array('jquery'), cmplz_hidecats_version, true );
	wp_localize_script(
		'cmplz-hide-cats',
		'cmplz_hidecats',
		array(
			'settings' => __("Settings", 'complianz-gdpr-hide-categories')
		)
	);
}

add_action( 'wp_enqueue_scripts', 'cmplz_hide_categories_enqueue_assets');




