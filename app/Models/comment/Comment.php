<?php

namespace App\Models\comment;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $fillable=[
        'content',
        'user_id',
        'post_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\feed\Post');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
