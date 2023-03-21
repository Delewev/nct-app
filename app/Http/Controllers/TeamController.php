<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cheer()
    {
        $users = User::query()->where('team', '=', 'Другое')->get();
        $user = Auth::user();
        return view('team.cheer', compact('user', 'users'));
    }

    public function fa()
    {
        return view('team.fa', [
            'users' => User::query()->where('team', '=', 'Fenomen-A')->get(),
            'user' => Auth::user()]);
    }

    public function nct()
    {
        $users = User::query()->with('photos')->where('team', '=', 'NCT')->get();
        return view('team.nct', compact('users'), [

            'user' => Auth::user()
        ]);
    }

    public function zachet()
    {
        return view('team.zachet', [
            'users' => User::query()->where('team', '=', 'Zachet')->get(),
            'user' => Auth::user()]);
    }

    public function gfam()
    {
        return view('team.gfam', [
            'users' => User::query()->where('team', '=', 'G-FAME')->get(),
            'user' => Auth::user()]);
    }

    public function noname()
    {
        return view('team.no-name', [
            'users' => User::query()->where('team', '=', 'NO-NAME')->get(),
            'user' => Auth::user()]);
    }

    public function titans()
    {
        return view('team.titans', [
            'users' => User::query()->where('team', '=', 'Titans')->get(),
            'user' => Auth::user()]);
    }

    public function grand()
    {
        return view('team.grand', [
            'users' => User::query()->where('team', '=', 'Grand-Arena')->get(),
            'user' => Auth::user()]);
    }

    public function nolimit()
    {
        return view('team.nolimit', [
            'users' => User::query()->where('team', '=', 'No-Limit')->get(),
            'user' => Auth::user()]);
    }

    public function power()
    {
        return view('team.power', [
            'users' => User::query()->where('team', '=', 'Power')->get(),
            'user' => Auth::user()]);
    }

    public function destiny()
    {
        return view('team.destiny', [
            'users' => User::query()->where('team', '=', 'Destiny')->get(),
            'user' => Auth::user()]);
    }

    public function groove()
    {
        return view('team.groove', [
            'users' => User::query()->where('team', '=', 'Groove')->get(),
            'user' => Auth::user()]);
    }

    public function insight()
    {
        return view('team.insight', [
            'users' => User::query()->where('team', '=', 'Insight')->get(),
            'user' => Auth::user()]);
    }

    public function favorit()
    {
        return view('team.favorit', [
            'users' => User::query()->where('team', '=', 'Фаворит')->get(),
            'user' => Auth::user()]);
    }

    public function kodex()
    {
        return view('team.kodex', [
            'users' => User::query()->where('team', '=', 'Кодекс')->get(),
            'user' => Auth::user()]);
    }

    public function legion()
    {
        return view('team.legion', [
            'users' => User::query()->where('team', '=', 'LEGION')->get(),
            'user' => Auth::user()]);
    }

}
