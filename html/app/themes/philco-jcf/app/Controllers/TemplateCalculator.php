<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCalculator extends Controller
{
    public function calculator()
    {
        $multiplier = get_field('calc_returns_multiplier');

        if (!$multiplier) {
            return false;
        }

        $image = get_field('calc_image');

        return json_encode([
            'multiplier' => $multiplier,
            'showChildrensFund' => get_field('calc_childrens_fund'),
            'title' => get_field('calc_title'),
            'text' => get_field('calc_text'),
            'image' => $image ? $image['sizes']['col-4'] : false,
            'results' => (object) [
                'title' => get_field('calc_results_title'),
                'subtitle' => get_field('calc_results_subtitle'),
                'text' => get_field('calc_results_text'),
                'returnsDisclaimer' => get_field('calc_returns_disclaimer'),
                'growthDisclaimer' => get_field('calc_growth_disclaimer'),
            ],
        ]);
    }

    public function impact()
    {
        return (object) [
            'title' => get_field('calc_impact_title'),
            'text' => get_field('calc_impact_text'),
            'impact' => get_field('calc_impact'),
            'button' => get_field('calc_impact_button'),
        ];
    }
}
