<?php
/**
 * Created by PhpStorm.
 * User: 37499
 * Date: 29.02.2020
 * Time: 0:01
 */

namespace App\Services\Localization;


use Illuminate\Support\Facades\Facade;

class LocalizationService extends Facade
{
    protected static function getFacadeAccessor() {
        return "Localization";
    }
}