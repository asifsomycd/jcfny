<?php
/**
 * Plugin Name: Move Yoast metabox to the bottom
 * Plugin URI:  https://reciprocal.nyc
 * Version:     1.0.0
 * Description: Started from the top, now it's here
 * Author:      Reciprocal NYC
 * Author URI:  https://reciprocal.nyc
 * License:     GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter('wpseo_metabox_prio', function () {
    return 'low';
});
