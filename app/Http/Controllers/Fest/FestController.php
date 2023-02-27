<?php

namespace App\Http\Controllers\Fest;

use App\Http\Controllers\Controller;

class FestController extends Controller
{
    public function index(){
        return view('menu.Ments.festall');
    }
}
