<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('init', function () {
    wp_register_style('app/fonts', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;1,400;1,500&display=swap', false, null);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('app/main.css', asset_path('styles/main.css'), ['app/fonts'], null);

    /**
     * App
     */
    wp_enqueue_script('app/vendor.js', asset_path('scripts/vendor.js'), ['jquery', 'wp-element'], null, true);
    wp_add_inline_script('app/vendor.js', file_get_contents(config('assets.manifest')), 'before');

    wp_register_script('app/main.js', asset_path('scripts/main.js'), ['app/vendor.js'], null, true);
    wp_localize_script('app/main.js', 'jcf', [
        'siteTitle' => get_bloginfo('name'),
        'breakpointMd' => 768,
        'breakpointLg' => 992,
        'breakpointXl' => 1200,
    ]);
    wp_enqueue_script('app/main.js');

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Login assets
 */
add_action('login_enqueue_scripts', function () {
    wp_enqueue_style('app/login.css', asset_path('styles/login.css'), ['app/fonts'], null);
    wp_enqueue_script('app/login.js', asset_path('scripts/login.js'), ['app/fonts'], null, true);
}, 100);

add_filter('login_headerurl', function () {
    return home_url();
});

/**
 * Gutenberg assets
 */
add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style('app/block-editor.css', asset_path('styles/block-editor.css'), ['app/fonts'], null);
});

/**
 * Add support for custom color palettes in Gutenberg.
 */
add_action('after_setup_theme', function () {
    add_theme_support('disable-custom-colors');

    add_theme_support(
        'editor-color-palette',
        [
            [
                'name'  => 'blueberry',
                'slug'  => 'blueberry',
                'color' => '#5a3f98',
            ],
            [
                'name'  => 'seafoam-green',
                'slug'  => 'seafoam-green',
                'color' => '#5fbdbe',
            ],
            [
                'name'  => 'black',
                'slug'  => 'black',
                'color' => '#44423f',
            ],
            [
                'name'  => 'white',
                'slug'  => 'white',
                'color' => '#fff',
            ]
        ]
    );
});

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'top_navigation' => __('Top Navigation', 'sage'),
        'footer_1_navigation' => __('Footer Navigation - Column 1', 'sage'),
        'footer_2_navigation' => __('Footer Navigation - Column 2', 'sage'),
        'colophon_navigation' => __('Colophon Links', 'sage'),
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));

    /**
     * Image sizes
     *
     */
    add_image_size('col-12', 1600, 0, false);
    add_image_size('col-6', 800, 0, false);
    add_image_size('col-4', 400, 0, false);
}, 20);

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});

/**
 * Remove emoji script from head
 */
add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('wp_resource_hints', '\App\disable_emojis_remove_dns_prefetch', 10, 2);
});

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/11/svg/');

        $urls = array_diff($urls, array( $emoji_svg_url ));
    }

    return $urls;
}

/**
 * Add color palette into Iris (ACF)
 *
 * @return void
 */
add_action('acf/input/admin_footer', function () {
    $palette = "
        '#29b5bd',
        '#5fbdbe',
        '#5a3f98',
        '#815c9e',
        '#715aa7',
        '#d9cee1',
        '#f4f2f5',
        '#fff',
        '#262626',
    ";

    echo sprintf(
        '<script type="text/javascript">
            (function($) {
                acf.add_filter(\'color_picker_args\', function(args, field) {
                    args.palettes = [%s];
                    return args;
                });
            })(jQuery);
        </script>',
        $palette
    );
});
