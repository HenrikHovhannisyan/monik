<?php

use Illuminate\Support\Facades\Route;

//Is Active Route
if (!function_exists('isActiveRoute')) {
    function isActiveRoute($name, $default = 'active')
    {
        return Route::currentRouteName() == $name ? $default : false;
    }
}

//Lang
if (!function_exists('lang')) {
    function lang($name)
    {
        return $name . '_' . app()->getLocale();
    }
}

// Relative route
if (!function_exists('relative_route')) {
    function relative_route($name, $parameters = [], $absolute = true)
    {
        $fullUrl = route($name, $parameters, $absolute); // полный URL
        $baseUrl = url('/'); // http://localhost:8000
        $relative = str_replace($baseUrl, '', $fullUrl); // убираем домен

        // удаляем локаль, если она есть в начале пути
        $locale = app()->getLocale();
        $relative = preg_replace("#^/($locale)(/)?#", '', $relative); // удаляет /hy/, /ru/, /en

        // Добавляем слэш впереди, если его нет
        if (!str_starts_with($relative, '/')) {
            $relative = '/' . $relative;
        }

        return $relative; // будет: /order-items/262
    }
}
