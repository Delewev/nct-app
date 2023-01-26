<?php

namespace App\Http\Controllers;

use App\Models\Fest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FestController extends Controller
{
    public function create(Request $request)
    {

        $fest = new Fest();
        $fest->name = $request->input('name');
        $fest->lastname = $request->input('lastname');
        $fest->phone = $request->input('phone');
        $fest->telegafets = $request->input('telegafets');
        $fest->fut = $request->input('fut');
        $fest->category = $request->input('category');
        $fest->city = $request->input('city');
        $fest->team = $request->input('team');
        $fest->titelfest = $request->input('titelfest');
        $fest->namecoch = $request->input('namecoch');
        $fest->phonecoch = $request->input('phonecoch');
        $fest->phonecoch = $request->input('phonecoch');
        $fest->user_id = request()->user()->id;
        $fest->save();
        return $fest;
    }


    public function index()
    {
        return view('fest', [
            'fest' => Fest::all(),
            'users' => User::all(),
            'user' => Auth::user()]);
    }
    public function set(){

    }


}
