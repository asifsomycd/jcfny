<?php
namespace App;

use Roots;

/**
 * Disable block and classic editors on certain templates, CPTs and page IDs
 */
function disable_editor($id = false, $post_type = false)
{
    $excluded_cpts = [];

    $excluded_templates = [
        'views/template-landing.blade.php',
        'views/template-gated.blade.php',
    ];

    $excluded_ids = [
        // get_option( 'page_on_front' )
    ];

    // Disable CPT first
    if (!empty($post_type)) {
        return in_array($post_type, $excluded_cpts);
    }

    if (empty($id)) {
        return false;
    }

    $id = intval($id);
    $template = get_page_template_slug($id);
    $post_type = get_post_type($id);

    return in_array($id, $excluded_ids) || in_array($template, $excluded_templates) || in_array($post_type, $excluded_cpts);
}

/**
 * Disable Block Editor by template
 */
\Roots\add_filters(['gutenberg_can_edit_post_type', 'use_block_editor_for_post_type'], function ($can_edit, $post_type) {
    if (
        !(
            is_admin() &&
            (
                !empty($_GET['post_type']) ||
                !empty($_GET['post'])
            )
        )
    ) {
        return $can_edit;
    }

    $post = false;
    $post_type = false;

    if (!empty($_GET['post_type'])) {
        $post_type = $_GET['post_type'];
    }

    if (!empty($_GET['post'])) {
        $post = $_GET['post'];
    }

    if (\App\disable_editor($post, $post_type)) {
        $can_edit = false;
    }

    return $can_edit;
}, 10, 2);

/**
 * Disable Classic Editor by template
 */
add_action('admin_head', function () {
    $screen = get_current_screen();
    if ('page' !== $screen->id || ! isset($_GET['post'])) {
        return;
    }

    if (\App\disable_editor($_GET['post'])) {
        remove_post_type_support('page', 'editor');
    }
});
