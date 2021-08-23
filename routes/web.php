<?php

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

Route::view('/','login')->name('home');
Route::post('/login',[\App\Http\Controllers\auth\AuthController::class,'login'])->name('login');
Route::get('/logout',function (){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
Route::post("/province",[\App\Http\Controllers\PlaceController::class,'province'])->name('province');
Route::post('/state',[\App\Http\Controllers\PlaceController::class,'state'])->name('state');
Route::post('/city',[\App\Http\Controllers\PlaceController::class,'city'])->name('city');
