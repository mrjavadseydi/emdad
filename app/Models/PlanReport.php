<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanReport
 *
 * @property int $id
 * @property int $plan_id
 * @property string $report
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport whereReport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanReport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanReport extends Model
{
    use HasFactory;
    protected $guarded = [];

}
