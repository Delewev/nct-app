<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});
//
Auth::routes();
Route::get('/home/settings', [SettingsController::class, 'index'])->name('settings');
Route::post('settings', [SettingsController::class, 'dataupdate'])->name('update.settings');
Route::get('/dataupdate', [HomeController::class, 'dataupdate'])->name('dataupdate');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/ments', [HomeController::class, 'ments'])->name('ments');
//Route::get('my', [HomeController::class, 'my'])->name('my');
Route::get('my/{slug?}', [HomeController::class, 'mys'])->name('slug');
Route::get('cheer/{slug?}', [SettingsController::class, 'you'])->name('you');
Route::get('/team', [HomeController::class, 'team'])->name('team');


// Photo
Route::resource('news', 'App\Http\Controllers\PhotoController');
Route::get('photo/{slug?}', [PhotoController::class, 'show'])->name('photo');
//Route::get('photo', function () {
//    $users = \App\Models\User::all();
//    foreach ($users as $user){
//        echo 'name:'.$user['name'].'<br>';
//        echo 'photo:';
//        foreach ($user->photos as $photo){
//            echo $photo['image'].'<br>';
//        }
//    }
//});


// Команды
Route::get('/team/cheer', [TeamController::class, 'cheer'])->name('cheer');
Route::get('/team/nct', [TeamController::class, 'nct'])->name('nct');
Route::get('/team/fa', [TeamController::class, 'fa'])->name('fa');
Route::get('/team/zachet', [TeamController::class, 'zachet'])->name('zachet');
Route::get('/team/g-fam', [TeamController::class, 'gfam'])->name('gfam');
Route::get('/team/no-name', [TeamController::class, 'noname'])->name('no-name');
Route::get('/team/titans', [TeamController::class, 'titans'])->name('titans');
Route::get('/team/grand-arena', [TeamController::class, 'grand'])->name('grand');
Route::get('/team/no-limit', [TeamController::class, 'nolimit'])->name('nolimit');
Route::get('/team/power', [TeamController::class, 'power'])->name('power');
Route::get('/team/destiny', [TeamController::class, 'destiny'])->name('destiny');
Route::get('/team/groove', [TeamController::class, 'groove'])->name('groove');
Route::get('/team/insight', [TeamController::class, 'insight'])->name('insight');
Route::get('/team/favorit', [TeamController::class, 'favorit'])->name('favorit');
Route::get('/team/kodex', [TeamController::class, 'kodex'])->name('kodex');
Route::get('/team/legion', [TeamController::class, 'legion'])->name('legion');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Route::post('/profile', 'ProfileController@update')->name('update.profile');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dataupdate', [SettingsController::class, 'dataupdate'])->name('dataupdate');
