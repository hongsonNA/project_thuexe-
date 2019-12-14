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
        'status',
        'image_news',
        'cate_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'cate_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'post_id');
    }
}
