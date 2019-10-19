<?php
namespace App\Controllers\Partials;

trait ActionForm
{
    public function showSidebar()
    {
        // Sidebar: is_null() for pages that haven't been saved since this ACF was added
        return is_null(get_field('jcf_sidebar')) || get_field('jcf_sidebar');
    }

    public function showFooterForm()
    {
        // Footer form: is_null() for pages that haven't been saved since this ACF was added
        return is_null(get_field('jcf_footer_form')) || get_field('jcf_footer_form');
    }

    public function actionFormText()
    {
        if (get_field('jcf_form_override')) {
            return get_field('jcf_action_form_text');
        }

        return get_field('jcf_action_form_text', 'options');
    }

    public function actionForm()
    {
        if (get_field('jcf_form_override')) {
            return \App\get_form(get_field('jcf_action_form'));
        }

        return \App\get_form(get_field('jcf_action_form', 'options'));
    }
}
