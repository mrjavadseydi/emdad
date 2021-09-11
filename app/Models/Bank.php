<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bank
 *
 * @property int $id
 * @property string $title
 * @property int $city_id
 * @property int $state_id
 * @property string $address
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];
}
