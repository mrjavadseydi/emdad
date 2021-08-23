<?php
Route::view('/','index')->name('panel');
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('office',\App\Http\Controllers\OfficeController::class);
