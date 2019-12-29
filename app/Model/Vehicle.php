<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'city_id',
        'user_id',
        'target_id',
        'district_id',
        'utility',
        'procedure',
        'gear',
        'model_id',
        'license_plate',
        'name',
        'price',
        'seat',
        'capacity',
        'description',
        'address',
        'view',
        'status',
    ];

    public function modelVehicles()
    {
        return $this->hasMany(ModelVehicle::class, 'model_id');
    }
    public function carbookings()
    {
        return $this->hasMany(Vehicle::class, 'vehicle_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function target()
    {
        return $this->belongsTo(Target::class, 'id');
    }

    public function images()
    {
        return $this->belongsTo(Image::class);
    }

}
