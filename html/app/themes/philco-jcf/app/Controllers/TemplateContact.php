<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    public function LeftText()
    {
        return get_field('jcf_contact_left_text');
    }

    public function LeftForm()
    {
        return \App\get_form(get_field('jcf_contact_left_form'));
    }

    public function RightText()
    {
        return get_field('jcf_contact_right_text');
    }

    public function RightButton()
    {
        return get_field('jcf_contact_right_button');
    }

    public function FormText()
    {
        return get_field('jcf_contact_form_text');
    }

    public function Form()
    {
        return \App\get_form(get_field('jcf_contact_form'));
    }
}
