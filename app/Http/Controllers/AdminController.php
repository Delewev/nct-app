<?php

namespace App\Http\Controllers;

use App\Models\FestGrup;
use App\Models\FestPart;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::all();
        $festgrups = FestGrup::all();
        $festparts = FestPart::all();
        return view('admin.admin', compact('users', 'festgrups', 'festparts'));
    }
}
