<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "fathername",
        "birth",
        "degree",
        "user_type",
        "address",
        "distance",
        "mobile",
        "phone",
        "national_id",
        "role",
        "password",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];
    public function office()
    {
        return $this->hasOne(UserOffice::class, "user_id");
    }
    public function skill()
    {
        return $this->hasMany(PlanSkill::class, "executor_id");
    }
}
