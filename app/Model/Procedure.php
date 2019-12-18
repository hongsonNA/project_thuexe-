<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $table = "procedures";


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
