<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserOffice
 *
 * @property int $id
 * @property int $user_id
 * @property int $office_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Office $office
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOffice whereUserId($value)
 * @mixin \Eloquent
 */
class UserOffice extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','office_id'];
    public function user(){
      return  $this->belongsTo(User::class , 'user_id');
    }
    public function office(){
        return $this->belongsTo(Office::class, 'office_id');
    }
}
