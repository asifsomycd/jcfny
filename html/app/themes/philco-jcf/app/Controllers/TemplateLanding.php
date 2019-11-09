<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateLanding extends Controller
{
    use Partials\Content;

    public function navType()
    {
        return 'action-buttons';
    }

    public function footerNavType()
    {
        return 'action-buttons';
    }

    public function showFooterForm()
    {
        return false;
    }
}
