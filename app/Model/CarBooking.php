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
}
