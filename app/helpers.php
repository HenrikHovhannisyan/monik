<?php
use Illuminate\Support\Facades\Route;

//Is Active Route
if(!function_exists('isActiveRoute')){
    function isActiveRoute($name, $default = 'active'){
        return Route::currentRouteName() == $name ? $default : false;
    }
}

//Lang
if (!function_exists('lang')){
    function lang($name){
        return $name . '_' . app()->getLocale();
    }
}

//Get language prefix in Yandex map
function getLanguagePrefix() {
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = explode('/', trim($urlPath, '/'));

    $languagePrefix = $segments[0];

    if (empty($languagePrefix)) {
        $languagePrefix = 'am';
    }

    switch ($languagePrefix) {
        case 'en':
            return 'en_US';
        case 'ru':
            return 'ru_RU';
        case 'am':
            return 'hy_AM';
        default:
            return 'hy_AM';
    }
}
