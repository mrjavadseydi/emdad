<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [ 'executor_id', 'group', 'title', 'type', 'source', 'bank', 'date', 'code', 'space', 'employment'];
    public function executer(){
        return $this->belongsTo(User::class,'executor_id');
    }

    public function meta(){
        return $this->hasMany(PlanMeta::class,'plan_id');
    }
    public function fund(){
        return $this->hasOne(PlanFund::class,'plan_id');
    }
}
