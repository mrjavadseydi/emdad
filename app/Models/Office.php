<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'province_id',
        'city_id',
        'state_id',
        'name',
        'code',
        'address',
        'phone',
        'address_office',
        'phone_office',
        'boss_name',
        'employment_name'
    ];

    public function province(){
        return $this->belongsTo(Province::class,'province_id');
    }

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }
}
