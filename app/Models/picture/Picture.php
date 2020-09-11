<?php

namespace App\Models\picture;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table="pictures";
    protected $fillable=
    [
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
