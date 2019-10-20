<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateLanding extends Controller
{
    public function content()
    {
        return get_field('content_areas');
    }

    public function actionButtons()
    {
        return get_field('action_buttons');
    }

    public function navType()
    {
        return 'action-buttons';
    }

    public function showFooterForm()
    {
        return false;
    }
}
