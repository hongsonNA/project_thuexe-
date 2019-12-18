<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'identity_card',
        'phone',
        'address',
        'role',
    ];

    public function posts()
    {
        return $this->hasMany('App\Model\Post','id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'id', 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
