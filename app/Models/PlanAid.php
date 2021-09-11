<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanAid
 *
 * @property int $id
 * @property int $plan_id
 * @property int $employment
 * @property string|null $job_title
 * @property int|null $job_activity
 * @property int $have_place
 * @property int $home_employment
 * @property int|null $area
 * @property string|null $other_places
 * @property string|null $other_problems
 * @property int $force_insurance
 * @property string|null $insurance_code
 * @property string|null $insurance_expire
 * @property string|null $insurance_relation
 * @property string|null $covering_status
 * @property string|null $employer
 * @property string|null $tracking_number
 * @property int $merit
 * @property string|null $sign_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereCoveringStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereEmployer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereForceInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereHavePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereHomeEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereInsuranceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereInsuranceExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereInsuranceRelation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereJobActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereMerit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereOtherPlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereOtherProblems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereSignDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanAid whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlanAid extends Model
{
    use HasFactory;
    protected $guarded = [];

}
