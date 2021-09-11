<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanSkill extends Model
{
    use HasFactory;
    protected $fillable = ['executor_id','type','value'];
}
