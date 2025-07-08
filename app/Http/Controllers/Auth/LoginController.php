<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $remember = $request->has('remember');

        if (auth()->attempt($request->only('email', 'password'), $remember)) {
            $user = auth()->user();

            $locale = $user->locale ?? Cookie::get('locale', config('app.locale'));
            Cookie::queue('locale', $locale, 60 * 24 * 365);

            return $user->is_admin
                ? redirect()->to("/$locale/admin/dashboard")
                : redirect()->to("/$locale/");
        }

        return redirect()->route('login')->with('error', __('messages.invalid_credentials'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request)
    {
        $locale = auth()->user()->locale ?? Cookie::get('locale', config('app.locale'));

        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Cookie::queue('locale', $locale, 60 * 24 * 365);

        return redirect()->to("/$locale/");
    }
}
