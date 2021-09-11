<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Plan
 *
 * @property int $id
 * @property int $office_id
 * @property string $name
 * @property string $birth
 * @property string $marriage
 * @property int $family
 * @property string $degree
 * @property string $support_type
 * @property string $address
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $executer
 * @property-read \App\Models\PlanFund|null $fund
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PlanMeta[] $meta
 * @property-read int|null $meta_count
 * @method static \Illuminate\Database\Eloquent\Builder|Plan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereMarriage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereSupportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
