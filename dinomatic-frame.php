<?php
/**
 * Plugin Name: DinoMatic Demo Frame
 * Plugin URI: https://github.com/dinomatic/demo-frame
 * Description: A simple plugin to add a frame at the bottom of theme pages on DinoMatic demos.
 * Version: 1.0.1
 * Author: DinoMatic
 * Author URI: https://dinomatic.com
 * Author email: info@dinomatic.com
 * Text Domain: demo-frame
 * Domain Path: /i18n
 * License: GPL 2
 */

defined('ABSPATH') || exit;

if (! defined('DF_PRODUCT_NAME') || ! defined('DF_PRODUCT_URL')) {
	return;
}

if (! function_exists('include_demo_frame')) {
	function include_demo_frame()
	{
		require_once plugin_dir_path(__FILE__).'/frame.php';
	}

	add_action('sikika_after_wp_footer', 'include_demo_frame');
	add_action('spinoko_after_wp_footer', 'include_demo_frame');
	add_action('akurai_after_wp_footer', 'include_demo_frame');
}
