<?php

namespace App\Models\request;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected $table="requests";

    protected $fillable=
    [
        'user_id',
        'friend_id'        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
 
}
