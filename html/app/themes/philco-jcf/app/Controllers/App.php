<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function pageForPosts() {
        return get_option( 'page_for_posts' );
    }

    public function pageScripts() {
        return get_field( 'jcf_page_scripts' );
    }

    public function showFooterForm() {
        // Footer form: is_null() for pages that haven't been saved since this ACF was added
        return is_null( get_field( 'jcf_footer_form' ) ) || get_field( 'jcf_footer_form' );
    }

    public function siteActionForm() {
        return \App\get_form( get_field( 'jcf_action_form', 'options' ) );
    }

    public function siteContactPage() {
        return get_field( 'jcf_contact_page', 'options' );
    }

    public function siteFooterScripts() {
        return get_field( 'jcf_footer_scripts', 'options' );
    }

    public function siteHeaderScripts() {
        return get_field( 'jcf_header_scripts', 'options' );
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function sitePhone() {
        return get_field( 'jcf_phone', 'options' );
    }

    public function siteSocial() {
        return get_field( 'jcf_social_networks', 'options' );
    }

    public static function title() {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
}
