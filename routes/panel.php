<?php
Route::view('/','index')->name('panel');
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('office',\App\Http\Controllers\OfficeController::class);
Route::get('office/users/{id}',[\App\Http\Controllers\OfficeController::class,'showOfficeUsers'])->name('office.users');
Route::post('office/users/{id}',[\App\Http\Controllers\OfficeController::class,'saveOfficeUsers']);
Route::resource('plan',\App\Http\Controllers\PlanController::class);
Route::post('skill/list',[\App\Http\Controllers\PlanController::class,'skills']);
Route::get('acceptMeta/{id}',[\App\Http\Controllers\PlanController::class,'PlanMeta'])->name('plan.meta.active');
