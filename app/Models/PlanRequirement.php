<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanRequirement
 *
 * @property int $id
 * @property int $plan_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanRequirement whereValue($value)
 * @mixin \Eloquent
 */
class PlanRequirement extends Model
{
    use HasFactory;
    protected $guarded = [];

}
