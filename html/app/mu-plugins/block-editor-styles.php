<?php
/**
 * Plugin Name: Block Editor Styles Cleanup
 * Plugin URI:  https://github.com/WordPress/gutenberg/issues/38299#issuecomment-1025520487
 * Version:     1.0.0
 * Description: Remove WP 5.9 default block editor styles
 * Author:      Kinetic
 * Author URI:  https://kinetic.com
 * License:     GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action('after_setup_theme', function () {
    // remove SVG and global styles
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

    // remove wp_footer actions which add's global inline styles
    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

    // remove render_block filters which adding unnecessary stuff
    remove_filter('render_block', 'wp_render_duotone_support');
    remove_filter('render_block', 'wp_restore_group_inner_container');
    remove_filter('render_block', 'wp_render_layout_support_flag');
});

add_action('wp_enqueue_scripts', function () {
    if (is_plugin_active('classic-editor/classic-editor.php')) {
        // Dequeue block library styles
        wp_dequeue_style('wp-block-library');
    }
}, 10);
