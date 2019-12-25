<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModelVehicle extends Model
{
    protected $table = 'model_vehicles';

    protected $fillable = [
        'name',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
