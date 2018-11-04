<?php

namespace App\Controllers;
use Sober\Controller\Controller;

class TemplateApplicationForm extends Controller
{
    public function introText() {
        return get_field( 'jcf_form_text' );
    }

    public function steps() {
        return get_field( 'jcf_form_steps' );
    }

    public function ApplicationForm() {
        return \App\get_form( get_field( 'jcf_form_id' ) );
    }
}
