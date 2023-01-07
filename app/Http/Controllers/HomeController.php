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
        return view('home',[
            'user' => $user
        ]);
    }
    public function my()
    {
        $user = Auth::user();
        return view('my',[
            'user' => $user
        ]);
    }
    public function ments()
    {
        $user = Auth::user();
        return view('ments',[
            'user' => $user
        ]);
    }
    public function team()
    {
        $user = Auth::user();
        return view('team',[
            'user' => $user
        ]);
    }
    public function nct()
    {
        $user = Auth::user();
        return view('team.nct',[
            'user' => $user
        ]);
    }

    public function upload(Request $request )
    {
        $path = $request->file('image')->store('uploads', 'public');
        return view('my', ['path' => $path ]);
    }
}
