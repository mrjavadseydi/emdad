<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanMeta
 *
 * @property int $id
 * @property int $plan_id
 * @property string $type
 * @property string $value
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanMeta whereValue($value)
 * @mixin \Eloquent
 */
class PlanMeta extends Model
{
    use HasFactory;
    protected $guarded = [];

}
