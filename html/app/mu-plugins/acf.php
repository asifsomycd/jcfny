<?php
/**
 * Author:      Reciprocal NYC
 * Author URI:  https://reciprocal.nyc
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * License:     GNU General Public License v2
 * Plugin Name: ACF Configuration
 * Plugin URI:  https://reciprocal.nyc
 * Version:     1.0.0
 * Description: Set up ACF defaults; move field groups to JSON.
 */

/**
 * ACF Options Page
 */
add_action('init', function () {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title'    => 'Site Settings',
            'menu_title'    => 'Site Settings',
            'menu_slug'     => 'philco-site-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
        ]);
    }
});


/**
 * Place ACF JSON in content directory
 */

add_filter('acf/settings/save_json', function ($path) {
    return dirname(__FILE__) . '/field-groups';
});

add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = dirname(__FILE__) . '/field-groups';
    return $paths;
});


/**
 * Hide menu items from the admin menu
 */
add_action('admin_menu', function () {
    // List of users that don't have pages removed
    $admins = [
        'PhilCo',
    ];

    $current_user = wp_get_current_user();
    if (!in_array($current_user->user_login, $admins)) {
        remove_menu_page('edit.php?post_type=acf-field-group');
    }
}, PHP_INT_MAX);
