<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'summary',
        'content',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }
}
