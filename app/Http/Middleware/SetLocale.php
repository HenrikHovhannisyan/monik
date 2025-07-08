<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $prefix = ltrim($request->route()?->getPrefix(), '/');
        $user = Auth::user();

        if ($prefix) {
            App::setLocale($prefix);
            Cookie::queue('locale', $prefix, 60 * 24 * 365);

            if ($user && $user->locale !== $prefix) {
                $user->locale = $prefix;
                $user->save();
            }
        } else {
            if ($user && $user->locale) {
                App::setLocale($user->locale);
                Cookie::queue('locale', $user->locale, 60 * 24 * 365);
            } else {
                $locale = Cookie::get('locale', config('app.locale'));
                App::setLocale($locale);
            }
        }

        return $next($request);
    }
}
