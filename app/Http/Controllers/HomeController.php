<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;

;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function my()
    {
        $user = Auth::user();
        return view('menu.my', [
            'user' => $user,
        ]);
    }
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        return view('home', [
            'user' => $user, 'users' => $users
        ]);
    }

}
