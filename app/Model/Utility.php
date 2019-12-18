<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    //
    protected $table = 'utilitys';

    protected $fillable = [
        'harmonic',
        'locate',
        'bluetooth',
        'usb',
        'other_utility',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
