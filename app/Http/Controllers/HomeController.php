<?php

namespace App\Http\Controllers;

use App\Models\User;;
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
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function dataupdate(Request $request)
    {
        $editedUser = json_decode($request->user);
        $user = User::where('id',$editedUser->id)->first();
        $user->name = $editedUser->name;
        $user->save();
        return $user;
    }
}
