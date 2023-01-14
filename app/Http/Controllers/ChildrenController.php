<?php

namespace App\Http\Controllers;

use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function create(Request $request)
    {
        $children = new Children();
        $children->fill = $request->input('full');
        $children->day = $request->input('day');
        $children->uni = $request->input('uni');
        $children->tele = $request->input('tele');
        $children->telegram = $request->input('telegram');
        $children->dsc = $request->input('dsc');
        $children->save();
    }
}
