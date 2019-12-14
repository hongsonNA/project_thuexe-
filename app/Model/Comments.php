<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    protected $fillable = ['content','user_id','post_id','vehicle_id','report_content','status'];

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'id');
    }
}
