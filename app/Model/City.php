<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'citys';
    protected  $fillable=['name'];
    public function districts()
    {
        return $this->hasMany('App\Model\District', 'city_id');
    }
}
