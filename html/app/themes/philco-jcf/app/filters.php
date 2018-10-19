<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});


/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return '&hellip;</p><p><a href="' . get_permalink() . '" class="read-more">' . __('Continued', 'sage') . '</a>';
});


/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});


/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);


/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);


/**
 * Display sidebar?
 */
add_filter( 'sage/display_sidebar', function ( $display ) {
    static $display;

    isset( $display ) || $display = in_array( true, [
      // The sidebar will be displayed if any of the following return true
      is_single(),
      'page.blade.php' == basename( get_page_template() ) && ! is_404(),
    ] );

    return $display;
} );


/**
 * Gravity Forms label visibility options
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


/**
 * Gravity Forms skip pages on multi-page form
 * For development use
 */
add_filter( 'gform_pre_render', function ( $form ) {
    if ( ! rgpost( 'is_submit_' . $form['id'] ) && rgget( 'dev_form_page' ) ) {
        \GFFormDisplay::$submission[ $form['id'] ][ 'page_number' ] = rgget( 'dev_form_page' );
    }
    return $form;
} );
