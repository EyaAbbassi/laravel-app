<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
Route::get('/',[HomeController::class,'index']);

Route::post('/login',[UserController::class,'login']);

Route::view('/register','login');

Route::post('/register',[UserController::class,'register']);

Route::post('create',[UserController::class,'create'])->name('auth.create');




