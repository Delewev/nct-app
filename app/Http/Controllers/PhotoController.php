<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('news.index',['photo' => Photo::all()]);
    }

    public function create()
    {
        return view('news.create');
    }
    public function store(Request $request)
    {
        $user = $request->all();

        $filename = $user['image']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $user['image']->move(Storage::path('/public/image/news/').'origin/',$filename);

        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/image/news/').'origin/'.$filename);
        $thumbnail->fit(300, 300);
        $thumbnail->save(Storage::path('/public/image/news/').'thumbnail/'.$filename);

        //Сохраняем  в БД
        $user['image'] = $filename;
        $user = new Photo($user);
        $user->user_id = request()->user()->id;
        $user->save();

        return redirect()->route('news.index');
    }

    public function show()
    {
        $user = Auth::user();

        return view('menu.photos', [
            'user' => $user
        ]);
    }


}
