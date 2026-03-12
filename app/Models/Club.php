<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'club_name',
        'club_address'
    ];

    public function subscribers(){
        return $this->belongsToMany(Subscriber::class);
    }
}
