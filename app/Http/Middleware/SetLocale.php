<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        /** @var \App\Models\User|null $user */
        $user = Auth::user();

        if ($langPrefix) {
            App::setLocale($langPrefix);
            Cookie::queue('locale', $langPrefix, 60 * 24 * 365);

            if ($user && $user->locale !== $langPrefix) {
                $user->locale = $langPrefix;
                $user->save();
            }
        } else {
            $locale = Cookie::get('locale', config('app.locale'));
            App::setLocale($locale);
        }

        return $next($request);
    }
}
