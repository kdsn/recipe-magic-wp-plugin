<?php
/**
 * Plugin Name: Recipe Magic
 * Plugin URI: https://github.com/kdsn/recipe-magic-wp-plugin
 * Description: A WordPress plugin to display and adjust recipes for various occasions. Integrates with Elementor Pro and supports shortcodes.
 * Version: 1.0.0
 * Author: Keld Sørensen
 * Author URI: https://kdsn.dk
 * License: GPL-3.0
 * Text Domain: recipe-magic
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Plugin version.
define('RECIPE_MAGIC_VERSION', '1.0.0');

// Load the initialization file.
require plugin_dir_path(__FILE__) . 'includes/init.php';

// Activation and deactivation hooks.
register_activation_hook(__FILE__, 'recipe_magic_activate');
register_deactivation_hook(__FILE__, 'recipe_magic_deactivate');

/**
 * The code that runs during plugin activation.
 */
function recipe_magic_activate() {
    // Activation code here.
}

/**
 * The code that runs during plugin deactivation.
 */
function recipe_magic_deactivate() {
    // Deactivation code here.
}