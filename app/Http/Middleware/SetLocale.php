<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $langPrefix = ltrim($request->route()->getPrefix(), '/');

        if ($langPrefix) {
            App::setLocale($langPrefix);
            Cookie::queue('locale', $langPrefix, 60 * 24 * 365); // Сохраняем язык в куки на год
        } else {
            $locale = Cookie::get('locale', config('app.locale')); // Дефолтный язык из конфига
            App::setLocale($locale);
        }

        return $next($request);
    }
}
