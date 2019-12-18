<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $table = 'comments';

    protected $fillable = ['content','user_id','post_id','vehicle_id','report_content','status'];

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Model\Post', 'post_id');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Model\managerList', 'vehicle_id');
    }
}
