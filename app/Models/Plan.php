<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [ 'executor_id', 'user_id', 'group', 'title', 'type', 'source', 'bank', 'date', 'code', 'space', 'employment'];
    public function executer(){
        return $this->belongsTo(User::class,'executor_id');
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
