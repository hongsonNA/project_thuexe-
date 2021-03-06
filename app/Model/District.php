<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = ['name', 'status'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'district_id');
    }
}
