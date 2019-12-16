<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    public function city()
    {
        return $this->belongsTo('App\Model\City', 'city_id');
    }
}
