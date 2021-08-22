<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(Request  $request){
        $user = User::where('national_id',$request->national_id)->first();
        if($user && \Hash::check($request->password, $user->password)){
            \Auth::login($user,(isset($request->remember)));
            return  redirect(route('panel'));
        }else{
            Alert::toast('ورود ناموفق', 'warning');
        }

        return back();
    }
}
