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

    public function dataupdate(Request $request)
    {
        $editedUser = json_decode($request->user);
        $user = User::where('id', $editedUser->id)->first();
        $user->name = $editedUser->name;
        $user->lastname = $editedUser->lastname;
        $user->phone = $editedUser->phone;
        $user->person = $editedUser->person;
        $user->day = $editedUser->day;
        $user->month = $editedUser->month;
        $user->year = $editedUser->year;
        $user->save();
        return $user;
    }


}
