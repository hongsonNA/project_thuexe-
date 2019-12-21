<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='images';
    protected $fillable =['image_vehicle'];

    public function Vehicle()
    {
        return $this->hasMany(Vehicle::class, 'image_id');
    }
}
