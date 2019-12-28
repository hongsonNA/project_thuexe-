<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    //
    protected $table = 'targets';
    protected $fillable =
    [
        'vehicle_id',
        'user_id',
        'description',
        'status',
        'is_delete',
        'vehicle_registration_certificate',
        'other_targets',
        'start_date',
        'end_date',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
