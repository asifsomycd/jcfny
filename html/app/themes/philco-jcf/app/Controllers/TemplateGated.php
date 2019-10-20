<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateGated extends Controller
{
    use Partials\Content;

    public function navType()
    {
        return 'action-buttons';
    }

    public function footerNavType()
    {
        return 'default';
    }

    public function showFooterForm()
    {
        return false;
    }
}
