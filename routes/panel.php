<?php
Route::view("/", "index")->name("panel");
Route::resource("users", \App\Http\Controllers\UserController::class);
Route::resource("office", \App\Http\Controllers\OfficeController::class);
Route::resource("bank", \App\Http\Controllers\BankController::class);
Route::resource("plan", \App\Http\Controllers\PlanController::class);
Route::get("bank/users/{id}", [
    \App\Http\Controllers\BankController::class,
    "users",
])->name("bank.users");
Route::get("office/users/{id}", [
    \App\Http\Controllers\OfficeController::class,
    "showOfficeUsers",
])->name("office.users");

Route::post("office/users/{id}", [
    \App\Http\Controllers\OfficeController::class,
    "saveOfficeUsers",
]);
Route::get("/plan/print/{id}", [
    \App\Http\Controllers\PlanController::class,
    "print",
])->name("plan.print");
Route::post("skill/list", [
    \App\Http\Controllers\PlanController::class,
    "skills",
]);
Route::get("acceptMeta/{id}", [
    \App\Http\Controllers\PlanController::class,
    "PlanMeta",
])->name("plan.meta.active");
Route::get("report", [
    \App\Http\Controllers\ReportController::class,
    "index",
])->name("report.index");
