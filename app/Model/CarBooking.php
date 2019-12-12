<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    protected $table = "car_bookings";

    protected $fillable = ['
        user_id',
        'city_id',
        'district_id',
        'status',
        'start_date',
        'end_date',
        'vehicle_id',
        ];
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'id');
    }
    public function car_Booking()
    {
        return $this->belongsTo('App\Model\CarBooking', 'id', 'vehicle_id');
    }
}
