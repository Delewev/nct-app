<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function fa()
    {
        return view('team.fa', ['users' => User::query()
            ->where('team', '=', 'Fenomen-A')->get()]);
    }

    public function nct()
    {
        return view('team.nct', ['users' => User::query()
            ->where('team', '=', 'NCT')->get()]);
    }
    public function zachet()
    {
        return view('team.zachet', ['users' => User::query()
            ->where('team', '=', 'Zachet')->get()]);
    }
    public function gfam()
    {
        return view('team.gfam', ['users' => User::query()
            ->where('team', '=', 'G-FAM')->get()]);
    }

}
