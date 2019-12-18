<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    protected $table = 'gears';

    protected $fillable = [
        'name',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
