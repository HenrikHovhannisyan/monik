<?php
/**
 * Created by PhpStorm.
 * User: 37499
 * Date: 29.02.2020
 * Time: 0:04
 */

namespace App\Services\Localization;


use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind("Localization", 'App\Services\Localization\Localization');
    }
}