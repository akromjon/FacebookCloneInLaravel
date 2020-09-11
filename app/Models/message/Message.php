<?php

namespace App\Models\message;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table="messages";
    protected $fillable=
    ['user_id','friend_id','message'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeMessage($query)
    {
        return $query->where('user_id','=',Auth::user()->id);
    }
     
    
    public function scopeGetorder($query)
    {
        return $query->orderBy('id', 'DESC');
    }
       
    
}
