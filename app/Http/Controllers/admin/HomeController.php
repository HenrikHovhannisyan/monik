<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $usersCount = count(User::all());
        return view('admin.index', compact('usersCount'));
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function users()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }

}
