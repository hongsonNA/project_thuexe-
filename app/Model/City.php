<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'citys';
    protected  $fillable=['name'];

    public function districts()
    {
        return $this->hasMany(District::class, 'city_id');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'city_id');
    }

}
