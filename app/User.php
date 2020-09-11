<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'name','username', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany('App\Models\feed\Post')->orderBy('id','DESC');
    }
    public function friends()
    {
        return $this->hasMany('App\Models\friend\Friend','friend_id')->orderBy('id','DESC');
    }
    public function allFriends()
    {
        return $this->hasMany('App\Models\friend\Friend','user_id')->orderBy('id','DESC');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\comment\Comment');
    }
    public function requests()
    {
        return $this->hasMany('App\Models\request\FriendRequest','friend_id')->orderBy('id','DESC');
    }
    public function pictures()
    {
        return $this->hasMany('App\Models\picture\Picture','user_id');
    }
    public function profile()
    {
        return $this->hasOne('App\Models\setting\Profile');
    }
    public function messages()
    {
        return $this->hasMany('App\Models\message\Message','user_id')->orderBy('id','DESC');
    }
    public function FriendMessages()
    {
        return $this->hasMany('App\Models\message\Message','friend_id')->orderBy('id','DESC');
    }
    public function scopeFriend($query,$username)
    {
        return $query->where('username', '=', $username);
    }

    public function scopeGetorder($query)
    {
        return $query->orderBy('id', 'DESC');
    }
}
