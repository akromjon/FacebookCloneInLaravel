<?php

namespace App\requests;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table="requests";

    protected $fillable=
    [
        'user_id',
        'friend_id'        
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
