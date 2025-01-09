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
            $user = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $user->id)
                ->orWhere('email', $user->email)
                ->first();

            if ($findUser) {
                Auth::login($findUser, true);
            } else {
                $randomPassword = Str::random(16);

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make($randomPassword), // Хэшируем случайный пароль
                ]);

                Auth::login($newUser, true);
            }

            $locale = $request->cookie('locale', config('app.locale'));

            return redirect()->to("/$locale/");
        } catch (Exception $e) {
            return redirect('/')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
