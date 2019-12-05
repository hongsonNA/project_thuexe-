<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    protected $table = 'models';

    protected $fillable=['name'];
}
