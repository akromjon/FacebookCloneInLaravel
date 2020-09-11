<?php

namespace App\Models\friend;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table="friends";
    protected $fillable=
    [
        'user_id',
        'confirm'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function userFriend()
    {
        return $this->belongsTo('App\User','friend_id');
    }
}

