<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanPurchase
 *
 * @property int $id
 * @property int $plan_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlanPurchase whereValue($value)
 * @mixin \Eloquent
 */
class PlanPurchase extends Model
{
    use HasFactory;
    protected $guarded = [];

}
