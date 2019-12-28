<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='images';
    protected $fillable =['vehicle_id','image_vehicle'];

    public function Vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
