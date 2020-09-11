<?php

namespace App\Models\dislike;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    protected $table="dislikes";

    protected $fillable=
    [
        'user_id',
        'post_id',
        'dislike'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\feed\Post');
    }
    
}
