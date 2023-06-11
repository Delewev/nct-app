<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(TeamRequest $request){
        $data = $request->validated();
        $name = $data['name'];
        $city = $data['city'];
        $images = $data['images'];
        foreach ($images as $image){
            $names = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
           $filePath = Storage::disk('public')->putFileAs('/teams/images', $image, $names);
          $teams = Team::create([
               'logo' => $filePath,
               'link' => url('/storage/' . $filePath),
               'name' => $name,
               'city' => $city,
           ]);
        }
        return $teams;
    }

}
