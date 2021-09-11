<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanProgress
 *
 * @property int $id
 * @property int $plan_id
 * @property int|null $from_step
 * @property int $accept
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereFromStep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanProgress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanProgress extends Model
{
    use HasFactory;
    protected $guarded = [];

}
