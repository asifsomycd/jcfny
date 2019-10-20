<?php
namespace App\Controllers\Partials;

trait Content
{
    public function content()
    {
        return get_field('content_areas');
    }

    public function actionButtons()
    {
        return get_field('action_buttons');
    }
}
