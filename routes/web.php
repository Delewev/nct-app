<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
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
Route::post('dataupdate', [SettingsController::class, 'dataupdate'])->name('update.settings');
Route::get('/dataupte', [HomeController::class, 'dataupdate'])->name('dataupdate');
Route::get('/my/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/dataupdate', [SettingsController::class, 'dataupdate'])->name('dataupdate');
Route::delete('/delete/{id}', [SettingsController::class, 'delete'])->name('delete');
Route::get('/fest', [FestController::class, 'index'])->name('fest.index');

