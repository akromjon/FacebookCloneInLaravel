<?php

namespace App\Models\like;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table="likes";

    protected $fillable=
    [
        'user_id',
        'post_id',
        'like'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\feed\Post');
    }
    
}
