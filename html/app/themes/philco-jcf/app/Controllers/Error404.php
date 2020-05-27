<?php
namespace App\Controllers;

use Sober\Controller\Controller;

class Error404 extends Controller
{
    protected $template = '404';

    public function ErrorTitle()
    {
        return get_field('jcf_404_title', 'options');
    }

    public function ErrorText()
    {
        return get_field('jcf_404_text', 'options');
    }
}
