<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('settings', ['user' => $user]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $user->lastname=$request->input('lastname');
        $user->firstname=$request->input('firstname');
        $user->phone=$request->input('phone');
        $user->person=$request->input('person');
        $user->day=$request->input('day');
        $user->month=$request->input('month');;
        $user->year=$request->input('year');;
        $user->team=$request->input('team');
        $user->save();
    }

    public function dataupdate(Request $request)
    {
        $editedUser = json_decode($request->user);
        $user = User::where('id',$editedUser->id)->first();
        $user->name = $editedUser->name;
        $user->lastname = $editedUser->lastname;
        $user->save();
        return $user;
    }



}
