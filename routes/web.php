<?php

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
Route::get('/my', [HomeController::class, 'my'])->name('my');
Route::get('/ments', [HomeController::class, 'ments'])->name('ments');
Route::get('/team', [HomeController::class, 'team'])->name('team');


Route::get('/team/nct', [TeamController::class, 'nct'])->name('nct');
Route::get('/team/fa', [TeamController::class, 'fa'])->name('fa');
Route::get('/team/zachet', [TeamController::class, 'zachet'])->name('zachet');
Route::get('/team/g-fam', [TeamController::class, 'gfam'])->name('gfam');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Route::post('/profile', 'ProfileController@update')->name('update.profile');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dataupdate', [SettingsController::class, 'dataupdate'])->name('dataupdate');
