<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\State;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function province(){
        return response()->json(Province::all());
    }
    public function state(Request $request){
        return response()->json(State::where('province_id',$request->id)->get());
    }
    public function city(Request $request){
        return response()->json(City::where('state_id',$request->id)->get());
    }

}
