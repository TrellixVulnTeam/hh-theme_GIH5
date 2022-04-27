<?php
if (!class_exists('HHTheme')) {

	/**
	 * Class HHTheme
	 */
	class HHTheme {

		/**
		 * HHTheme constructor.
		 */
		public function __construct() {

			define('THEME_PATH', get_template_directory());
			define('THEME_INC_PATH', get_template_directory() . '/inc/');
			define('THEME_ASSETS_SRC', get_stylesheet_directory_uri() . '/assets/src/');
			define('THEME_ASSETS_DIST', get_stylesheet_directory_uri() . '/assets/dist/');

			/**
			 * ACTIONS
			 */
			add_action('wp_enqueue_scripts', array($this, 'enqueue_front'));

			/**
			 * THEME SUPPORT
			 */
			add_action('after_setup_theme', array($this, 'theme_support'));

			remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

		}

		/**
		 * Theme support
		 */
		public function theme_support() {
			add_theme_support('align-wide');
			add_theme_support('custom-logo');
			add_theme_support('title-tag');
		}

		/**
		 * Enqueue styles and scripts
		 */
		public function enqueue_front() {
			wp_enqueue_style('main-css', THEME_ASSETS_DIST . 'main.min.css', array(), false, 'all');
			wp_enqueue_script('main-js', THEME_ASSETS_DIST . '/main.min.js', array(), false, true);
		}
	}

	if (function_exists('acf_new_instance')) {
		acf_new_instance('HHTheme');
	}
}

require_once THEME_INC_PATH . 'post_types.php';
require_once THEME_INC_PATH . 'taxonomies.php';
require_once THEME_INC_PATH . 'blocks.php';
