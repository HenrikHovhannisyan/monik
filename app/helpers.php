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
