<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use function view;

class MessageController extends Controller
{
    public function index(){
        return view('menu.message');
    }
}
