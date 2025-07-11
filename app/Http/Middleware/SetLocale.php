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
        $supportedLocales = ['hy', 'ru', 'en'];
        $user = Auth::user();
        $segments = $request->segments();
        $prefix = $segments[0] ?? null;

        if ($user && in_array($user->locale, $supportedLocales)) {
            App::setLocale($user->locale);
            Cookie::queue('locale', $user->locale, 60 * 24 * 365);

            // Редирект, если язык в URL не совпадает с языком пользователя
            if ($prefix && in_array($prefix, $supportedLocales) && $prefix !== $user->locale) {
                array_shift($segments);
                $newUri = '/' . $user->locale . '/' . implode('/', $segments);
                $newUri = rtrim($newUri, '/');
                if ($request->getRequestUri() !== $newUri) {
                    return redirect($newUri);
                }
            }

            // Если префикс отсутствует, добавляем
            if (!$prefix || !in_array($prefix, $supportedLocales)) {
                $newUri = '/' . $user->locale . '/' . implode('/', $segments);
                $newUri = rtrim($newUri, '/');
                if ($request->getRequestUri() !== $newUri) {
                    return redirect($newUri);
                }
            }
        } elseif ($prefix && in_array($prefix, $supportedLocales)) {
            App::setLocale($prefix);
            Cookie::queue('locale', $prefix, 60 * 24 * 365);
        } else {
            $cookieLocale = Cookie::get('locale');
            if ($cookieLocale && in_array($cookieLocale, $supportedLocales)) {
                App::setLocale($cookieLocale);
            } else {
                App::setLocale(config('app.locale'));
            }
        }

        return $next($request);
    }
}
