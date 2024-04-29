<?php
/**
 * Created by PhpStorm.
 * User: 37499
 * Date: 28.02.2020
 * Time: 23:59
 */

namespace App\Services\Localization;


class Localization
{
    public function locale() {
        $locale = request()->segment(1, '');

        if ($locale && in_array($locale, config("app.locales"))) {
            return $locale;
        }

        return "";
    }
}