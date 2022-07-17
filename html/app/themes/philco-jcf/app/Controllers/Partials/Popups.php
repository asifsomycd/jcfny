<?php
namespace App\Controllers\Partials;

use \WP_Query;

trait Popups
{
    public function popups()
    {
        $popupQuery = new WP_Query([
            'post_type' => 'popup',
            'posts_per_page' => -1,
        ]);

        $popups = collect($popupQuery->posts)->map(function ($popup) {
            $fields = get_fields($popup);
            $popup->key = $fields['modal_key'];
            $popup->options = json_encode($fields);
            $popup->disable = is_array($fields['modal_disable']) && in_array(get_the_ID(), $fields['modal_disable']);
            return $popup;
        })->filter(function ($popup) {
            return ! $popup->disable;
        })->toArray();

        return $popups;
    }
}
