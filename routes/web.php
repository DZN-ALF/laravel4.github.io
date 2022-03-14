<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManualController;
use app\Http\Controllers\LolController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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


Route::get('/', function () {
    return view('home');
});
Route::resource('pesan', ManualController::class);
Route::resource('login', LOlController::class);