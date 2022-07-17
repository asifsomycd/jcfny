<?php
/**
 * Plugin Name: CPT: popup
 * Plugin URI:  https://reciprocal.nyc
 * Version:     1.0.0
 * Description: Requires <code>composer install</code> in root.
 * Author:      reciprocal.nyc
 * Author URI:  https://reciprocal.nyc
 * License:     GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

use PostTypes\PostType;

if (! class_exists('PostTypes\PostType')) {
    return;
}

/**
 * Create cpt
 */

$cpt = new PostType([
    'name' => 'popup',
    'singular' => 'Pop-Up',
    'plural' => 'Pop-Ups',
]);

$cpt
    ->options([
        'publicly_queryable' => false,
        'menu_position' => 30,
        'supports' => [
            'title',
            'editor',
        ],
        'show_in_rest' => true,
    ])
    ->icon('dashicons-tablet')
    ->register();
