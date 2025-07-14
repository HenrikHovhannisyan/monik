<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.header', function ($view) {
            $user = Auth::user();

            $unreadCount = 0;
            $notifications = collect();

            if ($user) {
                $unreadCount = $user->notifications()
                    ->where('status', 'unread')
                    ->count();

                $notifications = $user->notifications()
                    ->orderByRaw("CASE WHEN `status` = 'unread' THEN 0 ELSE 1 END")
                    ->orderBy('created_at', 'desc')
                    ->take(10)
                    ->get();
            }

            $allCategories = cache()->remember('header_categories', 60, function () {
                return Category::all();
            });

            $categoriesBoy = $allCategories->shuffle()->take(5);
            $categoriesGirl = $allCategories->shuffle()->take(5);
            $categoriesNew = $allCategories->shuffle()->take(5);
            $categoriesSale = $allCategories->shuffle()->take(5);

            $lng = config('main.lang.' . app()->getLocale());
            $locales = config('main.lang');

            $view->with(compact(
                'unreadCount',
                'notifications',
                'categoriesBoy',
                'categoriesGirl',
                'categoriesNew',
                'categoriesSale',
                'lng',
                'locales'
            ));
        });
    }
}
