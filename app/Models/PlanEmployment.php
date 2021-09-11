<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanEmployment
 *
 * @property int $id
 * @property int $plan_id
 * @property int $has_facility
 * @property string|null $job_title
 * @property int|null $amount
 * @property string $date
 * @property int $status
 * @property string $facility_type
 * @property string|null $reason_payment
 * @property string|null $other_services
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereFacilityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereHasFacility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereOtherServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereReasonPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanEmployment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanEmployment extends Model
{
    use HasFactory;
    protected $guarded = [];

}
