<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanMeta extends Model
{
    use HasFactory;
    protected $fillable = ['executor_id','plan_id','type','value','active'];
}
