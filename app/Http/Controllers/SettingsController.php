<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SettingsController extends BaseController
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
        $user->slug = $editedUser->slug;
        $user->lastname = $editedUser->lastname;
        $user->phone = $editedUser->phone;
        $user->person = $editedUser->person;
        $user->day = $editedUser->day;
        $user->month = $editedUser->month;
        $user->year = $editedUser->year;
        $user->city = $editedUser->city;
        $user->team = $editedUser->team;
        $user->cheer = $editedUser->cheer;
        $user->save();
        return $user;
    }

    public function delete($id){
        $user = Auth::find($id);
        $user->delete();
        return response([]);
    }

    public function users()
    {
        return view('team.nct', ['users' => User::all()]);
    }
    public function photos()
    {
        $photo = Photo::all();
        return view('menu.my', ['photo' => $photo]);
    }

    public function you(string $slug){
        return view('slug', ['user' => User::where('slug', $slug)->firstOrFail(),
            'users' => Auth::user()]);
    }
}
