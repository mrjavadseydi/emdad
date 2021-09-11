<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanFund
 *
 * @property int $id
 * @property int $plan_id
 * @property string $plan_title
 * @property string $type
 * @property int $amount
 * @property string $resource
 * @property int $bank_id
 * @property int $employment
 * @property string $date
 * @property string $plan_code
 * @property string $summery
 * @property int $fund
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereFund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund wherePlanCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund wherePlanTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereResource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereSummery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanFund whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanFund extends Model
{
    use HasFactory;
    protected $guarded = [];

}
