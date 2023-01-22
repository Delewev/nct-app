<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller

{
    public function slug(string $slug)
    {
        $person = User::where('slug', $slug)->first();
        return $person;
    }

    public function set(){
        $person = User::all();
        return $person;
    }

}
