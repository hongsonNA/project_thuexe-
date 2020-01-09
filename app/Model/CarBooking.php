<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    protected $table = "car_bookings";

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_date',
        'total',
        'status',
        ];
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'id');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id');
    }
}
