<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class managerList extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'name',
        'seat',
        'description',
        'address',
        'cate_id',
        'price',
        'model_id',
        'city_id',
        'district_id',
        'status'
    ];

    public function CarBooking()
    {
        return $this->hasMany('App\Model\CarBooking', 'id', 'vehicle_id');
    }

    public function modelCar()
    {
        return $this->belongsTo('App\Model\ModelCar', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'id');
    }
}
