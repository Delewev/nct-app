<?php

namespace App\Http\Controllers\Fest;

use App\Http\Controllers\Controller;
use App\Models\FestGrup;
use App\Models\User;

class FestController extends Controller
{
    public function index()
    {
        $users = User::with('festsgrup')->get();
        return view('menu.Ments.festall', compact('users'));
    }




}
