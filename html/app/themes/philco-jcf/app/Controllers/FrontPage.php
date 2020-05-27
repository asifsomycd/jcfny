<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function fields()
    {
        $acf_fields = get_fields();
        $fields = [];

        foreach ($acf_fields as $key => $value) {
            $fields[ str_replace('jcf_home_', '', $key) ] = $value;
        }

        return $fields;
    }
}
