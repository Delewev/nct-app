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
        $user->person=$request->person;
        $user->day=$request->day;
        $user->month=$request->month;
        $user->year=$request->year;
        $user->team=$request->team;
        $user->save();
    }



}
