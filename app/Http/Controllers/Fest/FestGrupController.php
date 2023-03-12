<?php

namespace App\Http\Controllers\Fest;

use App\Http\Controllers\Controller;
use App\Models\FestGrup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function request;
use function view;

class FestGrupController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('menu.Ments.grup', compact('user'));
    }

    public function store(Request $request){
        $fest = new FestGrup();
        $fest->name = $request->input('name');
        $fest->lastname = $request->input('lastname');
        $fest->phone = $request->input('phone');
        $fest->telegafets = $request->input('telegafets');
        $fest->fut = $request->input('fut');
        $fest->city = $request->input('city');
        $fest->team = $request->input('team');
        $fest->titelfest = $request->input('titelfest');
        $fest->namecoch = $request->input('namecoch');
        $fest->phonecoch = $request->input('phonecoch');
        $fest->user_id = request()->user()->id;
        $fest->save();
        return redirect()->route('festall.index');
    }
}
