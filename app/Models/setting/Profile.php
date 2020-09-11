<?php

namespace App\Models\setting;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table="profiles";
    protected $fillable=
    [
        'day',
        'month',
        'year',
        'city',
        'country',
        'information',
        'user_id'
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
