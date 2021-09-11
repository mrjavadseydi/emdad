<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanFeasibility
 *
 * @property int $id
 * @property int $plan_id
 * @property string $check_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility whereCheckDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFeasibility whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanFeasibility extends Model
{
    use HasFactory;
    protected $guarded = [];

}
