<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanFund extends Model
{
    use HasFactory;
    protected $fillable = ['executer_id','plan_id','executer_fund','summery','fund','executer_summery'];
}
