<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'email',
        'identity_card',
        'phone',
        'address',
        'password',
        'role',
    ];

    public function posts()
    {
        return $this->hasMany('App\Model\Post', 'user_id');
    }
}
