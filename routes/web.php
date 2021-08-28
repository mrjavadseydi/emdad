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
Route::get('/login',function (){
    return redirect(\route('home'));
});
Route::post('/login',[\App\Http\Controllers\auth\AuthController::class,'login'])->name('login');
Route::get('/logout',function (){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
Route::post("/province",[\App\Http\Controllers\PlaceController::class,'province'])->name('province');
Route::post('/state',[\App\Http\Controllers\PlaceController::class,'state'])->name('state');
Route::post('/city',[\App\Http\Controllers\PlaceController::class,'city'])->name('city');

Route::get('create',function (){
    $faker =\Faker\Factory::create();
    $user = ['مددجو','کارمند شرکت','کارمند امداد'];
    \App\Models\User::create([
        'name'=>$faker->name(),
        'fathername'=>$faker->name(),
        'birth'=>$faker->date(),
        'degree'=>$faker->word,
        'user_type'=>$user[rand(0,2)],
        'address'=>$faker->sentence,
        'distance'=>$faker->numberBetween(1,100),
        'mobile'=>$faker->phoneNumber,
        'phone'=>$faker->phoneNumber,
        'national_id'=>"0640732992",
        'role'=>"user",
        "password"=>bcrypt(123)
    ]);
    for($i=0;$i<100;$i++){
        \App\Models\User::create([
            'name'=>$faker->name(),
            'fathername'=>$faker->name(),
            'birth'=>$faker->date(),
            'degree'=>$faker->word,
            'user_type'=>$user[rand(0,2)],
            'address'=>$faker->sentence,
            'distance'=>$faker->numberBetween(1,100),
            'mobile'=>$faker->phoneNumber,
            'phone'=>$faker->phoneNumber,
            'national_id'=>$faker->numberBetween(111111111,99999999999),
            'role'=>"user",
            "password"=>bcrypt($faker->password)
        ]);
    }
});
Route::get("clear",function (){
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
});
