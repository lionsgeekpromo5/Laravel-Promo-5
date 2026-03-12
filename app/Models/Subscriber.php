<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'subscriber_name',
        'subscriber_city',
        'subscriber_age'
    ];

    public function clubs(){
        return $this->belongsToMany(Club::class);
    }
}
