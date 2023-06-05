<?php

namespace App\Http\Controllers;

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
}
