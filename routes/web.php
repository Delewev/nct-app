<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


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

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');


Route::post('settings', [SettingsController::class, 'dataupdate'])->name('update.settings');
Route::get('/dataupdate', [HomeController::class, 'dataupdate'])->name('dataupdate');
Route::get('/ments', [HomeController::class, 'ments'])->name('ments');
Route::get('/ments/grup', [HomeController::class, 'grup'])->name('grup');


Route::get('my', [HomeController::class, 'my'])->name('my');
Route::get('/my/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('cheer/{slug?}', [SettingsController::class, 'you'])->name('you');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/message', [MessageController::class, 'index'])->name('message');

Route::get('/fest', [FestController::class, 'index'])->name('fest.index')->middleware('auth');


// Photo
Route::resource('news', 'App\Http\Controllers\PhotoController');
Route::get('photo', [PhotoController::class, 'show'])->name('photo');
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
Route::prefix('team')->group(function (){
    Route::get('cheer', [TeamController::class, 'cheer'])->name('cheer');
    Route::get('nct', [TeamController::class, 'nct'])->name('nct');
    Route::get('fa', [TeamController::class, 'fa'])->name('fa');
    Route::get('zachet', [TeamController::class, 'zachet'])->name('zachet');
    Route::get('g-fam', [TeamController::class, 'gfam'])->name('gfam');
    Route::get('no-name', [TeamController::class, 'noname'])->name('no-name');
    Route::get('titans', [TeamController::class, 'titans'])->name('titans');
    Route::get('grand-arena', [TeamController::class, 'grand'])->name('grand');
    Route::get('no-limit', [TeamController::class, 'nolimit'])->name('nolimit');
    Route::get('power', [TeamController::class, 'power'])->name('power');
    Route::get('destiny', [TeamController::class, 'destiny'])->name('destiny');
    Route::get('groove', [TeamController::class, 'groove'])->name('groove');
    Route::get('insight', [TeamController::class, 'insight'])->name('insight');
    Route::get('favorit', [TeamController::class, 'favorit'])->name('favorit');
    Route::get('kodex', [TeamController::class, 'kodex'])->name('kodex');
    Route::get('legion', [TeamController::class, 'legion'])->name('legion');
});



Route::get('/', function () {
    return view('home');
});


Auth::routes();
Route::get('/dataupdate', [SettingsController::class, 'dataupdate'])->name('dataupdate');
Route::delete('/delete/{id}', [SettingsController::class, 'delete'])->name('delete');

