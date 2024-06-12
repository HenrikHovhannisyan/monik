<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Phone;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8',
            'password_confirmation' => 'nullable|same:password',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $account = $user->account ?: new Account(['user_id' => $user->id]);
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->save();

        if ($request->filled('phone')) {
            $account->phones()->delete();
            foreach ($request->phone as $phone_number) {
                $account->phones()->create(['phone_number' => $phone_number]);
            }
        }

        return redirect()->back()->with('success', __('messages.data_successfully_updated'));
    }


}
