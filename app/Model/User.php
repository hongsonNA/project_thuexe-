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
        return $this->hasMany('App\Model\Post', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'user_id');
    }
}
