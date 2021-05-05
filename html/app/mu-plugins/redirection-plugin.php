<?php
/**
 * Author URI:  https://philandcompany.com
 * Author:      Phil & Company
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * License:     GNU General Public License v2
 * Plugin Name: Redirection Configuration
 * Plugin URI:  https://philandcompany.com
 * Version:     1.0.0
 * Description: Move Redirection menu out of Settings submenu.
 */

/**
 * Register a custom menu page for Redirection.
 *
 * @return void
 */
add_action('admin_menu', function () {
    add_menu_page(
        __('Redirection', 'sage'),
        __('Redirection', 'sage'),
        'manage_options',
        'tools.php?page=redirection.php',
        '',
        'dashicons-controls-repeat',
        99
    );
});
