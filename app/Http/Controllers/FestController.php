<?php

namespace App\Http\Controllers;

use App\Http\Requests\FestRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FestController extends Controller

{

    public function __construct()
    {

    }

    public function index(){
        return view('fest');
    }

    public function getStore(){
        return view('feststore');
    }

    public function store(FestRequest $request){
        $editedUser = (array) json_decode($request->user);
        unset($editedUser['updated_at']);
        unset($editedUser['created_at']);
        $user = User::where('id', $editedUser['id'])->update((array) $editedUser);
        return $user;
    }
}
