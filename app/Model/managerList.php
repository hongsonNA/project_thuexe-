<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class managerList extends Model
{
    protected $table='vehicles';

    protected $fillable=[
        'name',
        'user_id',
        'seat',
        'description',
        'cate_id',
        'price',
        'model_id',
        'city_id',
        'district_id',
    ];
}
