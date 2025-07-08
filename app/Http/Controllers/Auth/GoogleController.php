<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Exception;

class GoogleController extends Controller
{
    /**
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $locale = $request->cookie('locale', config('app.locale'));

            $findUser = User::where('google_id', $googleUser->id)
                ->orWhere('email', $googleUser->email)
                ->first();

            if ($findUser) {
                Auth::login($findUser, true);

                // Если в базе нет языка — записываем
                if (!$findUser->locale) {
                    $findUser->locale = $locale;
                    $findUser->save();
                }
            } else {
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => Hash::make(Str::random(16)),
                    'locale' => $locale,
                ]);

                Auth::login($newUser, true);
            }

            Cookie::queue('locale', $locale, 60 * 24 * 365);

            return redirect()->to("/$locale/");
        } catch (\Exception $e) {
            return redirect('/')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
