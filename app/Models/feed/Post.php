<?php

namespace App\Models\feed;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=
    [
        'content',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\comment\Comment')->orderBy('id','DESC');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\like\Like');
    }
    public function dislikes()
    {
        return $this->hasMany('App\Models\dislike\Dislike');
    }
    public function scopeGetorder($query)
    {
        return $query->orderBy('id', 'DESC');
    }
    public function scopeGetslug($query,$slug)
    {
        return $query->where('slug', '=', $slug);
    }
}
