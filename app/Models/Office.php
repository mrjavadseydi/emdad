<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Office
 *
 * @property int $id
 * @property int $province_id
 * @property int $city_id
 * @property int $state_id
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $phone
 * @property string $address_office
 * @property string $phone_office
 * @property string $boss_name
 * @property string $employment_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Province $province
 * @property-read \App\Models\State $state
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserOffice[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAddressOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereBossName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereEmploymentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office wherePhoneOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'province_id',
        'city_id',
        'state_id',
        'name',
        'code',
        'address',
        'phone',
        'address_office',
        'phone_office',
        'boss_name',
        'employment_name'
    ];

    public function province(){
        return $this->belongsTo(Province::class,'province_id');
    }

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }

    public function users(){
        return $this->hasMany(UserOffice::class,"office_id");
    }
}
